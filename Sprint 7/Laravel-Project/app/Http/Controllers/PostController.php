<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    // public function show(Post $post){
        // $post = Post::where('slug', $slug)->firstorFail();
        // dd($post);

        // if(!$post){
        //     abort(404);
        // }        =====> sama dengan firstorFail()
        // return view('posts.show', compact('post'));

    public function index()
    {
        $posts = Post::latest()->paginate(6);

        // $posts = DB::table('posts')
        //     ->join('authors','posts.id','authors.post_id')
        //     ->paginate(6);

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function store()
    {
        
        // $post = new Post;
        // $post->title = $request->title;
        // $post->slug = \Str::slug($request->title);
        // $post->body = $request->body;
        // $post->save();
        // Post::create([
        //     'title' => $request->title,
        //     'slug' => \Str::slug($request->title),
        //     'body' => $request->body
        // ]);

        // $attr = request()->validate([
        //     'title' => 'required|max:30',
        //     'body' => 'required'
        //     ]);
        //     Assign title to the slug
        // $attr['slug'] = \Str::slug(request('title'));

        // Create new post
        // Post::create($attr);

        $post = new Post;
        $post->title = request('title');
        $post->slug = \Str::slug(request('title'));
        $post->body = request('body');
        $post->save();

        session()->flash('success', 'The post was created');
        return redirect()->to('posts');
    }

    public function update(Post $post)
    {
        // $attr = request()->validate([
        //     'title' => 'required|max:30',
        //     'body' => 'required'
        //     ]);

        //     $post->update($attr);

        // $post = Post::findOrFail($post->slug);
        $post->title = request('title');
        $post->body = request('body');
        $post->save();

        session()->flash('success', 'The post was updated');

        return redirect()->to('posts');
    }
    
    public function destroy(Post $post)
    {
        $post->delete();
        session()->flash('deleted', 'The post was deleted');

        return redirect()->to('posts');
    }
}

