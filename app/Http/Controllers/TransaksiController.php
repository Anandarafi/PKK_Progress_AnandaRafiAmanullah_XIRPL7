<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\TransaksiModel;

class TransaksiController extends Controller
{
    public function index()
    {
        $data['datas']=TransaksiModel::join('event','event.id_event','transaksi.id_event')->get(); 
        return view("transaksi.transaksi",$data);
    }
    public function create()
    {
        return view('transaksi.tambah_transaksi');
    }
    public function store(Request  $request)
    {
        TransaksiModel::create([
            'id_event'     => $request->id_event,
            'nama_member'     => $request->nama_member,
            'no_ktp'     => $request->no_ktp,
            'telp'     => $request->telp,
            'qty'     => $request->qty,
        ]);        
        return redirect()->action('TransaksiController@index')->with('alert_message', 'SUCCESSFULLY ADDEDD');
    }


    public function edit($id)
    {
        $data = TransaksiModel::where('id_transaksi', $id)->join('event','event.id_event','transaksi.id_event')->get();
        return view('transaksi.edit_transaksi', compact('data'));
    }
    public function detail($id)
    {
        $data = TransaksiModel::where('id_transaksi', $id)->join('event','event.id_event','transaksi.id_event')->get();
        return view('transaksi.detail_transaksi', compact('data'));
    }

    public function update(Request $request)
    {

        TransaksiModel::where('id_transaksi', $request->id)->update([
            'id_event'     => $request->id_event,
            'nama_member'     => $request->nama_member,
            'no_ktp'     => $request->no_ktp,
            'telp'     => $resquest->telp,
            'qty'     => $request->qty,
        ]);  
        return redirect()->action('TransaksiController@index')->with('alert_message', 'Berhasil Mengubah Data');

    }

    public function hapus($id)
    {
        TransaksiModel::where('id_transaksi', $id)->delete();

        return redirect()->action('TransaksiController@index')->with('alert_message', 'Berhasil Menghapus Data');
    }

    public function __construct(){
        $this->middleware('cek_login');
    }
}
