<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $user = new User();
      return view('admin.user.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        if ($request->input('password')) {
          $password = bcrypt($request->password);
        }else {
          $password = ('12345678');
        }
        $request->user()->create([
          'name' => $request->name,
          'email' => $request->email,
          'deskripsi' => $request->deskripsi,
          'instagram' => $request->instagram,
          'password' => $password,
          'type_user' => $request->type_user
        ]);

        return redirect()->back()->with('success', "Your User has been created");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
      return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
      $user = User::findorfail($id);

      if ($request->input('password')) {
        $user_data = [
          'name' => $request->name,
          'deskripsi' => $request->deskripsi,
          'instagram' => $request->instagram,
          'password' => bcrypt($request->password),
          'type_user' => $request->type_user
        ];
      }else {
        $user_data = [
          'name' => $request->name,
          'deskripsi' => $request->deskripsi,
          'instagram' => $request->instagram,
          'type_user' => $request->type_user
        ];
      }

      $user->update($user_data);
      return redirect()->back()->with('success', "Your account has been updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
      // $user->delete();
      // return redirect('/user')->with('success', 'user has been deleted.');

      return redirect('admin/user')->with('status', 'cannot delete!!');
    }
}
