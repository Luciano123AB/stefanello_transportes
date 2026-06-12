<x-main-layout :pageTitle="'Meus Arquivos'">
    <form action="{{ route('file.upload') }}" method="post" class="mb-1" enctype="multipart/form-data">
        @csrf

        <div class="input-group">
            <iconify-icon icon="fluent-color:image-32" class="input-group-text border-black"></iconify-icon>
            <input type="file" class="form-control border-black" name="file" accept="image/jpeg, image/png" required>
            <button type="submit" class="btn btn-success border-black focus-ring focus-ring-success">
                <iconify-icon icon="streamline-ultimate-color:check"></iconify-icon>
                ENVIAR
            </button>
        </div>
        @error('file')
            <div class="text-start">
                <label class="animate__animated animate__shakeX bg-danger-subtle border border-black text-danger rounded px-1">
                    <iconify-icon icon="mingcute:alert-line"></iconify-icon>
                    {{ $message }}
                </label>
            </div>
        @enderror
    </form>

    <div class="bg-light border border-black overflow-auto">
        <table class="table table-hover shadow">
            <thead>
                <tr class="text-center">
                    <th id="column_preview" class="border-end">Preview</th>
                    <th class="border-end">Nome</th>
                    <th id="column_size" class="border-end">Tamanho</th>
                    <th id="column_date" class="border-end">Data/Hora</th>
                    <th id="column_options"></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($files as $file)
                    <tr class="align-middle">
                        <td class="border-end"><img src="{{ asset('assets/images/documents/' . $file['name']) }}" class="img-fluid border border-black" width="100%"></td>
                        <td class="border-end">{{ $file['name'] }}</td>
                        <td class="border-end text-center">{{ $file['size'] }}</td>
                        <td class="border-end text-center">{{ $file['last_modified'] }}</td>
                        <td class="text-center">
                            <div class="d-flex gap-1 justify-content-center">
                                <a href="{{ route('file.download', $file['name']) }}" class="btn btn-sm btn-success border-black focus-ring focus-ring-success">
                                    <iconify-icon icon="streamline-cyber-color:download-2" class="animate__animated animate__fadeOutDown animate__infinite"></iconify-icon>
                                    Download
                                </a>
                                <a href="{{ route('file.view', $file['name']) }}" class="btn btn-sm btn-primary border-black focus-ring focus-ring-primary">
                                    <iconify-icon icon="flat-color-icons:document" class="animate__animated animate__heartBeat animate__infinite"></iconify-icon>
                                    View
                                </a>
                                <form action='{{ route('file.delete', $file['name']) }}' method='post'>
                                    @csrf
                                    @method('DELETE')

                                    <button type='submit' class='btn btn-sm btn-danger border-black focus-ring focus-ring-danger'>
                                        <iconify-icon icon='streamline-sharp-color:delete-pdf' class='animate__animated animate__bounceOut animate__infinite'></iconify-icon>
                                        Deletar
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr class="text-center">
                        <td class="border-end" colspan="5">NENHUM ARQUIVO ENCONTRADO</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-main-layout>