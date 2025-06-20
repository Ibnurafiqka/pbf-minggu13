<!-- Navbar -->
<nav class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0 flex items-center">
                    <i class="fas fa-newspaper text-2xl text-red-600 mr-2"></i>
                    <span class="text-xl font-bold text-gray-900">iNews</span>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-8">
                    <a href="#home" class="text-gray-600 hover:text-red-600 px-3 py-2 text-sm font-medium transition-colors">Beranda</a>
                    <a href="#services" class="text-gray-600 hover:text-red-600 px-3 py-2 text-sm font-medium transition-colors">Layanan</a>
                    <a href="#partnership" class="text-gray-600 hover:text-red-600 px-3 py-2 text-sm font-medium transition-colors">Partnership</a>
                    <a href="#testimonial" class="text-gray-600 hover:text-red-600 px-3 py-2 text-sm font-medium transition-colors">Testimoni</a>
                    <a href="#cooperation" class="text-gray-600 hover:text-red-600 px-3 py-2 text-sm font-medium transition-colors">Kerjasama</a>
                </div>
            </div>
            <div class="md:hidden">
                <button type="button" class="text-gray-600 hover:text-red-600 focus:outline-none focus:text-red-600" onclick="toggleMobileMenu()">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile menu -->
    <div id="mobile-menu" class="md:hidden hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t border-gray-200">
            <a href="#home" class="text-gray-600 hover:text-red-600 block px-3 py-2 text-base font-medium">Beranda</a>
            <a href="#services" class="text-gray-600 hover:text-red-600 block px-3 py-2 text-base font-medium">Layanan</a>
            <a href="#partnership" class="text-gray-600 hover:text-red-600 block px-3 py-2 text-base font-medium">Partnership</a>
            <a href="#testimonial" class="text-gray-600 hover:text-red-600 block px-3 py-2 text-base font-medium">Testimoni</a>
            <a href="#cooperation" class="text-gray-600 hover:text-red-600 block px-3 py-2 text-base font-medium">Kerjasama</a>
        </div>
    </div>
</nav>