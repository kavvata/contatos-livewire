<x-app-layout>
    <!-- It is never too late to be what you might have been. - George Eliot -->

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Editar Contato') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 ">
            <form method="POST" action="{{ route('contato.update', $contato) }}"
                class="flex-col overflow-hidden bg-white p-6 gap-6 text-gray-800 shadow-sm sm:rounded-lg dark:bg-gray-800 dark:text-gray-200">

                @csrf
                @method('PUT')

                <div class="flex items-center">
                    <div
                        class="form-input border-0  bg-white text-gray-800 sm:rounded-lg dark:bg-gray-800 dark:text-gray-200">
                        <label for="nome">Nome:</label>
                        <input class="sm:rounded-lg dark:bg-gray-900" type="text" name="nome"
                            value="{{ $contato->nome }}">
                    </div>
                    <div
                        class="form-input border-0  bg-white text-gray-800 sm:rounded-lg dark:bg-gray-800 dark:text-gray-200">
                        <label for="telefone">Telefone:</label>
                        <input class="sm:rounded-lg dark:bg-gray-900" type="text" name="telefone"
                            value="{{ $contato->telefone }}">
                    </div>
                </div>
                <div class="justify-center">
                    @if ($errors->any())
                        <div class="alert alert-danger text-red-600 font-bold">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <a class="sm:rounded-lg bg-slate-600 border-gray-200  text-gray-200 px-2 "
                        href="{{ route('contato.index') }}">Voltar</a>

                    <button type="submit"
                        class="sm:rounded-lg bg-green-600 border-gray-200  text-gray-200 px-2">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
