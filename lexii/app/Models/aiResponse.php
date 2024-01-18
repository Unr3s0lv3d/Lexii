<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aiResponse extends Model
{
    use HasFactory;
    public $timestamps = false;

    public $table = 'ai_responses';
    protected $fillable = [
        'id',
        'ai_responses'
    ];
}
