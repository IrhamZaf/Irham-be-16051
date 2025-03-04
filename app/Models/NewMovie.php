<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewMovie extends Model
{
    protected $table = 'newmovie';
    protected $fillable = ['title', 'duration', 'views', 'description'];
}
