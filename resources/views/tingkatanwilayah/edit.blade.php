@extends('master.masterdashboard')
@section('sidebar')
    @include('partials.partials-dashboard.sidebar')
@endsection

@section('content')
    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

            </nav>

            <div class="container-fluid">

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Edit Tingkatan Wilayah</h1>
                </div>

                <!-- Content Row -->
                <div class="row">

                    <div class="card w-100">
                        <div class="card-body">
                            <form action="{{route('tingkatanwilayah.update',$tingkatanwilayah->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="nama">Nama Tingkatan</label>
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                                        value="{{ $tingkatanwilayah->nama }}">
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button class="form-control btn-outline-warning">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        @include('partials.partials-dashboard.footer')

    </div>
@endsection
