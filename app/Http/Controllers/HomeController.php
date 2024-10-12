<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Models\post;

class HomeController extends Controller
{
    public function home(){
        $posts=DB::table('posts')->get();

        return view('frontend.page.home', compact('posts'));
    }

    public function about(){
        $about = DB::table('teams')->get();

        return view('frontend.page.about', compact('about'));
    }
    public function blog(){
        $posts=DB::table('posts')->get();
        
        return view('frontend.page.blog', compact('posts'));
    }
    public function contact(){

        $contact_info = DB::table('contact_infos')->get();


        return view('frontend.page.contact', compact('contact_info'));
    }



    public function post_show($id, $title)
    {
        // Fetch the post by its ID or fail if not found
        $post_data = Post::findOrFail($id);

        // $posts = DB::table('posts')->get();
        $posts = Post::orderBy('created_at', 'desc')->take(3)->get();

    
        // Pass the post data to the view
        return view('frontend.page.post_show', compact('post_data', 'posts'));
    }





}
