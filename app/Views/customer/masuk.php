<?= $this->extend('template/index_template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Data Laundry Masuk</h2>

            <form action="<?= base_url('laundry/keluar') ?>" method="POST">
                <?= csrf_field(); ?>

                <div class="row mb-3">
                    <label for="nama_pelanggan" class="col-sm-3 col-form-label">Nama Pelanggan</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="customer name" name="customer name" placeholder="Masukkan Nama Pelanggan" value="<?= old('customer name') ?>" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="phone number" class="col-sm-3 col-form-label">Nomor Ponsel</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="phone number" name="phone number" placeholder="Masukkan Nomor Ponsel" value="<?= old('phone number') ?>" required>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Kecepatan</label>
                    <fieldset class="row mb-16">
                        <div class="col-md-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" required>
                                <label class="form-check-label" for="gridRadios1">
                                Kilat (1-2 Hari)
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2" required>
                                <label class="form-check-label" for="gridRadios2">
                                Reguler (3-4 Hari)
                                </label>
                            </div>
                        </div>
                    </fieldset>
                </div>


                <div class="form-group row">
                    <label for="tanggal_masuk" class="col-sm-3 col-form-label">Tanggal Masuk</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" id="date entry" name="date entry" placeholder="select Entry date" value="<?= old('date entry') ?>" min="2020-12-01" max="2030-12-31" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jam_masuk" class="col-sm-3 col-form-label">Jam Masuk</label>
                    <div class="col-sm-6">

                        <input type="time" class="form-control" id="time entry" name="time entry" placeholder="Select time" value="<?= old('time entry') ?>" min="08-00" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="alamat" class="col-md-3 form-label">Alamat</label>
                    <textarea class="col-md-6 form-control" id="alamat" rows="3" placeholder="Masukkan Alamat Pelanggan" required></textarea>
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