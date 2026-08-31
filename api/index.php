<?php
// Set header untuk memastikan encoding UTF-8
header('Content-Type: text/html; charset=utf-8');

// Gambar Base64 PT MC Berkah Ilahi 09
$logoBase64 = "https://i.ibb.co.co/v6W9J12s/MCberkahilahi09.jpg"; 
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. MC Berkah Ilahi 09 - Solusi Kebutuhan Digital Anda</title>
    <!-- Favicon / PP Web -->
    <link rel="icon" type="image/jpeg" href="https://i.ibb.co.co/v6W9J12s/MCberkahilahi09.jpg">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 flex flex-col min-h-screen">

    <!-- Header / Navbar -->
    <header class="sticky top-0 z-50 bg-emerald-700 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <!-- Logo / PP Web -->
                    <img src="https://i.ibb.co.co/v6W9J12s/MCberkahilahi09.jpg" alt="Logo PT MC Berkah Ilahi 09" class="w-11 h-11 rounded-full object-cover border-2 border-amber-400 shadow">
                    <div>
                        <span class="font-bold text-lg sm:text-xl tracking-tight block leading-none">PT. MC BERKAH ILAHI 09</span>
                        <span class="text-xs text-emerald-200">Amanah, Unggul, Terpercaya</span>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-6 text-sm font-medium">
                    <a href="#layanan" class="hover:text-emerald-200 transition">Layanan</a>
                    <a href="#harga" class="hover:text-emerald-200 transition">Cek Harga</a>
                    <a href="#cara-order" class="hover:text-emerald-200 transition">Cara Transaksi</a>
                    <a href="#kontak" class="hover:text-emerald-200 transition">Bantuan</a>
                </nav>

                <div class="hidden md:block">
                    <a href="https://wa.me/6287790375321" target="_blank" class="bg-amber-400 hover:bg-amber-500 text-slate-900 font-semibold px-4 py-2 rounded-lg text-sm transition shadow">
                        <i class="fa-brands fa-whatsapp mr-1"></i> Hubungi CS
                    </a>
                </div>

                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="p-2 rounded-md hover:bg-emerald-600 focus:outline-none">
                        <i class="fa-solid fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden md:hidden bg-emerald-800 px-4 pt-2 pb-4 space-y-2 text-sm">
            <a href="#layanan" onclick="toggleMobileMenu()" class="block py-2 hover:text-emerald-200">Layanan</a>
            <a href="#harga" onclick="toggleMobileMenu()" class="block py-2 hover:text-emerald-200">Cek Harga</a>
            <a href="#cara-order" onclick="toggleMobileMenu()" class="block py-2 hover:text-emerald-200">Cara Transaksi</a>
            <a href="#kontak" onclick="toggleMobileMenu()" class="block py-2 hover:text-emerald-200">Bantuan</a>
            <a href="https://wa.me/6287790375321" target="_blank" class="inline-block w-full text-center bg-amber-400 text-slate-900 font-semibold py-2 rounded-lg mt-2">
                <i class="fa-brands fa-whatsapp mr-1"></i> Hubungi CS
            </a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-emerald-700 to-teal-800 text-white py-12 md:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center md:text-left grid md:grid-cols-2 gap-8 items-center">
            <div>
                <span class="bg-emerald-600 text-emerald-100 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">Serba Cepat & Murah</span>
                <h1 class="text-3xl md:text-5xl font-extrabold mt-3 leading-tight">Isi Pulsa, Kuota, & Token PLN Tanpa Ribet</h1>
                <p class="mt-4 text-emerald-100 text-sm md:text-base">Layanan pengisian otomatis 24 jam dengan harga agen paling kompetitif. Proses instan dan aman.</p>
                <div class="mt-6 flex flex-wrap gap-3 justify-center md:justify-start">
                    <a href="#layanan" class="bg-amber-400 hover:bg-amber-500 text-slate-900 font-bold px-6 py-3 rounded-lg shadow-lg transition text-sm">Transaksi Sekarang</a>
                </div>
            </div>
            <div class="hidden md:flex justify-center">
                <div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/20 shadow-2xl w-full max-w-sm text-center">
                    <!-- Display Logo / PP di Card Banner -->
                    <img src="https://i.ibb.co.co/v6W9J12s/MCberkahilahi09.jpg" alt="Logo PT MC Berkah Ilahi 09" class="w-24 h-24 rounded-full mx-auto mb-3 border-4 border-amber-400 shadow-lg object-cover">
                    <h4 class="font-bold text-base text-white">PT. MC BERKAH ILAHI 09</h4>
                    <p class="text-xs text-amber-300 font-medium mb-3">Amanah, Unggul, Terpercaya</p>
                    <hr class="border-white/10 my-3">
                    <div class="text-xs text-emerald-100 space-y-2 text-left">
                        <div class="flex justify-between"><span>Status Server:</span> <span class="text-emerald-300 font-bold">ONLINE (99.9%)</span></div>
                        <div class="flex justify-between"><span>Metode Pembayaran:</span> <span>SeaBank, QRIS, Bank, E-Wallet</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Layanan / Form Pemesanan -->
    <main id="layanan" class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 -mt-8 relative z-10 mb-12">
        <div class="bg-white rounded-2xl shadow-xl p-6 md:p-8 border border-slate-100">
            <h2 class="text-xl font-bold text-slate-800 mb-6 flex items-center">
                <i class="fa-solid fa-cart-shopping text-emerald-600 mr-2"></i> Form Pemesanan Instan
            </h2>

            <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 mb-6">
                <button onclick="switchTab('pulsa')" id="tab-pulsa" class="tab-btn active bg-emerald-50 text-emerald-700 border-emerald-500 border-2 py-3 px-4 rounded-xl font-semibold text-sm flex items-center justify-center gap-2 transition">
                    <i class="fa-solid fa-mobile-screen"></i> Pulsa
                </button>
                <button onclick="switchTab('paket')" id="tab-paket" class="tab-btn bg-slate-50 text-slate-600 border border-slate-200 py-3 px-4 rounded-xl font-semibold text-sm flex items-center justify-center gap-2 transition hover:bg-slate-100">
                    <i class="fa-solid fa-wifi"></i> Paket Data
                </button>
                <button onclick="switchTab('ewallet')" id="tab-ewallet" class="tab-btn bg-slate-50 text-slate-600 border border-slate-200 py-3 px-4 rounded-xl font-semibold text-sm flex items-center justify-center gap-2 transition hover:bg-slate-100">
                    <i class="fa-solid fa-wallet"></i> Topup E-Wallet
                </button>
                <button onclick="switchTab('pln')" id="tab-pln" class="tab-btn bg-slate-50 text-slate-600 border border-slate-200 py-3 px-4 rounded-xl font-semibold text-sm flex items-center justify-center gap-2 transition hover:bg-slate-100">
                    <i class="fa-solid fa-bolt"></i> Token PLN
                </button>
            </div>

            <form id="orderForm" onsubmit="handleOrder(event)" class="space-y-4">
                <div>
                    <label class="block text-xs font-bold uppercase text-slate-500 mb-1" id="input-label">Nomor HP / No. Tujuan</label>
                    <input type="number" id="target_number" required placeholder="Contoh: 081234567890" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition text-slate-800 text-sm">
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Pilih Nominal / Produk</label>
                    <select id="product_select" required class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition text-slate-800 text-sm">
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Metode Pembayaran</label>
                    <select id="payment_method" required class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition text-slate-800 text-sm">
                        <option value="SeaBank (No. Rek: 901177614946)">SeaBank - 901177614946</option>
                        <option value="QRIS">QRIS (BCA, Mandiri, DANA, OVO, LinkAja)</option>
                        <option value="Transfer Bank Lain">Transfer Bank Lain (BCA / BRI / Mandiri)</option>
                        <option value="Konfirmasi Manual via WA">Konfirmasi Manual via WhatsApp</option>
                    </select>
                </div>

                <button type="submit" class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3.5 rounded-lg transition shadow-md flex items-center justify-center gap-2 text-sm mt-2">
                    <i class="fa-solid fa-paper-plane"></i> Lanjutkan Pembayaran
                </button>
            </form>
        </div>
    </main>

    <!-- Section: Cek Harga -->
    <section id="harga" class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8 mb-8">
        <h3 class="text-xl font-bold text-center text-slate-800 mb-6 flex items-center justify-center">
            <i class="fa-solid fa-tags text-emerald-600 mr-2"></i> Daftar Harga Terpopuler
        </h3>
        <div class="bg-white rounded-2xl shadow-md border border-slate-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-slate-600">
                    <thead class="text-xs text-slate-700 uppercase bg-slate-100 border-b">
                        <tr>
                            <th scope="col" class="px-6 py-3">Kategori</th>
                            <th scope="col" class="px-6 py-3">Produk</th>
                            <th scope="col" class="px-6 py-3">Harga Agen</th>
                            <th scope="col" class="px-6 py-3">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <tr>
                            <td class="px-6 py-4 font-semibold text-slate-800">Pulsa</td>
                            <td class="px-6 py-4">Pulsa Reguler 5.000</td>
                            <td class="px-6 py-4 font-bold text-emerald-600">Rp 6.000</td>
                            <td class="px-6 py-4"><span class="bg-emerald-100 text-emerald-800 text-xs px-2.5 py-0.5 rounded-full font-semibold">Tersedia</span></td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 font-semibold text-slate-800">Pulsa</td>
                            <td class="px-6 py-4">Pulsa Reguler 10.000</td>
                            <td class="px-6 py-4 font-bold text-emerald-600">Rp 11.000</td>
                            <td class="px-6 py-4"><span class="bg-emerald-100 text-emerald-800 text-xs px-2.5 py-0.5 rounded-full font-semibold">Tersedia</span></td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 font-semibold text-slate-800">Paket Data</td>
                            <td class="px-6 py-4">Paket Data 5 GB / 7 Hari</td>
                            <td class="px-6 py-4 font-bold text-emerald-600">Rp 22.000</td>
                            <td class="px-6 py-4"><span class="bg-emerald-100 text-emerald-800 text-xs px-2.5 py-0.5 rounded-full font-semibold">Tersedia</span></td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 font-semibold text-slate-800">E-Wallet</td>
                            <td class="px-6 py-4">DANA Topup 20.000</td>
                            <td class="px-6 py-4 font-bold text-emerald-600">Rp 20.800</td>
                            <td class="px-6 py-4"><span class="bg-emerald-100 text-emerald-800 text-xs px-2.5 py-0.5 rounded-full font-semibold">Tersedia</span></td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 font-semibold text-slate-800">PLN</td>
                            <td class="px-6 py-4">Token PLN 20.000</td>
                            <td class="px-6 py-4 font-bold text-emerald-600">Rp 20.500</td>
                            <td class="px-6 py-4"><span class="bg-emerald-100 text-emerald-800 text-xs px-2.5 py-0.5 rounded-full font-semibold">Tersedia</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Section: Cara Order -->
    <section id="cara-order" class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8 mb-8">
        <h3 class="text-xl font-bold text-center text-slate-800 mb-8 flex items-center justify-center">
            <i class="fa-solid fa-list-check text-emerald-600 mr-2"></i> 3 Langkah Mudah Bertransaksi
        </h3>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-xl border border-slate-100 shadow-sm text-center">
                <div class="w-10 h-10 bg-emerald-600 text-white font-bold rounded-full flex items-center justify-center mx-auto mb-4">1</div>
                <h4 class="font-bold text-slate-800 mb-2">Pilih Layanan & Isi Data</h4>
                <p class="text-xs text-slate-600">Masukkan nomor tujuan/ID pelanggan serta pilih nominal produk yang diinginkan.</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-slate-100 shadow-sm text-center">
                <div class="w-10 h-10 bg-emerald-600 text-white font-bold rounded-full flex items-center justify-center mx-auto mb-4">2</div>
                <h4 class="font-bold text-slate-800 mb-2">Lakukan Pembayaran</h4>
                <p class="text-xs text-slate-600">Transfer ke rekening <strong>SeaBank 901177614946</strong> atau metode lainnya.</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-slate-100 shadow-sm text-center">
                <div class="w-10 h-10 bg-emerald-600 text-white font-bold rounded-full flex items-center justify-center mx-auto mb-4">3</div>
                <h4 class="font-bold text-slate-800 mb-2">Proses Selesai</h4>
                <p class="text-xs text-slate-600">Sistem otomatis memproses pesanan dan kirim produk/token langsung ke tujuan.</p>
            </div>
        </div>
    </section>

    <!-- Section: Bantuan / Kontak -->
    <section id="kontak" class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8 mb-12">
        <div class="bg-emerald-900 text-white rounded-2xl p-6 md:p-8 text-center flex flex-col items-center">
            <i class="fa-solid fa-headset text-4xl text-amber-400 mb-3"></i>
            <h3 class="text-2xl font-bold mb-2">Butuh Bantuan Kendala Transaksi?</h3>
            <p class="text-emerald-200 text-sm max-w-lg mb-6">Tim Customer Service PT MC Berkah Ilahi 09 siap membantu transaksi Anda jika terjadi keterlambatan atau kesalahan pengisian.</p>
            <a href="https://wa.me/6287790375321" target="_blank" class="bg-amber-400 hover:bg-amber-500 text-slate-900 font-bold px-6 py-3 rounded-xl transition shadow flex items-center gap-2 text-sm">
                <i class="fa-brands fa-whatsapp text-lg"></i> Chat CS (0877-9037-5321)
            </a>
        </div>
    </section>

    <!-- Keunggulan Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 mb-12">
        <h3 class="text-xl font-bold text-center text-slate-800 mb-8">Mengapa Memilih PT MC Berkah Ilahi 09?</h3>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-xl border border-slate-100 shadow-sm text-center">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto mb-4 text-xl">
                    <i class="fa-solid fa-bolt"></i>
                </div>
                <h4 class="font-bold text-slate-800 mb-2">Proses Otomatis</h4>
                <p class="text-xs text-slate-600">Sistem terintegrasi secara komputasi untuk memastikan transaksi selesai dalam hitungan detik.</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-slate-100 shadow-sm text-center">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto mb-4 text-xl">
                    <i class="fa-solid fa-tag"></i>
                </div>
                <h4 class="font-bold text-slate-800 mb-2">Harga Murah Agen</h4>
                <p class="text-xs text-slate-600">Mendapatkan harga tangan pertama untuk margin keuntungan jual kembali yang maksimal.</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-slate-100 shadow-sm text-center">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto mb-4 text-xl">
                    <i class="fa-solid fa-headset"></i>
                </div>
                <h4 class="font-bold text-slate-800 mb-2">Bantuan CS Responsive</h4>
                <p class="text-xs text-slate-600">Tim bantuan teknis siap membantu kendala transaksi Anda dari pagi hingga malam.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="mt-auto bg-slate-900 text-slate-400 py-8 border-t border-slate-800 text-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center md:flex md:justify-between md:text-left">
            <div class="mb-4 md:mb-0">
                <p class="font-bold text-white">PT. MC BERKAH ILAHI 09</p>
                <p class="text-xs mt-1">Layanan Pengisian Digital & PPOB Terpercaya.</p>
            </div>
            <div class="text-xs">
                <p>&copy; <?php echo date("Y"); ?> PT. MC Berkah Ilahi 09. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript Dynamic Logic -->
    <script>
        // Data Produk
        const products = {
            pulsa: [
                { name: "Pulsa Reguler 5.000", price: "Rp 6.000" },
                { name: "Pulsa Reguler 10.000", price: "Rp 11.000" },
                { name: "Pulsa Reguler 25.000", price: "Rp 25.800" },
                { name: "Pulsa Reguler 50.000", price: "Rp 50.500" },
                { name: "Pulsa Reguler 100.000", price: "Rp 99.000" }
            ],
            paket: [
                { name: "Paket Data 1 GB / 3 Hari", price: "Rp 8.000" },
                { name: "Paket Data 5 GB / 7 Hari", price: "Rp 22.000" },
                { name: "Paket Data Unlimited / 30 Hari", price: "Rp 65.000" }
            ],
            ewallet: [
                { name: "DANA Topup 20.000", price: "Rp 20.800" },
                { name: "OVO Topup 50.000", price: "Rp 50.800" },
                { name: "Gopay Topup 100.000", price: "Rp 100.800" },
                { name: "ShopeePay Topup 50.000", price: "Rp 50.800" }
            ],
            pln: [
                { name: "Token PLN 20.000", price: "Rp 20.500" },
                { name: "Token PLN 50.000", price: "Rp 50.500" },
                { name: "Token PLN 100.000", price: "Rp 100.500" }
            ]
        };

        let currentCategory = 'pulsa';

        // Toggle Mobile Menu Navigation
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }

        document.getElementById('mobile-menu-btn').addEventListener('click', toggleMobileMenu);

        // Switch Tab Produk
        function switchTab(category) {
            currentCategory = category;
            
            // Reset state style tab
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.className = "tab-btn bg-slate-50 text-slate-600 border border-slate-200 py-3 px-4 rounded-xl font-semibold text-sm flex items-center justify-center gap-2 transition hover:bg-slate-100";
            });

            // Set active style tab
            const activeTab = document.getElementById(`tab-${category}`);
            activeTab.className = "tab-btn active bg-emerald-50 text-emerald-700 border-emerald-500 border-2 py-3 px-4 rounded-xl font-semibold text-sm flex items-center justify-center gap-2 transition";

            // Update Label Input
            const label = document.getElementById('input-label');
            if(category === 'pln') {
                label.innerText = "Nomor Meter / ID Pelanggan PLN";
            } else {
                label.innerText = "Nomor HP / No. Tujuan";
            }

            renderProducts(category);
        }

        // Render Opsi Dropdown Produk
        function renderProducts(category) {
            const select = document.getElementById('product_select');
            select.innerHTML = '';
            
            products[category].forEach(item => {
                const opt = document.createElement('option');
                opt.value = `${item.name} (${item.price})`;
                opt.innerText = `${item.name} - ${item.price}`;
                select.appendChild(opt);
            });
        }

        // Handle Form Order (Meneruskan ke WhatsApp CS)
        function handleOrder(e) {
            e.preventDefault();
            const number = document.getElementById('target_number').value;
            const product = document.getElementById('product_select').value;
            const payment = document.getElementById('payment_method').value;

            const adminWA = "6287790375321"; // Nomor WhatsApp CS
            const message = `Halo Admin *PT. MC BERKAH ILAHI 09*, saya ingin melakukan pemesanan:%0A%0A` +
                            `• *Produk:* ${product}%0A` +
                            `• *No. Tujuan:* ${number}%0A` +
                            `• *Metode Bayar:* ${payment}%0A%0A` +
                            `Mohon instruksi pembayaran lebih lanjut. Terima kasih!`;

            window.open(`https://wa.me/${adminWA}?text=${message}`, '_blank');
        }

        // Initialize Default Products
        renderProducts('pulsa');
    </script>
</body>
</html>
