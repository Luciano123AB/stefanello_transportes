<?php

describe('Testes do editar perfil', function () {
    it('testar acesso ao editar perfil', function () {
        expect($this->get('/edit-profile')->status())->toBe(200);
    });

    it('testar carregamento da view do editar perfil', function () {
        expect($this->get('/edit-profile')->assertViewIs('auth.edit_profile'));
    });

    it('testar conteúdo do editar perfil', function () {
        expect($this->get('/edit-profile')->assertSee('Perfil'));
    });
});