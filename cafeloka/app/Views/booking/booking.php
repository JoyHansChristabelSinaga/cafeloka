<?php echo view('layout/header'); ?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data</h3>
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
    <section class="section">
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card-header">
                    <h4 class="card-title">Tabel Data Cafe</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div>
                            <a href="/createBooking" type="button" class="btn btn-primary m-4">Tambah Data</a>
                        </div>
                    </div>
                    <!-- table head dark -->
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="p-3">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col" style="width:10% ;">Nama</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Kontak</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Nama Cafe</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                            foreach ($siuu as $key => $value) : ?>
                                        <tr>
                                            <th scope="row"><?= $no ?></th>
                                            <td><?= $value->nama ?></td>
                                            <td><?= $value->alamat ?></td>
                                            <td><?= $value->kontak ?></td>
                                            <td><?= $value->deskripsi ?></td>
                                            <td><?= $value->nama_cafe?></td>
                                            <td>
                                                <div class="d-flex align-items-start">
                                                    <a
                                                        class="btn btn-warning mb-3 ms-2"
                                                        href="/editBooking/<?= $value->id_booking ?>">
                                                        <i class="fa fa-edit"></i>
                                                        Edit</a>
                                                    <form action="/deleteBooking/<?= $value->id_booking ?>" method="post">
                                                        <input type="hidden" name="_method" value="DELETE"/>
                                                        <button type="submit" class="btn btn-danger mb-3 ms-2">
                                                            <i class="fa fa-trash"></i>
                                                            Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $no++;
                                            endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php echo view('layout/footer'); ?>