<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carrinho extends Model
{
    use HasFactory;
    protected $fillable = [
        'valorProd',
        'nomeProd',
    ];
}
