@extends("layout.template")

@section('content')
<form action="" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <label for="">layanan</label>
            <select name="id_layanan" class="form-control">
                @foreach(App\Models\Layanan::all() as $item)
                <option value="{{ $item->id }}">{{ $item->jenis_layanan }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="">Nama Form</label>
            <input type="text" class="form-control" name="nama_isian">
        </div>
        <div class="col-md-6">
            <label for="">Jenis Isian</label>
            <select name="jenis" class="form-control">
                
                <option value="text">Text</option>
                <option value="uplaod">Upload</option>
            </select>
        </div>

        <div class="col-md-6 py-4">
            <button class="btn btn-success">Tambah</button>
        </div>
    </div>
</form>
@include('dataform.table')

@endsection 