<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    use HasFactory;

    protected $fillable = [
        'editorial',
        'short_bio'
    ];

    public function user()
    {
        return $this->morphOne(User::class,'userable');
    }
}
