<?= $this->extend('template/index_template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Waktu Masuk Laundry</h2>
            
            <form action="<?= base_url('admin/save') ?>" method="POST">
                <?= csrf_field(); ?>
                
                <div class="form-group row">
                    <label for="judul" class="col-sm-3 col-form-label">Tanggal Masuk</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control" id="date entry" name="date entry" placeholder="select Entry date" value="<?= old('date entry') ?>" min= "2020-12-01" max="2030-12-31" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pengarang" class="col-sm-3 col-form-label">Jam Masuk</label>
                    <div class="col-sm-5">
                        
                        <input type="time" class="form-control" id="time entry" name="time entry" placeholder="Select time" value="<?= old('time entry') ?>" min="08-00" required>
                    </div>
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