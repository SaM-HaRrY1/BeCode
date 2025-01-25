<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body>
    <!-- NAVBAR -->
    <?= $this->include('templates/navdash'); ?>

    <div>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <div class="mx-auto max-w-3xl">
                <header class="text-center">
                    <h1 class="text-xl font-bold text-gray-900 sm:text-3xl">Keranjang Belanja</h1>
                </header>

                <?php if (!empty($cart)): ?>
                    <div class="mt-8 ">
                        <ul class="space-y-4">
                            <?php foreach ($cart as $id => $item): ?>
                                <li class="flex items-center bg-gray-200 gap-4 p-4 rounded-lg">
                                    <div class="flex-1">
                                        <h3 class="text-lg font-semibold text-gray-900"><?= $item['name']; ?></h3>
                                        <dl class="mt-2 space-y-2 text-sm text-gray-600">
                                            <div class="flex">
                                                <dt>Price:</dt>
                                                <dd>Rp <?= number_format($item['price'], 2); ?></dd>
                                            </div>
                                            <div class="flex">
                                                <dt>Quantity:</dt>
                                                <dd><?= $item['quantity']; ?></dd>
                                            </div>
                                        </dl>
                                    </div>
                                    <div class="flex items-center gap-2 mt-3">
                                        <a href="/cart/remove/<?= $item['product_id']; ?>"
                                            onclick="return confirm('Yakin mau di Hapus?')"
                                            class="bg-red-500 text-white px-4 py-4 rounded hover:bg-red-600">
                                            Remove
                                        </a>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="mt-8 border-t text-right border-gray-100 pt-4">
                        <h3 class="text-xl font-semibold text-gray-900">Total Harga</h3>
                        <p class="text-lg font-bold text-gray-800">Rp <?= number_format($total, 2, ',', '.'); ?>
                        </p>
                    </div>
                <?php else: ?>
                    <p class="mt-5 text-xl text-gray-700 text-right mr-9">Your cart is empty!</p>
                <?php endif; ?>

            </div>

            <div class="mt-8 flex justify-end mr-10 border-t border-gray-100 pt-8">
                <div class="w-screen max-w-lg space-y-4">
                    <div class="flex text-right">
                        <a href="<?= base_url('menu') ?>"
                            class="mr-5 inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none active:text-blue-500">
                            kembali
                        </a>

                        <?php if (isset($item['product_id'])): ?>
                            <form action="<?= base_url('checkout') ?>" method="get">
                                <a href="/checkout/<?= $item['product_id']; ?>" class=" inline-block shrink-0 rounded-md border border-yellow-400 bg-yellow-400
                                    px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent
                                    hover:text-yellow-600 focus:outline-none active:text-yellow-500">
                                    Checkout
                                </a>
                            </form>
                        <?php else: ?>
                            <p class="bg-red-500 text-white rounded-md px-12 py-3">No Item</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>