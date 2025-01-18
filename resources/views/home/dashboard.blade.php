<x-layout title="{{ env('APP_NAME') }}">
    <x-slot name="header">
        <x-header :title="'Bem vindo de volta, Ryan Oliveira'">
            {{-- qualquer outro conteudo pode ser passado aqui --}}
        </x-header>
    </x-slot>

    <x-slot name="main">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-lg p-4 min-w-[200px]">
                <div class="flex justify-center mb-4">
                    <i class="fa fa-cogs text-4xl text-blue-500"></i>
                </div>
                <h3 class="text-xl font-semibold text-center mb-2">Card Title 1</h3>
                <p class="text-sm text-gray-600 text-center">Descrição do card 1, aqui você pode colocar um texto
                    explicativo sobre o conteúdo do card.</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-lg p-4 min-w-[200px]">
                <div class="flex justify-center mb-4">
                    <i class="fa fa-chart-line text-4xl text-green-500"></i>
                </div>
                <h3 class="text-xl font-semibold text-center mb-2">Card Title 2</h3>
                <p class="text-sm text-gray-600 text-center">Descrição do card 2, aqui você pode colocar um texto
                    explicativo sobre o conteúdo do card.</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow-lg p-4 min-w-[200px]">
                <div class="flex justify-center mb-4">
                    <i class="fa fa-users text-4xl text-red-500"></i>
                </div>
                <h3 class="text-xl font-semibold text-center mb-2">Card Title 3</h3>
                <p class="text-sm text-gray-600 text-center">Descrição do card 3, aqui você pode colocar um texto
                    explicativo sobre o conteúdo do card.</p>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-lg shadow-lg p-4 min-w-[200px]">
                <div class="flex justify-center mb-4">
                    <i class="fa fa-bell text-4xl text-yellow-500"></i>
                </div>
                <h3 class="text-xl font-semibold text-center mb-2">Card Title 4</h3>
                <p class="text-sm text-gray-600 text-center">Descrição do card 4, aqui você pode colocar um texto
                    explicativo sobre o conteúdo do card.</p>
            </div>

            <!-- Card 5 -->
            <div class="bg-white rounded-lg shadow-lg p-4 min-w-[200px]">
                <div class="flex justify-center mb-4">
                    <i class="fa fa-heart text-4xl text-pink-500"></i>
                </div>
                <h3 class="text-xl font-semibold text-center mb-2">Card Title 5</h3>
                <p class="text-sm text-gray-600 text-center">Descrição do card 5, aqui você pode colocar um texto
                    explicativo sobre o conteúdo do card.</p>
            </div>

            <!-- Card 6 -->
            <div class="bg-white rounded-lg shadow-lg p-4 min-w-[200px]">
                <div class="flex justify-center mb-4">
                    <i class="fa fa-rocket text-4xl text-purple-500"></i>
                </div>
                <h3 class="text-xl font-semibold text-center mb-2">Card Title 6</h3>
                <p class="text-sm text-gray-600 text-center">Descrição do card 6, aqui você pode colocar um texto
                    explicativo sobre o conteúdo do card.</p>
            </div>

        </div>
    </x-slot>
</x-layout>
