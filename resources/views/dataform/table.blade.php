<table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>
            <center>No</center>
          </th>
          <th>
            <center>Layanan</center>
          </th>
          <th>
            <center>Nama Form</center>
          </th>
          <th>
            <center>Jenis Form</center>
          </th>
          <th>
            <center>Aksi</center>
          </th>
         </tr>
      </thead>
      <tbody>
        @php($no =1)
        @foreach($data as $item)
            <tr>
            <td>{{ $no ++ }}</td>
            <td>{{ $item->layanan->jenis_layanan }}</td>
            <td>{{ $item->nama_isian }}</td>
            <td>{{ $item->jenis }}</td>
  <td>
    <a href="{{ url('dataform') .'/'. $item->id }}" class="btn btn-danger">Hapus</a>
  </td>
            </tr>
        @endforeach
    
       
      </tbody>

    </table>