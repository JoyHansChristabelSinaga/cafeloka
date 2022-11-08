<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <br>
            <table id="example1" class="table table-bordered table-striped">
                <thead class="p-3">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col" style="width:10% ;">Nama</th>
                        <th scope="col">Manager</th>
                        <th scope="col" style="width:10% ;">Alamat</th>
                        <th scope="col" style="width:30% ;">Keterangan</th>
                        <th scope="col" style="width:20% ;">Foto</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <?php $no = 1;
    foreach ($daerah as $key => $value) : ?>
                <tbody value="<?= $value->id_daerah ?>">
                    <?php if($data->id_daerah == $value->id_daerah){
            echo '<td>'.$no++.'</td>:';
            echo '<td>'.$value->nama_cafe.'</td>:';
            echo '<td>'.$value->manager.'</td>:';
            echo '<td>'.$value->alamat.'</td>:';
            echo '<td>'.$value->keterangan.'</td>:';
            echo '<td><img width="150px" class="img-thumbnail" src="'.base_url()."/gambarCafe/".$value->foto.'"></td>';
            echo '<td>
            <div class="d-flex align-items-start">
                <a class="btn btn-warning mb-3 ms-2" href="/createBooking"><i class="fa fa-edit"></i>Booking</a>
            </div>
        </td>';
        }?></tbody>
                <?php endforeach; ?>
            </tfoot>
        </table>
    </div>
</div>
</div>
<script
type="text/javascript"
language="javascript"
src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script
type="text/javascript"
language="javascript"
src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function () {
    $('#example1').DataTable({});
});
</script>
<?= $this->endSection() ?>