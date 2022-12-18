<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function login(Request $request)
    {       
        $nik = $request->input('nik');
        $password = $request->input('password');        

        $pengguna = Pengguna::query()
            ->where('nik', $nik)
            ->first();
        if ($pengguna == null) {
            return redirect()
                ->back()
                ->withErrors([
                    "msg" => "nik atau password salah"
                ]);
        }
        if (!Hash::check($password, $pengguna->password)) {
            return redirect()
                ->back()
                ->withErrors([
                    "msg" => "nik atau password salah"
                ]);
        }
        if (!session()->isStarted()) session()->start();
        session()->put("logged", true);
        session()->put("role", $pengguna->role);
        session()->put('idPengguna', $pengguna->id);
        if($pengguna->role == 1){
            return redirect()->route('dashboard');
        }
        return redirect()->route('pengguna.persyaratanForm');
    }
    function logout()
    {
        session()->flush();
        return redirect()->route('index');
    }
}
