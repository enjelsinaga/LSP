<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class GuruSLBController extends Controller
{

    public function index()
    {
        $data=DB::select(DB::raw("select * from guru1"));
        return view('guru.index', compact('data'));
    }


    public function create()
    {
        return view('guru.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'nip'=> 'required',
            'nama' => 'required',
            'kelas_diajar' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required'
            ]);
            
            
            DB::insert("INSERT INTO `guru1` (`id`, `nip`, `nama`, `kelas_diajar`, `alamat`, `no_hp`) VALUES (uuid(), ?, ?, ?, ?, ?)",
            [$request->nip,$request->nama,$request->kelas_diajar,$request->alamat,$request->no_hp]);
            return redirect()->route('guru1.index')->with(['success' => 'Data berhasil Disimpan!']);
        
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=DB::table('guru1')->where('id', $id)->first();
        return view('guru.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nip'=> 'required',
            'nama' => 'required',
            'kelas_diajar' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required'
            ]);

            DB::update("UPDATE guru1 SET nip=?,nama=?,kelas_diajar=?,alamat=?,no_hp=? WHERE id=?",
            [$request->nip,$request->nama,$request->kelas_diajar,$request->alamat,$request->no_hp,$id]);
        
        return redirect()->route('guru1.index')->with(['success' => 'Data Berhasil Diupdate']);
        }

    public function destroy($id)
    {
        DB::table('guru1')->where('id', $id)->delete();

        //redirect to index
        return redirect()->route('guru1.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function logout()
    {
       

        return redirect('/login')->with('success', 'Logout berhasil.');
    }
}
