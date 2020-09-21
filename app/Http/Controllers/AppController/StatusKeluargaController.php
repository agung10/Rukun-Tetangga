<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;

use App\Model\StatusKeluarga;
use Illuminate\Http\Request;

class StatusKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d['status_keluargas'] = StatusKeluarga::orderBy('id', 'DESC')->get();

        return view('app.v_status.indexKeluarga', $d);
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
        $d = new StatusKeluarga;
        $d->hub_keluarga = $request->input('hub_keluarga');

        $d->save();

        return redirect()->route("status_keluargas.index")->with("alertStore", "....");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\StatusKeluarga  $request
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\StatusKeluarga  $request
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
     * @param  \App\Model\StatusKeluarga  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $d = StatusKeluarga::find($id);
        $d->hub_keluarga = $request->input('hub_keluarga');

        $d->save();

        return redirect()->route("status_keluargas.index")->with("alertUpdate", "....");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = StatusKeluarga::find($id);
        $d->delete();

        return redirect()->route("status_keluargas.index")->with("alertDestroy", "....");
    }

    public function getDataEdit($id){
        $d = StatusKeluarga::find($id);
        return response()->json($d);

        // echo json_encode($d); native
    }
}
