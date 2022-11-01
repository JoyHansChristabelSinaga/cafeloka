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
                            <a href="/create" type="button" class="btn btn-primary m-4">Tambah Data</a>
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
                                            <th scope="col" style="width:60% ;">Keterangan</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
        foreach ($data as $admin) : ?>
                                        <tr>
                                            <th scope="row"><?= $no ?></th>
                                            <td><?= $admin->nama_cafe ?></td>
                                            <td><?= $admin->alamat ?></td>
                                            <td><?= $admin->keterangan ?></td>
                                            <td>
                                                <div class="d-flex align-items-start">
                                                    <a class="btn btn-warning mb-3 ms-2" href="/edit/<?= $admin->id ?>">
                                                        <i class="fa fa-edit"></i>
                                                        Edit</a>
                                                    <form action="/delete/<?= $admin->id ?>" method="post">
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