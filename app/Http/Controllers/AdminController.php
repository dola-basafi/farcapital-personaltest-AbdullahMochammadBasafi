<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard()
    {
        $dataPendonor = Pengguna::all()->where('role', 0);
        return view('petugas.dashboard', ['dataPendonor' => $dataPendonor]);
    }

    function chekupform($id)
    {
        $pendonor = Pengguna::find($id);

        $datetime1 = date_create($pendonor->tanggalLahir);
        $datetime2 = date_create(date("Y-m-d"));

        $umur = date_diff($datetime1, $datetime2);
        $umur = $umur->format('%y');

        return view('petugas.checkup', ['id' => $id, 'umur' => $umur]);
    }

    function detail($id)
    {
        $pendonor = Pengguna::find($id);

        $datetime1 = date_create($pendonor->tanggalLahir);
        $datetime2 = date_create(date("Y-m-d"));

        $umur = date_diff($datetime1, $datetime2);
        $pendonor->umur = $umur->format('%y');

        return view('petugas.detailPendonor', ['pendonor' => $pendonor,]);
    }
    function checkup(Request $request, $id)
    {
        $pengguna = Pengguna::find($id);
        foreach ($request->input() as $key => $value) {
            if ($key == "_token") {
                continue;
            }
            if ($value == 0) {
                $pengguna->statusCheckKesehatan = 0;
                $pengguna->save();
                return redirect()->route('dashboard');
            }
        }
        $pengguna->statusCheckKesehatan = 1;
        $pengguna->save();
        return redirect()->route('dashboard');
    }
}
