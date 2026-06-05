<?php

describe('Testes do home', function () {
    it('testar acesso ao home', function () {
        expect($this->get('/')->status())->toBe(200);
    });

    it('testar carregamento da view do home', function () {
        expect($this->get('/')->assertViewIs('home'));
    });

    it('testar conteúdo do home', function () {
        expect($this->get('/')->assertSee('Seja BEM-VINDO!'));
    });
});