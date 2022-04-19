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
                                    <h3 class="text-center">Patient Form</h3>
                                    @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <br/>
                                    <form action="{{ route('rekammedis.buat-data') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{--  {{ csrf_field() }}  --}}
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
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <input class="form-control" type="text" name="status" value="{{ old('status') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="suhu">Suhu</label>
                                            <input class="form-control" type="number" step="0.01" name="suhu" value="{{ old('suhu') }}">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <input class="btn btn-primary" type="submit" value="Submit">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</x-app-layout>