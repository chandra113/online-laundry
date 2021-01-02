<?= $this->extend('template/index_template'); ?>

<?= $this->section('content'); ?>

<span class="txt2"><?= session()->getFlashdata('msg') ?></span>

<div class="container">
  <br>
  <h1>Pilih Layanan</h1>
  <br>
  <div class="row row-cols-3 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <img src="https://www.flaticon.com/svg/static/icons/svg/3003/3003984.svg" class="card-img-top" alt="..." />
        <div class="card-body">
          <h2 class="card-title">Cuci</h2>
          <p class="card-text">
            Paket hanya mencuci pakaian
          </p>
          <a href="<?= base_url('/customer/masuk') ?>" class="btn stretched-link"></a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="https://www.flaticon.com/svg/static/icons/svg/3238/3238686.svg" class="card-img-top" alt="..." />
        <div class="card-body">
          <h2 class="card-title">Setrika</h2>
          <p class="card-text">
            Paket hanya menyetrika pakaian</p>
          <a href="#" class="btn stretched-link"></a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="https://www.flaticon.com/svg/static/icons/svg/963/963677.svg" class="card-img-top" alt="..." />
        <div class="card-body">
          <h2 class="card-title">Komplit</h2>
          <p class="card-text">
            Paket mencuci dan menyetrika pakaian
          </p>
          <a href="#" class="btn stretched-link"></a>
        </div>
      </div>
    </div>
  </div>

  <?= $this->endSection(); ?>