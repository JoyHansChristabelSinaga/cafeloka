<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Cafeloka</title>
</head>
<table class="table">
  <tbody>

    <div class="P-4">
      <div class="container" mt-5 mb-3>
        <div class="row">
          <div class="col-6">
            <form action="/update/<?= $admin['id'] ?>" method="POST">
              <div class="form-group">
                <label for="nama">Nama_Cafe</label>
                <input type="text" name="nama_cafe" class="form-control" id="nama_cafe" value="<?= $admin['nama_cafe'] ?>">
              </div>
              <div class="form-group">
                <label for="nohp">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" id="keterangan" value="<?= $admin['keterangan'] ?>">
              </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary mb-5 ms-2">Edit Data</button>
        </form>
      </div>