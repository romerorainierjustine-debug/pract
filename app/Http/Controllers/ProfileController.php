<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;
use App\Models\User;
class ProfileController extends Controller
{
    public function show()
    {
        return view('auth.profile');
    }

    public function update(ProfileUpdateRequest $request)
    {
        if ($request->password) {
            auth()->User()->update(['password' => Hash::make($request->password)]);
        }

        auth()->User()->update([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'midname' => $request->midname,
            'age' => $request->age,
            'address' => $request->address,
            'zipcode' => $request->zipcode,
        ]);

        return redirect()->back()->with('success', 'Profile updated.');
    }
}
