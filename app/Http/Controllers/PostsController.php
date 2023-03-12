<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\postdetails;
use App\Languague;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;

class PostsController extends Controller
{
    public function work() {
        $images = POST::find(1)->with(['languague','postdetails'])->paginate(9);
        return view('work',compact('images'));
    }
    public function post() {
        return view('auth.post');
    }
    public function create(PostRequest $request) {
        $post = Post::create([
            'user_id' => Auth::id(),
            'photo' => $request->input('photo'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $postdetails = $request->all();
        foreach($postdetails['postdetail'] as $postdetail){
            foreach($postdetail as $key => $value){
                $data = [
                    'post_id' => $post->id,
                    'image' => $value,
                    'created_at' => now(),
                    'updated_at' => now()
                ];
                $postdetail = postdetails::insert($data);
            }
        }

        $languagues = $request->all();
        foreach($languagues['languague'] as $languague){
            foreach($languague as $key => $value){
                $data= [
                    'post_id' => $post->id,
                    'languague' => $value,
                    'created_at'=> now(),
                    'updated_at' => now()
                ];
                $languague = Languague::insert($data);
            }
        }

        return redirect()->route('home');
    }
}
