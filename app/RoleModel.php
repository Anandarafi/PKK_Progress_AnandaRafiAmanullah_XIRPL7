<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    protected $table="role";
    protected $primarykey="id_role";
    public $timestamps=false;
    protected $fillable = [
        'id_role',
        'nama_role',
    ];
}
