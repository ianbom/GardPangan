<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relawan extends Model
{
    protected $guarded = ['id_relawan'];
    protected $table = 'relawan';
    protected $primaryKey = 'id_relawan';

    public function jadwal(){
        return $this->belongsTo(Jadwal::class,'id_jadwal','id_jadwal');
    }
}
