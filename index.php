<?php
$profile = [
    'name' => 'Suhatta',
    'role' => 'Full Stack Web Developer',
    'eyebrow' => 'Mahasiswa D4 Sistem Informasi Bisnis',
    'tagline' => 'Membangun website, aplikasi mobile, dan PWA yang efisien, responsif, dan mudah digunakan.',
    'bio' => 'Saya mahasiswa Teknologi Informasi di Politeknik Negeri Malang dengan minat kuat pada pengembangan perangkat lunak, terutama Laravel, Flutter, PHP, API, dan Front End Language.',
    'location' => 'Indonesia',
    'email' => 'suhatta26@gmail.com',
    'phone' => '0858 1570 7390',
    'phone_raw' => '085815707390',
    'whatsapp' => 'https://wa.me/6285815707390',
    'stats' => [
        ['value' => '9', 'label' => 'Project portofolio', 'icon' => 'folder-kanban', 'color' => 'text-zinc-800', 'bg' => 'bg-zinc-200'],
        ['value' => '11', 'label' => 'Skill teknis', 'icon' => 'badge-check', 'color' => 'text-neutral-800', 'bg' => 'bg-neutral-200'],
        ['value' => '2026', 'label' => 'Portofolio terbaru', 'icon' => 'sparkles', 'color' => 'text-red-800', 'bg' => 'bg-red-100']
    ],
    'education' => [
        ['school' => 'Politeknik Negeri Malang', 'period' => '2022 - Sekarang', 'major' => 'D4 Sistem Informasi Bisnis'],
        ['school' => 'SMA Negeri 1 Sutojayan', 'period' => '2019 - 2022', 'major' => 'Jurusan Ilmu Pengetahuan Sosial']
    ],
    'skills' => [
        ['name' => 'Java', 'icon' => 'coffee', 'cat' => 'Language'],
        ['name' => 'PHP', 'icon' => 'braces', 'cat' => 'Backend'],
        ['name' => 'JavaScript', 'icon' => 'code-2', 'cat' => 'Frontend'],
        ['name' => 'Laravel', 'icon' => 'layers-3', 'cat' => 'Framework'],
        ['name' => 'Flutter', 'icon' => 'smartphone', 'cat' => 'Mobile'],
        ['name' => 'Bootstrap', 'icon' => 'layout-template', 'cat' => 'Styling'],
        ['name' => 'CSS', 'icon' => 'palette', 'cat' => 'Styling'],
        ['name' => 'HTML', 'icon' => 'file-code-2', 'cat' => 'Markup'],
        ['name' => 'API', 'icon' => 'plug-zap', 'cat' => 'Integration'],
        ['name' => 'Postman', 'icon' => 'send', 'cat' => 'Testing'],
        ['name' => 'MySQL', 'icon' => 'database', 'cat' => 'Database']
    ],
    'projects' => [
        [
            'title' => 'Sistem Informasi Survey Kepuasan Pelanggan',
            'type' => 'Web Application',
            'role' => 'Backend Developer',
            'desc' => 'Website pengukur tingkat kepuasan untuk menganalisis masukan mahasiswa, orang tua, alumni, industri, dan pengguna lulusan di Polinema.',
            'contribution' => 'Mengembangkan aplikasi web, merancang database MySQL, dan mengoptimalkan kinerja sistem.',
            'stack' => ['Laravel', 'MySQL', 'Survey', 'Dashboard'],
            'icon' => 'clipboard-list',
            'accent' => 'sky',
            'link' => ''
        ],
        [
            'title' => 'Sistem Informasi Pendataan Sertifikasi dan Pelatihan',
            'type' => 'Web & Mobile Application',
            'role' => 'Full Stack Developer',
            'desc' => 'Aplikasi untuk pendataan dan rekomendasi kegiatan sertifikasi serta pelatihan bagi dosen Jurusan Teknologi Informasi Polinema.',
            'contribution' => 'Mengembangkan web Laravel, aplikasi mobile Flutter, serta integrasi API untuk dosen, pimpinan, dan admin.',
            'stack' => ['Laravel', 'Flutter', 'API', 'Admin'],
            'icon' => 'file-badge',
            'accent' => 'violet',
            'link' => ''
        ],
        [
            'title' => 'Koperasi Digital Indonesia (KODEIN)',
            'type' => 'Mobile Application',
            'role' => 'Full Stack Developer',
            'desc' => 'Aplikasi mobile koperasi digital untuk registrasi anggota, simpanan, pinjaman, transaksi pembayaran, saldo, riwayat, dan notifikasi real-time.',
            'contribution' => 'Mengembangkan aplikasi mobile Flutter dan mengintegrasikan API dengan fokus pada kemudahan penggunaan, keamanan data, dan performa.',
            'stack' => ['Flutter', 'API', 'Finance', 'Realtime'],
            'icon' => 'landmark',
            'accent' => 'emerald',
            'images' => [
                ['src' => 'assets/projects/kodein-home.png', 'alt' => 'Tampilan home aplikasi KODEIN'],
                ['src' => 'assets/projects/kodein-login.png', 'alt' => 'Tampilan login aplikasi KODEIN']
            ],
            'link' => ''
        ],
        [
            'title' => 'Attendance App',
            'type' => 'Mobile Application',
            'role' => 'Frontend Developer',
            'desc' => 'Aplikasi absensi digital untuk check-in, check-out, riwayat kehadiran, validasi lokasi, dan pengelolaan data pengguna.',
            'contribution' => 'Mengembangkan aplikasi mobile Flutter dan integrasi API untuk proses absensi yang cepat dan efisien.',
            'stack' => ['Flutter', 'API', 'Attendance', 'Mobile'],
            'icon' => 'calendar-check',
            'accent' => 'amber',
            'images' => [
                ['src' => 'assets/projects/attendance-home.png', 'alt' => 'Tampilan home Attendance App'],
                ['src' => 'assets/projects/attendance.png', 'alt' => 'Splash screen Attendance App']
            ],
            'link' => ''
        ],
        [
            'title' => 'My Depo',
            'type' => 'Progressive Web App',
            'role' => 'Full Stack Developer',
            'desc' => 'PWA untuk operasional depo air minum, mencakup pelanggan, transaksi, pemesanan air, monitoring stok, dan laporan penjualan real-time.',
            'contribution' => 'Mengembangkan PWA menggunakan PHP Native dan JSON agar ringan, responsif, dan praktis digunakan di mobile maupun desktop.',
            'stack' => ['PWA', 'PHP Native', 'JSON', 'Business'],
            'icon' => 'glass-water',
            'accent' => 'cyan',
            'images' => [
                ['src' => 'assets/projects/mydepo-login.png', 'alt' => 'Tampilan pilihan login My Depo'],
                ['src' => 'assets/projects/mydepo-admin.png', 'alt' => 'Dashboard admin My Depo'],
                ['src' => 'assets/projects/mydepo-manager.png', 'alt' => 'Dashboard manajer My Depo'],
                ['src' => 'assets/projects/mydepo-crew.png', 'alt' => 'Dashboard crew My Depo']
            ],
            'link' => ''
        ],
        [
            'title' => 'Solusie',
            'type' => 'Progressive Web App',
            'role' => 'Full Stack Developer',
            'desc' => 'PWA layanan digital untuk menemukan dan memesan jasa profesional seperti home service, laundry, notaris, dan servis elektronik.',
            'contribution' => 'Mengembangkan PWA PHP Native dan JSON untuk pencarian layanan, konsultasi, booking jasa, dan transaksi.',
            'stack' => ['PWA', 'PHP Native', 'JSON', 'Service'],
            'icon' => 'wrench',
            'accent' => 'rose',
            'images' => [
                ['src' => 'assets/projects/solusie-home.png', 'alt' => 'Tampilan home Solusie'],
                ['src' => 'assets/projects/solusie-services.png', 'alt' => 'Daftar layanan Solusie']
            ],
            'link' => ''
        ],
        [
            'title' => 'INAGI',
            'type' => 'Company Profile',
            'role' => 'Full Stack Developer',
            'desc' => 'Website company profile dan digital marketing PT Inovasi Anak Negeri untuk katalog mesin industri, konsultasi, artikel edukasi, dan kontak pelanggan.',
            'contribution' => 'Mengembangkan website Laravel yang modern, responsif, dan mendukung pemasaran produk mesin industri serta pengolahan makanan.',
            'stack' => ['Laravel', 'Company Profile', 'Catalog', 'Marketing'],
            'icon' => 'factory',
            'accent' => 'slate',
            'images' => [
                ['src' => 'assets/projects/inagi-home.png', 'alt' => 'Tampilan home INAGI'],
                ['src' => 'assets/projects/inagi-products.png', 'alt' => 'Katalog produk INAGI']
            ],
            'link' => ''
        ],
        [
            'title' => 'RS Galery Candra',
            'type' => 'Company Profile',
            'role' => 'UI Improvement',
            'desc' => 'Website rumah sakit untuk layanan kesehatan, jadwal dokter, fasilitas medis, reservasi pasien, medical check-up, dan homecare.',
            'contribution' => 'Memperbarui desain UI dari tampilan lama menjadi lebih modern, user-friendly, responsif, dan informatif.',
            'stack' => ['Website', 'Responsive', 'Healthcare', 'UI Redesign'],
            'icon' => 'hospital',
            'accent' => 'blue',
            'images' => [
                ['src' => 'assets/projects/rsgc-home.png', 'alt' => 'Tampilan home RS Galery Candra'],
                ['src' => 'assets/projects/rsgc-services.png', 'alt' => 'Halaman layanan RS Galery Candra']
            ],
            'link' => 'https://rumahsakitgalericandra.com/'
        ],
        [
            'title' => 'Depo Fluks',
            'type' => 'Website Business',
            'role' => 'Full Stack Developer',
            'desc' => 'Website bisnis air yang menampilkan informasi produk dan layanan secara jelas untuk calon pelanggan.',
            'contribution' => 'Membangun tampilan website bisnis yang rapi, mudah dipahami, dan siap diakses publik.',
            'stack' => ['Website', 'Water', 'Business', 'Responsive'],
            'icon' => 'droplets',
            'accent' => 'teal',
            'images' => [
                ['src' => 'assets/projects/mydepo-login.png', 'alt' => 'Tampilan aplikasi Depo Fluks']
            ],
            'link' => 'https://depo.flukswater.com/'
        ]
    ],
    'services' => [
        ['title' => 'Website Bisnis', 'desc' => 'Company profile, landing page, katalog, dan halaman promosi yang profesional.', 'icon' => 'monitor-smartphone'],
        ['title' => 'Aplikasi Web & PWA', 'desc' => 'Dashboard, sistem admin, Progressive Web App, dan fitur custom sesuai alur kerja.', 'icon' => 'panel-top'],
        ['title' => 'Mobile App', 'desc' => 'Aplikasi Flutter dengan integrasi API untuk kebutuhan operasional dan layanan digital.', 'icon' => 'smartphone'],
        ['title' => 'Perapihan UI', 'desc' => 'Merapikan tampilan lama agar lebih modern, konsisten, responsif, dan nyaman digunakan.', 'icon' => 'sparkles']
    ],
    'socials' => [
        ['icon' => 'github', 'label' => 'GitHub', 'link' => 'https://github.com/Hattaa22'],
        ['icon' => 'linkedin', 'label' => 'LinkedIn', 'link' => 'https://linkedin.com/in/suhatta'],
        ['icon' => 'phone', 'label' => 'WhatsApp', 'link' => 'https://wa.me/6285815707390'],
        ['icon' => 'mail', 'label' => 'Email', 'link' => 'mailto:suhatta26@gmail.com']
    ]
];

