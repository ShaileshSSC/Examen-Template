<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class CustomAuth extends Model
{
    use HasFactory;

    function attempt($credentials)
    {
        $user = DB::table('users')
                ->where('username', '=', $credentials->username)
                ->where('password', '=', $credentials->password)
                ->get();

        return $user ? $user : false;
    }
}
