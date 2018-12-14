<?php

use Illuminate\Database\Seeder;

class DesignationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designations')->insert([
            'department_id' => 1,
            'name' => 'Managing Director',
            'status' => 'Active'
        ]);
    }
}
