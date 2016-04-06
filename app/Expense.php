<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = ['tag', 'currency', 'amount', 'comment', 'payment_date'];

    public function currency()
    {
        return $this->belongsTo('App\Currency');
    }

    public function tag()
    {
        return $this->belongsTo('App\ExpenseTag');
    }
}
