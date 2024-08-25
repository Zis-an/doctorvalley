<?php

namespace Modules\Doctor\Enums;

final class DoctorDetailEnum
{
    public const DB_TABLE = 'doctor_details';
    public const ID = 'id';
    public const DOCTOR_ID = 'doctor_id';
    public const DOCTOR_BIO = 'doctor_bio';
    public const SOCIAL_LINKS = 'links';
    public const COUNTRY_ID = 'country_id';
    public const PROVINCE_ID = 'province_id';
    public const CITY_ID = 'city_id';
    public const AREA_ID = 'area_id';
    public const DOCTOR_ADDRESS = 'address';

    public const FIELDS = [
        self::ID,
        self::DOCTOR_ID,
        self::DOCTOR_BIO,
        self::SOCIAL_LINKS,
        self::COUNTRY_ID,
        self::PROVINCE_ID,
        self::CITY_ID,
        self::AREA_ID,
        self::DOCTOR_ADDRESS,
    ];
}
