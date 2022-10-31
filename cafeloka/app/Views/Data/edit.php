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
        <div class="row col-6 ms-3 mt-3">
            <form action="/update/<?= $data->id ?>" method="POST">
              <div class="form-group">
                <label for="nama">Nama_Cafe</label>
                <input type="text" name="nama_cafe" class="form-control" id="nama_cafe" value="<?= $data->nama_cafe ?>">
              </div>
              <div class="form-group">
                <label for="nohp">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $data->alamat ?>">
              </div>
              <div class="form-group">
                <label for="nohp">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" id="keterangan" value="<?= $data->keterangan ?>">
              </div>
              <button type="submit" class="btn btn-primary mt-2 ms-2" style="width:20% ;">Edit Data</button>
          </form>
          </div>
        </div>