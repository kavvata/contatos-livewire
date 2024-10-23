<div
    class="flex flex-col gap-6 overflow-hidden bg-white p-6 text-gray-800 shadow-sm sm:rounded-lg dark:bg-gray-800 dark:text-gray-200">
    {{-- The whole world belongs to you. --}}
    <div class="h-10 align-center flex justify-between">
        <div>
            <input class="border h-full border-slate-600 sm:rounded-lg dark:bg-slate-900" placeholder="Procure um nome..."
                type="text" wire:model.live.debounce.300ms="filtro">
        </div>
        <a class=" bg-green-600 px-2 py-2 hover:bg-green-900 sm:rounded-md " href="{{ route('contato.create') }}">
            Novo Contato
        </a>
    </div>
    <table class="w-full table-fixed">
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
                <td class="border border-slate-600 py-2 text-center"> {{ $contato->nome }} </td>
                <td class="border border-slate-600 py-2 text-center"> {{ $contato->telefone }} </td>
                <td class="flex flex-row justify-center py-2 gap-2">

                    <a class="bg-slate-600 px-2 hover:bg-blue-400 sm:rounded-md"
                        href="{{ route('contato.edit', $contato) }}">Editar</a>

                    <form method="POST" action="{{ route('contato.destroy', $contato) }}">
                        @method('DELETE')
                        @csrf
                        <button class="bg-red-600 px-2 hover:bg-red-900 sm:rounded-md " type="">Remover</button>
                    </form>

                </td>
            </tr>
        @endforeach
    </table>
</div>
