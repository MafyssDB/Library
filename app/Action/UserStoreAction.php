<?php

namespace App\Action;

use App\Mail\User\PasswordMail;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserStoreAction
{
    public function handle($data)
    {
        $password = Str::random(10);
        $data['password'] = Hash::make( $password);
        $user = User::firstOrCreate(['email' => $data['email']] , $data);
        Mail::to($data['email'])->send(new PasswordMail($password));
        event(new Registered($user));
    }
}
