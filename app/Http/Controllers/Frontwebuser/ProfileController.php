<?php

namespace App\Http\Controllers\Frontwebuser;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $edit_adminuser = User::findOrFail($userId);

        return view('frontwebuser.profile.edit', compact('edit_adminuser'));
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:6',
        ]);
    
        $user = User::findOrFail(Auth::id());
        // dd($user);
        $user->password = $request->password;
        $user->save();
    
        return redirect()->back()->with('success', 'Password updated successfully!');
    }
}
