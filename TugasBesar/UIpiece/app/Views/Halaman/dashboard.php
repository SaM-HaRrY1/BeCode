<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>UIpiece</title>

<body>
    <!-- Navbar -->
    <?= $this->include('templates/navdash'); ?>
    <!-- End of Navbar -->

    <!-- CONTENT 1 -->
    <section
        class="relative bg-[url(https://img.freepik.com/free-photo/representation-user-experience-interface-design_23-2150169860.jpg?t=st=1736996131~exp=1736999731~hmac=4a03caa9be6aaef0a9b6b14c32412ef2633517ed7f88b0a917a137f6ebe61910&w=900)] bg-cover bg-center bg-no-repeat">
        <div
            class="absolute inset-0 bg-gray-900/75 sm:bg-transparent sm:from-gray-900/95 sm:to-gray-900/25 sm:bg-gradient-to-r sm:bg-gradient-to-l">
        </div>

        <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
            <div class="max-w-xl text-start ltr:sm:text-left rtl:sm:text-right">
                <h1 class="text-3xl font-extrabold text-white sm:text-5xl">
                    Ayo cari UI sesuai selera Kamu di UIpiece!🎉🎉

                    <strong class="block font-extrabold text-rose-500"> Lets go! </strong>
                </h1>

                <p class="mt-4 max-w-lg text-white sm:text-xl/relaxed">
                    Selamat datang di website kami, kami menyediakan berbagai jenis tampilan UI yang sesuai dengan
                    keinginan
                    kamu.
                </p>

                <div class="mt-8 flex flex-wrap gap-4 text-center">
                    <a href="<?= base_url('menu'); ?>"
                        class="block w-full rounded bg-gray-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-gray-700 focus:outline-none active:bg-white sm:w-auto">
                        Ayo Cari!
                    </a>

                    <a href="#About"
                        class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-gray-900 shadow hover:text-gray-600 focus:outline-none active:text-gray-300 sm:w-auto">
                        Liat Promo
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTENT 1 END -->

    <!-- CONTENT 2 -->
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8" id="About">
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Sudah banyak orang yang memakai design UI dari
                kami.</h2>

            <p class="mt-4 text-gray-500 sm:text-xl">
                UI Design milik kami bukanlah design BIASA.Design yang kami tawarkan sudah pasti
                akan menarik banyak pengunjung menuju Website Anda.
            </p>
        </div>

        <dl class="mt-6 grid grid-cols-1 gap-4 sm:mt-8 sm:grid-cols-2 lg:grid-cols-4">
            <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                <dt class="order-last text-lg font-medium text-gray-500">Total Penjualan</dt>

                <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">Rp 1jt</dd>
            </div>

            <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                <dt class="order-last text-lg font-medium text-gray-500">Total Templates</dt>

                <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">100+</dd>
            </div>

            <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                <dt class="order-last text-lg font-medium text-gray-500">Rating Kepuasan</dt>

                <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">4.5/5.0</dd>
            </div>

            <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                <dt class="order-last text-lg font-medium text-gray-500">Penggunaan UI</dt>

                <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">100+</dd>
            </div>
        </dl>
    </div>
    <!-- CONTETN 2 END -->

    <!-- CONTENT 3 -->
    <h1 class="m-5 text-4xl font-bold " aria-label="Global">INFORMASI TERBARU!!</h1>
    <div class="flex justify-center content-center max-sm:flex-wrap">

        <article class="relative overflow-hidden rounded-lg shadow transition hover:shadow-lg m-5">
            <img alt=""
                src="https://img.freepik.com/free-photo/vertical-banners-sales-promo_23-2150653391.jpg?t=st=1736996592~exp=1737000192~hmac=b13316380c37971898fe928a0bb773916dd3321cd9b61150de14cc96de1c54ef&w=360"
                class="absolute inset-0 h-full w-full object-cover" />

            <div class="relative bg-gradient-to-t from-gray-900/50 to-gray-900/25 pt-32 sm:pt-48 lg:pt-64">
                <div class="p-4 sm:p-6">
                    <time datetime="2022-10-10" class="block text-xs text-white/90"> 1st Jan 2025 </time>

                    <a href="<?= base_url('dashboard/promo')?>">
                        <h3 class="mt-0.5 text-lg text-white">Promo Awal Tahun!</h3>
                    </a>

                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-white/95">
                        Jangan lewatkan promo awal tahun! Semua produk kami diskon 50%. Segera dapatkan barang impian
                        Anda dengan harga setengah. Belanja sekarang sebelum kehabisan! 🎉🛍️✨
                    </p>
                </div>
            </div>
        </article>

        <article class="relative overflow-hidden rounded-lg shadow transition hover:shadow-lg m-5">
            <img alt=""
                src="https://img.freepik.com/free-vector/abstract-new-arrival-composition-with-flat-design_23-2147884713.jpg?t=st=1736996913~exp=1737000513~hmac=04123066aa060ff2c859fe59e021aad9e5137a0ccdc60b30fc88a66550c7d66c&w=740"
                class="absolute inset-0 h-full w-full object-cover" />

            <div class="relative bg-gradient-to-t from-gray-900/50 to-gray-900/25 pt-32 sm:pt-48 lg:pt-64">
                <div class="p-4 sm:p-6">
                    <time datetime="2022-10-10" class="block text-xs text-white/90"> 1st Jan 2025 </time>

                    <a href="<?= base_url('dashboard/promo')?>">
                        <h3 class="mt-0.5 text-lg text-white">New Product!</h3>
                    </a>

                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-white/95">
                        Kenalkan produk terbaru kami yang canggih dan penuh gaya! Desain elegan dan teknologi mutakhir
                        untuk pengalaman pengguna maksimal. Segera miliki dan nikmati keunggulannya sekarang juga! 🚀✨
                    </p>
                </div>
            </div>
        </article>

        <article class="relative overflow-hidden rounded-lg shadow transition hover:shadow-lg m-5">
            <img alt=""
                src="https://img.freepik.com/free-photo/numbers-kit-black-friday-sign-with-shopping-bag_23-2147930788.jpg?t=st=1736997106~exp=1737000706~hmac=5e18070fb444ee4666c4950965d2b60a5185f8e22b7fd8d4a20589ad8dc5dd93&w=360"
                class="absolute inset-0 h-full w-full object-cover" />

            <div class="relative bg-gradient-to-t from-gray-900/50 to-gray-900/25 pt-32 sm:pt-48 lg:pt-64">
                <div class="p-4 sm:p-6">
                    <time datetime="2022-10-10" class="block text-xs text-white/90"> 6th Jan 2025 </time>

                    <a href="<?= base_url('dashboard/promo')?>">
                        <h3 class="mt-0.5 text-lg text-white">Black Friday Sale!</h3>
                    </a>

                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-white/95">
                        Siap-siap untuk Black Friday Sale kami! Diskon hingga 50% untuk semua produk favorit Anda.
                        Jangan lewatkan kesempatan ini untuk belanja hemat. Segera mulai belanja sekarang! 🛍️🔥
                    </p>
                </div>
            </div>
        </article>
    </div>
    <!-- CONTENT 3 END -->

    <!-- TESTIMONI -->
    <section class="bg-white">
        <div class="m-8 p-4 border border-gray-200 rounded-lg">
            <form id="testimoniForm" class="space-y-4">
                <div>
                    <label for="testimoni_text" class="block text-sm font-medium text-gray-700">Testimoni
                        Anda</label>
                    <textarea id="testimoni_text" name="testimoni_text" rows="4"
                        class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required></textarea>
                </div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    Kirim Testimoni
                </button>
            </form>
            <!-- Alert Messages -->
            <div id="alertMessage" class="mt-4 hidden"></div>
        </div>

        <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
            <div class="max-w-7xl items-end justify-between sm:flex sm:pe-6 lg:pe-8">
                <h2 class="max-w-xl text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
                    Baca Testimoni Pembeli
                </h2>
            </div>

            <!-- Daftar Testimoni -->
            <div id="testimoniList" class="space-y-4 p-3 mt-3 mx-1 border border-gray-500 rounded-lg">
                <?php if (!empty($testimonis) && is_array($testimonis)): ?>
                    <?php foreach ($testimonis as $testimoni): ?>
                        <div class="p-4 border border-gray-300 rounded-lg mx-2">
                            <p class="text-white"><?= esc($testimoni['testimoni_text']) ?></p>
                            <div class="mt-2 text-sm text-white">
                                <span>Dibuat: <?= date('d/m/Y H:i', strtotime($testimoni['created_at'])) ?></span>
                            </div>
                            <div class="mt-2">
                                <button onclick="editTestimoni(<?= $testimoni['id_testimoni'] ?>)"
                                    class="text-blue-600 hover:underline">Edit</button>
                                <button onclick="deleteTestimoni(<?= $testimoni['id_testimoni'] ?>)"
                                    class="text-red-600 hover:underline ml-4">Hapus</button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-gray-600">Belum ada testimoni.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- TESTIMONI END -->
    <!-- MAIN END -->

    <!-- Footer -->
    <?= $this->include('templates/footer'); ?>
    <!-- End of Footer -->

    <script>
        // Cek jika pengguna sudah login 
        if (sessionStorage.getItem('isLoggedIn')) {
            window.location.href = '/dashboard';
        }
        window.addEventListener('load', function () { // Menambahkan state baru agar back button tidak kembali ke halaman login 
            history.pushState(null, null, location.href);
            window.onpopstate = function () { history.go(1); };
        });

        //JS testimoni
        document.getElementById('testimoniForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const formData = new FormData(this);

            fetch('<?= base_url('testimoni/save') ?>', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        // Reset form
                        this.reset();

                        // Tampilkan pesan sukses
                        showAlert('success', data.message);

                        // Refresh daftar testimoni
                        refreshTestimoniList();
                    } else {
                        showAlert('error', data.message);
                    }
                })
                .catch(error => {
                    showAlert('error', 'Terjadi kesalahan saat mengirim testimoni.');
                });
        });

        function showAlert(type, message) {
            const alertDiv = document.getElementById('alertMessage');
            alertDiv.className = `mt-4 p-4 rounded-lg ${type === 'success' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700'}`;
            alertDiv.textContent = message;
            alertDiv.classList.remove('hidden');

            // Sembunyikan alert setelah 3 detik
            setTimeout(() => {
                alertDiv.classList.add('hidden');
            }, 3000);
        }

        function refreshTestimoniList() {
            fetch('<?= base_url('testimoni/getList') ?>')
                .then(response => response.text())
                .then(html => {
                    document.getElementById('testimoniList').innerHTML = html;
                });
        }

        function deleteTestimoni(id) {
            if (confirm('Apakah Anda yakin ingin menghapus testimoni ini?')) {
                fetch(`<?= base_url('testimoni/delete') ?>/${id}`, {
                    method: 'DELETE'
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            showAlert('success', data.message);
                            refreshTestimoniList();
                        } else {
                            showAlert('error', data.message);
                        }
                    });
            }
        }

        function editTestimoni(id) {
            fetch(`<?= base_url('testimoni/get') ?>/${id}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('testimoni_text').value = data.testimoni_text;
                    // Tambahkan ID tersembunyi untuk update
                    const hiddenInput = document.createElement('input');
                    hiddenInput.type = 'hidden';
                    hiddenInput.name = 'id_testimoni';
                    hiddenInput.value = id;
                    document.getElementById('testimoniForm').appendChild(hiddenInput);
                });
        }
    </script>
</body>

</head>