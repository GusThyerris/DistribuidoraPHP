<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable = [
        'cepPed',
        'ruaPed',
        'bairroPed',
        'cidadePede',
        'ufPed',
        'numeroPed',
        'complPed',
        'quantPed',
        'telefonePed',
        'cpfPed',
    ];
}
