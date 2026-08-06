<?php
$profile = [
    'name' => 'Suhatta',
    'role' => 'Full Stack Web Developer',
    'tagline' => 'Membangun website dan aplikasi web yang cepat, rapi, dan mudah digunakan.',
    'bio' => 'Saya membantu bisnis, komunitas, dan personal brand menghadirkan produk digital yang modern, responsif, dan nyaman dipakai. Fokus saya ada pada pengalaman pengguna, performa, dan kode yang mudah dikembangkan.',
    'location' => 'Indonesia',
    'email' => 'suhatta@example.com',
    'stats' => [
        ['value' => '2+', 'label' => 'Project live'],
        ['value' => '6', 'label' => 'Teknologi inti'],
        ['value' => '100%', 'label' => 'Responsive design']
    ],
    'skills' => [
        ['name' => 'PHP', 'icon' => 'braces'],
        ['name' => 'JavaScript', 'icon' => 'code-2'],
        ['name' => 'Laravel', 'icon' => 'layers-3'],
        ['name' => 'TailwindCSS', 'icon' => 'palette'],
        ['name' => 'MySQL', 'icon' => 'database'],
        ['name' => 'Node.js', 'icon' => 'server']
    ],
    'projects' => [
        [
            'title' => 'RS Galery Candra',
            'desc' => 'Website profil rumah sakit dengan informasi layanan yang mudah diakses, tampilan bersih, dan pengalaman pengguna yang nyaman.',
            'stack' => ['Website', 'Responsive', 'Healthcare'],
            'icon' => 'hospital',
            'link' => 'https://rumahsakitgalericandra.com/'
        ],
        [
            'title' => 'Depo Fluks',
            'desc' => 'Website depo air yang menampilkan informasi produk dan layanan secara jelas untuk membantu calon pelanggan mengenal brand.',
            'stack' => ['Website', 'Water', 'Business'],
            'icon' => 'droplets',
            'link' => 'https://depo.flukswater.com/'
        ]
    ],
    'services' => [
        ['title' => 'Website Bisnis', 'desc' => 'Company profile, landing page, dan halaman promosi yang terlihat profesional.', 'icon' => 'monitor-smartphone'],
        ['title' => 'Aplikasi Web', 'desc' => 'Dashboard, sistem admin, dan fitur custom sesuai alur kerja bisnis.', 'icon' => 'panel-top'],
        ['title' => 'Perapihan UI', 'desc' => 'Merapikan tampilan lama agar lebih modern, konsisten, dan mudah dipahami.', 'icon' => 'sparkles']
    ],
    'socials' => [
        ['icon' => 'github', 'label' => 'GitHub', 'link' => 'https://github.com'],
        ['icon' => 'linkedin', 'label' => 'LinkedIn', 'link' => 'https://linkedin.com'],
        ['icon' => 'mail', 'label' => 'Email', 'link' => 'mailto:suhatta@example.com']
    ]
];

