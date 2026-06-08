<?php

use App\Models\User;

describe('Testes do mais informações', function () {
    it('testar acesso ao mais informações', function () {

        $user = User::factory()->create();

        $this->actingAs($user);

        expect($this->get('/more-informations')->status())->toBe(200);
    });

    it('testar carregamento da view do mais informações', function () {

        $user = User::factory()->create();

        $this->actingAs($user);

        expect($this->get('/more-informations')->assertViewIs('more_informations'));
    });

    it('testar conteúdo do mais informações', function () {
        
        $user = User::factory()->create();

        $this->actingAs($user);
        
        expect($this->get('/more-informations')->assertSee('Informações'));
    });
});