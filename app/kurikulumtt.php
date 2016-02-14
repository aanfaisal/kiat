<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kurikulumtt extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kurikulumtts';
    protected $primaryKey = "kurikulumtt_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'diklattt_id', 'isi', 'tgl'];

}
