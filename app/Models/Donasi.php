<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    protected $guarded = ['id_donasi'];
    protected $table = 'donasi';
    protected $primaryKey = 'id_donasi';

    public function donatur(){
        return $this->hasMany(Donatur::class, 'id_donasi', 'id_donasi');
    }
}
