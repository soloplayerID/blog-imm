<?php

namespace App\Http\Controllers\Api;

use App\Tag;
use Illuminate\support\str;
use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use App\Http\Resources\TagResource;
use App\Http\Controllers\Controller;

class TagApiController extends Controller
{

  /**
     * TagApiController api
     * endPoint : api/tag
     * method : GET
     * query : -
     *  @return App\Tag;
  **/
  public function index()
  {
    $tag = Tag::latest()->get();
    return TagResource::collection($tag);
  }
}
