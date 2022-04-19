<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form') }}
        </h2>
    </x-slot>
    <body>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="card mt-5">
                                        <h3 class="text-center">Edit Patient Form</h3>
                                        <br>
                                        @if (Session::has('error'))
                                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                                        @endif

                                        @if (Session::has('wrongUsername'))
                                            <div class="alert alert-danger">{{ Session::get('wrongUsername') }}</div>
                                        @endif
                                        <form id="form-login" action="{{ route('rekammedis.update', $data->id) }}" method="POST" onsubmit="return confirm('Apakah Anda Yakin Edit Data ?');">
                                            {{--  {{ csrf_field() }}  --}}
                                            @csrf
                                            <div class="form-group">
                                                <label for="position-option">Doctor</label>
                                                <select class="form-control" id="dokter_id" name="dokter_id">
                                                    @foreach ($doctors as $doctor)
                                                    <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="position-option">Patient</label>
                                                <select class="form-control" id="pasien_id" name="pasien_id">
                                                @foreach ($patients as $patient)
                                                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            <div>
                                                <input class="mt-3 form-control form-control-lg @error('status') is-invalid @enderror" name="status" type="text"
                                                       placeholder="Status" value="{{ $data->status ? $data->status : 'Tidak Ada Data' }}" autofocus required>
                                            </div>
                                            @error('status')
                                            <div class="alert alert-danger">
                                                Status is wrong
                                            </div>
                                            @enderror
                                            <div>
                                                <input class="mt-3 form-control form-control-lg @error('suhu') is-invalid @enderror" name="suhu" type="text"
                                                       placeholder="Suhu" value="{{ $data->suhu ? $data->suhu : 'Tidak Ada Data' }}" autofocus required>
                                            </div>
                                            @error('suhu')
                                            <div class="alert alert-danger">
                                                Suhu is wrong
                                            </div>
                                            @enderror
                                        </form>
                                        <br>
                                        <div class="mt-4 text-center submit-btn">
                                            <a href="{{ route('rekammedis') }}" class="btn btn-secondary" onclick="return confirm('Apakah Anda Yakin Kembali ke Halaman Utama ?');">Kembali | </a>
                                            <button type="submit" class="btn btn-primary" form="form-login">Edit Data</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</x-app-layout>