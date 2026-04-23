<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" href="logo.png" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Services | First Step Technology</title>
  <meta name="description" content="Explore First Step Technology's full suite of IP voice services — retail voice, wholesale platform, hosted PBX, DID numbers, call center, and auto-dialer." />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="shared.css" />
  <style>
    /* PAGE BANNER */
    .page-banner { padding: 180px 0 110px; position: relative; overflow: hidden; }
    .page-banner-bg { position: absolute; inset: -60px; background: radial-gradient(ellipse 70% 55% at 50% 40%,rgba(13,110,253,.22) 0%,transparent 60%), radial-gradient(ellipse 55% 50% at 80% 70%,rgba(139,92,246,.12) 0%,transparent 55%), linear-gradient(180deg,#080f1e 0%,#0b1a3c 60%,#080f1e 100%); will-change:transform; }
    .page-banner-grid { position: absolute; inset: 0; background-image: linear-gradient(rgba(13,110,253,.06) 1px,transparent 1px), linear-gradient(90deg,rgba(13,110,253,.06) 1px,transparent 1px); background-size: 60px 60px; mask-image: radial-gradient(ellipse at 50% 40%,black 30%,transparent 70%); animation: gridDrift 20s linear infinite; }
    @keyframes gridDrift{from{transform:translateY(0);}to{transform:translateY(60px);}}
    .page-banner-content { position: relative; z-index: 2; }
    .breadcrumb-nav { display: flex; align-items: center; gap: 8px; font-size: .85rem; color: rgba(255,255,255,.4); margin-bottom: 18px; }
    .breadcrumb-nav a { color: var(--cyan); }
    .page-banner h1 { font-family: 'Poppins',sans-serif; font-size: clamp(2.4rem,5vw,4rem); font-weight: 800; color: #fff; line-height: 1.15; margin-bottom: 20px; }
    .page-banner h1 .highlight { background: linear-gradient(90deg,var(--accent),var(--cyan)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    .page-banner p { font-size: 1.1rem; color: rgba(255,255,255,.6); line-height: 1.8; max-width: 600px; }

    /* SERVICE TABS */
    #services { padding: 100px 0; background: #0b1120; }
    .svc-tabs { display: flex; gap: 10px; flex-wrap: wrap; margin-bottom: 50px; padding: 6px; background: rgba(255,255,255,.03); border: 1px solid rgba(255,255,255,.07); border-radius: 16px; }
    .svc-tab { flex: 1; min-width: 120px; text-align: center; padding: 12px 16px; border-radius: 11px; font-size: .88rem; font-weight: 600; color: rgba(255,255,255,.5); cursor: pointer; transition: all .3s; border: none; background: transparent; }
    .svc-tab.active { background: linear-gradient(135deg,var(--accent),var(--cyan)); color: #fff; box-shadow: 0 4px 20px rgba(13,110,253,.3); }
    .svc-tab:hover:not(.active) { color: #fff; background: rgba(255,255,255,.06); }

    /* SERVICE PANELS */
    .svc-panel { display: none; animation: fadeInUp .4s ease; }
    .svc-panel.active { display: block; }
    @keyframes fadeInUp { from{opacity:0;transform:translateY(16px);} to{opacity:1;transform:translateY(0);} }
    .svc-detail-wrap { border-radius: 24px; overflow: hidden; background: rgba(255,255,255,.03); border: 1px solid rgba(255,255,255,.08); }
    .svc-detail-header { padding: 48px 48px 36px; position: relative; overflow: hidden; }
    .svc-detail-header::before { content:''; position:absolute; top:-60px; right:-60px; width:280px; height:280px; border-radius:50%; filter:blur(60px); opacity:.2; }
    .svc-detail-body { padding: 0 48px 48px; }
    .svc-detail-icon { width: 72px; height: 72px; border-radius: 18px; display: flex; align-items: center; justify-content: center; font-size: 2rem; margin-bottom: 20px; }
    .svc-detail-header h2 { font-family: 'Poppins',sans-serif; font-size: 2rem; font-weight: 700; color: #fff; margin-bottom: 12px; }
    .svc-detail-header p { color: rgba(255,255,255,.6); font-size: 1rem; line-height: 1.8; max-width: 640px; }
    .feature-grid { display: grid; grid-template-columns: repeat(auto-fit,minmax(240px,1fr)); gap: 16px; margin-top: 32px; }
    .feat-item { display: flex; align-items: flex-start; gap: 12px; padding: 18px; background: rgba(255,255,255,.03); border: 1px solid rgba(255,255,255,.06); border-radius: 12px; }
    .feat-check { width: 24px; height: 24px; border-radius: 6px; background: rgba(34,197,94,.15); border: 1px solid rgba(34,197,94,.3); display: flex; align-items: center; justify-content: center; font-size: .65rem; color: #22c55e; flex-shrink: 0; margin-top: 2px; }
    .feat-item h6 { color: #fff; font-weight: 600; font-size: .9rem; margin-bottom: 3px; }
    .feat-item p { color: rgba(255,255,255,.45); font-size: .82rem; line-height: 1.55; margin: 0; }

    /* USE CASES */
    .use-case-tag { display: inline-flex; align-items: center; gap: 6px; padding: 5px 14px; border-radius: 50px; border: 1px solid rgba(255,255,255,.12); color: rgba(255,255,255,.55); font-size: .82rem; margin: 4px; }

    /* COMPARISON TABLE */
    #compare { padding: 100px 0; background: #080f1e; }
    .compare-table { width: 100%; border-collapse: separate; border-spacing: 0; }
    .compare-table th { background: rgba(13,110,253,.12); color: rgba(255,255,255,.8); font-weight: 600; font-size: .9rem; padding: 16px 20px; text-align: center; border-bottom: 2px solid rgba(13,110,253,.25); }
    .compare-table th:first-child { text-align: left; }
    .compare-table td { padding: 14px 20px; font-size: .88rem; color: rgba(255,255,255,.6); border-bottom: 1px solid rgba(255,255,255,.05); text-align: center; }
    .compare-table td:first-child { color: rgba(255,255,255,.8); font-weight: 500; text-align: left; }
    .compare-table tr:last-child td { border-bottom: none; }
    .compare-table tr:hover td { background: rgba(255,255,255,.02); }
    .check-y { color: #22c55e; font-size: 1rem; }
    .check-n { color: rgba(255,255,255,.2); font-size: 1rem; }
    .compare-wrap { background: rgba(255,255,255,.03); border: 1px solid rgba(255,255,255,.08); border-radius: 20px; overflow: hidden; }

    /* PROCESS */
    #process { padding: 100px 0; background: #0b1120; }
    .step-card { background: rgba(255,255,255,.03); border: 1px solid rgba(255,255,255,.08); border-radius: 18px; padding: 32px 28px; text-align: center; transition: all .35s; height: 100%; }
    .step-card:hover { transform: translateY(-8px); border-color: rgba(13,110,253,.3); box-shadow: 0 20px 50px rgba(0,0,0,.3); }
    .step-num-circle { width: 56px; height: 56px; border-radius: 50%; background: linear-gradient(135deg,var(--accent),var(--cyan)); display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; color: #fff; margin: 0 auto 20px; box-shadow: 0 6px 24px rgba(13,110,253,.3); }
    .step-card h5 { color: #fff; font-weight: 700; margin-bottom: 10px; }
    .step-card p { color: rgba(255,255,255,.5); font-size: .9rem; line-height: 1.65; }
    .step-connector { display: flex; align-items: center; justify-content: center; padding-top: 28px; color: rgba(13,110,253,.5); font-size: 1.2rem; }

    /* STATS */
    #stats { padding: 100px 0; position: relative; }
    .stats-bg { position: absolute; inset: -60px; background: radial-gradient(ellipse 100% 80% at 50% 50%,rgba(13,110,253,.18) 0%,transparent 70%), linear-gradient(180deg,#080f1e 0%,#0b1830 50%,#080f1e 100%); will-change: transform; }
    .stats-grid-line { position: absolute; inset: 0; background-image: linear-gradient(rgba(13,110,253,.05) 1px,transparent 1px), linear-gradient(90deg,rgba(13,110,253,.05) 1px,transparent 1px); background-size: 40px 40px; }

    /* CTA */
    #cta { padding: 120px 0; position: relative; overflow: hidden; }
    .cta-bg { position: absolute; inset: -80px; background: radial-gradient(ellipse 80% 60% at 30% 60%,rgba(13,110,253,.35) 0%,transparent 60%), radial-gradient(ellipse 60% 60% at 80% 30%,rgba(0,198,255,.2) 0%,transparent 55%), #050d1a; will-change: transform; }
    .cta-inner { position: relative; z-index: 2; text-align: center; }
    .cta-inner h2 { font-family:'Poppins',sans-serif; font-size:clamp(2rem,4.5vw,3.2rem); font-weight:800; color:#fff; margin-bottom:20px; }
    .cta-inner p { color:rgba(255,255,255,.6); font-size:1.05rem; max-width:520px; margin:0 auto 36px; }

    @media(max-width:768px){ .svc-detail-header,.svc-detail-body{padding:24px;} .svc-tab{font-size:.78rem;padding:10px 10px;} }
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
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link active" href="services.php">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        <li class="nav-item ms-lg-2"><a class="nav-link nav-cta" href="contact.php">Get Started</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- PAGE BANNER -->
<section class="page-banner">
  <div class="page-banner-bg" id="bannerBg"></div>
  <div class="page-banner-grid"></div>
  <div class="container page-banner-content">
    <div class="row align-items-center g-5">
      <div class="col-lg-7" data-aos="fade-right" data-aos-duration="800">
        <div class="breadcrumb-nav"><a href="index.php">Home</a><span>/</span><span>Services</span></div>
        <h1>Complete <span class="highlight">Voice Solutions</span> for Every Business</h1>
        <p>From retail IP voice to enterprise call center suites — six powerful products built on our carrier-grade global infrastructure.</p>
        <div class="d-flex gap-3 flex-wrap mt-4">
          <a href="contact.php" class="btn-primary-grad"><i class="fas fa-paper-plane"></i> Request a Demo</a>
          <a href="#compare" class="btn-outline-light-custom"><i class="fas fa-table"></i> Compare Plans</a>
        </div>
      </div>
      <div class="col-lg-5" data-aos="fade-left" data-aos-delay="200">
        <div class="row g-3">
          <div class="col-6"><div style="background:rgba(13,110,253,.1);border:1px solid rgba(13,110,253,.25);border-radius:16px;padding:20px;text-align:center;"><i class="fas fa-phone-volume" style="color:var(--cyan);font-size:1.8rem;display:block;margin-bottom:10px;"></i><div style="color:#fff;font-weight:600;font-size:.9rem;">Retail Voice</div></div></div>
          <div class="col-6"><div style="background:rgba(139,92,246,.1);border:1px solid rgba(139,92,246,.25);border-radius:16px;padding:20px;text-align:center;"><i class="fas fa-server" style="color:#a78bfa;font-size:1.8rem;display:block;margin-bottom:10px;"></i><div style="color:#fff;font-weight:600;font-size:.9rem;">Wholesale</div></div></div>
          <div class="col-6"><div style="background:rgba(34,197,94,.08);border:1px solid rgba(34,197,94,.2);border-radius:16px;padding:20px;text-align:center;"><i class="fas fa-building" style="color:#4ade80;font-size:1.8rem;display:block;margin-bottom:10px;"></i><div style="color:#fff;font-weight:600;font-size:.9rem;">Hosted PBX</div></div></div>
          <div class="col-6"><div style="background:rgba(251,146,60,.08);border:1px solid rgba(251,146,60,.2);border-radius:16px;padding:20px;text-align:center;"><i class="fas fa-hashtag" style="color:#fb923c;font-size:1.8rem;display:block;margin-bottom:10px;"></i><div style="color:#fff;font-weight:600;font-size:.9rem;">DID Numbers</div></div></div>
          <div class="col-6"><div style="background:rgba(236,72,153,.08);border:1px solid rgba(236,72,153,.2);border-radius:16px;padding:20px;text-align:center;"><i class="fas fa-headset" style="color:#f472b6;font-size:1.8rem;display:block;margin-bottom:10px;"></i><div style="color:#fff;font-weight:600;font-size:.9rem;">Call Center</div></div></div>
          <div class="col-6"><div style="background:rgba(20,184,166,.08);border:1px solid rgba(20,184,166,.2);border-radius:16px;padding:20px;text-align:center;"><i class="fas fa-robot" style="color:#2dd4bf;font-size:1.8rem;display:block;margin-bottom:10px;"></i><div style="color:#fff;font-weight:600;font-size:.9rem;">Auto-Dialer</div></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SERVICES TABS -->
<section id="services">
  <div class="container">
    <!-- Tab Buttons -->
    <div class="svc-tabs" data-aos="fade-up">
      <button class="svc-tab active" onclick="showTab('retail',this)"><i class="fas fa-phone-volume me-1"></i> Retail Voice</button>
      <button class="svc-tab" onclick="showTab('wholesale',this)"><i class="fas fa-server me-1"></i> Wholesale</button>
      <button class="svc-tab" onclick="showTab('pbx',this)"><i class="fas fa-building me-1"></i> Hosted PBX</button>
      <button class="svc-tab" onclick="showTab('did',this)"><i class="fas fa-hashtag me-1"></i> DID &amp; Toll-Free</button>
      <button class="svc-tab" onclick="showTab('callcenter',this)"><i class="fas fa-headset me-1"></i> Call Center</button>
      <button class="svc-tab" onclick="showTab('dialer',this)"><i class="fas fa-robot me-1"></i> Auto-Dialer</button>
    </div>

    <!-- Retail Voice -->
    <div class="svc-panel active" id="panel-retail">
      <div class="svc-detail-wrap">
        <div class="svc-detail-header" style="background:linear-gradient(135deg,rgba(13,110,253,.08),transparent);">
          <div class="svc-detail-header::before" style="background:#0d6efd;"></div>
          <div class="svc-detail-icon" style="background:linear-gradient(135deg,rgba(13,110,253,.2),rgba(0,198,255,.15));color:var(--cyan);"><i class="fas fa-phone-volume"></i></div>
          <h2>Retail IP Voice Services</h2>
          <p>Access high-quality worldwide voice termination through a single IP connection. Our retail voice service leverages our global carrier-grade backbone to deliver crystal-clear calls to any destination — at rates that keep you competitive.</p>
          <div class="mt-3 d-flex flex-wrap gap-2">
            <a href="contact.php" class="btn-primary-grad"><i class="fas fa-paper-plane"></i> Get Started</a>
          </div>
        </div>
        <div class="svc-detail-body">
          <h5 style="color:#fff;font-weight:700;margin-bottom:20px;">Key Features</h5>
          <div class="feature-grid">
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>150+ Country Coverage</h6><p>Terminate to any destination globally via a single SIP connection.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>Crystal-Clear HD Voice</h6><p>Wideband audio codecs (G.722, OPUS) for superior call clarity.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>Real-Time Rate Engine</h6><p>Dynamic per-minute rates updated automatically for best routing.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>Prepaid &amp; Postpaid</h6><p>Flexible billing models to match any business cash flow requirement.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>CDR &amp; Analytics</h6><p>Detailed call data records and reporting via web portal or API.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>99.9% SLA Uptime</h6><p>Redundant infrastructure with automatic failover across PoPs.</p></div></div>
          </div>
          <div class="mt-4"><h6 style="color:rgba(255,255,255,.6);font-size:.82rem;text-transform:uppercase;letter-spacing:1px;margin-bottom:12px;">Best For</h6>
            <span class="use-case-tag"><i class="fas fa-dot-circle" style="color:var(--cyan);font-size:.6rem;"></i> Calling Cards &amp; Prepaid Apps</span>
            <span class="use-case-tag"><i class="fas fa-dot-circle" style="color:var(--cyan);font-size:.6rem;"></i> SMB VoIP Providers</span>
            <span class="use-case-tag"><i class="fas fa-dot-circle" style="color:var(--cyan);font-size:.6rem;"></i> International Resellers</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Wholesale -->
    <div class="svc-panel" id="panel-wholesale">
      <div class="svc-detail-wrap">
        <div class="svc-detail-header" style="background:linear-gradient(135deg,rgba(139,92,246,.08),transparent);">
          <div class="svc-detail-icon" style="background:linear-gradient(135deg,rgba(139,92,246,.2),rgba(0,198,255,.1));color:#a78bfa;"><i class="fas fa-server"></i></div>
          <h2>Wholesale Platform</h2>
          <p>Our wholesale platform enables medium and small carriers to access IP-to-IP voice communication without the complexity of running their own network operations. We handle routing, rating, and redundancy — you focus on your customers.</p>
          <div class="mt-3"><a href="contact.php" class="btn-primary-grad"><i class="fas fa-paper-plane"></i> Get Started</a></div>
        </div>
        <div class="svc-detail-body">
          <h5 style="color:#fff;font-weight:700;margin-bottom:20px;">Key Features</h5>
          <div class="feature-grid">
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>LCR Routing Engine</h6><p>Least-cost routing with quality-based and country-priority rules.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>White-Label Portal</h6><p>Branded customer management portal for your resellers and end users.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>Automated Billing</h6><p>Per-minute rating engine with multi-currency support and invoicing.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>Unlimited Channels</h6><p>Scale from 100 to 100,000+ concurrent calls without infrastructure investment.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>Fraud Detection</h6><p>Real-time anomaly detection blocks fraudulent traffic before it costs you.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>REST API Access</h6><p>Full programmatic control of accounts, routes, and rate tables via API.</p></div></div>
          </div>
          <div class="mt-4"><h6 style="color:rgba(255,255,255,.6);font-size:.82rem;text-transform:uppercase;letter-spacing:1px;margin-bottom:12px;">Best For</h6>
            <span class="use-case-tag"><i class="fas fa-dot-circle" style="color:#a78bfa;font-size:.6rem;"></i> Regional Carriers</span>
            <span class="use-case-tag"><i class="fas fa-dot-circle" style="color:#a78bfa;font-size:.6rem;"></i> MVNO Operators</span>
            <span class="use-case-tag"><i class="fas fa-dot-circle" style="color:#a78bfa;font-size:.6rem;"></i> Telecom Aggregators</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Hosted PBX -->
    <div class="svc-panel" id="panel-pbx">
      <div class="svc-detail-wrap">
        <div class="svc-detail-header" style="background:linear-gradient(135deg,rgba(34,197,94,.06),transparent);">
          <div class="svc-detail-icon" style="background:linear-gradient(135deg,rgba(34,197,94,.2),rgba(0,198,255,.1));color:#4ade80;"><i class="fas fa-building"></i></div>
          <h2>Hosted IP-PBX</h2>
          <p>A full-featured cloud-based PBX system for businesses of any size. Manage extensions, IVR menus, call routing, voicemail, and conferencing from a single intuitive dashboard — no on-premises hardware required.</p>
          <div class="mt-3"><a href="contact.php" class="btn-primary-grad"><i class="fas fa-paper-plane"></i> Get Started</a></div>
        </div>
        <div class="svc-detail-body">
          <h5 style="color:#fff;font-weight:700;margin-bottom:20px;">Key Features</h5>
          <div class="feature-grid">
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>Unlimited Extensions</h6><p>Add users and departments instantly — scale from 5 to 5,000 seats.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>Multi-Level IVR</h6><p>Build sophisticated auto-attendant menus with drag-and-drop simplicity.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>Video Conferencing</h6><p>Built-in multi-party video calls with screen sharing and chat.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>CRM Integration</h6><p>Native connectors for Salesforce, HubSpot, Zoho, and 50+ platforms.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>Mobile Softphone</h6><p>iOS and Android apps let your team work from anywhere in the world.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>Call Recording</h6><p>On-demand or automatic call recording with encrypted cloud storage.</p></div></div>
          </div>
          <div class="mt-4"><h6 style="color:rgba(255,255,255,.6);font-size:.82rem;text-transform:uppercase;letter-spacing:1px;margin-bottom:12px;">Best For</h6>
            <span class="use-case-tag"><i class="fas fa-dot-circle" style="color:#4ade80;font-size:.6rem;"></i> SMBs &amp; Enterprises</span>
            <span class="use-case-tag"><i class="fas fa-dot-circle" style="color:#4ade80;font-size:.6rem;"></i> Remote &amp; Hybrid Teams</span>
            <span class="use-case-tag"><i class="fas fa-dot-circle" style="color:#4ade80;font-size:.6rem;"></i> Multi-Branch Companies</span>
          </div>
        </div>
      </div>
    </div>

    <!-- DID -->
    <div class="svc-panel" id="panel-did">
      <div class="svc-detail-wrap">
        <div class="svc-detail-header" style="background:linear-gradient(135deg,rgba(251,146,60,.07),transparent);">
          <div class="svc-detail-icon" style="background:linear-gradient(135deg,rgba(251,146,60,.2),rgba(253,224,71,.1));color:#fb923c;"><i class="fas fa-hashtag"></i></div>
          <h2>DID &amp; Toll-Free Numbers</h2>
          <p>Acquire local, national, and toll-free phone numbers across 60+ countries. Instant provisioning, flexible call forwarding rules, and real-time analytics give you full control over your inbound communications.</p>
          <div class="mt-3"><a href="contact.php" class="btn-primary-grad"><i class="fas fa-paper-plane"></i> Get Started</a></div>
        </div>
        <div class="svc-detail-body">
          <h5 style="color:#fff;font-weight:700;margin-bottom:20px;">Key Features</h5>
          <div class="feature-grid">
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>60+ Countries</h6><p>Local, national, mobile, and toll-free numbers across all major markets.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>Instant Provisioning</h6><p>Numbers activated within minutes via portal or API — no waiting.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>Smart Call Routing</h6><p>Route by time-of-day, geography, caller ID, or custom rules.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>Number Porting</h6><p>Port your existing numbers to our platform with zero downtime.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>SMS Capable</h6><p>Send and receive SMS on selected DID numbers for unified comms.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>Number Analytics</h6><p>Track inbound call volumes, conversion rates, and caller geography.</p></div></div>
          </div>
          <div class="mt-4"><h6 style="color:rgba(255,255,255,.6);font-size:.82rem;text-transform:uppercase;letter-spacing:1px;margin-bottom:12px;">Best For</h6>
            <span class="use-case-tag"><i class="fas fa-dot-circle" style="color:#fb923c;font-size:.6rem;"></i> Global Businesses</span>
            <span class="use-case-tag"><i class="fas fa-dot-circle" style="color:#fb923c;font-size:.6rem;"></i> Marketing &amp; Lead Gen</span>
            <span class="use-case-tag"><i class="fas fa-dot-circle" style="color:#fb923c;font-size:.6rem;"></i> Customer Support Lines</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Call Center -->
    <div class="svc-panel" id="panel-callcenter">
      <div class="svc-detail-wrap">
        <div class="svc-detail-header" style="background:linear-gradient(135deg,rgba(236,72,153,.07),transparent);">
          <div class="svc-detail-icon" style="background:linear-gradient(135deg,rgba(236,72,153,.2),rgba(139,92,246,.15));color:#f472b6;"><i class="fas fa-headset"></i></div>
          <h2>Call Center Suite</h2>
          <p>A comprehensive inbound and outbound call center platform with unlimited agents working from office or remotely. Real-time monitoring, ACD queues, call recording, supervisor tools, and performance dashboards — all in one solution.</p>
          <div class="mt-3"><a href="contact.php" class="btn-primary-grad"><i class="fas fa-paper-plane"></i> Get Started</a></div>
        </div>
        <div class="svc-detail-body">
          <h5 style="color:#fff;font-weight:700;margin-bottom:20px;">Key Features</h5>
          <div class="feature-grid">
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>Unlimited Agents</h6><p>No per-seat licensing limits — scale your team without cost surprises.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>ACD &amp; Skill Routing</h6><p>Route calls to the right agent based on skill set, language, or availability.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>Supervisor Dashboard</h6><p>Live queue monitoring, agent whisper, barge-in, and call takeover tools.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>IVR &amp; Callback</h6><p>Reduce hold time with intelligent IVR and virtual callback scheduling.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>KPI Reporting</h6><p>ASA, FCR, AHT, CSAT, and 40+ other metrics in real-time dashboards.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>Remote Agent Support</h6><p>Fully browser-based agent UI — works from any device, anywhere.</p></div></div>
          </div>
          <div class="mt-4"><h6 style="color:rgba(255,255,255,.6);font-size:.82rem;text-transform:uppercase;letter-spacing:1px;margin-bottom:12px;">Best For</h6>
            <span class="use-case-tag"><i class="fas fa-dot-circle" style="color:#f472b6;font-size:.6rem;"></i> BPO &amp; Outsourcing</span>
            <span class="use-case-tag"><i class="fas fa-dot-circle" style="color:#f472b6;font-size:.6rem;"></i> Customer Service Teams</span>
            <span class="use-case-tag"><i class="fas fa-dot-circle" style="color:#f472b6;font-size:.6rem;"></i> Technical Support Centers</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Auto Dialer -->
    <div class="svc-panel" id="panel-dialer">
      <div class="svc-detail-wrap">
        <div class="svc-detail-header" style="background:linear-gradient(135deg,rgba(20,184,166,.07),transparent);">
          <div class="svc-detail-icon" style="background:linear-gradient(135deg,rgba(20,184,166,.2),rgba(0,198,255,.1));color:#2dd4bf;"><i class="fas fa-robot"></i></div>
          <h2>Auto-Dialer Technology</h2>
          <p>Advanced outbound dialer technology enabling hundreds of simultaneous outbound calls without manual dialing. Predictive, preview, and power dialing modes with CRM integration let your agents focus on conversations, not dialing.</p>
          <div class="mt-3"><a href="contact.php" class="btn-primary-grad"><i class="fas fa-paper-plane"></i> Get Started</a></div>
        </div>
        <div class="svc-detail-body">
          <h5 style="color:#fff;font-weight:700;margin-bottom:20px;">Key Features</h5>
          <div class="feature-grid">
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>Predictive Dialing</h6><p>AI-powered algorithm maximises agent talk time by predicting call answer rates.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>Preview &amp; Power Modes</h6><p>Let agents review lead info before dialing, or set fixed dial rates per agent.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>AMD Detection</h6><p>Automatic answering machine detection routes live calls to agents instantly.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>CRM Integration</h6><p>Sync with Salesforce, HubSpot, Zoho, or any CRM via API or Zapier.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>DNC Compliance</h6><p>Built-in Do-Not-Call list management for regulatory compliance.</p></div></div>
            <div class="feat-item"><div class="feat-check"><i class="fas fa-check"></i></div><div><h6>Campaign Analytics</h6><p>Real-time campaign dashboards with conversion, contact rate, and ROI metrics.</p></div></div>
          </div>
          <div class="mt-4"><h6 style="color:rgba(255,255,255,.6);font-size:.82rem;text-transform:uppercase;letter-spacing:1px;margin-bottom:12px;">Best For</h6>
            <span class="use-case-tag"><i class="fas fa-dot-circle" style="color:#2dd4bf;font-size:.6rem;"></i> Sales &amp; Telemarketing</span>
            <span class="use-case-tag"><i class="fas fa-dot-circle" style="color:#2dd4bf;font-size:.6rem;"></i> Debt Collection</span>
            <span class="use-case-tag"><i class="fas fa-dot-circle" style="color:#2dd4bf;font-size:.6rem;"></i> Survey &amp; Lead Gen</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- STATS -->
<section id="stats">
  <div class="stats-bg" id="statsBg"></div>
  <div class="stats-grid-line"></div>
  <div class="container position-relative" style="z-index:2;">
    <div class="row g-4 justify-content-center">
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="0"><div class="stat-card"><div class="stat-icon"><i class="fas fa-globe"></i></div><span class="stat-number" data-count="150">0</span><span class="stat-number">+</span><span class="stat-label">Countries Covered</span></div></div>
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100"><div class="stat-card"><div class="stat-icon"><i class="fas fa-handshake"></i></div><span class="stat-number" data-count="500">0</span><span class="stat-number">+</span><span class="stat-label">Active Partners</span></div></div>
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200"><div class="stat-card"><div class="stat-icon"><i class="fas fa-signal"></i></div><span class="stat-number" data-count="99">0</span><span class="stat-number">.9%</span><span class="stat-label">Network Uptime</span></div></div>
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300"><div class="stat-card"><div class="stat-icon"><i class="fas fa-phone"></i></div><span class="stat-number" data-count="1">0</span><span class="stat-number">B+ min/yr</span><span class="stat-label">Minutes Terminated</span></div></div>
    </div>
  </div>
</section>

<!-- COMPARE TABLE -->
<section id="compare">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-7" data-aos="fade-up">
        <div class="section-badge"><i class="fas fa-table"></i> Compare</div>
        <h2 class="section-title">Service <span class="accent">Comparison</span></h2>
        <p class="section-sub mx-auto">See which solution fits your business needs at a glance.</p>
      </div>
    </div>
    <div class="compare-wrap" data-aos="fade-up">
      <div class="table-responsive">
        <table class="compare-table">
          <thead>
            <tr>
              <th>Feature</th>
              <th>Retail Voice</th>
              <th>Wholesale</th>
              <th>Hosted PBX</th>
              <th>Call Center</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>Global Voice Termination</td><td><i class="fas fa-check check-y"></i></td><td><i class="fas fa-check check-y"></i></td><td><i class="fas fa-check check-y"></i></td><td><i class="fas fa-check check-y"></i></td></tr>
            <tr><td>SIP Trunk / DID Numbers</td><td><i class="fas fa-check check-y"></i></td><td><i class="fas fa-check check-y"></i></td><td><i class="fas fa-check check-y"></i></td><td><i class="fas fa-check check-y"></i></td></tr>
            <tr><td>White-Label Portal</td><td><i class="fas fa-minus check-n"></i></td><td><i class="fas fa-check check-y"></i></td><td><i class="fas fa-check check-y"></i></td><td><i class="fas fa-check check-y"></i></td></tr>
            <tr><td>IVR / Auto-Attendant</td><td><i class="fas fa-minus check-n"></i></td><td><i class="fas fa-minus check-n"></i></td><td><i class="fas fa-check check-y"></i></td><td><i class="fas fa-check check-y"></i></td></tr>
            <tr><td>Call Center ACD Queues</td><td><i class="fas fa-minus check-n"></i></td><td><i class="fas fa-minus check-n"></i></td><td><i class="fas fa-minus check-n"></i></td><td><i class="fas fa-check check-y"></i></td></tr>
            <tr><td>Predictive Auto-Dialer</td><td><i class="fas fa-minus check-n"></i></td><td><i class="fas fa-minus check-n"></i></td><td><i class="fas fa-minus check-n"></i></td><td><i class="fas fa-check check-y"></i></td></tr>
            <tr><td>CRM Integration</td><td><i class="fas fa-minus check-n"></i></td><td><i class="fas fa-check check-y"></i></td><td><i class="fas fa-check check-y"></i></td><td><i class="fas fa-check check-y"></i></td></tr>
            <tr><td>Supervisor Dashboard</td><td><i class="fas fa-minus check-n"></i></td><td><i class="fas fa-minus check-n"></i></td><td><i class="fas fa-minus check-n"></i></td><td><i class="fas fa-check check-y"></i></td></tr>
            <tr><td>REST API</td><td><i class="fas fa-check check-y"></i></td><td><i class="fas fa-check check-y"></i></td><td><i class="fas fa-check check-y"></i></td><td><i class="fas fa-check check-y"></i></td></tr>
            <tr><td>24/7 NOC Support</td><td><i class="fas fa-check check-y"></i></td><td><i class="fas fa-check check-y"></i></td><td><i class="fas fa-check check-y"></i></td><td><i class="fas fa-check check-y"></i></td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<!-- PROCESS -->
<section id="process">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-7" data-aos="fade-up">
        <div class="section-badge"><i class="fas fa-sitemap"></i> Onboarding</div>
        <h2 class="section-title">Up &amp; Running in <span class="accent">4 Steps</span></h2>
        <p class="section-sub mx-auto">From sign-up to your first live call — our onboarding is fast, guided, and hassle-free.</p>
      </div>
    </div>
    <div class="row align-items-center g-3">
      <div class="col-md-3" data-aos="fade-up" data-aos-delay="0"><div class="step-card"><div class="step-num-circle">1</div><h5>Register &amp; Verify</h5><p>Create your account and complete KYC verification within 24 hours.</p></div></div>
      <div class="col-md-1 d-none d-md-flex step-connector" data-aos="fade-up" data-aos-delay="50"><i class="fas fa-chevron-right"></i></div>
      <div class="col-md-3" data-aos="fade-up" data-aos-delay="100"><div class="step-card"><div class="step-num-circle">2</div><h5>Choose a Plan</h5><p>Select Retail, Wholesale, or Enterprise based on your requirements.</p></div></div>
      <div class="col-md-1 d-none d-md-flex step-connector" data-aos="fade-up" data-aos-delay="150"><i class="fas fa-chevron-right"></i></div>
      <div class="col-md-3" data-aos="fade-up" data-aos-delay="200"><div class="step-card"><div class="step-num-circle">3</div><h5>Integrate &amp; Configure</h5><p>Our team provides SIP credentials and assists with integration.</p></div></div>
      <div class="col-md-1 d-none d-md-flex step-connector" data-aos="fade-up" data-aos-delay="250"><i class="fas fa-chevron-right"></i></div>
      <div class="col-md-3" data-aos="fade-up" data-aos-delay="300" style="margin-top:0;"><div class="step-card"><div class="step-num-circle">4</div><h5>Go Live &amp; Scale</h5><p>Start calls globally and scale capacity instantly as you grow.</p></div></div>
    </div>
  </div>
</section>

<!-- CTA -->
<section id="cta">
  <div class="cta-bg" id="ctaBg"></div>
  <div class="container">
    <div class="cta-inner" data-aos="zoom-in" data-aos-duration="800">
      <div class="section-badge mx-auto mb-3"><i class="fas fa-rocket"></i> Start Today</div>
      <h2>Ready to Get <span style="background:linear-gradient(90deg,#0d6efd,#00c6ff);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Started?</span></h2>
      <p>Join 500+ partners relying on First Step Technology for enterprise-grade voice infrastructure.</p>
      <div class="d-flex gap-3 justify-content-center flex-wrap">
        <a href="contact.php" class="btn-primary-grad"><i class="fas fa-paper-plane"></i> Request a Demo</a>
        <a href="about.php" class="btn-outline-light-custom"><i class="fas fa-building"></i> Learn About Us</a>
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
      <div class="col-6 col-lg-2"><h6 class="footer-heading">Services</h6><ul class="footer-links"><li><a href="#" onclick="showTab('retail',null);return false;">Retail IP Voice</a></li><li><a href="#" onclick="showTab('wholesale',null);return false;">Wholesale</a></li><li><a href="#" onclick="showTab('pbx',null);return false;">Hosted PBX</a></li><li><a href="#" onclick="showTab('did',null);return false;">DID Numbers</a></li><li><a href="#" onclick="showTab('callcenter',null);return false;">Call Center</a></li></ul></div>
      <div class="col-lg-4"><h6 class="footer-heading">Stay Updated</h6><p style="color:rgba(255,255,255,.45);font-size:.9rem;margin-bottom:16px;">Subscribe for product updates.</p><div class="d-flex gap-2"><input type="email" class="form-control" placeholder="your@email.com" style="flex:1;" /><button style="background:linear-gradient(135deg,#0d6efd,#00c6ff);border:none;color:#fff;padding:0 20px;border-radius:12px;font-weight:600;white-space:nowrap;cursor:pointer;">Subscribe</button></div></div>
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
    p('bannerBg',.3); p('statsBg',.2); p('ctaBg',.25);
  }, { passive: true });

  function showTab(id, btn) {
    document.querySelectorAll('.svc-panel').forEach(p=>p.classList.remove('active'));
    document.getElementById('panel-'+id).classList.add('active');
    if(btn){
      document.querySelectorAll('.svc-tab').forEach(t=>t.classList.remove('active'));
      btn.classList.add('active');
    }
    document.getElementById('services').scrollIntoView({behavior:'smooth',block:'start'});
  }

  const obs=new IntersectionObserver(entries=>{entries.forEach(e=>{if(e.isIntersecting){const t=+e.target.getAttribute('data-count');let c=0;const step=t/60;const timer=setInterval(()=>{c=Math.min(c+step,t);e.target.textContent=Math.floor(c);if(c>=t)clearInterval(timer);},25);obs.unobserve(e.target);}});},{threshold:.5});
  document.querySelectorAll('[data-count]').forEach(el=>obs.observe(el));
</script>
</body>
</html>

