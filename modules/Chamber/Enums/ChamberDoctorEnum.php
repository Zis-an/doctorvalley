<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Chamber\Enums;

class ChamberDoctorEnum
{
    public const DB_TABLE = 'chamber_doctor';
    public const ID = 'id';
    public const CHAMBER_ID = 'chamber_id';
    public const DOCTOR_ID = 'doctor_id';
    public const ADD_FROM = 'add_from';
    public const ADD_TO = 'add_to';
    public const FIELDS = [
        self::ID,
        self::CHAMBER_ID,
        self::DOCTOR_ID,
        self::ADD_FROM,
        self::ADD_TO
    ];
}
