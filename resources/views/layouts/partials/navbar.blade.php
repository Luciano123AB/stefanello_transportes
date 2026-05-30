<nav class="navbar border-bottom border-5 border-black bg-success shadow-lg">
    <div class="container-fluid">
        <div class="d-flex align-items-center gap-1">
            <img src="{{ asset('assets/images/icons/logo.png') }}" class="animate__animated animate__rollIn animate__infinite" height="45">
            <a href="{{ route('home') }}" class="navbar-brand"><span class="fs-4 fw-bold">{{ env('APP_NAME') }}:</span> {{ $pageTitle }}</a>
        </div>
        <div class="d-flex gap-2 my-2">
            <a href="#" class="btn btn-warning border-black shadow-sm">LOGIN</a>
            <a href="#" class="btn btn-warning border-black shadow-sm">CADASTRAR</a>
        </div>
    </div>
</nav>