<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tunjangan extends Model
{
    //
    protected $table = 'tunjangans';
    protected $fillable=['kode_tunjangan','id_jabatan','id_golongan','status','umlah_anak','besaran_uang'];
    protected $visible=['kode_tunjangan','id_jabatan','id_golongan','status','umlah_anak','besaran_uang'];
   

    public function jabatan()
    {
        return $this->belongsTo('App\jabatan','id_jabatan');
    }

      public function golongan()
    {
        return $this->belongsTo('App\golongan','id_golongan');
    }

     public function tunjangan_pegawai()
    {
        return $this->hasMany('App\tunjangan_pegawai','kode_tunjangan_ids');
    }
   
}
