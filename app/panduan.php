<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class panduan extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'panduans';
    protected $primaryKey = "panduan_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['diklatta_id', 'nama', 'panduan'];

    public function diklatta()
    {
        return $this->belongsTo('App\diklatta');
    }
}
