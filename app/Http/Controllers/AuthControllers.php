<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Hash;

class AuthControllers extends Controller
{


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login_page(){
        return view('login');
    }
    public function register_page(){
        return view('register');
    }
    public function register(Request $request){
        $username = $request->username;
        $full_name = $request->full_name;
        $password = $request->password;
        $pertanyaan = $request->pertanyaan;
        $jawaban = $request->jawaban;

        $data = DB::table('users')->where('username',$username)->first();
        if($data){
            return redirect('/register')->with('error' , 'Gagal Membuat Akun , Username Sudah Ada');
        }else{
            DB::table('users')->insert(
                [
                    'name' => $full_name,
                    'username' => $username,
                    'password' => md5($password),
                    'question' => $pertanyaan,
                    'answer' => $jawaban
                ]
            );
    
            return redirect('/login')->with('success' , 'Berhasil membuat Akun , Silahkan Login');
        }
       
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
    
        // Find user by username using DB::table
        $user = DB::table('users')->where('username', $username)->first();
    
        // Check if the user exists and the password matches (using MD5)
        if ($user && $user->password === md5($password)) {
            // Authentication passed
            Auth::loginUsingId($user->id); // Incorrect usage, see note below
            return redirect('/')->with('success', 'Login berhasil!');
        } else {
            // Authentication failed
            return redirect()->back()->with('error', 'Login gagal. Silakan cek kembali username dan password Anda.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Logout berhasil!');
    }
}
