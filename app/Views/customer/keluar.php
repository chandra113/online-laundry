<?= $this->extend('template/index_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3"> Kecepatan dan Pengambilan </h2>
            <div class="form-group row">
                <label for="sampul" class="col-sm-2 col-form-label">Kecepatan Layanan</label>
                <div class="col-sm-5">
                    <select class="form-control" id="sel1">
                        <option>Pilih Kecepatan Layanan</option>
                        <option>Reguler (2-3 Hari)</option>
                        <option>Ekspres (1-2 Hari)</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="sampul" class="col-sm-2 col-form-label">Pengambilan</label>
                <div class="col-sm-5">
                    <select class="form-control" id="sel1">
                        <option>Pilih Pengambilan</option>
                        <option>Ambil Sendiri</option>
                        <option>Diantar Kurir</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">Selanjutnya</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
</div>
<?= $this->endSection(); ?>