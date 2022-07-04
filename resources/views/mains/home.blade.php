<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> Stok | View</title>
  </head>
  <body>
      <div class="container" style="margin-top: 50px">
            <h3>Goods | Stok <form action="/logout" method="POST">
            @csrf
            <button class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg></button>
        </form></h3
                  <p style="text-align: center">user : {{ auth()->user()->name }}</p>
<br>
<div class="table-responsive">
  <table class="table">
    <thead class="table-success">
        <tr>
                <th>Nama Barang</th>
                <th>Nomor Barang</th>
                <th>Jenis Barang</th>
                <th>Qty</th>
                <th>Tanggal Input</th>
                <th>Noted</th>
                <th>Penginput</th>
                <th>Action</th>
            </tr>
  </thead>
  <tbody>
        @forelse ( $mains as $main )
                <tr>
                    <td>{{$main->nama_barang}}</td>
                    <td>{{$main->nomor_barang}}</td>
                    <td>{{$main->jenis_barang}}</td>
                    <td>{{$main->qty}}</td>
                    <td>{{$main->tanggal_input}}</td>
                    <td>{!! $main->noted !!}</td>
                    <td>{{$main->nama_input}}</td>
                    <td class="text-center">
                       <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('mains.destroy', $main->id) }}" method="POST">
                            <a href="{{ route('mains.edit', $main->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                    </form>
                </td>
                </tr>
            @empty
              <div class="alert alert-warning">
                No stock yet !
            </div>

            @endforelse
  </tbody>
  </table>

</div>
    </div>

  </body>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>
