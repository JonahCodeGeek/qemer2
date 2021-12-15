<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carousel_items extends Model
{
    use HasFactory;
    protected $fillable=[
        "slide_image",
        "Header",
        "body"
    ];
}
