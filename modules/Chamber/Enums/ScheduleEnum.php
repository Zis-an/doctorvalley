<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Chamber\Enums;

class ScheduleEnum
{
    public const DB_TABLE = 'schedules';
    public const ID = 'id';
    public const CHAMBER_ID = 'chamber_id';
    public const DOCTOR_ID = 'doctor_id';
    public const SCHEDULE_DAY = 'schedule_day';
    public const START_FROM = 'start_from';
    public const END_FROM = 'end_from';
    public const NOTE = 'note';
    public const FIELDS = [
        self::ID,
        self::CHAMBER_ID,
        self::DOCTOR_ID,
        self::SCHEDULE_DAY,
        self::START_FROM,
        self::END_FROM,
        self::NOTE
    ];

    public const SCHEDULE_DAY_LIST = [
        'sunday' => 'sunday',
        'monday' => 'monday',
        'tuesday' => 'tuesday',
        'wednesday' => 'wednesday',
        'thursday' => 'thursday',
        'friday' => 'friday',
        'saturday' => 'saturday',

    ];
}
