@extends("layout.template")

@section('content')
<form action="" method="post">
    @csrf
    <div class="row">
        <div class="col-md-12 py-3">
            <label for="">Masukan Nama desa</label>
            <input type="text" class="form-control" name="nama_desa">

        </div>

        <button type="submit" class="btn btn-success">simpan</button>
    </div>
</form>
@include('layanan.table')

@endsection 