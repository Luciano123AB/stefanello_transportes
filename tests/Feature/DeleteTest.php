<?php

use Database\Factories\UserUnverifiedFactory;

describe('Testes do deletar conta', function () {
    it('testar pedido de deletação da conta', function () {

        $user = UserUnverifiedFactory::new()->create();

        $this->actingAs($user);

        expect($this->get('/confirm-delete')->status())->toBe(302);
    });

    it('testar deletação da conta', function () {

        $user = UserUnverifiedFactory::new()->create();

        $this->actingAs($user);

        $result = $this->delete('/delete' . '/' . $user->id);

        expect($result->status())->toBe(302);
    });
});