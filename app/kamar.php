<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kamars';
    protected $primaryKey = "kamar_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'asrama_id', 'peserta_id'];

    public function kondisikm()
    {
        return $this->hasMany('App\kondisikm');
    }
    public function asrama()
    {
        return $this->hasMany('App\asrama');
    }
}
