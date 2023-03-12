<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class UsersController extends Controller
{
    public function top() {
        $user = DB::table('users')
            ->leftJoin('posts','users.id','=','posts.user_id')
            ->where('users.id',1)
            ->first();
        $images = POST::find(1)->with(['languague', 'postdetails', 'functions'])->limit(3)->get();
        return view('portfolio',compact('user', 'images'));
    }
    public function about() {
        $user = DB::table('users')
            ->where('id', 1)
            ->first();
        $carrier = DB::table('users')
            ->leftJoin('carrier', 'users.id', '=', 'carrier.user_id')
            ->where('users.id', 1)
            ->get();
        $hobbies = DB::table('users')
            ->leftJoin('hobbies', 'users.id', '=', 'hobbies.user_id')
            ->where('users.id', 1)
            ->get();
        return view('about', compact('user', 'carrier', 'hobbies'));
    }
    public function contact() {
        return view('contact');
    }
}
