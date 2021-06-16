<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use App\Post;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::paginate(15);
        $post = Post::all();

        $data = [
            'authors' => $authors,
            'post'   => $post
        ];
        return view('authors.index', compact('data'));
    }

    public function show(Author $author)
    {
        $authorTitle = 'Post from ';
        $posts = $author->post()->paginate(6);
                // dd($posts);
        return view('posts.index', compact('posts', 'authorTitle', 'author'));
    }
}