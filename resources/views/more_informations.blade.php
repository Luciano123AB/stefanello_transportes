<x-main_layout :pageTitle="'Mais Informações'">
    <div class="card border-black shadow">
        <div class="card-header"></div>
        <div id="informations" class="d-grid card-body">
            <div class="division border-bottom border-black overflow-auto">
                <h3 class="fw-bold">-Dados do Profissional</h3>

                <ul class="animate__animated animate__fadeInLeft">
                    <li>Nome completo: Maurício Barbieri</li>
                    <li>Foto: <img src="{{ asset('assets/images/owner_profile.png') }}" class="border border-2 border-black rounded-3" width="50" height="50"></li>
                    <li>Cidade/Estado: Santa Maria/RS</li>
                    <li>Tempo de experiência: 30 anos</li>
                </ul>
            </div>

            <div class="border-bottom border-black overflow-auto">
                <h3 class="fw-bold">-Características do Veículo</h3>

                <ul class="animate__animated animate__fadeInLeft">
                    <li>Modelo: Scania 112</li>
                    <li>Ano: 1990</li>
                    <li>Tipo: Carreta LS</li>
                    <li>Volume (Carga): 40 m3</li>
                    <li>Peso máximo (Carga): 32t</li>
                    <li>Quantidade de eixos: 6</li>
                </ul>
            </div>

            <div class="division border-bottom border-black overflow-auto">
                <h3 class="fw-bold">-Tipos de Carga</h3>

                <ul class="animate__animated animate__fadeInLeft">
                    <li>Areia</li>
                    <li>Brita</li>
                    <li>Soja</li>
                    <li>Trigo</li>
                    <li>Milho</li>
                    <li>Areião</li>
                </ul>
            </div>

            <div class="border-bottom border-black overflow-auto">
                <h3 class="fw-bold">-Regiões Atendidas</h3>

                <ul class="animate__animated animate__fadeInLeft">
                    <li>Rio Grande do Sul (Central):</li>
                    <div class="d-grid">
                        -Cidades:
                        <span>*Júlio de Castilhos</span>
                        <span>*Tupa</span>
                        <span>*Cruz Alta</span>
                    </div>
                </ul>
            </div>

            <div class="division border-bottom border-black overflow-auto">
                <h3 class="fw-bold">-Serviços Oferecidos</h3>

                <ul class="animate__animated animate__fadeInLeft">
                    <li>Frete dedicado</li>
                    <li>Transporte de cargas fechadas</li>
                </ul>
            </div>

            <div class="border-bottom border-black overflow-auto">
                <h3 class="fw-bold">-Disponibilidade</h3>

                <ul class="animate__animated animate__fadeInLeft">
                    <li>Viagens imediatas: Sim</li>
                    <li>Dias: Qualquer data</li>
                    <li>Horários: Qualquer hora</li>
                </ul>
            </div>

            <div class="division overflow-auto">
                <h3 class="fw-bold">-Documentação e Regularização</h3>

                <ul class="animate__animated animate__fadeInLeft">
                    <li>RNTRC: Ativo - ******825</li>
                    <li>Seguro de carga: Não</li>
                </ul>
            </div>

            <div class="overflow-auto">
                <h3 class="fw-bold">-Diferenciais</h3>

                <ul class="animate__animated animate__fadeInLeft">
                    <li>Pontualidade comprovada.</li>
                    <li>Atendimento direto com o motorista.</li>
                </ul>
            </div>
        </div>
        <div class="card-footer"></div>
    </div>
</x-main_layout>