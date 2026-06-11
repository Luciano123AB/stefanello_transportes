<?php

use Database\Factories\DataFactory;
use Database\Factories\UserFactory;
use Database\Factories\UserUnverifiedFactory;

beforeEach(function () {
    DataFactory::new()->create();
    UserFactory::new()->create();
});

describe('Testes da verificação', function () {
    it('testar acesso a verificação', function () {

        $user = UserUnverifiedFactory::new()->create();

        $this->actingAs($user);

        expect($this->get('/email/verify')->status())->toBe(200);
    });

    it('testar carregamento da view da verificação', function () {

        $user = UserUnverifiedFactory::new()->create();

        $this->actingAs($user);

        expect($this->get('/email/verify')->assertViewIs('auth.verify-email'));
    });

    it('testar conteúdo da verificação', function () {

        $user = UserUnverifiedFactory::new()->create();

        $this->actingAs($user);

        expect($this->get('/email/verify')->assertSee('Verificação'));
    });

    it('testar o envio do email', function () {

        $user = UserUnverifiedFactory::new()->create();

        if ($this->actingAs($user) && $this->get('/email/verify')) {
            expect($this->post('/email/verification-notification', [
                'email' => $user->email
            ])->status())->toBe(302);
        }
    });
});