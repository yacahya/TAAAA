@extends('layout.template')
@section('title', 'Profile')
@section('subtitle', 'Profile')
@section('content')
    <div class="row justify-content-left">
        <div class="col-md-3">
            <div class="card border-bottom-primary">
                <div class="card-header bg-primary font-weight-bold text-light">Foto Profile</div>
                <div class="card-body shadow">
                    <div class="box-body">
                        <img class="img-thumbnail" src="{{ url('public/image') . '/' . auth()->user()->gambar }}"
                            alt="User profile picture">

                        <center>
                            <span class="profile-username text-center font-weight-bold text-dark">{{ Auth::user()->name }}
                                <br>
                                <span class="badge badge-pill badge-success text-center small">
                                    @if (auth()->user()->level == 'Admin')
                                        Admin
                                    @elseif (auth()->user()->level == 'Mahasiswa')
                                        Mahasiswa
                                    @elseif (auth()->user()->level == 'Dosen')
                                        Dosen
                                    @endif
                                    <BR>
                                </span>
                            </span>
                        </center>
                        <hr>
                        <form method="post" action="{{ url('edit_gambar') }}" enctype="multipart/form-data"
                            class=" form-horizontal">
                            @csrf
                            <input type="file" name="image" class="form-control-file">
                            <br>
                            <button type="submit" class="btn btn-primary btn-block"><b>Ganti Foto Profile</b></button>
                            {{-- <label for="image" class="form-label">Pilih Foto</label>
                            <input type="file" name="image" class="form-control">
                            <br>
                            <button type="submit" class="btn btn-primary btn-block"><b>Ganti Foto Profile</b></button> --}}

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="card border-bottom-primary">
                <div class="card-header bg-primary font-weight-bold text-light"><i class="fa fa-address-card"></i> Biodata
                </div>
                <div class="card-body shadow">
                    <form method="post" action="{{ url('edit_biodata') }}" role="form">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-6">
                                  
                                        <div class="form-group text-dark">
                                            <label class="font-weight-bold text-dark">NIK</label>
                                            <input class="form-control shadow" type="text" name="nim"
                                                placeholder="NIK" value="{{ auth()->user()->nim }}">
                                        </div>
                                   
                                    <div class="form-group text-dark">
                                        <label class="font-weight-bold text-dark">Tempat Lahir</label>
                                        <input class="form-control shadow" type="text" name="temp_lahir"
                                            placeholder="Tempat Lahir" value="{{ auth()->user()->temp_lahir }}">
                                    </div>
                                    <div class="form-group text-dark">
                                        <label class="font-weight-bold text-dark">Alamat</label>
                                        <input class="form-control shadow" type="text" name="alamat"
                                            placeholder="Alamat" value="{{ auth()->user()->alamat }}">
                                    </div>
                                </div>

                                <div class="col-sm-6">

                                    <div class="form-group text-dark">
                                        <label class="font-weight-bold text-dark">Nama Lengkap</label>
                                        <input class="form-control shadow" type="text" name="name"
                                            placeholder="Nama Lengkap" value="{{ auth()->user()->name }}">
                                    </div>
                                    <div class="form-group text-dark">
                                        <label class="font-weight-bold text-dark">Tanggal Lahir</label>
                                        <input class="form-control shadow" type="date" name="tgl_lahir"
                                            placeholder="Tanggal Lahir"
                                            value="{{ Carbon\Carbon::parse(auth()->user()->tgl_lahir)->format('Y-m-d') }}">
                                    </div>
                                    <div class="form-group text-dark">
                                        <label class="font-weight-bold text-dark">Nomor HP</label>
                                        <input class="form-control shadow" type="text" name="no_hp"
                                            placeholder="Nomor HP" value="{{ auth()->user()->no_hp }}">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-sm btn-flat btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection