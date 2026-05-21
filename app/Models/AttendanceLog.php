<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttendanceLog extends Model
{
    protected $fillable = [
        'player_id',
        'check_in_time',
        'check_out_time',
    ];

    public function player()
    {
        return $this->belongsTo(Player::class, 'player_id');
    }
}
