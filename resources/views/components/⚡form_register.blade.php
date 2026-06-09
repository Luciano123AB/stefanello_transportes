<?php

use Livewire\Component;

new class extends Component {

    public $username;
    public $email;    
    public $password;
    public $password_confirmation;
    public $show_password = false;
    public $show_confirm = false;

    public function showPassword()
    {
        $this->show_password = !$this->show_password;
    }

    public function showConfirm()
    {
        $this->show_confirm = !$this->show_confirm;
    }

    public function clearInputs()
    {
        $this->username = '';
        $this->email = '';
        $this->password = '';
        $this->password_confirmation = '';
    }
};
?>

<form action="{{ route('register') }}" method="post" class="card d-grid gap-3 border border-black bg-warning shadow p-3">
    @csrf

    <div class="d-grid">
        <label class="fw-bold">
            <iconify-icon icon="streamline-plump-color:user-pin"></iconify-icon>
            Usuário:
        </label>
        <input type="text" wire:model="username" class="form-control border border-black" name="name" placeholder="Exemplo123Ab" value="{{ old('name') }}" autofocus>
        @error('name')
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
            <iconify-icon icon="streamline-cyber-color:email-2"></iconify-icon>
            Email:
        </label>
        <input type="email" wire:model="email" class="form-control border border-black" name="email" placeholder="exemplo@gmail.com" value="{{ old('email') }}">
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
            <input type="{{ $show_password ? 'text' : 'password' }}" wire:model="password" class="form-control border border-black" name="password" placeholder="***">
            <button type="button" class="input-group-text border-black" wire:click="showPassword()"><iconify-icon icon="{{ $show_password ? 'emojione-v1:eye' : 'simple-line-icons:eye' }}"></iconify-icon></button>
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

    <div class="d-grid">
        <label class="fw-bold">
            <iconify-icon icon="streamline-cyber-color:key-2"></iconify-icon>
            Confirmar Senha:
        </label>
        <div class="input-group">
            <input type="{{ $show_confirm ? 'text' : 'password' }}" wire:model="password_confirmation" class="form-control border border-black" name="password_confirmation" placeholder="***">
            <button type="button" class="input-group-text border-black" wire:click="showConfirm()"><iconify-icon icon="{{ $show_confirm ? 'emojione-v1:eye' : 'simple-line-icons:eye' }}"></iconify-icon></button>
        </div>
        @error('password_confirmation')
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
                CADASTRAR
            </button>
        </div>
    </div>

    <div class="text-center">
        <p><span class="me-1">Já tenho uma conta</span> - <a href="{{ route('login') }}" class="fw-bold text-decoration-none">Entrar</a> -</p>
    </div>
</form>