<?php
/**
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

/**
 * Run only one seed
 * composer dump-autoload
 * php artisan db:seed --class=AdminDatabaseSeeder
 */

namespace Database\Seeders;

use Modules\Admin\Models\Admin;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminDatabaseSeeder extends Seeder
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
        // TODO assign dynamic role to admin
//        $role = Role::findOrCreate(config('bsacl.acl.system_super_admin_role'), config('bsacl.settings.guard'));
//        if (empty($role)){
//            throw new Exception('Invalid role information');
//        }
        $admin = Admin::updateOrCreate([
            'username'=>'admin_super',
            'email'=>'super@admin.com',
            'phone_no'=>'01571721911',
        ],[
//            'name'=>'Super',
//            'last_name'=>'Admin',
            'name'=>'Super Admin',
            'password'=>Hash::make('password'),
            'role_id'=> 1,
            'status'=> config('global.status.active')
        ]);

//        if (!empty($admin)){
//            $admin = $admin->fresh();
//            $admin->assignRole($role->name);
//        }
        $this->enableForeignKeys();
    }
}
