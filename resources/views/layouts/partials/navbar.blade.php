<nav class="navbar border-bottom border-5 border-black bg-success mb-5">
    <div class="container-fluid">
        <div class="d-flex align-items-center gap-1">
            <img src="{{ asset('assets/images/logo.png') }}" height="45">
            <a href="{{ route('home') }}" class="navbar-brand"><span class="fs-4 fw-bold">{{ env('APP_NAME') }}:</span> {{ $page }}</a>
        </div>
    </div>
</nav>