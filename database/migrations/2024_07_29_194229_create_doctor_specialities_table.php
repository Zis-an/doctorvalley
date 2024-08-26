<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Doctor\Enums\DoctorSpecialityEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('doctor_specialities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(DoctorSpecialityEnum::DOCTOR_ID);
            $table->unsignedBigInteger(DoctorSpecialityEnum::DOCTOR_SPECIALITY_ID);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_specialities');
    }
};
