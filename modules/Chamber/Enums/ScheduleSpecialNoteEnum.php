<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Chamber\Enums;

class ScheduleSpecialNoteEnum
{
    public const DB_TABLE = 'schedule_special_notes';

    public const ID = 'id';
    public const CHAMBER_ID = 'chamber_id';
    public const DOCTOR_ID = 'doctor_id';
    public const DATE = 'date';
    public const SPECIAL_NOTE = 'special_note';


    public const FIELDS = [
        self::ID,
        self::CHAMBER_ID,
        self::DOCTOR_ID,
        self::DATE,
        self::SPECIAL_NOTE,

    ];

}
