<?php

use App\Models\User;

describe('Testes do login', function () {
    it('testar acesso ao login', function () {
        expect($this->get('/login')->status())->toBe(200);
    });

    it('testar carregamento da view do login', function () {
        expect($this->get('/login')->assertViewIs('auth.login'));
    });

    it('testar o login do usuário', function() {

        $user = User::factory()->create();

        $result = $this->post('/login', [
            'email' => $user->email,
            'password' => $user->password
        ]);

        expect($result->status())->toBe(302);
    });
});