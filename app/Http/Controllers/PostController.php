<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DB;

class PostController extends Controller
{
    // Show the form
    public function post_create(){

        $category= DB::table('categories')->get();

        return view('admin.page.post_create', compact('category'));
    }



    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'contant' => 'required|string',
            'category' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,webp,png,jpg,gif,svg|max:2048',
        ]);


        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = null;
        }


        DB::table('posts')->insert([
            'title' => $request->title,
            'contant' => $request->contant,
            'category' => $request->category,
            'image' => $imagePath,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('psot.create')->with('success', 'Post created successfully!');
    }




   
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $category= DB::table('categories')->get();
        return view('admin.page.posts_edit', compact('post', 'category'));
    }


    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

   
        $request->validate([
            'title' => 'string|max:255',
            'contant' => 'string',
            'category' => 'string',
            'image' => 'nullable|image|mimes:jpeg,png,webp,jpg,gif,svg|max:2048',
        ]);

     
          
    if ($request->hasFile('image')) {
       
        if ($post->image && \Storage::disk('public')->exists($post->image)) {
            \Storage::disk('public')->delete($post->image);
        }

     
        $imagePath = $request->file('image')->store('images', 'public');
    } else {

        $imagePath = $post->image;
    }

      
        $post->update([
            'title' => $request->title,
            'contant' => $request->contant,
            'category' => $request->category,
            'image' => $imagePath,
        ]);

        return redirect()->route('psot.list')->with('success', 'Post updated successfully!');
    }

  


    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        if ($post->image) {
           
            \Storage::delete('public/' . $post->image);
        }
        $post->delete();

        return redirect()->route('psot.list')->with('success', 'Post deleted successfully!');
    }
}
