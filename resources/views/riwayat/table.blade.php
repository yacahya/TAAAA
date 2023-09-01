<div class="card">
  <div class="card-header">
    <h3 class="card-title">{{$dataLayanan->jenis_layanan }}</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>
            <center>No</center>
          </th>
          <th>
            <center>Nama User Pemohon</center>
          </th>
          <th>
            <center>Desa</center>
          </th>
          <th>
            <center>Layanan</center>
          </th>
          <th>
            <center>Status</center>
          </th>
          <th>
            <center>Aksi</center>
          </th>
      </thead>
      <tbody>
        @php($no = 1)

               @foreach ($data as $item)
                <tr class="text-center">
                    <td>{{$no++}}</td>
                    <td> {{ $item->user->name}} </td>
                    <td> {{ $item->desa->nama_desa ?? "desa belum di pilih"}} </td>
                    <td> {{ $item->layanan->jenis_layanan}} </td>
                    <td> @include('badges.status',['item'=>$item->status]) </td>
                    <td>
                        <a href=" {{url()->current()}}/{{$item->id}}" class="btn btn-primary">Detail</a>
                    </td>
                </tr>
                @endforeach
      </tbody>
     
    </table>
    <div class="flex justify-center">
                  {{ $data->links() }}
                </div>

            </div>

  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('AdminLTE')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('AdminLTE')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTabl{{ asset('AdminLTE')}}/Plugins -->
<script src="{{ asset('AdminLTE')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('AdminLTE')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('AdminLTE')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('AdminLTE')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('AdminLTE')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('AdminLTE')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('AdminLTE')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('AdminLTE')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('AdminLTE')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('AdminLTE')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('AdminLTE')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('AdminLTE')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE')}}/dist/js/adminlte.min.js"></script>

<!-- Page spescript -->
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>

</html>