function brandIcon($icon, $class = 'h-5 w-5') {
    $icons = [
        'github' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 .5C5.65.5.5 5.65.5 12c0 5.1 3.29 9.42 7.86 10.95.58.1.79-.25.79-.56v-2.16c-3.2.7-3.87-1.37-3.87-1.37-.52-1.33-1.28-1.68-1.28-1.68-1.05-.72.08-.7.08-.7 1.16.08 1.77 1.2 1.77 1.2 1.03 1.76 2.7 1.25 3.36.96.1-.75.4-1.25.73-1.54-2.55-.29-5.24-1.28-5.24-5.68 0-1.26.45-2.29 1.19-3.1-.12-.29-.52-1.46.11-3.05 0 0 .97-.31 3.17 1.18A11 11 0 0 1 12 6.06c.98 0 1.95.13 2.87.39 2.2-1.49 3.17-1.18 3.17-1.18.63 1.59.23 2.76.11 3.05.74.81 1.19 1.84 1.19 3.1 0 4.41-2.69 5.38-5.25 5.67.41.36.78 1.07.78 2.15v3.15c0 .31.21.67.8.56A11.51 11.51 0 0 0 23.5 12C23.5 5.65 18.35.5 12 .5Z"/></svg>',
        'linkedin' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.45 20.45h-3.55v-5.57c0-1.33-.03-3.04-1.85-3.04-1.85 0-2.14 1.45-2.14 2.94v5.67H9.35V9h3.41v1.56h.05c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.46v6.28ZM5.34 7.43a2.06 2.06 0 1 1 0-4.13 2.06 2.06 0 0 1 0 4.13ZM7.12 20.45H3.56V9h3.56v11.45ZM22.23 0H1.77C.79 0 0 .77 0 1.73v20.54C0 23.23.79 24 1.77 24h20.45c.98 0 1.78-.77 1.78-1.73V1.73C24 .77 23.2 0 22.23 0Z"/></svg>'
    ];

    return $icons[$icon] ?? null;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $profile['name']; ?> - Portofolio</title>
    <meta name="description" content="Portofolio <?= $profile['name']; ?>, Full Stack Web Developer yang membangun website dan aplikasi web modern.">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        ink: '#121826',
                        muted: '#64748b',
                        line: '#e2e8f0',
                        brand: '#2563eb',
                        accent: '#14b8a6',
                        warm: '#f59e0b'
                    },
                    boxShadow: {
                        soft: '0 20px 60px rgba(15, 23, 42, 0.10)'
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
        }

        .fade-slide {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity .7s ease, transform .7s ease;
        }

        .fade-slide.show {
            opacity: 1;
            transform: translateY(0);
        }

        .mesh-bg {
            background:
                radial-gradient(circle at 8% 12%, rgba(37, 99, 235, .16), transparent 28%),
                radial-gradient(circle at 88% 18%, rgba(20, 184, 166, .15), transparent 26%),
                linear-gradient(180deg, #f8fafc 0%, #eef6ff 46%, #ffffff 100%);
        }

        .noise {
            background-image: linear-gradient(rgba(18, 24, 38, .045) 1px, transparent 1px), linear-gradient(90deg, rgba(18, 24, 38, .045) 1px, transparent 1px);
            background-size: 38px 38px;
            mask-image: linear-gradient(to bottom, black, transparent 76%);
        }

        .glass {
            background: rgba(255, 255, 255, .82);
            border: 1px solid rgba(226, 232, 240, .92);
            backdrop-filter: blur(16px);
        }

        .project-media {
            background:
                linear-gradient(135deg, rgba(37, 99, 235, .92), rgba(20, 184, 166, .82)),
                radial-gradient(circle at 80% 20%, rgba(255, 255, 255, .36), transparent 28%);
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
<body class="mesh-bg text-ink antialiased">
    <div class="fixed inset-0 noise pointer-events-none"></div>

    <header class="fixed inset-x-0 top-0 z-50">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-4">
            <div class="glass rounded-full px-4 py-3 shadow-sm">
                <div class="flex items-center justify-between gap-4">
                    <a href="#home" class="flex items-center gap-3 min-w-0" aria-label="<?= $profile['name']; ?>">
                        <span class="grid h-10 w-10 shrink-0 place-items-center rounded-full bg-ink text-white font-bold">S</span>
                        <span class="truncate text-base font-bold tracking-wide"><?= $profile['name']; ?></span>
                    </a>

                    <nav class="hidden md:flex items-center gap-1 text-sm font-semibold text-slate-600">
                        <a href="#about" class="rounded-full px-4 py-2 hover:bg-slate-100 hover:text-ink transition">Tentang</a>
                        <a href="#skills" class="rounded-full px-4 py-2 hover:bg-slate-100 hover:text-ink transition">Keahlian</a>
                        <a href="#projects" class="rounded-full px-4 py-2 hover:bg-slate-100 hover:text-ink transition">Project</a>
                        <a href="#contact" class="rounded-full px-4 py-2 hover:bg-slate-100 hover:text-ink transition">Kontak</a>
                    </nav>

                    <a href="#contact" class="hidden sm:inline-flex items-center gap-2 rounded-full bg-ink px-5 py-2.5 text-sm font-bold text-white shadow-sm hover:bg-slate-800 transition">
                        <i data-lucide="send" class="h-4 w-4"></i>
                        Mulai
                    </a>

                    <button id="menuBtn" class="md:hidden grid h-10 w-10 place-items-center rounded-full border border-line bg-white text-ink" aria-label="Buka menu" aria-expanded="false">
                        <i data-lucide="menu" class="h-5 w-5"></i>
                    </button>
                </div>

                <nav id="mobileMenu" class="hidden border-t border-line mt-3 pt-3 md:hidden text-sm font-semibold text-slate-600">
                    <a href="#about" class="block rounded-xl px-3 py-2 hover:bg-slate-100">Tentang</a>
                    <a href="#skills" class="block rounded-xl px-3 py-2 hover:bg-slate-100">Keahlian</a>
                    <a href="#projects" class="block rounded-xl px-3 py-2 hover:bg-slate-100">Project</a>
                    <a href="#contact" class="block rounded-xl px-3 py-2 hover:bg-slate-100">Kontak</a>
                </nav>
            </div>
        </div>
    </header>

    <main id="home" class="relative z-10">
        <section class="min-h-screen pt-32 pb-16 flex items-center">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 w-full">
                <div class="grid lg:grid-cols-[1.05fr_.95fr] gap-12 lg:gap-16 items-center">
                    <div class="fade-slide">
                        <div class="inline-flex items-center gap-2 rounded-full border border-line bg-white/80 px-4 py-2 text-sm font-semibold text-slate-600 shadow-sm">
                            <span class="h-2 w-2 rounded-full bg-accent"></span>
                            Available for freelance project
                        </div>
                        <h1 class="mt-7 max-w-4xl text-5xl font-black leading-[1.02] tracking-normal text-ink sm:text-6xl lg:text-7xl">
                            Halo, saya <?= $profile['name']; ?>.
                        </h1>
                        <p class="mt-5 max-w-2xl text-xl font-semibold text-brand"><?= $profile['role']; ?></p>
                        <p class="mt-5 max-w-2xl text-lg leading-8 text-slate-600"><?= $profile['tagline']; ?></p>

                        <div class="mt-8 flex flex-col sm:flex-row gap-3">
                            <a href="#projects" class="inline-flex items-center justify-center gap-2 rounded-full bg-brand px-6 py-3.5 text-sm font-bold text-white shadow-soft hover:bg-blue-700 transition">
                                <i data-lucide="briefcase-business" class="h-5 w-5"></i>
                                Lihat Project
                            </a>
                            <a href="mailto:<?= $profile['email']; ?>" class="inline-flex items-center justify-center gap-2 rounded-full border border-line bg-white px-6 py-3.5 text-sm font-bold text-ink hover:border-slate-300 hover:shadow-sm transition">
                                <i data-lucide="mail" class="h-5 w-5"></i>
                                Hubungi Saya
                            </a>
                        </div>

                        <div class="mt-10 grid grid-cols-3 gap-3 max-w-xl">
                            <?php foreach($profile['stats'] as $stat): ?>
                                <div class="rounded-2xl border border-line bg-white/75 p-4 shadow-sm">
                                    <div class="text-2xl font-black text-ink"><?= $stat['value']; ?></div>
                                    <div class="mt-1 text-xs font-semibold uppercase tracking-wide text-slate-500"><?= $stat['label']; ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="fade-slide">
                        <div class="relative mx-auto max-w-md">
                            <div class="absolute -inset-4 rounded-[2rem] bg-gradient-to-br from-blue-500/20 via-teal-400/20 to-amber-300/20 blur-2xl"></div>
                            <div class="relative overflow-hidden rounded-[2rem] border border-white bg-white shadow-soft">
                                <div class="project-media p-8 text-white">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="text-sm font-semibold text-white/75">Portfolio</p>
                                            <h2 class="mt-1 text-3xl font-black"><?= $profile['name']; ?></h2>
                                        </div>
                                        <div class="grid h-14 w-14 place-items-center rounded-2xl bg-white/18">
                                            <i data-lucide="code-2" class="h-7 w-7"></i>
                                        </div>
                                    </div>
                                    <div class="mt-14 grid grid-cols-3 gap-3">
                                        <span class="h-20 rounded-2xl bg-white/20"></span>
                                        <span class="h-20 rounded-2xl bg-white/35"></span>
                                        <span class="h-20 rounded-2xl bg-white/20"></span>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center gap-3">
                                        <div class="grid h-14 w-14 place-items-center rounded-2xl bg-slate-100 text-ink">
                                            <i data-lucide="map-pin" class="h-6 w-6"></i>
                                        </div>
                                        <div>
                                            <p class="font-bold">Based in <?= $profile['location']; ?></p>
                                            <p class="text-sm text-slate-500">Remote friendly collaboration</p>
                                        </div>
                                    </div>
                                    <div class="mt-6 rounded-2xl bg-slate-50 p-4">
                                        <p class="text-sm leading-6 text-slate-600"><?= $profile['bio']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="py-20">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-[.8fr_1.2fr] gap-10 items-start">
                    <div class="fade-slide">
                        <p class="text-sm font-bold uppercase tracking-[.2em] text-brand">Tentang Saya</p>
                        <h2 class="mt-3 text-4xl font-black tracking-normal text-ink">Solusi web yang terlihat bagus dan bekerja dengan jelas.</h2>
                    </div>
                    <div class="fade-slide grid sm:grid-cols-3 gap-4">
                        <?php foreach($profile['services'] as $service): ?>
                            <article class="rounded-3xl border border-line bg-white p-6 shadow-sm">
                                <div class="grid h-12 w-12 place-items-center rounded-2xl bg-slate-100 text-brand">
                                    <i data-lucide="<?= $service['icon']; ?>" class="h-6 w-6"></i>
                                </div>
                                <h3 class="mt-5 text-lg font-black"><?= $service['title']; ?></h3>
                                <p class="mt-2 text-sm leading-6 text-slate-600"><?= $service['desc']; ?></p>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills" class="py-20 bg-white/70">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="fade-slide max-w-2xl">
                    <p class="text-sm font-bold uppercase tracking-[.2em] text-brand">Keahlian</p>
                    <h2 class="mt-3 text-4xl font-black tracking-normal text-ink">Teknologi yang saya gunakan.</h2>
                </div>

                <div class="mt-10 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
                    <?php foreach($profile['skills'] as $skill): ?>
                        <div class="fade-slide group rounded-3xl border border-line bg-white p-5 shadow-sm hover:-translate-y-1 hover:shadow-soft transition">
                            <div class="grid h-12 w-12 place-items-center rounded-2xl bg-blue-50 text-brand group-hover:bg-brand group-hover:text-white transition">
                                <i data-lucide="<?= $skill['icon']; ?>" class="h-6 w-6"></i>
                            </div>
                            <p class="mt-5 font-black"><?= $skill['name']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="projects" class="py-20">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="fade-slide flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
                    <div class="max-w-2xl">
                        <p class="text-sm font-bold uppercase tracking-[.2em] text-brand">Project</p>
                        <h2 class="mt-3 text-4xl font-black tracking-normal text-ink">Karya pilihan.</h2>
                    </div>
                    <p class="max-w-md text-slate-600 leading-7">Contoh pekerjaan yang mencerminkan fokus pada fungsi, tampilan, dan kemudahan penggunaan.</p>
                </div>

                <div class="mt-10 grid lg:grid-cols-3 gap-6">
                    <?php foreach($profile['projects'] as $project): ?>
                        <a href="<?= $project['link']; ?>" target="_blank" rel="noopener" class="fade-slide group block overflow-hidden rounded-3xl border border-line bg-white shadow-sm hover:-translate-y-1 hover:shadow-soft transition" aria-label="Buka project <?= $project['title']; ?>">
                            <div class="project-media h-52 p-6 text-white flex flex-col justify-between">
                                <div class="flex justify-between items-start">
                                    <span class="rounded-full bg-white/18 px-3 py-1 text-xs font-bold">Featured</span>
                                    <i data-lucide="<?= $project['icon']; ?>" class="h-10 w-10"></i>
                                </div>
                                <div class="space-y-2">
                                    <span class="block h-2 w-20 rounded-full bg-white/30"></span>
                                    <span class="block h-2 w-36 rounded-full bg-white/40"></span>
                                    <span class="block h-2 w-28 rounded-full bg-white/25"></span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-black"><?= $project['title']; ?></h3>
                                <p class="mt-3 text-sm leading-6 text-slate-600"><?= $project['desc']; ?></p>
                                <div class="mt-5 flex flex-wrap gap-2">
                                    <?php foreach($project['stack'] as $stack): ?>
                                        <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-bold text-slate-600"><?= $stack; ?></span>
                                    <?php endforeach; ?>
                                </div>
                                <span class="mt-6 inline-flex items-center gap-2 text-sm font-black text-brand group-hover:text-blue-700">
                                    Kunjungi website
                                    <i data-lucide="arrow-up-right" class="h-4 w-4"></i>
                                </span>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="contact" class="py-20">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="fade-slide overflow-hidden rounded-[2rem] bg-ink text-white shadow-soft">
                    <div class="grid lg:grid-cols-[1.1fr_.9fr]">
                        <div class="p-8 sm:p-12 lg:p-14">
                            <p class="text-sm font-bold uppercase tracking-[.2em] text-teal-300">Kontak</p>
                            <h2 class="mt-4 text-4xl font-black tracking-normal">Punya ide project? Mari kita buat lebih nyata.</h2>
                            <p class="mt-5 max-w-2xl text-slate-300 leading-8">Saya terbuka untuk pembuatan website, aplikasi web, maupun perapihan tampilan produk yang sudah ada.</p>
                            <div class="mt-8 flex flex-col sm:flex-row gap-3">
                                <a href="mailto:<?= $profile['email']; ?>" class="inline-flex items-center justify-center gap-2 rounded-full bg-white px-6 py-3.5 text-sm font-bold text-ink hover:bg-slate-100 transition">
                                    <i data-lucide="mail" class="h-5 w-5"></i>
                                    <?= $profile['email']; ?>
                                </a>
                                <a href="#home" class="inline-flex items-center justify-center gap-2 rounded-full border border-white/20 px-6 py-3.5 text-sm font-bold text-white hover:bg-white/10 transition">
                                    <i data-lucide="arrow-up" class="h-5 w-5"></i>
                                    Kembali ke atas
                                </a>
                            </div>
                        </div>
                        <div class="border-t border-white/10 p-8 sm:p-12 lg:border-l lg:border-t-0 lg:p-14">
                            <p class="text-sm font-bold text-slate-300">Temukan saya di</p>
                            <div class="mt-5 grid gap-3">
                                <?php foreach($profile['socials'] as $social): ?>
                                    <?php $brandSvg = brandIcon($social['icon']); ?>
                                    <a href="<?= $social['link']; ?>" target="_blank" rel="noopener" class="flex items-center justify-between rounded-2xl border border-white/10 bg-white/5 p-4 hover:bg-white/10 transition">
                                        <span class="flex items-center gap-3 font-bold">
                                            <?php if($brandSvg): ?>
                                                <?= $brandSvg; ?>
                                            <?php else: ?>
                                                <i data-lucide="<?= $social['icon']; ?>" class="h-5 w-5"></i>
                                            <?php endif; ?>
                                            <?= $social['label']; ?>
                                        </span>
                                        <i data-lucide="arrow-up-right" class="h-4 w-4"></i>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="relative z-10 border-t border-line bg-white/80 py-8">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <p class="text-sm font-semibold text-slate-600">&copy; <?= date('Y'); ?> <?= $profile['name']; ?>. All rights reserved.</p>
                <p class="mt-1 text-sm text-slate-500">Dibuat dengan PHP, TailwindCSS, dan ikon Lucide.</p>
            </div>
            <div class="flex items-center gap-2">
                <?php foreach($profile['socials'] as $social): ?>
                    <?php $brandSvg = brandIcon($social['icon']); ?>
                    <a href="<?= $social['link']; ?>" target="_blank" rel="noopener" class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-line bg-white text-slate-600 hover:border-brand hover:text-brand transition" aria-label="<?= $social['label']; ?>">
                        <?php if($brandSvg): ?>
                            <?= $brandSvg; ?>
                        <?php else: ?>
                            <i data-lucide="<?= $social['icon']; ?>" class="h-5 w-5"></i>
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

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.16 });

        document.querySelectorAll('.fade-slide').forEach((el) => observer.observe(el));
    </script>
</body>
</html>
