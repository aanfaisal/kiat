<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pesertatt extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pesertatts';
    protected $primaryKey = "pesertatt_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'diklattt_id', 'pend', 'tmplahir', 'tgllahir', 'jenkel', 'status', 'foto', 'agama', 'pangkat', 'jabatan', 'instansi', 'alamat', 'telp', 'nohp', 'ruang_id'];

    public function kamar()
    {
        return $this->hasMany('App\kamar');
    }
}
