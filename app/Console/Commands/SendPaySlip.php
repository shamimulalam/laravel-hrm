<?php

namespace App\Console\Commands;

use App\Transaction;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendPaySlip extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:payslip';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send pay slip for salary';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->generatePaySlip();
        echo 'Email successfully sent';
    }

    public function generatePaySlip(){
        $employeeList=User::with('relPayRoll')->where('status','Active')->get();
        foreach ($employeeList as $employee) {
            $data['employee']=$employee;
            Mail::to($employee->email)->send(new \App\Mail\SendPaySlip($data));
            $this->transaction($employee);
        }
    }
    public function transaction($request)
    {
        $transaction = new Transaction();
        $transaction->transaction_id = 'EX' . time();
        $transaction->transaction_head_id = 1;
        $transaction->client = $request->id;
        $transaction->type = 'Expense';
        $transaction->description = 'Salary for the month of '.date('M');
        $transaction->date = date('Y-m-d');
        $transaction->amount = $request->relPayRoll->gross+$request->relPayRoll->provident_fund;
        $transaction->save();

        $transaction = new Transaction();
        $transaction->transaction_id = 'IN' . time();
        $transaction->transaction_head_id = 2;
        $transaction->client = $request->id;
        $transaction->type = 'Income';
        $transaction->description = 'Salary for the month of '.date('M');
        $transaction->date = date('Y-m-d');
        $transaction->amount = $request->relPayRoll->provident_fund;
        $transaction->save();
    }
}
