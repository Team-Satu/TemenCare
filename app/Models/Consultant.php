<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    use HasFactory;
    protected $table = 'consultants';
    protected $privateKey = 'consultant_id';
    protected $fillable = ['user_id', 'schedule_id', 'psycholog_id', 'complaint', 'diagnose', 'advice', 'url', 'date', 'status'];
}
