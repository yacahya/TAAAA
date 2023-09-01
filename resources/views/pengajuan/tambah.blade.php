@extends('layout.template')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <!-- Content Header (Page header) -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Pengajuan {{$layanan->jenis_layanan}}</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="" enctype="multipart/form-data">
              
                @csrf
              <div class="card-body">
              <div class="form-group">
                  <label for="exampleInputEmail1">Nomor WA Pemohon</label>
                  <input type="text" name="no_wa" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nomor WA Warga">
                </div>
                @foreach($formIsian as $items)
                <input type="hidden" name="id_formIsian[]" value="{{ $items->id }}">
                <div class="form-group">
                  <label for="exampleInputEmail1">{{$items->nama_isian}}</label>
                  <input type="text" name="text[]" class="form-control" id="exampleInputEmail1" placeholder="Masukan NIK Bayi">
                </div>
                @endforeach
                @foreach($formUpload as $item)
                <input type="hidden" name="id_formUpload[]" value="{{ $item->id }}">
                <div class="form-group">
                  <label for="exampleInputEmail1">{{$item->nama_isian}}</label>
                  <input type="file" name="upload[]" class="form-control" id="exampleInputEmail1" placeholder="Masukan NIK Bayi">
                </div>
                @endforeach
               
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection