<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recept extends Model
{
    protected $table = 'recept';
    protected $fillable = ['nev', 'kat_id', 'kep_eleresi_ut', 'leiras'];
}
