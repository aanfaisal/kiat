<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surat extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'surats';
    protected $primaryKey = "surat_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'status', 'tanggal', 'isi'];

}
