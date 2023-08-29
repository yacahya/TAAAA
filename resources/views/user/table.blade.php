<div class="card">
    <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>
                        <center>No</center>
                    </th>
                    <th>
                        <center>Nama Lengkap</center>
                    </th>
                    <th>
                        <center>Email</center>
                    </th>
                    <th>
                        <center>Nama Desa</center>
                    </th>
                    <th>
                        <center>Level</center>
                    </th>
                    <th>
                        <center>Acion</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                @php($no = 1)
                @foreach ($data as $item)
                <tr class="text-center">
                    <td>{{$no++}}</td>
                    <td> {{ $item->fullName}} </td>
                    <td> {{ $item->email}} </td>
                    <td> {{ $item->namdes}} </td>
                    <td> {{ $item->level}} </td>
                    <td>
                        <form method="POST" action="{{ url('user') . '/' . $item->id }}">
                            @csrf
                            <a href="/user/edit/{{ $item->id }}" class="btn btn-sm btn-warning">Edit</a>
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>