<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'specialization',
    ];

    protected $hidden = [
        'password',
    ];
    public function trainingPlans()
    {
        return $this->hasMany(TrainingPlan::class, 'coach_id');
    }

    public function dietPlans()
    {
        return $this->hasMany(DietPlan::class, 'coach_id');
    }
    public function roles()
{
    return $this->morphToMany(Role::class, 'authorizable', 'role_user');
}
}
