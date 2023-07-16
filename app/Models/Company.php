<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'address',
        'level_income_type',
        'level_income_levels',
        'adhar_front_image',
        'adhar_back_image',
        'pan_image',
        'passbook_image',
        'cancel_cheque_image',
        'bank_name',
        'account_holder_name',
        'ifsc_code',
        'account_number',
        'withdraw_minimum',
    ];
}
