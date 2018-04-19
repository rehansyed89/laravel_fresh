<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Post $post)
    {
        /*$f = \Faker\Factory::create();
        foreach (range(1,1000) as $x){
            $post->create([
                'title' => $f->sentence(2),
                'body' => $f->sentence(20),
            ]);

        }*/
        $posts = $post->orderBy('created_at',$this->getOrder($request))->paginate($request->get('per-page',5));
        return view('home')->with('posts',$posts);
    }
    public function getOrder($request){
        return in_array($request->order, ['desc','asc']) ? $request->order : 'desc';
    }
}
