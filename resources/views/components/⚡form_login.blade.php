<?php

use Livewire\Component;

new class extends Component {

    public $email;    
    public $password;
    public $show = false;

    public function showPassword()
    {
        $this->show = !$this->show;
    }

    public function clearInputs()
    {
        $this->email = '';
        $this->password = '';
    }
};
?>

<form action="{{ route('login') }}" method="post" class="card d-grid gap-3 border border-black bg-warning shadow p-3">
    @csrf

    <div class="d-grid">
        <label class="fw-bold">
            <iconify-icon icon="streamline-cyber-color:email-2"></iconify-icon>
            Email:
        </label>
        <input type="email" wire:model="email" class="form-control border border-black" name="email" placeholder="exemplo@gmail.com" value="{{ old('email') }}" autofocus>
        @error('email')
            <div>                    
                <label class="animate__animated animate__shakeX bg-danger-subtle border border-top-0 border-black text-danger rounded px-1">
                    <iconify-icon icon="mingcute:alert-line"></iconify-icon>
                    {{ $message }}
                </label>
            </div>
        @enderror
    </div>

    <div class="d-grid">
        <label class="fw-bold">
            <iconify-icon icon="streamline-cyber-color:key-2"></iconify-icon>
            Senha:
        </label>
        <div class="input-group">
            <input type="{{ $show ? 'text' : 'password' }}" wire:model="password" class="form-control border border-black" name="password" placeholder="***">
            <button type="button" class="input-group-text border-black" wire:click="showPassword()"><iconify-icon icon="{{ $show ? 'emojione-v1:eye' : 'simple-line-icons:eye' }}"></iconify-icon></button>
        </div>
        @error('password')
            <div>
                <label class="animate__animated animate__shakeX bg-danger-subtle border border-top-0 border-black text-danger rounded px-1">
                    <iconify-icon icon="mingcute:alert-line"></iconify-icon>
                    {{ $message }}
                </label>
            </div>
        @enderror
    </div>

    <div class="card-footer d-flex justify-content-between bg-warning-subtle">
        <a href="{{ route('home') }}" class="buttons_navbar_color btn btn-warning border-black align-self-baseline shadow-sm">
            <iconify-icon icon="twemoji:left-arrow" class="animate__animated animate__fadeOutLeft animate__infinite"></iconify-icon>
            VOLTAR
        </a>

        <div id="buttons_form" class="gap-1">
            <button type="button" class="btn btn-danger border-black shadow-sm" wire:click="clearInputs()">
                <iconify-icon icon="glyphs-poly:trash-1" class="animate__animated animate__bounceOut animate__infinite"></iconify-icon>
                LIMPAR
            </button>
            <button type="submit" class="btn btn-success border-black shadow-sm">
                <iconify-icon icon="streamline-color:login-1" class="animate__animated animate__fadeOutLeft animate__infinite"></iconify-icon>
                LOGAR
            </button>
        </div>
    </div>
</form>