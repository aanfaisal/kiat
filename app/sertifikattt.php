<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sertifikattt extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sertifikattts';
    protected $primaryKey = "sertifikattt_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['pesertatt_id', 'diklattt_id', 'jenistt_id', 'isi'];

}
