<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['article', 'body', 'img', 'slug'];

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function states() {
        return $this->hasOne(State::class, 'article_id', 'id');
    }

    public function createdAtForHumans () {
        return $this->created_at->diffForHumans();
    }

    public function getBodyWithLimit () {
        return Str::limit($this->body,'300');
    }

    public function scopeLastLimit ($query, $number) {
        return $query->with('states', 'tags')->orderBy('created_at','desc')->limit($number)->get();
    }

    public function scopeAllArticlesPagination ($query, $number) {
        return $query->with('states', 'tags')->orderBy('created_at', 'desc')->paginate($number);
    }

    public function scopeFindBySlug($query, $slug) {
        return $query->with('states', 'tags', 'comments')->where('slug', $slug)->firstOrFail();
    }

    public function scopeFindByTag($query) {
        return $query->with('tags', 'states')->orderBy('created_at', 'desc')->paginate(10);
    }
}
