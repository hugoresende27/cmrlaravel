<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upcoming extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'approved',
        'completed',
        'task_id',
        'waiting',
    ];
}
