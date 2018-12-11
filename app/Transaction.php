<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function relTransactionHead()
    {
        return $this->belongsTo('App\TransactionHead','transaction_head_id','id');
    }
    public function relUser()
    {
        return $this->belongsTo('App\User','client','id');
    }

}
