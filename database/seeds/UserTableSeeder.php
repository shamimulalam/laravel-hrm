<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'employee_id' => 'EMP'.time(),
            'department_id'=>1,
            'designation_id'=>1,
            'name' => 'Karim Khan',
            'contact_number' => '+8801XXXXXXXXX',
            'email' => 'admin@demo.com',
            'password' => bcrypt('admin@123'),
            'status' => 'Active'
        ]);
    }
}
