<x-main_layout :pageTitle="'Cadastro'">
    <h1 class="text-center fw-bold mb-5">Cadastro</h1>
    
    <form action="{{ route('register') }}" method="post" class="card d-grid gap-3 border border-black bg-warning shadow p-3">
        @csrf
        
        @livewire('⚡form_register')
    </form>
</x-main_layout>