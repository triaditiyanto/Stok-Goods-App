<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>User List</title>
  </head>
  <body>
    <div class="container" class=""table-responsive" style="margin-top: 50px; text-align:center">
    <table class="table">
  <thead class="table-warning">
     <tr>
        <th>Nama</th>
        <th>Email</th>
    </tr>
  </thead>
  <tbody>
       @forelse ($users as $user )
               <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            @empty
              <div class="alert alert-danger">
                User tidak tersedia !
            </div>
            @endforelse
  </tbody>
</table>
    </div>
  </body>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
