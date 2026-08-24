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
        ['value' => '10', 'label' => 'Project portofolio', 'icon' => 'folder-kanban', 'color' => 'text-slate-900', 'bg' => 'bg-slate-200/80'],
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
        ],
        [
            'title' => 'Shine Web',
            'type' => 'Web Application',
            'role' => 'Full Stack Developer',
            'desc' => 'Aplikasi web berbasis Laravel untuk sistem manajemen dan katalog produk dengan antarmuka modern menggunakan Blade templating.',
            'contribution' => 'Mengembangkan aplikasi web Laravel dengan fitur-modul yang dapat diperluas dan database yang terstruktur.',
            'stack' => ['Laravel', 'Blade', 'PHP', 'MySQL'],
            'icon' => 'globe',
            'accent' => 'slate',
            'link' => 'https://github.com/Hattaa22/shine-web'
        ],
        [
            'title' => 'Invoice App',
            'type' => 'Web Application',
            'role' => 'Frontend Developer',
            'desc' => 'Aplikasi invoicing dan pembayaran berbasis modern TypeScript dengan Vite, React, dan shadcn UI.',
            'contribution' => 'Mengembangkan frontend aplikasi invoice dengan fokus pada pengalaman pengguna dan antarmuka yang responsif.',
            'stack' => ['TypeScript', 'React', 'Vite', 'shadcn-ui'],
            'icon' => 'dollar-sign',
            'accent' => 'emerald',
            'link' => 'https://github.com/Hattaa22/invoice'
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
                        glass: '0 20px 40px rgba(12, 18, 29, .2)',
                        card: '0 12px 30px rgba(12, 18, 29, .15)',
                        glow: '0 0 30px rgba(255, 255, 255, .35)',
                        hoverCard: '0 20px 40px rgba(12, 18, 29, .22)'
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
                radial-gradient(circle at 10% 10%, rgba(226, 237, 245, .7), transparent 32rem),
                radial-gradient(circle at 90% 90%, rgba(115, 134, 156, .5), transparent 36rem),
                linear-gradient(135deg, #e0e8f2 0%, #b8c8da 25%, #8aa0b8 55%, #5c7088 80%, #344458 100%);
            background-attachment: fixed;
            color: #090e17;
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
            background: linear-gradient(90deg, #e6edf5, #94a5ba, #283445, #94a5ba, #e6edf5);
        }
        .name-text {
            background: linear-gradient(135deg, #090e17 0%, #1e293b 50%, #3e4d60 100%);
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
            <div class="rounded-2xl border border-white/60 bg-slate-200/50 px-4 py-3 shadow-glass backdrop-blur-md">
                <div class="flex items-center justify-between gap-4">
                    <a href="#home" class="flex min-w-0 items-center gap-3" aria-label="<?= e($profile['name']); ?>">
                        <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-slate-900 font-black text-white shadow-sm">S</span>
                        <span class="truncate font-black text-slate-900"><?= e($profile['name']); ?></span>
                    </a>

                    <nav class="hidden items-center gap-1 text-sm font-semibold text-slate-800 md:flex">
                        <a href="#home" class="nav-tab rounded-xl px-4 py-2 transition hover:bg-slate-300/60 hover:text-slate-950 data-[active=true]:bg-slate-900 data-[active=true]:text-white" data-tab="home" data-active="true">Beranda</a>
                        <a href="#about" class="nav-tab rounded-xl px-4 py-2 transition hover:bg-slate-300/60 hover:text-slate-950 data-[active=true]:bg-slate-900 data-[active=true]:text-white" data-tab="about" data-active="false">Tentang</a>
                        <a href="#skills" class="nav-tab rounded-xl px-4 py-2 transition hover:bg-slate-300/60 hover:text-slate-950 data-[active=true]:bg-slate-900 data-[active=true]:text-white" data-tab="skills" data-active="false">Skill</a>
                        <a href="#projects" class="nav-tab rounded-xl px-4 py-2 transition hover:bg-slate-300/60 hover:text-slate-950 data-[active=true]:bg-slate-900 data-[active=true]:text-white" data-tab="projects" data-active="false">Project</a>
                        <a href="#contact" class="nav-tab rounded-xl px-4 py-2 transition hover:bg-slate-300/60 hover:text-slate-950 data-[active=true]:bg-slate-900 data-[active=true]:text-white" data-tab="contact" data-active="false">Kontak</a>
                    </nav>

                    <a href="<?= e($profile['whatsapp']); ?>" target="_blank" rel="noopener" class="hidden rounded-xl bg-slate-900 px-5 py-2.5 text-sm font-bold text-white shadow-sm transition hover:-translate-y-0.5 hover:bg-slate-800 sm:inline-flex items-center gap-2">
                        <i data-lucide="message-square" class="h-4 w-4"></i>
                        Hubungi
                    </a>

                    <button id="menuBtn" class="grid h-10 w-10 place-items-center rounded-xl border border-slate-400 text-slate-900 md:hidden" aria-label="Buka menu" aria-expanded="false">
                        <i data-lucide="menu" class="h-5 w-5"></i>
                    </button>
                </div>

                <nav id="mobileMenu" class="mt-3 hidden border-t border-slate-300/80 pt-3 text-sm font-semibold text-slate-800 md:hidden">
                    <a href="#home" data-tab="home" class="nav-tab block rounded-xl px-3 py-2 hover:bg-slate-300/60">Beranda</a>
                    <a href="#about" data-tab="about" class="nav-tab block rounded-xl px-3 py-2 hover:bg-slate-300/60">Tentang</a>
                    <a href="#skills" data-tab="skills" class="nav-tab block rounded-xl px-3 py-2 hover:bg-slate-300/60">Skill</a>
                    <a href="#projects" data-tab="projects" class="nav-tab block rounded-xl px-3 py-2 hover:bg-slate-300/60">Project</a>
                    <a href="#contact" data-tab="contact" class="nav-tab block rounded-xl px-3 py-2 hover:bg-slate-300/60">Kontak</a>
                </nav>
            </div>
        </div>
    </header>

        <section id="home" class="page-section hero-bg px-4">
            <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-[1.05fr_.95fr] lg:items-center">
                <div class="fade-slide">
                    <div class="flex flex-wrap items-center gap-2">
                        <div class="inline-flex items-center gap-2 rounded-full border border-white/60 bg-slate-200/60 px-4 py-2 text-sm font-bold text-slate-900 shadow-sm backdrop-blur">
                            <span class="relative flex h-2.5 w-2.5">
                                <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400 opacity-75"></span>
                                <span class="relative inline-flex h-2.5 w-2.5 rounded-full bg-emerald-500"></span>
                            </span>
                            Open for Freelance & Hiring
                        </div>
                        <div class="inline-flex items-center gap-2 rounded-full border border-white/60 bg-slate-200/60 px-4 py-2 text-sm font-bold text-slate-900 shadow-sm backdrop-blur">
                            <i data-lucide="map-pin" class="h-3.5 w-3.5 text-slate-700"></i>
                            <?= e($profile['location']); ?>
                        </div>
                    </div>

                    <h1 class="mt-7 max-w-4xl text-4xl font-black leading-tight text-slate-950 sm:text-6xl">
                        Portofolio <span class="name-text"><?= e($profile['name']); ?></span>.
                    </h1>
                    <p class="mt-5 max-w-2xl text-xl font-bold text-slate-900"><?= e($profile['role']); ?></p>
                    <p class="mt-4 max-w-2xl text-base leading-7 text-slate-800 sm:text-lg"><?= e($profile['tagline']); ?></p>

                    <div class="mt-8 flex flex-wrap gap-3">
                        <a href="#projects" data-tab="projects" class="nav-tab inline-flex items-center justify-center gap-2 rounded-xl bg-slate-900 px-6 py-3.5 text-sm font-bold text-white shadow-card transition hover:-translate-y-0.5 hover:bg-slate-800">
                            <i data-lucide="briefcase-business" class="h-5 w-5"></i>
                            Lihat Project
                        </a>
                        <a href="<?= e($profile['whatsapp']); ?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/60 bg-slate-200/60 px-5 py-3.5 text-sm font-bold text-slate-900 transition hover:-translate-y-0.5 hover:bg-slate-200/90 backdrop-blur">
                            <i data-lucide="message-square" class="h-5 w-5"></i>
                            Chat WhatsApp Direct
                        </a>
                    </div>

                    <!-- Quick Skill Pills & Stats Grid -->
                    <div class="mt-8 pt-6 border-t border-white/40">
                        <p class="text-xs font-black uppercase tracking-wider text-slate-700">Keahlian Utama:</p>
                        <div class="mt-3 flex flex-wrap gap-2">
                            <span class="rounded-lg border border-white/60 bg-slate-200/50 px-3 py-1 text-xs font-bold text-slate-900 backdrop-blur">Laravel Framework</span>
                            <span class="rounded-lg border border-white/60 bg-slate-200/50 px-3 py-1 text-xs font-bold text-slate-900 backdrop-blur">Flutter Mobile App</span>
                            <span class="rounded-lg border border-white/60 bg-slate-200/50 px-3 py-1 text-xs font-bold text-slate-900 backdrop-blur">PWA Development</span>
                            <span class="rounded-lg border border-white/60 bg-slate-200/50 px-3 py-1 text-xs font-bold text-slate-900 backdrop-blur">PHP & MySQL</span>
                            <span class="rounded-lg border border-white/60 bg-slate-200/50 px-3 py-1 text-xs font-bold text-slate-900 backdrop-blur">REST API Integration</span>
                        </div>
                    </div>

                    <div class="mt-6 grid grid-cols-1 gap-3 sm:grid-cols-3">
                        <?php foreach($profile['stats'] as $stat): ?>
                            <div class="rounded-2xl border border-white/60 bg-slate-200/50 p-4 shadow-card backdrop-blur-md transition hover:-translate-y-0.5 hover:bg-slate-200/70">
                                <div class="flex items-center justify-between gap-3">
                                    <span class="text-2xl font-black text-slate-950"><?= e($stat['value']); ?></span>
                                    <span class="grid h-10 w-10 place-items-center rounded-xl bg-slate-300/60 border border-white/60 text-slate-900">
                                        <i data-lucide="<?= e($stat['icon']); ?>" class="h-5 w-5"></i>
                                    </span>
                                </div>
                                <p class="mt-2 text-xs font-bold uppercase tracking-wide text-slate-700"><?= e($stat['label']); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="fade-slide">
                    <div class="overflow-hidden rounded-3xl border border-white/60 bg-slate-200/55 shadow-glass backdrop-blur-md">
                        <div class="accent-line h-2"></div>
                        <div class="portfolio-grid p-5 sm:p-6">
                            <div class="rounded-2xl border border-white/60 bg-slate-100/60 p-5 shadow-card backdrop-blur">
                                <div class="flex items-start justify-between gap-4">
                                    <div>
                                        <p class="text-sm font-black uppercase tracking-[.18em] text-slate-700">2026 Portfolio</p>
                                        <h2 class="mt-2 text-3xl font-black text-slate-950"><?= e($profile['name']); ?></h2>
                                    </div>
                                    <div class="grid h-14 w-14 place-items-center rounded-2xl bg-slate-900 text-white shadow-md">
                                        <i data-lucide="code-2" class="h-7 w-7"></i>
                                    </div>
                                </div>
                                <p class="mt-5 text-sm leading-6 text-slate-800"><?= e($profile['bio']); ?></p>
                            </div>

                            <div class="mt-4 grid gap-4 sm:grid-cols-2">
                                <?php foreach($profile['education'] as $edu): ?>
                                    <div class="rounded-2xl border border-white/60 bg-slate-100/60 p-4 shadow-card backdrop-blur transition hover:-translate-y-0.5">
                                        <i data-lucide="graduation-cap" class="h-5 w-5 text-slate-800"></i>
                                        <p class="mt-3 text-sm font-black text-slate-950"><?= e($edu['school']); ?></p>
                                        <p class="mt-1 text-xs font-bold text-slate-700"><?= e($edu['period']); ?></p>
                                        <p class="mt-2 text-sm text-slate-800"><?= e($edu['major']); ?></p>
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
                <div class="overflow-hidden rounded-3xl border border-white/60 bg-slate-200/50 p-8 shadow-glass backdrop-blur-md">
                    <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
                        <div class="max-w-2xl">
                            <div class="inline-flex items-center gap-2 rounded-full border border-white/60 bg-slate-300/50 px-3.5 py-1.5 text-xs font-bold uppercase tracking-wider text-slate-800">
                                <span class="h-2 w-2 rounded-full bg-slate-700"></span>
                                Profile & Experience
                            </div>
                            <h2 class="mt-4 text-3xl font-black leading-tight text-slate-950 sm:text-4xl">Fokus pada Solusi Digital yang Efisien & Inovatif.</h2>
                            <p class="mt-3 text-base leading-relaxed text-slate-800 sm:text-lg">Pengalaman membangun ekosistem digital kampus, aplikasi mobile koperasi, absensi PWA, company profile berteknologi modern, dan perapihan antarmuka pengguna (UI/UX).</p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 lg:w-72 shrink-0">
                            <div class="rounded-2xl border border-white/60 bg-slate-300/50 p-4 text-center backdrop-blur">
                                <p class="text-3xl font-black text-slate-950">4+</p>
                                <p class="mt-1 text-xs font-bold uppercase tracking-wider text-slate-700">Tahun Pengalaman</p>
                            </div>
                            <div class="rounded-2xl border border-white/60 bg-slate-300/50 p-4 text-center backdrop-blur">
                                <p class="text-3xl font-black text-slate-950">100%</p>
                                <p class="mt-1 text-xs font-bold uppercase tracking-wider text-slate-700">Dedikasi Performa</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Services Grid -->
                <div class="mt-8 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    <?php foreach($profile['services'] as $index => $service): ?>
                        <article class="fade-slide rounded-3xl border border-white/60 bg-slate-200/50 p-6 shadow-card backdrop-blur-md transition hover:-translate-y-1.5 hover:bg-slate-200/75">
                            <div class="flex items-center justify-between">
                                <div class="grid h-12 w-12 place-items-center rounded-2xl bg-slate-300/60 border border-white/60 text-slate-950 shadow-inner">
                                    <i data-lucide="<?= e($service['icon']); ?>" class="h-6 w-6"></i>
                                </div>
                                <span class="text-xs font-black tracking-widest text-slate-700">0<?= $index + 1; ?></span>
                            </div>
                            <h3 class="mt-6 text-xl font-black text-slate-950"><?= e($service['title']); ?></h3>
                            <p class="mt-3 text-sm leading-6 text-slate-800"><?= e($service['desc']); ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="skills" class="page-section border-y border-white/40 bg-slate-200/40 px-4 backdrop-blur">
            <div class="mx-auto max-w-7xl">
                <div class="fade-slide flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
                    <div>
                        <p class="text-sm font-black uppercase tracking-[.2em] text-slate-700">Personal Skill Matrix</p>
                        <h2 class="mt-3 text-3xl font-black text-slate-950 sm:text-4xl">Tech Stack & Tools Portfolio.</h2>
                    </div>
                    <p class="max-w-md text-slate-800">Skill teknis yang digunakan secara aktif untuk membangun frontend, backend, aplikasi mobile Flutter, integrasi REST API, dan database.</p>
                </div>

                <div class="mt-8 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-4">
                    <?php foreach($profile['skills'] as $skill): ?>
                        <div class="fade-slide rounded-2xl border border-white/60 bg-slate-200/55 p-5 transition hover:-translate-y-1.5 hover:bg-slate-200/80 shadow-card backdrop-blur-md">
                            <div class="flex items-center justify-between">
                                <span class="grid h-11 w-11 place-items-center rounded-xl bg-slate-900 text-white shadow-sm">
                                    <i data-lucide="<?= e($skill['icon']); ?>" class="h-5 w-5"></i>
                                </span>
                                <span class="rounded-full bg-slate-300/70 border border-white/60 px-3 py-1 text-[11px] font-bold text-slate-900"><?= e($skill['cat']); ?></span>
                            </div>
                            <p class="mt-4 text-lg font-black text-slate-950"><?= e($skill['name']); ?></p>
                            <!-- Visual Progress Bar -->
                            <div class="mt-3 flex items-center gap-2">
                                <div class="h-2 w-full overflow-hidden rounded-full bg-slate-300/80">
                                    <div class="h-full rounded-full bg-slate-900" style="width: <?= rand(85, 96); ?>%;"></div>
                                </div>
                                <span class="text-xs font-bold text-slate-700">Advanced</span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="projects" class="page-section px-4">
            <div class="mx-auto max-w-7xl">
                <div class="fade-slide flex flex-col gap-5 md:flex-row md:items-end md:justify-between">
                    <div>
                        <p class="text-sm font-black uppercase tracking-[.2em] text-slate-700">Pencapaian Project</p>
                        <h2 class="mt-3 text-3xl font-black text-slate-950 sm:text-4xl">Project lengkap dari portofolio.</h2>
                        <p class="mt-2 max-w-2xl text-slate-800">Daftar ini menggabungkan project dari PDF dan project live yang sudah ada di website.</p>
                    </div>
                    <div class="flex flex-wrap gap-2" aria-label="Filter project">
                        <?php foreach($projectFilters as $filter): ?>
                            <button type="button" class="filter-btn rounded-xl border border-white/60 bg-slate-200/50 px-4 py-2 text-sm font-black text-slate-800 transition hover:bg-slate-300/60 data-[active=true]:bg-slate-900 data-[active=true]:text-white" data-filter="<?= e($filter); ?>" data-active="<?= $filter === 'All' ? 'true' : 'false'; ?>">
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
                        <article class="project-card fade-slide overflow-hidden rounded-3xl border border-white/60 bg-slate-200/50 shadow-card backdrop-blur-md transition hover:-translate-y-1 hover:bg-slate-200/70" data-type="<?= e($project['type']); ?>">
                            <div class="bg-gradient-to-br from-slate-900 via-slate-800 to-slate-700 p-3 text-slate-100 sm:p-5">
                                <div class="mb-3 flex items-center justify-between gap-4">
                                    <span class="rounded-full bg-white/20 px-3 py-1 text-xs font-black"><?= e($project['type']); ?></span>
                                    <span class="grid h-9 w-9 place-items-center rounded-xl bg-white/16">
                                        <i data-lucide="<?= e($project['icon']); ?>" class="h-5 w-5 text-white"></i>
                                    </span>
                                </div>
                                <?php if(!empty($images)): ?>
                                    <a href="<?= e($images[0]['src']); ?>" target="_blank" rel="noopener" class="project-visual overflow-hidden rounded-2xl border border-white/20 bg-slate-100/95 shadow-sm transition hover:bg-slate-50">
                                        <img src="<?= e($images[0]['src']); ?>" alt="<?= e($images[0]['alt']); ?>" loading="lazy">
                                    </a>
                                    <?php if(count($images) > 1): ?>
                                        <div class="mt-3 grid grid-cols-3 gap-2">
                                            <?php foreach(array_slice($images, 1, 3) as $image): ?>
                                                <a href="<?= e($image['src']); ?>" target="_blank" rel="noopener" class="project-thumb overflow-hidden rounded-xl border border-white/20 bg-slate-100/90 transition hover:bg-slate-50">
                                                    <img src="<?= e($image['src']); ?>" alt="<?= e($image['alt']); ?>" loading="lazy">
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <div class="rounded-2xl bg-white/14 p-4 ring-1 ring-white/20">
                                        <div class="mb-3 flex items-center gap-2">
                                            <span class="h-2.5 w-2.5 rounded-full bg-slate-300"></span>
                                            <span class="h-2.5 w-2.5 rounded-full bg-slate-400"></span>
                                            <span class="h-2.5 w-2.5 rounded-full bg-slate-500"></span>
                                        </div>
                                        <span class="block h-16 rounded-xl bg-white/28"></span>
                                        <span class="mt-3 block h-2.5 w-11/12 rounded-full bg-white/35"></span>
                                        <span class="mt-2 block h-2.5 w-7/12 rounded-full bg-white/25"></span>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="p-5">
                                <div class="flex items-start justify-between gap-3">
                                    <h3 class="text-xl font-black leading-tight text-slate-950"><?= e($project['title']); ?></h3>
                                    <span class="shrink-0 rounded-full bg-slate-300/80 px-3 py-1 text-xs font-black text-slate-900"><?= e($project['role']); ?></span>
                                </div>
                                <p class="mt-4 text-sm leading-6 text-slate-800"><?= e($project['desc']); ?></p>
                                <div class="mt-4 rounded-2xl border border-white/60 bg-slate-100/60 p-4">
                                    <p class="text-xs font-black uppercase tracking-wide text-slate-700">Kontribusi</p>
                                    <p class="mt-2 text-sm leading-6 text-slate-900"><?= e($project['contribution']); ?></p>
                                </div>
                                <div class="mt-5 flex flex-wrap gap-2">
                                    <?php foreach($project['stack'] as $stack): ?>
                                        <span class="rounded-full bg-slate-300/80 border border-white/60 px-3 py-1 text-xs font-bold text-slate-900"><?= e($stack); ?></span>
                                    <?php endforeach; ?>
                                </div>
                                <?php if($isLive): ?>
                                    <a href="<?= e($project['link']); ?>" target="_blank" rel="noopener" class="mt-6 inline-flex items-center gap-2 text-sm font-black text-slate-950 hover:text-black hover:underline">
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
                <div class="overflow-hidden rounded-3xl border border-white/60 bg-slate-200/50 shadow-glass backdrop-blur-md">
                    <div class="accent-line h-2"></div>
                    <div class="grid lg:grid-cols-[1.1fr_.9fr]">
                        <div class="p-6 sm:p-10">
                            <div class="inline-flex items-center gap-2 rounded-full border border-white/60 bg-slate-300/50 px-3.5 py-1.5 text-xs font-bold uppercase tracking-wider text-slate-800">
                                <span class="h-2 w-2 rounded-full bg-emerald-600"></span>
                                Fast Response & Consultation
                            </div>
                            <h2 class="mt-4 max-w-2xl text-3xl font-black leading-tight text-slate-950 sm:text-4xl">Mari Konsultasikan Project Digital Anda.</h2>
                            <p class="mt-3 leading-7 text-slate-800">Kirim pesan langsung ke WhatsApp untuk kebutuhan pembuatan website bisnis, aplikasi mobile Flutter, Progressive Web App (PWA), atau perapihan UI/UX.</p>

                            <!-- Direct Quick Action Chips -->
                            <div class="mt-6 flex flex-wrap gap-2">
                                <a href="https://wa.me/6285815707390?text=Halo%20Suhatta,%20saya%20tertarik%20pembuatan%20Website%20Bisnis" target="_blank" rel="noopener" class="rounded-xl border border-white/60 bg-slate-100/70 px-3.5 py-2 text-xs font-bold text-slate-900 transition hover:bg-slate-900 hover:text-white">
                                    + Website Bisnis
                                </a>
                                <a href="https://wa.me/6285815707390?text=Halo%20Suhatta,%20saya%20tertarik%20pembuatan%20Aplikasi%20Mobile" target="_blank" rel="noopener" class="rounded-xl border border-white/60 bg-slate-100/70 px-3.5 py-2 text-xs font-bold text-slate-900 transition hover:bg-slate-900 hover:text-white">
                                    + Mobile App Flutter
                                </a>
                                <a href="https://wa.me/6285815707390?text=Halo%20Suhatta,%20saya%20tertarik%20pembuatan%20PWA" target="_blank" rel="noopener" class="rounded-xl border border-white/60 bg-slate-100/70 px-3.5 py-2 text-xs font-bold text-slate-900 transition hover:bg-slate-900 hover:text-white">
                                    + Progressive Web App
                                </a>
                                <a href="https://wa.me/6285815707390?text=Halo%20Suhatta,%20saya%20tertarik%20Perapihan%20UI%20Website" target="_blank" rel="noopener" class="rounded-xl border border-white/60 bg-slate-100/70 px-3.5 py-2 text-xs font-bold text-slate-900 transition hover:bg-slate-900 hover:text-white">
                                    + Perapihan UI Website
                                </a>
                            </div>

                            <form id="contactForm" class="mt-6 space-y-4" onsubmit="sendToWhatsapp(event)">
                                <div>
                                    <label for="contactName" class="mb-1.5 block text-xs font-bold uppercase tracking-wider text-slate-700">Nama Anda / Perusahaan</label>
                                    <input type="text" id="contactName" required placeholder="Masukkan nama..." class="w-full rounded-xl border border-white/60 bg-slate-100/70 px-4 py-3 text-sm text-slate-900 placeholder-slate-500 transition focus:border-slate-800 focus:bg-white focus:outline-none">
                                </div>
                                <div>
                                    <label for="contactMessage" class="mb-1.5 block text-xs font-bold uppercase tracking-wider text-slate-700">Detail Rencana Project</label>
                                    <textarea id="contactMessage" rows="3" required placeholder="Jelaskan kebutuhan project Anda..." class="w-full rounded-xl border border-white/60 bg-slate-100/70 px-4 py-3 text-sm text-slate-900 placeholder-slate-500 transition focus:border-slate-800 focus:bg-white focus:outline-none"></textarea>
                                </div>
                                <button type="submit" class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-slate-900 px-6 py-3.5 text-sm font-black text-white shadow-card transition hover:bg-slate-800">
                                    <i data-lucide="message-square" class="h-5 w-5"></i>
                                    Kirim Pesan WhatsApp Direct (<?= e($profile['phone']); ?>)
                                </button>
                            </form>
                        </div>

                        <div class="flex flex-col justify-between border-t border-white/40 p-6 sm:p-10 lg:border-l lg:border-t-0">
                            <div>
                                <p class="text-sm font-black uppercase tracking-wider text-slate-700">Saluran Komunikasi Resmi</p>
                                <div class="mt-5 grid gap-3">
                                    <a href="https://wa.me/6285815707390" target="_blank" rel="noopener" class="flex items-center justify-between rounded-2xl border border-white/60 bg-slate-100/60 p-4 font-bold text-slate-900 transition hover:bg-white/80">
                                        <span class="flex items-center gap-3">
                                            <span class="grid h-10 w-10 place-items-center rounded-xl bg-emerald-500 text-white shadow-sm">
                                                <i data-lucide="message-square" class="h-5 w-5"></i>
                                            </span>
                                            <div>
                                                <p class="text-xs text-slate-600 font-normal">WhatsApp Response</p>
                                                <p class="text-sm font-black text-slate-950"><?= e($profile['phone']); ?></p>
                                            </div>
                                        </span>
                                        <i data-lucide="arrow-up-right" class="h-5 w-5 text-slate-700"></i>
                                    </a>

                                    <a href="mailto:<?= e($profile['email']); ?>" class="flex items-center justify-between rounded-2xl border border-white/60 bg-slate-100/60 p-4 font-bold text-slate-900 transition hover:bg-white/80">
                                        <span class="flex items-center gap-3">
                                            <span class="grid h-10 w-10 place-items-center rounded-xl bg-slate-900 text-white shadow-sm">
                                                <i data-lucide="mail" class="h-5 w-5"></i>
                                            </span>
                                            <div>
                                                <p class="text-xs text-slate-600 font-normal">Email Resmi</p>
                                                <p class="text-sm font-black text-slate-950"><?= e($profile['email']); ?></p>
                                            </div>
                                        </span>
                                        <i data-lucide="arrow-up-right" class="h-5 w-5 text-slate-700"></i>
                                    </a>

                                    <?php foreach($profile['socials'] as $social): ?>
                                        <?php if($social['icon'] !== 'mail' && $social['icon'] !== 'phone'): ?>
                                            <?php $brandSvg = brandIcon($social['icon']); ?>
                                            <a href="<?= e($social['link']); ?>" target="_blank" rel="noopener" class="flex items-center justify-between rounded-2xl border border-white/60 bg-slate-100/60 p-4 font-bold text-slate-900 transition hover:bg-white/80">
                                                <span class="flex items-center gap-3">
                                                    <span class="grid h-10 w-10 place-items-center rounded-xl bg-slate-800 text-white shadow-sm">
                                                        <?php if($brandSvg): ?>
                                                            <?= $brandSvg; ?>
                                                        <?php else: ?>
                                                            <i data-lucide="<?= e($social['icon']); ?>" class="h-5 w-5"></i>
                                                        <?php endif; ?>
                                                    </span>
                                                    <div>
                                                        <p class="text-xs text-slate-600 font-normal"><?= e($social['label']); ?></p>
                                                        <p class="text-sm font-black text-slate-950"><?= e($profile['name']); ?></p>
                                                    </div>
                                                </span>
                                                <i data-lucide="arrow-up-right" class="h-5 w-5 text-slate-700"></i>
                                            </a>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <a href="#home" data-tab="home" class="nav-tab mt-8 inline-flex items-center justify-center gap-2 rounded-xl border border-white/60 bg-slate-100/60 px-5 py-3 text-sm font-black text-slate-900 transition hover:bg-white">
                                <i data-lucide="arrow-up" class="h-4 w-4"></i>
                                Kembali ke Beranda
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

