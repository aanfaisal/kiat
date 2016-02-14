<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tortt extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tortts';
    protected $primaryKey = "tortt_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'status', 'tgl', 'isi'];

}
