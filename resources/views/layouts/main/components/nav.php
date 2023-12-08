<nav class="bg-black">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=blue&shade=300"
                        alt="Your Company">
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="/" <?= ($route["url"] == "/") ? 'class="bg-blue-700 text-white rounded-md px-3 py-2 text-sm font-medium"' : 'class="text-white hover:bg-blue-500 hover:bg-opacity-75 rounded-md px-3 py-2 text-sm font-medium"' ?>>Tasques</a>
                        <a href="/users" <?= ($route["url"] == "/users") ? 'class="bg-blue-700 text-white rounded-md px-3 py-2 text-sm font-medium"' : 'class="text-white hover:bg-blue-500 hover:bg-opacity-75 rounded-md px-3 py-2 text-sm font-medium"' ?>>Usuaris</a>
                        <a href="/contact" <?= ($route["url"] == "/contact") ? 'class="bg-blue-700 text-white rounded-md px-3 py-2 text-sm font-medium"' : 'class="text-white hover:bg-blue-500 hover:bg-opacity-75 rounded-md px-3 py-2 text-sm font-medium"' ?>>Contacte</a>
                        <a href="/about" <?= ($route["url"] == "/about") ? 'class="bg-blue-700 text-white rounded-md px-3 py-2 text-sm font-medium"' : 'class="text-white hover:bg-blue-500 hover:bg-opacity-75 rounded-md px-3 py-2 text-sm font-medium"' ?>>Sobre nosaltres</a>
                    </div>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <button type="button"
                    class="relative inline-flex items-center justify-center rounded-md bg-blue-600 p-2 text-blue-200 hover:bg-blue-500 hover:bg-opacity-75 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-600"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <a href="/" class="<?= ($route["url"] == "/") ? 'bg-blue-700 text-white block rounded-md px-3 py-2 text-base font-medium' : 'text-white hover:bg-blue-500 hover:bg-opacity-75 block rounded-md px-3 py-2 text-base font-medium' ?>">Tasques</a>
            <a href="/users" class="<?= ($route["url"] == "/users") ? 'bg-blue-700 text-white block rounded-md px-3 py-2 text-base font-medium' : 'text-white hover:bg-blue-500 hover:bg-opacity-75 block rounded-md px-3 py-2 text-base font-medium' ?>">Usuaris</a>
            <a href="/contact" class="<?= ($route["url"] == "/contact") ? 'bg-blue-700 text-white block rounded-md px-3 py-2 text-base font-medium' : 'text-white hover:bg-blue-500 hover:bg-opacity-75 block rounded-md px-3 py-2 text-base font-medium' ?>">Contacte</a>
            <a href="/about" class="<?= ($route["url"] == "/about") ? 'bg-blue-700 text-white block rounded-md px-3 py-2 text-base font-medium' : 'text-white hover:bg-blue-500 hover:bg-opacity-75 block rounded-md px-3 py-2 text-base font-medium' ?>">Sobre nosaltres</a>
        </div>
    </div>
</nav>