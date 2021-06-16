<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;
use App\Identity;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class IdentityController extends Controller
{
    public function index()
    {
        $identities = Identity::all();
        $authors = Author::all();
        $posts = Post::all();

        $data = [
            'identities' => $identities,
            'authors' => $authors,
            'post' => $posts
        ];
        return view('identities.index', compact('data'));
    }
    
    public function store()
    {
        $author = new Author;
        $author->name = request('name');
        $author->age = request('age');
        $author->post_id = request('post_id');
        $author->save();

        $identity = new Identity;
        $identity->author_id = $author->id;
        $identity->address = request('address');
        $identity->email = request('email');
        $identity->phone = request('phone');
        $identity->save();

        session()->flash('success', "The author's data was created");
        return redirect()->to('identities');
    }
    
    public function update(Author $author, Identity $identity)
    {
        $author->name = request('name');
        $author->age = request('age');
        $author->post_id = request('post_id');
        $author->save();

        $identity->address = request('address');
        $identity->email = request('email');
        $identity->phone = request('phone');
        $identity->save();

        session()->flash('success', "The author's data was updated");

        return redirect()->to('identities');
    }
    public function destroy($identity)
    {
        $id = Identity::findOrFail($identity);
        Author::findOrFail($id->author_id)->delete();
        $id->delete();
         
        session()->flash('deleted', "The author's data was deleted");

        return redirect()->to('identities');
    } 
}
