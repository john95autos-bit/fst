<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" href="logo.png" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Retail IP Voice | First Step Technology</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="shared.css" />
  <style>
    :root { --svc-color: #0d6efd; --svc-color2: #00c6ff; }
    /* HERO */
    .svc-hero { min-height: 100vh; display: flex; align-items: center; position: relative; overflow: hidden; padding-top: 100px; }
    .svc-hero-bg { position: absolute; inset: -60px; background: radial-gradient(ellipse 70% 60% at 70% 40%, rgba(13,110,253,.3) 0%, transparent 60%), radial-gradient(ellipse 50% 50% at 20% 70%, rgba(0,198,255,.15) 0%, transparent 55%), linear-gradient(180deg,#080f1e 0%,#08173a 50%,#080f1e 100%); will-change: transform; }
    .svc-hero-grid { position: absolute; inset: 0; background-image: linear-gradient(rgba(13,110,253,.07) 1px,transparent 1px), linear-gradient(90deg,rgba(13,110,253,.07) 1px,transparent 1px); background-size: 55px 55px; mask-image: radial-gradient(ellipse at center, black 30%, transparent 75%); animation: gd 20s linear infinite; }
    @keyframes gd{from{transform:translateY(0)}to{transform:translateY(55px)}}
    .hero-content { position: relative; z-index: 2; }
    .svc-badge { display: inline-flex; align-items: center; gap: 8px; background: rgba(13,110,253,.15); border: 1px solid rgba(13,110,253,.4); border-radius: 50px; padding: 6px 18px; font-size: .82rem; color: #00c6ff; font-weight: 600; letter-spacing: .5px; margin-bottom: 22px; }
    .hero-tag { display: inline-flex; align-items: center; gap: 6px; padding: 5px 14px; border-radius: 50px; background: rgba(255,255,255,.06); border: 1px solid rgba(255,255,255,.12); font-size: .8rem; color: rgba(255,255,255,.6); margin: 4px; }
    /* SECTIONS */
    .section-alt { background: #0b1120; }
    .section-dark { background: #080f1e; }
    /* FEATURE CARDS */
    .feat-card { background: rgba(255,255,255,.03); border: 1px solid rgba(255,255,255,.08); border-radius: 18px; padding: 30px; height: 100%; transition: all .35s; }
    .feat-card:hover { border-color: rgba(13,110,253,.35); transform: translateY(-6px); box-shadow: 0 20px 50px rgba(0,0,0,.3); }
    .feat-icon { width: 56px; height: 56px; border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 18px; background: linear-gradient(135deg, rgba(13,110,253,.2), rgba(0,198,255,.12)); color: #00c6ff; }
    .feat-card h5 { color: #fff; font-weight: 700; font-size: 1rem; margin-bottom: 8px; }
    .feat-card p { color: rgba(255,255,255,.5); font-size: .88rem; line-height: 1.7; margin: 0; }
    /* HOW IT WORKS */
    .how-step { display: flex; gap: 18px; margin-bottom: 36px; }
    .how-num { width: 48px; height: 48px; flex-shrink: 0; border-radius: 50%; background: linear-gradient(135deg, var(--svc-color), var(--svc-color2)); display: flex; align-items: center; justify-content: center; font-weight: 800; color: #fff; font-size: 1rem; box-shadow: 0 4px 20px rgba(13,110,253,.3); }
    .how-step h5 { color: #fff; font-weight: 700; margin-bottom: 6px; }
    .how-step p { color: rgba(255,255,255,.5); font-size: .9rem; line-height: 1.65; margin: 0; }
    /* STATS */
    .mini-stat { text-align: center; padding: 32px 20px; background: rgba(255,255,255,.03); border: 1px solid rgba(255,255,255,.08); border-radius: 16px; }
    .mini-stat .num { font-family: 'Poppins',sans-serif; font-size: 2.4rem; font-weight: 800; background: linear-gradient(90deg, var(--svc-color), var(--svc-color2)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    .mini-stat .lbl { color: rgba(255,255,255,.5); font-size: .88rem; margin-top: 4px; }
    /* USE CASES */
    .use-card { background: rgba(255,255,255,.03); border: 1px solid rgba(255,255,255,.07); border-radius: 14px; padding: 22px 20px; display: flex; gap: 14px; align-items: flex-start; transition: all .3s; }
    .use-card:hover { border-color: rgba(13,110,253,.3); background: rgba(13,110,253,.05); }
    .use-icon { width: 40px; height: 40px; flex-shrink: 0; border-radius: 10px; background: rgba(13,110,253,.15); display: flex; align-items: center; justify-content: center; color: #00c6ff; }
    .use-card h6 { color: #fff; font-weight: 600; margin-bottom: 4px; }
    .use-card p { color: rgba(255,255,255,.45); font-size: .85rem; margin: 0; line-height: 1.6; }
    /* TESTIMONIAL */
    .testi { background: rgba(255,255,255,.04); border: 1px solid rgba(255,255,255,.09); border-radius: 20px; padding: 36px; position: relative; }
    .testi::before { content:'\201C'; position: absolute; top: 16px; right: 24px; font-size: 5rem; color: rgba(13,110,253,.15); font-family: Georgia,serif; line-height: 1; }
    /* CTA */
    .svc-cta { padding: 100px 0; position: relative; overflow: hidden; }
    .svc-cta-bg { position: absolute; inset: -60px; background: radial-gradient(ellipse 80% 60% at 40% 50%, rgba(13,110,253,.3) 0%, transparent 60%), radial-gradient(ellipse 60% 50% at 80% 30%, rgba(0,198,255,.18) 0%, transparent 55%), #050d1a; will-change: transform; }
    .check-list { list-style: none; padding: 0; }
    .check-list li { display: flex; align-items: center; gap: 10px; color: rgba(255,255,255,.65); font-size: .92rem; margin-bottom: 10px; }
    .check-list li i { color: #22c55e; font-size: .8rem; }
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
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link active" href="services.php">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        <li class="nav-item ms-lg-2"><a class="nav-link nav-cta" href="contact.php">Get Started</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="svc-hero">
  <div class="svc-hero-bg" id="heroBg"></div>
  <div class="svc-hero-grid"></div>
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6 hero-content" data-aos="fade-right" data-aos-duration="900">
        <nav aria-label="breadcrumb" style="margin-bottom:18px;">
          <div style="display:flex;align-items:center;gap:8px;font-size:.85rem;color:rgba(255,255,255,.4);">
            <a href="index.php" style="color:#00c6ff;">Home</a><span>/</span>
            <a href="services.php" style="color:#00c6ff;">Services</a><span>/</span>
            <span>Retail IP Voice</span>
          </div>
        </nav>
        <div class="svc-badge"><i class="fas fa-phone-volume fa-xs"></i> Retail IP Voice Services</div>
        <h1 style="font-family:'Poppins',sans-serif;font-size:clamp(2.4rem,5vw,4rem);font-weight:800;color:#fff;line-height:1.12;margin-bottom:22px;">
          Crystal-Clear Voice<br><span style="background:linear-gradient(90deg,#0d6efd,#00c6ff);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">to Any Destination</span>
        </h1>
        <p style="font-size:1.05rem;color:rgba(255,255,255,.62);line-height:1.8;margin-bottom:32px;">
          Access high-quality worldwide voice termination through a single IP connection. Our retail voice service leverages a carrier-grade global backbone to deliver every call with ultra-low latency, superior clarity, and competitive per-minute rates.
        </p>
        <div class="d-flex flex-wrap gap-3 mb-4">
          <a href="contact.php" class="btn-primary-grad"><i class="fas fa-paper-plane"></i> Get Started Free</a>
          <a href="#features" class="btn-outline-light-custom"><i class="fas fa-th-large"></i> See Features</a>
        </div>
        <div>
          <span class="hero-tag"><i class="fas fa-check" style="color:#22c55e;"></i> 150+ Countries</span>
          <span class="hero-tag"><i class="fas fa-check" style="color:#22c55e;"></i> 99.9% Uptime SLA</span>
          <span class="hero-tag"><i class="fas fa-check" style="color:#22c55e;"></i> Prepaid & Postpaid</span>
          <span class="hero-tag"><i class="fas fa-check" style="color:#22c55e;"></i> HD Voice</span>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
        <div style="background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.1);border-radius:24px;padding:36px;backdrop-filter:blur(20px);">
          <div style="display:flex;align-items:center;gap:14px;margin-bottom:24px;">
            <div style="width:52px;height:52px;background:linear-gradient(135deg,#0d6efd,#00c6ff);border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:1.4rem;"><i class="fas fa-phone-volume text-white"></i></div>
            <div><div style="color:#fff;font-weight:700;font-size:1.05rem;">Live Network Status</div><div style="color:#22c55e;font-size:.82rem;display:flex;align-items:center;gap:5px;"><span style="width:7px;height:7px;background:#22c55e;border-radius:50%;display:inline-block;animation:pulse 2s infinite;"></span>All Systems Operational</div></div>
          </div>
          <div style="display:flex;flex-direction:column;gap:14px;">
            <div style="background:rgba(255,255,255,.04);border-radius:12px;padding:16px;">
              <div style="display:flex;justify-content:space-between;margin-bottom:8px;"><span style="color:rgba(255,255,255,.6);font-size:.82rem;">Global Uptime</span><span style="color:#00c6ff;font-size:.82rem;font-weight:600;">99.9%</span></div>
              <div style="height:5px;background:rgba(255,255,255,.08);border-radius:3px;"><div style="width:99.9%;height:100%;background:linear-gradient(90deg,#0d6efd,#00c6ff);border-radius:3px;"></div></div>
            </div>
            <div style="background:rgba(255,255,255,.04);border-radius:12px;padding:16px;">
              <div style="display:flex;justify-content:space-between;margin-bottom:8px;"><span style="color:rgba(255,255,255,.6);font-size:.82rem;">Average Latency</span><span style="color:#00c6ff;font-size:.82rem;font-weight:600;">&lt;18ms</span></div>
              <div style="height:5px;background:rgba(255,255,255,.08);border-radius:3px;"><div style="width:95%;height:100%;background:linear-gradient(90deg,#0d6efd,#00c6ff);border-radius:3px;"></div></div>
            </div>
            <div style="background:rgba(255,255,255,.04);border-radius:12px;padding:16px;">
              <div style="display:flex;justify-content:space-between;margin-bottom:8px;"><span style="color:rgba(255,255,255,.6);font-size:.82rem;">Call Quality (MOS)</span><span style="color:#00c6ff;font-size:.82rem;font-weight:600;">4.8 / 5.0</span></div>
              <div style="height:5px;background:rgba(255,255,255,.08);border-radius:3px;"><div style="width:96%;height:100%;background:linear-gradient(90deg,#0d6efd,#00c6ff);border-radius:3px;"></div></div>
            </div>
          </div>
          <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:12px;margin-top:20px;">
            <div style="background:rgba(13,110,253,.1);border:1px solid rgba(13,110,253,.2);border-radius:12px;padding:14px;text-align:center;"><div style="font-weight:800;font-size:1.3rem;color:#00c6ff;">150+</div><div style="font-size:.72rem;color:rgba(255,255,255,.45);margin-top:3px;">Countries</div></div>
            <div style="background:rgba(13,110,253,.1);border:1px solid rgba(13,110,253,.2);border-radius:12px;padding:14px;text-align:center;"><div style="font-weight:800;font-size:1.3rem;color:#00c6ff;">1B+</div><div style="font-size:.72rem;color:rgba(255,255,255,.45);margin-top:3px;">Min/Year</div></div>
            <div style="background:rgba(13,110,253,.1);border:1px solid rgba(13,110,253,.2);border-radius:12px;padding:14px;text-align:center;"><div style="font-weight:800;font-size:1.3rem;color:#00c6ff;">24/7</div><div style="font-size:.72rem;color:rgba(255,255,255,.45);margin-top:3px;">NOC Support</div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FEATURES -->
<section id="features" class="section-alt" style="padding:100px 0;">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-7" data-aos="fade-up">
        <div class="section-badge"><i class="fas fa-th-large"></i> Features</div>
        <h2 class="section-title">Everything You Need for <span class="accent">Global Voice</span></h2>
        <p class="section-sub mx-auto">One connection, every destination, unbeatable quality.</p>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div class="feat-card"><div class="feat-icon"><i class="fas fa-globe"></i></div><h5>150+ Country Coverage</h5><p>Terminate calls to any destination globally with a single SIP trunk connection. No need to manage multiple carriers or routing tables.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="60"><div class="feat-card"><div class="feat-icon"><i class="fas fa-wave-square"></i></div><h5>HD Voice Quality</h5><p>Wideband audio codecs — G.722, OPUS, and G.711 — deliver crystal-clear, natural-sounding voice on every call, anywhere in the world.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120"><div class="feat-card"><div class="feat-icon"><i class="fas fa-chart-line"></i></div><h5>Real-Time Rate Engine</h5><p>Dynamic per-minute rates updated automatically across all destinations. Our LCR engine routes every call via the optimal path for cost and quality.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="180"><div class="feat-card"><div class="feat-icon"><i class="fas fa-wallet"></i></div><h5>Prepaid & Postpaid Billing</h5><p>Flexible billing models to match any business cash flow. Prepaid accounts are provisioned instantly; postpaid monthly invoicing for established partners.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240"><div class="feat-card"><div class="feat-icon"><i class="fas fa-file-invoice"></i></div><h5>CDR & Analytics Portal</h5><p>Detailed call data records, real-time traffic dashboards, ASR/ACD/NER metrics, and exportable reports via web portal or REST API.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300"><div class="feat-card"><div class="feat-icon"><i class="fas fa-shield-halved"></i></div><h5>Fraud Protection</h5><p>Real-time anomaly detection, automatic spend limits, and DDoS protection secure every call. Alerts trigger instantly on suspicious traffic patterns.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="360"><div class="feat-card"><div class="feat-icon"><i class="fas fa-code"></i></div><h5>REST API Access</h5><p>Programmatically manage your account, pull CDRs, update routing rules, and check balances — all via our fully documented REST API.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="420"><div class="feat-card"><div class="feat-icon"><i class="fas fa-rotate"></i></div><h5>Automatic Failover</h5><p>Redundant Points of Presence across Asia, Europe, and the Americas ensure calls reroute automatically if any node experiences an issue.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="480"><div class="feat-card"><div class="feat-icon"><i class="fas fa-headset"></i></div><h5>24/7 NOC Support</h5><p>Our Network Operations Center monitors your traffic around the clock and proactively resolves issues before they affect your end users.</p></div></div>
    </div>
  </div>
</section>

<!-- STATS -->
<section class="section-dark" style="padding:80px 0;position:relative;overflow:hidden;">
  <div style="position:absolute;inset:-60px;background:radial-gradient(ellipse 90% 70% at 50% 50%,rgba(13,110,253,.15) 0%,transparent 65%);will-change:transform;" id="statsBg"></div>
  <div class="container position-relative" style="z-index:2;">
    <div class="row g-4 text-center">
      <div class="col-6 col-lg-3" data-aos="zoom-in"><div class="mini-stat"><div class="num" data-count="150">0</div><div>+</div><div class="lbl">Countries Reached</div></div></div>
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="80"><div class="mini-stat"><div class="num" data-count="18">0</div><div>ms avg</div><div class="lbl">Latency</div></div></div>
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="160"><div class="mini-stat"><div class="num" data-count="99">0</div><div>.9%</div><div class="lbl">Uptime SLA</div></div></div>
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="240"><div class="mini-stat"><div class="num" data-count="1">0</div><div>B+ min/yr</div><div class="lbl">Minutes Terminated</div></div></div>
    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section class="section-alt" style="padding:100px 0;">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6" data-aos="fade-right">
        <div class="section-badge"><i class="fas fa-sitemap"></i> How It Works</div>
        <h2 class="section-title">From Sign-Up to <span class="accent">First Call</span></h2>
        <div class="divider"></div>
        <div class="how-step"><div class="how-num">1</div><div><h5>Create Your Account</h5><p>Register online, submit KYC documents, and our team verifies your account within 24 hours. No upfront hardware required.</p></div></div>
        <div class="how-step"><div class="how-num">2</div><div><h5>Fund & Configure</h5><p>Add prepaid credit or set up postpaid billing. Receive your SIP credentials and configure your PBX or softswitch in minutes.</p></div></div>
        <div class="how-step"><div class="how-num">3</div><div><h5>Test Call Quality</h5><p>Make test calls to your key destinations. Our team assists with codec and routing optimization to ensure peak performance.</p></div></div>
        <div class="how-step"><div class="how-num">4</div><div><h5>Go Live & Monitor</h5><p>Start terminating real traffic. Monitor quality, spend, and CDRs in real-time via the web portal or API dashboard.</p></div></div>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
        <div style="background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.08);border-radius:22px;padding:40px;">
          <h5 style="color:#fff;font-weight:700;margin-bottom:24px;"><i class="fas fa-check-circle" style="color:var(--cyan);margin-right:10px;"></i>What's Included</h5>
          <ul class="check-list">
            <li><i class="fas fa-check-circle"></i> Single SIP trunk with global termination</li>
            <li><i class="fas fa-check-circle"></i> Dedicated account manager</li>
            <li><i class="fas fa-check-circle"></i> Real-time rate table access</li>
            <li><i class="fas fa-check-circle"></i> CDR export (CSV / API)</li>
            <li><i class="fas fa-check-circle"></i> Fraud monitoring & spend limits</li>
            <li><i class="fas fa-check-circle"></i> 99.9% uptime SLA</li>
            <li><i class="fas fa-check-circle"></i> 24/7 NOC technical support</li>
            <li><i class="fas fa-check-circle"></i> Automatic failover routing</li>
            <li><i class="fas fa-check-circle"></i> Multi-codec support (G.711/G.722/OPUS)</li>
            <li><i class="fas fa-check-circle"></i> TLS/SRTP encryption option</li>
          </ul>
          <div style="margin-top:28px;padding:20px;background:rgba(13,110,253,.1);border:1px solid rgba(13,110,253,.25);border-radius:14px;">
            <div style="color:#fff;font-weight:600;margin-bottom:6px;">⚡ Quick Setup</div>
            <div style="color:rgba(255,255,255,.55);font-size:.88rem;line-height:1.6;">Most partners are live within <strong style="color:#00c6ff;">48 hours</strong> of account approval — no hardware procurement, no lengthy integrations.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- USE CASES -->
<section class="section-dark" style="padding:100px 0;">
  <div class="container">
    <div class="row justify-content-center text-center mb-5"><div class="col-lg-7" data-aos="fade-up"><div class="section-badge"><i class="fas fa-users"></i> Use Cases</div><h2 class="section-title">Who Uses <span class="accent">Retail IP Voice?</span></h2><p class="section-sub mx-auto">Our retail voice service powers businesses across multiple industries that need reliable global calling.</p></div></div>
    <div class="row g-3">
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div class="use-card"><div class="use-icon"><i class="fas fa-credit-card"></i></div><div><h6>Calling Card Providers</h6><p>Power prepaid calling cards and apps with high-quality international termination at rates that keep you competitive in the market.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="60"><div class="use-card"><div class="use-icon"><i class="fas fa-building"></i></div><div><h6>SMB VoIP Providers</h6><p>Offer affordable international calling to small business customers without building your own termination infrastructure.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120"><div class="use-card"><div class="use-icon"><i class="fas fa-store"></i></div><div><h6>International Resellers</h6><p>Resell global voice termination to your own customer base with our competitive wholesale rates and flexible billing options.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="180"><div class="use-card"><div class="use-icon"><i class="fas fa-mobile-alt"></i></div><div><h6>App Developers</h6><p>Integrate PSTN calling into your mobile or web app using our SIP infrastructure and REST API for account management.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240"><div class="use-card"><div class="use-icon"><i class="fas fa-headset"></i></div><div><h6>Contact Centers</h6><p>Add outbound termination to your contact center platform with per-minute billing and quality guarantees to key destinations.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300"><div class="use-card"><div class="use-icon"><i class="fas fa-globe-asia"></i></div><div><h6>Diaspora Communities</h6><p>Enable affordable calls to home countries for diaspora communities with premium quality to key international destinations.</p></div></div></div>
    </div>
  </div>
</section>

<!-- TESTIMONIAL -->
<section class="section-alt" style="padding:80px 0;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8" data-aos="fade-up">
        <div class="testi">
          <div style="color:#f59e0b;font-size:.9rem;margin-bottom:14px;letter-spacing:2px;">★★★★★</div>
          <p style="color:rgba(255,255,255,.75);font-size:1.05rem;line-height:1.8;margin-bottom:24px;">"We switched our international termination to First Step Technology six months ago and the difference is night and day. Call quality to Southeast Asia — our most important market — improved dramatically, and rates are 20% lower than our previous provider. The CDR portal saves our billing team hours every week."</p>
          <div style="display:flex;align-items:center;gap:14px;">
            <div style="width:48px;height:48px;border-radius:50%;background:linear-gradient(135deg,#0d6efd,#00c6ff);display:flex;align-items:center;justify-content:center;font-weight:700;color:#fff;">DL</div>
            <div><div style="color:#fff;font-weight:600;">David Lim</div><div style="color:rgba(255,255,255,.45);font-size:.82rem;">CEO, AsiaVoice Networks</div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="svc-cta">
  <div class="svc-cta-bg" id="ctaBg"></div>
  <div class="container">
    <div class="row justify-content-center text-center" style="position:relative;z-index:2;">
      <div class="col-lg-7" data-aos="zoom-in">
        <div class="section-badge mx-auto mb-3"><i class="fas fa-rocket"></i> Start Today</div>
        <h2 style="font-family:'Poppins',sans-serif;font-size:clamp(2rem,4vw,3rem);font-weight:800;color:#fff;margin-bottom:18px;">Ready to Upgrade Your <span style="background:linear-gradient(90deg,#0d6efd,#00c6ff);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Voice Infrastructure?</span></h2>
        <p style="color:rgba(255,255,255,.6);font-size:1.05rem;max-width:500px;margin:0 auto 32px;line-height:1.75;">Join 500+ partners already terminating billions of minutes on our network. Get started in 48 hours.</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
          <a href="contact.php" class="btn-primary-grad"><i class="fas fa-paper-plane"></i> Request a Demo</a>
          <a href="services.php" class="btn-outline-light-custom"><i class="fas fa-th-large"></i> All Services</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-4"><div class="footer-brand"><img src="logo.png" alt="First Step Technology" style="height: 48px; width: auto;" /></div><p class="footer-desc">A leading global provider of next-generation IP Voice services — connecting the world since 2013.</p><div class="mt-4"><a href="#" class="social-btn"><i class="fab fa-linkedin-in"></i></a><a href="#" class="social-btn"><i class="fab fa-twitter"></i></a><a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a><a href="#" class="social-btn"><i class="fab fa-whatsapp"></i></a></div></div>
      <div class="col-6 col-lg-2"><h6 class="footer-heading">Pages</h6><ul class="footer-links"><li><a href="index.php">Home</a></li><li><a href="about.php">About Us</a></li><li><a href="services.php">Services</a></li><li><a href="contact.php">Contact</a></li></ul></div>
      <div class="col-6 col-lg-3"><h6 class="footer-heading">Services</h6><ul class="footer-links"><li><a href="retail-voice.php">Retail IP Voice</a></li><li><a href="wholesale.php">Wholesale Platform</a></li><li><a href="hosted-pbx.php">Hosted IP-PBX</a></li><li><a href="did-numbers.php">DID &amp; Toll-Free</a></li><li><a href="call-center.php">Call Center Suite</a></li><li><a href="auto-dialer.php">Auto-Dialer</a></li></ul></div>
      <div class="col-lg-3"><h6 class="footer-heading">Contact</h6><ul class="footer-links"><li><i class="fas fa-map-marker-alt me-2" style="color:var(--cyan);"></i>Hong Kong SAR, China</li><li><a href="mailto:info@firststeptechnology.com"><i class="fas fa-envelope me-2" style="color:var(--cyan);"></i>info@firststeptechnology.com</a></li><li><i class="fas fa-clock me-2" style="color:var(--cyan);"></i>24/7 NOC Support</li></ul></div>
    </div>
    <div class="footer-bottom"><p>&copy; 2025 First Step Technology Limited. All rights reserved.</p><div class="d-flex gap-3"><a href="#">Privacy Policy</a><a href="#">Terms of Service</a></div></div>
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
    const p=(id,f)=>{const e=document.getElementById(id);if(e)e.style.transform=`translateY(${scrollY*f}px)`;};
    p('heroBg',.3); p('statsBg',.2); p('ctaBg',.25);
  }, { passive: true });
  const obs=new IntersectionObserver(entries=>{entries.forEach(e=>{if(e.isIntersecting){const t=+e.target.getAttribute('data-count');let c=0;const step=t/60;const timer=setInterval(()=>{c=Math.min(c+step,t);e.target.textContent=Math.floor(c);if(c>=t)clearInterval(timer);},25);obs.unobserve(e.target);}});},{threshold:.5});
  document.querySelectorAll('[data-count]').forEach(el=>obs.observe(el));
</script>
</body>
</html>

