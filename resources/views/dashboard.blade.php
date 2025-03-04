<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-blue-700 leading-tight">
            {{ __('Selamat Datang di Dashboard') }}
        </h2>   
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-100 overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="text-lg font-semibold">{{ __('Halo, selamat datang kembali!') }}</p>
                    <p class="mt-2 text-gray-700">{{ __('Di sini Anda dapat mengelola data dan melihat informasi terbaru.') }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
