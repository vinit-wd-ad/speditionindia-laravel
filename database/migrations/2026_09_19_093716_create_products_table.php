<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')
                ->nullable()
                ->constrained('projects')
                ->nullOnDelete();

            $table->string('name');
            $table->string('slug')->unique();

            // Filament Builder (Custom Styled Blocks/Content)
            $table->json('content')->nullable();

            $table->string('featured_image')->nullable();

            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->boolean('has_content')->default(false);
            $table->boolean('is_menu')->default(false);

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('project_images', function (Blueprint $table) {
            $table->id();

            $table->foreignId('project_id')
                ->constrained('projects')
                ->cascadeOnDelete();

            $table->string('image_path');
            $table->string('caption')->nullable();
            $table->integer('sort_order')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_images');
        Schema::dropIfExists('projects');
    }
};
