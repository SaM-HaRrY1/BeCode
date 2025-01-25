<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Rekening Bank dan Konfirmasi Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.0/dist/alpine.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="bg-gray-100">
    <!-- NAVBAR -->
    <div class="max-w-md mx-auto p-4" x-data="{ showModal: false }">
        <div class="bg-white space-y-4 shadow rounded-md p-5">

            <div>
                <h2 class="text-lg font-semibold text-gray-900">Informasi Rekening Bank</h2>
            </div>
            <div>
                <p class="text-sm text-gray-700 text-base">Nama Bank: <span class="font-bold text-lg">Bank BCA</span>
                </p>
                <p class="text-sm text-gray-700 text-base">Nomor Rekening: <span
                        class="font-bold text-lg">1234567890</span></p>
                <p class="text-sm text-gray-700 text-base">Nama Pemilik Rekening: <span class="font-bold text-lg">UGI
                        SUGIMAN</span></p>
            </div>
            <p class="text-gray-600 mb-4">Silakan pastikan Anda telah melakukan transfer pembayaran ke rekening yang
                telah disediakan. Jika sudah, konfirmasi pembayaran untuk melanjutkan proses.</p>

            <ul class="list-disc pl-5 text-gray-600 mb-4">
                <li>Pastikan nominal transfer sesuai dengan jumlah yang tertera.</li>
                <li>Gunakan nomor rekening yang telah diberikan saat proses checkout.</li>
                <li>Simpan bukti transfer untuk keperluan konfirmasi.</li>
            </ul>

            <div class="text-sm text-gray-500 mt-4">
                Harap selesaikan pembayaran dalam waktu 24 jam untuk memastikan pesanan Anda diproses tepat waktu.
            </div>

            <div class="flex">
                <a href="<?= base_url('checkout/payment-method') ?>" class="mr-3 py-2 px-2 bg-red-600 text-white font-semibold rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">Ganti Pembayaran</a>

                <form id="paymentInfoForm" action="/checkout/submit-order" method="post">
                    <input type="hidden" name="id_pembeli" value="<?= $id_pembeli; ?>">
                    <!-- Mengambil id_pembeli dari session -->
                    <?php foreach ($products as $product): ?>
                        <input type="hidden" name="product_id[]" value="<?= $product['product_id']; ?>">
                        <!-- Mengambil product_id dari database -->
                    <?php endforeach; ?>
                    <button type="button" @click="showModal = true"
                        class="w-full py-2 px-4 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Konfirmasi
                        Pembayaran</button>
                </form>
            </div>
        </div>

        <!-- Modal -->
        <div x-show="showModal" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
            aria-modal="true">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div x-show="showModal" @click="showModal = false"
                    class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
                <div x-show="showModal"
                    class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Apakah sudah
                                dibayar?</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">Konfirmasi apakah Anda sudah melakukan pembayaran.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                        <button type="button" onclick="submitOrder()"
                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">Yes</button>
                        <button type="button" @click="showModal = false"
                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function submitOrder() {
            const form = document.getElementById('paymentInfoForm');
            const formData = new FormData(form);

            $.ajax({
                url: '/checkout/submit-order',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response.status === 'success') {
                        // Buka link WhatsApp di tab baru
                        window.open('https://wa.me/6285156962571?text=sudah%20saya%20bayar%20(jangan%20lupa%20sebutkan%20no%20order)', '_blank');
                        // Kembali ke halaman keranjang
                        window.location.href = '/cart';
                    } else {
                        console.error('Error: ' + response.message);
                    }
                },
                error: function (xhr, status, error) {
                    console.error('Error: ' + error);
                }
            });
        }
    </script>
</body>

</html>