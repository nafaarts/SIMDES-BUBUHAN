<?php

namespace App\Http\Controllers;

use App\Models\agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('halamanadmin.agenda', [
            'daftaragenda' => agenda::latest()->get()
        ]);
    }

    public function showall()
    {
        $daftaragenda = agenda::latest()->get();
        // $datakegiata = kegiatan::latest()->paginate(3);
        // $dataperangkat = perangkat::latest()->paginate(3);
        return view('allmasyarakat.agenda', compact('daftaragenda'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahadmin.agenda');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validateData = $request->validate([
            // 'image' => 'image|file',
            'judulagenda' => 'required',
            'tanggalagenda' => 'required'
            // 'excerpt' => 'required',
            // 'isi' => 'required'
        ]);

        // if($request->file('image')){
        //     $validateData['image'] = $request->file('image')->store('gambar-proyek');
        // }

        // $validateData['excerpt'] = Str::limit(strip_tags($request->isi), 200);

        agenda::create($validateData);

        return redirect('/agenda')->with('succes', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show(agenda $agenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function edit(agenda $agenda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, agenda $agenda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daftaragenda = agenda::findOrFail($id);
        $daftaragenda->delete();

        return redirect( route('agenda.index'))->with('succes', 'data berhasil Dihapus');
    }
}
