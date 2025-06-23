<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-etec-red leading-tight">
            Nossos Cursos
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Curso 1 -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition">
                <h3 class="text-xl font-bold mb-2 text-red-700">Desenvolvimento de Sistemas</h3>
                <p>Aprenda lógica de programação, manutenção de banco de dados, segurança de sistemas, desenvolvimento de software para web, desktop e mobile e a construção de circuitos físicos, como redes de computadores.</p>
            </div>

            <!-- Curso 2 -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition">
                <h3 class="text-xl font-bold mb-2 text-red-700">Administração</h3>
                <p>Descubra como gerir, marketear, cuidar de suas finanças e empreender com foco nas necessidades do mercado atual e nas exigências de seu negócio.</p>
            </div>

            <!-- Curso 3 -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition">
                <h3 class="text-xl font-bold mb-2 text-red-700">Recursos Humanos</h3>
                <p>Aprenda a realizar a contratação, demissão e aposentadoria de funcionários e oferta de benefícios, compreenda a legislação trabalhista, obtenha noções básicas de psicologia, e ainda, descubra como realizar processos de seleção e recrutamento de novos funcionários.</p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition">
                <h3 class="text-xl font-bold mb-2 text-red-700">Logística</h3>
                <p>Domine processos de distribuição, armazenamento e transporte de mercadorias, além de entender os processos de compra de matérias-primas, a movimentação de estoque e a escolha das melhores rotas de transporte.</p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition">
                <h3 class="text-xl font-bold mb-2 text-red-700">Contabilidade</h3>
                <p>Obtenha uma formação completa que combina conhecimentos técnicos, habilidades tecnológicas e uma compreensão profunda das leis e regulamentos contábeis, se preparando para desafios e para contribuir efetivamente para o sucesso das organizações em que atua.</p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition">
                <h3 class="text-xl font-bold mb-2 text-red-700">Finanças</h3>
                <p>Aprenda a analisar operações financeiras, como empréstimos e aplicações, a apurar resultados e verificar as possibilidades de um negócio ser bem-sucedido, a compreender as leis que regulam o funcionamento das empresas e a elaborar documentos como notas fiscais, orçamento e recibos de pagamento.</p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition">
                <h3 class="text-xl font-bold mb-2 text-red-700">Serviços Jurídicos</h3>
                <p>Domine as leis e normas que regem as diferentes esferas da sociedade e das relações comerciais, como o direito constitucional, que explora a estrutura e os princípios fundamentais da Constituição Federal; o Direito Penal, compreendendo as penalidades para crimes e transgressões legais; e o Direito Civil, que abrange as normas para relações interpessoais e questões familiares.</p>
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
