<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\Readline\Libedit;

class Cocktail extends Model
{
    use HasFactory;
    protected $fillable = [
        'libele',
        'prix',
        'description',
        'photo1',
        'photo2',

    ];
}
