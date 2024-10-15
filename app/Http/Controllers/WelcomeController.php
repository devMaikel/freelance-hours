<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = User::query()->create([
            'name' => 'Maikel',
            'email' => 'maikel@email.com',
            'password' => '123456'
        ]);
        dd($user);
        return view('welcome');
    }
}
