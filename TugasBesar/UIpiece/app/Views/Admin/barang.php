<!-- App/Views/admin/add_product.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <div class="flex h-screen sticky top-0 z-50 w-16 flex-col justify-between border-e bg-blue-600">
            <div>
                <div class="border-t border-gray-100">
                    <div class="px-2">
                        <ul class="space-y-1 border-t border-gray-100 pt-4">
                            <li>
                                <a href="<?= base_url('admin') ?>"
                                    class="group relative flex justify-center rounded px-2 py-1.5 text-white hover:bg-gray-50 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 opacity-75" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>

                                    <span
                                        class="invisible absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white group-hover:visible">
                                        User
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="<?= base_url('admin/Transaction') ?>"
                                    class="group relative flex justify-center rounded px-2 py-1.5 text-white hover:bg-gray-50 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 opacity-75" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                    </svg>

                                    <span
                                        class="invisible absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white group-hover:visible">
                                        Transaksi
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="<?= base_url('admin/add-product') ?>"
                                    class="group relative flex justify-center rounded px-2 py-1.5 text-white hover:bg-gray-50 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 opacity-75" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                    </svg>

                                    <span
                                        class="invisible absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white group-hover:visible">
                                        Barang
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="<?= base_url('dashboard') ?>"
                                    class="group relative flex justify-center rounded px-2 py-1.5 text-white hover:bg-gray-50 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5 opacity-75">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                                    </svg>

                                    <span
                                        class="invisible absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white group-hover:visible">
                                        Cek Dashboard
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="sticky inset-x-0 bottom-0 border-t border-gray-100 bg-red-500 p-2">
                <a href="<?= base_url('logout'); ?>"
                    class="group relative flex w-full justify-center rounded-lg px-2 py-1.5 text-sm text-white hover:bg-gray-50 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 opacity-75" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>

                    <span
                        class="invisible absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white group-hover:visible">
                        Logout
                    </span>
                </a>
            </div>
        </div>

        <div class="flex container mx-auto my-10 justify-center">
            <div class="w-full max-w-md mx-auto bg-white rounded-lg shadow-md p-8">
                <h2 class="text-2xl font-bold mb-6">Tambah Produk Baru</h2>
                <form id="addProductForm" enctype="multipart/form-data">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Nama Produk</label>
                        <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded-lg" required>
                    </div>
                    <div class="mb-4">
                        <label for="price" class="block text-gray-700">Harga</label>
                        <input type="number" step="0.01" id="price" name="price"
                            class="w-full px-3 py-2 border rounded-lg" required>
                    </div>
                    <div class="mb-4">
                        <label for="stock" class="block text-gray-700">Stok</label>
                        <input type="number" id="stock" name="stock" class="w-full px-3 py-2 border rounded-lg"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="kategori" class="block text-gray-700">Kategori</label>
                        <input type="text" id="kategori" name="kategori" class="w-full px-3 py-2 border rounded-lg"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="image" class="block text-gray-700">Gambar Produk</label>
                        <input type="file" id="image" name="image" class="w-full px-3 py-2 border rounded-lg" required>
                    </div>
                    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-lg">Tambah
                        Produk</button>
                </form>
            </div>

            <div class="w-full max-w-md mx-auto bg-white rounded-lg shadow-md p-8">
                <h2 class="text-2xl font-bold mb-6">Daftar Produk</h2>
                <ul>
                    <?php foreach ($products as $product): ?>
                        <li class="flex justify-between items-center mb-4">
                            <span><?= $product['name'] ?> - Rp <?= number_format($product['price'], 2) ?></span>
                            <button data-id="<?= $product['id'] ?>"
                                class="deleteProduct bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded">Hapus</button>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#addProductForm').on('submit', function (e) {
                e.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    url: '/admin/add-product',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        if (response.status === 'success') {
                            alert('Product added successfully');
                            location.reload();
                        } else {
                            alert('Error: ' + JSON.stringify(response.errors));
                        }
                    }
                });
            });

            $('.deleteProduct').on('click', function () {
                var productId = $(this).data('id');

                if (confirm('Apakah Anda yakin ingin menghapus produk ini?')) {
                    $.ajax({
                        url: '/admin/delete-product/' + productId,
                        type: 'POST',
                        success: function (response) {
                            if (response.status === 'success') {
                                alert('Product deleted successfully');
                                location.reload();
                            } else {
                                alert('Error: ' + response.message);
                            }
                        }
                    });
                }
            });
        });
    </script>   
</body>

</html>