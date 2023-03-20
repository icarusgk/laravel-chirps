<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;
    
    // We can enable mass assignment for safe attributes
    // marking them as fillable
    protected $fillable = [
        'message',
    ];
}
