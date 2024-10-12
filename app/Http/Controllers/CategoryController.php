<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

use Illuminate\Http\Request;

use DB;

class CategoryController extends Controller
{
 
    public function category(){

        $categories = DB::table('categories')->get();

        return view('admin.page.category', ['categories'=>$categories]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'category_name' => 'required|string|max:255|unique:categories',
            
        ]);

        Category::create([
            'category_name' => $request->category_name,
            
        ]);

   
        return redirect()->route('post.category')->with('success', 'Category added successfully!');
    
    }












    public function edit($id)
    {
        $category = Category::findOrFail($id);
    
        return view('admin.page.categories_edit', compact('category'));
    }
    



    public function update(Request $request, $id)
    {
        
        $request->validate([
            'category_name' => 'required|max:255',
            'category_not' => 'required|max:255', 
        ]);
    
        $category = Category::findOrFail($id);
    
        
        $category->category_name = $request->category_name;
        $category->save();
    
        
        $oldCategoryName = $request->category_not;
    
        
        DB::table('posts')
            ->where('category', $oldCategoryName)
            ->update(['category' => $request->category_name]);
    
        
        return redirect()->route('post.category')->with('success', 'Category and related posts updated successfully!');
    }
    
    
















    public function destroy($id)
    {

        $category = Category::findOrFail($id);
    

        $category->delete();

        return redirect()->route('post.category')->with('success', 'Category deleted successfully!');
    }
    





}
