<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    public function size(){
        return $this->belongsTo(Size::class);
    }
    //use HasFactory;
    public function ingredients(){
        return $this->belongsToMany(Ingredient::class,'specialty_ingredient','specialty_id','ingredient_id')->withPivot('cantidad','thing');
    }
}
