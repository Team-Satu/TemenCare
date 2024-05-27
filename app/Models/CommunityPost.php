<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunityPost extends Model
{
    use HasFactory;
    protected $table = 'community_posts';
    protected $primaryKey = 'post_id';
    protected $fillable = [
        'community_id',
        'post',
        'title',
    ];

}
