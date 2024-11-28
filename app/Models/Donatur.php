<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    protected $guarded = ['id_donatur'];
    protected $table = 'donatur';
    protected $primaryKey = 'id_donatur';

    public function donasi(){
        return $this->belongsTo(Donasi::class, 'id_donasi', 'id_donasi');
    }
}
