<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
    public function roles()
{
    return $this->morphToMany(Role::class, 'authorizable', 'role_user');
}
}
