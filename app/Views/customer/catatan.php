<?= $this->extend('template/index_template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Catatan untuk Kurir</h2>

            <!-- TODO: Kasih method POST dll agar bisa passing data ke /laundry/checkout -->

            <form action="<?= base_url('/laundry/invoice') ?>">

                <div class="row mb-3">
                    <label for="alamat" class="col-md-3 form-label">Catatan</label>
                    <textarea class="col-md-6 form-control" id="catatan" name="catatan" rows="3" placeholder="Tuliskan Catatan untuk Kurir" required></textarea>
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