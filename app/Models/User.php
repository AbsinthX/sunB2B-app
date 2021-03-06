<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Model odpowiedzialny za użytkowników.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'phone',
        'password',
        'country_id',
        'nip',
        'street',
        'city',
        'postal_code',
        'state'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function country()
    {
        // Relacja one to many z państwami.
        return $this->belongsTo('App\Models\Country');
    }

    public function orders()
    {
        // Relacja one to many z zamówieniami.
        return $this->hasMany(Order::class);
    }

}
