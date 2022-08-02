<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mengajar extends Model
{
    use HasFactory;

    protected $table = "mengajar";
    
    public function kelas(){
           return $this->belongsTo(Kelas::class);
    }
    public function mapel(){
        return $this->belongsTo(Mapel::class);
    }


}
