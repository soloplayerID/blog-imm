<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserApiRequest;
use App\Http\Resources\UserResource;

class LoginController extends Controller
{
    public function action(UserApiRequest $request)
    {
      if (auth()->attempt($request->only('email','password'))) {
        $currentUser = auth()->user();

        return (new UserResource($currentUser))->additional([
          'meta' => [
            'token' => $currentUser->api_token,
          ]
        ]);
      }

      return response()->json([
        'error'=> 'your token not match',
      ], 401);
    }
}
