<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelAgenda extends Model
{
    use HasFactory;//Fatoração - Dividir
    protected $table = 'Registro'; //nome da tabela
}//Apenas a tabela do BD
