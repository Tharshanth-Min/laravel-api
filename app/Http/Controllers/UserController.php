<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller {
    
    public function getUser() {
        $user = User::get();
        return response()->json([
            'status' => 200,
            'user' => $user
        ]);
    }
}
