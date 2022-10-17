<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Pos Toko</title>
</head>

<div class="p-4">
  <form action="/store" method="POST">
    <div class="mb-3">
      <label for="npm">Nama Cafe</label>
      <input type="text" name="nama_cafe" id="npm" class="form-control">
    </div>  <div class="mb-3">
      <label for="nama">Keterangan</label>
      <input type="text" name="keterangan" id="nama" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>