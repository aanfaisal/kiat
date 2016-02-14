<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kondisiruang extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kondisiruangs';
    protected $primaryKey = "kondisiruang_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ruang_id', 'dinding', 'plafon', 'pintu', 'lemari', 'mjangajar', 'krsingajar', 'mjapserta', 'krsipserta', 'mjaasisten', 'soundmesin', 'salon', 'mic', 'whiteboard', 'penyangga', 'lcd', 'layar'];

}
