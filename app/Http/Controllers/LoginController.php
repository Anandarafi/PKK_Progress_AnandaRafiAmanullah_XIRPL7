<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoginModel;
use App\EventModel;
use Validator;
use Session;

class LoginController extends Controller
{
    public function index1(){
        $data['datas']=EventModel::all();
        return view('welcome',$data);
    }
    public function index2(){
        return view('home');
    }

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
            if(Session::get('role') == '1'){
                return redirect()->action('LoginController@index1');
            }else{
                return redirect()->action('LoginController@index2');
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
    public function store(Request  $request)
    {
        TransaksiModel::create([
            'nama'      => $request->nama,
            'username'   => $request->username,
            'password'        => $request->password,
            'role'          => $request->role,
        ]);        
        return redirect()->action('LoginController@index');
    }
    public function logout()
    {
        Session::flush();
        return redirect('login');
    }


    public function create1()
    {
        return view('transaksi.create_transaksi1');
    }
    public function store1(Request  $request)
    {
        TransaksiModel::create([
            'id_event'      => $request->id_event,
            'nama_member'   => $request->nama_member,
            'no_ktp'        => $request->no_ktp,
            'telp'          => $request->telp,
            'qty'           => $request->qty,
        ]);        
        return redirect()->action('LoginController@index')->with('alert_message', 'SUCCESSFULLY ADDEDD');
    }
    
}
