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
                    <h1 class="h3 mb-0 text-gray-800">Edit Data Mtc</h1>
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
                            <form action="{{ route('mtc.update',$mtc->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                <label for="tanggal_update">Tanggal Update <span class="text-danger">(Harus Diisi)</span></label>
                                    <input type="date" name="tanggal_update"
                                        class="form-control @error('tanggal_update') is-invalid @enderror" value="{{$mtc->tanggal_update}}">
                                    @error('tanggal_update')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="status_manifes_id">Status Manifes <span class="text-danger">(Harus Diisi)</span></label>
                                        <select name="status_manifes_id" id="status_manifes_id" class="form-control js-example-basic-single">
                                            <option value="">Pilih Status Manifes</option>
                                            @foreach ($status_manifes as $item)
                                                <option value="{{$item->id}}" {{$item->id == $mtc->status_manifes_id ? 'selected' : ''}}>{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('status_manifes_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>


                                <div class="form-group">
                                    <label for="pesanan_mencargo_id">STT <span class="text-danger">(Harus Diisi)</span></label>
                                        <select name="pesanan_mencargo_id" id="pesanan_mencargo_id" class="form-control js-example-basic-single">
                                            <option value="">Pilih STT</option>
                                            @foreach ($pesanan_mencargo as $item)
                                                <option value="{{$item->id}}" {{$item->id == $mtc->pesanan_mencargo_id ? 'selected' : ''}}>{{$item->stt}}</option>
                                            @endforeach
                                        </select>
                                        @error('pesanan_mencargo_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>


                                <div class="form-group">
                                    <label for="vendor_id">Vendor <span class="text-danger">(Harus Diisi)</span></label>
                                        <select name="vendor_id" id="vendor_id" class="form-control js-example-basic-single">
                                            <option value="">Pilih Vendor</option>
                                            @foreach ($pesanan_vendor as $item)
                                                <option value="{{$item->id}}" {{$item->id == $mtc->vendor_id ? 'selected' : ''}}>{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('vendor_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>


                                <div class="form-group">
                                    <label for="tanggal_jalan">Tanggal Jalan</label>
                                        <input type="date" class="form-control" name="tanggal_jalan" id="tanggal_jalan" value="{{$mtc->tanggal_jalan}}">
                                        @error('tanggal_jalan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>

                                <div class="form-group">
                                    <label for="estimasi">Estimasi</label>
                                        <input type="text" name="estimasi" id="estimasi"
                                        class="form-control @error('estimasi') is-invalid @enderror"  value="{{$mtc->estimasi}}">
                                        @error('estimasi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>


                                <div class="form-group">
                                    <label for="penerima">Penerima</label>
                                    <input type="text" class="form-control" name="penerima" id="penerima"  value="{{$mtc->penerima}}">
                                </div>

                                <div class="form-group">
                                    <label for="foto">Foto</label>
                                    <input type="file" class="form-control" name="image">
                                </div>

                                @if ($mtc->image!="")
                                     <img
                                        src="{{asset($mtc->image)}}"
                                        class="img-fluid rounded-top mb-4"
                                        style="height:250px;width:250px"
                                        alt=""
                                     />

                                @endif

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
