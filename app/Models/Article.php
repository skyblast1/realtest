<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['article', 'body', 'img', 'slug'];

    public function tags() {
        return $this->belongsToMany(tag::class);
    }

    public function comments() {
        return $this->hasMany(comment::class);
    }

    public function states() {
        return $this->hasOne(state::class);
    }
}
