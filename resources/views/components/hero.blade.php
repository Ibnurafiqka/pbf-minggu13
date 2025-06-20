<!-- Hero Section -->
<section id="home" class="bg-gradient-to-r from-red-50 to-yellow-50 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-8 items-center">
            <div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight mb-6">
                    Portal Berita<br>
                    <span class="text-red-600">Terpercaya</span>
                </h1>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                    Dapatkan informasi terkini, akurat, dan terpercaya dari berbagai sumber berita nasional dan internasional. Kami menghadirkan berita berkualitas untuk masyarakat Indonesia.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('berita.index') }}" class="bg-red-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-red-700 transition-colors inline-flex items-center justify-center">
                        <i class="fas fa-newspaper mr-2"></i>
                        Baca Berita Terbaru
                    </a>
                    <a href="#services" class="border border-red-600 text-red-600 px-8 py-3 rounded-lg font-semibold hover:bg-red-100 transition-colors inline-flex items-center justify-center">
                        Pelajari Layanan
                    </a>
                </div>
            </div>
            <div class="mt-12 lg:mt-0">
                <div class="relative">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-broadcast-tower text-2xl text-red-500 mr-3"></i>
                            <span class="text-sm font-semibold text-red-500 uppercase tracking-wide">BREAKING NEWS</span>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Berita Terkini Hari Ini</h3>
                        <p class="text-gray-600 text-sm mb-4">Ikuti perkembangan berita terbaru dari seluruh Indonesia dan dunia dengan update real-time setiap hari.</p>
                        <div class="flex items-center text-xs text-gray-500">
                            <i class="fas fa-clock mr-1"></i>
                            <span>Update setiap hari</span>
                        </div>
                    </div>
                    <div class="absolute -top-4 -right-4 bg-yellow-400 rounded-full p-3 shadow-lg">
                        <i class="fas fa-bell text-white text-xl"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>