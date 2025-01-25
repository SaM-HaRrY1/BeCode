<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="Img/Logo2.png" type="image/x-icon"/>
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="<?= base_url(); ?>/img/Logo2.png" alt="Logo" width="100px" height="auto" class="d-inline-block align-text">
                Keranjang Belanja
            </a>
        </div>
    </nav>
    <div class="container mt-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="keranjangList">
            </tbody>
        </table>
        <button class="btn btn-success" onclick="redirectBeli()">Beli</button>
    </div>

    <script>
        let keranjang = JSON.parse(localStorage.getItem("keranjang")) || [];
        const keranjangList = document.getElementById("keranjangList");

        function renderKeranjang() {
            console.log("Memulai render keranjang...");
            keranjangList.innerHTML = "";
            if (keranjang.length === 0) {
                console.log("Keranjang kosong.");
                keranjangList.innerHTML = `
                    <tr>
                        <td colspan="6" class="text-center">Keranjang Anda Kosong</td>
                    </tr>
                `;
                return;
            }
            console.log("Data keranjang:", keranjang);
            keranjang.forEach((produk, index) => {
                if (!produk.jumlah || produk.jumlah < 1) produk.jumlah = 1;
                keranjangList.innerHTML += `
                    <tr>
                        <td><img src="${produk.gambar}" alt="${produk.nama}" style="width: 80px;"></td>
                        <td>${produk.nama}</td>
                        <td>Rp${Number(produk.harga).toLocaleString()}</td>
                        <td>
                            <button class="btn btn-sm btn-secondary" onclick="updateJumlah(${index}, -1)">-</button>
                            <span class="mx-2">${produk.jumlah}</span>
                            <button class="btn btn-sm btn-secondary" onclick="updateJumlah(${index}, 1)">+</button>
                        </td>
                        <td>Rp${(produk.harga * produk.jumlah).toLocaleString()}</td>
                        <td><button class="btn btn-danger" onclick="hapusProduk(${index})">Hapus</button></td>
                    </tr>
                `;
            });
        }

        function updateJumlah(index, delta) {
            keranjang[index].jumlah = parseInt(keranjang[index].jumlah) + delta;
            if (keranjang[index].jumlah <= 0) {
                keranjang.splice(index, 1);
            }
            localStorage.setItem("keranjang", JSON.stringify(keranjang));
            renderKeranjang();
        }

        function hapusProduk(index) {
            keranjang.splice(index, 1);
            localStorage.setItem("keranjang", JSON.stringify(keranjang));
            renderKeranjang();
        }

        function tambahProduk(id_menu, nama, harga, gambar) {
            const produkIndex = keranjang.findIndex(
                (item) => item.nama.trim().toLowerCase() === nama.trim().toLowerCase());
            if (produkIndex > -1) {
                keranjang[produkIndex].jumlah += 1;
            } else {
                keranjang.push({
                    id: id_menu,
                    nama: nama.trim(),
                    harga: parseFloat(harga),
                    gambar: gambar,
                    jumlah: 1,
                });
            }
            localStorage.setItem("keranjang", JSON.stringify(keranjang));
            renderKeranjang();
        }

        function redirectBeli() {
            window.location.href = 'beli';
        }

        window.onload = function() {
            renderKeranjang();
        }
    </script>
</body>

</html>
