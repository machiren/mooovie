<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    protected $fillable = [

        'opening_time',
        'ending_time',
        'break_time',
        'total_time',
        'over_time',
        'night_time',
        'holiday_time',
        'holiday_night',
        'holiday',
        'adsence',
        'late',
        'leave_early',
        'holiday_work',
        'makeup_holiday',
        'project',
        'memo',
        'user_id',
        'month_id',
        'calendar_id',
        'created_at',
        'updated_at',
        'auth_name',
        'auth_number',
        'year'
    ];

    public function calendars(){

      return $this->belongsTo(Calendars::class);
    }
}
