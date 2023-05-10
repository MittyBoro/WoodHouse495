<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const MEDIA_COLLECTION = 'users';

    const ROLE_BLOCKED = 'blocked';
    const ROLE_USER = 'user';
    const ROLE_EDITOR = 'editor';
    const ROLE_ADMIN = 'admin';

    const ROLES = [
        self::ROLE_BLOCKED,
        self::ROLE_USER,
        self::ROLE_EDITOR,
        self::ROLE_ADMIN,
    ];

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'avatar',
    ];

    public function setPasswordAttribute($val)
    {
        $this->attributes['password'] = Hash::make($val);
    }

    public function getIsAdminAttribute()
    {
        return $this->role == self::ROLE_ADMIN;
    }
    public function getIsEditorAttribute()
    {
        return $this->role == self::ROLE_ADMIN || $this->role == self::ROLE_EDITOR;
    }

    public function getFirstNameAttribute()
    {
        return explode(' ', $this->name)[0];
    }

    public function getAvatarAttribute()
    {
        $ui = 'https://ui-avatars.com/api/?name=' . urlencode($this->name) . '&color=fff&background=AC2CDB';
        $gravatar = 'https://www.gravatar.com/avatar/' . md5($this->email) . '?' . urlencode($ui);

        return $gravatar;
    }
}
