<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'moviesapi';
    protected $fillable = ['title', 'duration', 'views', 'poster',  'overallrating', 'description'];
}
