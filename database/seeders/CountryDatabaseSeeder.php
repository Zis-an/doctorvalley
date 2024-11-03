<?php
/**
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

/**
 * Run only one seed
 * composer dump-autoload
 * php artisan db:seed --class=CountryDatabaseSeeder
 */

namespace Database\Seeders;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\Traits\TruncateTable;
use Database\Seeders\Traits\DisableForeignKeys;
use Modules\Location\Enums\CountryEnum;
use Modules\Location\Models\Country;

class CountryDatabaseSeeder extends Seeder
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

        Country::updateOrCreate([
            CountryEnum::ID => 1,
            CountryEnum::COUNTRY_NAME => 'Bangladesh',
        ],[
            CountryEnum::COUNTRY_CAPITAL => 'Dhaka',
            CountryEnum::COUNTRY_SHORT_NAME => 'BD',
            CountryEnum::COUNTRY_CODE => '880',
            CountryEnum::COUNTRY_STATUS => config('global.status.active'),
        ]);
        $this->enableForeignKeys();
    }
}
