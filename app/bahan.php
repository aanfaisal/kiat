<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bahan extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bahans';
    protected $primaryKey = "bahan_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'diklatta_id', 'upload'];

    public function diklatta()
    {
        return $this->belongsTo('App\diklatta');
    }
}
