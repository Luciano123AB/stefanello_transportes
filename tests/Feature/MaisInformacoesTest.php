<?php

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

describe('Testes do mais informações', function () {
    it('testar acesso ao mais informações', function () {

        $username = 'Luciano Eduardo';
        $email = 'lucianoedustefa24032004@gmail.com';
        $password = '@24032004ABcd123';
        $user = User::create([
            'name' => $username,
            'email' => $email,
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make($password),
            'role' => 'visitor'
        ]);

        $this->actingAs($user);

        expect($this->get('/more-informations')->status())->toBe(200);
    });

    it('testar carregamento da view do mais informações', function () {

        $username = 'Luciano Eduardo';
        $email = 'lucianoedustefa24032004@gmail.com';
        $password = '@24032004ABcd123';
        $user = User::create([
            'name' => $username,
            'email' => $email,
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make($password),
            'role' => 'visitor'
        ]);

        $this->actingAs($user);

        expect($this->get('/more-informations')->assertViewIs('more_informations'));
    });

    it('testar conteúdo do mais informações', function () {
        
        $username = 'Luciano Eduardo';
        $email = 'lucianoedustefa24032004@gmail.com';
        $password = '@24032004ABcd123';
        $user = User::create([
            'name' => $username,
            'email' => $email,
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make($password),
            'role' => 'visitor'
        ]);

        $this->actingAs($user);
        
        expect($this->get('/more-informations')->assertSee('Informações'));
    });
});