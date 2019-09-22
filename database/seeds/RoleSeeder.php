<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('roles')->insert([
            'name' => 'Administrator',
        ]);
        \Illuminate\Support\Facades\DB::table('roles')->insert([
            'name' => 'Manager',
        ]);

        \Illuminate\Support\Facades\DB::table('roles')->insert([
            'name' => 'Client',
        ]);
    }
}
