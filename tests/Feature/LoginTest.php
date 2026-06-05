<?php

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

describe('Testes do login.', function () {
    it('testar acesso ao login', function () {
        expect($this->get('/login')->status())->toBe(200);
    });

    it('testar carregamento da view do login', function () {
        expect($this->get('/login')->assertViewIs('auth.login'));
    });

    it('testar o login do usuário.', function() {
        User::create([
            'name' => 'Matheus Barbieri',
            'email' => 'mbarbieri273@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('150177Mb'),
            'role' => 'admin'
        ]);

        $email = 'mbarbieri273@gmail.com';
        $password = '150177Mb';
        $result = $this->post('/login', [
            'email' => $email,
            'password' => $password
        ])->assertRedirect('/home');

        expect($result->status())->toBe(302);
    });
});