function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function brandIcon($icon, $class = 'h-5 w-5') {
    $icons = [
        'github' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 .5C5.65.5.5 5.65.5 12c0 5.1 3.29 9.42 7.86 10.95.58.1.79-.25.79-.56v-2.16c-3.2.7-3.87-1.37-3.87-1.37-.52-1.33-1.28-1.68-1.28-1.68-1.05-.72.08-.7.08-.7 1.16.08 1.77 1.2 1.77 1.2 1.03 1.76 2.7 1.25 3.36.96.1-.75.4-1.25.73-1.54-2.55-.29-5.24-1.28-5.24-5.68 0-1.26.45-2.29 1.19-3.1-.12-.29-.52-1.46.11-3.05 0 0 .97-.31 3.17 1.18A11 11 0 0 1 12 6.06c.98 0 1.95.13 2.87.39 2.2-1.49 3.17-1.18 3.17-1.18.63 1.59.23 2.76.11 3.05.74.81 1.19 1.84 1.19 3.1 0 4.41-2.69 5.38-5.25 5.67.41.36.78 1.07.78 2.15v3.15c0 .31.21.67.8.56A11.51 11.51 0 0 0 23.5 12C23.5 5.65 18.35.5 12 .5Z"/></svg>',
        'linkedin' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.45 20.45h-3.55v-5.57c0-1.33-.03-3.04-1.85-3.04-1.85 0-2.14 1.45-2.14 2.94v5.67H9.35V9h3.41v1.56h.05c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.46v6.28ZM5.34 7.43a2.06 2.06 0 1 1 0-4.13 2.06 2.06 0 0 1 0 4.13ZM7.12 20.45H3.56V9h3.56v11.45ZM22.23 0H1.77C.79 0 0 .77 0 1.73v20.54C0 23.23.79 24 1.77 24h20.45c.98 0 1.78-.77 1.78-1.73V1.73C24 .77 23.2 0 22.23 0Z"/></svg>'
    ];

    return $icons[$icon] ?? null;
}

