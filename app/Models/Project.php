<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'content' => 'array',
        'is_active' => 'boolean',
    ];

    protected static function booted()
    {
        static::saved(function ($project) {
            if ($project->featured_image) {
                $fullPath = storage_path('app/public/' . $project->featured_image);

                if (file_exists($fullPath)) {
                    ImageOptimizer::optimize($fullPath);
                }
            }
        });
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Project::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(Project::class, 'parent_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProjectImage::class)->orderBy('sort_order', 'asc');
    }

    public function getAllNestedImages()
    {
        $images = collect();
        $images = $images->concat($this->images);

        foreach ($this->children as $subChild) {
            $images = $images->concat($subChild->getAllNestedImages());
        }

        return $images->unique('id')->take(6);
    }
}
