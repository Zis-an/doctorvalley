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
        Schema::create('chamber_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('chamber_id');
            $table->unsignedBigInteger('division_id');
            $table->unsignedBigInteger('district_id');
            $table->unsignedBigInteger('thana_id');
            $table->text('chamber_address')->nullable();
            $table->longText('chamber_description')->nullable();
            $table->text('fb_link')->nullable();
            $table->text('twitter_link')->nullable();
            $table->text('youtube_link')->nullable();
            $table->text('linkedin_link')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chamber_details');
    }
};
