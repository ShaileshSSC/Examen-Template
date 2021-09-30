<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';

    static function attempt($username, $password)
    {
        $user = Self::where('username', '=', $username)->first();

        if($user == null)
        {
            return false;
        }

        if(!(Hash::check($password, $user->password)))
        {
            return false;
        }

        return collect([
            'id' => $user->id,
            'name' => $user->username,
            'is_admin' => $user->admin,
        ]);
    }
}
