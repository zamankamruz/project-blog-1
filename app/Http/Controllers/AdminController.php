<?php

namespace App\Http\Controllers;
use DB;

use App\Models\post;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
         
        $TotalPost = Post::count();

        return view('admin.page.dashboard', compact('TotalPost'));
    }


    

    public function post_list(){

        $posts = DB::table('posts')->get();
        return view('admin.page.post_list', compact('posts'));


    }

    public function about(){
        return view('admin.page.about');
    }

    public function contact(){
        $contact_info = DB::table('contact_infos')->get();

        return view('admin.page.contact', compact('contact_info'));
    }

 





}
