<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventModel;
use App\TransaksiModel;

class PageController extends Controller
{

    public function __construct(){
        $this->middleware('cek_login');
    }

    public function index(){
        $data['datas']=EventModel::all();
        return view('welcome',$data);
    }
    
    public function index1(){
        $event1 = EventModel::all();
        return view('home', compact('event1'));
    }

    public function create1()
    {
        return view('transaksi.create_transaksi1');
    }
    public function store1(Request  $request)
    {
        TransaksiModel::create([
            'id_event'     => $request->id_event,
            'nama_member'     => $request->nama_member,
            'no_ktp'     => $request->no_ktp,
            'telp'     => $request->telp,
            'qty'     => $request->qty,
        ]);        
        return redirect()->action('PageController@index')->with('alert_message', 'SUCCESSFULLY ADDEDD');
    }
}
