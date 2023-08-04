<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nome -->
        <div>
            <x-input-label for="Nome" :value="__('Nome')" />
            <x-text-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required autofocus autocomplete="nome" />
            <x-input-error :messages="$errors->get('nome')" class="mt-2" />
        </div>

        <!-- Endereço -->
        <div class="mt-4">
            <x-input-label for="Endereço" :value="__('Endereço')" />
            <x-text-input id="endereco" class="block mt-1 w-full" type="text" name="endereco" :value="old('endereco')" required autocomplete="endereco" />
            <x-input-error :messages="$errors->get('endereco')" class="mt-2" />
        </div>

        <!-- Bairro -->
        <div class="mt-4">
            <x-input-label for="Bairro" :value="__('Bairro')" />
            <x-text-input id="bairro" class="block mt-1 w-full" type="text" name="bairro" :value="old('bairro')" required autocomplete="bairro" />
            <x-input-error :messages="$errors->get('bairro')" class="mt-2" />
        </div>

        <!-- CEP -->
        <div class="mt-4">
            <x-input-label for="CEP" :value="__('CEP')" />
            <x-text-input id="cep" class="block mt-1 w-full" type="text" name="cep" :value="old('cep')" required autocomplete="cep" />
            <x-input-error :messages="$errors->get('cep')" class="mt-2" />
        </div>

        <!-- Cidade -->
        <div class="mt-4">
            <x-input-label for="Cidade" :value="__('Cidade')" />
            <x-text-input id="cidade" class="block mt-1 w-full" type="text" name="cidade" :value="old('cidade')" required autocomplete="cidade" />
            <x-input-error :messages="$errors->get('cidade')" class="mt-2" />
        </div>

        <!-- Estado -->
        <div class="mt-4">
            <x-input-label for="Estado" :value="__('Estado')" />
            <x-text-input id="estado" class="block mt-1 w-full" type="text" name="estado" :value="old('estado')" required autocomplete="estado" />
            <x-input-error :messages="$errors->get('estado')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Já está está registrado?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Registrar-se') }}
            </x-primary-button>
        </div>
    </form>
    <br>
</x-guest-layout>
<br>
