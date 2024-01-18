<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emotions extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = 'emotions';
    protected $fillable = [
        'id',
        'emotion'
    ];
}
