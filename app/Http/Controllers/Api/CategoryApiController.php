<?php

namespace App\Http\Controllers\Api;

use App\Category;
use Illuminate\support\str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Resources\CategoryResource;

class CategoryApiController extends Controller
{

  /**
     * CategoryApiController api
     * endPoint : api/category
     * method : GET
     * query : -
     *  @return App\Category;
  **/
  public function index()
  {
    $category = Category::latest()->get();

    return CategoryResource::collection($category);
  }


  /**
     * CategoryApiController api
     * endPoint : api/category
     * method : POST
     * query :
     * name : {varchar} required
     *  @return App\Category;
  **/
  public function store(CategoryRequest $request)
  {
    $category = Category::create([
      'name' => $request->name,
      'slug' => str::slug($request->name)
    ]);

    return new CategoryResource($category);
  }

}
