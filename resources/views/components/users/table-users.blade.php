@props([
    'users' => null,
])

<div class="bg-white rounded-lg shadow-lg p-6">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg font-bold text-gray-700">Users List</h2>
        <div>
            <button class="bg-gray-200 px-4 py-2 rounded-lg mr-2">Export</button>
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg">Download</button>
        </div>
    </div>

    <table class="table-auto w-full text-left">
        <thead>
            <tr class="text-gray-500 text-sm">
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Role</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody class="text-sm">
            @foreach ($users as $user)
                <tr class="border-b">
                    <td class="px-4 py-2">{{ $user->name }}</td>
                    <td class="px-4 py-2">{{ $user->email }}</td>
                    <td class="px-4 py-2">

                        @if ($user->roles->isEmpty())
                            No role assigned
                        @else
                            @foreach ($user->roles as $role)
                                <span>{{ $role->name }}</span>
                                @if (!$loop->last)
                                    <!-- Verifica se não é o último item -->
                                    <span>, </span> <!-- Adiciona uma vírgula entre as roles -->
                                @endif
                            @endforeach
                        @endif
                    </td>

                    <td class="px-4 py-2">
                        <button class="bg-blue-500 text-white px-2 py-1 rounded-lg">
                            <i class="fas fa-eye"></i> Show
                        </button>
                        <button class="bg-yellow-500 text-white px-2 py-1 rounded-lg">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <button class="bg-red-500 text-white px-2 py-1 rounded-lg">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4 flex justify-between items-center">
        <div class="flex justify-center space-x-2 mt-4">
            {{ $users->links('pagination::tailwind') }}
        </div>
    </div>
</div>
