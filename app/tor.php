<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tor extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tors';
    protected $primaryKey = "tor_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'status', 'tanggal', 'isi'];

}
