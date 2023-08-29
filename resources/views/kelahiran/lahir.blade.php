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
              <h3 class="card-title">Pengajuan Laporan Kelahiran</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">NIK Bayi</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Masukan NIK Bayi">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Lengkap</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Nama Lengkap bayi">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tempat Lahir</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Tempat Lahir">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Lahir</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Lahir">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kelahiran Anak Ke</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Kelahiran Anak Ke berapa">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Penolong Kelahiran</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Nama Penolong Kelahiran">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Berat Bayi</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Berat Bayi">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Panjang Bayi</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Panjang Bayi">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">NIK Saksi ke 1</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Saksi ke 1</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">NIK Saksi ke 2</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Saksi ke 2</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>

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