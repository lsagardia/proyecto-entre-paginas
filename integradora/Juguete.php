<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Juguete extends Model
{
    protected $table = 'juguetes';
    protected $fillable = ['nombre', 'precio'];
}
