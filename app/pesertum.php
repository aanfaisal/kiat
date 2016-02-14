<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pesertum extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pesertas';
    protected $primaryKey = "peserta_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'diklatta_id', 'pend', 'tmplahir', 'tgllahir', 'jenkel', 'status', 'foto', 'agama', 'pangkat', 'jabatan', 'instansi', 'alamat', 'telp', 'nohp', 'ruang_id'];

    public function diklatta()
    {
        return $this->belongsTo('App\diklatta');
    }
}
