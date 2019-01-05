<?php

use Illuminate\Database\Seeder;

class TransactionHeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction_head')->insert([
            'type'=>'Expense',
            'name' => 'Salary',
            'status' => 'Active'
        ]);
        DB::table('transaction_head')->insert([
            'type'=>'Income',
            'name' => 'Provident Fund',
            'status' => 'Active'
        ]);
    }
}
