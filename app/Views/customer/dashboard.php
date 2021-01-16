<?= $this->extend('template/index_template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('msg') ?>
    </div>
    <div class="row">
        <div class="col">

            <h1 class="mt-2">Daftar Pesanan</h1>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nomor Invoice</th>
                        <th scope="col">Pilihan Layanan</th>
                        <th scope="col">Status Pembayaran</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($dashboard as $d) : ?>
                        <tr vertical-align="middle">
                            <th scope="row"><?= $d['nomor_invoice'] ?></th>
                            <td><?= $d['layanan'] ?> - <?= $d['kecepatan'] ?></td>
                            <td><?= $d['status_pembayaran'] ?></td>
                            <td>
                                <?php if ($d['status_pembayaran'] == 'Belum Dibayar') : ?>
                                    <a href="<?= base_url() ?>/laundry/pembayaran/<?= $d['nomor_invoice']; ?>" class="btn btn-primary">Bayar</a>
                                <?php endif; ?>
                                <a href="<?= base_url() ?>/laundry/invoice/<?= $d['nomor_invoice']; ?>" class="btn btn-primary">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>