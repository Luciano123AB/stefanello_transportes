<?php

use App\Models\User;
use Database\Factories\DataFactory;

beforeEach(function () {
    DataFactory::new()->create();
});

describe('teste do deslogue', function () {
    it('testar deslogue do usuário', function () {

        $user = User::factory()->create();
        
        $this->actingAs($user);

        $result = $this->get('/logout');

        expect($result->status())->toBe(302);
    });
});