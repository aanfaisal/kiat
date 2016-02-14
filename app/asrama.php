<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asrama extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'asramas';
    protected $primaryKey = "asrama_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'petugas', 'atasan', 'uraian'];

    public function kamar()
    {
        return $this->hasMany('App\kamar');
    }
}
