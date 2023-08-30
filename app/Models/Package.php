<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    public function newQuery()
    {

        return parent::newQuery()->where('status',1);

    }

    public function packageRequest()
    {
        return $this->belongsTo(PackageRequest::class,'package');
    }


}
