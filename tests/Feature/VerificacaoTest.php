<?php

use App\Models\User;

describe('Testes da verificação', function () {
    it('testar acesso a verificação', function () {

        $username = 'Maurício Barbieri';
        $email = 'lucianoedustefa24032004@gmail.com';
        $password = '@24032004ABcd123';
        $user = User::create([
            'name' => $username,
            'email' => $email,
            'password' => $password,
            'role' => 'visitor'
        ]);

        $this->actingAs($user);

        expect($this->get('/email/verify')->status())->toBe(200);
    });

    it('testar carregamento da view da verificação', function () {

        $username = 'Maurício Barbieri';
        $email = 'lucianoedustefa24032004@gmail.com';
        $password = '@24032004ABcd123';
        $user = User::create([
            'name' => $username,
            'email' => $email,
            'password' => $password,
            'role' => 'visitor'
        ]);

        $this->actingAs($user);

        expect($this->get('/email/verify')->assertViewIs('auth.verify-email'));
    });

    it('testar conteúdo da verificação', function () {

        $username = 'Luciano Eduardo';
        $email = 'lucianoedustefa24032004@gmail.com';
        $password = '@24032004ABcd123';
        $user = User::create([
            'name' => $username,
            'email' => $email,
            'password' => $password,
            'role' => 'visitor'
        ]);

        $this->actingAs($user);

        expect($this->get('/email/verify')->assertSee('Verificação'));
    });

    it('testar o envio do email', function () {

        $username = 'Luciano Eduardo';
        $email = 'lucianoedustefa24032004@gmail.com';
        $password = '@24032004ABcd123';
        $user = User::create([
            'name' => $username,
            'email' => $email,
            'password' => $password,
            'role' => 'visitor'
        ]);

        if ($this->actingAs($user) && $this->get('/email/verify')) {
            expect($this->post('/email/verification-notification', [
                'email' => $user->email
            ])->status())->toBe(302);
        }
    });
});