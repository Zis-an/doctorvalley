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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->text('blog_title');
            $table->text('thumb_path');
            $table->longText('description');
            $table->longText('blog_tags')->nullable();
            // $table->morphs('authorable');
            $table->unsignedBigInteger('view')->nullable();
            $table->unsignedBigInteger('share')->nullable();
            $table->longText('meta_keys')->nullable();
            $table->longText('meta_description')->nullable();
            $table->boolean('status')->default(config('global.status.inactive'));
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
