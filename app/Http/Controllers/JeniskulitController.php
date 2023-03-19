<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jeniskulit;

class JeniskulitController extends Controller
{
    public function index()
    {
        $jeniskulits = Jeniskulit::all();
        // $jeniskulits = Jeniskulit::orderBy('created_at', 'desc')->get();
        return view('jeniskulit.datajeniskulit', compact('jeniskulits'));
    }

    public function tambahjeniskulit()
    {
        return view('jeniskulit.tambahdata');
    }

    public function insertdata(Request $request)
    {
        Jeniskulit::create($request->all());

        return redirect()->route('jeniskulit')->with(["message" => "<script>swal('Berhasil', 'Data Berhasil di Tambahkan', 'success');</script>"]);
    }

    public function editdata($id)
    {
        $jeniskulits = Jeniskulit::find($id);
        return view('jeniskulit.editdata', compact('jeniskulits'));
    }

    public function updatedata(Request $request, $id)
    {
        $jeniskulits = Jeniskulit::find($id);
        $jeniskulits->update($request->all());

        return redirect()->route('jeniskulit')->with(["message" => "<script>swal('Berhasil', 'Data Berhasil di Simpan', 'success');</script>"]);
    }

    public function delete($id)
    {
        $jeniskulits = Jeniskulit::find($id);
        $jeniskulits->delete();

        return redirect()->route('jeniskulit')->with(["message" => "<script>swal('Berhasil', 'Data Berhasil di Hapus', 'success');</script>"]);
    }


    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'kode_jenis' => 'required',
    //         'nama' => 'required',
    //         'deskripsi' => 'required',
    //         'rekomen_treatment'=>'required',
    //     ]);

    //     $jeniskulits = Jeniskulits::create([
    //         'kode_jenis' => $request->kode_jenis,
    //         'nama' => $request->nama,
    //         'deskripsi' => $request->deskripsi,
    //         'rekomen_treatment' => $request->rekomen_treatment,
    //     ]);

    //     return redirect('/jeniskulit');
    // }

    // public function show(Jeniskulit $jeniskulit)
    // {
    //     return view('jeniskulits.show',compact('jeniskulit'));
    // }
}
