<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <?php /* array $linha tem campo nome para o nome de usuario e campo contatos para contagem de contatos vinculados */ ?>
                    @foreach ($userContatos as $linha)
                        <p>{{ $linha['nome'] }} - {{ $linha['contatos'] }} Contatos Cadastrados</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
