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
                    <h1>{{ $doctor->name }}</h1>
                    <hr/>   
                    @foreach ($doctor->RekamMedis as $rekammedis)
                        <article class="mb-5">
                            <header>
                                <h3><a href="/rekammedis/{{ $rekammedis->id }}" class="no-underline hover:underline">{{ $rekammedis->id }} <a>| <a href="/dokter/{{ $rekammedis->pasien->slug }}" class="no-underline hover:underline" >{{ $rekammedis->pasien->name }} </h3>
                            </header>
                            <h6>{{ $rekammedis->created_at->diffForHumans() }}</h6>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
