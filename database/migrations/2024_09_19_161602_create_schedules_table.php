<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Chamber\Enums\ScheduleEnum;
use Modules\ChamberAdmin\Enums\ChamberAdminEnum;
use Modules\Doctor\Enums\DoctorEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(ScheduleEnum::DB_TABLE, function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(ScheduleEnum::CHAMBER_ID);
            $table->unsignedBigInteger(ScheduleEnum::DOCTOR_ID);
            $table->string(ScheduleEnum::SCHEDULE_DAY);
            $table->time(ScheduleEnum::START_FROM);
            $table->time(ScheduleEnum::END_FROM);
            $table->text(ScheduleEnum::NOTE)->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign(ScheduleEnum::CHAMBER_ID)
                ->references(ChamberAdminEnum::CHAMBER_ID)
                ->on(ChamberAdminEnum::DB_TABLE)
                ->cascadeOnDelete();

            $table->foreign(ScheduleEnum::DOCTOR_ID)
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
        Schema::dropIfExists(ScheduleEnum::DB_TABLE);
    }
};
