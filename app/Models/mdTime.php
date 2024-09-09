<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mdTime extends Model
{
    use HasFactory;
    protected $fillable = ['Nome', 'Nacionalidade'];
    public function timeCampeonatos(){
        return $this->hasMany('App\Models\mdTimeCampeonato', 'campeonato_id');
    }
}
