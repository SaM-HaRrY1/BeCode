<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <h1>List Menu</h1>
    <!-- Form Tambah Menu -->
    <form id="createForm" method="post" action="<?= base_url('/listmenu/create'); ?>">
        <h2>Tambah Menu</h2>
        <div class="mb-3">
            <label for="nama_menu" class="form-label">Nama Menu</label>
            <input type="text" class="form-control" id="nama_menu" name="nama_menu" required>
        </div>
        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis</label>
            <input type="text" class="form-control" id="jenis" name="jenis" required>
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-control" id="kategori" name="kategori" required>
                <option value="enak">enak</option>
                <option value="best">best</option>
                <option value="best seller">best seller</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" required>
        </div>
        <div class="mb-3">
            <label for="foto_menu" class="form-label">Foto Menu</label>
            <input type="text" class="form-control" id="foto_menu" name="foto_menu" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Menu</button>
    </form>
    <hr>

    <!-- List Menu -->
    <h2>Daftar Menu</h2>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Menu</th>
                <th scope="col">Jenis</th>
                <th scope="col">Kategori</th>
                <th scope="col">Harga</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <?php $no = 1; ?>
        <?php foreach ($menu as $m) : ?>
        <tbody>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $m['nama_menu']; ?></td>
                <td><?= $m['jenis']; ?></td>
                <td><?= $m['kategori']; ?></td>
                <td><?= $m['harga']; ?></td>
                <td><img src="<?= $m['foto_menu']; ?>" alt="" style="width: 80px;"></td>
                <td>
                    <!-- Form Edit Menu -->
                    <form method="post" action="<?= base_url('/listmenu/edit/' . $m['id_menu']); ?>">
                        <input type="hidden" name="id_menu" value="<?= $m['id_menu']; ?>">
                        <input type="text" name="nama_menu" value="<?= $m['nama_menu']; ?>" required>
                        <input type="text" name="jenis" value="<?= $m['jenis']; ?>" required>
                        <input type="text" name="kategori" value="<?= $m['kategori']; ?>" required>
                        <input type="text" name="harga" value="<?= $m['harga']; ?>" required>
                        <input type="text" name="foto_menu" value="<?= $m['foto_menu']; ?>" required>
                        <button type="submit" class="btn btn-secondary">Edit</button>
                    </form>

                    <!-- Form Hapus Menu -->
                    <form method="post" action="<?= base_url('/listmenu/delete/' . $m['id_menu']); ?>" style="display:inline;">
                        <input type="hidden" name="id_menu" value="<?= $m['id_menu']; ?>">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
        <?php endforeach; ?>
    </table>
</div>

<?= $this->endSection(); ?>