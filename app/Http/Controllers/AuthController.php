<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\Models\User;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        if (Auth::check()) {
            if (Auth::user()->role == 'user') {
                return redirect()->route('user.reservasi.index');
            } elseif (Auth::user()->role == 'admin') {
                return redirect()->route('admin.index');
            }
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $rules = [
            'email'                 => 'required|email',
            'password'              => 'required|string'
        ];

        $messages = [
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'password.required'     => 'Password wajib diisi',
            'password.string'       => 'Password harus berupa string'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ];

        Auth::attempt($data);

        if (Auth::check() && Auth::user()->role == 'admin') { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('admin.index');
        } elseif (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('user.reservasi.index');
        } else { // false

            //Login Fail
            Session::flash('error', 'Email atau password salah');
            return redirect()->route('login');
        }
    }

    public function showFormRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // User
        $rules = [
            'email'                 => 'required|email|unique:users,email',
            'password'              => 'required|confirmed',
        ];

        $messages = [
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'email.unique'          => 'Email sudah terpakai',
            'password.required'     => 'Password wajib diisi',
            // 'password.confirmed'    => 'Password tidak sama dengan konfirmasi password'
        ];

        $validator1 = Validator::make($request->all(), $rules, $messages);

        if ($validator1->fails()) {
            return redirect()->back()->withErrors($validator1)->withInput($request->all);
        }

        // Save the data
        $user = new User;
        $user->email = strtolower($request->email);
        $user->password = Hash::make($request->password);
        $user->role = 'user';
        $user->email_verified_at = \Carbon\Carbon::now();
        $simpan = $user->save();

        if ($simpan) {
            Session::flash('success', 'Register berhasil! Silahkan login');
            return redirect()->route('login');
        } else {
            Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
            return redirect()->route('register');
        }
    }

    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('index');
    }
}
