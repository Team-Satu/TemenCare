<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Fitur Kenalan
class AcquaintancesLog extends Model
{
    use HasFactory;

    protected $table = "acquaintance_logs";
    protected $primaryKey = "acquaintance_log_id";
    protected $fillable = ["from_user", "to_user", "from_whatsapp_number", "to_whatsapp_number"];
}
