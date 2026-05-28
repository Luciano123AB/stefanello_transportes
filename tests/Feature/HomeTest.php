<?php

describe('Testes do MainController', function () {
    it('testar acesso ao Home', function () {
        expect($this->get('/')->status())->toBe(200);
    });

    it('testar carregamento da view do Home', function () {
        expect($this->get('/')->assertViewIs('home'));
    });
});