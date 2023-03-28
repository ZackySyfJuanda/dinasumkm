<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

use illuminate\Support\Facades\Hash;

class authcontroller extends Controller
{
    public function user_registration(Request $request) {

        $validateData = $request->validate([
            'name' =>'required|max:255',
            'email' =>'required|max:255',
            'password' =>'required|max:255',
            'district' =>'required|max:255',
            'village' =>'required|max:255',
            'address' =>'required|max:255',
        ]);
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        return redirect('/login')->with('success', 'Registrasi Berhasil');

    }
    
}