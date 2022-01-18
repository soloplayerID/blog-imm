<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Comment extends Model
{
    protected $table = 'comments';
    protected $guarded = [];

    public function post()
    {
      return $this->belongsTo(Post::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function blog_user()
    {
      return $this->belongsTo(Blog_User::class, 'user_id');
    }

    public function getCreatedDateAttribute()
    {
      return $this->created_at->diffForHumans();
    }

    public function getBodyHtmlAttribute()
    {
      return \Parsedown::instance()->text($this->body);
    }

    public static function boot()
    {
      parent::boot();

      static::created(function ($comments) {
        $comments->post->increment('comments_count');
      });
    }
}
