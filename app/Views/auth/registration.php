<?= $this->extend('template/login_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row vertical-offset-100">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Pendaftaran</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" action="<?= base_url('/auth/saveRegister') ?>" role="form" method="POST">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control <?= ($validation->hasError('fullname')) ? 'is-invalid' : ''; ?>" placeholder="Nama Lengkap" name="fullname" type="text" autofocus value="<?= old('fullname') ?>" required>
                                <div class="invalid-feedback">
                                    Tidak boleh kosong
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" placeholder="Username" name="username" type="text" value="<?= old('username') ?>" required>
                                <div class="invalid-feedback">
                                    <?= ($validation->getError('username')); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- TODO: Ubah tipe jadi integer, bisa ga ya? Biar yang ketangkep selalu angka, bkn yang lain -->
                                <input class="form-control <?= ($validation->hasError('phone_number')) ? 'is-invalid' : ''; ?>" placeholder="Nomor Telepon" name="phone_number" type="text" value="<?= old('phone_number') ?>" required>
                                <div class="invalid-feedback">
                                    <?= ($validation->getError('phone_number')); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" placeholder="E-mail" name="email" type="email" value="<?= old('email') ?>" required>
                                <div class="invalid-feedback">
                                    <?= ($validation->getError('email')); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" placeholder="Password" name="password" type="password" value="" required>
                                <div class="invalid-feedback">
                                    Tidak boleh kosong
                                </div>
                            </div>
                            <input class="btn btn-lg btn-warning btn-block" type="submit" value="Daftar">
                            <br>

                            <div class="text-center w-full p-t-23">
                                <span class="txt1">
                                    Sudah punya akun?
                                </span>
                                <a href="<?= base_url('/auth/login') ?>" class="txt2">
                                    Login disini
                                </a>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>