<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
  use SoftDeletes;

  protected $fillable = ['category_id', 'judul', 'slug', 'content', 'image','user_id'];
  protected $table = 'posts';

  public function category()
  {
    return $this->belongsTo(Category::class);
  }

  public function tag()
  {
    return $this->belongsToMany(Tag::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function blog_user()
  {
    return $this->belongsTo(Blog_User::class);
  }

  public function getCreatedDateAttribute()
  {
    return $this->created_at->diffForHumans();
  }

  public function getBodyHtmlAttribute()
  {
    return \Parsedown::instance()->text($this->content);
  }

  public function comments()
  {
    return $this->hasMany(Comment::class);
  }

}
