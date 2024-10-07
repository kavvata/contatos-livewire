<x-app-layout>
    <!-- It is never too late to be what you might have been. - George Eliot -->

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Contatos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 ">
            <div
                class="flex flex-col overflow-hidden bg-white gap-6 p-6 text-gray-800 shadow-sm sm:rounded-lg dark:bg-gray-800 dark:text-gray-200">
                <div class="flex justify-end align-center w-full">
                    <a class="sm:rounded-md bg-green-600 hover:bg-green-700 px-2 "
                        href="{{ route('contato.create') }}">Novo Contato</a>
                </div>
                <livewire:contato.table :listaContato="$contatos" />
            </div>
        </div>
    </div>
</x-app-layout>
