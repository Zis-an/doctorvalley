<?php
/**
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

/**
 * Run only one seed
 * composer dump-autoload
 * php artisan db:seed --class=ChamberDatabaseSeeder
 */

namespace Database\Seeders;

use Exception;
use Illuminate\Database\Seeder;
use Modules\Chamber\Models\Chamber;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\Traits\TruncateTable;
use Database\Seeders\Traits\DisableForeignKeys;
use Modules\Chamber\Enums\ChamberEnum;
use Modules\ChamberAdmin\Enums\ChamberAdminEnum;

class ChamberDatabaseSeeder extends Seeder
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

        $chamber = Chamber::updateOrCreate([
            ChamberEnum::REG_NO => 'ABCDEFGHIJKLMNOPQRSTU',
            ChamberEnum::CHAMBER_EMAIL => 'default@chamber.com',
            ChamberEnum::CHAMBER_PHONE => '01571721910',
        ],[
            ChamberEnum::CHAMBER_NAME => 'Default Chamber',
            ChamberEnum::CHAMBER_TYPE => ChamberEnum::TYPE_CHAMBER,
            ChamberEnum::COUNTRY_ID => 1,
            ChamberEnum::PROVINCE_ID => null,
            ChamberEnum::CITY_ID => null,
            ChamberEnum::AREA_ID => null,
            ChamberEnum::CHAMBER_ADDRESS => null,
            ChamberEnum::CHAMBER_DESCRIPTION => null,
            ChamberEnum::SOCIAL_LINKS => null,
            ChamberEnum::STATUS => config('global.status.active'),
        ]);

        if (!empty($chamber)){
            $chamber->admins()->updateOrCreate([
                ChamberAdminEnum::USER_NAME=>'chamber_admin',
                ChamberAdminEnum::CHAMBER_ADMIN_EMAIL=>'admin@chamber.com',
                ChamberAdminEnum::CHAMBER_ADMIN_PHONE=>'01571721911',
            ],[
                ChamberAdminEnum::CHAMBER_ADMIN_NAME=>'Chamber Admin',
                ChamberAdminEnum::CHAMBER_ADMIN_PASSWORD=>Hash::make('password'),
//                ChamberAdminEnum::CHAMBER_ADMIN_ROLE=> 1,
                ChamberAdminEnum::CHAMBER_ADMIN_STATUS=> config('global.status.active'),
            ]);
        }
        $this->enableForeignKeys();
    }
}
