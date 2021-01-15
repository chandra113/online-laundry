<?= $this->extend('template/index_template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">

      <h1 class="mt-2">Daftar User</h1>
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
          <?php foreach ($users as $u) : ?>
            <tr vertical-align="middle">
              <th scope="row"><?= $i++ ?></th>
              <td><?= $u['fullname'] ?></td>
              <td><?= $u['username'] ?></td>
              <td><?= $u['email'] ?></td>
              <td><?= $u['role'] ?></td>
              <td>
                <!-- cek ulang fungsionalitas button nya -->
                <a href="<?= base_url() ?>/admin/edit-user/<?= $u['id']; ?>" class="btn btn-warning">Edit</a>
                <a href="<?= base_url() ?>/admin/deleteUser/<?= $u['id'] ?>" class="btn btn-danger" onclick="return confirm ('Apakah anda yakin?');">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </div>
</div>
<?= $this->endSection(); ?>