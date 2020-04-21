<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\EventModel;

class EventController extends Controller
{
    public function index()
    {
        $data['datas']=EventModel::all(); 
        return view("event.event",$data);
    }
    public function create()
    {
        return view('event.create_event');
    }
    public function store(Request  $request)
    {
        EventModel::create([
            'nama_event'     => $request->nama_event,
            'tgl_pelaksanaan'     => $request->tgl_pelaksanaan,
            'info'     => $request->info,
            'jumlah_tiket'  => $request->jumlah_tiket,
            'harga'     => $request->harga,
            'foto'     => $request->foto,
        ]);    
        if($request->hasFile('foto'))
        {
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }    
        return redirect()->action('EventController@index')->with('alert_message', 'SUCCESSFULLY ADDEDD');
    }

    public function edit($id)
    {
        $data = EventModel::where('id_event', $id)->get();
        return view('event.edit_event', compact('data'));
    }
    public function detail($id)
    {
        $data = EventModel::where('id_event', $id)->get();
        return view('event.event_detail', compact('data'));
    }

    public function update(Request $request)
    {

        EventModel::where('id_event', $request->id)->update([
            'nama_event'      => $request->nama_event,
            'tgl_pelaksanaan'     => $request->tgl_pelaksanaan,
            'info'     => $request->info,
            'foto'     => $request->foto,
            'jumlah_tiket'     => $request->jumlah_tiket,
            'harga'     => $request->harga,
        ]);
        if($request->hasFile('foto'))
        {
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }    
        return redirect()->action('EventController@index')->with('alert_message', 'Berhasil Mengubah Data');

    }

    public function hapus($id)
    {
        EventModel::where('id_event', $id)->delete();

        return redirect()->action('EventController@index')->with('alert_message', 'Berhasil Menghapus Data');
    }

    public function __construct(){
        $this->middleware('cek_login');
    }
}
