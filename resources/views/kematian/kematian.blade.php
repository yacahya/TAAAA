@extends('layout.template')
@section('content')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pengajuan Laporan Kematian</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK Yang Meninggal</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Masukan NIK yang meninggal">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Lengkap</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Nama Lengkap yan meninggal">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">NIK Pelapor</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="NIK Pelapor">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Lengkap Pelapor</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Nama Lengkap Pelapor">
                  </div>
                
                  <div class="form-group">
                    <label for="exampleInputPassword1">NIK Saksi ke 1</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Lengkap Saksi ke 1</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">NIK Saksi ke 2</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama lengkap Saksi ke 2</label>
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