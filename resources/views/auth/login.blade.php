<x-main_layout :pageTitle="'Login'">
    <h1 class="text-center fw-bold mb-5">Login</h1>

    <form action="{{ route('login') }}" method="post" class="card d-grid gap-3 border border-black bg-warning shadow p-3">
        @csrf

        <div class="d-grid">
            <label class="fw-bold">Email:</label>
            <input type="email" class="form-control border border-black" name="email" placeholder="exemplo@gmail.com" value="{{ old('email') }}" autofocus>
            @error('email')
                <div>                    
                    <label class="bg-danger-subtle border border-top-0 border-black text-danger rounded px-1">
                        <iconify-icon icon="mingcute:alert-line"></iconify-icon>
                        {{ $message }}
                    </label>
                </div>
            @enderror
        </div>

        <div class="d-grid">
            <label class="fw-bold">Senha:</label>
            <input type="password" class="form-control border border-black" name="password" placeholder="***">
            @error('password')
                <div>
                    <label class="bg-danger-subtle border border-top-0 border-black text-danger rounded px-1">
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
                <button type="button" class="btn btn-danger border-black shadow-sm">
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
</x-main_layout>