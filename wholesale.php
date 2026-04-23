<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" href="logo.png" />
  <meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Wholesale Platform | First Step Technology</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="shared.css" />
  <style>
    :root { --svc-color: #8b5cf6; --svc-color2: #06b6d4; }
    .svc-hero { min-height:100vh; display:flex; align-items:center; position:relative; overflow:hidden; padding-top:100px; }
    .svc-hero-bg { position:absolute; inset:-60px; background:radial-gradient(ellipse 70% 60% at 70% 40%,rgba(139,92,246,.3) 0%,transparent 60%),radial-gradient(ellipse 50% 50% at 20% 70%,rgba(6,182,212,.15) 0%,transparent 55%),linear-gradient(180deg,#080f1e 0%,#0d0b2e 50%,#080f1e 100%); will-change:transform; }
    .svc-hero-grid { position:absolute; inset:0; background-image:linear-gradient(rgba(139,92,246,.07) 1px,transparent 1px),linear-gradient(90deg,rgba(139,92,246,.07) 1px,transparent 1px); background-size:55px 55px; mask-image:radial-gradient(ellipse at center,black 30%,transparent 75%); animation:gd 20s linear infinite; }
    @keyframes gd{from{transform:translateY(0)}to{transform:translateY(55px)}}
    .hero-content { position:relative; z-index:2; }
    .svc-badge { display:inline-flex; align-items:center; gap:8px; background:rgba(139,92,246,.15); border:1px solid rgba(139,92,246,.4); border-radius:50px; padding:6px 18px; font-size:.82rem; color:#c4b5fd; font-weight:600; letter-spacing:.5px; margin-bottom:22px; }
    .section-alt { background:#0b1120; } .section-dark { background:#080f1e; }
    .feat-card { background:rgba(255,255,255,.03); border:1px solid rgba(255,255,255,.08); border-radius:18px; padding:30px; height:100%; transition:all .35s; }
    .feat-card:hover { border-color:rgba(139,92,246,.35); transform:translateY(-6px); box-shadow:0 20px 50px rgba(0,0,0,.3); }
    .feat-icon { width:56px; height:56px; border-radius:14px; display:flex; align-items:center; justify-content:center; font-size:1.4rem; margin-bottom:18px; background:linear-gradient(135deg,rgba(139,92,246,.2),rgba(6,182,212,.1)); color:#c4b5fd; }
    .feat-card h5 { color:#fff; font-weight:700; font-size:1rem; margin-bottom:8px; }
    .feat-card p { color:rgba(255,255,255,.5); font-size:.88rem; line-height:1.7; margin:0; }
    .how-step { display:flex; gap:18px; margin-bottom:36px; }
    .how-num { width:48px; height:48px; flex-shrink:0; border-radius:50%; background:linear-gradient(135deg,var(--svc-color),var(--svc-color2)); display:flex; align-items:center; justify-content:center; font-weight:800; color:#fff; font-size:1rem; box-shadow:0 4px 20px rgba(139,92,246,.3); }
    .how-step h5 { color:#fff; font-weight:700; margin-bottom:6px; }
    .how-step p { color:rgba(255,255,255,.5); font-size:.9rem; line-height:1.65; margin:0; }
    .mini-stat { text-align:center; padding:32px 20px; background:rgba(255,255,255,.03); border:1px solid rgba(255,255,255,.08); border-radius:16px; }
    .mini-stat .num { font-family:'Poppins',sans-serif; font-size:2.4rem; font-weight:800; background:linear-gradient(90deg,var(--svc-color),var(--svc-color2)); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text; }
    .mini-stat .lbl { color:rgba(255,255,255,.5); font-size:.88rem; margin-top:4px; }
    .use-card { background:rgba(255,255,255,.03); border:1px solid rgba(255,255,255,.07); border-radius:14px; padding:22px 20px; display:flex; gap:14px; align-items:flex-start; transition:all .3s; }
    .use-card:hover { border-color:rgba(139,92,246,.3); background:rgba(139,92,246,.05); }
    .use-icon { width:40px; height:40px; flex-shrink:0; border-radius:10px; background:rgba(139,92,246,.15); display:flex; align-items:center; justify-content:center; color:#c4b5fd; }
    .use-card h6 { color:#fff; font-weight:600; margin-bottom:4px; }
    .use-card p { color:rgba(255,255,255,.45); font-size:.85rem; margin:0; line-height:1.6; }
    .testi { background:rgba(255,255,255,.04); border:1px solid rgba(255,255,255,.09); border-radius:20px; padding:36px; position:relative; }
    .testi::before { content:'\201C'; position:absolute; top:16px; right:24px; font-size:5rem; color:rgba(139,92,246,.15); font-family:Georgia,serif; line-height:1; }
    .svc-cta { padding:100px 0; position:relative; overflow:hidden; }
    .svc-cta-bg { position:absolute; inset:-60px; background:radial-gradient(ellipse 80% 60% at 40% 50%,rgba(139,92,246,.3) 0%,transparent 60%),radial-gradient(ellipse 60% 50% at 80% 30%,rgba(6,182,212,.18) 0%,transparent 55%),#050d1a; will-change:transform; }
    .check-list { list-style:none; padding:0; }
    .check-list li { display:flex; align-items:center; gap:10px; color:rgba(255,255,255,.65); font-size:.92rem; margin-bottom:10px; }
    .check-list li i { color:#22c55e; font-size:.8rem; }
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

<section class="svc-hero">
  <div class="svc-hero-bg" id="heroBg"></div>
  <div class="svc-hero-grid"></div>
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6 hero-content" data-aos="fade-right" data-aos-duration="900">
        <nav aria-label="breadcrumb" style="margin-bottom:18px;"><div style="display:flex;align-items:center;gap:8px;font-size:.85rem;color:rgba(255,255,255,.4);"><a href="index.php" style="color:#c4b5fd;">Home</a><span>/</span><a href="services.php" style="color:#c4b5fd;">Services</a><span>/</span><span>Wholesale</span></div></nav>
        <div class="svc-badge"><i class="fas fa-server fa-xs"></i> Wholesale Platform</div>
        <h1 style="font-family:'Poppins',sans-serif;font-size:clamp(2.4rem,5vw,4rem);font-weight:800;color:#fff;line-height:1.12;margin-bottom:22px;">Carrier-Grade Voice<br><span style="background:linear-gradient(90deg,#8b5cf6,#06b6d4);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Without the Complexity</span></h1>
        <p style="font-size:1.05rem;color:rgba(255,255,255,.62);line-height:1.8;margin-bottom:32px;">Our wholesale platform enables medium and small carriers to access IP-to-IP voice communication at scale. We eliminate the complexity of network operations, routing management, and billing — so you can focus on growing your business.</p>
        <div class="d-flex flex-wrap gap-3 mb-4">
          <a href="contact.php" class="btn-primary-grad" style="background:linear-gradient(135deg,#8b5cf6,#06b6d4);box-shadow:0 8px 28px rgba(139,92,246,.35);"><i class="fas fa-paper-plane"></i> Get Started</a>
          <a href="#features" class="btn-outline-light-custom"><i class="fas fa-th-large"></i> See Features</a>
        </div>
        <div>
          <span style="display:inline-flex;align-items:center;gap:6px;padding:5px 14px;border-radius:50px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);font-size:.8rem;color:rgba(255,255,255,.6);margin:4px;"><i class="fas fa-check" style="color:#22c55e;"></i> White-Label Ready</span>
          <span style="display:inline-flex;align-items:center;gap:6px;padding:5px 14px;border-radius:50px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);font-size:.8rem;color:rgba(255,255,255,.6);margin:4px;"><i class="fas fa-check" style="color:#22c55e;"></i> LCR Routing</span>
          <span style="display:inline-flex;align-items:center;gap:6px;padding:5px 14px;border-radius:50px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);font-size:.8rem;color:rgba(255,255,255,.6);margin:4px;"><i class="fas fa-check" style="color:#22c55e;"></i> REST API</span>
          <span style="display:inline-flex;align-items:center;gap:6px;padding:5px 14px;border-radius:50px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);font-size:.8rem;color:rgba(255,255,255,.6);margin:4px;"><i class="fas fa-check" style="color:#22c55e;"></i> Fraud Detection</span>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
        <div style="background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.1);border-radius:24px;padding:36px;backdrop-filter:blur(20px);">
          <div style="display:flex;align-items:center;gap:12px;margin-bottom:24px;">
            <div style="width:48px;height:48px;background:linear-gradient(135deg,#8b5cf6,#06b6d4);border-radius:12px;display:flex;align-items:center;justify-content:center;"><i class="fas fa-server text-white fa-lg"></i></div>
            <div style="color:#fff;font-weight:700;">Wholesale Dashboard</div>
          </div>
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-bottom:16px;">
            <div style="background:rgba(139,92,246,.1);border:1px solid rgba(139,92,246,.2);border-radius:12px;padding:16px;"><div style="color:#c4b5fd;font-size:.75rem;margin-bottom:4px;">ACTIVE CHANNELS</div><div style="color:#fff;font-size:1.6rem;font-weight:800;">48,290</div><div style="color:#22c55e;font-size:.75rem;">▲ 12% this month</div></div>
            <div style="background:rgba(6,182,212,.1);border:1px solid rgba(6,182,212,.2);border-radius:12px;padding:16px;"><div style="color:#67e8f9;font-size:.75rem;margin-bottom:4px;">ROUTES AVAILABLE</div><div style="color:#fff;font-size:1.6rem;font-weight:800;">2,840</div><div style="color:rgba(255,255,255,.45);font-size:.75rem;">Across 150+ countries</div></div>
          </div>
          <div style="background:rgba(255,255,255,.04);border-radius:12px;padding:16px;margin-bottom:12px;">
            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:10px;"><span style="color:rgba(255,255,255,.6);font-size:.82rem;">Top Route — USA Mobile</span><span style="color:#c4b5fd;font-size:.82rem;font-weight:600;">$0.0032/min</span></div>
            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:10px;"><span style="color:rgba(255,255,255,.6);font-size:.82rem;">Top Route — UK Landline</span><span style="color:#c4b5fd;font-size:.82rem;font-weight:600;">$0.0015/min</span></div>
            <div style="display:flex;justify-content:space-between;align-items:center;"><span style="color:rgba(255,255,255,.6);font-size:.82rem;">Top Route — UAE Mobile</span><span style="color:#c4b5fd;font-size:.82rem;font-weight:600;">$0.0058/min</span></div>
          </div>
          <div style="display:flex;align-items:center;gap:8px;padding:12px 16px;background:rgba(34,197,94,.08);border:1px solid rgba(34,197,94,.2);border-radius:10px;"><span style="width:8px;height:8px;background:#22c55e;border-radius:50%;flex-shrink:0;animation:pulse 2s infinite;"></span><span style="color:rgba(255,255,255,.6);font-size:.82rem;">Rate table last updated: <strong style="color:#fff;">2 minutes ago</strong></span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="features" class="section-alt" style="padding:100px 0;">
  <div class="container">
    <div class="row justify-content-center text-center mb-5"><div class="col-lg-7" data-aos="fade-up"><div class="section-badge"><i class="fas fa-th-large"></i> Features</div><h2 class="section-title">Powerful Tools for <span class="accent">Carriers</span></h2><p class="section-sub mx-auto">Everything a carrier needs to compete — without building the infrastructure yourself.</p></div></div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div class="feat-card"><div class="feat-icon"><i class="fas fa-route"></i></div><h5>LCR Routing Engine</h5><p>Least-cost routing with quality-based, country-priority, and failover rules. Automatically route each call via the optimal path for cost and quality balance.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="60"><div class="feat-card"><div class="feat-icon"><i class="fas fa-paint-brush"></i></div><h5>White-Label Portal</h5><p>A fully branded customer management portal with your own logo, domain, and colors. Your resellers and end customers never see our branding.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120"><div class="feat-card"><div class="feat-icon"><i class="fas fa-calculator"></i></div><h5>Automated Rating & Billing</h5><p>Per-minute rating engine with multi-currency support, automatic invoicing, credit limit management, and low-balance alert notifications.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="180"><div class="feat-card"><div class="feat-icon"><i class="fas fa-infinity"></i></div><h5>Unlimited Concurrent Channels</h5><p>Scale from 100 to 100,000+ simultaneous calls without any infrastructure investment. We handle capacity planning and redundancy for you.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240"><div class="feat-card"><div class="feat-icon"><i class="fas fa-shield-halved"></i></div><h5>Real-Time Fraud Detection</h5><p>AI-powered anomaly detection blocks fraudulent traffic — IRSF, wangiri, and call flooding — before it impacts your account or downstream customers.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300"><div class="feat-card"><div class="feat-icon"><i class="fas fa-code"></i></div><h5>Full REST API</h5><p>Programmatic control over accounts, rate tables, routing rules, balance top-ups, CDR exports, and number management. Full Swagger documentation provided.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="360"><div class="feat-card"><div class="feat-icon"><i class="fas fa-chart-bar"></i></div><h5>Traffic Analytics</h5><p>Real-time dashboards showing ASR, ACD, NER, PDD, and concurrent call metrics. Drill down by country, route, customer, or time period.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="420"><div class="feat-card"><div class="feat-icon"><i class="fas fa-users-cog"></i></div><h5>Multi-Tenant Management</h5><p>Manage unlimited sub-accounts with individual rate plans, credit limits, and traffic reports. Ideal for resellers managing multiple end customers.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="480"><div class="feat-card"><div class="feat-icon"><i class="fas fa-plug"></i></div><h5>Softswitch Integration</h5><p>Compatible with all major softswitches including Metaswitch, Sonus, PortaSwitch, FreeSWITCH, and Asterisk. Our team assists with any integration.</p></div></div>
    </div>
  </div>
</section>

<section class="section-dark" style="padding:80px 0;position:relative;overflow:hidden;">
  <div style="position:absolute;inset:-60px;background:radial-gradient(ellipse 90% 70% at 50% 50%,rgba(139,92,246,.15) 0%,transparent 65%);will-change:transform;" id="statsBg"></div>
  <div class="container position-relative" style="z-index:2;">
    <div class="row g-4 text-center">
      <div class="col-6 col-lg-3" data-aos="zoom-in"><div class="mini-stat"><div class="num" data-count="2840">0</div><div class="lbl">Available Routes</div></div></div>
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="80"><div class="mini-stat"><div class="num" data-count="150">0</div><div>+</div><div class="lbl">Countries</div></div></div>
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="160"><div class="mini-stat"><div class="num" data-count="500">0</div><div>+</div><div class="lbl">Carrier Partners</div></div></div>
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="240"><div class="mini-stat"><div class="num" data-count="99">0</div><div>.9%</div><div class="lbl">Uptime SLA</div></div></div>
    </div>
  </div>
</section>

<section class="section-alt" style="padding:100px 0;">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6" data-aos="fade-right">
        <div class="section-badge"><i class="fas fa-sitemap"></i> Onboarding</div>
        <h2 class="section-title">Launch Your Wholesale <span class="accent">Business Fast</span></h2>
        <div class="divider"></div>
        <div class="how-step"><div class="how-num">1</div><div><h5>Apply for a Carrier Account</h5><p>Complete our carrier application with company details and traffic projections. Our team reviews and approves accounts within 48 hours.</p></div></div>
        <div class="how-step"><div class="how-num">2</div><div><h5>Configure Your White-Label Portal</h5><p>Upload your branding, set up your domain, and configure rate plans for your customers. We handle all the backend infrastructure.</p></div></div>
        <div class="how-step"><div class="how-num">3</div><div><h5>Integrate Your Softswitch</h5><p>Our technical team provides SIP peering credentials and assists with your softswitch or PBX integration. Usually completed same day.</p></div></div>
        <div class="how-step"><div class="how-num">4</div><div><h5>Onboard Your Customers</h5><p>Create sub-accounts for your resellers or end customers. Set individual rate plans, credit limits, and traffic policies per account.</p></div></div>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
        <div style="background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.08);border-radius:22px;padding:40px;">
          <h5 style="color:#fff;font-weight:700;margin-bottom:24px;"><i class="fas fa-check-circle" style="color:#c4b5fd;margin-right:10px;"></i>What's Included</h5>
          <ul class="check-list">
            <li><i class="fas fa-check-circle"></i> White-label customer portal (your brand)</li>
            <li><i class="fas fa-check-circle"></i> Multi-tenant sub-account management</li>
            <li><i class="fas fa-check-circle"></i> LCR + quality-based routing engine</li>
            <li><i class="fas fa-check-circle"></i> Automated rating and invoicing</li>
            <li><i class="fas fa-check-circle"></i> Real-time fraud detection & blocking</li>
            <li><i class="fas fa-check-circle"></i> REST API with full documentation</li>
            <li><i class="fas fa-check-circle"></i> 2,800+ routes across 150+ countries</li>
            <li><i class="fas fa-check-circle"></i> 24/7 NOC support with dedicated SLA</li>
            <li><i class="fas fa-check-circle"></i> Traffic analytics & CDR reporting</li>
            <li><i class="fas fa-check-circle"></i> Softswitch integration assistance</li>
          </ul>
          <div style="margin-top:28px;padding:20px;background:rgba(139,92,246,.1);border:1px solid rgba(139,92,246,.25);border-radius:14px;">
            <div style="color:#fff;font-weight:600;margin-bottom:6px;">🚀 Volume Pricing Available</div>
            <div style="color:rgba(255,255,255,.55);font-size:.88rem;line-height:1.6;">Custom rates available for partners terminating 1M+ minutes per month. Contact our carrier sales team to discuss your traffic profile.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-dark" style="padding:100px 0;">
  <div class="container">
    <div class="row justify-content-center text-center mb-5"><div class="col-lg-7" data-aos="fade-up"><div class="section-badge"><i class="fas fa-users"></i> Use Cases</div><h2 class="section-title">Who Uses Our <span class="accent">Wholesale Platform?</span></h2></div></div>
    <div class="row g-3">
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div class="use-card"><div class="use-icon"><i class="fas fa-network-wired"></i></div><div><h6>Regional Carriers</h6><p>Small and medium carriers that want to offer global termination without building their own international interconnects and routing.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="60"><div class="use-card"><div class="use-icon"><i class="fas fa-sim-card"></i></div><div><h6>MVNO Operators</h6><p>Mobile Virtual Network Operators need reliable, scalable voice termination for their subscribers at competitive wholesale rates.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120"><div class="use-card"><div class="use-icon"><i class="fas fa-handshake"></i></div><div><h6>Telecom Aggregators</h6><p>Aggregators buying and reselling voice capacity need a robust platform to manage sub-accounts, routing, and billing at scale.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="180"><div class="use-card"><div class="use-icon"><i class="fas fa-phone-square"></i></div><div><h6>VoIP Service Providers</h6><p>VoIP providers looking for a wholesale backbone to power their retail products with high-quality international termination.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240"><div class="use-card"><div class="use-icon"><i class="fas fa-store"></i></div><div><h6>Reseller Businesses</h6><p>Entrepreneurs and businesses wanting to launch a voice reseller operation with a white-label portal and their own brand identity.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300"><div class="use-card"><div class="use-icon"><i class="fas fa-satellite"></i></div><div><h6>ISPs & Data Centers</h6><p>Internet service providers and data center operators who want to add voice services to their existing customer base.</p></div></div></div>
    </div>
  </div>
</section>

<section class="section-alt" style="padding:80px 0;">
  <div class="container"><div class="row justify-content-center"><div class="col-lg-8" data-aos="fade-up">
    <div class="testi">
      <div style="color:#f59e0b;font-size:.9rem;margin-bottom:14px;letter-spacing:2px;">★★★★★</div>
      <p style="color:rgba(255,255,255,.75);font-size:1.05rem;line-height:1.8;margin-bottom:24px;">"We launched our own white-label VoIP brand in 3 weeks using First Step Technology's wholesale platform. The portal handles all billing automatically, the LCR routing beats everything we tried before, and their carrier sales team was hands-on throughout the entire setup process."</p>
      <div style="display:flex;align-items:center;gap:14px;"><div style="width:48px;height:48px;border-radius:50%;background:linear-gradient(135deg,#8b5cf6,#06b6d4);display:flex;align-items:center;justify-content:center;font-weight:700;color:#fff;">RC</div><div><div style="color:#fff;font-weight:600;">Rami Chalabi</div><div style="color:rgba(255,255,255,.45);font-size:.82rem;">Founder, VoicePlus MENA</div></div></div>
    </div>
  </div></div></div>
</section>

<section class="svc-cta">
  <div class="svc-cta-bg" id="ctaBg"></div>
  <div class="container"><div class="row justify-content-center text-center" style="position:relative;z-index:2;"><div class="col-lg-7" data-aos="zoom-in">
    <div class="section-badge mx-auto mb-3"><i class="fas fa-rocket"></i> Partner With Us</div>
    <h2 style="font-family:'Poppins',sans-serif;font-size:clamp(2rem,4vw,3rem);font-weight:800;color:#fff;margin-bottom:18px;">Launch Your Wholesale Voice <span style="background:linear-gradient(90deg,#8b5cf6,#06b6d4);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Business Today</span></h2>
    <p style="color:rgba(255,255,255,.6);font-size:1.05rem;max-width:500px;margin:0 auto 32px;line-height:1.75;">Join 500+ carrier partners on our wholesale platform. White-label, scale, and compete — without the infrastructure costs.</p>
    <div class="d-flex gap-3 justify-content-center flex-wrap"><a href="contact.php" class="btn-primary-grad" style="background:linear-gradient(135deg,#8b5cf6,#06b6d4);"><i class="fas fa-paper-plane"></i> Contact Carrier Sales</a><a href="services.php" class="btn-outline-light-custom"><i class="fas fa-th-large"></i> All Services</a></div>
  </div></div></div>
</section>

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
  AOS.init({once:true,easing:'ease-out-cubic'});
  window.addEventListener('scroll',()=>{document.getElementById('mainNav').classList.toggle('scrolled',scrollY>40);document.getElementById('backToTop').classList.toggle('show',scrollY>400);const p=(id,f)=>{const e=document.getElementById(id);if(e)e.style.transform=`translateY(${scrollY*f}px)`;};p('heroBg',.3);p('statsBg',.2);p('ctaBg',.25);},{passive:true});
  const obs=new IntersectionObserver(entries=>{entries.forEach(e=>{if(e.isIntersecting){const t=+e.target.getAttribute('data-count');let c=0;const step=t/60;const timer=setInterval(()=>{c=Math.min(c+step,t);e.target.textContent=Math.floor(c);if(c>=t)clearInterval(timer);},25);obs.unobserve(e.target);}});},{threshold:.5});
  document.querySelectorAll('[data-count]').forEach(el=>obs.observe(el));
</script>
</body>
</html>

