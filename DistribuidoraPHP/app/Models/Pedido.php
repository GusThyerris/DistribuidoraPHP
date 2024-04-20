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
        'cidadePed',
        'ufPed',
        'numeroPed',
        'complPed',
        'quantPed',
        'telefonePed',
        'cpfPed',
    ];
}
