<?= $this->extend('template/index_template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">

      <h1 class="mt-2">Daftar User</h1>
      <a href="<?= base_url('admin/create') ?>" class="btn btn-primary mb-3">Tambah User</a>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Nomor</th>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <!-- gatau ini apa, ngambil dari project perpus-->
          <?php foreach ($book as $b) : ?>
            <tr vertical-align="middle">
              <th scope="row"><?= $i++ ?></th>
              <td><?= $b['fullname'] ?></td>
              <td><?= $b['username'] ?></td>
              <td><?= $b['email'] ?></td>
              <td><?= $b['role'] ?></td>
              <td>
                <!-- cek ulang fungsionalitas button nya -->
                <a href="<?= base_url() ?>/admin/edit/<?= $b['slug']; ?>" class="btn btn-warning">Edit</a>
                <a href="<?= base_url() ?>/admin/delete/<?= $b['id'] ?>" class="btn btn-danger" onclick="return confirm ('Apakah anda yakin?');">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </div>
</div>
<?= $this->endSection(); ?>