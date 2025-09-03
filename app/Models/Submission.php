<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Submission extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'abstract',
        'pdf_files',
        'status',
        'review_comments',
    ];

    protected $casts = [
        'pdf_files' => 'array',
        'status' => 'string',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getPdfFilesCountAttribute(): int
    {
        return is_array($this->pdf_files) ? count($this->pdf_files) : 0;
    }

    public function getStatusLabelAttribute(): string
    {
        $statuses = [
            'pending' => 'Pendiente de Revisión',
            'accepted' => 'Aceptado',
            'rejected' => 'Rechazado',
        ];

        return $statuses[$this->status] ?? 'Estado desconocido';
    }
}