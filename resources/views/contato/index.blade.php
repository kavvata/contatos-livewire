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
                class="flex overflow-hidden bg-white p-6 text-gray-800 shadow-sm sm:rounded-lg dark:bg-gray-800 dark:text-gray-200">
                <table class="table-auto w-full">
                    <tr class="border border-slate-600">
                        <th class="border border-slate-600">Nome</th>
                        <th class="border border-slate-600">Telefone</th>
                        <th class="border border-slate-600">Acoes</th>
                    </tr>
                    @foreach ($contatos as $contato)
                        <tr class ="border border-slate-600 dark:hover:bg-gray-900">
                            <td class="text-center border border-slate-600"> {{ $contato->nome }} </td>
                            <td class="text-center border border-slate-600"> {{ $contato->telefone }} </td>
                            <td class="text-center border border-slate-600"> <a
                                    class="sm:rounded-md bg-slate-600 hover:bg-blue-400 px-2 "
                                    href="{{ route('contato.edit', $contato) }}">Editar</a> </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
