<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/pertamina/list-order');
        }else {
            return redirect('/');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');

    }
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required', 'string', 'email', 'max:255',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'gender' => $request->gender,
            'region_id' => 1,
            'role_id' => 1,
            'password' => Hash::make($request->password)
        ]);
        return redirect('/');
    }
}
