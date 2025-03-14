<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRoles extends Model
{
    protected $fillable = [
        'role',
    ];

    public function users () {
        return $this->hasMany(User::class, 'user_role_id');
    }
}
