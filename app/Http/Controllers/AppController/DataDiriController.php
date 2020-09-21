<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;

use App\Model\DataDiri;
use App\Model\StatusKeluarga;
use App\Model\StatusKartuKeluarga;
use App\Model\StatusPernikahan;
use Illuminate\Http\Request;

class DataDiriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d['data_diris'] = DataDiri::orderBy('id', 'DESC')->get();

        return view('app.v_dataDiri.index', $d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $d['data_diris'] = DataDiri::all();
        $d['status_keluargas'] = StatusKeluarga::all();
        $d['status_kartu_keluargas'] = StatusKartuKeluarga::all();
        $d['status_pernikahans'] = StatusPernikahan::all();

        return view('app.v_dataDiri.create', $d);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik'    => ['required', 'string', 'min:16', 'max:20', 'unique:data_diris'],
            'no_kk'    => ['required', 'string', 'min:16', 'max:20'],
            'foto'     => 'image',
        ]);

        $d = new DataDiri;
        $d->keluarga_id = $request->input('keluarga_id');
        $d->kk_id = $request->input('kk_id');
        $d->pernikahan_id = $request->input('pernikahan_id');
        
        $d->nama_lengkap = $request->input('nama_lengkap');
        $d->tempat_lahir = $request->input('tempat_lahir');
        $d->tanggal_lahir = $request->input('tanggal_lahir');
        $d->alamat_kartuKeluarga = $request->input('alamat_kartuKeluarga');
        $d->alamat_domisili = $request->input('alamat_domisili');
        $d->jenis_kelamin = $request->input('jenis_kelamin');
        $d->agama = $request->input('agama');
        $d->pendidikan = $request->input('pendidikan');
        $d->no_kk = $request->input('no_kk');
        $d->nik = $request->input('nik');
        $d->jenis_rumah = $request->input('jenis_rumah');
        $d->disabilitas = $request->input('disabilitas');
        $d->pekerjaan = $request->input('pekerjaan');
        $d->keterangan = $request->input('keterangan');

        $foto = $request->file('foto');
        if(!empty($foto)) {
            $d->foto = $foto->getClientOriginalName();
            $foto->move(public_path('UploadedFile/profilPelamar'), $foto->getClientOriginalName());
        }

        $d->save();

        return redirect()->route("data_diris.index")->with("alertStore", "....");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $d['data_diris'] = DataDiri::find($id);
        $d['status_keluargas'] = StatusKeluarga::all();
        $d['status_kartu_keluargas'] = StatusKartuKeluarga::all();
        $d['status_pernikahans'] = StatusPernikahan::all();

        return view ('app.v_dataDiri.detail', $d);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $d['data_diris'] = DataDiri::find($id);
        $d['status_keluargas'] = StatusKeluarga::all();
        $d['status_kartu_keluargas'] = StatusKartuKeluarga::all();
        $d['status_pernikahans'] = StatusPernikahan::all();

        return view('app.v_dataDiri.edit', $d);
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
        $request->validate([
            'no_kk'    => ['required', 'string', 'min:16', 'max:20'],
            'foto'     => 'image',
        ]);

        $d = DataDiri::find($id);
        $d->keluarga_id = $request->input('keluarga_id');
        $d->kk_id = $request->input('kk_id');
        $d->pernikahan_id = $request->input('pernikahan_id');
        
        $d->nama_lengkap = $request->input('nama_lengkap');
        $d->tempat_lahir = $request->input('tempat_lahir');
        $d->tanggal_lahir = $request->input('tanggal_lahir');
        $d->alamat_kartuKeluarga = $request->input('alamat_kartuKeluarga');
        $d->alamat_domisili = $request->input('alamat_domisili');
        $d->jenis_kelamin = $request->input('jenis_kelamin');
        $d->agama = $request->input('agama');
        $d->pendidikan = $request->input('pendidikan');
        $d->no_kk = $request->input('no_kk');
        // $d->nik = $request->input('nik');
        $d->jenis_rumah = $request->input('jenis_rumah');
        $d->disabilitas = $request->input('disabilitas');
        $d->pekerjaan = $request->input('pekerjaan');
        $d->keterangan = $request->input('keterangan');

        $foto = $request->file('foto');
        if(!empty($foto)) {
            $d->foto = $foto->getClientOriginalName();
            $foto->move(public_path('UploadedFile/profilPelamar'), $foto->getClientOriginalName());
        }

        $d->save();

        return redirect()->route("data_diris.index")->with("alertUpdate", "....");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = DataDiri::find($id);
        $d->delete();

        return redirect()->route("data_diris.index")->with("alertDestroy", "....");
    }

    public function print(){
        $d['data_diris'] = DataDiri::orderBy("id", "DESC")->get();
        $d['status_kartu_keluargas'] = StatusKartuKeluarga::all();

        return view('app.laporan.laporanDataDiri', $d);
    }

    public function nomorKK(Request $request){
        $q = $request->Cari;

        if($q){
            $d['data_diris'] = DataDiri::where('nama_lengkap', 'LIKE','%'.$q.'%')->orWhere('no_kk', 'LIKE','%'.$q.'%')->where('kk_id', 1)->paginate(1);
        }else{
            $d['data_diris'] = DataDiri::where('kk_id', 1)->paginate(3);
        }

        return view('app.laporan.dataKK', $d);
    }

    public function printDataKK($id){
        $d['data_diris'] = DataDiri::where('no_kk', $id)->orderBy('kk_id', 'ASC')->get();
        $d['data_kk'] = DataDiri::where('kk_id', 1)->first();
        $d['status_pernikahans'] = StatusPernikahan::all();

        return view('app.laporan.laporanDataKK', $d);
    }
}
