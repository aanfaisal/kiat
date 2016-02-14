<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diklattt extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'diklattts';
    protected $primaryKey = "diklattt_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'jenistt_id', 'tglmulai', 'tglslese', 'peserta'];

    public function jenistt()
    {
        return $this->belongsTo('App\jenistt');
    }

    public function kurikulumtt()
    {
        return $this->hasMany('App\kurikulumtt');
    }
     public function panduantt()
    {
        return $this->hasMany('App\panduantt');
    }
    public function pesertatt()
    {
        return $this->hasMany('App\pesertatt');
    }
    public function pengajartt()
    {
        return $this->hasMany('App\pengajartt');
    }
    public function sertifikattt()
    {
        return $this->hasMany('App\sertifikattt');
    }
    public function bahantt()
    {
        return $this->hasMany('App\bahantt');
    }
}
