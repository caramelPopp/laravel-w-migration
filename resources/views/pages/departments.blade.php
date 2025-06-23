<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-etec-red leading-tight">
            Departamentos da Etec Zona Leste
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-4xl mx-auto space-y-6">
            <div class="p-6 bg-white dark:bg-gray-800 rounded shadow">
                <h3 class="text-xl font-bold text-red-700">Diretoria</h3>
                <p>Responsável pela administração geral da escola e pela definição de diretrizes educacionais.</p>
            </div>

            <div class="p-6 bg-white dark:bg-gray-800 rounded shadow">
                <h3 class="text-xl font-bold text-red-700">Coordenação Pedagógica</h3>
                <p>Suporte a alunos e professores para melhorar a qualidade do ensino.</p>
            </div>

            <div class="p-6 bg-white dark:bg-gray-800 rounded shadow">
                <h3 class="text-xl font-bold text-red-700">Secretaria Acadêmica</h3>
                <p>Atendimento ao aluno para documentos, matrículas e histórico escolar.</p>
            </div>

            <div class="p-6 bg-white dark:bg-gray-800 rounded shadow">
                <h3 class="text-xl font-bold text-red-700">Serviços de Apoio</h3>
                <p>Orientação educacional, apoio psicopedagógico e a Associação de Pais e Mestres (APM).</p>
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
