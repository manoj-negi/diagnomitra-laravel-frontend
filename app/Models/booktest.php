<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booktest extends Model
{
    use HasFactory;

    protected $table = 'booktest'; // Specify the table name if it doesn't follow the convention

    protected $fillable = [
        'full_name',

        'email',

        'mobile_number',

        'location',
  
        'prescription',
    ];
}
