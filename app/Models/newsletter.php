<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newsletter extends Model
{
    /** @use HasFactory<\Database\Factories\NewsletterFactory> */
    use HasFactory;
     protected $guarded = []; //
}
