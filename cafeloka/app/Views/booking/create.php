<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">

        <title>Pos Toko</title>
    </head>

    <div class="p-4">
        <form action="/storeBooking" method="POST">
            <div class="form-group">
                <label for="npm">Nama</label>
                <input type="text" class="form-control" id="npm" name="nama">
            </div>
            <div class="form-group">
                <label for="npm">Alamat</label>
                <input type="text" class="form-control" id="npm" name="alamat">
            </div>
            <div class="form-group">
                <label for="npm">kontak</label>
                <input type="text" class="form-control" id="npm" name="kontak">
            </div>
            <div class="form-group">
                <label for="npm">nama_cafe</label>
                <input type="text" class="form-control" id="npm" name="nama_cafe">
            </div>
            <div class="form-group">
                <label for="npm">deskripsi</label>
                <input type="text" class="form-control" id="npm" name="deskripsi">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>