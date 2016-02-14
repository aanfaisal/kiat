<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kondisikm extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kondisikms';
    protected $primaryKey = "kondisikm_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['kamar_id', 'kmmandi', 'bed', 'slimut', 'bak', 'gantungan', 'meja', 'pnerangan', 'ac'];

}
