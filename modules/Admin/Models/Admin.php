<?php

namespace Modules\Admin\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Modules\Admin\Enums\AdminEnum;
use Modules\Blog\Models\Blog;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = AdminEnum::ID;
    protected $table = AdminEnum::DB_TABLE;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = AdminEnum::FIELDS;

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
        'password' => 'hashed',
    ];

    public function blogs()
    {
        return $this->morphMany(Blog::class, 'authorable');
    }
}
