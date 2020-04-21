<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoginModel;
use Validator;
use Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }
    public function cek(Request $req){
        $this->validate($req,[
            'username'=>'required',
            'password'=>'required',
        ]);
        $proses=LoginModel::where('username',$req->username)->where('password',md5($req->password));
        if($proses->count()>0){
            $data=$proses->first();
            Session::put('id',$data->id);
            Session::put('nama',$data->nama);
            Session::put('username',$data->username);
            Session::put('password',$data->password);
            Session::put('role',$data->role);
            Session::put('login_status',true);
            if(Session::get('role') == '3'){
                return redirect('welcome');
            }else{
                return redirect('home');
            }
        }else{
            Session::flash('alert_message','USERNAME dan PASSWORD TIDAK COCOK');
            return redirect('login');
        }
    }
    public function create()
    {
        return view('login.register');
    }
    public function store(Request $request)
    {
        LoginModel::create([
            'nama'            => $request->nama,
            'username'        => $request->username,
            'password'        => $request->password,
            'role'            => $request->role,
        ]);
        
        return redirect()->action('LoginController@index');
    }
    public function logout()
    {
        Session::flush();
        return redirect('login');
    }
    
}
