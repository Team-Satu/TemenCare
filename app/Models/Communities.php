<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communities extends Model
{
    use HasFactory;
    // Specify the table if it's not the plural of your model name
    // protected $table = 'communities';

    // Specify the fields that are mass assignable
    // protected $fillable = [
    //     'community_id', 'user_id', 'name', 'short_description', 'description', 'image_url', // Add all the fillable fields from your migration
    // ];

    // Define the relationship with CommunityPosts if you have a related model
    // public function posts() {
    //     return $this->hasMany(CommunityPost::class);
    // }
}
