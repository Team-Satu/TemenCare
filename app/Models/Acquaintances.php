<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Fitur Kenalan
class Acquaintances extends Model
{
    use HasFactory;

    protected $table = "acquaintances";
    protected $primaryKey = "acquaintance_id";
    protected $fillable = ["user_id", "poke_total", "whatsapp_number"];
}
