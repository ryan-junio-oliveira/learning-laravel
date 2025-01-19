<nav id="sidebar"
    class="w-64 h-full max-h-screen top-32 md:top-16 bg-dark-gray text-custom-white z-40 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out fixed overflow-y-auto">
    <div class="flex justify-end p-4">
        <!-- Close button (X) -->
        <button id="close-sidebar" class="md:hidden flex text-custom-white hover:text-gray">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <div class="px-4 py-6">

        <div class="flex items-center space-x-2 mb-8">
            <a href="{{ route('dashboard') }}">
                <i class="fa fa-tachometer-alt text-2xl"></i>
                <span class="text-xl font-semibold">Dashboard</span>
            </a>
        </div>

        <div class="space-y-4">
            <ul>
                <li class="hover:bg-gray-700 rounded-md">
                    <a href="#" class="flex items-center space-x-3 p-3 text-sm">
                        <i class="fa fa-box text-lg"></i>
                        <span class="menu-text">Produtos</span>
                    </a>
                </li>

                <li class="hover:bg-gray-700 rounded-md">
                    <a href="#" class="flex items-center space-x-3 p-3 text-sm">
                        <i class="fa fa-users text-lg"></i>
                        <span class="menu-text">Clientes</span>
                    </a>
                </li>

                <li class="hover:bg-gray-700 rounded-md">
                    <a href="#" class="flex items-center space-x-3 p-3 text-sm">
                        <i class="fa fa-file-alt text-lg"></i>
                        <span class="menu-text">Fichas</span>
                    </a>
                </li>

                <li class="hover:bg-gray-700 rounded-md">
                    <a href="{{route('users.index')}}" class="flex items-center space-x-3 p-3 text-sm">
                        <i class="fa fa-user text-lg"></i>
                        <span class="menu-text">Usuários</span>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</nav>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const sidebar = document.getElementById('sidebar');
    const closeSidebar = document.getElementById('close-sidebar');
    const mainContainer = document.getElementById('main-container');

    menuToggle.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');

    });

    closeSidebar.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
    });
</script>
