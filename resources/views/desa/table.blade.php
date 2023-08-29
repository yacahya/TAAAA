<table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>
            <center>No</center>
          </th>
          <th>
            <center>NamaLayanan</center>
          </th>
         </tr>
      </thead>
      <tbody>
        @php($no =1)
        @foreach($data as $item)
            <tr>
            <td>{{ $no ++ }}</td>
            <td>{{ $item->jenis_layanan }}</td>
            </tr>
        @endforeach
    
       
      </tbody>

    </table>