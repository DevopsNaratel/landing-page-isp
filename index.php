<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NetSpeed - Internet Super Cepat & Stabil</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        * { font-family: 'Inter', sans-serif; }
        .gradient-bg { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .gradient-text { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .card-hover { transition: all 0.3s ease; }
        .card-hover:hover { transform: translateY(-10px); box-shadow: 0 20px 40px rgba(0,0,0,0.1); }
        .animate-float { animation: float 3s ease-in-out infinite; }
        @keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-20px); } }
    </style>
</head>
<body class="bg-gray-50">
    <?php
    $packages = [
        ['name' => 'Basic', 'speed' => '20', 'price' => '199.000', 'features' => ['20 Mbps', 'Unlimited Kuota', 'Free Instalasi', 'Support 24/7']],
        ['name' => 'Premium', 'speed' => '50', 'price' => '349.000', 'features' => ['50 Mbps', 'Unlimited Kuota', 'Free Instalasi', 'Support 24/7', 'Free Router', 'Priority Support'], 'popular' => true],
        ['name' => 'Ultra', 'speed' => '100', 'price' => '599.000', 'features' => ['100 Mbps', 'Unlimited Kuota', 'Free Instalasi', 'Support 24/7', 'Free Router', 'Priority Support', 'Static IP']]
    ];
    
    $features = [
        ['icon' => 'fa-bolt', 'title' => 'Super Cepat', 'desc' => 'Kecepatan internet hingga 100 Mbps untuk streaming & gaming tanpa lag'],
        ['icon' => 'fa-shield-halved', 'title' => 'Aman & Stabil', 'desc' => 'Koneksi stabil dengan uptime 99.9% dan keamanan terjamin'],
        ['icon' => 'fa-headset', 'title' => 'Support 24/7', 'desc' => 'Tim support siap membantu Anda kapan saja, dimana saja'],
        ['icon' => 'fa-infinity', 'title' => 'Unlimited', 'desc' => 'Tanpa batasan kuota, browsing sepuasnya tanpa khawatir']
    ];
    
    $testimonials = [
        ['name' => 'Budi Santoso', 'role' => 'Gamer Profesional', 'text' => 'Ping stabil, no lag! Perfect untuk gaming kompetitif.', 'rating' => 5],
        ['name' => 'Sarah Wijaya', 'role' => 'Content Creator', 'text' => 'Upload video 4K jadi cepat banget. Recommended!', 'rating' => 5],
        ['name' => 'Ahmad Rizki', 'role' => 'Remote Worker', 'text' => 'WFH jadi lancar, video call HD tanpa putus-putus.', 'rating' => 5]
    ];
    ?>

    <!-- Navbar -->
    <nav class="bg-white shadow-md fixed w-full top-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="text-2xl font-bold gradient-text">NetSpeed</div>
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-purple-600 transition">Home</a>
                    <a href="#paket" class="text-gray-700 hover:text-purple-600 transition">Paket</a>
                    <a href="#fitur" class="text-gray-700 hover:text-purple-600 transition">Fitur</a>
                    <a href="#testimoni" class="text-gray-700 hover:text-purple-600 transition">Testimoni</a>
                    <a href="#kontak" class="text-gray-700 hover:text-purple-600 transition">Kontak</a>
                </div>
                <a href="#kontak" class="gradient-bg text-white px-6 py-2 rounded-full hover:opacity-90 transition">Daftar Sekarang</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="gradient-bg pt-32 pb-20 px-6">
        <div class="container mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-white">
                    <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">Internet Super Cepat untuk Semua Kebutuhan</h1>
                    <p class="text-xl mb-8 text-purple-100">Nikmati koneksi internet stabil dengan kecepatan hingga 100 Mbps. Streaming, gaming, dan bekerja tanpa hambatan.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#paket" class="bg-white text-purple-600 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition">Lihat Paket</a>
                        <a href="#kontak" class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-purple-600 transition">Hubungi Kami</a>
                    </div>
                    <div class="mt-12 flex gap-8">
                        <div><div class="text-4xl font-bold">50K+</div><div class="text-purple-200">Pelanggan</div></div>
                        <div><div class="text-4xl font-bold">99.9%</div><div class="text-purple-200">Uptime</div></div>
                        <div><div class="text-4xl font-bold">24/7</div><div class="text-purple-200">Support</div></div>
                    </div>
                </div>
                <div class="hidden md:block animate-float">
                    <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 border border-white/20">
                        <i class="fas fa-wifi text-white text-9xl"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="fitur" class="py-20 px-6">
        <div class="container mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Mengapa Pilih <span class="gradient-text">NetSpeed</span>?</h2>
                <p class="text-gray-600 text-lg">Kami memberikan layanan terbaik untuk pengalaman internet yang luar biasa</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php foreach($features as $feature): ?>
                <div class="bg-white p-8 rounded-2xl shadow-lg card-hover text-center">
                    <div class="gradient-bg w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas <?= $feature['icon'] ?> text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3"><?= $feature['title'] ?></h3>
                    <p class="text-gray-600"><?= $feature['desc'] ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="paket" class="py-20 px-6 bg-gray-100">
        <div class="container mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Paket <span class="gradient-text">Internet</span> Kami</h2>
                <p class="text-gray-600 text-lg">Pilih paket yang sesuai dengan kebutuhan Anda</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <?php foreach($packages as $package): ?>
                <div class="bg-white rounded-2xl shadow-xl card-hover overflow-hidden <?= isset($package['popular']) ? 'ring-4 ring-purple-500 relative' : '' ?>">
                    <?php if(isset($package['popular'])): ?>
                    <div class="gradient-bg text-white text-center py-2 font-semibold">PALING POPULER</div>
                    <?php endif; ?>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-2"><?= $package['name'] ?></h3>
                        <div class="mb-6">
                            <span class="text-5xl font-bold gradient-text"><?= $package['speed'] ?></span>
                            <span class="text-gray-600 text-xl">Mbps</span>
                        </div>
                        <div class="mb-6">
                            <span class="text-3xl font-bold">Rp <?= $package['price'] ?></span>
                            <span class="text-gray-600">/bulan</span>
                        </div>
                        <ul class="space-y-4 mb-8">
                            <?php foreach($package['features'] as $feature): ?>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                <span><?= $feature ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="#kontak" class="block text-center <?= isset($package['popular']) ? 'gradient-bg text-white' : 'bg-gray-200 text-gray-800' ?> py-3 rounded-full font-semibold hover:opacity-90 transition">Pilih Paket</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimoni" class="py-20 px-6">
        <div class="container mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Apa Kata <span class="gradient-text">Pelanggan</span> Kami?</h2>
                <p class="text-gray-600 text-lg">Ribuan pelanggan puas dengan layanan kami</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <?php foreach($testimonials as $testimonial): ?>
                <div class="bg-white p-8 rounded-2xl shadow-lg card-hover">
                    <div class="flex mb-4">
                        <?php for($i = 0; $i < $testimonial['rating']; $i++): ?>
                        <i class="fas fa-star text-yellow-400"></i>
                        <?php endfor; ?>
                    </div>
                    <p class="text-gray-700 mb-6 italic">"<?= $testimonial['text'] ?>"</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 gradient-bg rounded-full flex items-center justify-center text-white font-bold mr-4">
                            <?= substr($testimonial['name'], 0, 1) ?>
                        </div>
                        <div>
                            <div class="font-bold"><?= $testimonial['name'] ?></div>
                            <div class="text-gray-600 text-sm"><?= $testimonial['role'] ?></div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="kontak" class="py-20 px-6 gradient-bg">
        <div class="container mx-auto max-w-4xl">
            <div class="text-center mb-12 text-white">
                <h2 class="text-4xl font-bold mb-4">Hubungi Kami</h2>
                <p class="text-xl text-purple-100">Daftar sekarang dan nikmati internet super cepat!</p>
            </div>
            <div class="bg-white rounded-2xl shadow-2xl p-8 md:p-12">
                <form class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Nama Lengkap</label>
                            <input type="text" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none transition" placeholder="Masukkan nama Anda">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Nomor Telepon</label>
                            <input type="tel" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none transition" placeholder="08xx xxxx xxxx">
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none transition" placeholder="email@example.com">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Alamat Lengkap</label>
                        <textarea rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none transition" placeholder="Masukkan alamat lengkap Anda"></textarea>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Pilih Paket</label>
                        <select class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none transition">
                            <option>Basic - 20 Mbps</option>
                            <option>Premium - 50 Mbps</option>
                            <option>Ultra - 100 Mbps</option>
                        </select>
                    </div>
                    <button type="submit" class="w-full gradient-bg text-white py-4 rounded-full font-bold text-lg hover:opacity-90 transition">Daftar Sekarang</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12 px-6">
        <div class="container mx-auto">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-2xl font-bold gradient-text mb-4">NetSpeed</h3>
                    <p class="text-gray-400">Internet super cepat dan stabil untuk semua kebutuhan Anda.</p>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Layanan</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition">Internet Rumah</a></li>
                        <li><a href="#" class="hover:text-white transition">Internet Bisnis</a></li>
                        <li><a href="#" class="hover:text-white transition">Dedicated Line</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Perusahaan</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-white transition">Karir</a></li>
                        <li><a href="#" class="hover:text-white transition">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Kontak</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><i class="fas fa-phone mr-2"></i> 0800-123-4567</li>
                        <li><i class="fas fa-envelope mr-2"></i> info@netspeed.id</li>
                        <li><i class="fas fa-map-marker-alt mr-2"></i> Jakarta, Indonesia</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400">&copy; 2024 NetSpeed. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-facebook text-2xl"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-instagram text-2xl"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-twitter text-2xl"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-youtube text-2xl"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
