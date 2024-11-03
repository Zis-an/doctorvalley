<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Chamber\Enums\ScheduleSpecialNoteEnum;
use Modules\ChamberAdmin\Enums\ChamberAdminEnum;
use Modules\Doctor\Enums\DoctorEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(ScheduleSpecialNoteEnum::DB_TABLE, function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(ScheduleSpecialNoteEnum::CHAMBER_ID);
            $table->unsignedBigInteger(ScheduleSpecialNoteEnum::DOCTOR_ID);
            $table->date(ScheduleSpecialNoteEnum::DATE);
            $table->text(ScheduleSpecialNoteEnum::SPECIAL_NOTE);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign(ScheduleSpecialNoteEnum::CHAMBER_ID)
                ->references(ChamberAdminEnum::CHAMBER_ID)
                ->on(ChamberAdminEnum::DB_TABLE)
                ->cascadeOnDelete();

            $table->foreign(ScheduleSpecialNoteEnum::DOCTOR_ID)
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
        Schema::dropIfExists(ScheduleSpecialNoteEnum::DB_TABLE);
    }
};
