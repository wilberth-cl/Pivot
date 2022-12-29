<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public function specialty(){
        return $this->belongsTo(Specialty::class);
    }
    //use HasFactory;
}
