<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;

use App\Post;
use App\Category;
use App\Tag;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
      // dd('test');
        $posts    = $post->latest()->paginate(5);
        $recents  = $post->orderBy('created_at', 'desc')->take(5)->get();
        $reviews = $post->where('category_id', 4)->get();
        $entertainments = $post->where('category_id', 3)->orderBy('created_at', 'desc')->take(3)->get();
        $animes = $post->where('category_id', 6)->orderBy('created_at', 'desc')->take(3)->get();
        $movies = $post->where('category_id', 7)->orderBy('created_at', 'desc')->take(3)->get();
        $hardwares = $post->where('category_id', 5)->orderBy('created_at', 'desc')->take(5)->get();
        $categories = Category::all();
        $tags = Tag::all();
        return view('blog', compact('posts', 'recents', 'reviews', 'entertainments', 'movies', 'animes', 'hardwares', 'categories', 'tags'));
    }

    public function imgUplaod(Request $request)
    {
        $mainImage = $request->file('file');
        $filename = time() . '.' . $mainImage->extension();
        Image::make($mainImage)->save(public_path('upload/post/' . $filename));
        return json_encode(['location' => asset('upload/post/' . $filename)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $posts = Post::where('slug', $slug)->get();
        $post = new Post();
        $recents  = $post->orderBy('created_at', 'desc')->take(3)->get();
        $entertainments = $post->where('category_id', 3)->orderBy('created_at', 'desc')->take(3)->get();
        $movies = $post->where('category_id', 7)->orderBy('created_at', 'desc')->take(3)->get();
        $categories = Category::all();
        $tags = Tag::all();
        return view('blog.post', compact('posts','post','recents','entertainments','movies','categories','tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
