<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PsychologSchedule extends Model
{
    use HasFactory;
    protected $primaryKey = "schedule_id";
    protected $fillable = ['psycholog_id','date', 'start_hour', 'end_hour', 'location'];
}
