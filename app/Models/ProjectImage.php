<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

class ProjectImage extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function booted()
    {
        static::saved(function ($projectImage) {
            if ($projectImage->image_path) {
                $paths = is_array($projectImage->image_path) ? $projectImage->image_path : [$projectImage->image_path];
    
                foreach ($paths as $path) {
                    $fullPath = storage_path('app/public/' . $path);
                    if (file_exists($fullPath)) {
                        ImageOptimizer::optimize($fullPath);
                    }
                }
            }
        });
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
