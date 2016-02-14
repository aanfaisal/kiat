<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class panduantt extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'panduantts';
    protected $primaryKey = "panduantt_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['diklattt_id', 'nama', 'panduan'];

}
