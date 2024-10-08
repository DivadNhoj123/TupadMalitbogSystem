<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tupad extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'initial',
        'surname',
        'suffix',
        'barangay',
        'status'
    ];
}
