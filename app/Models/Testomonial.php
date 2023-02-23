<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testomonial extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'designation',
        'company',
        'description',
        'status',
    ];
}
