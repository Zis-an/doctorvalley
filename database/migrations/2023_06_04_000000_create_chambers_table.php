<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Chamber\Enums\ChamberEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chambers', function (Blueprint $table) {
            $table->id();
            $table->string(ChamberEnum::CHAMBER_NAME);
            $table->string(ChamberEnum::REG_NO);
            $table->string(ChamberEnum::CHAMBER_EMAIL)->unique();
            $table->string(ChamberEnum::CHAMBER_PHONE);
            $table->string(ChamberEnum::CHAMBER_TYPE)->default(ChamberEnum::TYPE_CHAMBER);
            $table->integer(ChamberEnum::COUNTRY_ID)->default(1);
            $table->integer(ChamberEnum::PROVINCE_ID)->nullable();
            $table->integer(ChamberEnum::CITY_ID)->nullable();
            $table->integer(ChamberEnum::AREA_ID)->nullable();
            $table->text(ChamberEnum::CHAMBER_ADDRESS)->nullable();
            $table->longText(ChamberEnum::CHAMBER_DESCRIPTION)->nullable();
            $table->longText(ChamberEnum::SOCIAL_LINKS)->nullable();
            $table->boolean(ChamberEnum::STATUS)->default(config('global.status.inactive'));
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chambers');
    }
};
