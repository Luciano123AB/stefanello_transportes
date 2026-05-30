<nav id="top_bar" class="navbar border-5 border-black bg-success shadow-lg">
    <div class="container-fluid">
        <div class="d-flex align-items-center border border-black bg-warning rounded">
            <img src="{{ asset('assets/images/icons/logo.png') }}" class="animate__animated animate__rollIn animate__infinite m-1" height="45">
            <a href="{{ route('home') }}" class="navbar-brand"><span class="fs-4 fw-bold">{{ env('APP_NAME') }}:</span> {{ $pageTitle }}</a>
        </div>
        <div id="buttons_navbar" class="d-flex gap-2">
            <a href="#" class="btn btn-warning border-black shadow-sm">LOGIN</a>
            <a href="#" class="btn btn-warning border-black shadow-sm">CADASTRAR</a>
        </div>
    </div>
</nav>