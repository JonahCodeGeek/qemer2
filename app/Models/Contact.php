<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable=[
        "facebook",
        "Instagram",
        "Twitter",
        "Telegram",
        "LinkedIn",
        "Header",
        "Body",
        "location",
        "Email",
        "Phone",
        "Tel"
    ];
}
