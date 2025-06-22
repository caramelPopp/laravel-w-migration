<x-guest-layout>
    <div class="mb-4 text-sm text-etec-red">
        {{ __('Agradecemos pela sua inscrição! Antes de prosseguir, por favor, verifique seu endereço de email para obter um link de verificação.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ __('Um novo link de verificação foi enviado para o seu endereço de email.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Reenviar Email de Verificação') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm bg-etec-red text-white hover:bg-red-700 transition">
                {{ __('Sair da Conta') }}
            </button>
        </form>
    </div>
</x-guest-layout>
