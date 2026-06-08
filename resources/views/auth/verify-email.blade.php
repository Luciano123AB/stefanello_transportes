<x-main_layout :pageTitle="'Verificação de Email'">
    <h1 class="text-center fw-bold text-decoration-underline mb-5">Verificação</h1>

    <form action="{{ route('verification.send') }}" method="post" class="card d-grid gap-3 border border-black bg-warning shadow p-3">
        @csrf

        <div class="d-grid">
            <label class="fw-bold">Email:</label>
            <div class="input-group">
                <input type="email" wire:model="email" class="form-control border border-black" name="email" placeholder="exemplo@gmail.com" value="{{ old('email') }}" required autofocus>
                <button type="submit" class="btn btn-success border-black shadow-sm">
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
            @endif
        </div>
    </form>
</x-main_layout>