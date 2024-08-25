<?php

namespace Modules\Doctor\Enums;

final class DoctorSpecialityEnum
{

    public const DB_TABLE = 'doctor_specialities';
    public const ID = 'id';
    public const DOCTOR_ID = 'doctor_id';
    public const DOCTOR_SPECIALITY_ID = 'speciality_id';
    public const FIELDS = [
        self::ID,
        self::DOCTOR_ID,
        self::DOCTOR_SPECIALITY_ID
    ];
}
