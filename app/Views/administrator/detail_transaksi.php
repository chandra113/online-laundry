<?= $this->extend('template/index_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3"> Detail Transaksi </h2>
            <form action="<?= base_url('/admin/edit/' . $order['id']); ?>" method="post">
                <div class="form-group row">
                    <label for="nomor_invoice" class="col-sm-2 col-form-label">Nomor Invoice</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="nomor_invoice" name="nomor_invoice" autofocus value="<?= $order['nomor_invoice']; ?>" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="fullname" class="col-sm-2 col-form-label">Nama Pelanggan</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="fullname" name="fullname" value="<?= $order['nama_pelanggan']; ?>" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nomor_ponsel" class="col-sm-2 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="nomor_ponsel" name="nomor_ponsel" value="<?= $order['nomor_ponsel']; ?>" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="status_pesanan" class="col-sm-2 col-form-label">Status Pesanan</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="status_pesanan" name="status_pesanan" value="<?= $order['status_pembayaran']; ?>" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="layanan" class="col-sm-2 col-form-label">Jenis Layanan</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="layanan" name="layanan" value="<?= $order['layanan']; ?>" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="kecepatan" class="col-sm-2 col-form-label">Kecepatan</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="kecepatan" name="kecepatan" value="<?= $order['kecepatan']; ?>" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tanggal_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" placeholder="select Entry date" value="<?= $order['tanggal_masuk']; ?>" min="2020-12-01" max="2030-12-31" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jam_masuk" class="col-sm-2 col-form-label">Jam Masuk</label>
                    <div class="col-sm-6">
                        <input type="time" class="form-control" id="jam_masuk" name="jam_masuk" placeholder="Select time" value="<?= $order['jam_masuk']; ?>" min="08-00" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 form-label">Alamat</label>
                    <textarea class="col-sm-6 form-control" id="alamat" name="alamat" rows="2" disabled><?= $order['alamat']; ?></textarea>
                </div>

                <div class="form-group row">
                    <label for="catatan" class="col-sm-2 form-label">Catatan</label>
                    <textarea class="col-sm-6 form-control" id="catatan" name="catatan" rows="2" disabled><?= $order['catatan']; ?></textarea>
                </div>

                <div class="form-group row">
                    <label for="penjemputan" class="col-sm-2 col-form-label">Penjemputan</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="penjemputan" name="penjemputan" value="<?= $order['penjemputan']; ?>" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="total_harga" class="col-sm-2 col-form-label">Total Harga</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="total_harga" name="total_harga" value="<?= $order['total_harga']; ?>" disabled>
                    </div>
                </div>

                <div class="col-sm-10">
                    <a href="<?= base_url() ?>/admin/transaksi" class="btn btn-warning">Back</a>
                    <button type="submit" class="btn btn-primary">Edit Data</button>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
<?= $this->endSection(); ?>