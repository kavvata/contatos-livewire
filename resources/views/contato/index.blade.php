<x-app-layout>
    <!-- It is never too late to be what you might have been. - George Eliot -->

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contatos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white flex flex-col dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($contatos as $contato)
                    <div>
                        <a href="" class="text-gray-900 dark:text-gray-100">
                            {{ $contato->nome }}
                            {{ $contato->telefone }}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
