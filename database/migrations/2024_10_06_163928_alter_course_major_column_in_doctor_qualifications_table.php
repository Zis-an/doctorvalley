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
        Schema::table(DoctorQualificationEnum::DB_TABLE, function (Blueprint $table) {
            $table->string(DoctorQualificationEnum::COURSE_MAJOR)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table(DoctorQualificationEnum::DB_TABLE, function (Blueprint $table) {
            $table->string(DoctorQualificationEnum::COURSE_MAJOR)->nullable(false)->change();
        });
    }
};
