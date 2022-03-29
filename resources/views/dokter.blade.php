<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dokter') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Riwayat Dokter</h1>
                    <hr/>
                    @foreach ($doctors as $doctor)
                        <article class="mb-5">
                            <h3>
                                <a href="/dokter/{{ $doctor->slug }}" class="no-underline hover:underline">
                                    {{ $doctor->name }}
                                </a>
                            </h3>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>