<?= $this->extend('template/index_template'); ?>

<?= $this->section('content'); ?>

<!-- TODO: Ubah halaman ini jadi yang telah didiskusikan kemarin -->
<div class="container">
    <div class="py-5 text-center">
        <h2>Checkout</h2>
    </div>

    <div class="col-md-8">
        <h2 class="mb-3">Detail Pesanan</h2>

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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis modi quas consequatur ratione. Perferendis error ut nulla repellendus minus mollitia ad, maiores sequi aliquam iste accusantium esse quibusdam ducimus inventore.</p>
            </div>
        </div>

        <br>
        
        <form class="needs-validation" novalidate action="<?= base_url() ?>">
            <div class="col-block mb-4">
                <h2>Penyerahan Laundry</h2>
                <div class="custom-control custom-radio">
                    <input id="kilat" name="paymentMethod" type="radio" class="custom-control-input" value="option1" required>
                    <label class="custom-control-label" for="kilat">Dijemput oleh driver</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="reguler" name="paymentMethod" type="radio" class="custom-control-input" value="option2" required>
                    <label class="custom-control-label" for="reguler">Antar langsung ke toko</label>
                </div>
            </div>    
            <div class="col-block mb-4">
                <h2 for="alamat" >Catatan</h2>
                <textarea class="col-md-6 form-control" id="catatan" name="catatan" rows="3" placeholder="Tuliskan Catatan untuk Kami" required></textarea>
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Pesan dan Bayar</button>
        </action=>
        <br>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>