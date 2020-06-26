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
        return Patient::where('status', true)->get();
    }

    public static function Cured()
    {
        return Patient::where('status', false)->get();
    }

    public static function Bands()
    {
        return Patient::where('band', true)->get();
    }

    public static function Omani()
    {
        return Patient::where('omani', 1)->get();
    }
    public static function NoOmani()
    {
        return Patient::where('omani', 0)->get();
    }
    public static function Live()
    {
        return Patient::where('live', 1)->get();
    }
    public static function Death()
    {
        return Patient::where('live', 0)->get();
    }
}
