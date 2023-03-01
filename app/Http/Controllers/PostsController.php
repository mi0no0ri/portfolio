<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class PostsController extends Controller
{
    public function work() {
        $images = POST::find(1)->with(['languague','postdetails'])->paginate(9);
        return view('work',compact('images'));
    }
}
