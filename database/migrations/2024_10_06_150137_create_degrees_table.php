<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Degree\Enums\DegreeEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(DegreeEnum::DB_TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(DegreeEnum::DEGREE_NAME);
            $table->tinyInteger(DegreeEnum::DEGREE_STATUS)->default(1);
            $table->tinyInteger(DegreeEnum::HAS_MAJOR_COURSE)->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(DegreeEnum::DB_TABLE);
    }
};
