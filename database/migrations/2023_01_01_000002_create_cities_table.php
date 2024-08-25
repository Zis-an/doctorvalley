<?php

use Modules\Location\Models\City;
use Modules\Location\Enums\CityEnum;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(CityEnum::DB_TABLE, function (Blueprint $table) {
            $table->id(CityEnum::ID);
            $table->unsignedBigInteger(CityEnum::PROVINCE_ID);
            $table->string(CityEnum::CITY_NAME);
            $table->boolean(CityEnum::CITY_STATUS)->default(config('global.status.inactive'));
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(CityEnum::DB_TABLE);
    }
}