function projectAccent($accent) {
    $accents = [
        'sky' => ['bg' => 'bg-zinc-100', 'text' => 'text-zinc-800', 'border' => 'border-zinc-300', 'bar' => 'from-zinc-800 to-zinc-500'],
        'violet' => ['bg' => 'bg-neutral-100', 'text' => 'text-neutral-800', 'border' => 'border-neutral-300', 'bar' => 'from-neutral-800 to-stone-500'],
        'emerald' => ['bg' => 'bg-stone-100', 'text' => 'text-stone-800', 'border' => 'border-stone-300', 'bar' => 'from-stone-800 to-zinc-500'],
        'amber' => ['bg' => 'bg-red-50', 'text' => 'text-red-800', 'border' => 'border-red-200', 'bar' => 'from-zinc-800 to-red-700'],
        'cyan' => ['bg' => 'bg-zinc-100', 'text' => 'text-zinc-800', 'border' => 'border-zinc-300', 'bar' => 'from-zinc-700 to-neutral-500'],
        'rose' => ['bg' => 'bg-red-50', 'text' => 'text-red-800', 'border' => 'border-red-200', 'bar' => 'from-red-900 to-zinc-600'],
        'slate' => ['bg' => 'bg-stone-100', 'text' => 'text-stone-800', 'border' => 'border-stone-300', 'bar' => 'from-stone-800 to-neutral-500'],
        'blue' => ['bg' => 'bg-zinc-100', 'text' => 'text-zinc-800', 'border' => 'border-zinc-300', 'bar' => 'from-zinc-800 to-stone-500'],
        'teal' => ['bg' => 'bg-neutral-100', 'text' => 'text-neutral-800', 'border' => 'border-neutral-300', 'bar' => 'from-neutral-800 to-zinc-500']
    ];

    return $accents[$accent] ?? $accents['sky'];
}

