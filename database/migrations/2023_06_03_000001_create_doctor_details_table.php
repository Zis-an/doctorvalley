<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Doctor\Enums\DoctorDetailEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(DoctorDetailEnum::DB_TABLE, function (Blueprint $table) {
            $table->id(DoctorDetailEnum::ID);
            $table->foreignId(DoctorDetailEnum::DOCTOR_ID);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(DoctorDetailEnum::DB_TABLE);
    }
};
