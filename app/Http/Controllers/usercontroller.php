<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\webprofile;
// use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\User;
// use Laravel\Fortify\Contracts\CreatesNewUsers;
// use App\Actions\Fortify\PasswordValidationRules;
// use App\Http\Controllers\Auth\RegisteredUserController;

class usercontroller extends Controller
{
    // use PasswordValidationRules; 
    public $hashed;
    public $request;
    public function welcome(){
        $data = webprofile::first();
        if ($data) {
            $telpon = $data->telpon; 
            $email = $data->email;
            $deskripsi = $data->deskripsi_perusahaan;
            $gmaps = $data->gmaps;
            $alamat = $data->alamat;
            return view('menu.landing', compact('telpon','email','deskripsi','gmaps','alamat'));
        }else {
            return "halaman tidak dapat di akses, setting web profil di halaman admin";
        }
    }
        public function register(Request $request){

        $this->request = $request;
        // ini versi untuk array name, email berupa array sedangan disini object karena dari Request
        // Validator::make($request, [
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     // 'password' => $this->passwordRules(),
        //     ['password' => 'required'],
        // ])->validate();

        $this->validate($request,
            ['name' => 'required', 'string', 'max:255'],
            ['email' => 'required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => $this->passwordRules(),
            ['password' => 'required'],
        );

        $hashed = Hash::make($request->password);
        $this->hashed = $hashed;

        user::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $hashed,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        // $send = new RegisterController;
        // $send->sendmail($request->email, 'user', $hashed, $request->name);

        // how to make using service container
        // atau untuk lebih rapinya buat class send mail (ini tidak)
        app()->bind('sendmail', function(){
            return RegisterController::sendmail($this->request->email, 'user', $this->hashed, $this->request->name);
        });

        $sending = app()->make('sendmail');

        if ($sending) {
            return redirect('/login')->with('message', 'selamat, akun anda telah terdaftar');;
        }else{
            return redirect('/register')->withErrors(["message" => "gagal melakukan pendaftaran user!"]);
        }
    }
}
