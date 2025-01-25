<!-- NAVBAR -->
<header class="bg-gray-700 sticky top-0 z-50">
    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex-1 md:flex md:items-center md:gap-12">
                <ul class="flex items-start space-x-4">
                    <li>
                        <a class="block text-white mr-2" href="<?= base_url('')?>">
                            <span class="sr-only">Home</span>
                            <h3 class="text-xl">UIpiece</h3>
                        </a>
                    </li>

                    <li class="md:hidden pt-1">
                        <a href="<?= base_url('cart') ?>" class="text-white hover:text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="md:flex md:items-center md:gap-12">
                <nav aria-label="Global" class="hidden md:block">
                    <ul class="flex items-center gap-6 text-sm">
                        <li>
                            <a class="text-white px-3 py-2 rounded transition hover:text-gray-900 hover:bg-gray-300"
                                href="<?= base_url('#About')?>"> About </a>
                        </li>

                        <li>
                            <a class="text-white px-3 py-2 rounded transition hover:text-gray-900 hover:bg-gray-300"
                                href="<?= base_url('visit/menu')?>"> Product </a>
                        </li>

                        <li>
                            <a class="text-white px-3 py-2 rounded transition hover:text-gray-900 hover:bg-gray-300"
                                href="<?= base_url('#contact')?>"> Contact </a>
                        </li>
                        <li>
                            <a class="text-white px-3 py-2 rounded transition hover:text-gray-900 hover:bg-gray-300"
                                href="<?= base_url('#promo')?>"> Promo </a>
                        </li>

                        <li>
                            <a class="rounded-md bg-gray-500 px-5 py-2.5 text-sm font-medium text-gray-100 hover:bg-white hover:text-gray-600 shadow"
                                href="<?= base_url('login') ?>">
                                Login
                            </a>
                        </li>

                        <li>
                            <a class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-gray-600 hover:bg-gray-500 hover:text-gray-100 shadow"
                                href="<?= base_url('register') ?>">
                                Register
                            </a>
                        </li>

                        <li>
                            <a href="<?= base_url('cart') ?>" class="text-white hover:text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>

                <div class="block md:hidden" id="menu-toggle">
                    <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden">
        <nav aria-label="Global">
            <div class="flex items-center gap-4">
                <ul class="flex flex-col items-start gap-4 text-sm bg-gray-700 p-4">
                    <li>
                        <a class="text-white px-3 py-2 rounded transition hover:text-gray-900 hover:bg-gray-300"
                            href="<?= base_url('#About')?>"> About </a>
                    </li>

                    <li>
                        <a class="text-white px-3 py-2 rounded transition hover:text-gray-900 hover:bg-gray-300"
                            href="<?= base_url('visit/menu')?>"> Product </a>
                    </li>

                    <li>
                        <a class="text-white px-3 py-2 rounded transition hover:text-gray-900 hover:bg-gray-300"
                            href="<?= base_url('#contact')?>"> Contact </a>
                    </li>

                    <li>
                        <div class="md:hidden py-5">
                            <a class="rounded-md bg-gray-500 px-5 py-2.5 text-sm font-medium text-gray-100 hover:bg-white hover:text-gray-600 shadow"
                                href="<?= base_url('login') ?>">
                                Login
                            </a>
                        </div>

                        <div class="md:hidden py-5">
                            <a class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-gray-600 hover:bg-gray-500 hover:text-gray-100 shadow"
                                href="<?= base_url('register') ?>">
                                Register
                            </a>
                        </div>
                    </li>
                </ul>
        </nav>
    </div>
</header>

<script>
    // Navbar
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
<!-- NAVBAR END -->