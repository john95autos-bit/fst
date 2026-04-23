<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" href="logo.png" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>First Step Technology | Next-Gen IP Voice Solutions</title>
  <meta name="description" content="First Step Technology — A leading global provider of next-generation IP Voice services, VoIP, hosted PBX, DID solutions and call center suites." />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="shared.css" />
  <style>
    /* ── HERO ── */
    #hero { position: relative; height: 100vh; min-height: 700px; display: flex; align-items: center; overflow: hidden; }
    .hero-parallax-bg {
      position: absolute; inset: -60px;
      background:
        radial-gradient(ellipse 80% 60% at 70% 40%, rgba(13,110,253,.25) 0%, transparent 65%),
        radial-gradient(ellipse 60% 50% at 20% 70%, rgba(0,198,255,.15) 0%, transparent 60%),
        linear-gradient(180deg,#080f1e 0%,#0a1a3c 50%,#080f1e 100%);
      will-change: transform;
    }
    .hero-grid { position: absolute; inset: 0; background-image: linear-gradient(rgba(13,110,253,.07) 1px,transparent 1px), linear-gradient(90deg,rgba(13,110,253,.07) 1px,transparent 1px); background-size: 60px 60px; mask-image: radial-gradient(ellipse at center,black 30%,transparent 75%); animation: gridDrift 20s linear infinite; }
    @keyframes gridDrift { from{transform:translateY(0);} to{transform:translateY(60px);} }
    .particles-wrap { position: absolute; inset: 0; pointer-events: none; }
    .particle { position: absolute; border-radius: 50%; animation: float linear infinite; opacity: .4; }
    .hero-badge { display: inline-flex; align-items: center; gap: 8px; background: rgba(13,110,253,.15); border: 1px solid rgba(13,110,253,.4); border-radius: 50px; padding: 6px 18px; font-size: .82rem; color: var(--cyan); font-weight: 600; letter-spacing: .5px; margin-bottom: 24px; }
    .hero-badge i { animation: pulse 2s ease-in-out infinite; }
    .hero-title { font-family: 'Poppins',sans-serif; font-size: clamp(2.6rem,6vw,5rem); font-weight: 800; line-height: 1.1; color: #fff; margin-bottom: 24px; }
    .hero-title .highlight { background: linear-gradient(90deg,var(--accent),var(--cyan)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    .hero-desc { font-size: 1.1rem; color: rgba(255,255,255,.65); line-height: 1.8; max-width: 560px; margin-bottom: 40px; }
    .hero-content { position: relative; z-index: 2; }
    .hero-visual { position: relative; z-index: 2; }

    /* Hero Card */
    .hero-card { background: rgba(255,255,255,.04); border: 1px solid rgba(255,255,255,.1); border-radius: 20px; padding: 28px; backdrop-filter: blur(20px); animation: cardFloat 4s ease-in-out infinite; }
    .hero-card-icon { width: 56px; height: 56px; background: linear-gradient(135deg,var(--accent),var(--cyan)); border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 16px; }
    .stat-row { display: flex; gap: 12px; margin-top: 20px; }
    .stat-pill { flex: 1; background: rgba(13,110,253,.12); border: 1px solid rgba(13,110,253,.25); border-radius: 12px; padding: 12px; text-align: center; }
    .stat-pill .num { font-size: 1.4rem; font-weight: 800; color: var(--cyan); }
    .stat-pill .lbl { font-size: .72rem; color: rgba(255,255,255,.5); }
    .float-badge { position: absolute; background: rgba(8,15,30,.9); border: 1px solid rgba(255,255,255,.12); backdrop-filter: blur(20px); border-radius: 14px; padding: 12px 18px; display: flex; align-items: center; gap: 10px; font-size: .82rem; white-space: nowrap; box-shadow: 0 8px 32px rgba(0,0,0,.3); }
    .float-badge-1 { top: 8%; right: -30px; animation: cardFloat 5s ease-in-out infinite; }
    .float-badge-2 { bottom: 12%; left: -40px; animation: cardFloat 5.5s ease-in-out infinite 1s; }
    .float-badge .dot { width: 8px; height: 8px; border-radius: 50%; background: #22c55e; animation: pulse 2s ease-in-out infinite; }
    .scroll-cue { position: absolute; bottom: 40px; left: 50%; transform: translateX(-50%); display: flex; flex-direction: column; align-items: center; gap: 6px; font-size: .75rem; color: rgba(255,255,255,.4); z-index: 2; animation: bounce 2s ease-in-out infinite; }
    @keyframes bounce { 0%,100%{transform:translateX(-50%) translateY(0);} 50%{transform:translateX(-50%) translateY(6px);} }

    /* ── PARTNERS ── */
    #partners { padding: 60px 0; background: #080f1e; border-top: 1px solid rgba(255,255,255,.06); }
    .partners-label { color: rgba(255,255,255,.3); font-size: .82rem; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 28px; }
    .partner-logo { display: flex; align-items: center; justify-content: center; padding: 14px 24px; border-radius: 12px; border: 1px solid rgba(13,110,253,.4); color: #ffffff; font-weight: 700; font-size: 1rem; transition: all .3s; background: rgba(13,110,253,.1); box-shadow: 0 4px 15px rgba(13,110,253,.15); }
    .partner-logo:hover { color: #ffffff; border-color: rgba(13,110,253,.8); background: rgba(13,110,253,.2); transform: translateY(-3px); box-shadow: 0 8px 25px rgba(13,110,253,.3); }

    /* ── SERVICES PREVIEW ── */
    #services-preview { padding: 110px 0; background: #0b1120; }
    .svc-card { background: rgba(255,255,255,.03); border: 1px solid rgba(255,255,255,.08); border-radius: 20px; padding: 36px 28px; height: 100%; transition: all .4s; position: relative; overflow: hidden; }
    .svc-card::before { content: ''; position: absolute; inset: 0; background: linear-gradient(135deg,rgba(13,110,253,.07),transparent); opacity: 0; transition: opacity .4s; border-radius: 20px; }
    .svc-card:hover { transform: translateY(-8px); border-color: rgba(13,110,253,.35); box-shadow: 0 20px 60px rgba(0,0,0,.3); }
    .svc-card:hover::before { opacity: 1; }
    .svc-icon { width: 60px; height: 60px; border-radius: 16px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 22px; transition: transform .3s; }
    .svc-card:hover .svc-icon { transform: scale(1.1) rotate(-5deg); }
    .svc-card h4 { color: #fff; font-weight: 700; font-size: 1.1rem; margin-bottom: 10px; }
    .svc-card p { color: rgba(255,255,255,.55); font-size: .9rem; line-height: 1.7; margin: 0; }
    .svc-link { display: inline-flex; align-items: center; gap: 6px; color: var(--cyan); font-size: .87rem; font-weight: 600; margin-top: 18px; transition: gap .3s; }
    .svc-card:hover .svc-link { gap: 10px; }

    /* ── STATS ── */
    #stats { padding: 100px 0; position: relative; }
    .stats-bg { position: absolute; inset: -60px; background: radial-gradient(ellipse 100% 80% at 50% 50%,rgba(13,110,253,.18) 0%,transparent 70%), linear-gradient(180deg,#080f1e 0%,#0b1830 50%,#080f1e 100%); will-change: transform; }
    .stats-grid { position: absolute; inset: 0; background-image: linear-gradient(rgba(13,110,253,.05) 1px,transparent 1px), linear-gradient(90deg,rgba(13,110,253,.05) 1px,transparent 1px); background-size: 40px 40px; }

    /* ── TESTIMONIALS ── */
    #testimonials { padding: 110px 0; background: #080f1e; }
    .testi-card { background: rgba(255,255,255,.04); border: 1px solid rgba(255,255,255,.09); border-radius: 20px; padding: 36px; height: 100%; transition: all .3s; position: relative; }
    .testi-card::before { content: '\201C'; position: absolute; top: 20px; right: 28px; font-size: 6rem; line-height: 1; font-family: Georgia,serif; color: rgba(13,110,253,.15); }
    .testi-card:hover { transform: translateY(-6px); border-color: rgba(13,110,253,.3); }
    .stars { color: #f59e0b; font-size: .88rem; margin-bottom: 14px; letter-spacing: 2px; }
    .testi-text { color: rgba(255,255,255,.7); font-size: .96rem; line-height: 1.75; margin-bottom: 24px; }
    .testi-author { display: flex; align-items: center; gap: 14px; }
    .author-av { width: 46px; height: 46px; border-radius: 50%; background: linear-gradient(135deg,var(--accent),var(--cyan)); display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: .95rem; color: #fff; flex-shrink: 0; }
    .author-name { color: #fff; font-weight: 600; font-size: .93rem; }
    .author-role { color: rgba(255,255,255,.45); font-size: .8rem; }

    /* ── CTA ── */
    #cta { padding: 120px 0; position: relative; overflow: hidden; }
    .cta-grad-bg { position: absolute; inset: -80px; background: radial-gradient(ellipse 80% 60% at 30% 60%,rgba(13,110,253,.35) 0%,transparent 60%), radial-gradient(ellipse 60% 60% at 80% 30%,rgba(0,198,255,.2) 0%,transparent 55%), #050d1a; will-change: transform; }

    @media(max-width:992px){ .float-badge-1,.float-badge-2{display:none;} }
    @media(max-width:768px){ .hero-visual{margin-top:48px;} }
  </style>
</head>
<body>
<!-- PRELOADER -->
<div id="ctn-preloader" class="ctn-preloader">
    <div class="animation-preloader">
        <div class="txt-loading">
            <span data-text-preloader="F" class="letters-loading">F</span>
            <span data-text-preloader="I" class="letters-loading">I</span>
            <span data-text-preloader="R" class="letters-loading">R</span>
            <span data-text-preloader="S" class="letters-loading">S</span>
            <span data-text-preloader="T" class="letters-loading">T</span>
            <span data-text-preloader="S" class="letters-loading">S</span>
            <span data-text-preloader="T" class="letters-loading">T</span>
            <span data-text-preloader="E" class="letters-loading">E</span>
            <span data-text-preloader="P" class="letters-loading">P</span>
        </div>
    </div>
    <div class="loader">
        <div class="row">
            <div class="col-3 loader-section section-left"><div class="bg"></div></div>
            <div class="col-3 loader-section section-left"><div class="bg"></div></div>
            <div class="col-3 loader-section section-right"><div class="bg"></div></div>
            <div class="col-3 loader-section section-right"><div class="bg"></div></div>
        </div>
    </div>
</div>
<script>
window.addEventListener('load', function() {
    setTimeout(function() {
        var preloader = document.getElementById('ctn-preloader');
        if(preloader) { 
            preloader.classList.add('loaded'); 
            setTimeout(function(){ preloader.style.display = 'none'; }, 1000); 
        }
    }, 500);
});
</script>


<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img src="logo.png" alt="First Step Technology" style="height: 40px; width: auto;" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
        <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        <li class="nav-item ms-lg-2"><a class="nav-link nav-cta" href="contact.php">Get Started</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO -->
<section id="hero">
  <div class="hero-parallax-bg" id="heroBg"></div>
  <div class="hero-grid"></div>
  <div class="particles-wrap" id="particles"></div>
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6 hero-content" data-aos="fade-right" data-aos-duration="900">
        <div class="hero-badge"><i class="fa fa-circle fa-xs"></i> Global VoIP Leader Since 2013</div>
        <h1 class="hero-title">Next-Gen <span class="highlight">IP Voice</span><br>Solutions for the<br>Modern World</h1>
        <p class="hero-desc">First Step Technology delivers high-quality worldwide voice termination, wholesale VoIP platforms, and call center suites — all through a single, powerful global infrastructure.</p>
        <div class="d-flex flex-wrap gap-3">
          <a href="services.php" class="btn-primary-grad">Explore Services <i class="fas fa-arrow-right"></i></a>
          <a href="contact.php" class="btn-outline-light-custom"><i class="fas fa-phone"></i> Talk to Us</a>
        </div>
      </div>
      <div class="col-lg-6 hero-visual" data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">
        <div style="position:relative;padding:20px 50px;">
          <div class="hero-card">
            <div class="hero-card-icon"><i class="fas fa-phone-volume text-white"></i></div>
            <h5 class="text-white mb-1" style="font-weight:700;">Global VoIP Network</h5>
            <p style="color:rgba(255,255,255,.5);font-size:.88rem;margin:0 0 14px;">Worldwide voice termination via a single connection</p>
            <div class="mb-2">
              <div class="d-flex justify-content-between mb-1"><span style="font-size:.78rem;color:rgba(255,255,255,.5);">Network Uptime</span><span style="font-size:.78rem;color:var(--cyan);">99.9%</span></div>
              <div style="height:4px;background:rgba(255,255,255,.1);border-radius:4px;"><div style="width:99%;height:100%;background:linear-gradient(90deg,#0d6efd,#00c6ff);border-radius:4px;"></div></div>
            </div>
            <div>
              <div class="d-flex justify-content-between mb-1"><span style="font-size:.78rem;color:rgba(255,255,255,.5);">Call Quality Score</span><span style="font-size:.78rem;color:var(--cyan);">4.8 MOS</span></div>
              <div style="height:4px;background:rgba(255,255,255,.1);border-radius:4px;"><div style="width:96%;height:100%;background:linear-gradient(90deg,#0d6efd,#00c6ff);border-radius:4px;"></div></div>
            </div>
            <div class="stat-row">
              <div class="stat-pill"><div class="num">150+</div><div class="lbl">Countries</div></div>
              <div class="stat-pill"><div class="num">1B+</div><div class="lbl">Minutes/yr</div></div>
              <div class="stat-pill"><div class="num">500+</div><div class="lbl">Partners</div></div>
            </div>
          </div>
          <div class="float-badge float-badge-1">
            <div class="dot"></div>
            <div><div style="color:#fff;font-weight:600;font-size:.82rem;">Live Calls</div><div style="color:rgba(255,255,255,.4);font-size:.72rem;">24,392 active</div></div>
          </div>
          <div class="float-badge float-badge-2">
            <i class="fas fa-shield-halved" style="color:var(--cyan);"></i>
            <div><div style="color:#fff;font-weight:600;font-size:.82rem;">Encrypted</div><div style="color:rgba(255,255,255,.4);font-size:.72rem;">End-to-end secure</div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="scroll-cue"><i class="fas fa-chevron-down"></i><span>Scroll to explore</span></div>
</section>

<!-- PARTNERS -->
<section id="partners">
  <div class="container text-center">
    <p class="partners-label">Trusted by carriers and enterprises worldwide</p>
    <div class="row g-3 justify-content-center">
      <div class="col-6 col-md-4 col-lg-2"><div class="partner-logo">TeleCom+</div></div>
      <div class="col-6 col-md-4 col-lg-2"><div class="partner-logo">GlobalNet</div></div>
      <div class="col-6 col-md-4 col-lg-2"><div class="partner-logo">VoiceCore</div></div>
      <div class="col-6 col-md-4 col-lg-2"><div class="partner-logo">NexaTel</div></div>
      <div class="col-6 col-md-4 col-lg-2"><div class="partner-logo">SwiftCall</div></div>
      <div class="col-6 col-md-4 col-lg-2"><div class="partner-logo">PrimeLine</div></div>
    </div>
  </div>
</section>

<!-- SERVICES PREVIEW -->
<section id="services-preview">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-7" data-aos="fade-up">
        <div class="section-badge"><i class="fas fa-th-large"></i> Our Services</div>
        <h2 class="section-title">End-to-End <span class="accent">Voice Solutions</span></h2>
        <p class="section-sub mx-auto">Everything your business needs to communicate globally — from retail voice to enterprise call centers.</p>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
        <div class="svc-card">
          <div class="svc-icon" style="background:linear-gradient(135deg,rgba(13,110,253,.2),rgba(0,198,255,.15));color:var(--cyan);"><i class="fas fa-phone-volume"></i></div>
          <h4>Retail IP Voice</h4>
          <p>High-quality worldwide voice termination through a single IP connection with ultra-low latency and competitive rates.</p>
          <a href="services.php" class="svc-link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="80">
        <div class="svc-card">
          <div class="svc-icon" style="background:linear-gradient(135deg,rgba(139,92,246,.2),rgba(0,198,255,.15));color:#a78bfa;"><i class="fas fa-server"></i></div>
          <h4>Wholesale Platform</h4>
          <p>IP-to-IP voice for medium and small carriers. Remove operational complexity and streamline rating on our robust platform.</p>
          <a href="services.php" class="svc-link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="160">
        <div class="svc-card">
          <div class="svc-icon" style="background:linear-gradient(135deg,rgba(236,72,153,.2),rgba(139,92,246,.15));color:#f472b6;"><i class="fas fa-headset"></i></div>
          <h4>Call Center Suite</h4>
          <p>Comprehensive call center solution with unlimited agents, real-time monitoring, call recording, and performance dashboards.</p>
          <a href="services.php" class="svc-link">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
    <div class="text-center mt-5" data-aos="fade-up">
      <a href="services.php" class="btn-primary-grad">View All Services <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
</section>

<!-- STATS -->
<section id="stats">
  <div class="stats-bg" id="statsBg"></div>
  <div class="stats-grid"></div>
  <div class="container position-relative" style="z-index:2;">
    <div class="row g-4 justify-content-center">
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="0">
        <div class="stat-card"><div class="stat-icon"><i class="fas fa-globe"></i></div><span class="stat-number" data-count="150">0</span><span class="stat-number">+</span><span class="stat-label">Countries Covered</span></div>
      </div>
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
        <div class="stat-card"><div class="stat-icon"><i class="fas fa-handshake"></i></div><span class="stat-number" data-count="500">0</span><span class="stat-number">+</span><span class="stat-label">Active Partners</span></div>
      </div>
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
        <div class="stat-card"><div class="stat-icon"><i class="fas fa-signal"></i></div><span class="stat-number" data-count="99">0</span><span class="stat-number">.9%</span><span class="stat-label">Network Uptime</span></div>
      </div>
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
        <div class="stat-card"><div class="stat-icon"><i class="fas fa-clock"></i></div><span class="stat-number" data-count="10">0</span><span class="stat-number">+</span><span class="stat-label">Years Experience</span></div>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section id="testimonials">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-7" data-aos="fade-up">
        <div class="section-badge"><i class="fas fa-comments"></i> Testimonials</div>
        <h2 class="section-title">What Our <span class="accent">Partners Say</span></h2>
        <p class="section-sub mx-auto">Real feedback from carriers and enterprises who trust First Step Technology.</p>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
        <div class="testi-card"><div class="stars">★★★★★</div><p class="testi-text">"First Step Technology transformed our wholesale voice operations. The platform is rock-solid, rates are competitive, and their support team is genuinely exceptional."</p><div class="testi-author"><div class="author-av">MR</div><div><div class="author-name">Michael Rashad</div><div class="author-role">VP Operations, TeleCom+</div></div></div></div>
      </div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120">
        <div class="testi-card"><div class="stars">★★★★★</div><p class="testi-text">"We integrated their auto-dialer with our CRM in under a week. Our outbound campaign productivity tripled. The quality of calls is the best we've ever experienced."</p><div class="testi-author"><div class="author-av">SL</div><div><div class="author-name">Sarah Lin</div><div class="author-role">Head of Sales, NexaTel Asia</div></div></div></div>
      </div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240">
        <div class="testi-card"><div class="stars">★★★★★</div><p class="testi-text">"The hosted IP-PBX has been a game-changer for our remote teams across 8 countries. Setup was straightforward and the uptime has been flawless for over two years."</p><div class="testi-author"><div class="author-av">AK</div><div><div class="author-name">Ahmed Khalil</div><div class="author-role">CTO, GlobalNet MENA</div></div></div></div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section id="cta">
  <div class="cta-grad-bg" id="ctaBg"></div>
  <div class="container">
    <div class="cta-inner" data-aos="zoom-in" data-aos-duration="800">
      <div class="section-badge mx-auto mb-3"><i class="fas fa-rocket"></i> Start Today</div>
      <h2>Ready to <span style="background:linear-gradient(90deg,#0d6efd,#00c6ff);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Transform</span> Your Communications?</h2>
      <p>Join 500+ partners who rely on First Step Technology for reliable, high-quality voice infrastructure.</p>
      <div class="d-flex gap-3 justify-content-center flex-wrap">
        <a href="contact.php" class="btn-primary-grad"><i class="fas fa-paper-plane"></i> Request a Demo</a>
        <a href="services.php" class="btn-outline-light-custom"><i class="fas fa-book-open"></i> View Services</a>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-4">
        <div class="footer-brand"><img src="logo.png" alt="First Step Technology" style="height: 48px; width: auto;" /></div>
        <p class="footer-desc">A leading global provider of next-generation IP Voice services — connecting the world since 2013.</p>
        <div class="mt-4">
          <a href="#" class="social-btn"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="social-btn"><i class="fab fa-twitter"></i></a>
          <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-btn"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
      <div class="col-6 col-lg-2">
        <h6 class="footer-heading">Pages</h6>
        <ul class="footer-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-2">
        <h6 class="footer-heading">Services</h6>
        <ul class="footer-links">
          <li><a href="services.php">Retail IP Voice</a></li>
          <li><a href="services.php">Wholesale Platform</a></li>
          <li><a href="services.php">Hosted IP-PBX</a></li>
          <li><a href="services.php">DID &amp; Toll-Free</a></li>
          <li><a href="services.php">Call Center Suite</a></li>
        </ul>
      </div>
      <div class="col-lg-4">
        <h6 class="footer-heading">Stay Updated</h6>
        <p style="color:rgba(255,255,255,.45);font-size:.9rem;margin-bottom:16px;">Subscribe for product updates, industry news, and exclusive offers.</p>
        <div class="d-flex gap-2">
          <input type="email" class="form-control" placeholder="your@email.com" style="flex:1;" />
          <button style="background:linear-gradient(135deg,#0d6efd,#00c6ff);border:none;color:#fff;padding:0 20px;border-radius:12px;font-weight:600;white-space:nowrap;cursor:pointer;">Subscribe</button>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2025 First Step Technology Limited. All rights reserved.</p>
      <div class="d-flex gap-3"><a href="#">Privacy Policy</a><a href="#">Terms of Service</a></div>
    </div>
  </div>
</footer>
<button id="backToTop" onclick="window.scrollTo({top:0,behavior:'smooth'})"><i class="fas fa-arrow-up"></i></button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({ once: true, easing: 'ease-out-cubic' });
  window.addEventListener('scroll', () => {
    document.getElementById('mainNav').classList.toggle('scrolled', scrollY > 40);
    document.getElementById('backToTop').classList.toggle('show', scrollY > 400);
    const p = (id, f) => { const e = document.getElementById(id); if(e) e.style.transform = `translateY(${scrollY*f}px)`; };
    p('heroBg', .35); p('statsBg', .2); p('ctaBg', .25);
  }, { passive: true });
  (function(){
    const wrap = document.getElementById('particles');
    const colors = ['rgba(13,110,253,.6)','rgba(0,198,255,.5)','rgba(255,255,255,.3)'];
    for(let i=0;i<22;i++){
      const p = document.createElement('div'); const sz = Math.random()*4+2;
      p.className='particle';
      p.style.cssText=`left:${Math.random()*100}%;width:${sz}px;height:${sz}px;background:${colors[Math.floor(Math.random()*3)]};animation-duration:${Math.random()*12+8}s;animation-delay:${Math.random()*8}s;`;
      wrap.appendChild(p);
    }
  })();
  const obs = new IntersectionObserver(entries=>{entries.forEach(e=>{if(e.isIntersecting){const t=+e.target.getAttribute('data-count');let c=0;const step=t/60;const timer=setInterval(()=>{c=Math.min(c+step,t);e.target.textContent=Math.floor(c);if(c>=t)clearInterval(timer);},25);obs.unobserve(e.target);}});},{threshold:.5});
  document.querySelectorAll('[data-count]').forEach(el=>obs.observe(el));
</script>
</body>
</html>

