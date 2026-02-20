<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sulg',
    ];

    public function ratings()
    {
        Return $this->hasMany(Rating::class);
    }
}
