<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-etec-red leading-tight">
            Vestibulinho Etec Zona Leste
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-5xl mx-auto space-y-8">
            <div class="bg-white dark:bg-gray-800 p-6 rounded shadow">
                <h3 class="text-xl font-bold text-red-700">O que é o Vestibulinho?</h3>
                <p>Processo seletivo para ingresso nos cursos técnicos da nossa escola. Uma oportunidade de dar o primeiro passo rumo ao futuro profissional.</p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-6 rounded shadow">
                <h3 class="text-xl font-bold text-red-700">Datas Importantes</h3>
                <ul class="list-disc list-inside space-y-1">
                    <li><strong>Inscrição:</strong> 01/09 a 30/09</li>
                    <li><strong>Prova:</strong> 15/10</li>
                    <li><strong>Resultado:</strong> 01/11</li>
                </ul>
            </div>

            <div class="bg-white dark:bg-gray-800 p-6 rounded shadow">
                <h3 class="text-xl font-bold text-red-700">Como se inscrever?</h3>
                <p>Acesse o site oficial: <a href="https://www.vestibulinhoetec.com.br" target="_blank" class="text-blue-600 underline">www.vestibulinhoetec.com.br</a> e siga as instruções de inscrição.</p>
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
