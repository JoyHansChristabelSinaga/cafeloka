<?php echo view('layout/header'); ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Table</h3>
                <p class="text-subtitle text-muted">Who does not love tables</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Table</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Here Code To Create Form -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
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
                                        <label for="npm">deskripsi</label>
                                        <input type="text" class="form-control" id="npm" name="deskripsi">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama Cafe</label>
                                        <select name="id_data" id="" class="form-control" required="required">
                                            <option value="" hidden="hidden"></option>
                                            <?php foreach($data as $key => $value) : ?>
                                            <option value="<?= $value->id ?>">
                                                <?= $value->nama_cafe ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
</section>
</div>

<?php echo view('layout/footer'); ?>