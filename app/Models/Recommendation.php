<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'doctor_recommended';

    // Define the fillable attributes
    protected $fillable = [
        'name',
        'image',
        'review',
        'date',
    ];
}