<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Cafeloka</title>
</head>
<div>
    <a href="/createBooking" type="button" class="btn btn-primary m-4">Tambah Data</a>
</div>
<table class="table">
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
                        <a class="btn btn-warning mb-3 ms-2" href="/editBooking/<?= $value->id_booking ?>"><i class="fa fa-edit"></i> Edit</a>
                        <form action="/deleteBooking/<?= $value->id_booking ?>" method="post">
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