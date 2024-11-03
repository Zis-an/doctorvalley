<?php

use Modules\Doctor\Enums\DoctorEnum;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(DoctorEnum::DB_TABLE, function (Blueprint $table) {
            $table->id(DoctorEnum::ID);
            $table->string(DoctorEnum::DOCTOR_NAME);
            $table->string(DoctorEnum::DOCTOR_EMAIL)->unique();
            $table->string(DoctorEnum::DOCTOR_PHONE)->unique();
            $table->string(DoctorEnum::DOCTOR_USER_NAME);
            $table->string(DoctorEnum::DOCTOR_BMDC)->unique();
            $table->string(DoctorEnum::DOCTOR_GENDER)->default('male');
            // $table->string(DoctorEnum::DOCTOR_SPECIALITY);
            $table->longText(DoctorEnum::DOCTOR_PHOTO)->nullable();
            $table->string(DoctorEnum::DOCTOR_PASSWORD);
            $table->boolean(DoctorEnum::DOCTOR_STATUS)->default(config('global.status.inactive'));
            $table->unsignedBigInteger(DoctorEnum::COUNTRY_ID)->nullable();
            $table->unsignedBigInteger(DoctorEnum::PROVINCE_ID)->nullable();
            $table->unsignedBigInteger(DoctorEnum::CITY_ID)->nullable();
            $table->unsignedBigInteger(DoctorEnum::AREA_ID)->nullable();
            $table->longtext(DoctorEnum::DOCTOR_ADDRESS)->nullable();
            $table->longText(DoctorEnum::DOCTOR_BIO)->nullable();
            $table->longText(DoctorEnum::SOCIAL_LINKS)->nullable();
            $table->unsignedBigInteger(DoctorEnum::DOCTOR_PRIORITY)->nullable()->unique();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(DoctorEnum::DB_TABLE);
    }
};
