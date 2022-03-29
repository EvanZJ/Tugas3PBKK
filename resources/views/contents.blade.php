<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rekam Medis') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Riwayat Rekam Medis</h1>
                    <hr/>
                    @foreach ($rekammedis as $rekammed)
                        <article class="mb-5">
                            <h3>
                                <a href="/patient/{{ $rekammed->pasien->slug }}" class="no-underline hover:underline">
                                    Pasien : {{ $rekammed->pasien->name }}
                                </a>
                            </h3>
                            <h6 href="/dokter/{{ $rekammed->dokter->slug }}"  class="no-underline hover:underline">Dokter : {{ $rekammed->dokter->name }}</h6>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
