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
    ];

    protected $hidden = [
        'mname',
        'remember_token',
    ];

}
