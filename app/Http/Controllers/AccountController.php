<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('manage-account.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('manage-account.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:6|confirmed',
            'role' => 'required|in:user,admin',
        ]);

        // Temukan pengguna berdasarkan ID
        $user = User::findOrFail($id);

        // Update nama dan email
        $user->name = $request->name;
        $user->email = $request->email;

        // Jika password diisi, update password
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // Update role pengguna
        $user->role = $request->role;

        // Simpan perubahan ke database
        $user->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('manage-account.index')->with('success', 'Account succesfully updated');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('manage-account.index')->with('success', 'Account successfully deleted');
    }

    public function create()
    {
        return view('manage-account.create');
    }

    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|in:user,admin',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('manage-account.index')->with('success', 'Successfully Create Account');
    }
}