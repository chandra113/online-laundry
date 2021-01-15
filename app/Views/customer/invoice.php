<?= $this->extend('template/index_template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            Invoice No.
            <strong><?= $invoice['nomor_invoice']; ?></strong>
            <span class="float-right"> <strong>Status:</strong> <?= $invoice['status_pembayaran']; ?></span>

        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h6 class="mb-3">Atas Nama:</h6>
                    <div>
                        <strong><?= $invoice['nama_pelanggan']; ?></strong>
                    </div>
                    <div>Nomor Telepon: <?= $invoice['nomor_ponsel']; ?></div>
                    <div>Catatan untuk Kurir: <?= $invoice['catatan']; ?></div>
                </div>
                <div class="col-sm-6">
                    <h6 class="mb-3">Alamat:</h6>
                    <div>
                        <p><?= $invoice['alamat']; ?></p>
                    </div>
                </div>
            </div>

            <div class="table-responsive-sm">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="center">#</th>
                            <th>Layanan</th>
                            <th>Kecepatan</th>

                            <th class="right">Penjemputan</th>
                            <th class="right">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="center">1</td>
                            <td class="left strong"><?= $invoice['layanan']; ?></td>
                            <td class="left"><?= $invoice['kecepatan']; ?></td>

                            <td class="right"><?= $invoice['penjemputan']; ?></td>
                            <td class="right"><?= $invoice['total_harga']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-5">

                </div>

                <div class="col-lg-4 col-sm-5 ml-auto">
                    <table class="table table-clear">
                        <tbody>
                            <tr>
                                <td class="left">
                                    <strong>Subtotal</strong>
                                </td>
                                <?php if ($invoice['penjemputan'] == 'jemput') : ?>
                                    <td class="right"><?= $invoice['total_harga'] - 5000; ?></td>
                                <?php else : ?>
                                    <td class="right"><?= $invoice['total_harga']; ?></td>
                                <?php endif; ?>
                            </tr>
                            <tr>
                                <td class="left">
                                    <strong>Biaya Penjemputan</strong>
                                </td>
                                <?php if ($invoice['penjemputan'] == 'jemput') : ?>
                                    <td class="right">5000</td>
                                <?php else : ?>
                                    <td class="right">0</td>
                                <?php endif; ?>
                            </tr>
                            <tr>
                                <td class="left">
                                    <strong>Total</strong>
                                </td>
                                <td class="right">
                                    <strong><?= $invoice['total_harga']; ?></strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>