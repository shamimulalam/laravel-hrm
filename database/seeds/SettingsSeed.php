<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SettingsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
         ['type' => 'logo',
            'value' => 'assets/logo.png'
         ],
            [
             'type' => 'company_name',
             'value' => 'ABC Company'
         ]
        ]);
    }
}
