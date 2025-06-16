<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.profile.index', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:20',
        ]);

        if ($request->email) {
            User::where('id', $user->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'real_password' => $request->password,
            ]);
        } else {
            User::where('id', $user->id)->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }

        return redirect()->route('admin.profile.index')->with('success', 'Profile updated successfully.');
    }
}
