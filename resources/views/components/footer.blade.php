<footer id="bottom_bar" class="gap-3 flex-wrap border-5 border-warning bg-success text-center shadow-lg p-3 mt-auto">
    <div class="d-grid align-self-center">
        <div class="bg-light border border-black fw-bold rounded p-1">
            © Todos os direitos reservados: Maurício Barbieri
            <br>
            2026 - {{ date('Y') }} | {{ config('app.name') }}
        </div>
    </div>

    <div class="bg-light border border-black align-self-center rounded p-1 overflow-hidden">
        <div class="animate__animated animate__fadeInLeft">
            <iconify-icon icon="streamline-emojis:office-building"></iconify-icon>
            CNPJ: {{ $data_admin->cnpj }}
        </div>
    </div>

    <div id="contacts" class="d-grid bg-light border border-black rounded p-1 overflow-hidden">
        <label class="fw-bold text-center">Contatos:</label>
        <div class="animate__animated animate__fadeInLeft">
            <iconify-icon icon="streamline-cyber-color:email-2"></iconify-icon>
            Email: {{ $email_admin }}
        </div>
        <div class="animate__animated animate__fadeInLeft" style="animation-delay: 0.2s;">
            <iconify-icon icon="logos:whatsapp-icon"></iconify-icon>
            Whatsapp: {{ $data_admin->whatsapp }}
        </div>
        <div class="animate__animated animate__fadeInLeft" style="animation-delay: 0.4s;">
            <iconify-icon icon="streamline-plump-color:phone"></iconify-icon>
            Telefone: {{ $data_admin->phone }}
        </div>
    </div>
</footer>