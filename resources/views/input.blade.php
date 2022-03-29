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
                                    <h3 class="text-center">Biodata Form</h3>
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
                                    <form action="/proceed" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="dokter">Dokter</label>
                                            <input class="form-control" type="text" name="dokter" value="{{ old('dokter') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <input class="form-control" type="text" name="status" value="{{ old('status') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="suhu">Suhu</label>
                                            <input class="form-control" type="number" step="0.01" name="suhu" value="{{ old('suhu') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="picture">Profile Picture</label>
                                            <input type="file" class="form-control-file" name="picture">
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