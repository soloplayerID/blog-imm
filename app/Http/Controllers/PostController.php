<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Post;
use App\Category;
use Illuminate\support\str;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Requests\PostEditRequest;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::latest()->paginate(10);
      return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $post = new Post();
      $category = Category::all();
      $tag = Tag::all();
      return view('admin.post.create', compact('post', 'category', 'tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostEditRequest $request)
    {
        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();

        $post = $request->user()->post()->create([
          'category_id' => $request->category_id,
          'judul' => $request->judul,
          'slug' => str::slug($request->judul),
          'content' => $request->content,
          'image' => 'upload/post/'.$new_image,
        ]);

        // $post = Post::find(1);
        $post->tag()->attach($request->tag);

        $image->move('upload/post/', $new_image);
        return redirect()->back()->with('success', "Your Post has been submitted");
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
    public function edit(Post $post)
    {
        $tag = Tag::all();
        $category = Category::all();
        return view('admin.post.edit', compact('post','tag', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostEditRequest $request,Post $post)
    {

       if ($request->has('image')) {
         $image = $request->image;
         $new_image = time().$image->getClientOriginalName();

         if($post->image) {
           File::delete($post->image);
         }
         $image->move('upload/post/', $new_image);
         $post_data = [
           'category_id' => $request->category_id,
           'judul' => $request->judul,
           'slug' => str::slug($request->judul),
           'content' => $request->content,
           'image' => 'upload/post/'.$new_image,
         ];
       }else {
         $post_data = [
           'category_id' => $request->category_id,
           'judul' => $request->judul,
           'slug' => str::slug($request->judul),
           'content' => $request->content
         ];
       }

       $post->tag()->sync($request->tag);
       $post->update($post_data);
       return redirect()->back()->with('success', "Your Post has been updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->with('success', "Your Post moved to trash");
    }

    public function trash()
    {
      $posts = Post::onlyTrashed()->paginate(10);
      return view('admin.post.trash', compact('posts'));
    }

    public function restore($id){
      $post = Post::withTrashed()->findOrFail($id);
      if($post->trashed()){
      $post->restore();
      return redirect()->route('post.trash')->with('success', 'Post successfully restored');
      } else {
       return redirect()->route('post.trash')->with('status', 'Post is not in trash');
      }
    }

    public function deletePermanent($id){
      $post = Post::withTrashed()->findOrFail($id);
      if(!$post->trashed()){
          return redirect()->route('post.trash')->with('status', 'Post is not in trash!');
      } else {
        $post->tag()->detach();
        File::delete($post->image);
        $post->forceDelete();
        return redirect()->route('post.trash')->with('success', 'Post permanently deleted!');
      }
    }


}
