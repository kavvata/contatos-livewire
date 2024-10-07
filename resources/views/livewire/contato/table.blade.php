<div
    class="flex flex-col overflow-hidden bg-white gap-6 p-6 text-gray-800 shadow-sm sm:rounded-lg dark:bg-gray-800 dark:text-gray-200">
    {{-- The whole world belongs to you. --}}
    <div class="flex justify-between align-center">
        <div>
            <input class="dark:bg-slate-900 border border-slate-600 sm:rounded-lg h-8" placeholder="Procure um nome..."
                type="text" wire:model.live.debounce.300ms="filtro">
        </div>
        <a class="align-center sm:rounded-md bg-green-600 hover:bg-green-700 px-2 " href="{{ route('contato.create') }}">
            Novo Contato
        </a>
    </div>
    <table class="table-fixed w-full">
        <tr class="border border-slate-600">
            <th class="border border-slate-600">
                <button class="w-full hover:underline" wire:click="sort('nome')">Nome</button>
            </th>
            <th class="border border-slate-600 ">
                <button class="w-full hover:underline" wire:click="sort('telefone')">Telefone</button>
            </th>
            <th class="border border-slate-600">Acoes</th>
        </tr>
        @foreach ($contatos as $contato)
            <tr class ="border border-slate-600 dark:hover:bg-gray-900">
                <td class="text-center border border-slate-600"> {{ $contato->nome }} </td>
                <td class="text-center border border-slate-600"> {{ $contato->telefone }} </td>
                <td class="text-center border border-slate-600">
                    <a class="sm:rounded-md bg-slate-600 hover:bg-blue-400 px-2 "
                        href="{{ route('contato.edit', $contato) }}">Editar</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
