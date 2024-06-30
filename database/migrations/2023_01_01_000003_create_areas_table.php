<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Location\Models\City;
use Modules\Location\Enums\AreaEnum;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(AreaEnum::DB_TABLE, function (Blueprint $table) {
            $table->id(AreaEnum::ID);
            $table->unsignedBigInteger(AreaEnum::CITY_ID);
            $table->string(AreaEnum::AREA_NAME);
            $table->string(AreaEnum::AREA_STATUS);
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
        Schema::dropIfExists(AreaEnum::DB_TABLE);
    }
}
