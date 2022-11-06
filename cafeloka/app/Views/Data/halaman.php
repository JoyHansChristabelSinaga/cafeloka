<?= $this->extend('cafePenjelasan') ?>

<?= $this->section('list') ?>

<ul>
    <li>
    <?php foreach ($daerah as $key => $value) : ?>
        <p value="<?= $value->id_daerah ?>"> 
        <?php if($data->id_daerah == $value->id_daerah){
            echo '<strong>Daerah</strong>: ', $value->nama_daerah;
            break;
        }?></p>
    <?php endforeach; ?>
    </li>
    <li>
        <strong>Manager</strong>: <?= $data->manager; ?></li>
    <li>
        <strong>Project date</strong>: <?= $data->created_at; ?></li>
    <li>
        <strong>Project URL</strong>:
        <a href="#">www.example.com</a>
    </li>
</ul>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h2><?= $data->nama_cafe ?></h2>
<p><?= $data->keterangan ?></p>

<?= $this->endSection() ?>