<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form') }}
        </h2>
    </x-slot>
    <body>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">   
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="card mt-5">
                                    <div class="card-body">
                                        @if ($message = Session::get('successMsg'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>    
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @endif
                                        <h3 class="text-center">Biodata Display</h3>
                                        <div class="text-center">
                                            <img src="{{ '/' . $imageName }}" alt="Image" width="200" height="auto">
                                        </div>
                                        <br/>
                                        <table class="table table-bordered table-striped">
                                            <tr>
                                                <td style="width:200px">Name</td>
                                                <td>{{ $data->name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Dokter</td>
                                                <td>{{ $data->dokter }}</td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>{{ $data->status }}</td>
                                            </tr>
                                            <tr>
                                                <td>Suhu</td>
                                                <td>{{ $data->suhu }}</td>
                                            </tr>
                                        </table>
                                        <a href="/input" class="btn btn-primary">Back</a>
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