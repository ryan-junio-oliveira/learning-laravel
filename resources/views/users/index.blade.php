<x-layout title="{{ env('APP_NAME') }}">
    <x-slot name="header">
        <x-header :title="'Usuários'">
        </x-header>
    </x-slot>

    <x-slot name="main">
        <x-table-users :users="$users" />
    </x-slot>
</x-layout>
