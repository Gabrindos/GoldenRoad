<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mdJogador extends Model
{
    use HasFactory;
    protected $fillable = ['Nome', 'Obra', 'Sexo'];
}
