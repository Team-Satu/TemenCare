<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communities extends Model
{
    use HasFactory;
    // Specify the table if it's not the plural of your model name
    protected $table = 'communities';

    protected $primaryKey = 'community_id';

    // Specify the fields that are mass assignable
    protected $fillable = [
        'user_id',
        'name',
        'short_description',
        'description',
        'image_url',
    ];
}
