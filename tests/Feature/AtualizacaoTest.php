<?php

use Database\Factories\UserFactory;

describe('Testes do editar perfil', function () {
    it('testar acesso ao editar perfil', function () {

        $user = UserFactory::new()->create();

        $this->actingAs($user);

        expect($this->get('/edit-profile')->status())->toBe(200);
    });

    it('testar carregamento da view do editar perfil', function () {

        $user = UserFactory::new()->create();

        $this->actingAs($user);

        expect($this->get('/edit-profile')->assertViewIs('auth.edit_profile'));
    });

    it('testar conteúdo do editar perfil', function () {

        $user = UserFactory::new()->create();

        $this->actingAs($user);

        expect($this->get('/edit-profile')->assertSee('Perfil'));
    });

    it('testar atualização da imagem', function () {

        $user = UserFactory::new()->create();

        $this->actingAs($user);

        $result = $this->post('/image-update', [
            'image' => $user->image
        ]);

        expect($result->status())->toBe(302);
    });

    it('testar atualização dos dados', function () {

        $user = UserFactory::new()->create();

        $this->actingAs($user);

        $result = $this->post('/data-update', [
            'name' => $user->name,
            'email' => $user->email
        ]);

        expect($result->status())->toBe(302);
    });

    it('testar atualização da senha', function () {

        $user = UserFactory::new()->create();

        $this->actingAs($user);

        $result = $this->post('/password-update', [
            'password' => $user->password,
            'password_confirmation' => $user->password
        ]);

        expect($result->status())->toBe(302);
    });
});