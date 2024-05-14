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
                    <h1 class="h3 mb-0 text-gray-800">Edit Customer</h1>
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
                            <form action="{{ route('customer.update',$customer->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama"
                                        class="form-control @error('nama') is-invalid @enderror" value={{$customer->nama}}>
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>

                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror" value={{$customer->email}}>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="no_telp">No Telp</label>

                                    <input type="number" name="no_telp"
                                        class="form-control @error('no_telp') is-invalid @enderror" value={{$customer->no_telp}}>
                                    @error('no_telp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="wilayah_id">Wilayah</label>
                                    <select name="wilayah_id" id="wilayah_id"
                                        class="js-example-basic-single w-100">
                                        <option value="">Pilih Domisili</option>
                                        @foreach ($wilayah as $item)
                                            <option value="{{ $item->id }}" {{{$item->id == $customer->wilayah_id ? 'selected' : ''}}}>{{ $item->nama }}</option>
                                        @endforeach
                                    </select>

                                    @error('wilayah_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="kabupaten_kota_id">Alamat Detail</label>
                                    <textarea name="alamat_detail" id="alamat_detail"
                                    class="form-control @error('alamat_detail') is-invalid @enderror"
                                        cols="30" rows="10">{{$customer->alamat_detail}}</textarea>

                                    @error('alamat_detail')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" id="tanggal_lahir" value={{$customer->tanggal_lahir}}>

                                    @error('tanggal_lahir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" id="tempat_lahir"
                                    value={{$customer->tempat_lahir}}>
                                    @error('tempat_lahir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <div class="form-group mt-3">
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
