<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surattt extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'surattts';
    protected $primaryKey = "surattt_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'status', 'tgl', 'isi'];

}
