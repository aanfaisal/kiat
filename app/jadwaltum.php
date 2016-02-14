<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwaltum extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'jadwaltas';
    protected $primaryKey = "jadwalta_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'jenista_id', 'tglmulai', 'tglslese'];

}
