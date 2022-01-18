<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterApiRequest;

class RegisterController extends Controller
{
    public function action(RegisterApiRequest $request)
    {
      $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'api_token' => Str::random(80),
      ]);

      return (new UserResource($user))->additional([
        'meta' => [
          'token' => $user->api_token,
        ]
      ]);
    }
}
