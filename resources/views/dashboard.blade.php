<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Sistema de abas -->
                    <div class="border-b border-gray-200 mb-6">
                        <nav class="flex space-x-4" aria-label="Tabs">
                            <button
                                class="tab-link text-gray-500 px-3 py-2 rounded-md text-sm font-medium hover:text-gray-700 hover:bg-gray-100"
                                data-tab="empresa">
                                Empresa XPTO
                            </button>
                            <button
                                class="tab-link text-gray-500 px-3 py-2 rounded-md text-sm font-medium hover:text-gray-700 hover:bg-gray-100"
                                data-tab="contratos">
                                Contratos
                            </button>
                            <button
                                class="tab-link text-gray-500 px-3 py-2 rounded-md text-sm font-medium hover:text-gray-700 hover:bg-gray-100"
                                data-tab="enviar-convites">
                                Enviar Convites
                            </button>
                        </nav>
                    </div>
                    <!-- Conteúdo das abas -->
                    <div id="empresa" class="tab-content">
                        <h1 class="text-2xl font-bold mb-4">Empresa XPTO</h1>
                        <p class="text-gray-600 mb-6">Formulários enviados por e-mail</p>
                        <!-- Resumo dos formulários -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                            <div
                                class="bg-red-100 p-6 rounded-lg text-center shadow-md hover:shadow-lg transition border border-red-300">
                                <div class="flex items-center justify-center mb-2 text-red-500">
                                    <i class="fas fa-paper-plane text-3xl"></i>
                                </div>
                                <p class="text-4xl font-bold text-red-700">3</p>
                                <p class="text-sm text-red-600 mt-2">Enviados, Aguardando preencher</p>
                            </div>
                            <div
                                class="bg-yellow-100 p-6 rounded-lg text-center shadow-md hover:shadow-lg transition border border-yellow-300">
                                <div class="flex items-center justify-center mb-2 text-yellow-500">
                                    <i class="fas fa-hourglass-half text-3xl"></i>
                                </div>
                                <p class="text-4xl font-bold text-yellow-700">4</p>
                                <p class="text-sm text-yellow-600 mt-2">Aguardando aprovação RH</p>
                            </div>
                            <div
                                class="bg-green-100 p-6 rounded-lg text-center shadow-md hover:shadow-lg transition border border-green-300">
                                <div class="flex items-center justify-center mb-2 text-green-500">
                                    <i class="fas fa-check-circle text-3xl"></i>
                                </div>
                                <p class="text-4xl font-bold text-green-700">30</p>
                                <p class="text-sm text-green-600 mt-2">Concluídos</p>
                            </div>
                        </div>
                    </div>
                    <div id="contratos" class="tab-content hidden">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Contratos habilitados para envio</h2>
                        <ul class="space-y-4">
                            <li class="flex items-center p-4 border border-gray-200 rounded-lg shadow-md hover:bg-gray-50 transition duration-300">
                                <span
                                    class="flex-shrink-0 w-6 h-6 bg-gray-500 text-white rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text-gray-700 font-medium">9223 - Contrato UNIFLEX 50% Copart</span>
                            </li>
                            <li class="flex items-center p-4 border border-gray-200 rounded-lg shadow-md hover:bg-gray-50 transition duration-300">
                                <span
                                    class="flex-shrink-0 w-6 h-6 bg-gray-500 text-white rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text-gray-700 font-medium">9123 - Contrato ESTADUAL 50% Copart</span>
                            </li>
                            <li class="flex items-center p-4 border border-gray-200 rounded-lg shadow-md hover:bg-gray-50 transition duration-300">
                                <span
                                    class="flex-shrink-0 w-6 h-6 bg-gray-500 text-white rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text-gray-700 font-medium">9329 - Contrato NACIONAL 50% Copart</span>
                            </li>
                        </ul>
                    </div>
                    <div id="enviar-convites" class="tab-content hidden">
                        <h2 class="text-3xl font-semibold text-gray-800 mb-6">Enviar convites</h2>
                        <p class="text-gray-600 mb-6">Informe o e-mail, selecione o contrato e clique em enviar</p>
                        <form>
                            <!-- E-mail -->
                            <div class="mb-6">
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">E-mail</label>
                                <input type="email" id="email" name="email"
                                       class="block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 transition duration-200"
                                       placeholder="email@email.com.br" required>
                            </div>
                            <!-- Contrato -->
                            <div class="mb-6">
                                <label for="contract" class="block text-sm font-medium text-gray-700 mb-2">Contrato</label>
                                <select id="contract" name="contract"
                                        class="block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 transition duration-200">
                                    <option>9123 - Contrato ESTADUAL 50% Copart</option>
                                    <option>9223 - Contrato UNIFLEX 50% Copart</option>
                                    <option>9329 - Contrato NACIONAL 50% Copart</option>
                                </select>
                            </div>
                            <!-- Botão -->
                            <button type="submit"
                                    class="w-full bg-green-600 text-white py-3 rounded-lg shadow-md hover:bg-green-700 transition duration-300 focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">
                                Enviar convite para preencher formulário
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts para Tabs -->
    <script>
        document.querySelectorAll('.tab-link').forEach((button) => {
            button.addEventListener('click', () => {
                const tabId = button.getAttribute('data-tab');
                // Ocultar todas as abas
                document.querySelectorAll('.tab-content').forEach((content) => content.classList.add('hidden'));
                // Mostrar a aba correspondente
                document.getElementById(tabId).classList.remove('hidden');
                // Atualizar estilo dos botões
                document.querySelectorAll('.tab-link').forEach((btn) => btn.classList.remove('text-gray-900', 'bg-gray-200'));
                button.classList.add('text-gray-900', 'bg-gray-200');
            });
        });
    </script>
</x-app-layout>
