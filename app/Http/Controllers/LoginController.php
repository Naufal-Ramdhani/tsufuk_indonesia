<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Anggota;
use App\Models\Lanah;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class LoginController extends Controller
{
    public function login() 
    {
        return view('login.index');
    }

    public function loginPembeli(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:100',
            'password' => 'required|min:6|max:50',
        ], [
            'email.required' => 'Email diperlukan!',
            'email.max' => 'Email maksimal 100 karakter!',
            'password.min' => 'Kata sandi harus minimal 6 karakter!',
            'password.max' => 'Kata sandi maksimal 50 karakter!',
            'password.required' => 'Kata sandi diperlukan!',
        ]);

        $credentials = $request->except(['_token']);

        if($validator->fails()) {
            return response()->json([
                'status' => 400,
                'messages' => $validator->getMessageBag()
            ]);
        } else {
            $user = User::where('email', $request->email)->first();
            if($user){
                if(Hash::check($request->password, $user->password)) {
                    if (auth()->attempt($credentials)) {
                        if (auth()->check() && $user->hasRole('admin'))
                        {
                            return response()->json([
                                'status' => 200,
                                'messages' => 'Berhasil Masuk'
                            ]);
                        } 
                            elseif (auth()->check() && $user->hasRole('pelatih'))
                        {
                            return response()->json([
                                'status' => 201,
                                'messages' => 'Berhasil Masuk'
                            ]);
                        }
                            elseif (auth()->check() && $user->hasRole('anggota'))
                        {
                            return response()->json([
                                'status' => 202,
                                'messages' => 'Berhasil Masuk'
                            ]);
                        } else {
                            Auth::logout();
                            return response()->json([
                                'status' => 401,
                                'messages' => 'Hak akses hanya untuk Pengguna Tsufuk!'
                            ]);
                        }
                    } else {
                        return response()->json([
                            'status' => 401,
                            'messages' => 'Kredensial tidak valid!'
                        ]);
                    }
                } else {
                    return response()->json([
                        'status' => 401,
                        'messages' => 'Gagal Masuk, Pastikan Email dan Password anda benar!'
                    ]);
                }
            } else {
                return response()->json([
                    'status' => 401,
                    'messages' => 'Akun tidak ditemukan!'
                ]);
            }
        }
    }

    public function register() 
    {
        $lanah = Lanah::all();
        return view('register.index', compact('lanah'));
    }

    public function registerForm(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:100',
            'password' => 'required|min:6|max:50',
        ], [
            'email.required' => 'Email diperlukan!',
            'email.max' => 'Email maksimal 100 karakter!',
            'password.min' => 'Kata sandi harus minimal 6 karakter!',
            'password.max' => 'Kata sandi maksimal 50 karakter!',
            'password.required' => 'Kata sandi diperlukan!',
        ]);

        $credentials = $request->except(['_token']);

        if($validator->fails()) {
            return response()->json([
                'status' => 400,
                'messages' => $validator->getMessageBag()
            ]);
        } else {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->assignRole('anggota');
            $user->save();

            $anggota = new Anggota();
            $anggota->user_id = $user->id;
            $anggota->jenis_kelamin = $request->jenis_kelamin;
            $anggota->no_ktp = $request->no_ktp;
            $anggota->tempat_lahir = $request->tempat_lahir;
            $anggota->tanggal_lahir = $request->tanggal_lahir;
            $anggota->agama = $request->agama;
            $anggota->alamat = $request->alamat;
            $anggota->no_telp = $request->no_telp;
            $anggota->pekerjaan = $request->pekerjaan;
            $anggota->tinggi_badan = $request->tinggi_badan;
            $anggota->berat_badan = $request->berat_badan;
            $anggota->kelas = $request->kelas;
            $anggota->lanah_id = $request->lanah_id;
            $anggota->save();

            return response()->json([
                'status' => 200,
                'message' => 'Akun anda berhasil terdaftar'
            ]);
        }
    }

    public function forgotPassword() 
    {
        return view('login.password.index');
    }

    public function forgotPasswordEmail(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:100',
        ], [
            'email.required' => 'Email diperlukan!',
            'email.max' => 'Email maksimal 100 karakter!',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status' => 400,
                'messages' => $validator->getMessageBag()
            ]);
        } else {
            $token = Str::uuid();
            $user = DB::table('users')->where('email', $request->email)->first();
            $details = [
                'body' => route('reset-get', ['email' => $request->email, 'token' => $token]) 
            ];

            if ($user) {
                User::where('email', $request->email)->update([
                    'token' => $token,
                    'token_expire' => Carbon::now()->addMinutes(10)->toDateTimeString()
                ]);

                return response()->json([
                    'status' => 200,
                    'messages' => 'Berhasil'
                ]);
            } else {
                return response()->json([
                    'status' => 401,
                    'messages' => 'Email ini tidak terdaftar pada kami!'
                ]);
            }
        }
    }

    public function reset(Request $request)
    {
        $email = $request->email;
        $token = $request->token;
        return view('login.password.reset_password', [
            'email' => $email,
            'token' => $token,
        ]);
    }

    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|min:6|max:50',
            'confirm-password' => 'required|min:6|max:50|same:password',
        ], [
            'confirm-password.same' => 'Kata sandi tidak cocok!',
            'password.required' => 'Password diperlukan!',
            'password.max' => 'password maksimal 100 karakter!',
            'password.min' => 'password sandi harus minimal 6 karakter!',
            'confirm-password.max' => 'Konfirmasi Password maksimal 50 karakter!',
            'confirm-password.required' => 'Konfirmasi Password diperlukan!',
            'confirm-password.min' => 'Konfirmasi Password sandi harus minimal 6 karakter!',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status' => 400,
                'messages' => $validator->getMessageBag()
            ]);
        } else {
        
                User::where('email', $request->email)->update([
                    'password' => Hash::make($request->password),
                    'token' => null,
                    'token_expire' => null 
                ]);

                return response()->json([
                    'status' => 200,
                    'success' => 'Berhasil mengubah password!'
                ]);
        }
    }

    public function logout(Request $request) 
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
