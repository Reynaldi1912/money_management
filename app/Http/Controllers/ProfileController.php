<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use DB;
use Exception;

class ProfileController extends Controller
{
    public function forget_password3_post(Request $request){
        try{
            DB::table('users')->where('username', $request->username)->update([
                'password' => md5($request->password),
            ]);

            return redirect('/login')->with('success', 'berhasil reset password!');
        }catch(exception $e){
            return redirect('/login')->with('error', 'gagal reset password!');

        }
    }
}
