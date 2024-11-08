<?php

use Modules\Location\Models\Province;
use Illuminate\Support\Facades\Schema;
use Modules\Location\Enums\ProvinceEnum;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(ProvinceEnum::DB_TABLE, function (Blueprint $table) {
            $table->id(ProvinceEnum::ID);
            $table->unsignedBigInteger(ProvinceEnum::COUNTRY_ID);
            $table->string(ProvinceEnum::PROVINCE_NAME);
            $table->boolean(ProvinceEnum::PROVINCE_STATUS)->default(config('global.status.inactive'));
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
        Schema::dropIfExists(ProvinceEnum::DB_TABLE);
    }
}
