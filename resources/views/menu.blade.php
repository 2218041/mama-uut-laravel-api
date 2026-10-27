<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#d32f2f">

    <title>Mama U’ut | Warung Makan Favorit</title>

    <style>
        :root {
            --merah: #d32f2f;
            --merah-gelap: #a91f1f;
            --kuning: #ffc107;
            --krem: #fff8e1;
            --cokelat: #2e2e2e;
            --putih: #ffffff;
            --abu: #777777;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #fffdf7;
            color: var(--cokelat);
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button {
            font-family: inherit;
        }

        .container {
            width: min(1120px, 90%);
            margin: auto;
        }

        /* NAVBAR */

        header {
            background: var(--krem);
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.07);
        }

        .navbar {
            min-height: 76px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo-icon {
            width: 45px;
            height: 45px;
            background: var(--merah);
            color: white;
            border-radius: 14px;
            display: grid;
            place-items: center;
            font-size: 24px;
        }

        .logo h2 {
            color: var(--merah);
            font-size: 22px;
            line-height: 1.2;
        }

        .logo small {
            color: var(--abu);
            font-size: 11px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 28px;
        }

        .nav-links a {
            font-size: 14px;
            font-weight: bold;
            transition: 0.2s;
        }

        .nav-links a:hover {
            color: var(--merah);
        }

        .nav-button {
            background: var(--merah);
            color: white !important;
            padding: 11px 18px;
            border-radius: 10px;
        }

        /* HERO */

        .hero {
            background:
                radial-gradient(
                    circle at 85% 20%,
                    rgba(255, 193, 7, 0.28),
                    transparent 30%
                ),
                linear-gradient(135deg, #fff8e1, #fff0d0);
            padding: 80px 0;
            overflow: hidden;
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            align-items: center;
            gap: 50px;
        }

        .badge {
            display: inline-block;
            background: #ffecb3;
            color: #8a5700;
            padding: 8px 14px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 22px;
        }

        .hero h1 {
            font-size: clamp(36px, 5vw, 58px);
            line-height: 1.15;
            margin-bottom: 20px;
            letter-spacing: -1.5px;
        }

        .hero h1 span {
            color: var(--merah);
        }

        .hero p {
            color: #666;
            max-width: 510px;
            margin-bottom: 28px;
        }

        .primary-button {
            display: inline-block;
            background: var(--merah);
            color: white;
            border: none;
            border-radius: 12px;
            padding: 15px 23px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.25s;
            box-shadow: 0 8px 18px rgba(211, 47, 47, 0.2);
        }

        .primary-button:hover {
            background: var(--merah-gelap);
            transform: translateY(-2px);
        }

        .hero-note {
            display: block;
            color: #777;
            font-size: 12px;
            margin-top: 18px;
        }

        .hero-visual {
            min-height: 320px;
            border-radius: 35px;
            background: var(--merah);
            color: white;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            box-shadow: 0 20px 45px rgba(169, 31, 31, 0.2);
        }

        .hero-visual::before,
        .hero-visual::after {
            content: "";
            position: absolute;
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 50%;
        }

        .hero-visual::before {
            width: 300px;
            height: 300px;
        }

        .hero-visual::after {
            width: 220px;
            height: 220px;
        }

        .hero-food {
            font-size: 125px;
            z-index: 1;
            filter: drop-shadow(0 12px 8px rgba(0, 0, 0, 0.15));
        }

        .hero-visual strong {
            z-index: 1;
            font-size: 23px;
            margin-top: 8px;
        }

        .hero-visual small {
            z-index: 1;
            color: #ffe7a1;
        }

        /* INFO */

        .info-strip {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            margin-top: -25px;
            position: relative;
            z-index: 2;
        }

        .info-card {
            background: white;
            padding: 22px;
            border-radius: 16px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .info-icon {
            width: 48px;
            height: 48px;
            background: var(--krem);
            border-radius: 13px;
            display: grid;
            place-items: center;
            font-size: 23px;
            flex-shrink: 0;
        }

        .info-card strong {
            display: block;
            font-size: 14px;
        }

        .info-card small {
            color: var(--abu);
            font-size: 12px;
        }

        /* MENU */

        .menu-section {
            padding: 85px 0;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 35px;
        }

        .section-heading span {
            color: var(--merah);
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .section-heading h2 {
            font-size: clamp(28px, 4vw, 38px);
            margin: 8px 0;
        }

        .section-heading p {
            color: var(--abu);
            font-size: 14px;
        }

        .menu-tools {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
        }

        .menu-tools h3 {
            font-size: 20px;
        }

        .menu-tools select {
            border: 1px solid #e7dfd0;
            border-radius: 10px;
            background: white;
            padding: 11px 14px;
            color: var(--cokelat);
            outline: none;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 24px;
        }

        .menu-card {
            background: white;
            border: 1px solid #f0eadf;
            border-radius: 20px;
            overflow: hidden;
            transition: 0.25s;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.035);
        }

        .menu-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.09);
        }

        .menu-picture {
            height: 185px;
            background: var(--krem);
            display: grid;
            place-items: center;
            position: relative;
            overflow: hidden;
        }

        .menu-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .menu-emoji {
            font-size: 78px;
            transition: 0.3s;
        }

        .menu-card:hover .menu-emoji {
            transform: scale(1.1);
        }

        .category-badge {
            position: absolute;
            top: 14px;
            left: 14px;
            background: var(--kuning);
            color: #594000;
            border-radius: 7px;
            padding: 6px 10px;
            font-size: 11px;
            font-weight: bold;
        }

        .menu-body {
            padding: 20px;
        }

        .menu-body h3 {
            font-size: 19px;
            margin-bottom: 7px;
        }

        .menu-description {
            color: var(--abu);
            font-size: 13px;
            min-height: 42px;
            margin-bottom: 13px;
        }

        .menu-bottom {
            border-top: 1px solid #f0eadf;
            padding-top: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

        .menu-price {
            display: block;
            color: var(--merah);
            font-size: 19px;
            font-weight: bold;
        }

        .stock-label {
            color: #777;
            font-size: 11px;
        }

        .order-button {
            background: var(--merah);
            color: white;
            border: none;
            border-radius: 9px;
            padding: 10px 13px;
            font-size: 12px;
            font-weight: bold;
            cursor: pointer;
        }

        .order-button:hover {
            background: var(--merah-gelap);
        }

        .order-button:disabled {
            background: #aaa;
            cursor: not-allowed;
        }

        .state-message {
            text-align: center;
            color: var(--abu);
            padding: 40px 15px;
            grid-column: 1 / -1;
        }

        .state-message.error {
            color: var(--merah);
        }

        /* FOOTER */

        footer {
            background: var(--cokelat);
            color: white;
            padding: 35px 0;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        footer p {
            color: #d0d0d0;
            font-size: 13px;
        }

        footer strong {
            color: var(--kuning);
        }

        /* RESPONSIVE */

        @media (max-width: 800px) {
            .hero-content {
                grid-template-columns: 1fr;
                gap: 35px;
            }

            .hero {
                padding: 55px 0;
            }

            .hero-visual {
                min-height: 280px;
            }

            .menu-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .nav-links {
                gap: 13px;
            }

            .info-strip {
                gap: 10px;
            }

            .info-card {
                padding: 15px 10px;
            }
        }

        @media (max-width: 560px) {
            .navbar {
                min-height: 68px;
                flex-wrap: wrap;
                padding: 12px 0;
            }

            .logo h2 {
                font-size: 19px;
            }

            .nav-links {
                width: 100%;
                justify-content: space-between;
                padding-bottom: 5px;
            }

            .nav-links a {
                font-size: 12px;
            }

            .nav-button {
                padding: 8px 10px;
            }

            .hero h1 {
                font-size: 38px;
            }

            .hero-visual {
                min-height: 245px;
                border-radius: 25px;
            }

            .hero-food {
                font-size: 95px;
            }

            .info-strip {
                grid-template-columns: 1fr;
                margin-top: 20px;
            }

            .info-card {
                padding: 15px;
            }

            .menu-section {
                padding: 60px 0;
            }

            .menu-grid {
                grid-template-columns: 1fr;
            }

            .menu-picture {
                height: 210px;
            }

            .menu-tools {
                align-items: flex-start;
                flex-direction: column;
            }

            .footer-content {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>

<body>

<header>
    <div class="container navbar">
        <a href="#beranda" class="logo">
            <div class="logo-icon">🍽️</div>
            <div>
                <h2>Mama U’ut</h2>
                <small>Lezat, Hangat, Bersahabat</small>
            </div>
        </a>

        <nav class="nav-links">
            <a href="#beranda">Beranda</a>
            <a href="#menu">Daftar Menu</a>
            <a href="#tentang">Tentang</a>
            <a href="#menu" class="nav-button">Lihat Menu →</a>
        </nav>
    </div>
</header>

<main>
    <section class="hero" id="beranda">
        <div class="container hero-content">
            <div>
                <span class="badge">✨ SELAMAT DATANG DI MAMA U’UT</span>

                <h1>
                    Rasa Lezat,<br>
                    Bikin <span>Rindu</span><br>
                    Setiap Hari!
                </h1>

                <p>
                    Temukan makanan dan minuman favoritmu.
                    Disiapkan dengan sepenuh hati untuk menemani
                    waktu makan yang lebih menyenangkan.
                </p>

                <a href="#menu" class="primary-button">
                    🍴 Jelajahi Menu
                </a>

                <small class="hero-note">
                    ❤️ Terima kasih sudah memilih Mama U’ut.
                </small>
            </div>

            <div class="hero-visual">
                <div class="hero-food">🍛</div>
                <strong>Enak di Lidah, Hangat di Hati</strong>
                <small>Menu favorit untuk setiap suasana</small>
            </div>
        </div>
    </section>

    <div class="container info-strip" id="tentang">
        <div class="info-card">
            <div class="info-icon">🍲</div>
            <div>
                <strong>Menu Pilihan</strong>
                <small>Makanan dan minuman favorit</small>
            </div>
        </div>

        <div class="info-card">
            <div class="info-icon">💛</div>
            <div>
                <strong>Dibuat dengan Hati</strong>
                <small>Utamakan rasa dan kepuasan</small>
            </div>
        </div>

        <div class="info-card">
            <div class="info-icon">🛒</div>
            <div>
                <strong>Mudah Dipesan</strong>
                <small>Pilih menu sesuai selera</small>
            </div>
        </div>
    </div>

    <section class="menu-section" id="menu">
        <div class="container">
            <div class="section-heading">
                <span>Menu Spesial</span>
                <h2>Menu Favorit Mama U’ut</h2>
                <p>Pilih hidangan yang kamu sukai hari ini.</p>
            </div>

            <div class="menu-tools">
                <h3>🍽️ Daftar Menu</h3>

                <select id="filterKategori" aria-label="Filter kategori menu">
                    <option value="Semua">Semua Kategori</option>
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                </select>
            </div>

            <div class="menu-grid" id="daftarMenu">
                <div class="state-message">
                    ⏳ Sedang memuat menu Mama U’ut...
                </div>
            </div>
        </div>
    </section>
</main>

<footer>
    <div class="container footer-content">
        <div>
            <strong>🍽️ Mama U’ut</strong>
            <p>Lezat, Hangat, Bersahabat.</p>
        </div>

        <p>© <span id="tahun"></span> Mama U’ut. Semua hak dilindungi.</p>
    </div>
</footer>

<script>
    const API_MENU = '/api/menu';

    const daftarMenu = document.getElementById('daftarMenu');
    const filterKategori = document.getElementById('filterKategori');

    let semuaMenu = [];

    document.getElementById('tahun').textContent =
        new Date().getFullYear();

    function formatRupiah(harga) {
        return new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            maximumFractionDigits: 0
        }).format(Number(harga));
    }

    function ikonMenu(kategori, nama) {
        const teks = (nama || '').toLowerCase();

        if (teks.includes('ayam')) return '🍗';
        if (teks.includes('mie') || teks.includes('mi ')) return '🍜';
        if (teks.includes('teh')) return '🧋';
        if (teks.includes('jus')) return '🥭';
        if (teks.includes('kopi')) return '☕';
        if (teks.includes('nasi')) return '🍛';
        if (teks.includes('bakso')) return '🍲';
        if (teks.includes('roti')) return '🍞';

        return kategori === 'Minuman' ? '🥤' : '🍽️';
    }

    function buatKartuMenu(menu) {
        const stok = Number(menu.stok) || 0;
        const tersedia =
            stok > 0 &&
            String(menu.status || '').toLowerCase() === 'tersedia';

        const kartu = document.createElement('article');
        kartu.className = 'menu-card';

        const gambar = document.createElement('div');
        gambar.className = 'menu-picture';

        const label = document.createElement('span');
        label.className = 'category-badge';
        label.textContent = menu.kategori || 'Menu';

        gambar.appendChild(label);

        if (menu.foto && String(menu.foto).trim() !== '') {
            const img = document.createElement('img');

            img.src = String(menu.foto);
            img.alt = menu.nama_menu || 'Foto menu';
            img.loading = 'lazy';

            img.onerror = function () {
                const emoji = document.createElement('span');
                emoji.className = 'menu-emoji';
                emoji.textContent = ikonMenu(menu.kategori, menu.nama_menu);
                this.replaceWith(emoji);
            };

            gambar.appendChild(img);
        } else {
            const emoji = document.createElement('span');
            emoji.className = 'menu-emoji';
            emoji.textContent = ikonMenu(menu.kategori, menu.nama_menu);
            gambar.appendChild(emoji);
        }

        const body = document.createElement('div');
        body.className = 'menu-body';

        const nama = document.createElement('h3');
        nama.textContent = menu.nama_menu || 'Menu Mama U’ut';

        const deskripsi = document.createElement('p');
        deskripsi.className = 'menu-description';
        deskripsi.textContent =
            menu.deskripsi || 'Menu pilihan dari Mama U’ut.';

        const bottom = document.createElement('div');
        bottom.className = 'menu-bottom';

        const informasi = document.createElement('div');

        const harga = document.createElement('span');
        harga.className = 'menu-price';
        harga.textContent = formatRupiah(menu.harga);

        const stokLabel = document.createElement('span');
        stokLabel.className = 'stock-label';
        stokLabel.textContent = tersedia
            ? 'Stok: ' + stok
            : 'Tidak tersedia';

        informasi.appendChild(harga);
        informasi.appendChild(stokLabel);

        const tombol = document.createElement('button');
        tombol.className = 'order-button';
        tombol.textContent = tersedia ? 'Pilih Menu' : 'Habis';
        tombol.disabled = !tersedia;

        tombol.addEventListener('click', function () {
            alert(
                'Kamu memilih ' + (menu.nama_menu || 'menu') +
                '.\\n\\nFitur pemesanan akan dihubungkan pada tahap berikutnya.'
            );
        });

        bottom.appendChild(informasi);
        bottom.appendChild(tombol);

        body.appendChild(nama);
        body.appendChild(deskripsi);
        body.appendChild(bottom);

        kartu.appendChild(gambar);
        kartu.appendChild(body);

        return kartu;
    }

    function tampilkanMenu() {
        const kategori = filterKategori.value;

        const hasil = kategori === 'Semua'
            ? semuaMenu
            : semuaMenu.filter(menu => menu.kategori === kategori);

        daftarMenu.replaceChildren();

        if (hasil.length === 0) {
            const pesan = document.createElement('div');
            pesan.className = 'state-message';
            pesan.textContent = 'Belum ada menu pada kategori ini.';
            daftarMenu.appendChild(pesan);
            return;
        }

        hasil.forEach(menu => {
            daftarMenu.appendChild(buatKartuMenu(menu));
        });
    }

    async function ambilMenu() {
        try {
            const response = await fetch(API_MENU, {
                headers: {
                    'Accept': 'application/json'
                }
            });

            if (!response.ok) {
                throw new Error('Server mengembalikan HTTP ' + response.status);
            }

            const hasil = await response.json();

            if (!hasil.success || !Array.isArray(hasil.data)) {
                throw new Error('Format data menu tidak sesuai.');
            }

            semuaMenu = hasil.data;
            tampilkanMenu();

        } catch (error) {
            console.error('Gagal memuat menu:', error);

            daftarMenu.replaceChildren();

            const pesan = document.createElement('div');
            pesan.className = 'state-message error';
            pesan.textContent =
                'Menu belum dapat dimuat. Pastikan server Laravel aktif, lalu muat ulang halaman.';

            daftarMenu.appendChild(pesan);
        }
    }

    filterKategori.addEventListener('change', tampilkanMenu);

    ambilMenu();
</script>

</body>
</html>