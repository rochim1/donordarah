<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

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
    
    public $hashed = null;
    public $name = null;

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
     * @return \App\Models\User
     */
    // protected function create(array $data)
    // {
    //     $hashed = Hash::make('password', [
    //         'rounds' => 12,
    //     ]);

    //     $this->hashed = $hashed;
    //     $this->name = $array['name']; // unnecessery 

    //     // todo membuat verifikasi akun lewat email otomatis , ini masih manual
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'level' => 'admin',
    //         'verify_code' => $hashed,
    //         'password' =>  Hash::make($data['password']),
    //         'email_verified_at' => null,
    //     ]);
    // }

    protected function createGithub()
    {
        
        // todo : membuat socialite callback nya didalam request (didalam parameter)
        $user = Socialite::driver('github')->user();
        $array = (array) $user;

        $validator = Validator::make($array, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ],
        [
            'email.unique' => "the :attribute must unique, email was registered.",
        ]);

        if ($validator->fails()) {
            return redirect('/register')
            ->withErrors($validator)
            ->withInput();
        }

        $hashed = Hash::make('password', [
            'rounds' => 12,
        ]);

        $this->hashed = $hashed;
        $this->name = $array['name'];

        return User::create([
            'name' => $array['name'],
            'email' => $array['email'],
            'level' => 'admin',
            'verify_code' => $hashed,
            'password' => $hashed,
            'email_verified_at' => null,
        ]);

    }

    
    protected function createGoogle()
    {
        // todo : membuat socialite callback nya didalam request
        $user = Socialite::driver('google')->user();
        $array = (array) $user;

        $validator = Validator::make($array, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ],
        [
            'email.unique' => "the :attribute must unique, email was registered.",
        ]);

        if ($validator->fails()) {
            return redirect('/register')
            ->withErrors($validator)
            ->withInput();
        }

        $hashed = Hash::make('password', [
            'rounds' => 12,
        ]);

        $this->hashed = $hashed;
        $this->name = $array['name'];

        // mendaftarkan user namun dengan password otomatis
        $register = User::create([
            'name' => $array['name'],
            'email' => $array['email'],
            'level' => 'admin',
            'verify_code' => $hashed,
            'password' => $hashed,
            'email_verified_at' => null,
        ]);

        if($register){
            $this->sendmail($array['email']);
            Auth::loginUsingId($register->id); //mendapatkan id barusan
            return redirect(RouteServiceProvider::HOME);
        }else{
            return redirect('/login') ;
        }
    }

    public function sendmail($receive){
        $details = [
            'title' => 'Mail from rumahsakitHB.com',
            'body' => 'Verification its you',
            'hashed' => $this->hashed,
            'name' => $this->name,
        ];

        Mail::to($receive)->send(new \App\Mail\VerifyRegistration($details));
    }
}
