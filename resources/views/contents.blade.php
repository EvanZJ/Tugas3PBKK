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
                    @if (Session::has('tambah_data'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 100%; height:auto;">
                            <strong><i class="fa fa-check-circle"></i> Berhasil!</strong>
                            <br>
                                Penambahan Pengumuman Berhasil
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                    @endif
                    @if (Session::has('edit_data'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 100%; height:auto;">
                            <strong><i class="fa fa-check-circle"></i> Berhasil!</strong>
                            <br>
                                Pengeditan Pengumuman Berhasil
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                    @endif
                    @if (Session::has('hapus_data'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 100%; height:auto;">
                            <strong><i class="fa fa-check-circle"></i> Berhasil!</strong>
                            <br>
                                Penghapusan Pengumuman Berhasil
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                    @endif
                    <h1>
                        <a>
                            Riwayat Rekam Medis
                        </a>
                        <a href="{{ route('rekammedis.tambah-data') }}" class="btn btn-primary" style="float:right";><i class="fa fa-plus"></i> Tambah Pengumuman Baru</a>
                    </h1>
                    <hr/>
                    <table class="table" style="width:100%;text-align:justify">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Patient</th>
                                <th>Doctor</th>
                                <th>Created</th>
                                <th>Last Modified</th>
                            </tr>
                        </thead>
                        @php
                            $it = 1;
                        @endphp
                        @foreach ($rekammedis as $rekammed)
                        <tr style="text-align:justify">
                            <article class="mb-5">
                                <td>{{ $it }}</td>
                                <td>
                                    <a href="/patient/{{ $rekammed->pasien->slug }}" class="no-underline hover:underline">
                                        {{ $rekammed->pasien->name }}
                                    </a>
                                </td>
                                <td>
                                    <a href="/dokter/{{ $rekammed->dokter->slug }}"  class="no-underline hover:underline">{{ $rekammed->dokter->name }}
                                    </a>
                                </td>
                                <td>
                                    <a href="">
                                        {{ $rekammed->created_at->diffForHumans() }}
                                    </a>
                                </td>
                                <td>
                                    <a href="">
                                        {{ $rekammed->updated_at->diffForHumans() }}
                                    </a>
                                </td>
                                <td>
                                    <form onsubmit="return confirm('Apakah Anda Yakin Menghapus Data ini ?');" action="{{ route('rekammedis.destroy', $rekammed->id) }}" method="POST">
                                        <a href="{{ Route('rekammedis.edit', $rekammed->id) }}" class="btn btn-sm btn-primary shadow"><i class="fa fa-edit"></i> Edit</a>
                                        |
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger shadow"><i class="fa fa-trash"></i> Delete</button>
                                        |
                                        <a href="{{ route('rekammedis.show' , $rekammed->id) }}" class="btn btn-sm btn-secondary shadow"><i class="fa fa-info-circle"></i> Detail</a>
                                    </form>
                                </td>
                            </article>
                            @php
                                $it += 1;
                            @endphp
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
