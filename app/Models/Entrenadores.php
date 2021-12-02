<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrenadores extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = ['name','email','password','rol'];
    public $timestamps=false;
}
