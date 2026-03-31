    <?php
    require 'koneksi.php';

    $info      = $conn->query("SELECT * FROM info");
    $tags      = $conn->query("SELECT * FROM tags");
    $skills    = $conn->query("SELECT * FROM skills");
    $hobbies   = $conn->query("SELECT * FROM hobbies");
    $pengalaman = $conn->query("SELECT * FROM pengalaman");
    $gallery   = $conn->query("SELECT * FROM gallery");
    $sertifikat = $conn->query("SELECT * FROM sertifikat");

    
    $infoArr   = $info->fetch_all(MYSQLI_ASSOC);
    $tagsArr   = $tags->fetch_all(MYSQLI_ASSOC);
    $skillsArr = $skills->fetch_all(MYSQLI_ASSOC);
    $hobbiesArr = $hobbies->fetch_all(MYSQLI_ASSOC);
    $expArr    = $pengalaman->fetch_all(MYSQLI_ASSOC);
    $galleryArr = $gallery->fetch_all(MYSQLI_ASSOC);
    $certsArr  = $sertifikat->fetch_all(MYSQLI_ASSOC);
    ?>
    <!DOCTYPE html>
    <html lang="id">
    <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Nova Rasyadina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,400&family=Inter:wght@300;400;500&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
    <div id="app">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top" id="nav">
    <div class="container">
        <a class="navbar-brand" href="#home">Nova.</a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
        <i class="bi bi-list fs-4"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="menu">
        <ul class="navbar-nav gap-1">
            <li><a class="nav-link" href="#home">Home</a></li>
            <li><a class="nav-link" href="#about">About</a></li>
            <li><a class="nav-link" href="#galeri">Galeri</a></li>
            <li><a class="nav-link" href="#sertifikat">Sertifikat</a></li>
        </ul>
        </div>
    </div>
    </nav>

    <!-- HOME -->
    <section id="home" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center g-5">
        <div class="col-lg-7">
            <p class="text-rose mb-2">✦ Hi Everyone, saya</p>
            <h1 class="hero-name">Nova<br/><em>Rasyadina</em></h1>
            <p class="hero-sub mt-3">Digital Artist · Undergraduate<br/>
            Mahasiswi Sistem Informasi - Fakultas Teknik - Universitas Mulawarman, Samarinda</p>
            <div class="d-flex gap-2 flex-wrap mt-4">
            <?php foreach($tagsArr as $t): ?>
                <span class="chip"><?= htmlspecialchars($t['nama']) ?></span>
            <?php endforeach; ?>
            </div>
            <div class="mt-4 d-flex gap-3 flex-wrap">
            <a href="#galeri" class="btn-rose">Lihat Galeri</a>
            <a href="#about" class="btn-ghost">Tentang Saya</a>
            </div>
        </div>
        <div class="col-lg-5 text-center">
            <div class="hero-photo-wrap">
            <img src="foto1.jpeg" alt="Nova Rasyadina" class="hero-photo"/>
            <div class="hero-badge">📍 Samarinda, Kaltim</div>
            </div>
        </div>
        </div>
    </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="section">
    <div class="container">
        <div class="text-center mb-5">
        <span class="sec-label">01 — About</span>
        <h2 class="sec-title">Tentang <em>Saya</em></h2>
        </div>
        <div class="row g-5 align-items-start">

        <div class="col-lg-4">
            <div class="info-card">
            <?php foreach($infoArr as $i): ?>
                <div class="info-row">
                <span class="info-label"><?= htmlspecialchars($i['label']) ?></span>
                <span class="info-val"><?= htmlspecialchars($i['val']) ?></span>
                </div>
            <?php endforeach; ?>
            </div>
        </div>

        <div class="col-lg-8">
            <p class="bio">Saya Nova Rasyadina yang biasa disapa Nova, mahasiswi semester 4 Sistem Informasi Fakultas Teknik
            Universitas Mulawarman. sangat condong di bidang seni, khususnya menggambar, melukisan, dan musik serta sangat sangat menyukai 
            berkebun dan bermain game untuk mengisi waktu luang. Pernah aktif sebagai pengurus organisasi Inforsa (Information System Association) pada periode 2024-2025. saat ini sedang fokus mengembangkan skill di bidang digital art,
            UI/UX, serta web development, tentunya fokus terhadap akademik.</p>

            <h5 class="block-title mt-4 mb-3">Skills</h5>
            <?php foreach($skillsArr as $s): ?>
            <div class="mb-3">
                <div class="d-flex justify-content-between mb-1">
                <small class="text-mid"><?= htmlspecialchars($s['name']) ?></small>
                <small class="text-rose fw-500"><?= $s['val'] ?>%</small>
                </div>
                <div class="progress" style="height:6px; background:#ede4d3; border-radius:10px">
                <div class="progress-bar skill-bar" role="progressbar"
                    style="width:<?= $s['val'] ?>%"
                    aria-valuenow="<?= $s['val'] ?>"></div>
                </div>
            </div>
            <?php endforeach; ?>

            <h5 class="block-title mt-4 mb-3">Hobi</h5>
            <div class="d-flex flex-wrap gap-2">
            <?php foreach($hobbiesArr as $h): ?>
                <span class="chip"><?= htmlspecialchars($h['nama']) ?></span>
            <?php endforeach; ?>
            </div>

            <h5 class="block-title mt-4 mb-3">Pengalaman</h5>
            <?php foreach($expArr as $e): ?>
            <div class="exp-item">
                <div class="d-flex justify-content-between flex-wrap gap-1">
                <div>
                    <div class="fw-500 text-dark"><?= htmlspecialchars($e['role']) ?></div>
                    <small class="text-rose"><?= htmlspecialchars($e['org']) ?></small>
                </div>
                <small class="text-muted"><?= htmlspecialchars($e['year']) ?></small>
                </div>
                <p class="small text-muted mt-1 mb-0"><?= htmlspecialchars($e['deskripsi']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>

        </div>
    </div>
    </section>

    <!-- GALERI -->
    <section id="galeri" class="section bg-warm">
    <div class="container">
        <div class="text-center mb-5">
        <span class="sec-label">02 — Galeri</span>
        <h2 class="sec-title">Galeri <em>Karya</em></h2>
        <p class="text-muted small mt-1">Klik gambar untuk melihat lebih detail ✨</p>
        </div>

        <!-- Filter -->
        <div class="d-flex flex-wrap justify-content-center gap-2 mb-4">
        <button class="chip-btn active" onclick="filterGaleri('all', this)">✨ Semua</button>
        <button class="chip-btn" onclick="filterGaleri('digital', this)">🎨 Digital Art</button>
        <button class="chip-btn" onclick="filterGaleri('uiux', this)">🖥️ UI/UX</button>
        <button class="chip-btn" onclick="filterGaleri('lukis', this)">🖌️ Lukis & Gambar</button>
        <button class="chip-btn" onclick="filterGaleri('diy', this)">✂️ DIY & Craft</button>
        <button class="chip-btn" onclick="filterGaleri('musik', this)">🎵 Musik</button>
        </div>

        <div class="masonry" id="galeriGrid">
        <?php foreach($galleryArr as $g): ?>
            <div class="m-item" data-type="<?= $g['type'] ?>"
                onclick="openLightbox(<?= $g['id'] ?>, '<?= addslashes($g['img']) ?>', '<?= addslashes($g['title']) ?>', '<?= addslashes($g['deskripsi']) ?>', '<?= addslashes($g['cat']) ?>', '<?= addslashes($g['tags']) ?>')">
            <img src="<?= htmlspecialchars($g['img']) ?>" alt="<?= htmlspecialchars($g['title']) ?>" loading="lazy"/>
            <div class="m-hover">
                <span class="m-cat"><?= htmlspecialchars($g['cat']) ?></span>
                <i class="bi bi-zoom-in m-icon"></i>
            </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
    </section>

    <!-- SERTIFIKAT -->
    <section id="sertifikat" class="section">
    <div class="container">
        <div class="text-center mb-5">
        <span class="sec-label">03 — Sertifikat</span>
        <h2 class="sec-title">Sertifikat &amp; <em>Penghargaan</em></h2>
        </div>
        <div class="row g-4">
        <?php foreach($certsArr as $c): ?>
            <div class="col-md-6 col-lg-4">
            <div class="cert-card ct-<?= strtolower($c['type']) ?>">
                <div class="cert-top">
                <div class="cert-icon"><i class="<?= htmlspecialchars($c['icon']) ?>"></i></div>
                <span class="chip small"><?= htmlspecialchars($c['type']) ?></span>
                </div>
                <h6 class="cert-name"><?= htmlspecialchars($c['title']) ?></h6>
                <p class="small text-muted mb-1"><i class="bi bi-building me-1"></i><?= htmlspecialchars($c['issuer']) ?></p>
                <p class="small text-muted mb-2"><i class="bi bi-calendar3 me-1"></i><?= htmlspecialchars($c['year']) ?></p>
                <p class="small text-muted mb-3"><?= htmlspecialchars($c['deskripsi']) ?></p>
                <div class="cert-foot">
                <span class="small text-success"><i class="bi bi-patch-check-fill me-1"></i>Resmi</span>
                </div>
            </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
    <div class="container text-center">
        <div class="footer-name mb-1">Nova.</div>
        <p class="small text-muted mb-3">🌸</p>
        <div class="d-flex justify-content-center gap-3 mb-3">
        <a href="https://www.instagram.com/nva_ras/" class="soc"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/nova-rasyadina-anwar-8a88bb323/" class="soc"><i class="bi bi-linkedin"></i></a>
        </div>
        <small class="text-muted">© 2024 Nova Rasyadina</small>
    </div>
    </footer>

    <div class="lb-bg" id="lightbox" onclick="closeLightbox(event)">
    <div class="lb-box" id="lbBox">
        <button class="lb-close" onclick="closeLightbox()"><i class="bi bi-x-lg"></i></button>
        <button class="lb-prev" onclick="prevImg()"><i class="bi bi-chevron-left"></i></button>
        <button class="lb-next" onclick="nextImg()"><i class="bi bi-chevron-right"></i></button>
        <img src="" alt="" class="lb-img" id="lbImg"/>
        <div class="lb-info">
        <div class="d-flex justify-content-between align-items-center mb-1">
            <span class="chip small" id="lbCat"></span>
            <small class="text-muted" id="lbCounter"></small>
        </div>
        <div class="fw-500" id="lbTitle"></div>
        <small class="text-muted d-block mt-1" id="lbDesc"></small>
        <div class="d-flex gap-1 flex-wrap mt-2" id="lbTags"></div>
        </div>
    </div>
    </div>

    </div><!-- /#app -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    
    const galleryData = <?php echo json_encode($galleryArr); ?>;
    let currentItems = [...galleryData];
    let currentIdx   = 0;


    function filterGaleri(type, btn) {
    document.querySelectorAll('.chip-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');

    const items = document.querySelectorAll('.m-item');
    items.forEach(item => {
        if (type === 'all' || item.dataset.type === type) {
        item.style.display = 'block';
        } else {
        item.style.display = 'none';
        }
    });

    currentItems = type === 'all'
        ? [...galleryData]
        : galleryData.filter(g => g.type === type);
    }


    function openLightbox(id, img, title, desc, cat, tags) {
    currentIdx = currentItems.findIndex(g => g.id == id);
    showLightbox();
    }

    function showLightbox() {
    const g = currentItems[currentIdx];
    document.getElementById('lbImg').src    = g.img;
    document.getElementById('lbImg').alt    = g.title;
    document.getElementById('lbTitle').textContent = g.title;
    document.getElementById('lbDesc').textContent  = g.deskripsi;
    document.getElementById('lbCat').textContent   = g.cat;
    document.getElementById('lbCounter').textContent = (currentIdx+1) + ' / ' + currentItems.length;

    const tagsEl = document.getElementById('lbTags');
    tagsEl.innerHTML = '';
    g.tags.split(',').forEach(t => {
        const span = document.createElement('span');
        span.className   = 'chip small';
        span.textContent = t.trim();
        tagsEl.appendChild(span);
    });

    document.getElementById('lightbox').classList.add('show');
    document.getElementById('lbBox').classList.add('show');
    document.body.style.overflow = 'hidden';
    }

    function closeLightbox(e) {
    if (e && e.target !== document.getElementById('lightbox')) return;
    document.getElementById('lightbox').classList.remove('show');
    document.getElementById('lbBox').classList.remove('show');
    document.body.style.overflow = '';
    }

    function nextImg() {
    currentIdx = (currentIdx + 1) % currentItems.length;
    showLightbox();
    }

    function prevImg() {
    currentIdx = (currentIdx - 1 + currentItems.length) % currentItems.length;
    showLightbox();
    }

    
    document.addEventListener('keydown', e => {
    if (!document.getElementById('lightbox').classList.contains('show')) return;
    if (e.key === 'ArrowRight') nextImg();
    if (e.key === 'ArrowLeft')  prevImg();
    if (e.key === 'Escape')     { document.getElementById('lightbox').classList.remove('show'); document.getElementById('lbBox').classList.remove('show'); document.body.style.overflow = ''; }
    });

    
    window.addEventListener('scroll', () =>
    document.getElementById('nav').classList.toggle('scrolled', scrollY > 50));

    
    const aboutEl = document.getElementById('about');
    new IntersectionObserver(([entry]) => {
    if (entry.isIntersecting)
        aboutEl.querySelectorAll('.skill-bar').forEach(b =>
        (b.style.width = b.getAttribute('aria-valuenow') + '%'));
    }, { threshold: 0.2 }).observe(aboutEl);
    </script>
    </body>
    </html>