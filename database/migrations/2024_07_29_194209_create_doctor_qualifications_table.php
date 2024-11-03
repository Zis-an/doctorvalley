<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Doctor\Enums\DoctorQualificationEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('doctor_qualifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(DoctorQualificationEnum::DOCTOR_ID);
            $table->string(DoctorQualificationEnum::DEGREE_ID);
            $table->unsignedBigInteger(DoctorQualificationEnum::INSTITUTE_ID);
            $table->string(DoctorQualificationEnum::COURSE_MAJOR);
            $table->string(DoctorQualificationEnum::INSTITUTE_NAME)->nullable();
            $table->date(DoctorQualificationEnum::FROM_DATE);
            $table->date(DoctorQualificationEnum::TO_DATE)->nullable();
            $table->boolean(DoctorQualificationEnum::IS_CURRENT)->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_qualifications');
    }
};
