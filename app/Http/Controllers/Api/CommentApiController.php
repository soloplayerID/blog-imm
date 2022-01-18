<?php

namespace App\Http\Controllers\Api;

use App\Post;
use App\Comment;
use App\Blog_User;
use Illuminate\support\str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Http\Resources\CommentResource;

class CommentApiController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     /**
        * CommentApiController api
        * endPoint : api/post/{id_post}/comment/{comment}
        * method : POST
        * query :
        * body : {varchar} required
        * id  : {integer} required *relasi blog_users
        *  @return App\Blog_User;
     **/
     public function store(Post $post, CommentRequest $request)
     {
       if(Blog_User::where('id', '=', $request->id)->firstOrFail()){
         $comment = $post->comments()->create([
           'body' => $request->body,
           'user_id' => $request->id
         ]);
       }

       return new CommentResource($comment);
     }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }
    //
    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }
    //
    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
