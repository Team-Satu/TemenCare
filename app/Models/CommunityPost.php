<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunityPost extends Model
{
    use HasFactory;
    protected $table = 'community_posts';

    // Specify the fields that are mass assignable
    protected $fillable = [
        'post',
    ];
}
