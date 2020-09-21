<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\DataDiri;
use App\Model\StatusKartuKeluarga;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        // Home
        $d ['pengguna'] = User::all();
        $d ['data_diris'] = DataDiri::all();
        $d ['kartu_keluargas'] = DataDiri::select('no_kk')->groupBy('no_kk')->get();

        $d ['KepalaKeluargaCount'] = DataDiri::where('kk_id', 1)->count();

        // JenjangPendidikan
        $d ['pendidikans'] = DataDiri::select('pendidikan')->get();

        // wargaJenisKelamin
        $d ['jenis_kelamins']   = DataDiri::select('jenis_kelamin')->get();

        // KategoriUsia
        

        return view('home', $d);
    }
}
