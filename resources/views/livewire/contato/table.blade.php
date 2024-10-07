<table class="table-auto w-full">
    {{-- The whole world belongs to you. --}}
    <tr class="border border-slate-600">
        <th wire:click="sort('nome')" class="border border-slate-600">Nome</th>
        <th wire:click="sort('telefone')" class="border border-slate-600">Telefone</th>
        <th class="border border-slate-600">Acoes</th>
    </tr>
    @foreach ($listaContato as $contato)
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
