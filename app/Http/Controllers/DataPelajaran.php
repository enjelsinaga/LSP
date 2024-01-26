<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use DB;

class DataPelajaran extends Controller
{

    public function index()
    {
        $data = DB::select(DB::raw("SELECT * FROM data_pelajaran"));
        return view('data_pelajaran.index', compact('data'));
    }

    public function create()
    {
        return view('data_pelajaran.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_pelajaran' => 'required',
            'kelas_ajaran' => 'required',
            'pengajar' => 'required',
            'periode_ajaran' => 'required'
        ]);

        DB::insert("INSERT INTO `data_pelajaran` (`id`, `nama_pelajaran`, `kelas_ajaran`, `pengajar`, `periode_ajaran`) VALUES (uuid(), ?, ?, ?, ?)",
        [$request->nama_pelajaran,$request->kelas_ajaran,$request->pengajar,$request->periode_ajaran]);
        return redirect()->route('data_pelajaran.index')->with(['success' => 'Data berhasil Disimpan!']);
    }
    public function show($id)
    {
      
    }

    public function edit($id)
    {
        $data = DB::table('data_pelajaran')->where('id', $id)->first();
        return view('data_pelajaran.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_pelajaran' => 'required',
            'kelas_ajaran' => 'required',
            'pengajar' => 'required',
            'periode_ajaran' => 'required'
        ]);

        DB::update("UPDATE data_pelajaran SET nama_pelajaran=?, kelas_ajaran=?, pengajar=?, periode_ajaran=? WHERE id=?",
            [$request->nama_pelajaran, $request->kelas_ajaran, $request->pengajar, $request->periode_ajaran, $id]);

        return redirect()->route('data_pelajaran.index')->with(['success' => 'Data Berhasil Diupdate']);
    }

    public function destroy($id)
    {
        DB::table('data_pelajaran')->where('id', $id)->delete();

        return redirect()->route('data_pelajaran.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}