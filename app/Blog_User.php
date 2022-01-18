<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog_User extends Model
{
  protected $fillable = [
      'name', 'email', 'image', 'password', 'type_user', 'api_token', 'remember_token'
  ];
  protected $table = 'blog_users';

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
      'email_verified_at' => 'datetime',
  ];

  public function post()
  {
      return $this->hasMany(Post::class);
  }

  public function comments()
  {
    return $this->hasMany(Comment::class);
  }
}
