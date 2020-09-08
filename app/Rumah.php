<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rumah extends Model
{
    protected $table = 'Rumah';

    public function agen()
    {
    	return $this->belongsTo(Agen::Class);
    }

    public function tipe()
    {
    	return $this->belongsTo(Tipe::Class);
    }
}
