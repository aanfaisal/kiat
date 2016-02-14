<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bahantt extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bahantts';
    protected $primaryKey = "bahantt_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'diklattt_id', 'upload'];

}
