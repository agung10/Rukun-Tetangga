<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/app/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'password_' => $data['password'],
            'level' => "User",
            'api_token' => \Str::random(100)
        ]);
    }

    // public function registerUser(Request $r){

    //     $r->validate([
    //         'name' => 'required',
    //         'email' => 'required|unique:users',
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);

    //     $d = new User;
    //     $d->name = $r->input('name');
    //     $d->email = $r->input('email');
    //     $d->password = Hash::make($r->input('password'));
    //     $d->password_ = $r->input('password');
    //     $d->level = "User";
    //     $d->api_token = \Str::random(100);

    //     $d->save();

    //     return redirect("login")->with("alertRegister", "....");
    // }
}