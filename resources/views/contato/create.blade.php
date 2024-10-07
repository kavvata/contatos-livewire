<x-app-layout>
    <!-- It is never too late to be what you might have been. - George Eliot -->

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Novo Contato') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 ">
            <form method="POST" action="{{ route('contato.store') }}"
                class="flex-col gap-6 overflow-hidden bg-white p-6 text-gray-800 shadow-sm sm:rounded-lg dark:bg-gray-800 dark:text-gray-200">

                @csrf
                @method('POST')

                <div class="flex items-center">
                    <div
                        class="form-input border-0  bg-white text-gray-800 sm:rounded-lg dark:bg-gray-800 dark:text-gray-200">
                        <label for="nome">Nome:</label>
                        <input class="sm:rounded-lg dark:bg-gray-900" type="text" name="nome">
                    </div>
                    <div
                        class="form-input border-0  bg-white text-gray-800 sm:rounded-lg dark:bg-gray-800 dark:text-gray-200">
                        <label for="telefone">Telefone:</label>
                        <input class="sm:rounded-lg dark:bg-gray-900" type="text" name="telefone">
                    </div>
                </div>
                <div class="justify-center">
                    @if ($errors->any())
                        <div class="alert alert-danger font-bold text-red-600">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <a class="border-gray-200 bg-slate-600 px-2  text-gray-200 sm:rounded-lg "
                        href="{{ route('contato.index') }}">Voltar</a>

                    <button type="submit"
                        class="border-gray-200 bg-green-600 px-2  text-gray-200 sm:rounded-lg">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
