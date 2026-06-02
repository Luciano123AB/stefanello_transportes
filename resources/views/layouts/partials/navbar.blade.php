<nav id="top_bar" class="navbar border-5 border-warning bg-success shadow-lg">
    <div class="container-fluid">
        <a href="{{ route('home') }}" class="buttons_navbar_color navbar-brand d-flex align-items-center btn btn-warning border border-black rounded p-2">
            <img src="{{ asset('assets/images/icons/logo.png') }}" class="animate__animated animate__rollIn animate__infinite me-2" height="45">
            <span class="fs-4 fw-bold">{{ config('app.name') }}:</span>
            {{ $pageTitle }}
        </a>
        <div id="buttons_navbar" class="d-flex gap-2">
            <a href="#" class="buttons_navbar_color btn btn-warning border-black shadow-sm">
                <iconify-icon icon="streamline-color:user-add-plus" class="animate__animated animate__heartBeat animate__infinite"></iconify-icon>
                CADASTRAR
            </a>
            <a href="{{ route('login') }}" class="buttons_navbar_color btn btn-warning border-black shadow-sm">
                <iconify-icon icon="streamline-color:login-1" class="animate__animated animate__fadeOutLeft animate__infinite"></iconify-icon>
                LOGAR
            </a>
        </div>
    </div>
</nav>
