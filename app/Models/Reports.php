<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    use HasFactory;

    protected $table = "reports";
    protected $primaryKey = "report_id";
    protected $fillable = ["user_id", "report"];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}

