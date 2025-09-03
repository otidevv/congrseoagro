<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SubmissionController extends Controller
{
    public function index()
    {
        $submissions = Auth::user()->submissions()->latest()->get();
        return view('submissions.index', compact('submissions'));
    }

    public function create()
    {
        return view('envio-resumenes');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'abstract' => 'required|string|max:2000',
            'pdf_files' => 'required|array|min:1|max:5',
            'pdf_files.*' => 'file|mimes:pdf|max:10240', // 10MB max por archivo
        ], [
            'title.required' => 'El título es obligatorio.',
            'abstract.required' => 'El resumen es obligatorio.',
            'abstract.max' => 'El resumen no puede exceder 2000 caracteres.',
            'pdf_files.required' => 'Debe subir al menos un archivo PDF.',
            'pdf_files.min' => 'Debe subir al menos un archivo PDF.',
            'pdf_files.max' => 'Puede subir máximo 5 archivos PDF.',
            'pdf_files.*.mimes' => 'Todos los archivos deben ser PDF.',
            'pdf_files.*.max' => 'Cada archivo PDF no puede ser mayor a 10MB.',
        ]);

        try {
            // Crear directorio único para este usuario si no existe
            $userDir = 'submissions/' . Auth::id();
            $pdfFilesArray = [];
            
            // Subir múltiples archivos PDF
            foreach ($request->file('pdf_files') as $index => $pdfFile) {
                $fileName = time() . '_' . $index . '_' . Str::slug($request->title) . '.pdf';
                $filePath = $pdfFile->storeAs($userDir, $fileName, 'public');
                
                $pdfFilesArray[] = [
                    'original_name' => $pdfFile->getClientOriginalName(),
                    'stored_path' => $filePath,
                    'size' => $pdfFile->getSize(),
                    'uploaded_at' => now()->toISOString(),
                ];
            }

            // Crear registro en la base de datos
            Submission::create([
                'user_id' => Auth::id(),
                'title' => $request->title,
                'abstract' => $request->abstract,
                'pdf_files' => $pdfFilesArray,
            ]);

            return redirect()->route('submissions.index')->with('success', 'Tu trabajo ha sido enviado exitosamente. Se han subido ' . count($pdfFilesArray) . ' archivos PDF.');

        } catch (\Exception $e) {
            return back()->with('error', 'Ocurrió un error al subir los archivos. Por favor, intenta nuevamente.')->withInput();
        }
    }

    public function show(Submission $submission)
    {
        // Verificar que el usuario sea dueño de la submission
        if ($submission->user_id !== Auth::id()) {
            abort(403, 'No tienes permiso para ver este trabajo.');
        }

        return view('submissions.show', compact('submission'));
    }

    public function downloadFile(Submission $submission, $fileIndex)
    {
        // Verificar que el usuario sea dueño de la submission
        if ($submission->user_id !== Auth::id()) {
            abort(403, 'No tienes permiso para descargar este archivo.');
        }

        $pdfFiles = $submission->pdf_files;
        
        if (!is_array($pdfFiles) || !isset($pdfFiles[$fileIndex])) {
            abort(404, 'Archivo no encontrado.');
        }

        $fileInfo = $pdfFiles[$fileIndex];
        $filePath = $fileInfo['stored_path'];
        $originalName = $fileInfo['original_name'] ?? 'archivo_' . ($fileIndex + 1) . '.pdf';

        if (!Storage::disk('public')->exists($filePath)) {
            abort(404, 'Archivo no encontrado en el almacenamiento.');
        }

        return Storage::disk('public')->download($filePath, $originalName);
    }
}