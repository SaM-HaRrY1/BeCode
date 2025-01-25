<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <!-- NAVBAR -->
    <?= $this->include('templates/navbar'); ?>

    <!-- CONTENT 1 -->

    <div class="flex-1 border-e bg-white block m-5">
        <?php $imagePath = "/uploads/" . htmlspecialchars($product['image'], ENT_QUOTES, 'UTF-8'); ?>
        <img src="<?= $imagePath ?>" alt="<?= htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8') ?>"
            class="h-56 w-full rounded-bl-3xl rounded-tr-3xl object-cover sm:h-64 lg:h-72" />
    </div>
    <!-- CONTENT 1 END -->

    <!-- CONTENT 2 -->
    <?php if (isset($product) && !empty($product)): ?>
        <div class="flow-root m-6">
            <dl class="-my-3 divide-y divide-gray-900 text-sm p-3">
                <div class="grid grid-cols-1 gap-1 py-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Title</dt>
                    <dd class="text-gray-900 sm:col-span-2"><?= $product['name']; ?></dd>
                </div>

                <div class="grid grid-cols-1 gap-1 py-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Stock</dt>
                    <dd class="text-gray-900 sm:col-span-2"><?= $product['stock']; ?></dd>
                </div>

                <div class="grid grid-cols-1 gap-1 py-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Price</dt>
                    <dd class="text-gray-900 sm:col-span-2"><?= number_format($product['price'], 2); ?></dd>
                </div>
            </dl>
        </div>

        <div class="flex justify-end items-end mb-12 mr-5">
            <div class="mr-1">
                <a href="<?= base_url('visit/menu') ?>"
                    class="inline-block rounded-md border-e px-4 py-2 text-sm font-medium bg-blue-500 text-white hover:bg-blue-600 focus:relative">Back</a>
            </div>

            <form action="/cart/add" method="post" class="">
                <?= csrf_field(); ?>
                <input type="hidden" name="product_id" value="<?= $product['id']; ?>">
                <button type="submit"></button>
                <span class="inline-flex overflow-hidden rounded-md border bg-gray-900 shadow-sm ml-3">
                    <button
                        class="inline-block border-e px-4 py-2 text-sm font-medium bg-green-500 text-white hover:bg-green-600 focus:relative">
                        Add Cart
                    </button>

                    <button class="inline-block px-4 py-2 bg-green-500 text-white hover:bg-green-600 focus:relative"
                        title="View Orders">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                        </svg>
                    </button>
                </span>
                </button>
            </form>
        <?php else: ?>
            <p class="text-gray-700">No Item</p>
        <?php endif; ?>
    </div>
    <!-- CONTENT 2 END -->

    <!-- FOOTER -->
    <?= $this->include('templates/footer') ?>
</body>

</html>