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

                    <a href="<?= base_url('promo') ?>">
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

                    <a href="<?= base_url('promo') ?>">
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

                    <a href="<?= base_url('promo') ?>">
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
      <!-- Footer -->
      <?= $this->include('templates/footer'); ?>
    <!-- End of Footer -->
