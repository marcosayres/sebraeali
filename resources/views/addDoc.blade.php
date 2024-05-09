<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="text-2xl text-gray-900 font-semibold mb-6">Cadastro de Documentos</h2>
            <form action="{{ route('doc.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="titulo" class="block text-blue-900 font-medium mb-2">Título do Documento</label>
                    <input type="text" id="titulo" name="titulo" class="w-full px-4 py-2 rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="autores" class="block text-blue-900 font-medium mb-2">Autor(es)</label>
                    <input type="text" id="autores" name="autores" class="w-full px-4 py-2 rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="resumo" class="block text-gray-700 font-medium mb-2">Resumo</label>
                    <textarea id="resumo" name="resumo" class="w-full px-4 py-2 rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"></textarea>
                </div>
                <div class="mb-4">
                    <label for="palavras_chave" class="block text-blue-900 font-medium mb-2">Palavras-chave</label>
                    <input type="text" id="palavras_chave" name="palavras_chave" class="w-full px-4 py-2 rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="data_publicacao" class="block text-blue-900 font-medium mb-2">Data de Publicação</label>
                    <input type="date" id="data_publicacao" name="data_publicacao" class="w-full px-4 py-2 rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="formato_documento" class="block text-blue-900 font-medium mb-2">Formato do Documento</label>
                    <select id="formato_documento" name="formato_documento" class="w-full px-4 py-2 rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                        <option value="pdf">PDF</option>
                        <option value="docx">DOCX</option>
                        <option value="epub">ePUB</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="categoria" class="block text-blue-900 font-medium mb-2">Categoria ou Área Temática</label>
                    <input type="text" id="categoria" name="categoria" class="w-full px-4 py-2 rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="capa" class="block text-blue-900 font-medium mb-2">Capa do Documento</label>
                    <input type="file" id="capa" name="capa" accept="image/*" class="w-full px-4 py-2 rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="pdf" class="block text-blue-900 font-medium mb-2">PDF do Documento</label>
                    <input type="file" id="pdf" name="pdf" accept=".pdf" class="w-full px-4 py-2 rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div class="">
                    <button type="button" class="py-2 px-4 rounded-md hover:bg-gray-500 transition duration-200">Cancelar</button>
                    <button type="submit" class="py-2 px-4 rounded-md hover:bg-blue-600 transition duration-200">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>