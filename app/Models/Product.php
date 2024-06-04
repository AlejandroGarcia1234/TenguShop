<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    public function variants(){
        return $this->hasMany(Variant::class);
    }

    public function options(){
        return $this->belongsToMany(Option::class)
            ->withPivot('value')
            ->withTimestamps();
    }
}
