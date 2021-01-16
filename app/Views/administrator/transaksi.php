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
            <th scope="col">Nama Pelanggan</th>
            <th scope="col">Pilihan Layanan</th>
            <th scope="col">Status Pembayaran</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($order as $o) : ?>
            <tr vertical-align="middle">
              <th scope="row"><?= $o['nomor_invoice'] ?></th>
              <td><?= $o['nama_pelanggan'] ?></td>
              <td><?= $o['layanan'] ?> - <?= $o['kecepatan'] ?></td>
              <td><?= $o['status_pembayaran'] ?></td>
              <td>
                <a href="<?= base_url() ?>/admin/detail/<?= $o['id']; ?>" class="btn btn-warning">Detail</a>
                <a href="<?= base_url() ?>/admin/delete/<?= $o['id'] ?>" class="btn btn-danger" onclick="return confirm ('Proses ini TIDAK DAPAT DIBATALKAN. Apakah anda yakin?');">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>