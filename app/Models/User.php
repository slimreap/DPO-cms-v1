<?php

namespace App\Models;

use App\Models\Hero;
use App\Models\Page;
use App\Models\Theme;
use App\Models\Video;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Notifications\CustomResetPasswordNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword as PasswordsCanResetPassword;

class User extends  Authenticatable implements FilamentUser, HasMedia, CanResetPassword
{
    use HasFactory, Notifiable, HasRoles, PasswordsCanResetPassword;
    use InteractsWithMedia;

    use SoftDeletes;

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password', 'role_id' , 'token'
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


    public function canAccessFilament(): bool
    {
        if($this->hasAnyRole(['super-admin', 'admin', 'editor']))
        {
            return true;
        }
        return true;
    }

    //assign role to user
    //Attribute casting
    public function role()//: Attribute
    {
        // return new Attribute(
        //     get: fn($value) => ['Super Admin', 'Admin', 'Editor'][$value]
        // );
        return $this->belongsTo(Role::class);
    }


    public function theme()
    {
        return $this->hasMany(Theme::class);
    }


}
