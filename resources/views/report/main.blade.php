<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Report | Mounth</title>
  </head>
  <body>
    <div class="container" style="text-align: center; margin-top:40px">
        <h1>Goods of Mounth</h1><br>
       <table class="table">
        <thead class="table-primary">
            <tr>
                <th>Nama Barang</th>
                <th>Nomor Barang</th>
                <th>Jenis Barang</th>
                <th>Qty</th>
                <th>Tanggal Input</th>
                <th>Noted</th>
                <th>Penginput</th>
            </tr>
        </thead>
        <tbody>
             @forelse ( $reports as $main )
                <tr>
                    <td>{{$main->nama_barang}}</td>
                    <td>{{$main->nomor_barang}}</td>
                    <td>{{$main->jenis_barang}}</td>
                    <td>{{$main->qty}}</td>
                    <td>{{$main->tanggal_input}}</td>
                    <td>{!! $main->noted !!}</td>
                    <td>{{$main->nama_input}}</td>
                    {{-- <td class="text-center">
                       <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('mains.destroy', $main->id) }}" method="POST">
                            <a href="{{ route('mains.edit', $main->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                    </form>
                </td> --}}
                </tr>
            @empty
              <div class="alert alert-warning">
                No stock in mounth yet !
            </div>

            @endforelse
        </tbody>
    </table>
    </div>
  </body>
  <script>
    window.print();
  </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
