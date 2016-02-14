<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenista extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'jenista';
    protected $primaryKey = "jenista_id";

    public function diklatta()
    {
        return $this->hasMany('App\diklatta');
    }
    public function jadwalta()
    {
        return $this->hasMany('App\jadwalta');
    }
    public function sertifikat()
    {
        return $this->hasMany('App\sertifikat);
    }
}
