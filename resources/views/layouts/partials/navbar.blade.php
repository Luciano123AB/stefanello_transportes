<nav id="top_bar" class="navbar border-5 border-warning bg-success shadow-lg">
    <div class="container-fluid">
        <a href="{{ route('home') }}" class="buttons_navbar_color navbar-brand d-flex gap-2 flex-wrap align-items-center btn btn-warning border border-black rounded p-2">
            <img src="{{ asset('assets/images/icons/logo.png') }}" class="animate__animated animate__rollIn animate__infinite" height="45">
            <span class="fs-4 fw-bold">{{ config('app.name') }}:</span>
            {{ $pageTitle }}
        </a>
        <div id="buttons_navbar" class="d-flex gap-2">
            @guest
                @if ($pageTitle !== 'Cadastro')
                    <a href="{{ route('register') }}" class="buttons_navbar_color btn btn-warning border-black shadow-sm">
                        <iconify-icon icon="streamline-color:user-add-plus" class="animate__animated animate__heartBeat animate__infinite"></iconify-icon>
                        CADASTRAR
                    </a>
                @endif
                @if ($pageTitle !== 'Login')
                    <a href="{{ route('login') }}" class="buttons_navbar_color btn btn-warning border-black shadow-sm">
                        <iconify-icon icon="streamline-color:login-1" class="animate__animated animate__fadeOutLeft animate__infinite"></iconify-icon>
                        ENTRAR
                    </a>
                @endif
            @else
                <div class="buttons_navbar_color d-grid btn btn-warning border-black">
                    <label>User: {{ auth()->user()->name }}</label>
                    <label>Email: {{ auth()->user()->email }}</label>
                </div>
                <form action="{{ route('logout') }}" method="post" class="buttons_navbar_color btn btn-warning align-self-center border-black shadow-sm p-0">
                    @csrf

                    <button type="submit" class="btn">
                        <iconify-icon icon="streamline-color:logout-1" class="animate__animated animate__fadeOutRight animate__infinite"></iconify-icon>
                        SAIR
                    </button>
                </form>
            @endguest
        </div>
    </div>
</nav>
