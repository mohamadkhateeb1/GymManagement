<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'membership_id',
    ];

    protected $hidden = [
        'password',
    ];

    public function memberships()
    {
        return $this->hasMany(Membership::class);
    }
    public function attendanceLogs()
    {
        return $this->hasMany(AttendanceLog::class, 'player_id');
    }
    public function trainingPlans()
    {
        return $this->hasMany(TrainingPlan::class, 'player_id');
    }
    public function dietPlans()
    {
        return $this->hasMany(DietPlan::class, 'player_id');
    }
}
