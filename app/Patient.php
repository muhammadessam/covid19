<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = [];


    public function observer()
    {
        return $this->belongsTo(Observer::class, 'observer_id', 'id');
    }

    public function village()
    {
        return $this->belongsTo(Village::class, 'village_id', 'id');
    }

    public static function Active()
    {
        return Patient::where('status', 'active');
    }

    public static function Cured()
    {
        return Patient::where('status', 'cured');
    }

    public static function Bands()
    {
        return Patient::where('band', true);
    }
}
