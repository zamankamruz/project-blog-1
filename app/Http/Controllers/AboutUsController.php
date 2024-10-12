<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use DB;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
   
    public function storeTeam(Request $request)
    {
       
       $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,webp,jpg,gif|max:2048', // Image validation
        ]);

        
      
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('team-images', 'public');
        } else {
            $imagePath = null;
        }
        
            DB::table('teams')->insert([
                'name' => $request->name,
                'role' => $request->role,
                'image' => $imagePath, 
                'created_at' => now(),
                'updated_at' => now(), 
            ]);
    
         return redirect()->back()->with('success', 'Team member added successfully!');
      
    
    }




}
