<?php

namespace App\Models;

use App\Models\User;
use App\Models\Cocktail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'description',
        'lieu',
         'telephone',
        'date',
        'nbrPeople',


    ];



    public  function user(){
        return $this->belongsTo(User::class);
    }
}
