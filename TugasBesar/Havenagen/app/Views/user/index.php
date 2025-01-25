<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
<h1>Data Transaksi</h1>
<div class="container mt-5">
        <h2>Pesanan Pelanggan</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Pengirim</th>
                    <th>Menu yang Dipesan</th>
                    <th>Total Harga</th>
                    <th>Tanggal Transaksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pesanan as $p) : ?>
                    <tr>
                        <td><?= $p['nama_pengirim'] ?></td>
                        <td><?= $p['menu_yang_dipesan'] ?></td>
                        <td>Rp<?= number_format($p['total_harga'], 0, ',', '.') ?></td>
                        <td><?= $p['tgl_transaksi'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>