<nav id="top_bar" class="navbar border-5 border-black bg-success shadow-lg">
    <div class="container-fluid">
        <div class="buttons_navbar_color d-flex align-items-center border border-black rounded">
            <img src="{{ asset('assets/images/icons/logo.png') }}" class="animate__animated animate__rollIn animate__infinite m-1" height="45">
            <a href="{{ route('home') }}" class="navbar-brand">
                <span class="fs-4 fw-bold">{{ env('APP_NAME') }}:</span>
                {{ $pageTitle }}
            </a>
        </div>
        <div id="buttons_navbar" class="d-flex gap-2">
            <a href="#" class="buttons_navbar_color btn btn-warning border-black shadow-sm">
                <iconify-icon icon="streamline-color:login-1" class="animate__animated animate__fadeOutLeft animate__infinite"></iconify-icon>
                LOGIN
            </a>
            <a href="#" class="buttons_navbar_color btn btn-warning border-black shadow-sm">
                <iconify-icon icon="streamline-color:user-add-plus" class="animate__animated animate__heartBeat animate__infinite"></iconify-icon>
                CADASTRAR
            </a>
        </div>
    </div>
</nav>