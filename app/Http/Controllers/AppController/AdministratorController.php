<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Hash;
use Str;

use\App\User;

class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->q;

        if(!empty($q)){
            $d['administrators'] = User::query()->where("level", "Administrator")->where('name', 'LIKE', "%{$q}%")->orWhere('email', 'LIKE', "%{$q}%")->paginate(10);
        }else{
            $d['administrators'] = User::where("level", "Administrator")->orderBy("id", "DESC")->get();
        }

        return view ('app.administrators.index', $d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.administrators.create');
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
            'name'     => 'required',
            'email'    => 'required|unique:users',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $d = new User;
        $d->name = $request->input('name');
        $d->email = $request->input('email');
        $d->password = Hash::make($request->input('password'));
        $d->password_ = $request->input('password');
        $d->no_telp = $request->input('no_telp');
        $d->level = "Administrator";
        $d->api_token = Str::random(100);

        // $profile_ = $request->file('profile');
        // $d->profile = $profile_->getClientOriginalName();
        // $profile_->move(public_path('UploadedFile/administrators/profile/'), $profile_->getClientOriginalName());

        $d->save();

        return redirect()->route("administrators.index")->with("alertStore", "....");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $d['administrators'] = User::find($id);

        return view('app.administrators.edit', $d);
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
        $d = User::find($id);
        $d->name = $request->input('name');
        $d->no_telp = $request->input('no_telp');
        $d->level = "Administrator";

        // $profile_ = $request->file('profile');
        // $d->profile = $profile_->getClientOriginalName();
        // $profile_->move(public_path('UploadedFile/administrators/profile/'), $profile_->getClientOriginalName());

        $d->save();

        return redirect()->route("administrators.index")->with("alertUpdate", "....");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = User::find($id);
        $d->delete();

        return redirect()->route("administrators.index")->with("alertDestroy", "....");
    }
}
