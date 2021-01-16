<?= $this->extend('template/index_template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Pembayaran</h2>

            <form action="<?= base_url('/laundry/savePembayaran/' . $invoice['id']); ?>" method="POST" enctype="multipart/form-data">

                <div class="row mb-3">
                    <label for="nomor_invoice" class="col-sm-3 col-form-label">Nomor Invoice</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="nomor_invoice" name="nomor_invoice" value="<?= $invoice['nomor_invoice'] ?>" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nama_pelanggan" class="col-sm-3 col-form-label">Nama Pelanggan</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="<?= $invoice['nama_pelanggan'] ?>" disabled>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="phone_number" class="col-sm-3 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="phone_number" name="phone_number" value="<?= $invoice['nomor_ponsel'] ?>" readonly>
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
                        <input type="number" class="form-control" id="nomor_rekening" name="nomor_rekening" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="fullname" class="col-sm-3 col-form-label">Nama Pemilik Rekening</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="fullname" name="fullname" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="bukti_bayar" class="col-sm-2 col-form-label">Foto Bukti Bayar</label>
                    <div class="col-sm-2">
                        <img src="/img/default.jpg" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input " id="bukti_bayar" name="bukti_bayar" onchange=" previewImg()" required>
                            <label class="custom-file-label" for="bukti_bayar">Pilih Gambar</label>

                        </div>
                    </div>
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

<!-- JScript to upload the file -->
<script>
    function previewImg() {
        const bukti_bayar = document.querySelector('#bukti_bayar');
        const bukti_bayarLabel = document.querySelector('.custom-file-label');
        const imgPreview = document.querySelector('.img-preview');

        bukti_bayarLabel.textContent = bukti_bayar.files[0].name;

        const filebukti_bayar = new FileReader();
        filebukti_bayar.readAsDataURL(bukti_bayar.files[0]);

        filebukti_bayar.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>

<?= $this->endSection(); ?>