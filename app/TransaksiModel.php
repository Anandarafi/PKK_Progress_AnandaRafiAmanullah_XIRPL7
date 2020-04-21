<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiModel extends Model
{
    protected $table="transaksi";
    protected $primarykey="id_transaksi";
    public $timestamps=false;
    protected $fillable = [
        'id_transaksi',
        'id_event',
        'nama_member',
        'no_ktp',
        'telp',
        'qty',
    ];
}
