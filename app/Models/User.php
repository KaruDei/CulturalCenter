<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'full_name',
        'email',
        'password',
        'picture',
        'user_role_id',
    ];

    public function hasRole($role)
    {
        if ($this->userRole->role == 'admin') {
            return true;
        }

        return false;
    }

    // Add link for UserRoles
    public function userRole () {
        return $this->belongsTo(UserRoles::class, 'id');
    }

    public function userTickets () {
        return $this->hasMany(EventTickets::class, 'user_id');
    }

    public function userSeats () {
        return $this->hasMany(Seats::class, 'user_id');
    }

    public function userOrders () {
        return $this->hasMany(EventOrders::class, 'user_id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
