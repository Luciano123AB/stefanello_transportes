<?php

use Database\Factories\DataFactory;
use Database\Factories\UserFactory;
use Database\Factories\UserUnverifiedFactory;
use Illuminate\Support\Facades\Crypt;

beforeEach(function () {
    DataFactory::new()->create();
    UserFactory::new()->create();
});

describe('Testes do deletar conta', function () {
    it('testar pedido de deletação da conta', function () {

        $user = UserUnverifiedFactory::new()->create();

        $this->actingAs($user);

        expect($this->get('/confirm-delete')->status())->toBe(302);
    });

    it('testar deletação da conta', function () {

        $user = UserUnverifiedFactory::new()->create();

        $this->actingAs($user);

        $result = $this->delete('/delete' . '/' . Crypt::encrypt($user->id));

        expect($result->status())->toBe(302);
    });
});