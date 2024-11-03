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
        Schema::table(DoctorExperienceEnum::DB_TABLE, function (Blueprint $table) {
            $table->string(DoctorExperienceEnum::DOCTOR_DEPARTMENT)
                ->after(DoctorExperienceEnum::DOCTOR_DESIGNATION)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table(DoctorExperienceEnum::DB_TABLE, function (Blueprint $table) {
            $table->dropColumn(DoctorExperienceEnum::DOCTOR_DEPARTMENT);
        });
    }
};
