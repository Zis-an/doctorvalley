<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Feedback\Enums\FeedbackEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->id();
            $table->string(FeedbackEnum::FEEDBACK_TYPE);
            $table->text(FeedbackEnum::FEEDBACK_TEXT);
            $table->unsignedBigInteger(FeedbackEnum::FEEDBACKABLE_ID)->nullable();
            $table->string(FeedbackEnum::FEEDBACKABLE_CLASS);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedbacks');
    }
};
