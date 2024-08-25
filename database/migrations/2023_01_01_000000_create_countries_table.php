<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Location\Enums\CountryEnum;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string(CountryEnum::COUNTRY_NAME)->unique();
            $table->string('capital')->nullable();
            $table->string('short_name')->nullable();
            $table->string('country_code')->unique()->nullable();
            $table->boolean(CountryEnum::COUNTRY_STATUS)->default(config('global.status.inactive'));
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
        Schema::dropIfExists('countries');
    }
}