$projectFilters = ['All', 'Web Application', 'Mobile Application', 'Progressive Web App', 'Company Profile'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($profile['name']); ?> - <?= e($profile['role']); ?> Portofolio</title>
    <meta name="description" content="Portofolio <?= e($profile['name']); ?>, Full Stack Web Developer. Project Laravel, Flutter, PWA, PHP, API, dan UI redesign.">
    <meta name="keywords" content="Suhatta, Full Stack Developer, Web Developer Indonesia, Laravel, PHP, JavaScript, Flutter, PWA">
    <meta name="author" content="<?= e($profile['name']); ?>">
    <meta property="og:title" content="<?= e($profile['name']); ?> - <?= e($profile['role']); ?>">
    <meta property="og:description" content="<?= e($profile['tagline']); ?>">
    <meta property="og:type" content="website">
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' rx='18' fill='%23111827'/%3E%3Ctext x='50' y='65' font-size='58' text-anchor='middle' fill='white' font-family='Arial'%3ES%3C/text%3E%3C/svg%3E">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        ink: '#171717',
                        paper: '#e5e5e5',
                        line: '#c9c9c9'
                    },
                    boxShadow: {
                        soft: '0 18px 45px rgba(15, 23, 42, .08)',
                        lift: '0 24px 70px rgba(15, 23, 42, .13)'
                    }
                }
            }
        }
    </script>
    <style>
        html { scroll-behavior: smooth; }
        body {
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background:
                radial-gradient(circle at top left, rgba(255, 255, 255, .76), transparent 30rem),
                radial-gradient(circle at 92% 18%, rgba(120, 120, 120, .2), transparent 28rem),
                radial-gradient(circle at 18% 72%, rgba(185, 28, 28, .08), transparent 30rem),
                linear-gradient(180deg, #f1f1f1 0%, #d8d8d8 48%, #eeeeee 100%);
            background-attachment: fixed;
        }
        .fade-slide {
            opacity: 0;
            transform: translateY(18px);
            transition: opacity .55s ease, transform .55s ease;
        }
        .fade-slide.show {
            opacity: 1;
            transform: translateY(0);
        }
        .hero-bg {
            background:
                linear-gradient(135deg, rgba(250, 250, 250, .92), rgba(214, 214, 214, .84)),
                radial-gradient(circle at 15% 22%, rgba(255, 255, 255, .72), transparent 24rem),
                radial-gradient(circle at 78% 12%, rgba(115, 115, 115, .18), transparent 24rem),
                radial-gradient(circle at 58% 90%, rgba(153, 27, 27, .1), transparent 26rem);
        }
        .accent-line {
            background: linear-gradient(90deg, #1f1f1f, #b8b8b8, #7f1d1d);
        }
        .name-text {
            color: #171717;
            text-shadow: 0 8px 28px rgba(23, 23, 23, .14);
        }
        .portfolio-grid {
            background-image:
                linear-gradient(rgba(38, 38, 38, .08) 1px, transparent 1px),
                linear-gradient(90deg, rgba(115, 115, 115, .08) 1px, transparent 1px);
            background-size: 34px 34px;
        }
        .project-card.is-hidden {
            display: none;
        }
        .project-visual {
            height: clamp(360px, 58vw, 460px);
            display: grid;
            place-items: center;
        }
        .project-visual img {
            max-height: 100%;
            max-width: 100%;
            object-fit: contain;
        }
        .project-thumb {
            height: 94px;
            display: grid;
            place-items: center;
        }
        .project-thumb img {
            max-height: 100%;
            max-width: 100%;
            object-fit: contain;
        }
        @media (min-width: 768px) {
            .project-visual {
                height: 420px;
            }
            .project-thumb {
                height: 118px;
            }
        }
        @media (min-width: 1280px) {
            .project-visual {
                height: 440px;
            }
        }
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                scroll-behavior: auto !important;
                transition-duration: .01ms !important;
            }
        }
    </style>
