<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $guarded = ['id_jadwal'];
    protected $table = 'jadwal';
    protected $primaryKey = 'id_jadwal';

    public function relawan(){
        return $this->hasMany(Relawan::class, 'id_jadwal', 'id_jadwal');
    }
}
