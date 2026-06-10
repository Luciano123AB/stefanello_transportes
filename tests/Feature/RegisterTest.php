<?php

describe('Testes do cadastro', function () {
    it('testar acesso ao cadastro', function () {
        expect($this->get('/register')->status())->toBe(200);
    });

    it('testar carregamento da view do cadastro', function () {
        expect($this->get('/register')->assertViewIs('auth.register'));
    });

    it('testar o cadastro do usuário', function () {

        $username = 'Maurício Barbieri';
        $email = 'mbarbieri273@gmail.com';
        $password = '@150177Mb';
        $result = $this->post('/register', [
            'name' => $username,
            'email' => $email,
            'password' => $password,
            'password_confirmation' => $password,
            'role' => 'admin'
        ]);

        expect($result->status())->toBe(302);
    });
});