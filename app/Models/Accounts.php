<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    use HasFactory;

    protected $table = "accounts";
    protected $primaryKey = "id";
    protected $fillable = ["name", "email", "nim", "username", "class", "major", "lecture", "type", "page_id", "image_url"];

    public function user()
    {
        return $this->belongsTo(User::class, 'email', 'email');
    }
}
