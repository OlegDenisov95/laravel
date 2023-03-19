<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class PostController extends Controller
{
    protected Hasher $hasher;

    public function __construct(Hasher $hasher,Request $request)
    {
        dump($request->route()->getName());
        $this->hasher = $hasher;
    }
    //
    public function index(Request $request)
    {
        $result = $this->hasher->make( $request->get('foo'));

        return view('posts.index', ['result' => $result]);
    }
    public  function store(Request $request)
    {
        dd($request);
    }
    public function create()
    {
        return view('posts.create');
    }

    public function show($id)
    {
        return "Post $id";
    }

    public function edit($id)
    {
        return view('posts.edit',['id'=>$id]);
    }

    public function update(Request $req)
    {
        return "Text: ".$req->get('title');
    }

    public function destroy($id)
    {
        dump(__METHOD__);
        dd($id);
    }
}
