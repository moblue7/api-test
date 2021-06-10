<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\ReadPostRequest;
use Illuminate\Http\Request;
use \App\Models\Post;

class PostController extends Controller
{
    public function create(CreatePostRequest $request){

        try{

            $post = Post::create([
                'title' => $request->post('title'),
                'body' => $request->post('body'),
            ]);

            return response()->json([
                'id' => $post->id,
            ]);

        }catch(\Exception $e){
            return response()->json([
                'id' => -1,
            ]);
        }
    }

    public function read(ReadPostRequest $request){

        $post = Post::query()->find($request->post('id'));

        if($post) {
            return response()->json([
                'id' => $post->id,
                'title' => $post->title,
                'body' => $post->body,
            ]);
        }

        return response()->json([
            'error' => 'given id not found',
        ]);
    }

    public function update(ReadPostRequest $request){

        $post = Post::query()->find($request->post('id'));

        if(!$post) {
            return response()->json([
                'error' => 'given id not found',
            ]);
        }

        $post->title = $request->post('title');
        $post->body = $request->post('body');

        if($post->save()){
            return response()->json([
                'result' => true,
            ]);
        }

        return response()->json([
            'result' => false,
        ]);
    }

    public function delete(ReadPostRequest $request){

        $post = Post::query()->find($request->post('id'));

        if(!$post) {
            return response()->json([
                'error' => 'given id not found',
            ]);
        }

        if($post->delete()){
            return response()->json([
                'result' => true,
            ]);
        }

        return response()->json([
            'result' => false,
        ]);
    }
}
