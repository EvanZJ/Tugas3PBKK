<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pasien') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <article class="mb-5">
                        <header>
                            <h3><a href="/patient/{{ $rekammedis->pasien->slug }}"class="no-underline hover:underline">{{ $rekammedis->pasien->name }}</h3>
                            <small>
                                <a href="/dokter/{{ $rekammedis->dokter->slug }}"class="no-underline hover:underline">Dokter : {{ $rekammedis->dokter->name }}</a>
                            </small>
                            </header>
                    </article>
                    <h3>Status : {{ $rekammedis->status }}</h3>
                    <h3>Suhu : {{ $rekammedis->suhu }}</h3>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>