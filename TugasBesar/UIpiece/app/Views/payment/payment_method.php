<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode Pembayaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <!-- Container -->
    <div class="max-w-3xl mx-auto p-6">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Pilih Metode Pembayaran</h2>
            <p class="text-gray-600 mb-6">Silakan pilih metode pembayaran yang Anda inginkan untuk melanjutkan
                transaksi.</p>

            <!-- Dropdown Form -->
            <form action="/checkout/payment-info" method="get">
                <div>
                    <label for="payment_method" class="block text-gray-700 font-medium mb-2">Metode Pembayaran</label>
                    <select id="payment_method" name="payment_method" class="w-full p-2 border rounded-md" required>
                        <option value="" disabled selected>Pilih metode pembayaran</option>
                        <option value="BCA">Transfer Bank - BCA</option>
                    </select>
                </div>

                <!-- Disclaimer -->
                <p class="text-gray-500 text-sm mt-6">Harap periksa kembali metode pembayaran sebelum melanjutkan untuk
                    memastikan kenyamanan Anda.</p>

                <!-- Buttons -->
                <div class="flex justify-end items-end">
                    <a href="<?= base_url('cart') ?>"
                        class="mr-3 mt-6 py-2 px-4 bg-red-600 text-white font-semibold rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">Cancel</a>

                    <button type="submit"
                        class="mt-6 py-2 px-4 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        Lanjutkan</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>