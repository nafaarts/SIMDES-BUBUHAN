<?php

namespace App\Http\Controllers;

use App\Models\surat;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function sktm()
    // {

    //     // $pdf = App::make('dompdf.wrapper');
    //     // return $pdf->loadView('surat.sktm')->stream();
    //     // $data = [];
    //    $sktm = Pdf::loadView('surat.sktm');
    //    return $sktm->download();
    // }

    // public function rkp()
    // {        
    //    $rkp = Pdf::loadView('surat.rkp');
    //    return $rkp->download();
    // }

    // public function sp()
    // {        
    //    $sp = Pdf::loadView('surat.sp');
    //    return $sp->download();
    // }
    
    // public function skk()
    // {        
    //    $skk = Pdf::loadView('surat.skk');
    //    return $skk->download();
    // }

    // public function skbmr()
    // {        
    //    $skbmr = Pdf::loadView('surat.skbmr');
    //    return $skbmr->download();
    // }

    // public function skh()
    // {        
    //    $skh = Pdf::loadView('surat.skh');
    //    return $skh->download();
    // }

    // public function skbm()
    // {        
    //    $skbm = Pdf::loadView('surat.skbm');
    //    return $skbm->download();
    // }

    // public function skj()
    // {        
    //    $skj = Pdf::loadView('surat.skj');
    //    return $skj->download();
    // }

    // public function skpo()
    // {        
    //    $skpo = Pdf::loadView('surat.skpo');
    //    return $skpo->download();
    // }

    // public function skn()
    // {        
    //    $skn = Pdf::loadView('surat.skn');
    //    return $skn->download();
    // }

    // public function skkir()
    // {        
    //    $skkir = Pdf::loadView('surat.skkir');
    //    return $skkir->download();
    // }

    // public function skkb()
    // {        
    //    $skkb = Pdf::loadView('surat.skkb');
    //    return $skkb->download();
    // }

    // public function skrkip()
    // {        
    //    $skrkip = Pdf::loadView('surat.skrkip');
    //    return $skrkip->download();
    // }

    // public function skrskck()
    // {        
    //    $skrskck = Pdf::loadView('surat.skrskck');
    //    return $skrskck->download();
    // }

    public function surat()
    {
        $surat = surat::latest()->get();
        surat::where('isOpened', false)->update(['isOpened' => 1]);
        // $surat = surat::all();
        // dd($surat);
        return view('halamanadmin.surat', compact('surat')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        // $validateData = 
        $request->validate([
            // 'user_id' => 'required',
            'jenis_surat' => 'required',
            'keperluan' => 'nullable',
            // 'surat_path' => 'nullable',
            'jabatan' => 'nullable',
            'tanggalpermohonan' => 'nullable',
            'prihalhapermohonan' => 'nullable',
            'tujuanpermohonan' => 'nullable',
            'pemberibantuan' => 'nullable',
            'deskripsibaranghilang' => 'nullable',
            'tanggalstatusjanda' => 'nullable',
            'namaayah' => 'nullable',
            'namaibu' => 'nullable',
            'nikayah' => 'nullable',
            'nikibu' => 'nullable',
            'tanggallahirayah' => 'nullable',
            'tanggallahiribu' => 'nullable',
            'tempatlahirayah' => 'nullable',
            'tempatlahiribu' => 'nullable',
            'agamaayah' => 'nullable',
            'agamaibu' => 'nullable',
            'pekerjaanayah' => 'nullable',
            'pekerjaanibu' => 'nullable',
            'kewarganegaraanayah' => 'nullable',
            'kewarganegaraanibu' => 'nullable',
            'alamatayah' => 'nullable',
            'alamatibu' => 'nullable',
            'kepalakeluarga' => 'nullable',
            'alamattujuan' => 'nullable',
            'jumlahorangyangpindah' => 'nullable',
            'namaorangyangmeninggal' => 'nullable',
            'alamatlahirorangyangmeninggal' => 'nullable',
            'tanggallahirorangyangmeninggal' => 'nullable',
            'kewarganegaraanorangyangmeninggal' => 'nullable',
            'alamatorangyangmeninggal' => 'nullable',
            'harimeninggal' => 'nullable',
            'tanggalmeninggal' => 'nullable',
            'namayangberbeda' => 'nullable',
            'tempatnamayangberbeda' => 'nullable',
            'tanggalnamayangberbeda' => 'nullable',
            'isOpened' => 'nullable',
            
        ]);
        $noSurat = Surat::whereYear('created_at', date('Y'))
            ->where('jenis_surat', '=', $request->jenis_surat)
            ->count();
            
            $surat = new surat();
            $surat->no_surat= $noSurat;
            $surat->status=('menunggu');
            $namePdf = Str::random(16);
            $surat->user_id = auth()->user()->id;
            $surat->jenis_surat = $request->jenis_surat;
            $surat->keperluan = $request->keperluan;  
            $surat->jabatan=$request->jabatan;
            $surat->tanggalpermohonan=$request->tanggalpermohonan;
            $surat->prihalpermohonan=$request->prihalpermohonan;
            $surat->tujuanpermohonan=$request->tujuanpermohonan;
            $surat->pemberibantuan=$request->pemberibantuan;
            $surat->deskripsibaranghilang=$request->deskripsibaranghilang;
            $surat->tanggalstatusjanda=$request->tanggalstatusjanda;
            $surat->namaayah=$request->namaayah;
            $surat->namaibu=$request->namaibu;
            $surat->nikayah=$request->nikayah;
            $surat->nikibu=$request->nikibu;            
            $surat->tanggallahirayah=$request->tanggallahirayah;
            $surat->tanggallahiribu=$request->tanggallahiribu;
            $surat->tempatlahirayah=$request->tempatlahirayah;
            $surat->tempatlahiribu=$request->tempatlahiribu;
            $surat->agamaayah=$request->agamaayah;
            $surat->agamaibu=$request->agamaibu;
            $surat->pekerjaanayah=$request->pekerjaanayah;
            $surat->pekerjaanibu=$request->pekerjaanibu;
            $surat->kewarganegaraanayah=$request->kewarganegaraanayah;
            $surat->kewarganegaraanibu=$request->kewarganegaraanibu;
            $surat->alamatayah=$request->alamatayah;
            $surat->alamatibu=$request->alamatibu;
            $surat->kepalakeluarga=$request->kepalakeluarga;
            $surat->alamattujuan=$request->alamattujuan;
            $surat->jumlahorangyangpindah=$request->jumlahorangyangpindah;
            $surat->namaorangyangmeninggal=$request->namaorangyangmeninggal;
            $surat->alamatlahirorangyangmeninggal=$request->alamatlahirorangyangmeninggal;
            $surat->tanggallahirorangyangmeninggal=$request->tanggallahirorangyangmeninggal;
            $surat->kewarganegaraanorangyangmeninggal=$request->kewarganegaraanorangyangmeninggal;
            $surat->alamatorangyangmeninggal=$request->alamatorangyangmeninggal;
            $surat->harimeninggal=$request->harimeninggal;
            $surat->tanggalmeninggal=$request->tanggalmeninggal;
            $surat->namayangberbeda=$request->namayangberbeda;
            $surat->tempatnamayangberbeda=$request->tempatnamayangberbeda;
            $surat->tanggalnamayangberbeda=$request->tanggalnamayangberbeda;
            $surat->surat_path = 'pdf/surat/' . $namePdf . '.pdf';
            $surat->isOpened=0;
            $surat->save();

            $data=surat::where('id', '=', $surat->id)->first();
            $array_bln    = array(1 => "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X", "XI", "XII");
            $bln      = $array_bln[date('n')];
    
            $no = sprintf('%03s', abs($data->no_surat + 1));
        //    dd($data);
            $pdf = Pdf::loadView('surat.' . $data->jenis_surat, compact('data', 'bln', 'no'));
                
            Storage::put('public/' . $data->surat_path, $pdf->output());

            // $data = Surat::where('id', '=', $id)->first();
        
                
            return redirect()->back()->with('succes', 'Permohonan Anda Berhasil Dikirimkan');


        // surat::create($validateData);

        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $surat = surat::findOrFail($id);
        // dd($surat);
        

        return view('isiadmin.surat', compact('surat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $surat = surat::findOrFail($id);
        $surat->delete();

        return redirect()->back()->with('succes', 'Data Surat Berhasil Di Hapus');
    }

    public function whatsapp($id)
    {
        $surat = Surat::findOrFail($id);

        $surat->status = 'selesai';
        $surat->save();

        $key = 'test-arifapp-1234567890';
        // $phone = $surat->user->notelpon;
        $phone = $surat->user->notelpon;
        $link = asset('storage/' . $surat->surat_path);

        $message = 'BUBUHAN TEAM';

        $response = Http::post('https://api.arif.app/api/send', ['key' => $key, 'no' => $phone, 'pesan' => $message, 'link' => $link]);
        // return $response->successful();
        // dd($response);
        return redirect()->back();
    }

    public function get_unopened_data()
    {
        $unopened_data = count(surat::where('isOpened', false)->get());
        return json_encode($unopened_data);
    }

}
