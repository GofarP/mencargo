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
                    <h1 class="h3 mb-0 text-gray-800">Edit Metode Pembayaran</h1>
                </div>

                <!-- Content Row -->
                <div class="row">
                    @if (session('flash'))
                        <div class="alert alert-success" role="alert">
                            {{ session('flash') }}
                        </div>
                    @elseif(session('error-flash'))
                        <div class="alert alert-error" role="alert">
                            {{ session('error-flash') }}
                        </div>
                    @endif

                    <div class="card w-100">
                        <div class="card-body">
                            <form action="{{ route('metodepembayaran.update',$metodepembayaran->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                <label for="nama">Nama</label>
                                    <input type="text" name="nama"
                                        class="form-control @error('nama') is-invalid @enderror">
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button class="form-control btn-outline-success">Simpan</button>
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
