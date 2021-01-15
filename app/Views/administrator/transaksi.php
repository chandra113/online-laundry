<?= $this->extend('template/index_template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">

      <h1 class="mt-2">Daftar Transaksi</h1>

      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Nomor Invoice</th>
            <th scope="col">Pilihan Layanan</th>
            <th scope="col">Status Pesanan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <!-- gatau ini apa, ngambil dari project perpus-->
          <?php foreach ($order as $o) : ?>
            <tr vertical-align="middle">
              <th scope="row"><?= $o['nomor_invoice'] ?></th>
              <td><?= $o['layanan'] ?> - <?= $o['kecepatan'] ?></td>
              <td><?= $o['status_pembayaran'] ?></td>
              <td>
                <!-- button ke method detail atau edit -->
                <!-- route dan controller nya jangan lupa-->
                <a href="<?= base_url() ?>/admin/detail/<?= $o['id']; ?>" class="btn btn-warning">Detail</a>
                <!-- <a href=" < ?= base_url() ?>/Admin/detail < ?= $b ['slug']; ?>" class="btn btn-warning">Detail</a> -->
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </div>
</div>
<?= $this->endSection(); ?>