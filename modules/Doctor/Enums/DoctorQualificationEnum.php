<?php

namespace Modules\Doctor\Enums;

final class DoctorQualificationEnum
{

    public const DB_TABLE = 'doctor_qualifications';
    public const ID = 'id';
    public const DOCTOR_ID = 'doctor_id';
    public const DEGREE_ID = 'degree_id';
    public const INSTITUTE_ID = 'institute_id';
    public const COURSE_MAJOR = 'major';
    public const INSTITUTE_NAME = 'institute_name';
    public const FROM_DATE = 'from';
    public const TO_DATE = 'to';
    public const IS_CURRENT = 'current';
    public const FIELDS = [
        self::ID,
        self::DOCTOR_ID,
        self::DEGREE_ID,
        self::INSTITUTE_ID,
        self::COURSE_MAJOR,
        self::INSTITUTE_NAME,
        self::FROM_DATE,
        self::TO_DATE,
        self::IS_CURRENT
    ];
}
