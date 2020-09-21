<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;

use App\Model\StatusKartuKeluarga;
use Illuminate\Http\Request;

class StatusKartuKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d['status_kartu_keluargas'] = StatusKartuKeluarga::orderBy('id', 'DESC')->get();

        return view('app.v_status.indexKK', $d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $d = new StatusKartuKeluarga;
        $d->hub_kk = $request->input('hub_kk');

        $d->save();

        return redirect()->route("status_kartu_keluargas.index")->with("alertStore", "....");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Request  $request
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
     * @param  \App\Model\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $d = StatusKartuKeluarga::find($id);
        $d->hub_kk = $request->input('hub_kk');

        $d->save();

        return redirect()->route("status_kartu_keluargas.index")->with("alertUpdate", "....");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = StatusKartuKeluarga::find($id);
        $d->delete();

        return redirect()->route("status_kartu_keluargas.index")->with("alertDestroy", "....");
    }

    public function getDataEdit($id){
        $d = StatusKartuKeluarga::find($id);
        return response()->json($d);

        // echo json_encode($d); native
    }
}
