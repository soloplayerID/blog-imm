<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;

class UserApiController extends Controller
{

  /**
     * UserApiController api
     * endPoint : api/me
     * method : POST
     * query : -
     *  @return App\;
  **/
    public function me()
    {
      $user = auth()->user();

      return new UserResource($user);
    }
}
