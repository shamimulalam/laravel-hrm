<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('client');
            $table->unsignedInteger('transaction_head_id');
            $table->foreign('transaction_head_id')->references('id')->on('transaction_heads');
            $table->string('transaction_id',10)->unique();
            $table->enum('type',['Income','Expense']);
            $table->text('description');
            $table->date('date');
            $table->float('amount',2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
