<?php

use Livewire\Component;

new class extends Component {

    public $current_password;    
    public $password;
    public $password_confirmation;
    public $show_current_password = false;
    public $show_password = false;
    public $show_confirm = false;

    public function showCurrentPassword()
    {
        $this->show_current_password = !$this->show_current_password;
    }

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
        $this->current_password = '';
        $this->password = '';
        $this->password_confirmation = '';
    }
};
?>

<form action="{{ route('update.password') }}" method="post">
    @csrf

    <div class="d-grid gap-3">
        <div>
            <div class="input-group">
                <label class="input-group-text">Senha Atual:</label>
                <input type="{{ $show_current_password ? 'text' : 'password' }}" wire:model="current_password" class="form-control" name="current_password" placeholder="***">
                <button type="button" class="input-group-text focus-ring" wire:click="showCurrentPassword()"><iconify-icon icon="{{ $show_current_password ? 'emojione-v1:eye' : 'simple-line-icons:eye' }}"></iconify-icon></button>
            </div>
            @error('current_password')
                <div>
                    <label class="animate__animated animate__shakeX bg-danger-subtle border border-black text-danger rounded px-1">
                        <iconify-icon icon="mingcute:alert-line"></iconify-icon>
                        {{ $message }}
                    </label>
                </div>
            @enderror
        </div>
        <div>
            <div class="input-group">
                <label class="input-group-text">Nova Senha:</label>
                <input type="{{ $show_password ? 'text' : 'password' }}" wire:model="password" class="form-control" name="password" placeholder="***">
                <button type="button" class="input-group-text focus-ring" wire:click="showPassword()"><iconify-icon icon="{{ $show_password ? 'emojione-v1:eye' : 'simple-line-icons:eye' }}"></iconify-icon></button>
            </div>
            @error('password')
                <div>
                    <label class="animate__animated animate__shakeX bg-danger-subtle border border-black text-danger rounded px-1">
                        <iconify-icon icon="mingcute:alert-line"></iconify-icon>
                        {{ $message }}
                    </label>
                </div>
            @enderror
        </div>
        <div>
            <div class="input-group">
                <label class="input-group-text">Confirmar Senha:</label>
                <input type="{{ $show_confirm ? 'text' : 'password' }}" wire:model="password_confirmation" class="form-control" name="password_confirmation" placeholder="***">
                <button type="button" class="input-group-text focus-ring" wire:click="showConfirm()"><iconify-icon icon="{{ $show_confirm ? 'emojione-v1:eye' : 'simple-line-icons:eye' }}"></iconify-icon></button>
            </div>
            @error('password_confirmation')
                <div>
                    <label class="animate__animated animate__shakeX bg-danger-subtle border border-black text-danger rounded px-1">
                        <iconify-icon icon="mingcute:alert-line"></iconify-icon>
                        {{ $message }}
                    </label>
                </div>
            @enderror
        </div>
    </div>
    @error('password_error')
        <div class="text-start">
            <label class="animate__animated animate__shakeX bg-danger-subtle border border-black text-danger rounded px-1">
                <iconify-icon icon="mingcute:alert-line"></iconify-icon>
                {{ $message }}
            </label>
        </div>
    @enderror
    @if (session()->has('password_success'))
        <div class="text-start mt-1">
            <label class="bg-success-subtle border border-black text-success rounded px-1">
                <iconify-icon icon="streamline-ultimate-color:check"></iconify-icon>
                {{ session()->get('password_success') }}
            </label>
        </div>
    @endif

    <div class="text-center mt-3">
        <button type="button" class="btn btn-danger border-black focus-ring focus-ring-danger shadow-sm" wire:click="clearInputs()">
            <iconify-icon icon="glyphs-poly:trash-1" class="animate__animated animate__bounceOut animate__infinite"></iconify-icon>
            LIMPAR
        </button>
        <button type="submit" class="btn btn-success border-black focus-ring focus-ring-success">
            <iconify-icon icon="streamline-ultimate-color:check"></iconify-icon>
            SALVAR
        </button>
    </div>
</form>