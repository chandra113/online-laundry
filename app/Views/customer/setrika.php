<?= $this->extend('template/index_template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Layanan Setrika</h2>

            <form action="<?= base_url('/laundry/redirectCheckout') ?>" method="POST">

                <div class="row mb-3">
                    <label for="fullname" class="col-sm-3 col-form-label">Nama Pelanggan</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Masukkan Nama Pelanggan" value="<?= session()->get('fullname') ?>" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="phone_number" class="col-sm-3 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="phone_number" name="phone_number" placeholder="Masukkan Nomor Telepon" value="<?= session()->get('phone_number') ?>" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Kecepatan</label>
                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="kilat" name="kecepatan" type="radio" class="custom-control-input" value="Kilat (1-2 Hari)" required>
                            <label class="custom-control-label" for="kilat">Kilat (1-2 Hari)</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="reguler" name="kecepatan" type="radio" class="custom-control-input" value="Reguler (3-4 Hari)" required>
                            <label class="custom-control-label" for="reguler">Reguler (3-4 Hari)</label>
                        </div>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="tanggal_masuk" class="col-sm-3 col-form-label">Tanggal Masuk</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" placeholder="select Entry date" value="<?= old('tanggal_masuk') ?>" min="2020-12-01" max="2030-12-31" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jam_masuk" class="col-sm-3 col-form-label">Jam Masuk</label>
                    <div class="col-sm-6">
                        <input type="time" class="form-control" id="jam_masuk" name="jam_masuk" placeholder="Select time" value="<?= old('jam_masuk') ?>" min="08-00" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="alamat" class="col-md-3 form-label">Alamat</label>
                    <textarea class="col-md-6 form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan Alamat Pelanggan" required></textarea>
                </div>

                <div class="form-group row">
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn-primary">Selanjutnya</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>