<?php

namespace App\Providers;

use App\Models\Project;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        View::composer('*', function ($view) {
            $allMenuProjects = Project::where('is_active', true)
                ->where('is_menu', true)
                ->orderBy('sort_order')
                ->get();

            $allMenuProjects->each(function ($item) use ($allMenuProjects) {
                $item->setRelation('children', $allMenuProjects->where('parent_id', $item->id));
            });

            $momentProjects = $allMenuProjects->filter(function ($project) use ($allMenuProjects) {
                return is_null($project->parent_id) || !$allMenuProjects->contains('id', $project->parent_id);
            });

            $view->with('momentProjects', $momentProjects);
        });
    }
}
