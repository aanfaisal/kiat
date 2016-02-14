<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwaltt extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'jadwaltts';
    protected $primaryKey = "jadwaltt_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'jenistt_id', 'tglmulai', 'tglslese'];

}
