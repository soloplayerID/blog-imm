<?php

namespace App\Http\Controllers\Api;

use App\Post;
use Illuminate\support\str;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Resources\PostResource;
use App\Http\Controllers\Controller;

class PostApiController extends Controller
{

  /**
     * PostApiController api
     * endPoint : api/Post
     * method : GET
     * query : -
     *  @return App\Post;
  **/
  public function index()
  {
    $post = Post::latest()->get();

    return PostResource::collection($post);
  }

  /**
     * PostApiController api
     * endPoint : api/post/{slug}
     * method : POST
     * query : -
     *  @return App\Blog_User;
  **/
  public function show($slug)
  {
    $posts = Post::where('slug', $slug)->first();
    return new PostResource($posts);
  }

}
