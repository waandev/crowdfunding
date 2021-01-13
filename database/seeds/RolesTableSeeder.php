<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => '618dd847-3c4c-4861-a4cd-721fb1fa004b',
            'name' => 'user'
        ]);
    }
}
