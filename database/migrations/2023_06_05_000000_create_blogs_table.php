<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Blog\Enums\BlogEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string(BlogEnum::BLOG_TITLE);
            $table->string(BlogEnum::BLOG_THUMB)->nullable();
            $table->text(BlogEnum::BLOG_DESC)->nullable();

            $table->string(BlogEnum::BLOG_TAGS)->nullable();

            $table->morphs('authorable');

            $table->unsignedBigInteger(BlogEnum::BLOG_TOTAL_VIEW)->nullable();
            $table->unsignedBigInteger(BlogEnum::BLOG_TOTAL_SHARE)->nullable();

            $table->text(BlogEnum::BLOG_META_KEYS)->nullable();
            $table->longText(BlogEnum::BLOG_META_DESC)->nullable();

            $table->boolean(BlogEnum::FEATURED_BLOG)->nullable()->default(false);

            $table->boolean(BlogEnum::BLOG_STATUS)->default(config('global.status.inactive'));
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
