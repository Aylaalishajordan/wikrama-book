<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registercontroller extends Model
{
    use HasFactory;

    protected $table = 'book';
    protected $fillable = [
        'name',
        'email',
        'password',
        'alamat',
    ];
}
