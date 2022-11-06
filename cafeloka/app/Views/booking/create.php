<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="p-4">
    <form action="/storeBooking" method="POST">
        <div class="form-group mb-3">
            <label for="npm">Nama</label>
            <input type="text" class="form-control" id="npm" name="nama">
        </div>
        <div class="form-group mb-3">
            <label for="npm">Alamat</label>
            <input type="text" class="form-control" id="npm" name="alamat">
        </div>
        <div class="form-group mb-3">
            <label for="npm">kontak</label>
            <input type="text" class="form-control" id="npm" name="kontak">
        </div>
        <div class="form-group mb-3">
            <label for="npm">deskripsi</label>
            <input type="text" class="form-control" id="npm" name="deskripsi">
        </div>
        <div class="form-group mb-3">
            <label for="">Nama Cafe</label>
            <select name="id_data" id="" class="form-control" required>
                <option value="" hidden></option>
                <?php foreach ($data as $key => $value) : ?>
                    <option value="<?= $value->id ?>"> <?= $value->nama_cafe ?> </option>
                <?php endforeach; ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?= $this->endSection() ?>