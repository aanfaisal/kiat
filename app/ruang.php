<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruang extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ruangs';
    protected $primaryKey = "ruang_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'petugas', 'atasan', 'uraian'];

    public function kondisiruang()
    {
        return $this->hasMany('App\kondisiruang');
    }
}
