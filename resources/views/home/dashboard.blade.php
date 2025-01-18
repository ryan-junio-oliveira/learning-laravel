<x-layout title="{{ env('APP_NAME') }}">
    <x-slot name="header">
        <x-header :title="'Bem vindo de volta, Ryan Oliveira'">
            {{-- qualquer outro conteudo pode ser passado aqui --}}
        </x-header>
    </x-slot>

    <x-slot name="main">

        <section class="bg-white bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')]">
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">

                <h1
                    class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">
                    O que voçê está procurando hoje?</h1>

                <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">Here at Flowbite we focus
                    on markets where technology, innovation, and capital can unlock long-term value and drive economic
                    growth.</p>

                <form class="w-full max-w-md mx-auto">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                    <div class="relative">

                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-6 h-6 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>

                        <input type="search" id="default-search"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Search..." required />
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
                    </div>
                </form>

            </div>
            <div class="bg-gradient-to-b from-blue-50 to-transparent w-full h-full absolute top-0 left-0 z-0"></div>
        </section>

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
