<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    function create()
    {
        return view('posts.create');
    }

    function store()
    {
        $data= request()->validate([
            "caption"=>'required',
            "image"=>['required','image']
        ]);

        auth()->user()->posts()-create($data);


        dd($data);
    }
}
