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
        ['value' => '8', 'label' => 'Project portofolio', 'icon' => 'folder-kanban', 'color' => 'text-slate-900', 'bg' => 'bg-slate-200/80'],
        ['value' => '11', 'label' => 'Skill teknis', 'icon' => 'badge-check', 'color' => 'text-slate-800', 'bg' => 'bg-slate-200/80'],
        ['value' => '2026', 'label' => 'Portofolio terbaru', 'icon' => 'sparkles', 'color' => 'text-slate-900', 'bg' => 'bg-slate-300/80']
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
            'title' => 'Depo Fluks (My Depo)',
            'type' => 'Progressive Web App',
            'role' => 'Full Stack Developer',
            'desc' => 'PWA & Website bisnis operasional depo air minum, mencakup pengelolaan pelanggan, transaksi, pemesanan air, monitoring stok, dan laporan penjualan real-time.',
            'contribution' => 'Mengembangkan PWA dan website bisnis menggunakan PHP Native dan JSON agar ringan, responsif, dan praktis digunakan di mobile maupun desktop.',
            'stack' => ['PWA', 'PHP Native', 'JSON', 'Water Business'],
            'icon' => 'glass-water',
            'accent' => 'cyan',
            'images' => [
                ['src' => 'assets/projects/mydepo-login.png', 'alt' => 'Tampilan pilihan login Depo Fluks / My Depo'],
                ['src' => 'assets/projects/mydepo-admin.png', 'alt' => 'Dashboard admin Depo Fluks / My Depo'],
                ['src' => 'assets/projects/mydepo-manager.png', 'alt' => 'Dashboard manajer Depo Fluks / My Depo'],
                ['src' => 'assets/projects/mydepo-crew.png', 'alt' => 'Dashboard crew Depo Fluks / My Depo']
            ],
            'link' => 'https://depo.flukswater.com/'
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
        'sky' => ['bg' => 'bg-slate-900/90', 'text' => 'text-slate-200', 'border' => 'border-slate-700/80', 'bar' => 'from-slate-950 via-slate-900 to-slate-800'],
        'violet' => ['bg' => 'bg-slate-900/90', 'text' => 'text-slate-200', 'border' => 'border-slate-700/80', 'bar' => 'from-slate-950 via-slate-900 to-slate-800'],
        'emerald' => ['bg' => 'bg-slate-900/90', 'text' => 'text-slate-200', 'border' => 'border-slate-700/80', 'bar' => 'from-slate-950 via-slate-900 to-slate-800'],
        'amber' => ['bg' => 'bg-slate-900/90', 'text' => 'text-slate-200', 'border' => 'border-slate-700/80', 'bar' => 'from-slate-950 via-slate-900 to-slate-800'],
        'cyan' => ['bg' => 'bg-slate-900/90', 'text' => 'text-slate-200', 'border' => 'border-slate-700/80', 'bar' => 'from-slate-950 via-slate-900 to-slate-800'],
        'rose' => ['bg' => 'bg-slate-900/90', 'text' => 'text-slate-200', 'border' => 'border-slate-700/80', 'bar' => 'from-slate-950 via-slate-900 to-slate-800'],
        'slate' => ['bg' => 'bg-slate-900/90', 'text' => 'text-slate-200', 'border' => 'border-slate-700/80', 'bar' => 'from-slate-950 via-slate-900 to-slate-800'],
        'blue' => ['bg' => 'bg-slate-900/90', 'text' => 'text-slate-200', 'border' => 'border-slate-700/80', 'bar' => 'from-slate-950 via-slate-900 to-slate-800'],
        'teal' => ['bg' => 'bg-slate-900/90', 'text' => 'text-slate-200', 'border' => 'border-slate-700/80', 'bar' => 'from-slate-950 via-slate-900 to-slate-800']
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
                        metallic: {
                            100: '#e6edf5',
                            200: '#d0dbe7',
                            300: '#b4c3d4',
                            400: '#94a5ba',
                            500: '#73869c',
                            600: '#56687e',
                            700: '#3e4d60',
                            800: '#283445',
                            900: '#17212f',
                            950: '#0c121d'
                        }
                    },
                    boxShadow: {
                        glass: '0 20px 40px rgba(12, 18, 29, .25)',
                        card: '0 12px 30px rgba(12, 18, 29, .18)',
                        glow: '0 0 30px rgba(180, 195, 212, .3)',
                        hoverCard: '0 20px 40px rgba(12, 18, 29, .28)'
                    }
                }
            }
        }
    </script>
    <style>
        html {
            scroll-behavior: smooth;
        }
        body {
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background:
                radial-gradient(circle at 10% 10%, rgba(208, 219, 231, .6), transparent 32rem),
                radial-gradient(circle at 90% 90%, rgba(86, 104, 126, .45), transparent 36rem),
                linear-gradient(135deg, #d8e2ec 0%, #b0c0d2 25%, #7e91a7 55%, #4f6176 80%, #2a3748 100%);
            background-attachment: fixed;
            color: #0c121d;
            overflow-x: hidden;
        }
        .page-section {
            min-height: calc(100vh - 5.5rem);
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-top: 6rem;
            padding-bottom: 3.5rem;
            box-sizing: border-box;
            transition: opacity .4s ease, transform .4s ease;
        }
        .page-section.is-tab-hidden {
            display: none !important;
        }
        .fade-slide {
            opacity: 0;
            transform: translateY(18px);
            transition: opacity .55s cubic-bezier(0.16, 1, 0.3, 1), transform .55s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .fade-slide.show {
            opacity: 1;
            transform: translateY(0);
        }
        .hero-bg {
            background: transparent;
        }
        .accent-line {
            background: linear-gradient(90deg, #d0dbe7, #73869c, #17212f, #73869c, #d0dbe7);
        }
        .name-text {
            background: linear-gradient(135deg, #0c121d 0%, #283445 50%, #4e5f76 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .portfolio-grid {
            background-image:
                linear-gradient(rgba(30, 45, 65, .08) 1px, transparent 1px),
                linear-gradient(90deg, rgba(30, 45, 65, .08) 1px, transparent 1px);
            background-size: 32px 32px;
        }
        .glass-card {
            background: rgba(40, 52, 69, 0.45);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(208, 219, 231, 0.25);
            transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .glass-card:hover {
            transform: translateY(-5px);
            border-color: rgba(208, 219, 231, 0.45);
            box-shadow: 0 20px 40px rgba(12, 18, 29, 0.35);
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
<body class="text-slate-900 antialiased">
    <header class="fixed inset-x-0 top-0 z-50">
        <div class="mx-auto max-w-7xl px-4 pt-4">
            <div class="rounded-2xl border border-slate-700/60 bg-slate-900/80 px-4 py-3 shadow-glass backdrop-blur-md">
                <div class="flex items-center justify-between gap-4">
                    <a href="#home" class="flex min-w-0 items-center gap-3" aria-label="<?= e($profile['name']); ?>">
                        <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-slate-800 border border-slate-700 font-black text-slate-100 shadow-inner">S</span>
                        <span class="truncate font-black text-slate-100"><?= e($profile['name']); ?></span>
                    </a>

                    <nav class="hidden items-center gap-1 text-sm font-semibold text-slate-300 md:flex">
                        <a href="#home" class="nav-tab rounded-xl px-4 py-2 transition hover:bg-slate-800 hover:text-white data-[active=true]:bg-slate-800 data-[active=true]:text-white data-[active=true]:border data-[active=true]:border-slate-700" data-tab="home" data-active="true">Beranda</a>
                        <a href="#about" class="nav-tab rounded-xl px-4 py-2 transition hover:bg-slate-800 hover:text-white data-[active=true]:bg-slate-800 data-[active=true]:text-white data-[active=true]:border data-[active=true]:border-slate-700" data-tab="about" data-active="false">Tentang</a>
                        <a href="#skills" class="nav-tab rounded-xl px-4 py-2 transition hover:bg-slate-800 hover:text-white data-[active=true]:bg-slate-800 data-[active=true]:text-white data-[active=true]:border data-[active=true]:border-slate-700" data-tab="skills" data-active="false">Skill</a>
                        <a href="#projects" class="nav-tab rounded-xl px-4 py-2 transition hover:bg-slate-800 hover:text-white data-[active=true]:bg-slate-800 data-[active=true]:text-white data-[active=true]:border data-[active=true]:border-slate-700" data-tab="projects" data-active="false">Project</a>
                        <a href="#contact" class="nav-tab rounded-xl px-4 py-2 transition hover:bg-slate-800 hover:text-white data-[active=true]:bg-slate-800 data-[active=true]:text-white data-[active=true]:border data-[active=true]:border-slate-700" data-tab="contact" data-active="false">Kontak</a>
                    </nav>

                    <a href="#contact" data-tab="contact" class="nav-tab hidden rounded-xl bg-slate-100 px-5 py-2.5 text-sm font-bold text-slate-950 transition hover:bg-white sm:inline-flex">Hubungi</a>

                    <button id="menuBtn" class="grid h-10 w-10 place-items-center rounded-xl border border-slate-700 text-slate-200 md:hidden" aria-label="Buka menu" aria-expanded="false">
                        <i data-lucide="menu" class="h-5 w-5"></i>
                    </button>
                </div>

                <nav id="mobileMenu" class="mt-3 hidden border-t border-slate-800 pt-3 text-sm font-semibold text-slate-300 md:hidden">
                    <a href="#home" data-tab="home" class="nav-tab block rounded-xl px-3 py-2 hover:bg-slate-800 hover:text-white">Beranda</a>
                    <a href="#about" data-tab="about" class="nav-tab block rounded-xl px-3 py-2 hover:bg-slate-800 hover:text-white">Tentang</a>
                    <a href="#skills" data-tab="skills" class="nav-tab block rounded-xl px-3 py-2 hover:bg-slate-800 hover:text-white">Skill</a>
                    <a href="#projects" data-tab="projects" class="nav-tab block rounded-xl px-3 py-2 hover:bg-slate-800 hover:text-white">Project</a>
                    <a href="#contact" data-tab="contact" class="nav-tab block rounded-xl px-3 py-2 hover:bg-slate-800 hover:text-white">Kontak</a>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <section id="home" class="page-section hero-bg px-4">
            <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-[1.02fr_.98fr] lg:items-center">
                <div class="fade-slide">
                    <div class="inline-flex items-center gap-2 rounded-full border border-slate-700 bg-slate-900/80 px-4 py-2 text-sm font-bold text-slate-300 shadow-sm backdrop-blur">
                        <span class="h-2 w-2 rounded-full bg-slate-400"></span>
                        <?= e($profile['eyebrow']); ?>
                    </div>

                    <h1 class="mt-7 max-w-4xl text-4xl font-black leading-tight text-white sm:text-6xl">
                        Portofolio <span class="name-text"><?= e($profile['name']); ?></span>.
                    </h1>
                    <p class="mt-5 max-w-2xl text-xl font-bold text-slate-200"><?= e($profile['role']); ?></p>
                    <p class="mt-4 max-w-2xl text-base leading-7 text-slate-300 sm:text-lg"><?= e($profile['tagline']); ?></p>

                    <div class="mt-8 flex flex-wrap gap-3">
                        <a href="#projects" data-tab="projects" class="nav-tab inline-flex items-center justify-center gap-2 rounded-xl bg-slate-100 px-6 py-3.5 text-sm font-bold text-slate-950 shadow-card transition hover:-translate-y-0.5 hover:bg-white">
                            <i data-lucide="briefcase-business" class="h-5 w-5"></i>
                            Lihat Project
                        </a>
                        <a href="<?= e($profile['whatsapp']); ?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-700 bg-slate-900/80 px-5 py-3.5 text-sm font-bold text-slate-200 transition hover:-translate-y-0.5 hover:bg-slate-800">
                            <i data-lucide="message-square" class="h-5 w-5"></i>
                            Chat WhatsApp
                        </a>
                    </div>

                    <div class="mt-10 grid grid-cols-1 gap-3 sm:grid-cols-3">
                        <?php foreach($profile['stats'] as $stat): ?>
                            <div class="rounded-2xl border border-slate-700/70 bg-slate-900/80 p-4 shadow-card backdrop-blur">
                                <div class="flex items-center justify-between gap-3">
                                    <span class="text-2xl font-black text-white"><?= e($stat['value']); ?></span>
                                    <span class="grid h-10 w-10 place-items-center rounded-xl bg-slate-800 border border-slate-700 text-slate-300">
                                        <i data-lucide="<?= e($stat['icon']); ?>" class="h-5 w-5"></i>
                                    </span>
                                </div>
                                <p class="mt-2 text-xs font-bold uppercase tracking-wide text-slate-400"><?= e($stat['label']); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="fade-slide">
                    <div class="overflow-hidden rounded-3xl border border-slate-700/70 bg-slate-900/85 shadow-glass backdrop-blur-md">
                        <div class="accent-line h-2"></div>
                        <div class="portfolio-grid p-5 sm:p-6">
                            <div class="rounded-2xl border border-slate-700/70 bg-slate-950/70 p-5 shadow-card">
                                <div class="flex items-start justify-between gap-4">
                                    <div>
                                        <p class="text-sm font-black uppercase tracking-[.18em] text-slate-400">2026 Portfolio</p>
                                        <h2 class="mt-2 text-3xl font-black text-white"><?= e($profile['name']); ?></h2>
                                    </div>
                                    <div class="grid h-14 w-14 place-items-center rounded-2xl bg-slate-800 border border-slate-700 text-slate-100">
                                        <i data-lucide="code-2" class="h-7 w-7"></i>
                                    </div>
                                </div>
                                <p class="mt-5 text-sm leading-6 text-slate-300"><?= e($profile['bio']); ?></p>
                            </div>

                            <div class="mt-4 grid gap-4 sm:grid-cols-2">
                                <?php foreach($profile['education'] as $edu): ?>
                                    <div class="rounded-2xl border border-slate-700/70 bg-slate-950/70 p-4 shadow-card">
                                        <i data-lucide="graduation-cap" class="h-5 w-5 text-slate-400"></i>
                                        <p class="mt-3 text-sm font-black text-white"><?= e($edu['school']); ?></p>
                                        <p class="mt-1 text-xs font-bold text-slate-400"><?= e($edu['period']); ?></p>
                                        <p class="mt-2 text-sm text-slate-300"><?= e($edu['major']); ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="page-section px-4">
            <div class="mx-auto max-w-7xl">
                <!-- Header Banner -->
                <div class="overflow-hidden rounded-3xl border border-slate-700/60 bg-slate-900/80 p-8 shadow-glass backdrop-blur-md">
                    <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
                        <div class="max-w-2xl">
                            <div class="inline-flex items-center gap-2 rounded-full border border-slate-700 bg-slate-800/90 px-3.5 py-1.5 text-xs font-bold uppercase tracking-wider text-slate-300">
                                <span class="h-2 w-2 rounded-full bg-slate-400"></span>
                                Profile & Experience
                            </div>
                            <h2 class="mt-4 text-3xl font-black leading-tight text-white sm:text-4xl">Fokus pada Solusi Digital yang Efisien & Inovatif.</h2>
                            <p class="mt-3 text-base leading-relaxed text-slate-300 sm:text-lg">Pengalaman membangun ekosistem digital kampus, aplikasi mobile koperasi, absensi PWA, company profile berteknologi modern, dan perapihan antarmuka pengguna (UI/UX).</p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 lg:w-72 shrink-0">
                            <div class="rounded-2xl border border-slate-700/80 bg-slate-800/80 p-4 text-center">
                                <p class="text-3xl font-black text-white">4+</p>
                                <p class="mt-1 text-xs font-bold uppercase tracking-wider text-slate-400">Tahun Pengalaman</p>
                            </div>
                            <div class="rounded-2xl border border-slate-700/80 bg-slate-800/80 p-4 text-center">
                                <p class="text-3xl font-black text-white">100%</p>
                                <p class="mt-1 text-xs font-bold uppercase tracking-wider text-slate-400">Dedikasi Performa</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Services Grid -->
                <div class="mt-8 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    <?php foreach($profile['services'] as $index => $service): ?>
                        <article class="fade-slide rounded-3xl border border-slate-700/60 bg-slate-900/80 p-6 shadow-card backdrop-blur-md transition hover:-translate-y-1.5 hover:border-slate-500 hover:bg-slate-850">
                            <div class="flex items-center justify-between">
                                <div class="grid h-12 w-12 place-items-center rounded-2xl bg-slate-800 border border-slate-700 text-slate-100 shadow-inner">
                                    <i data-lucide="<?= e($service['icon']); ?>" class="h-6 w-6"></i>
                                </div>
                                <span class="text-xs font-black tracking-widest text-slate-400">0<?= $index + 1; ?></span>
                            </div>
                            <h3 class="mt-6 text-xl font-black text-white"><?= e($service['title']); ?></h3>
                            <p class="mt-3 text-sm leading-6 text-slate-300"><?= e($service['desc']); ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="skills" class="page-section border-y border-slate-700/50 bg-slate-950/40 px-4 backdrop-blur">
            <div class="mx-auto max-w-7xl">
                <div class="fade-slide flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
                    <div>
                        <p class="text-sm font-black uppercase tracking-[.2em] text-slate-400">Personal Skill</p>
                        <h2 class="mt-3 text-3xl font-black text-white sm:text-4xl">Tech stack dari PDF portofolio.</h2>
                    </div>
                    <p class="max-w-md text-slate-300">Skill yang digunakan untuk membangun frontend, backend, aplikasi mobile, integrasi API, dan database.</p>
                </div>

                <div class="mt-10 grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-6">
                    <?php foreach($profile['skills'] as $skill): ?>
                        <div class="fade-slide rounded-2xl border border-slate-700/70 bg-slate-900/80 p-4 transition hover:-translate-y-1 hover:border-slate-500 hover:bg-slate-800 shadow-card">
                            <i data-lucide="<?= e($skill['icon']); ?>" class="h-6 w-6 text-slate-300"></i>
                            <p class="mt-5 font-black text-slate-100"><?= e($skill['name']); ?></p>
                            <p class="mt-1 text-xs font-bold uppercase tracking-wide text-slate-400"><?= e($skill['cat']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="projects" class="page-section px-4">
            <div class="mx-auto max-w-7xl">
                <div class="fade-slide flex flex-col gap-5 md:flex-row md:items-end md:justify-between">
                    <div>
                        <p class="text-sm font-black uppercase tracking-[.2em] text-slate-400">Pencapaian Project</p>
                        <h2 class="mt-3 text-3xl font-black text-white sm:text-4xl">Project lengkap dari portofolio.</h2>
                        <p class="mt-2 max-w-2xl text-slate-300">Daftar ini menggabungkan project dari PDF dan project live yang sudah ada di website.</p>
                    </div>
                    <div class="flex flex-wrap gap-2" aria-label="Filter project">
                        <?php foreach($projectFilters as $filter): ?>
                            <button type="button" class="filter-btn rounded-xl border border-slate-700/80 bg-slate-900/80 px-4 py-2 text-sm font-black text-slate-300 transition hover:border-slate-500 hover:text-white data-[active=true]:bg-slate-100 data-[active=true]:text-slate-950" data-filter="<?= e($filter); ?>" data-active="<?= $filter === 'All' ? 'true' : 'false'; ?>">
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
                        <article class="project-card fade-slide overflow-hidden rounded-3xl border border-slate-700/70 bg-slate-900/85 shadow-card backdrop-blur transition hover:-translate-y-1 hover:border-slate-500" data-type="<?= e($project['type']); ?>">
                            <div class="bg-gradient-to-br from-slate-950 via-slate-900 to-slate-850 p-3 text-slate-100 sm:p-5">
                                <div class="mb-3 flex items-center justify-between gap-4">
                                    <span class="rounded-full bg-slate-800/90 border border-slate-700 px-3 py-1 text-xs font-black text-slate-200"><?= e($project['type']); ?></span>
                                    <span class="grid h-9 w-9 place-items-center rounded-xl bg-slate-800 border border-slate-700">
                                        <i data-lucide="<?= e($project['icon']); ?>" class="h-5 w-5 text-slate-200"></i>
                                    </span>
                                </div>
                                <?php if(!empty($images)): ?>
                                    <a href="<?= e($images[0]['src']); ?>" target="_blank" rel="noopener" class="project-visual overflow-hidden rounded-2xl border border-slate-800 bg-slate-950/90 shadow-sm transition hover:border-slate-700">
                                        <img src="<?= e($images[0]['src']); ?>" alt="<?= e($images[0]['alt']); ?>" loading="lazy">
                                    </a>
                                    <?php if(count($images) > 1): ?>
                                        <div class="mt-3 grid grid-cols-3 gap-2">
                                            <?php foreach(array_slice($images, 1, 3) as $image): ?>
                                                <a href="<?= e($image['src']); ?>" target="_blank" rel="noopener" class="project-thumb overflow-hidden rounded-xl border border-slate-800 bg-slate-950/80 transition hover:border-slate-700">
                                                    <img src="<?= e($image['src']); ?>" alt="<?= e($image['alt']); ?>" loading="lazy">
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <div class="rounded-2xl bg-slate-950/80 p-4 ring-1 ring-slate-800">
                                        <div class="mb-3 flex items-center gap-2">
                                            <span class="h-2.5 w-2.5 rounded-full bg-slate-600"></span>
                                            <span class="h-2.5 w-2.5 rounded-full bg-slate-700"></span>
                                            <span class="h-2.5 w-2.5 rounded-full bg-slate-800"></span>
                                        </div>
                                        <span class="block h-16 rounded-xl bg-slate-900 border border-slate-800"></span>
                                        <span class="mt-3 block h-2.5 w-11/12 rounded-full bg-slate-800"></span>
                                        <span class="mt-2 block h-2.5 w-7/12 rounded-full bg-slate-800"></span>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="p-5">
                                <div class="flex items-start justify-between gap-3">
                                    <h3 class="text-xl font-black leading-tight text-white"><?= e($project['title']); ?></h3>
                                    <span class="shrink-0 rounded-full bg-slate-800 border border-slate-700 px-3 py-1 text-xs font-black text-slate-200"><?= e($project['role']); ?></span>
                                </div>
                                <p class="mt-4 text-sm leading-6 text-slate-300"><?= e($project['desc']); ?></p>
                                <div class="mt-4 rounded-2xl border border-slate-700/70 bg-slate-950/70 p-4">
                                    <p class="text-xs font-black uppercase tracking-wide text-slate-400">Kontribusi</p>
                                    <p class="mt-2 text-sm leading-6 text-slate-300"><?= e($project['contribution']); ?></p>
                                </div>
                                <div class="mt-5 flex flex-wrap gap-2">
                                    <?php foreach($project['stack'] as $stack): ?>
                                        <span class="rounded-full bg-slate-800 border border-slate-700 px-3 py-1 text-xs font-bold text-slate-300"><?= e($stack); ?></span>
                                    <?php endforeach; ?>
                                </div>
                                <?php if($isLive): ?>
                                    <a href="<?= e($project['link']); ?>" target="_blank" rel="noopener" class="mt-6 inline-flex items-center gap-2 text-sm font-black text-slate-200 hover:text-white hover:underline">
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

        <section id="contact" class="page-section px-4">
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
                                    <label for="contactName" class="mb-1 block text-xs font-bold uppercase tracking-wider text-slate-400">Nama Anda</label>
                                    <input type="text" id="contactName" required placeholder="Masukkan nama..." class="w-full rounded-xl border border-slate-700 bg-white/10 px-4 py-3 text-sm text-slate-100 placeholder-slate-400 transition focus:border-slate-400 focus:outline-none">
                                </div>
                                <div>
                                    <label for="contactMessage" class="mb-1 block text-xs font-bold uppercase tracking-wider text-slate-400">Pesan / Project Detail</label>
                                    <textarea id="contactMessage" rows="3" required placeholder="Jelaskan kebutuhan project Anda..." class="w-full rounded-xl border border-slate-700 bg-white/10 px-4 py-3 text-sm text-slate-100 placeholder-slate-400 transition focus:border-slate-400 focus:outline-none"></textarea>
                                </div>
                                <button type="submit" class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-slate-100 px-6 py-3.5 text-sm font-black text-slate-950 shadow-lg transition hover:bg-white">
                                    <i data-lucide="message-square" class="h-5 w-5"></i>
                                    Kirim via WhatsApp (<?= e($profile['phone']); ?>)
                                </button>
                            </form>
                        </div>

                        <div class="flex flex-col justify-between border-t border-white/10 p-6 sm:p-10 lg:border-l lg:border-t-0">
                            <div>
                                <p class="text-sm font-black text-slate-300">Info Kontak & Media Sosial</p>
                                <div class="mt-5 grid gap-3">
                                    <a href="tel:<?= e($profile['phone_raw']); ?>" class="flex items-center justify-between rounded-xl border border-slate-700 bg-white/5 p-4 font-bold text-slate-100 transition hover:bg-white/10">
                                        <span class="flex items-center gap-3">
                                            <i data-lucide="phone-call" class="h-5 w-5 text-slate-300"></i>
                                            <?= e($profile['phone']); ?>
                                        </span>
                                        <i data-lucide="arrow-up-right" class="h-4 w-4 text-slate-300"></i>
                                    </a>

                                    <a href="mailto:<?= e($profile['email']); ?>" class="flex items-center justify-between rounded-xl border border-slate-700 bg-white/5 p-4 font-bold text-slate-100 transition hover:bg-white/10">
                                        <span class="flex items-center gap-3">
                                            <i data-lucide="mail" class="h-5 w-5 text-slate-300"></i>
                                            <?= e($profile['email']); ?>
                                        </span>
                                        <i data-lucide="arrow-up-right" class="h-4 w-4 text-slate-300"></i>
                                    </a>

                                    <?php foreach($profile['socials'] as $social): ?>
                                        <?php if($social['icon'] !== 'mail' && $social['icon'] !== 'phone'): ?>
                                            <?php $brandSvg = brandIcon($social['icon']); ?>
                                            <a href="<?= e($social['link']); ?>" target="_blank" rel="noopener" class="flex items-center justify-between rounded-xl border border-slate-700 bg-white/5 p-4 font-bold text-slate-100 transition hover:bg-white/10">
                                                <span class="flex items-center gap-3">
                                                    <?php if($brandSvg): ?>
                                                        <?= $brandSvg; ?>
                                                    <?php else: ?>
                                                        <i data-lucide="<?= e($social['icon']); ?>" class="h-5 w-5"></i>
                                                    <?php endif; ?>
                                                    <?= e($social['label']); ?>
                                                </span>
                                                <i data-lucide="arrow-up-right" class="h-4 w-4 text-slate-300"></i>
                                            </a>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <a href="#home" class="mt-8 inline-flex items-center justify-center gap-2 rounded-xl border border-slate-700 px-5 py-3 text-sm font-black text-slate-100 transition hover:bg-white/10">
                                <i data-lucide="arrow-up" class="h-4 w-4"></i>
                                Kembali ke atas
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        lucide.createIcons();

        const menuBtn = document.getElementById('menuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const filterButtons = document.querySelectorAll('.filter-btn');
        const projectCards = document.querySelectorAll('.project-card');
        const navTabs = document.querySelectorAll('.nav-tab');
        const pageSections = document.querySelectorAll('.page-section');

        function switchTab(targetId) {
            pageSections.forEach((section) => {
                const isMatch = section.id === targetId;
                section.classList.toggle('is-tab-hidden', !isMatch);
                if (isMatch) {
                    section.querySelectorAll('.fade-slide').forEach((el) => el.classList.add('show'));
                }
            });

            navTabs.forEach((tab) => {
                const isMatch = tab.dataset.tab === targetId;
                tab.setAttribute('data-active', String(isMatch));
            });

            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        navTabs.forEach((tab) => {
            tab.addEventListener('click', (e) => {
                const targetId = tab.dataset.tab;
                if (targetId) {
                    e.preventDefault();
                    switchTab(targetId);
                }
            });
        });

        // Initialize default tab from hash or 'home'
        const initialHash = window.location.hash.replace('#', '') || 'home';
        if (document.getElementById(initialHash)) {
            switchTab(initialHash);
        } else {
            switchTab('home');
        }

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
    </script>
</body>
</html>

