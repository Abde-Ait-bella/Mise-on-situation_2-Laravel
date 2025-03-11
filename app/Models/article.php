<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;

    public function tag()
    {
        $this->belongsToMany(tag::class);
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
