<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $req)
    {
        $credential = $req->only('username','password');

        if  (Auth::attempt($credential)){
            // Jika berhasil login, maka check rolenya
            if (Auth::user()->role=='admin'){
                return redirect('/admin');
            } else {
                return redirect('/kasir');
            }
        } else {
            // Jika belum login, kembalikan ke halaman login
            return redirect ('/');
        }
    }
}
?>