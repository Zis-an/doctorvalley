<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Chamber\Enums\ChamberEnum;
use Modules\ChamberAdmin\Enums\ChamberAdminEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(ChamberAdminEnum::DB_TABLE, function (Blueprint $table) {
            $table->id(ChamberAdminEnum::ID);
            $table->unsignedBigInteger(ChamberAdminEnum::CHAMBER_ID);
            $table->string(ChamberAdminEnum::CHAMBER_ADMIN_NAME);
            $table->string(ChamberAdminEnum::USER_NAME)->unique();
            $table->string(ChamberAdminEnum::CHAMBER_ADMIN_EMAIL)->unique();
            $table->string(ChamberAdminEnum::CHAMBER_ADMIN_PHONE);
            $table->unsignedBigInteger(ChamberAdminEnum::CHAMBER_ADMIN_ROLE);
            $table->string(ChamberAdminEnum::CHAMBER_ADMIN_PASSWORD);
            $table->boolean(ChamberAdminEnum::CHAMBER_ADMIN_STATUS)->default(config('global.status.inactive'));
            $table->rememberToken()->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign(ChamberAdminEnum::CHAMBER_ID)
                ->references(ChamberEnum::ID)
                ->on(ChamberEnum::DB_TABLE)
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(ChamberAdminEnum::DB_TABLE);
    }
};
