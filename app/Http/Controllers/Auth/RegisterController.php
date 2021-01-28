<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
            'dob' =>['required'],
            'ssn' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_code' => ['required'],
            'phone_number' => ['required','max:12'],
            'address'=>['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'photo' => ['required','mimes:pdf,xlx,csv,jpeg,png','max:2048']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

           $request = request();
           $profileimage = $request->file('photo');
         $fileName = time().'.'.$profileimage->getClientOriginalExtension();
        $path = $profileimage->move(public_path('uploads'), $fileName);

        return User::create([
            'name' => $data['name'],
            'dob'=>$data['dob'],
            'ssn'=>$data['ssn'],
            'email' => $data['email'],
            'phone_code' => $data['phone_code'],
            'phone_number' => $data['phone_number'],
            'address' => $data['address'],
            'password' => Hash::make($data['password']),
            'upload_signature' => $fileName
        ]);
    }
}
