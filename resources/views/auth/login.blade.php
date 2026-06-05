<x-main_layout :pageTitle="'Login'">
    <h1 class="text-center fw-bold mb-5">Login</h1>
    
    <form action="{{ route('login') }}" method="post" class="card d-grid gap-3 border border-black bg-warning shadow p-3">
        @csrf
        
        @livewire('⚡form_login')
    </form>
</x-main_layout>