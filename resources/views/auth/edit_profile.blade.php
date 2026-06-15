<x-main-layout :pageTitle="'Perfil'">
    <div class="informations_data d-grid gap-3">
        @if ($data->role === 'admin')
            <div class="card border-black shadow">
                <div class="card-header"></div>
                <div class="card-body text-center">
                    <h3 class="fw-bold">-Foto-</h3>

                    <img src="{{ asset('assets/images/owner_profile.png') }}" class="border border-3 border-black rounded-4 mb-3" width="100" height="100">

                    <form action="{{ route('image.update') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="input-group">
                            <iconify-icon icon="fluent-color:image-32" class="input-group-text"></iconify-icon>
                            <input type="file" class="form-control" name="image" accept="image/jpeg, image/png" required>
                            <button type="submit" class="btn btn-success border-black focus-ring focus-ring-success">
                                <iconify-icon icon="streamline-ultimate-color:check"></iconify-icon>
                                ENVIAR
                            </button>
                        </div>
                        @error('image')
                            <div class="text-start">
                                <label class="animate__animated animate__shakeX bg-danger-subtle border border-black text-danger rounded px-1">
                                    <iconify-icon icon="mingcute:alert-line"></iconify-icon>
                                    {{ $message }}
                                </label>
                            </div>
                        @enderror
                        @if (session()->has('image_success'))
                            <div class="text-start">
                                <label class="bg-success-subtle border border-black text-success rounded px-1">
                                    <iconify-icon icon="streamline-ultimate-color:check"></iconify-icon>
                                    {{ session()->get('image_success') }}
                                </label>
                            </div>
                        @endif
                    </form>
                </div>
                <div class="card-footer"></div>
            </div>
        @endif

        <div class="card border-black shadow">
            <div class="card-header"></div>
            <div class="card-body">
                <h3 class="text-center fw-bold">-Dados Pessoais-</h3>

                <form action="{{ route('data.update') }}" method="post">
                    @csrf

                    <div class="d-grid gap-3">
                        <div>
                            <div class="input-group">
                                <label class="input-group-text gap-1">
                                    <iconify-icon icon="streamline-plump-color:user-pin"></iconify-icon>
                                    Usuário:
                                </label>
                                <input type="text" class="form-control" name="name" placeholder="Exemplo123Ab" value="{{ $data->name }}">
                            </div>
                            @error('name')
                                <div class="text-start">
                                    <label class="animate__animated animate__shakeX bg-danger-subtle border border-black text-danger rounded px-1">
                                        <iconify-icon icon="mingcute:alert-line"></iconify-icon>
                                        {{ $message }}
                                    </label>
                                </div>
                            @enderror
                        </div>
                        <div>
                            <div class="input-group">
                                <label class="input-group-text gap-1">
                                    <iconify-icon icon="streamline-cyber-color:email-2"></iconify-icon>
                                    Email:
                                </label>
                                <input type="email" class="form-control" name="email" placeholder="exemplo@gmail.com" value="{{ $data->email }}">
                            </div>
                            @error('email')
                                <div class="text-start">
                                    <label class="animate__animated animate__shakeX bg-danger-subtle border border-black text-danger rounded px-1">
                                        <iconify-icon icon="mingcute:alert-line"></iconify-icon>
                                        {{ $message }}
                                    </label>
                                </div>
                            @enderror
                        </div>
                        @can ('is_admin')
                            <div>
                                <div class="input-group">
                                    <label class="input-group-text gap-1">
                                        <iconify-icon icon="streamline-emojis:office-building"></iconify-icon>
                                        CNPJ:
                                    </label>
                                    <input type="text" class="form-control" name="cnpj" placeholder="exemplo@gmail.com" value="{{ $other_data->cnpj }}">
                                </div>
                                @error('cnpj')
                                    <div class="text-start">
                                        <label class="animate__animated animate__shakeX bg-danger-subtle border border-black text-danger rounded px-1">
                                            <iconify-icon icon="mingcute:alert-line"></iconify-icon>
                                            {{ $message }}
                                        </label>
                                    </div>
                                @enderror
                            </div>
                        @endcan
                    </div>
                    @error('data_error')
                        <div class="text-start">
                            <label class="animate__animated animate__shakeX bg-danger-subtle border border-black text-danger rounded px-1">
                                <iconify-icon icon="mingcute:alert-line"></iconify-icon>
                                {{ $message }}
                            </label>
                        </div>
                    @enderror
                    @if (session()->has('data_success'))
                        <div class="text-start mt-1">
                            <label class="bg-success-subtle border border-black text-success rounded px-1">
                                <iconify-icon icon="streamline-ultimate-color:check"></iconify-icon>
                                {{ session()->get('data_success') }}
                            </label>
                        </div>
                    @endif

                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-success border-black focus-ring focus-ring-success">
                            <iconify-icon icon="streamline-ultimate-color:check"></iconify-icon>
                            SALVAR
                        </button>
                    </div>
                </form>
            </div>
            <div class="card-footer"></div>
        </div>

        <div class="card border-black shadow">
            <div class="card-header"></div>
            <div class="card-body">
                <h3 class="text-center fw-bold">-Mudar Senha-</h3>

                @livewire('⚡form_password')
            </div>
            <div class="card-footer"></div>
        </div>

        @if ($data->role === 'admin')
            <div class="card border-black shadow">
                <div class="card-header"></div>
                <div class="card-body">
                    <h3 class="text-center fw-bold">-Contatos-</h3>

                    <form action="{{ route('contacts.update') }}" method="post">
                        @csrf

                        <div class="d-grid gap-3">
                            <div>
                                <div class="input-group">
                                    <label class="input-group-text gap-1">
                                        <iconify-icon icon="logos:whatsapp-icon"></iconify-icon>
                                        Whatsapp:
                                    </label>
                                    <input type="text" class="form-control" name="whatsapp" placeholder="(99) 99999-9999" value="{{ $other_data->whatsapp }}">
                                </div>
                                @error('whatsapp')
                                    <div class="text-start">
                                        <label class="animate__animated animate__shakeX bg-danger-subtle border border-black text-danger rounded px-1">
                                            <iconify-icon icon="mingcute:alert-line"></iconify-icon>
                                            {{ $message }}
                                        </label>
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <div class="input-group">
                                    <label class="input-group-text gap-1">
                                        <iconify-icon icon="streamline-plump-color:phone"></iconify-icon>
                                        Telefone:
                                    </label>
                                    <input type="text" class="form-control" name="phone" placeholder="(99) 99999-9999" value="{{ $other_data->phone }}">
                                </div>
                                @error('phone')
                                    <div class="text-start">
                                        <label class="animate__animated animate__shakeX bg-danger-subtle border border-black text-danger rounded px-1">
                                            <iconify-icon icon="mingcute:alert-line"></iconify-icon>
                                            {{ $message }}
                                        </label>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        @error('contacts_error')
                            <div class="text-start">
                                <label class="animate__animated animate__shakeX bg-danger-subtle border border-black text-danger rounded px-1">
                                    <iconify-icon icon="mingcute:alert-line"></iconify-icon>
                                    {{ $message }}
                                </label>
                            </div>
                        @enderror
                        @if (session()->has('contacts_success'))
                            <div class="text-start mt-1">
                                <label class="bg-success-subtle border border-black text-success rounded px-1">
                                    <iconify-icon icon="streamline-ultimate-color:check"></iconify-icon>
                                    {{ session()->get('contacts_success') }}
                                </label>
                            </div>
                        @endif

                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-success border-black focus-ring focus-ring-success">
                                <iconify-icon icon="streamline-ultimate-color:check"></iconify-icon>
                                SALVAR
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer"></div>
            </div>
        @endif
    </div>
</x-main-layout>