<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class= "container">
    <h1>List Menu Kategori Makanan</h1>
<table class="table table-dark table-hover">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Makanan</th>
            <th scope="col">Jenis</th>
            <th scope="col">Kategori</th>
            <th scope="col">Harga</th>
            <th scope="col">Foto</th>
            <!-- <th scope="col">Aksi</th> -->
            </tr>
        </thead>
        <?php $no = 1; ?>
        <?php foreach ($makan as $m) : ?>
        <tbody>
            <tr>
            <td><?= $no++; ?></td>
            <th><?= $m['nama_menu']; ?></th>
            <td><?= $m['jenis']; ?></td>
            <td><?= $m['kategori']; ?></td>
            <td><?= $m['harga']; ?></td>
            <td><?= $m['foto_menu']; ?></td>
            <!-- <td><button class="btn btn-secondary">edit</button> <button class="btn btn-danger">delete</button></td> -->
            </tr>
        </tbody>
        <?php endforeach; ?>
    </table>
</div>


</div>
<?= $this->endSection(); ?>