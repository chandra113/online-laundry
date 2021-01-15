<?= $this->extend('template/index_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3"> Edit User </h2>
            <form action="<?= base_url('/admin/saveEditUser/' . $user['id']); ?>" method="post">
                <div class="form-group row">
                    <label for="fullname" class="col-sm-2 col-form-label">fullname</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="fullname" name="fullname" value="<?= $user['fullname']; ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="username" name="username" value="<?= $user['username']; ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="role" class="col-sm-2 col-form-label">role</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="role" name="role" value="<?= $user['role']; ?>" required>
                    </div>
                </div>

                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>