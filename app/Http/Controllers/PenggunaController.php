<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PenggunaController extends Controller
{
    function register(Request $request)
    {
        if (is_numeric($request->input('nik'))) {
            $request['nik'] = strval($request->input('nik'));
        } else {
            $request['nik'] = '';
        }
        $validated = [
            'nama' => 'required|max:255',
            'nik' => 'required|between:16,16|unique:pengguna',
            'password' => 'required',
            'alamat' => 'required',
            'jenisKelamin' => 'required|numeric',
            'tanggalLahir' => 'required|date'
        ];
        $validated = $request->validate($validated);
        Pengguna::create($validated);
        return redirect()->route('login');
    }
    function persyaratan(Request $request)
    {
        $pengguna = Pengguna::find($request->input('id'));
        foreach ($request->input() as $key => $value) {
            if ($key == "_token") {
                continue;
            }
            if ($value == 0) {
                $pengguna->statusPersyaratan = 0;
                $pengguna->save();
                return redirect()->route('logout');
            }
        }

        $pengguna->statusPersyaratan = 1;
        $pengguna->save();
        return redirect()->route('logout');
    }
}
