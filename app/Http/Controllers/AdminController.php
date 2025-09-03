<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard()
    {
        $stats = [
            'total_submissions' => Submission::count(),
            'pending_submissions' => Submission::where('status', 'pending')->count(),
            'accepted_submissions' => Submission::where('status', 'accepted')->count(),
            'rejected_submissions' => Submission::where('status', 'rejected')->count(),
            'total_users' => User::where('is_admin', false)->count(),
            'total_pdf_files' => Submission::whereNotNull('pdf_files')->get()->sum(function($submission) {
                return is_array($submission->pdf_files) ? count($submission->pdf_files) : 0;
            }),
        ];

        $recent_submissions = Submission::with('user')->latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recent_submissions'));
    }

    public function submissions(Request $request)
    {
        $query = Submission::with('user');

        // Filtros
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('abstract', 'like', "%{$search}%")
                  ->orWhereHas('user', function($userQuery) use ($search) {
                      $userQuery->where('name', 'like', "%{$search}%")
                               ->orWhere('email', 'like', "%{$search}%");
                  });
            });
        }

        $submissions = $query->latest()->paginate(10);

        return view('admin.submissions.index', compact('submissions'));
    }

    public function showSubmission(Submission $submission)
    {
        $submission->load('user');
        return view('admin.submissions.show', compact('submission'));
    }

    public function updateSubmissionStatus(Request $request, Submission $submission)
    {
        $request->validate([
            'status' => 'required|in:pending,accepted,rejected',
            'review_comments' => 'nullable|string|max:1000',
        ]);

        $submission->update([
            'status' => $request->status,
            'review_comments' => $request->review_comments,
        ]);

        return back()->with('success', 'Estado del trabajo actualizado correctamente.');
    }

    public function downloadSubmissionFile(Submission $submission, $fileIndex)
    {
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

    public function deleteSubmission(Submission $submission)
    {
        // Eliminar archivos físicos
        if ($submission->pdf_files && is_array($submission->pdf_files)) {
            foreach ($submission->pdf_files as $file) {
                if (isset($file['stored_path']) && Storage::disk('public')->exists($file['stored_path'])) {
                    Storage::disk('public')->delete($file['stored_path']);
                }
            }
        }

        $submission->delete();

        return redirect()->route('admin.submissions')->with('success', 'Trabajo eliminado correctamente.');
    }

    public function users(Request $request)
    {
        $query = User::where('is_admin', false)->withCount('submissions');

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('university', 'like', "%{$search}%")
                  ->orWhere('document_number', 'like', "%{$search}%");
            });
        }

        $users = $query->latest()->paginate(15);

        return view('admin.users.index', compact('users'));
    }

    public function showUser(User $user)
    {
        $user->load('submissions');
        return view('admin.users.show', compact('user'));
    }
}