<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-etec-red leading-tight">
            Bem-vindo à Etec Zona Leste
        </h2>
    </x-slot>

    <div class="py-12 bg-etec-gray-light min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Mensagem de boas-vindas -->
            <div class="mb-8 bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-bold text-etec-red mb-2">Olá, {{ Auth::user()->name }}!</h3>
                <p class="text-etec-gray-dark">
                    Seja bem-vindo ao portal da <b>Etec Zona Leste</b>. Aqui você encontrará informações sobre nossos cursos, departamentos e formas de contato.
                </p>
            </div>

            <!-- Cards de Navegação -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Card Cursos -->
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <h4 class="text-lg font-semibold text-etec-red mb-2">Nossos Cursos</h4>
                    <p class="text-etec-gray-dark mb-4">Conheça todos os cursos técnicos oferecidos por nossa unidade.</p>
                    <a href="{{ route('courses') }}" class="inline-block bg-etec-red text-white px-4 py-2 rounded hover:bg-red-700">
                        Ver Cursos
                    </a>
                </div>

                <!-- Card Departamentos -->
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <h4 class="text-lg font-semibold text-etec-red mb-2">Departamentos</h4>
                    <p class="text-etec-gray-dark mb-4">Veja os setores e coordenações que fazem parte da Etec Zona Leste.</p>
                    <a href="{{ route('departments') }}" class="inline-block bg-etec-red text-white px-4 py-2 rounded hover:bg-red-700">
                        Ver Departamentos
                    </a>
                </div>

                <!-- Card Vestibulinho -->
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <h4 class="text-lg font-semibold text-etec-red mb-2">Vestibulinho</h4>
                    <p class="text-etec-gray-dark mb-4">Informações sobre o processo seletivo para novos alunos.</p>
                    <a href="https://www.vestibulinhoetec.com.br/home/" target="_blank"
                       class="inline-block bg-etec-red text-white px-4 py-2 rounded hover:bg-red-700">
                        Acessar Vestibulinho
                    </a>
                </div>

                <!-- Card Contato -->
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <h4 class="text-lg font-semibold text-etec-red mb-2">Fale Conosco</h4>
                    <p class="text-etec-gray-dark mb-4">Precisa de ajuda? Entre em contato com a nossa equipe.</p>
                    <a href="{{ route('contact') }}" class="inline-block bg-etec-red text-white px-4 py-2 rounded hover:bg-red-700">
                        Ir para Contato
                    </a>
                </div>

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
