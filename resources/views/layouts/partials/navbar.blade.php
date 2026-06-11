<nav id="top_bar" class="navbar border-5 border-warning bg-success shadow-lg">
    <div class="container-fluid">
        <a href="{{ route('home') }}" class="buttons_navbar_color navbar-brand d-flex flex-wrap align-items-center btn btn-warning border border-black focus-ring focus-ring-warning rounded p-2">
            <img src="{{ asset('assets/images/icons/logo.png') }}" class="animate__animated animate__rollIn animate__infinite me-2" height="45">
            <span class="fs-4 fw-bold me-2">{{ config('app.name') }}:</span>
            <span id="page_title">{{ $pageTitle }}</span>
        </a>
        <div id="buttons_navbar" class="d-flex gap-2">
            @guest
                @if ($pageTitle !== 'Cadastro')
                    <a href="{{ route('register') }}" class="buttons_navbar_color btn btn-warning border-black focus-ring focus-ring-warning">
                        <iconify-icon icon="streamline-color:user-add-plus" class="animate__animated animate__heartBeat animate__infinite"></iconify-icon>
                        CADASTRAR
                    </a>
                @endif
                @if ($pageTitle !== 'Login')
                    <a href="{{ route('login') }}" class="buttons_navbar_color btn btn-warning border-black focus-ring focus-ring-warning">
                        <iconify-icon icon="streamline-color:login-1" class="animate__animated animate__fadeOutLeft animate__infinite"></iconify-icon>
                        ENTRAR
                    </a>
                @endif
            @else
                <div class="d-flex btn-group">
                    <div class="buttons_navbar_color d-grid btn btn-warning border-black text-start">
                        <label>User: {{ auth()->user()->name }}</label>
                        <label>Email: {{ auth()->user()->email }}</label>
                    </div>
                    <button type="button" class="buttons_navbar_color btn btn-warning border-black dropdown-toggle dropdown-toggle-split focus-ring focus-ring-warning" data-bs-toggle="dropdown" aria-expanded="false"></button>
                    <ul class="bg-warning border-top-0 border-black dropdown-menu dropdown-menu-end mt-0">
                        <div class="border-top border-bottom border-black">
                            @if ($pageTitle !== 'Mais Informações')
                                <li><a class="btn btn-warning focus-ring focus-ring-warning dropdown-item" href="{{ route('more.informations') }}">Mais Informações</a></li>
                            @endif
                            @if ($pageTitle !== 'Editar Perfil')
                                <li><a class="btn btn-warning focus-ring focus-ring-warning dropdown-item" href="{{ route('edit.profile') }}">Editar Perfil</a></li>
                            @endif
                            <li><a class="btn btn-warning focus-ring focus-ring-warning dropdown-item" href="{{ route('confirm.delete') }}">Deletar Conta</a></li>
                        </div>
                    </ul>
                </div>

                <form action="{{ route('logout') }}" method="post" class="buttons_navbar_color btn btn-warning align-self-center border-black shadow-sm p-0">
                    @csrf

                    <button type="submit" class="btn focus-ring focus-ring-warning">
                        <iconify-icon icon="streamline-color:logout-1" class="animate__animated animate__fadeOutRight animate__infinite"></iconify-icon>
                        SAIR
                    </button>
                </form>
            @endguest
        </div>
    </div>
</nav>
