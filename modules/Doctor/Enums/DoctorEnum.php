<?php

namespace Modules\Doctor\Enums;

final class DoctorEnum
{

    public const DB_TABLE = 'doctors';
    public const ID = 'id';
    public const DOCTOR_NAME = 'name';
    public const DOCTOR_EMAIL = 'email';
    public const DOCTOR_PHONE = 'phone';
    public const DOCTOR_USER_NAME = 'username';
    public const DOCTOR_BMDC = 'bmdc';
    public const DOCTOR_GENDER = 'gender';
    // public const DOCTOR_SPECIALITY = 'speciality';
    public const DOCTOR_PHOTO = 'photo';
    public const DOCTOR_PASSWORD = 'password';
    public const DOCTOR_STATUS = 'status';
    public const COUNTRY_ID = 'country_id';
    public const PROVINCE_ID = 'province_id';
    public const CITY_ID = 'city_id';
    public const AREA_ID = 'area_id';
    public const DOCTOR_ADDRESS = 'address';
    public const DOCTOR_BIO = 'bio';
    public const SOCIAL_LINKS = 'links';
    public const FIELDS = [
        self::ID,
        self::DOCTOR_NAME,
        self::DOCTOR_EMAIL,
        self::DOCTOR_PHONE,
        self::DOCTOR_USER_NAME,
        self::DOCTOR_BMDC,
        self::DOCTOR_GENDER,
        // self::DOCTOR_SPECIALITY,
        self::DOCTOR_PHOTO,
        self::DOCTOR_PASSWORD,
        self::DOCTOR_STATUS,
        self::COUNTRY_ID,
        self::PROVINCE_ID,
        self::CITY_ID,
        self::AREA_ID,
        self::DOCTOR_ADDRESS,
        self::DOCTOR_BIO,
        self::SOCIAL_LINKS
    ];
}
