<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::updateOrCreate([ 'name' => 'guest' ]);
        Role::updateOrCreate([ 'name' => 'customer' ]);
        Role::updateOrCreate([ 'name' => 'seller' ]);
        Role::updateOrCreate([ 'name' => 'administrator' ]);
    }
}
