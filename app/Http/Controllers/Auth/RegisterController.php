<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
    }

    public function showAdmin()
    {
        return view('auth.register', ['admin' => 'admin']);
    }

    public function showUserRegister()
    {
        return view('auth.register');
    }

    protected function userRegister(Request $req)
    {
        $req->validate([
            'name' => 'max:255|string|required',
            'email' => 'required|email|unique:admins|max:50',
            'password' => [
                'required',
                'confirmed',
                'string',
                Password::min(8)->letters()->mixedCase()->numbers()->symbols(),
            ],
        ]);

        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ]);

        return redirect()->intended('/login');

    }

    public function createAdmin(Request $req)
    {
        $req->validate([
            'name' => 'max:255|string|required',
            'email' => 'required|email|unique:admins|max:50',
            'password' => [
                'required',
                'confirmed',
                'string',
                Password::min(8)->letters()->mixedCase()->numbers()->symbols(),
            ],
        ]);


        Admin::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ]);

        return redirect()->intended('/login/admin');
    }


}

?>