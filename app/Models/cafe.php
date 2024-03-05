<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cafe extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function ulasan(){
        return $this->hasMany(ulasan::class);
    }
}
