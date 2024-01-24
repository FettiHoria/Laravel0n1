<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articol extends Model
{
    use HasFactory;
    protected $table = "articole";
    const UPDATED_AT = null;

    protected $fillable = [
        'name',
        'corpText',
        'linkImagine',
    ];


}
