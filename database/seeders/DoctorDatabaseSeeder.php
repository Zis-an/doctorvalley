<?php
/**
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

/**
 * Run only one seed
 * composer dump-autoload
 * php artisan db:seed --class=DoctorDatabaseSeeder
 */

namespace Database\Seeders;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\Traits\TruncateTable;
use Database\Seeders\Traits\DisableForeignKeys;
use Modules\Doctor\Enums\DoctorDetailEnum;
use Modules\Doctor\Models\Doctor;
use Modules\Doctor\Enums\DoctorEnum;
use Modules\Doctor\Models\DoctorDetail;

class DoctorDatabaseSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        $this->disableForeignKeys();

        $doctor = Doctor::updateOrCreate([
            DoctorEnum::DOCTOR_USER_NAME => 'default_doctor',
            DoctorEnum::DOCTOR_EMAIL => 'default@doctor.com',
            DoctorEnum::DOCTOR_PHONE => '01571721910',
            DoctorEnum::DOCTOR_BMDC => 'doc-12457',
        ],[
            DoctorEnum::DOCTOR_NAME => 'Default Doctor',
            DoctorEnum::DOCTOR_GENDER => DoctorEnum::GENDER_MALE,
            DoctorEnum::DOCTOR_PASSWORD => Hash::make('password'),
            DoctorEnum::DOCTOR_PHOTO => 'assets/images/avatar/avatar.svg',
            DoctorEnum::DOCTOR_STATUS => config('global.status.active'),
        ]);
        if (!empty($doctor)){
            DoctorDetail::updateOrCreate([
                DoctorDetailEnum::DOCTOR_ID => $doctor->id
            ],[
                DoctorDetailEnum::COUNTRY_ID =>1,
                DoctorDetailEnum::DOCTOR_ADDRESS=>null,
            ]);
        }
        $this->enableForeignKeys();
    }
}
