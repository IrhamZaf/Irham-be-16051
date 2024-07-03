<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theater extends Model
{
    protected $table = 'theater';
    protected $fillable = ['theatername', 'timestart', 'timeend'];
}
