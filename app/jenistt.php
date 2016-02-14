<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenistt extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'jenistt';
    protected $primaryKey = "jenistt_id";

    public function diklattt()
    {
        return $this->hasMany('App\diklattt');
    }
    public function jadwaltt()
    {
        return $this->hasMany('App\jadwaltt');
    }
    public function sertifikattt()
    {
        return $this->hasMany('App\sertifikattt);
    }
}
