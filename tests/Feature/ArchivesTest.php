<?php

use Database\Factories\DataFactory;
use Database\Factories\UserFactory;

beforeEach(function () {
    DataFactory::new()->create();
});

describe('Testes do arquivos', function () {
    it('testar acesso ao arquivos', function () {

        $user = UserFactory::new()->create();

        $this->actingAs($user);

        expect($this->get('/file-list')->status())->toBe(200);
    });

    it('testar carregamento da view do arquivos', function () {

        $user = UserFactory::new()->create();

        $this->actingAs($user);

        expect($this->get('/file-list')->assertViewIs('archives'));
    });

    it('testar conteúdo do arquivos', function () {

        $user = UserFactory::new()->create();

        $this->actingAs($user);

        expect($this->get('/file-list')->assertSee('Meus Arquivos'));
    });

    it('testar envio do arquivo', function () {

        $user = UserFactory::new()->create();

        $this->actingAs($user);

        $result = $this->post('/file-upload', [
            'file' => 'file'
        ]);

        expect($result->status())->toBe(302);
    });

    it('testar download do arquivo', function () {

        $user = UserFactory::new()->create();

        $this->actingAs($user);

        $result = $this->get('/file-download/file');

        expect($result->status())->toBe(302);
    });

    it('testar visualização do arquivo', function () {

        $user = UserFactory::new()->create();

        $this->actingAs($user);

        $result = $this->get('/file-view/file');

        expect($result->status())->toBe(302);
    });

    it('testar exclusão do arquivo', function () {

        $user = UserFactory::new()->create();

        $this->actingAs($user);

        $result = $this->delete('/file-delete/file');

        expect($result->status())->toBe(302);
    });
});