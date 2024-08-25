<?php

namespace Modules\Doctor\Enums;

final class DoctorExperienceEnum
{

    public const DB_TABLE = 'doctor_experiences';
    public const ID = 'id';
    public const DOCTOR_ID = 'doctor_id';
    public const DOCTOR_ORG_NAME = 'organization_name';
    public const DOCTOR_DESIGNATION = 'designation';
    public const DOCTOR_ORG_ADDRESS = 'location';
    public const FROM_DATE = 'from';
    public const TO_DATE = 'to';
    public const IS_CURRENT = 'current';
    public const FIELDS = [
        self::ID,
        self::DOCTOR_ID,
        self::DOCTOR_ORG_NAME,
        self::DOCTOR_DESIGNATION,
        self::DOCTOR_ORG_ADDRESS,
        self::FROM_DATE,
        self::TO_DATE,
        self::IS_CURRENT
    ];
}
