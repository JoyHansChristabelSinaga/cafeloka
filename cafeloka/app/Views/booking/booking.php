<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Cafeloka</title>
</head>
<div>
    <a href="/create" type="button" class="btn btn-primary m-4">Tambah Data</a>
</div>
<table class="table">
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
                <td><?= $admin['nama'] ?></td>
                <td><?= $admin['alamat'] ?></td>
                <td><?= $admin['kontak'] ?></td>
                <td><?= $admin['nama_cafe'] ?></td>
                <td><?= $admin['deskripsi'] ?></td>
                <td>
                    <div class="d-flex align-items-start">
                        <a class="btn btn-warning mb-3 ms-2" href="/edit/<?= $admin['id'] ?>"><i class="fa fa-edit"></i> Edit</a>
                        <form action="/delete/<?= $admin['id'] ?>" method="post">
                            <input type="hidden" name="_method" value="DELETE" />
                            <button type="submit" class="btn btn-danger mb-3 ms-2"><i class="fa fa-trash"></i> Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        <?php $no++;
        endforeach; ?>
    </tbody>
</table>