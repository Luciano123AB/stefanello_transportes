<x-main_layout :pageTitle="'Verificação de Email'">
    <form action="{{ route('verification.send') }}" method="post" class="card d-grid gap-3 border border-black bg-warning shadow p-3">
        @csrf

        <div class="d-grid">
            <label class="fw-bold">Email:</label>
            <div class="input-group">
                <input type="email" wire:model="email" class="form-control border border-black" name="email" placeholder="exemplo@gmail.com" value="{{ old('email', auth()->user()->email) }}" required autofocus>
                <button type="submit" class="btn btn-success border-black focus-ring focus-ring-success shadow-sm">
                    <iconify-icon icon="twemoji:down-arrow" class="animate__animated animate__fadeOutDown animate__infinite"></iconify-icon>
                    Enviar
                </button>
            </div>
            @if (session('status') == 'verification-link-sent')
                <div>
                    <label class="bg-success-subtle border border-top-0 border-black text-success rounded px-1">
                        <iconify-icon icon="streamline-ultimate-color:check"></iconify-icon>
                        Um novo link de verificação foi enviado para o seu endereço de e-mail.
                    </label>
                </div>
            @else
                <div class="bg-warning-subtle text-center mt-3 rounded">
                    <p class="m-2">Obrigado por se cadastrar! Antes de continuar, verifique seu endereço de e-mail e clique no link de confirmação que enviei para você. Caso não recebeu o e-mail, tente enviar novamente.</p>
                </div>
            @endif
        </div>
    </form>
</x-main_layout>