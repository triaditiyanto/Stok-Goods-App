<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Goods</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('mains.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                             <div class="form-group">
                                <label class="font-weight-bold">Nama Barang</label>
                                <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" value="{{ old('nama_barang') }}" placeholder="">

                                <!-- error message untuk title -->
                                @error('nama_barang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                             <?php
                                 $random_num = mt_rand(1000,9999);
                             ?>
                            <div class="form-group">
                                <label class="font-weight-bold">Nomor Barang</label>
                                <i style="color:red">(*jangan isi kolom ini !)</i>
                                <input type="number" class="form-control @error('nomor_barang') is-invalid @enderror" name="nomor_barang" value="{{$random_num}}" placeholder="">

                                <!-- error message untuk title -->
                                @error('nomor_barang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                             <div class="form-group">
                                <label class="font-weight-bold">Jenis Barang</label>
                                <input type="text" class="form-control @error('jenis_barang') is-invalid @enderror" name="jenis_barang" value="{{ old('jenis_barang') }}" placeholder="">

                                <!-- error message untuk title -->
                                @error('jenis_barang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                             <div class="form-group">
                                <label class="font-weight-bold">Qty</label>
                                <input type="number" class="form-control @error('qty') is-invalid @enderror" name="qty" value="{{ old('qty') }}" placeholder="">

                                <!-- error message untuk title -->
                                @error('qty')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                             <div class="form-group">
                                <label class="font-weight-bold">Tanggal Input</label>
                                <input type="date" class="form-control @error('tanggal_input') is-invalid @enderror" name="tanggal_input" value="{{ old('tanggal_input') }}" placeholder="">

                                <!-- error message untuk title -->
                                @error('tanggal_input')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Note</label>
                                <textarea class="form-control @error('noted') is-invalid @enderror" name="noted" rows="5" placeholder="">{{ old('noted') }}</textarea>

                                <!-- error message untuk content -->
                                @error('noted')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                             <div class="form-group">
                                <label class="font-weight-bold">Nama Penginput</label>
                                <input type="text" class="form-control @error('nama_input') is-invalid @enderror" name="nama_input" value=" {{ auth()->user()->name }}" placeholder="">

                                <!-- error message untuk title -->
                                @error('nama_input')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                            <a class="btn btn-dark" href="/mains" role="button">VIEW GOODS</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'noted' );
</script>
</body>
</html>
