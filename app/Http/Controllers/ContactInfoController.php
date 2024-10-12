<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactInfoController extends Controller
{
    
    public function Update(Request $request)
    {
        
        $validatedData = $request->validate([
            'email' => 'email|max:255',
            'phone' => 'string|max:20',
            'address' => '|string|max:255',
            'facebook' => 'url|max:255',
            'twitter' => 'url|max:255',
            'linkedin' => 'nullable|url|max:255',
        ]);

        
        $contactInfo = DB::table('contact_infos')->first();

        if ($contactInfo) {
           
            DB::table('contact_infos')
                ->where('id', $contactInfo->id)
                ->update([
                    'email' => $validatedData['email'],
                    'phone' => $validatedData['phone'],
                    'address' => $validatedData['address'],
                    'facebook' => $validatedData['facebook'],
                    'twitter' => $validatedData['twitter'],
                    'linkedin' => $validatedData['linkedin'],
                    'updated_at' => now(),
                ]);

            return redirect()->back()->with('success', 'Contact information updated successfully!');
        } 
    }
}
