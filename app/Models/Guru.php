<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = "guru";

    protected $fillable = [
        "name",
        "dob", 
        "address",
        "gender"
    ];

    public function mengajar() {
        return $this->hasMany(Mengajar::class);
    }
}


