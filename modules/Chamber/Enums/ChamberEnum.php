<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Chamber\Enums;

class ChamberEnum
{
    public const DB_TABLE = 'chambers';

    public const ID = 'id';
    public const CHAMBER_NAME = 'chamber_name';
    public const REG_NO = 'reg_no';
    public const CHAMBER_EMAIL = 'email';
    public const CHAMBER_PHONE = 'phone_no';
    public const CHAMBER_TYPE = 'chamber_type';
    public const COUNTRY_ID = 'country_id';
    public const PROVINCE_ID = 'province_id';
    public const CITY_ID = 'city_id';
    public const AREA_ID = 'area_id';
    public const CHAMBER_ADDRESS = 'address';
    public const CHAMBER_DESCRIPTION = 'description';
    public const SOCIAL_LINKS = 'links';
    public const STATUS = 'status';

    public const FIELDS = [
        self::ID,
        self::CHAMBER_NAME,
        self::REG_NO,
        self::CHAMBER_EMAIL,
        self::CHAMBER_PHONE,
        self::CHAMBER_TYPE,
        self::COUNTRY_ID,
        self::PROVINCE_ID,
        self::CITY_ID,
        self::AREA_ID,
        self::CHAMBER_ADDRESS,
        self::CHAMBER_DESCRIPTION,
        self::SOCIAL_LINKS,
        self::STATUS
    ];

    public const TYPE_HOSPITAL = 'hospital';
    public const TYPE_CHAMBER = 'chamber';
    public const TYPE_CLINIC = 'clinic';

    public const CHAMBER_TYPE_ARRAY = [
        self::TYPE_HOSPITAL => 'Hospital',
        self::TYPE_CHAMBER => 'Chamber',
        self::TYPE_CLINIC => 'Clinic'
    ];
}
