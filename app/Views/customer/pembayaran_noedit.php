<?= $this->extend('template/index_template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Pembayaran</h2>

            <form action="<?= base_url('/laundry/redirectCheckout') ?>" method="POST">

                <div class="row mb-3">
                    <label for="nomor_invoice" class="col-sm-3 col-form-label">Nomor Invoice</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="nomor_invoice" name="nomor_invoice" value="<?= session()->get('nomor_invoice') ?>" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="phone_number" class="col-sm-3 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="phone_number" name="phone_number" value="<?= session()->get('phone_number') ?>" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nama_bank" class="col-sm-3 col-form-label">Nama Bank Pengirim</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nama_bank" name="nama_bank" required>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="nomor_rekening" class="col-sm-3 col-form-label">Nomor Rekening Pengirim</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="nomor_rekening" name="nomor_rekening"  required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="fullname" class="col-sm-3 col-form-label">Nama Pemilik Rekening</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="fullname" name="fullname" value="<?= session()->get('fullname') ?>" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="bukti_bayar" class="col-sm-3 col-form-label">Foto Bukti Bayar</label>
                    <input class="form-control" type="file" id="bukti_bayar" name="bukti_bayar" required>
                </div>
            
                <div class="form-group row">
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>