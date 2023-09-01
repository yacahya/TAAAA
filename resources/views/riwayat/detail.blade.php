@extends('layout.template')
@section('title','Detail Pengajuan')
@section('content')

<div class="row">
    <div class="col-12 col-sm-4">
        <div class="info-box bg-light">
            <div class="info-box-content">
                <span class="info-box-text text-center text-muted">Status</span>
                @include('badges.status',['item'=> $data->status])
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-4">
        <div class="info-box bg-light">
            <div class="info-box-content">
                <span class="info-box-text text-center text-muted">Nama Pemohon :{{ $data->user->name }}</span>
                <span class="info-box-number text-center text-muted mb-0">Desa : {{ $data->desa->nama_desa }}</span>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-4">
        <div class="info-box bg-light">
            <div class="info-box-content">
                <span class="info-box-text text-center text-muted">Layanan</span>
                <span class="info-box-number text-center text-muted mb-0">{{ $data->layanan->jenis_layanan }}</span>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card-primary">
            <div class="card-header">
                <h3 class="card-title">Data Isian</h3>
            </div>
        </div>

        <div class="card">
            <ul class="list-group list-group-unbordered mb-3 p-3">
                <li class="list-group-item">
                    <b>No WA Warga</b> <a class="float-right">{{$data->no_wa}}</a>
                </li>
                @foreach(App\Models\Isian::whereIdPengajuan($data->id)->whereJenis(0)->get() as $item)
                <li class="list-group-item">
                    <b>{{$item->form->nama_isian}}</b> <a class="float-right">{{$item->data_isian}}</a>
                </li>
                @endforeach

            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card-primary">
            <div class="card-header">
                <h3 class="card-title">Data Upload</h3>
            </div>
        </div>

        <div class="card">
            <ul class="list-group list-group-unbordered mb-3 p-3">
                @foreach(App\Models\Isian::whereIdPengajuan($data->id)->whereJenis(1)->get() as $item)
                <li class="list-group-item">
                    <b>{{$item->form->nama_isian ??''}}</b>
                     <a href="{{url('uploads')}}/{{$item->data_isian}}" class="float-right">{{$item->data_isian}}</a>
                </li>
                @endforeach

            </ul>
        </div>
    </div>
</div>
@if($data->status == 0 &&  Auth()->user()->level == 1)

<div class=" row p-5 ">
    <form action="" method="POST">
        @csrf
        <div class="col-md-12 p-4">
       <select name="pesan" id="" class="form-control">
       <option value="Permohoanan Anda Sudah Selesai Silahkan Ambil dokkumen {{ $data->layanan->jenis_layanan }} ke desa {{ $data->desa->nama_desa }} , dokumen sudah di kirim ke email desa {{ $data->desa->nama_desa }}">Permohoanan Anda Sudah Selesai Silahkan Ambil dokkumen {{ $data->layanan->jenis_layanan }} ke desa {{ $data->desa->nama_desa }} , dokumen sudah di kirim ke email desa {{ $data->desa->nama_desa }}</option>
        <option value="kartu keluarga tidak jelas">kartu keluarga tidak jelas</option>
        <option value="komsen tidak di tanda tangani">komsen tidak di tanda tangani</option>
        <option value="data tidak ditemukan di database SIAK">data tidak ditemukan di database SIAK</option>
       </select>
      
        </div>
        
        <button name="tombol" value="proses" class="btn btn-success">Proses</button>
        <button name="tombol" value="tolak" class="btn btn-danger">Tolak</button>
       
       
    </form>
</div>
@endif
@endsection