<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function postsListing(){
        $response = Http::get("https://jsonplaceholder.typicode.com/posts");

        $response = $response->json();
        return response()->json(["status"=>200,"count"=>count($response),"data"=>$response]);
    }
    public function createPost(Request $request){
        $response = Http::post("https://jsonplaceholder.typicode.com/posts",[
            "userId"=>1,
            "title"=>"Laravel 8 http client example",
            "body"=>"this is a post..."

        ]);

        $response = $response->body();
        print_r($response);
    }
    public function updatePost(){
        $response = Http::put("https://jsonplaceholder.typicode.com/posts/1",
        [
            "userId"=>1,
            "title"=>"laravel updated",
            "body"=>"This is post"
        ]);
        $response = $response->json();
        return response()->json(["status"=>200, "data"=>$response]);
    }
    public function deletePost(){
        $response = Http::delete("https://jsonplaceholder.typicode.com/posts/1");

        $response = $response->body();

        print_r($response);
    }
}
