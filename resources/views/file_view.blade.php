<x-main-layout :pageTitle="'Visualizar'">
    <div class="bg-light border border-black">
        @if ($type !== 'application/pdf')
            <img src="{{ asset('assets/images/documents/' . $name) }}" id="file_view" class="img-fluid shadow" width="100%">
        @else
            <iframe src="{{ asset('assets/images/documents/' . $name) }}" id="file_view" class="img-fluid shadow" width="100%"></iframe>
        @endif
    </div>
</x-main-layout>