</head>
<body class="text-neutral-950 antialiased">
    <header class="fixed inset-x-0 top-0 z-50">
        <div class="mx-auto max-w-7xl px-4 pt-4">
            <div class="rounded-2xl border border-zinc-300/80 bg-zinc-100/90 px-4 py-3 shadow-sm backdrop-blur">
                <div class="flex items-center justify-between gap-4">
                    <a href="#home" class="flex min-w-0 items-center gap-3" aria-label="<?= e($profile['name']); ?>">
                        <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-neutral-900 font-black text-zinc-100">S</span>
                        <span class="truncate font-black"><?= e($profile['name']); ?></span>
                    </a>

                    <nav class="hidden items-center gap-1 text-sm font-semibold text-zinc-700 md:flex">
                        <a href="#about" class="rounded-xl px-4 py-2 transition hover:bg-zinc-200 hover:text-neutral-950">Tentang</a>
                        <a href="#skills" class="rounded-xl px-4 py-2 transition hover:bg-zinc-200 hover:text-neutral-950">Skill</a>
                        <a href="#projects" class="rounded-xl px-4 py-2 transition hover:bg-zinc-200 hover:text-neutral-950">Project</a>
                        <a href="#contact" class="rounded-xl px-4 py-2 transition hover:bg-zinc-200 hover:text-neutral-950">Kontak</a>
                    </nav>

                    <a href="#contact" class="hidden rounded-xl bg-neutral-900 px-5 py-2.5 text-sm font-bold text-zinc-100 transition hover:bg-zinc-700 sm:inline-flex">Hubungi</a>

                    <button id="menuBtn" class="grid h-10 w-10 place-items-center rounded-xl border border-zinc-300/80 text-neutral-950 md:hidden" aria-label="Buka menu" aria-expanded="false">
                        <i data-lucide="menu" class="h-5 w-5"></i>
                    </button>
                </div>

                <nav id="mobileMenu" class="mt-3 hidden border-t border-zinc-300/80 pt-3 text-sm font-semibold text-zinc-700 md:hidden">
                    <a href="#about" class="block rounded-xl px-3 py-2 hover:bg-zinc-200">Tentang</a>
                    <a href="#skills" class="block rounded-xl px-3 py-2 hover:bg-zinc-200">Skill</a>
                    <a href="#projects" class="block rounded-xl px-3 py-2 hover:bg-zinc-200">Project</a>
                    <a href="#contact" class="block rounded-xl px-3 py-2 hover:bg-zinc-200">Kontak</a>
                </nav>
            </div>
        </div>
    </header>

    <main id="home">
        <section class="hero-bg px-4 pt-32 pb-16 sm:pt-36 sm:pb-20">
            <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-[1.02fr_.98fr] lg:items-center">
                <div class="fade-slide">
                    <div class="inline-flex items-center gap-2 rounded-full border border-zinc-300/80 bg-zinc-100 px-4 py-2 text-sm font-bold text-zinc-700 shadow-sm">
                        <span class="h-2 w-2 rounded-full bg-red-800"></span>
                        <?= e($profile['eyebrow']); ?>
                    </div>

                    <h1 class="mt-7 max-w-4xl text-4xl font-black leading-tight text-neutral-950 sm:text-6xl">
                        Portofolio <span class="name-text"><?= e($profile['name']); ?></span>.
                    </h1>
                    <p class="mt-5 max-w-2xl text-xl font-bold text-neutral-900"><?= e($profile['role']); ?></p>
                    <p class="mt-4 max-w-2xl text-base leading-7 text-zinc-700 sm:text-lg"><?= e($profile['tagline']); ?></p>

                    <div class="mt-8 flex flex-wrap gap-3">
                        <a href="#projects" class="inline-flex items-center justify-center gap-2 rounded-xl bg-neutral-900 px-6 py-3.5 text-sm font-bold text-zinc-100 shadow-soft transition hover:bg-zinc-700">
                            <i data-lucide="briefcase-business" class="h-5 w-5"></i>
                            Lihat Project
                        </a>
                        <a href="<?= e($profile['whatsapp']); ?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-2 rounded-xl border border-zinc-300 bg-zinc-100 px-5 py-3.5 text-sm font-bold text-neutral-800 transition hover:bg-zinc-200">
                            <i data-lucide="message-square" class="h-5 w-5"></i>
                            Chat WhatsApp
                        </a>
                    </div>

                    <div class="mt-10 grid grid-cols-1 gap-3 sm:grid-cols-3">
                        <?php foreach($profile['stats'] as $stat): ?>
                            <div class="rounded-2xl border border-zinc-300/80 bg-zinc-100/90 p-4 shadow-sm">
                                <div class="flex items-center justify-between gap-3">
                                    <span class="text-2xl font-black"><?= e($stat['value']); ?></span>
                                    <span class="grid h-10 w-10 place-items-center rounded-xl <?= e($stat['bg']); ?> <?= e($stat['color']); ?>">
                                        <i data-lucide="<?= e($stat['icon']); ?>" class="h-5 w-5"></i>
                                    </span>
                                </div>
                                <p class="mt-2 text-xs font-bold uppercase tracking-wide text-zinc-600"><?= e($stat['label']); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="fade-slide">
                    <div class="overflow-hidden rounded-3xl border border-zinc-300/80 bg-zinc-100/95 shadow-lift">
                        <div class="accent-line h-2"></div>
                        <div class="portfolio-grid p-5 sm:p-6">
                            <div class="rounded-2xl border border-zinc-300/80 bg-zinc-50/90 p-5 shadow-sm">
                                <div class="flex items-start justify-between gap-4">
                                    <div>
                                        <p class="text-sm font-black uppercase tracking-[.18em] text-zinc-600">2026 Portfolio</p>
                                        <h2 class="mt-2 text-3xl font-black"><?= e($profile['name']); ?></h2>
                                    </div>
                                    <div class="grid h-14 w-14 place-items-center rounded-2xl bg-neutral-900 text-zinc-100">
                                        <i data-lucide="code-2" class="h-7 w-7"></i>
                                    </div>
                                </div>
                                <p class="mt-5 text-sm leading-6 text-zinc-700"><?= e($profile['bio']); ?></p>
                            </div>

                            <div class="mt-4 grid gap-4 sm:grid-cols-2">
                                <?php foreach($profile['education'] as $edu): ?>
                                    <div class="rounded-2xl border border-zinc-300/80 bg-zinc-50/90 p-4 shadow-sm">
                                        <i data-lucide="graduation-cap" class="h-5 w-5 text-red-800"></i>
                                        <p class="mt-3 text-sm font-black"><?= e($edu['school']); ?></p>
                                        <p class="mt-1 text-xs font-bold text-zinc-600"><?= e($edu['period']); ?></p>
                                        <p class="mt-2 text-sm text-zinc-700"><?= e($edu['major']); ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="px-4 py-16 sm:py-20">
            <div class="mx-auto grid max-w-7xl gap-8 lg:grid-cols-[.75fr_1.25fr]">
                <div class="fade-slide">
                    <p class="text-sm font-black uppercase tracking-[.2em] text-red-800">Tentang</p>
                    <h2 class="mt-3 text-3xl font-black leading-tight sm:text-4xl">Fokus pada solusi digital yang efisien dan inovatif.</h2>
                    <p class="mt-4 leading-7 text-zinc-700">Pengalaman project mencakup sistem informasi kampus, aplikasi koperasi digital, absensi mobile, PWA operasional bisnis, company profile, dan perapihan UI website.</p>
                </div>
                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    <?php foreach($profile['services'] as $index => $service): ?>
                        <?php $colors = [['bg' => 'bg-zinc-200', 'text' => 'text-zinc-800'], ['bg' => 'bg-neutral-200', 'text' => 'text-neutral-800'], ['bg' => 'bg-stone-200', 'text' => 'text-stone-800'], ['bg' => 'bg-red-100', 'text' => 'text-red-800']]; ?>
                        <?php $color = $colors[$index % count($colors)]; ?>
                        <article class="fade-slide rounded-2xl border border-zinc-300/80 bg-zinc-100/90 p-5 shadow-sm transition hover:-translate-y-1 hover:bg-zinc-50 hover:shadow-soft">
                            <div class="grid h-11 w-11 place-items-center rounded-xl <?= e($color['bg']); ?> <?= e($color['text']); ?>">
                                <i data-lucide="<?= e($service['icon']); ?>" class="h-6 w-6"></i>
                            </div>
                            <h3 class="mt-5 text-lg font-black"><?= e($service['title']); ?></h3>
                            <p class="mt-2 text-sm leading-6 text-zinc-700"><?= e($service['desc']); ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="skills" class="border-y border-zinc-300/70 bg-zinc-200/60 px-4 py-16 backdrop-blur sm:py-20">
            <div class="mx-auto max-w-7xl">
                <div class="fade-slide flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
                    <div>
                        <p class="text-sm font-black uppercase tracking-[.2em] text-neutral-700">Personal Skill</p>
                        <h2 class="mt-3 text-3xl font-black sm:text-4xl">Tech stack dari PDF portofolio.</h2>
                    </div>
                    <p class="max-w-md text-zinc-700">Skill yang digunakan untuk membangun frontend, backend, aplikasi mobile, integrasi API, dan database.</p>
                </div>

                <div class="mt-10 grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-6">
                    <?php foreach($profile['skills'] as $skill): ?>
                        <div class="fade-slide rounded-2xl border border-zinc-300/80 bg-zinc-100 p-4 transition hover:-translate-y-1 hover:bg-zinc-50 hover:shadow-sm">
                            <i data-lucide="<?= e($skill['icon']); ?>" class="h-6 w-6 text-neutral-800"></i>
                            <p class="mt-5 font-black"><?= e($skill['name']); ?></p>
                            <p class="mt-1 text-xs font-bold uppercase tracking-wide text-zinc-600"><?= e($skill['cat']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="projects" class="px-4 py-16 sm:py-20">
            <div class="mx-auto max-w-7xl">
                <div class="fade-slide flex flex-col gap-5 md:flex-row md:items-end md:justify-between">
                    <div>
                        <p class="text-sm font-black uppercase tracking-[.2em] text-red-800">Pencapaian Project</p>
                        <h2 class="mt-3 text-3xl font-black sm:text-4xl">Project lengkap dari portofolio.</h2>
                        <p class="mt-2 max-w-2xl text-zinc-700">Daftar ini menggabungkan project dari PDF dan project live yang sudah ada di website.</p>
                    </div>
                    <div class="flex flex-wrap gap-2" aria-label="Filter project">
                        <?php foreach($projectFilters as $filter): ?>
                            <button type="button" class="filter-btn rounded-xl border border-zinc-300/80 bg-zinc-100 px-4 py-2 text-sm font-black text-zinc-700 transition hover:border-neutral-500 hover:text-neutral-950 data-[active=true]:bg-neutral-900 data-[active=true]:text-zinc-100" data-filter="<?= e($filter); ?>" data-active="<?= $filter === 'All' ? 'true' : 'false'; ?>">
                                <?= e($filter); ?>
                            </button>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="mt-10 grid gap-6 lg:grid-cols-2">
                    <?php foreach($profile['projects'] as $project): ?>
                        <?php $accent = projectAccent($project['accent']); ?>
                        <?php $isLive = !empty($project['link']); ?>
                        <?php $images = $project['images'] ?? []; ?>
                        <article class="project-card fade-slide overflow-hidden rounded-3xl border border-zinc-300/80 bg-zinc-100/90 shadow-sm backdrop-blur transition hover:-translate-y-1 hover:shadow-soft" data-type="<?= e($project['type']); ?>">
                            <div class="bg-gradient-to-br <?= e($accent['bar']); ?> p-3 text-white sm:p-5">
                                <div class="mb-3 flex items-center justify-between gap-4">
                                    <span class="rounded-full bg-white/20 px-3 py-1 text-xs font-black"><?= e($project['type']); ?></span>
                                    <span class="grid h-9 w-9 place-items-center rounded-xl bg-white/16">
                                        <i data-lucide="<?= e($project['icon']); ?>" class="h-5 w-5"></i>
                                    </span>
                                </div>
                                <?php if(!empty($images)): ?>
                                    <a href="<?= e($images[0]['src']); ?>" target="_blank" rel="noopener" class="project-visual overflow-hidden rounded-2xl border border-white/20 bg-zinc-100/95 shadow-sm transition hover:bg-zinc-50">
                                        <img src="<?= e($images[0]['src']); ?>" alt="<?= e($images[0]['alt']); ?>" loading="lazy">
                                    </a>
                                    <?php if(count($images) > 1): ?>
                                        <div class="mt-3 grid grid-cols-3 gap-2">
                                            <?php foreach(array_slice($images, 1, 3) as $image): ?>
                                                <a href="<?= e($image['src']); ?>" target="_blank" rel="noopener" class="project-thumb overflow-hidden rounded-xl border border-white/20 bg-zinc-100/90 transition hover:bg-zinc-50">
                                                    <img src="<?= e($image['src']); ?>" alt="<?= e($image['alt']); ?>" loading="lazy">
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <div class="rounded-2xl bg-white/14 p-4 ring-1 ring-white/20">
                                        <div class="mb-3 flex items-center gap-2">
                                            <span class="h-2.5 w-2.5 rounded-full bg-red-200"></span>
                                            <span class="h-2.5 w-2.5 rounded-full bg-zinc-300"></span>
                                            <span class="h-2.5 w-2.5 rounded-full bg-neutral-300"></span>
                                        </div>
                                        <span class="block h-16 rounded-xl bg-white/28"></span>
                                        <span class="mt-3 block h-2.5 w-11/12 rounded-full bg-white/35"></span>
                                        <span class="mt-2 block h-2.5 w-7/12 rounded-full bg-white/25"></span>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="p-5">
                                <div class="flex items-start justify-between gap-3">
                                    <h3 class="text-xl font-black leading-tight"><?= e($project['title']); ?></h3>
                                    <span class="shrink-0 rounded-full <?= e($accent['bg']); ?> px-3 py-1 text-xs font-black <?= e($accent['text']); ?>"><?= e($project['role']); ?></span>
                                </div>
                                <p class="mt-4 text-sm leading-6 text-zinc-700"><?= e($project['desc']); ?></p>
                                <div class="mt-4 rounded-2xl border <?= e($accent['border']); ?> <?= e($accent['bg']); ?> p-4">
                                    <p class="text-xs font-black uppercase tracking-wide <?= e($accent['text']); ?>">Kontribusi</p>
                                    <p class="mt-2 text-sm leading-6 text-zinc-800"><?= e($project['contribution']); ?></p>
                                </div>
                                <div class="mt-5 flex flex-wrap gap-2">
                                    <?php foreach($project['stack'] as $stack): ?>
                                        <span class="rounded-full bg-zinc-200 px-3 py-1 text-xs font-bold text-zinc-700"><?= e($stack); ?></span>
                                    <?php endforeach; ?>
                                </div>
                                <?php if($isLive): ?>
                                    <a href="<?= e($project['link']); ?>" target="_blank" rel="noopener" class="mt-6 inline-flex items-center gap-2 text-sm font-black <?= e($accent['text']); ?> hover:underline">
                                        Lihat web live
                                        <i data-lucide="external-link" class="h-4 w-4"></i>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="contact" class="px-4 py-16 sm:py-20">
            <div class="mx-auto max-w-7xl">
                <div class="overflow-hidden rounded-3xl bg-neutral-900 text-zinc-100 shadow-soft">
                    <div class="accent-line h-2"></div>
                    <div class="grid lg:grid-cols-[1.1fr_.9fr]">
                        <div class="p-6 sm:p-10">
                            <p class="text-sm font-black uppercase tracking-[.2em] text-zinc-300">Kontak Langsung</p>
                            <h2 class="mt-4 max-w-2xl text-3xl font-black leading-tight sm:text-4xl">Siap membuat project digital berikutnya?</h2>
                            <p class="mt-4 leading-7 text-zinc-300">Kirim pesan langsung untuk konsultasi website, aplikasi mobile, PWA, atau perapihan UI.</p>

                            <form id="contactForm" class="mt-8 space-y-4" onsubmit="sendToWhatsapp(event)">
                                <div>
                                    <label for="contactName" class="mb-1 block text-xs font-bold uppercase tracking-wider text-zinc-400">Nama Anda</label>
                                    <input type="text" id="contactName" required placeholder="Masukkan nama..." class="w-full rounded-xl border border-zinc-600 bg-white/10 px-4 py-3 text-sm text-zinc-100 placeholder-zinc-500 transition focus:border-red-300 focus:outline-none">
                                </div>
                                <div>
                                    <label for="contactMessage" class="mb-1 block text-xs font-bold uppercase tracking-wider text-zinc-400">Pesan / Project Detail</label>
                                    <textarea id="contactMessage" rows="3" required placeholder="Jelaskan kebutuhan project Anda..." class="w-full rounded-xl border border-zinc-600 bg-white/10 px-4 py-3 text-sm text-zinc-100 placeholder-zinc-500 transition focus:border-red-300 focus:outline-none"></textarea>
                                </div>
                                <button type="submit" class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-zinc-200 px-6 py-3.5 text-sm font-black text-neutral-950 shadow-lg transition hover:bg-white">
                                    <i data-lucide="message-square" class="h-5 w-5"></i>
                                    Kirim via WhatsApp (<?= e($profile['phone']); ?>)
                                </button>
                            </form>
                        </div>

                        <div class="flex flex-col justify-between border-t border-white/10 p-6 sm:p-10 lg:border-l lg:border-t-0">
                            <div>
                                <p class="text-sm font-black text-zinc-300">Info Kontak & Media Sosial</p>
                                <div class="mt-5 grid gap-3">
                                    <a href="tel:<?= e($profile['phone_raw']); ?>" class="flex items-center justify-between rounded-xl border border-zinc-600 bg-white/5 p-4 font-bold text-zinc-100 transition hover:bg-white/10">
                                        <span class="flex items-center gap-3">
                                            <i data-lucide="phone-call" class="h-5 w-5 text-red-300"></i>
                                            <?= e($profile['phone']); ?>
                                        </span>
                                        <i data-lucide="arrow-up-right" class="h-4 w-4 text-red-300"></i>
                                    </a>

                                    <a href="mailto:<?= e($profile['email']); ?>" class="flex items-center justify-between rounded-xl border border-zinc-600 bg-white/5 p-4 font-bold text-zinc-100 transition hover:bg-white/10">
                                        <span class="flex items-center gap-3">
                                            <i data-lucide="mail" class="h-5 w-5 text-zinc-300"></i>
                                            <?= e($profile['email']); ?>
                                        </span>
                                        <i data-lucide="arrow-up-right" class="h-4 w-4 text-zinc-300"></i>
                                    </a>

                                    <?php foreach($profile['socials'] as $social): ?>
                                        <?php if($social['icon'] !== 'mail' && $social['icon'] !== 'phone'): ?>
                                            <?php $brandSvg = brandIcon($social['icon']); ?>
                                            <a href="<?= e($social['link']); ?>" target="_blank" rel="noopener" class="flex items-center justify-between rounded-xl border border-zinc-600 bg-white/5 p-4 font-bold text-zinc-100 transition hover:bg-white/10">
                                                <span class="flex items-center gap-3">
                                                    <?php if($brandSvg): ?>
                                                        <?= $brandSvg; ?>
                                                    <?php else: ?>
                                                        <i data-lucide="<?= e($social['icon']); ?>" class="h-5 w-5"></i>
                                                    <?php endif; ?>
                                                    <?= e($social['label']); ?>
                                                </span>
                                                <i data-lucide="arrow-up-right" class="h-4 w-4 text-zinc-300"></i>
                                            </a>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <a href="#home" class="mt-8 inline-flex items-center justify-center gap-2 rounded-xl border border-zinc-600 px-5 py-3 text-sm font-black text-zinc-100 transition hover:bg-white/10">
                                <i data-lucide="arrow-up" class="h-4 w-4"></i>
                                Kembali ke atas
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="border-t border-zinc-300/80 bg-zinc-100/80 px-4 py-8 backdrop-blur">
        <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-5 text-center text-sm text-zinc-600 sm:flex-row sm:text-left">
            <div>
                <p class="font-bold text-neutral-800">&copy; <?= date('Y'); ?> <?= e($profile['name']); ?>. All rights reserved.</p>
                <p class="mt-1">Dibuat dengan PHP, TailwindCSS, Lucide, dan data portofolio 2026.</p>
            </div>
            <div class="flex items-center gap-2">
                <?php foreach($profile['socials'] as $social): ?>
                    <?php $brandSvg = brandIcon($social['icon']); ?>
                    <a href="<?= e($social['link']); ?>" target="_blank" rel="noopener" class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-zinc-300/80 bg-zinc-50 text-zinc-700 transition hover:border-red-300 hover:text-red-800" aria-label="<?= e($social['label']); ?>">
                        <?php if($brandSvg): ?>
                            <?= $brandSvg; ?>
                        <?php else: ?>
                            <i data-lucide="<?= e($social['icon']); ?>" class="h-5 w-5"></i>
                        <?php endif; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </footer>

    <script>
        lucide.createIcons();

        const menuBtn = document.getElementById('menuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const filterButtons = document.querySelectorAll('.filter-btn');
        const projectCards = document.querySelectorAll('.project-card');

        menuBtn.addEventListener('click', () => {
            const isOpen = !mobileMenu.classList.contains('hidden');
            mobileMenu.classList.toggle('hidden');
            menuBtn.setAttribute('aria-expanded', String(!isOpen));
        });

        mobileMenu.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                menuBtn.setAttribute('aria-expanded', 'false');
            });
        });

        filterButtons.forEach((button) => {
            button.addEventListener('click', () => {
                const filter = button.dataset.filter;

                filterButtons.forEach((item) => item.dataset.active = String(item === button));
                projectCards.forEach((card) => {
                    const matches = filter === 'All' || card.dataset.type === filter;
                    card.classList.toggle('is-hidden', !matches);
                });
            });
        });

        function sendToWhatsapp(e) {
            e.preventDefault();
            const name = document.getElementById('contactName').value.trim();
            const message = document.getElementById('contactMessage').value.trim();
            const phone = '6285815707390';
            const text = `Halo Suhatta, saya ${name}.\n\n${message}`;
            const url = `https://wa.me/${phone}?text=${encodeURIComponent(text)}`;
            window.open(url, '_blank');
        }

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.14 });

        document.querySelectorAll('.fade-slide').forEach((el) => observer.observe(el));
    </script>
</body>
</html>

