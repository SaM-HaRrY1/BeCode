<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard</title>
</head>

<body>
    <!-- NAVBAR -->
    <?= $this->include('templates/navbar'); ?>

    <!-- MAIN -->
    <div class="flex-1 border-e bg-white">
        <!-- SEARCH BAR -->
        <section class="bg-gray-50">
            <div class="p-8 md:p-12 lg:px-16 lg:py-24">
                <div class="mx-auto max-w-lg text-center">
                    <h2 class="text-2xl font-bold text-gray-900 md:text-3xl">
                        DESIGN NO 1
                    </h2>

                    <p class="hidden text-gray-500 sm:mt-4 sm:block">
                        Kami menyediakan semua design yang terbaik dari terbaik, semua design kami sudah teruji dan
                        terbukti efektif.
                    </p>
                </div>

                <?php if (!empty($products)): ?>
                    <div class="mx-auto mt-8 max-w-xl">
                        <form action="/search/v" method="get" class="sm:flex sm:gap-4">
                            <div class="sm:flex-1">
                                <label for="email" class="sr-only">Cari Design</label>

                                <input type="text" placeholder="Cari Design" name="search"
                                    value="<?= isset($keyword) ? $keyword : ''; ?>" class="w-full rounded-md border-gray-200 bg-white p-3 text-gray-700 shadow-sm transition
                            focus:border-white focus:outline-none focus:ring focus:ring-gray-400" />
                            </div>

                            <button type="submit"
                                class="group mt-4 flex w-full items-center justify-center gap-2 rounded-md bg-gray-700 px-5 py-3 text-white transition focus:outline-none focus:ring focus:ring-gray-400 sm:mt-0 sm:w-auto">
                                <span class="text-sm font-medium"> Cari </span>

                                <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </button>
                        </form>
                    </div>
                <?php else: ?>
                    <div class="mx-auto mt-8 max-w-xl">
                        <form action="/search/v" method="get" class="sm:flex sm:gap-4">
                            <div class="sm:flex-1">
                                <label for="email" class="sr-only">Cari Design</label>

                                <input type="text" placeholder="Cari Design" name="search"
                                    value="<?= isset($keyword) ? $keyword : ''; ?>" class="w-full rounded-md border-gray-200 bg-white p-3 text-gray-700 shadow-sm transition
                            focus:border-white focus:outline-none focus:ring focus:ring-gray-400" />
                            </div>

                            <button type="submit"
                                class="group mt-4 flex w-full items-center justify-center gap-2 rounded-md bg-gray-700 px-5 py-3 text-white transition focus:outline-none focus:ring focus:ring-gray-400 sm:mt-0 sm:w-auto">
                                <span class="text-sm font-medium"> Cari </span>

                                <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </button>
                        </form>
                    </div>

                    <p class="font-bold mt-8 text-center text-gray-700">Tidak ada Produk yang ditemukan dari
                        "<?= $keyword; ?>".</p>
                <?php endif; ?>
            </div>
        </section>

        <!-- CONTENT -->
        <div class="flex justify-center content-center max-sm:flex-wrap pb-10 bg-gray-50">
            <?php foreach ($products as $product): ?>
                <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg mx-3">
                    <?php $imagePath = "/uploads/" . htmlspecialchars($product['image'], ENT_QUOTES, 'UTF-8'); ?>
                    <img src="<?= $imagePath ?>" alt="<?= htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8') ?>"
                        class="h-56 w-full object-cover" />

                    <div class="bg-white p-2 sm:p-6">
                        <a href="submenu/<?= htmlspecialchars($product['id'], ENT_QUOTES, 'UTF-8'); ?>">
                            <h3 class="mt-0.5 text-lg text-gray-900">
                                <?= htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8'); ?>
                            </h3>
                        </a>

                        <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                            Stock : <?= htmlspecialchars($product['stock'], ENT_QUOTES, 'UTF-8'); ?>
                        </p>
                        <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                            Price : <?= number_format($product['price'], 2); ?>
                        </p>
                    </div>
                    <form action="/cart/add" method="post" class="p-2 m-2">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="product_id"
                            value="<?= htmlspecialchars($product['id'], ENT_QUOTES, 'UTF-8'); ?>">
                        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                            Add to Cart
                        </button>
                    </form>
                </article>
            <?php endforeach; ?>
        </div>
        <!-- FOOTER -->
        <?= $this->include('templates/footer') ?>
    </div>
</body>

</html>