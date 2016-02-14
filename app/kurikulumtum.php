<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kurikulumtum extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kurikulumtas';
    protected $primaryKey = "kurikulumta_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'diklatta_id', 'isi', 'tanggal'];

    public function diklatta()
    {
        return $this->belongsTo('App\diklatta');
    }
}
