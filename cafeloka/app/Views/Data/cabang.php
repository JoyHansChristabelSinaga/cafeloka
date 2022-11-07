<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="row">
        <?php foreach ($daerah as $key => $value) : ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-3" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="/tampil/<?= $value->id_daerah ?>"><?= $value->nama_daerah ?></a></h4>
            </div>
          </div>
          <?php endforeach; ?>
      </div>

      <?= $this->endSection() ?>