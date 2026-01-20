<?php
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'personal_information_admin';

    // 1. Tell Laravel the Primary Key is 'id' (The Student/Grade ID)
    protected $primaryKey = 'id';

    // 2. Prevent Eloquent from assuming the ID is auto-incrementing
    public $incrementing = true;

    // 3. Tell Laravel which attribute to use as the password field
    // By default, this is 'password'. We change it to 'mname'.
    public function getAuthPassword()
    {
        // This is where Laravel gets the hashed password from the database.
        return $this->mname;
    }

    // The other properties remain:
    protected $fillable = [
        'id', // Student ID
        'mname', // Hashed Middle Name
        'firebase_uid', // Firebase UID for OAuth
        'name', // Display Name
        'email', // Email address
        'profile_picture', // Profile picture URL
        'is_firebase_user', // Flag for Firebase authentication
        'last_login_at', // Last login timestamp
    ];

    protected $hidden = [
        'mname',
        'remember_token',
    ];

    protected $casts = [
        'is_firebase_user' => 'boolean',
        'last_login_at' => 'datetime',
    ];

}
