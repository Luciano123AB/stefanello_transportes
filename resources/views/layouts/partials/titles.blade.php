<h1 class="bg-success progress-bar-striped bg-success text-center text-decoration-underline mt-5 p-1">
    @if ($pageTitle === 'Home')
        <strong>Seja BEM-VINDO!</strong>
        <br>
        <small>ao meu Site</small>
    @elseif ($pageTitle === 'Login')
        <small>Formulário de</small>
        <br>
        <strong>Login</strong>
    @elseif ($pageTitle === 'Cadastro')
        <small>Formulário de</small>
        <br>
        <strong>Cadastro</strong>
    @elseif ($pageTitle === 'Verificação')
        <strong>Verificação de Email</strong>
    @elseif ($pageTitle === 'Informações')
        <strong>Mais Informações</strong>
    @elseif ($pageTitle === 'Perfil')
        <strong>Editar Perfil</strong>
    @endif
</h1>