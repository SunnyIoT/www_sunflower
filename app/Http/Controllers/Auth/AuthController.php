<?php

namespace App\Http\Controllers\Auth;

use Auth;
use DB;
use Hash;
use App\User;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{

    public function getDataLogger($serial)
    {

        DB::table('device_lost_connect')->insert([
            'serial'              =>  $serial,
            'created_at'          =>  date('Y-m-d h:i:s')
        ]);
    }

    public function index()
    {
        return view('welcome');
    }

    public function getLogin()
    {
        return view('auth/login');
    }

    public function getRegister()
    {
        return view('auth/register');
    }

    public function postRegister(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'serial'                  =>  'required|unique:tb_user',
            'username'                =>  'required|unique:tb_user',
            'password'                =>  'required|confirmed|min:4',
            'password_confirmation'   =>  'required',
            'tel'                     =>  'required|unique:tb_user',
            'email'                   =>  'required|unique:tb_user'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            DB::table('tb_user')->insert([
                'serial'              =>  $request->input('serial'),
                'username'            =>  $request->input('username'),
                'password'            =>  Hash::make($request->input('password')),
                'tel'                 =>  $request->input('tel'),
                'email'               =>  $request->input('email'),
                'created_at'          =>  date('Y-m-d h:i:s'),
                'updated_at'          =>  date('Y-m-d h:i:s')
            ]);
            DB::table('tb_config')->insert([
                'serial'              =>  $request->input('serial'),
                'temperature'         =>  '',
                'height'              =>  '',
                'light'               =>  '',
                'watering'            =>  '',
                'created_at'          =>  date('Y-m-d h:i:s'),
                'updated_at'          =>  date('Y-m-d h:i:s')
            ]);
            return redirect('/')->with('status', 'สมัครสมาชิกสำเร็จ');
        }
    }

    public function postLogin(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'username'                =>  'required',
            'password'                =>  'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('status', 'null');
        } else {
            if (Auth::attempt(['username'=>$request->get('username'),'password'=>$request->get('password')])){
                // if (Auth::User()->username == 'admin') {
                //     return redirect()->action('AdminController@index');
                // } else {
                    return redirect()->action('UserController@index');
                // }
            } else {
                // return redirect()->route('logout', ['username'=>$request->get('username')]);
                return redirect('/')->with('status', 'failed');
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->action('Auth\AuthController@index');
    }

}
