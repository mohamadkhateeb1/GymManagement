<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
    ];
    public function abilities()
    {
        return $this->hasMany(RoleAbility::class, 'role_id');
    }
    public function users() 
    {
        return $this->morphedByMany(Admin::class, 'authorizable', 'role_user');
    }
}
