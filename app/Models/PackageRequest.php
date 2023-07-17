<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageRequest extends Model
{
    use HasFactory;

    public function packageApplied()
    {
        return $this->belongsTo(Package::class,'package');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }


}
