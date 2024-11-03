<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Chamber\Enums\ChamberDoctorEnum;
use Modules\ChamberAdmin\Enums\ChamberAdminEnum;
use Modules\Doctor\Enums\DoctorEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(ChamberDoctorEnum::DB_TABLE, function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(ChamberDoctorEnum::CHAMBER_ID);
            $table->unsignedBigInteger(ChamberDoctorEnum::DOCTOR_ID);
            $table->date(ChamberDoctorEnum::ADD_FROM);
            $table->date(ChamberDoctorEnum::ADD_TO);
            $table->timestamps();

            $table->foreign(ChamberDoctorEnum::CHAMBER_ID)
                ->references(ChamberAdminEnum::CHAMBER_ID)
                ->on(ChamberAdminEnum::DB_TABLE)
                ->cascadeOnDelete();

            $table->foreign(ChamberDoctorEnum::DOCTOR_ID)
                ->references(DoctorEnum::ID)
                ->on(DoctorEnum::DB_TABLE)
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(ChamberDoctorEnum::DB_TABLE);
    }
};
