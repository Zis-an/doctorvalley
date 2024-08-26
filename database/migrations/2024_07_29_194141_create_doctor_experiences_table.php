<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Doctor\Enums\DoctorExperienceEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('doctor_experiences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(DoctorExperienceEnum::DOCTOR_ID);
            $table->string(DoctorExperienceEnum::DOCTOR_ORG_NAME);
            $table->string(DoctorExperienceEnum::DOCTOR_DESIGNATION);
            $table->longText(DoctorExperienceEnum::DOCTOR_ORG_ADDRESS);
            $table->date(DoctorExperienceEnum::FROM_DATE);
            $table->date(DoctorExperienceEnum::TO_DATE);
            $table->boolean(DoctorExperienceEnum::IS_CURRENT)->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_experiences');
    }
};
