<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sertifikat extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sertifikats';
    protected $primaryKey = "sertifikat_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['peserta_id', 'diklatta_id', 'jenista_id', 'isi'];

    public function diklatta()
    {
        return $this->belongsTo('App\diklatta');
    }
}
