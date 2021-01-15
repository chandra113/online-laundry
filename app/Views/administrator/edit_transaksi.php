<?= $this->extend('template/index_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3"> Edit Detail Transaksi </h2>
            <form action="<?= base_url('/admin/edit/' . $order['nomor_invoice']); ?>" method="post">
               
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
                    <label for="status_pesanan" class="col-sm-2 col-form-label">Status Pesanan</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="status_pesanan" name="status_pesanan" value="<?= $order['status_pembayaran']; ?>" required>
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
                    <label for="nomor_ponsel" class="col-sm-2 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="nomor_ponsel" name="nomor_ponsel" value="<?= $order['nomor_ponsel']; ?>" disabled>
                    </div>
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
                        <input type="number" class="form-control" id="total_harga" name="total_harga" value="<?= $order['total_harga']; ?>" required>
                    </div>
                </div>
                
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
<?= $this->endSection(); ?>