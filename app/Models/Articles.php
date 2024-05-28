<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Fitur Kenalan
class Articles extends Model
{
    use HasFactory;

    protected $table = "articles";
    protected $primaryKey = "article_id";
    protected $fillable = ["user_id", "title", "category", "image_url", "url"];
}
