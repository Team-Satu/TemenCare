<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    use HasFactory;
    // Specify the table if it's not the plural of your model name
    protected $table = 'expertise';

    protected $primaryKey = 'expertise_id';

    // Specify the fields that are mass assignable
    protected $fillable = [
        'psycholog_id',
        'expertise',
    ];
}
