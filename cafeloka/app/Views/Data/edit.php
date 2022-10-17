<form action="/update/<?= $data['id'] ?>" method="POST">
  <div class="mb-3">
    <label for="npm">NPM</label>
    <input type="text" name="npm" id="npm" class="form-control" value="<?= $data['npm'] ?>">
</div>  <div class="mb-3">
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama" class="form-control" value="<?= $data['nama'] ?>">
  </div>
  <div class="mb-3">
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $data['alamat'] ?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>