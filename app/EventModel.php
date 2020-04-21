<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventModel extends Model
{
    protected $table="event";
    protected $primarykey="id_event";
    public $timestamps=false;
    protected $fillable = [
        'id_event',
        'nama_event',
        'tgl_pelaksanaan',
        'info',
        'img',
        'jumlah_tiket',
        'harga',
    ];
}
