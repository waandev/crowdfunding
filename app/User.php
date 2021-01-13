<?php

namespace App;

use App\Traits\UsesUuid;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Null_;
use phpDocumentor\Reflection\Types\Nullable;

class User extends Authenticatable
{
    use Notifiable, UsesUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->HasMany(Role::class);
    }

    public function otp_codes()
    {
        return $this->HasOne(Otp_codes::class);
    }

    public function verified()
    {
        if ($this->email_verified_at != null) {
            return true;
        }
        return false;
    }

    public function isAdmin()
    {
        if ($this->role_id == '46254d0e-bcd1-47c8-b00f-c9644cd07aa5') {
            return true;
        }
        return false;
    }
}
