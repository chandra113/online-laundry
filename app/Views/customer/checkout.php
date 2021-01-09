<?= $this->extend('template/index_template'); ?>

<?= $this->section('content'); ?>

<!-- TODO: Ubah halaman ini jadi yang telah didiskusikan kemarin -->
<div class="container">
    <div class="py-5 text-center">
        <h2>Checkout</h2>
    </div>

    <div class="col-md-8">
        <h3 class="mb-3">Detail Pesanan</h3>

        <div class="row">
            <div class="col-md-6 mb-3">
                <h5 for="fullname">Nama Pelanggan</h5>
                <p><?= session()->get('fullname') ?></p>
            </div>

            <div class="col-md-6 mb-3">
                <h5 for="phone number">Nomor Telepon</h5>
                <p><?= session()->get('phone_number') ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <h5 for="kecepatan">Kecepatan Layanan</h5>
                <p>Reguler (3-4 Hari)</p>
            </div>

            <div class="col-md-6 mb-3">
                <h5 for="time entry">Waktu Masuk</h5>
                <p>08.00, 9 Januari 2021</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <h5 for="alamat">Alamat</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet ex sagittis, mollis mi sit amet, sodales sem.</p>
            </div>
        </div>

        <h4 class="mb-3">Penyerahan Laundry</h4>

        <form class="needs-validation" novalidate>
            <fieldset class="row mb-16">
                <div class="col-md-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jemput" id="jemput" required>
                        <label class="form-check-label" for="jemput">
                            Dijemput oleh driver
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="antar" id="antar" required>
                        <label class="form-check-label" for="antar">
                            Antar langsung ke toko
                        </label>
                    </div>
                </div>
            </fieldset>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Pesan dan Bayar</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>