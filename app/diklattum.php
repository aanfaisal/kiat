<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diklattum extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'diklattas';
    protected $primaryKey = "diklatta_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'jenis_id', 'tglmulai', 'tglslese', 'peserta'];

    public function jenistum()
    {
        return $this->belongsTo('App\jenistum');
    }

    public function kurikulumtum()
    {
        return $this->hasMany('App\kurikulumtum');
    }
     public function panduan()
    {
        return $this->hasMany('App\panduan');
    }
    public function pesertum()
    {
        return $this->hasMany('App\pesertum');
    }
    public function pengajar()
    {
        return $this->hasMany('App\pengajar');
    }
    public function sertifikat()
    {
        return $this->hasMany('App\sertifikat');
    }
    public function bahan()
    {
        return $this->hasMany('App\bahan');
    }
}
