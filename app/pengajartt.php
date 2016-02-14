<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengajartt extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pengajartts';
    protected $primaryKey = "pengajartt_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'diklattt_id', 'pend', 'tmplahir', 'tgllahir', 'jenkel', 'status', 'foto', 'agama', 'pangkat', 'jabatan', 'instansi', 'alamat', 'telp', 'nohp'];

    public function kamar()
    {
        return $this->hasMany('App\kamar');
    }
}
