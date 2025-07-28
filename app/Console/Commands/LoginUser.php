<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginUser extends Command
{
    protected $signature = 'login:user {email} {password}';
    protected $description = 'Login user via console';

    public function handle()
    {
        $credentials = [
            'email' => $this->argument('email'),
            'password' => $this->argument('password'),
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $this->info("Login berhasil sebagai: {$user->name} (ID: {$user->id})");
        } else {
            $this->error("Login gagal. Email atau password salah.");
        }
    }
}
