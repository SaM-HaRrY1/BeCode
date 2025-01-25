<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli</title>
    <link rel="stylesheet" href="Engine/stylebeli.css">
    <link rel="icon" href="Img/Logo2.png" type="image/x-icon"/>
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid d-flex align-items-center">
            <a class="navbar-brand d-flex align-items-center" href="<?= base_url('menu'); ?>">
                <img src="../img/Logo2.png" alt="Logo" width="100px" height="auto" class="d-inline-block">
                <span>HAVENAGEN</span>
            </a>
        </div>
    </nav>
    <div id="struk" class="card" style="display:none;">
        <h3>Struk Pembelian</h3>
        <div id="struk-details"></div>
    </div>
    <div class="container mt-5">
        <h3>Pembayaran</h3>
        <h5>Pilih Metode Pembayaran:</h5>
        <ul>
            <li>Bank BCA: <strong>123-456-7890</strong> (a.n Havenagen) </li>
            <li>Bank Mandiri: <strong>123-456-78902</strong> (a.n Havenagen)</li>
        </ul>
        <p>Silahkan transfer ke rekening di atas dan konfirmasi Pembayaran Anda:</p>
        <div class="form-container">
            <form id="konfirmasiForm">
                <div class="mb-3">
                    <label for="namaPengirim" class="form-label">Nama Pengirim</label>
                    <input type="text" class="form-control" id="namaPengirim" placeholder="Nama Pengirim" required>
                </div>
                <div class="mb-3">
                    <label for="nomorRekening" class="form-label">Nomor Rekening</label>
                    <input type="text" class="form-control" id="nomorRekening" placeholder="Nomor Rekening Anda" required>
                </div>
                <button type="submit" class="btn btn-primary">Konfirmasi Pembayaran</button>
            </form>
        </div>
    </div>

    <script>
        let keranjang = JSON.parse(localStorage.getItem("keranjang")) || [];

        function showStruk(dataTransaksi) {
            const struk = document.getElementById("struk");
            const strukDetails = document.getElementById("struk-details");
            let strukContent = `<p>Nama Pengirim: ${dataTransaksi.namaPengirim}</p>`;
            strukContent += `<p>Nomor Rekening: ${dataTransaksi.nomorRekening}</p>`;
            strukContent += '<h4>Rincian Pembelian:</h4>';
            let totalHarga = 0;
            dataTransaksi.keranjang.forEach((item) => {
                strukContent += `
                    <div>
                        <img src="${item.gambar}" alt="${item.nama}" style="width: 80px;">
                        <p>Nama: ${item.nama}</p>
                        <p>Harga: Rp${Number(item.harga).toLocaleString()}</p>
                        <p>Jumlah: ${item.jumlah}</p>
                    </div>
                `;
                totalHarga += item.harga * item.jumlah;
            });
            strukContent += `<h3>Total Harga: Rp${Number(totalHarga).toLocaleString()}</h3>`;
            strukDetails.innerHTML = strukContent;
            struk.style.display = "block";
        }

        document.getElementById("konfirmasiForm").onsubmit = function (e) {
            e.preventDefault();
            const namaPengirim = document.getElementById("namaPengirim").value;
            const nomorRekening = document.getElementById("nomorRekening").value;

            if (namaPengirim && nomorRekening) {
                const dataTransaksi = {
                    keranjang: keranjang.map(item => ({
                        id: item.id_menu, // Pastikan menggunakan id_menu
                        nama: item.nama,
                        gambar: item.gambar,
                        jumlah: item.jumlah,
                        harga: item.harga
                    })),
                    namaPengirim: namaPengirim,
                    nomorRekening: nomorRekening
                };

                console.log('Data transaksi yang dikirim:', dataTransaksi);

                fetch('simpan_transaksi', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(dataTransaksi)
                })
                .then(response => {
                    console.log('Respons status:', response.status);
                    return response.json();
                })
                .then(data => {
                    console.log('Respons dari server:', data);
                    if (data.status === 'success') {
                        localStorage.removeItem("keranjang");
                        showStruk(dataTransaksi);
                        alert("Terima kasih! Konfirmasi pembayaran Anda telah diterima. Silakan screenshot struk ini dan tunjukkan kepada kasir. Anda akan dialihkan ke halaman berikutnya dalam 10 detik.");
                        setTimeout(() => {
                            window.location.href = '/landing';
                        }, 10000); 
                    } else {
                        alert(data.message);
                    }
                })
                .catch(error => console.error('Error:', error));
            } else {
                alert("Harap lengkapi semua data!");
            }
        };

        window.onload = function() {
            renderBeliDetails();
        }
    </script>
</body>
</html>
