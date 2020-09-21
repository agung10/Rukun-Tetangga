<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DataDiri extends Model
{
    public function Keluarga(){
        return $this->belongsTo('App\Model\StatusKeluarga', 'keluarga_id');
    }

    public function KartuKeluarga(){
        return $this->belongsTo('App\Model\StatusKartuKeluarga', 'kk_id');
    }

    public function Pernikahan(){
        return $this->belongsTo('App\Model\StatusPernikahan', 'pernikahan_id');
    }

    public function getUpdatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['updated_at'])
        ->diffForHumans();
    }
}
