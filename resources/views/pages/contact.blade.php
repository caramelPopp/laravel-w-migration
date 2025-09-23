<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-etec-red leading-tight">
            Fale Conosco
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Informações de contato -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded shadow space-y-4">
                <h3 class="text-xl font-bold text-red-700">Endereço</h3>
                <p>Av. Águia de Haia, 2983 – Cidade A. E. Carvalho – São Paulo/SP</p>

                <h3 class="text-xl font-bold text-red-700">Telefone</h3>
                <p>
                    (11) 2045-4000 
                    <br>(11) 2045-4016
                    <br>(11) 3471-4071
                    <br> 0800-772 2829</p>

                <h3 class="text-xl font-bold text-red-700">Email</h3>
                <p>e003104a@educacao.sp.gov.br
                    <br>info@vestibulinhoetec.com.br 
                </p>
            </div>

            <!-- Formulário de contato -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded shadow">
                <form action="{{ route('contact.send') }}" method="GET">
                    <div class="mb-4">
                        <label for="nome" class="block text-gray-700 dark:text-gray-300">Nome</label>
                        <input type="text" name="nome" id="nome" class="w-full mt-1 p-2 border rounded" placeholder="Seu nome">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 dark:text-gray-300">Email</label>
                        <input type="email" name="email" id="email" class="w-full mt-1 p-2 border rounded" placeholder="seu@email.com">
                    </div>

                    <div class="mb-4">
                        <label for="assunto" class="block text-gray-700 dark:text-gray-300">Assunto</label>
                        <input type="text" name="assunto" id="assunto" class="w-full mt-1 p-2 border rounded" placeholder="Assunto da mensagem">
                    </div>

                    <div class="mb-4">
                        <label for="mensagem" class="block text-gray-700 dark:text-gray-300">Mensagem</label>
                        <textarea name="mensagem" id="mensagem" class="w-full mt-1 p-2 border rounded" rows="4" placeholder="Escreva sua mensagem..."></textarea>
                    </div>

                    <button type="submit" class="inline-block bg-etec-red text-white px-4 py-2 rounded hover:bg-red-700">Enviar Mensagem</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-[#750F0B] text-white py-6 mt-12">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center text-sm">
            <div class="mb-4 md:mb-0">
                <strong>Etec da Zona Leste</strong> – Centro Paula Souza<br>
                Av. Águia de Haia, 2983 – Cidade A. E. Carvalho – São Paulo/SP
            </div>
            <div>
                &copy; {{ date('Y') }} Todos os direitos reservados.
            </div>
        </div>
    </footer>
</x-app-layout>
