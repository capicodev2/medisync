<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'password',
        'full_name',
        'email',
        'role',
        'type_identification',
        'identification_number',
        'status'
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
        'password' => 'hashed',
    ];

    public static function createUser($request){
        return User::Create([
            "username" => $request->input('username'),
            "password" => Hash::make($request->input('password')),
            "full_name" => $request->input('full_name'),
            "email" => $request->input('email'),
            "type_identification" => 'CC',
            "identification_number" => $request->input('identification_number'),
            "role" => $request->input('role'),
            "status" => 'ACTIVE',
        ]);
    }

//    public static function deletedUser($request) {
//        return User::deletedUser([
//
//        ]);
//    }

    public static function updatedStatus($request){
        return User::updateOrCreate(['id' => $request->id],[
            "status" => 'INACTIVE',
        ]);
    }

    public static function updatedUsers($request){
        return User::updateOrCreate(['id' => $request->id],
            [
                'username' => $request->username,
                'full_name' => $request->full_name,
                'email' => $request->email,
                'type_identification' => 'CC',
                'identification_number' => $request->identification_number,
                'role' => $request->role,
            ]
        );
    }

    public static function updatedUsersP($request){
        return User::updateOrCreate(['id' => $request->id],
            [
                'username' => $request->username,
                'full_name' => $request->full_name,
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'type_identification' => 'CC',
                'identification_number' => $request->identification_number,
                'role' => $request->role,
            ]
        );
    }

}
