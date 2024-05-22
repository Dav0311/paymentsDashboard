<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'src_of_transaction',
        'amount',
        'date_of_payment',
        'full_name',
        'phone_no',
        'email',
        'currency',
        'transaction_ref'
    ];

    protected $casts = [
        'created_at'=>'datetime',
        'updated_at'=>'datetime'
    ];

}
