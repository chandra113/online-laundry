<?= $this->extend('template/index_template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            Invoice No.
            <strong>2021011018170035</strong>
            <span class="float-right"> <strong>Status:</strong> Belum Dibayar</span>

        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h6 class="mb-3">Atas Nama:</h6>
                    <div>
                        <strong><?= session()->get('fullname') ?></strong>
                    </div>
                    <div>Alamat</div>
                    <div>
                        <p><?= session()->get('alamat') ?></p>
                    </div>
                    <div>
                        <p><?= session()->get('email') ?></p>
                    </div>
                    <div>Nomor Telepon: 0813-sekian</div>
                    <div>Catatan untuk Kurir: Lope Yu</div>
                </div>
            </div>

            <div class="table-responsive-sm">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="center">#</th>
                            <th>Item</th>
                            <th>Description</th>

                            <th class="right">Unit Cost</th>
                            <th class="center">Qty</th>
                            <th class="right">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="center">1</td>
                            <td class="left strong">Origin License</td>
                            <td class="left">Extended License</td>

                            <td class="right">$999,00</td>
                            <td class="center">1</td>
                            <td class="right">$999,00</td>
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
                                <td class="right">$8.497,00</td>
                            </tr>
                            <tr>
                                <td class="left">
                                    <strong>Discount (20%)</strong>
                                </td>
                                <td class="right">$1,699,40</td>
                            </tr>
                            <tr>
                                <td class="left">
                                    <strong>PPN (10%)</strong>
                                </td>
                                <td class="right">$679,76</td>
                            </tr>
                            <tr>
                                <td class="left">
                                    <strong>Total</strong>
                                </td>
                                <td class="right">
                                    <strong>$7.477,36</strong>
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