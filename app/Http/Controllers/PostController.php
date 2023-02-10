<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            [
                'title' => 'Post 1',
                'content' => 'Content 1',
            ],
            [
                'title' => 'Post 2',
                'content' => 'Content 2',
            ],
            [
                'title' => 'Post 3',
                'content' => 'Content 3',
            ],
        ];

        return view('posts.index', compact('posts'));

    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
