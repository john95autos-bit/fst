<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" href="logo.png" />
  <meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Auto-Dialer | First Step Technology</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="shared.css" />
  <style>
    :root{--svc-color:#14b8a6;--svc-color2:#06b6d4;}
    .svc-hero{min-height:100vh;display:flex;align-items:center;position:relative;overflow:hidden;padding-top:100px;}
    .svc-hero-bg{position:absolute;inset:-60px;background:radial-gradient(ellipse 70% 60% at 70% 40%,rgba(20,184,166,.22) 0%,transparent 60%),radial-gradient(ellipse 50% 50% at 20% 70%,rgba(6,182,212,.15) 0%,transparent 55%),linear-gradient(180deg,#080f1e 0%,#061a18 50%,#080f1e 100%);will-change:transform;}
    .svc-hero-grid{position:absolute;inset:0;background-image:linear-gradient(rgba(20,184,166,.06) 1px,transparent 1px),linear-gradient(90deg,rgba(20,184,166,.06) 1px,transparent 1px);background-size:55px 55px;mask-image:radial-gradient(ellipse at center,black 30%,transparent 75%);animation:gd 20s linear infinite;}
    @keyframes gd{from{transform:translateY(0)}to{transform:translateY(55px)}}
    .hero-content{position:relative;z-index:2;}
    .svc-badge{display:inline-flex;align-items:center;gap:8px;background:rgba(20,184,166,.12);border:1px solid rgba(20,184,166,.35);border-radius:50px;padding:6px 18px;font-size:.82rem;color:#5eead4;font-weight:600;letter-spacing:.5px;margin-bottom:22px;}
    .section-alt{background:#0b1120;}.section-dark{background:#080f1e;}
    .feat-card{background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.08);border-radius:18px;padding:30px;height:100%;transition:all .35s;}
    .feat-card:hover{border-color:rgba(20,184,166,.35);transform:translateY(-6px);box-shadow:0 20px 50px rgba(0,0,0,.3);}
    .feat-icon{width:56px;height:56px;border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:1.4rem;margin-bottom:18px;background:linear-gradient(135deg,rgba(20,184,166,.18),rgba(6,182,212,.1));color:#5eead4;}
    .feat-card h5{color:#fff;font-weight:700;font-size:1rem;margin-bottom:8px;}
    .feat-card p{color:rgba(255,255,255,.5);font-size:.88rem;line-height:1.7;margin:0;}
    .how-step{display:flex;gap:18px;margin-bottom:36px;}
    .how-num{width:48px;height:48px;flex-shrink:0;border-radius:50%;background:linear-gradient(135deg,var(--svc-color),var(--svc-color2));display:flex;align-items:center;justify-content:center;font-weight:800;color:#fff;font-size:1rem;box-shadow:0 4px 20px rgba(20,184,166,.3);}
    .how-step h5{color:#fff;font-weight:700;margin-bottom:6px;}
    .how-step p{color:rgba(255,255,255,.5);font-size:.9rem;line-height:1.65;margin:0;}
    .mini-stat{text-align:center;padding:32px 20px;background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.08);border-radius:16px;}
    .mini-stat .num{font-family:'Poppins',sans-serif;font-size:2.4rem;font-weight:800;background:linear-gradient(90deg,var(--svc-color),var(--svc-color2));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;}
    .mini-stat .lbl{color:rgba(255,255,255,.5);font-size:.88rem;margin-top:4px;}
    .use-card{background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.07);border-radius:14px;padding:22px 20px;display:flex;gap:14px;align-items:flex-start;transition:all .3s;}
    .use-card:hover{border-color:rgba(20,184,166,.3);background:rgba(20,184,166,.04);}
    .use-icon{width:40px;height:40px;flex-shrink:0;border-radius:10px;background:rgba(20,184,166,.12);display:flex;align-items:center;justify-content:center;color:#5eead4;}
    .use-card h6{color:#fff;font-weight:600;margin-bottom:4px;}
    .use-card p{color:rgba(255,255,255,.45);font-size:.85rem;margin:0;line-height:1.6;}
    .testi{background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.09);border-radius:20px;padding:36px;position:relative;}
    .testi::before{content:'\201C';position:absolute;top:16px;right:24px;font-size:5rem;color:rgba(20,184,166,.12);font-family:Georgia,serif;line-height:1;}
    .svc-cta{padding:100px 0;position:relative;overflow:hidden;}
    .svc-cta-bg{position:absolute;inset:-60px;background:radial-gradient(ellipse 80% 60% at 40% 50%,rgba(20,184,166,.22) 0%,transparent 60%),radial-gradient(ellipse 60% 50% at 80% 30%,rgba(6,182,212,.18) 0%,transparent 55%),#050d1a;will-change:transform;}
    .check-list{list-style:none;padding:0;}
    .check-list li{display:flex;align-items:center;gap:10px;color:rgba(255,255,255,.65);font-size:.92rem;margin-bottom:10px;}
    .check-list li i{color:#22c55e;font-size:.8rem;}
    /* Dialer modes */
    .mode-card{background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.08);border-radius:16px;padding:28px;height:100%;transition:all .35s;text-align:center;}
    .mode-card:hover{border-color:rgba(20,184,166,.35);transform:translateY(-6px);}
    .mode-icon{font-size:2.5rem;margin-bottom:16px;}
    .mode-card h4{color:#fff;font-weight:700;font-size:1.1rem;margin-bottom:10px;}
    .mode-card p{color:rgba(255,255,255,.5);font-size:.88rem;line-height:1.7;}
    .mode-tag{display:inline-block;margin-top:14px;padding:4px 14px;border-radius:20px;font-size:.75rem;font-weight:600;}
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
    }, 3000);
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
        <nav aria-label="breadcrumb" style="margin-bottom:18px;"><div style="display:flex;align-items:center;gap:8px;font-size:.85rem;color:rgba(255,255,255,.4);"><a href="index.php" style="color:#5eead4;">Home</a><span>/</span><a href="services.php" style="color:#5eead4;">Services</a><span>/</span><span>Auto-Dialer</span></div></nav>
        <div class="svc-badge"><i class="fas fa-robot fa-xs"></i> Auto-Dialer Technology</div>
        <h1 style="font-family:'Poppins',sans-serif;font-size:clamp(2.4rem,5vw,4rem);font-weight:800;color:#fff;line-height:1.12;margin-bottom:22px;">Multiply Your Agent<br><span style="background:linear-gradient(90deg,#14b8a6,#06b6d4);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Productivity 3x</span></h1>
        <p style="font-size:1.05rem;color:rgba(255,255,255,.62);line-height:1.8;margin-bottom:32px;">Advanced outbound dialing technology that enables hundreds of simultaneous calls without manual dialing. Predictive, preview, and power modes with CRM integration let your agents spend time talking — not waiting.</p>
        <div class="d-flex flex-wrap gap-3 mb-4">
          <a href="contact.php" class="btn-primary-grad" style="background:linear-gradient(135deg,#14b8a6,#06b6d4);box-shadow:0 8px 28px rgba(20,184,166,.3);"><i class="fas fa-paper-plane"></i> Book a Demo</a>
          <a href="#features" class="btn-outline-light-custom"><i class="fas fa-th-large"></i> See Features</a>
        </div>
        <div>
          <span style="display:inline-flex;align-items:center;gap:6px;padding:5px 14px;border-radius:50px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);font-size:.8rem;color:rgba(255,255,255,.6);margin:4px;"><i class="fas fa-check" style="color:#22c55e;"></i> 3 Dialing Modes</span>
          <span style="display:inline-flex;align-items:center;gap:6px;padding:5px 14px;border-radius:50px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);font-size:.8rem;color:rgba(255,255,255,.6);margin:4px;"><i class="fas fa-check" style="color:#22c55e;"></i> AMD Detection</span>
          <span style="display:inline-flex;align-items:center;gap:6px;padding:5px 14px;border-radius:50px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);font-size:.8rem;color:rgba(255,255,255,.6);margin:4px;"><i class="fas fa-check" style="color:#22c55e;"></i> CRM Integration</span>
          <span style="display:inline-flex;align-items:center;gap:6px;padding:5px 14px;border-radius:50px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);font-size:.8rem;color:rgba(255,255,255,.6);margin:4px;"><i class="fas fa-check" style="color:#22c55e;"></i> DNC Compliance</span>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
        <div style="background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.1);border-radius:24px;padding:28px;">
          <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;">
            <div style="color:#fff;font-weight:700;font-size:.95rem;"><i class="fas fa-robot" style="color:#5eead4;margin-right:8px;"></i>Campaign Dashboard</div>
            <span style="background:rgba(34,197,94,.1);border:1px solid rgba(34,197,94,.25);border-radius:20px;padding:3px 12px;color:#22c55e;font-size:.75rem;display:flex;align-items:center;gap:5px;"><span style="width:6px;height:6px;background:#22c55e;border-radius:50%;animation:pulse 2s infinite;"></span>Running</span>
          </div>
          <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:10px;margin-bottom:20px;">
            <div style="background:rgba(20,184,166,.1);border:1px solid rgba(20,184,166,.2);border-radius:10px;padding:12px;text-align:center;"><div style="color:#5eead4;font-weight:800;font-size:1.4rem;">342</div><div style="color:rgba(255,255,255,.45);font-size:.7rem;">Calls/Hour</div></div>
            <div style="background:rgba(34,197,94,.08);border:1px solid rgba(34,197,94,.2);border-radius:10px;padding:12px;text-align:center;"><div style="color:#4ade80;font-weight:800;font-size:1.4rem;">28%</div><div style="color:rgba(255,255,255,.45);font-size:.7rem;">Contact Rate</div></div>
            <div style="background:rgba(245,158,11,.08);border:1px solid rgba(245,158,11,.2);border-radius:10px;padding:12px;text-align:center;"><div style="color:#fbbf24;font-weight:800;font-size:1.4rem;">94%</div><div style="color:rgba(255,255,255,.45);font-size:.7rem;">Agent Utilization</div></div>
          </div>
          <div style="background:rgba(255,255,255,.04);border-radius:12px;padding:16px;margin-bottom:12px;">
            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;"><span style="color:rgba(255,255,255,.6);font-size:.82rem;">Campaign Progress</span><span style="color:#5eead4;font-weight:600;font-size:.82rem;">4,210 / 15,000</span></div>
            <div style="height:6px;background:rgba(255,255,255,.08);border-radius:4px;"><div style="width:28%;height:100%;background:linear-gradient(90deg,#14b8a6,#06b6d4);border-radius:4px;"></div></div>
          </div>
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;">
            <div style="background:rgba(255,255,255,.03);border-radius:10px;padding:12px;"><div style="color:rgba(255,255,255,.5);font-size:.72rem;margin-bottom:4px;">Active Agents</div><div style="color:#fff;font-weight:700;font-size:1.1rem;">18 online</div></div>
            <div style="background:rgba(255,255,255,.03);border-radius:10px;padding:12px;"><div style="color:rgba(255,255,255,.5);font-size:.72rem;margin-bottom:4px;">Dial Mode</div><div style="color:#5eead4;font-weight:700;font-size:1.1rem;">Predictive</div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- DIALING MODES -->
<section class="section-alt" style="padding:100px 0;">
  <div class="container">
    <div class="row justify-content-center text-center mb-5"><div class="col-lg-7" data-aos="fade-up"><div class="section-badge"><i class="fas fa-sliders-h"></i> Dialing Modes</div><h2 class="section-title">Three Modes for <span class="accent">Every Campaign</span></h2><p class="section-sub mx-auto">Choose the dialing strategy that best fits your campaign type, agent count, and contact rate goals.</p></div></div>
    <div class="row g-4">
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
        <div class="mode-card">
          <div class="mode-icon">🤖</div>
          <h4>Predictive Dialing</h4>
          <p>AI-powered algorithm dials multiple numbers simultaneously per agent and connects only live answers. Maximises talk time by predicting call answer rates in real time. Best for large list campaigns with 10+ agents.</p>
          <span class="mode-tag" style="background:rgba(20,184,166,.15);color:#5eead4;border:1px solid rgba(20,184,166,.3);">High Volume</span>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="80">
        <div class="mode-card">
          <div class="mode-icon">👁️</div>
          <h4>Preview Dialing</h4>
          <p>Agents see the lead record before the call is placed. Ideal for high-value accounts, complex sales, or sensitive outreach where agents need context before speaking. The agent confirms, then the system dials.</p>
          <span class="mode-tag" style="background:rgba(139,92,246,.12);color:#c4b5fd;border:1px solid rgba(139,92,246,.3);">High Value</span>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="160">
        <div class="mode-card">
          <div class="mode-icon">⚡</div>
          <h4>Power Dialing</h4>
          <p>Dials one number per available agent at a fixed ratio. Simpler than predictive — no statistical modelling required. Perfect for smaller teams or campaigns requiring a consistent, measured outreach pace.</p>
          <span class="mode-tag" style="background:rgba(245,158,11,.1);color:#fbbf24;border:1px solid rgba(245,158,11,.25);">Balanced</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="features" class="section-dark" style="padding:100px 0;">
  <div class="container">
    <div class="row justify-content-center text-center mb-5"><div class="col-lg-7" data-aos="fade-up"><div class="section-badge"><i class="fas fa-th-large"></i> Features</div><h2 class="section-title">Everything Your <span class="accent">Outbound Team Needs</span></h2><p class="section-sub mx-auto">From campaign management to compliance — one platform handles it all.</p></div></div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div class="feat-card"><div class="feat-icon"><i class="fas fa-brain"></i></div><h5>AI-Powered Predictive Algorithm</h5><p>Our predictive engine learns your answer rates by time, day, and destination — dynamically adjusting the dial ratio to maximize agent talk time and minimize dropped calls.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="60"><div class="feat-card"><div class="feat-icon"><i class="fas fa-voicemail"></i></div><h5>AMD Detection</h5><p>Answering Machine Detection instantly identifies voicemail and live answer, routing only real human connections to agents — eliminating wasted time on answering machines.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120"><div class="feat-card"><div class="feat-icon"><i class="fas fa-plug"></i></div><h5>CRM Integration</h5><p>Bi-directional sync with Salesforce, HubSpot, Zoho, and 40+ platforms. Screen pop on connect, automatic disposition logging, and callback scheduling in your CRM.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="180"><div class="feat-card"><div class="feat-icon"><i class="fas fa-ban"></i></div><h5>DNC List Management</h5><p>Built-in Do-Not-Call list scrubbing with automatic compliance checking against national and custom DNC lists before every dial.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240"><div class="feat-card"><div class="feat-icon"><i class="fas fa-chart-area"></i></div><h5>Campaign Analytics</h5><p>Real-time dashboards tracking contact rate, conversion rate, talk time, wrap time, agent utilization, and campaign ROI. Drill down by agent, list, or time period.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300"><div class="feat-card"><div class="feat-icon"><i class="fas fa-list-ul"></i></div><h5>List Management</h5><p>Import lead lists via CSV or API, deduplicate automatically, set priority tiers, and configure retry logic for unanswered numbers — all configurable per campaign.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="360"><div class="feat-card"><div class="feat-icon"><i class="fas fa-calendar-alt"></i></div><h5>Callback Scheduling</h5><p>Agents can schedule callbacks directly from their interface. The dialer automatically queues the call at the agreed time — no manual reminders needed.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="420"><div class="feat-card"><div class="feat-icon"><i class="fas fa-record-vinyl"></i></div><h5>Call Recording</h5><p>All outbound calls recorded automatically with encrypted cloud storage, searchable transcripts, and disposition tagging for easy quality assurance review.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="480"><div class="feat-card"><div class="feat-icon"><i class="fas fa-clock"></i></div><h5>Time-Zone Compliance</h5><p>Automatic time-zone detection for each number ensures calls are only placed during permitted hours in each region — protecting you from compliance violations.</p></div></div>
    </div>
  </div>
</section>

<section class="section-alt" style="padding:80px 0;position:relative;overflow:hidden;">
  <div style="position:absolute;inset:-60px;background:radial-gradient(ellipse 90% 70% at 50% 50%,rgba(20,184,166,.12) 0%,transparent 65%);will-change:transform;" id="statsBg"></div>
  <div class="container position-relative" style="z-index:2;">
    <div class="row g-4 text-center">
      <div class="col-6 col-lg-3" data-aos="zoom-in"><div class="mini-stat"><div class="num" data-count="3">0</div><div>x</div><div class="lbl">Agent Productivity</div></div></div>
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="80"><div class="mini-stat"><div class="num" data-count="94">0</div><div>%</div><div class="lbl">Agent Utilization</div></div></div>
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="160"><div class="mini-stat"><div class="num" data-count="40">0</div><div>+</div><div class="lbl">CRM Integrations</div></div></div>
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="240"><div class="mini-stat"><div class="num" data-count="99">0</div><div>.9%</div><div class="lbl">Uptime</div></div></div>
    </div>
  </div>
</section>

<section class="section-dark" style="padding:100px 0;">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6" data-aos="fade-right">
        <div class="section-badge"><i class="fas fa-sitemap"></i> Getting Started</div>
        <h2 class="section-title">Launch Your First Campaign <span class="accent">Today</span></h2>
        <div class="divider"></div>
        <div class="how-step"><div class="how-num">1</div><div><h5>Configure Your Campaign</h5><p>Set your dialing mode, dial ratio, retry logic, and time-zone restrictions. Connect your DID numbers for outbound caller ID.</p></div></div>
        <div class="how-step"><div class="how-num">2</div><div><h5>Import Your Lead List</h5><p>Upload a CSV or sync leads from your CRM. Set priority tiers and configure DNC scrubbing rules before your first dial.</p></div></div>
        <div class="how-step"><div class="how-num">3</div><div><h5>Brief Your Agents</h5><p>Agents log in via browser — no software required. The interface is intuitive enough for first-time users to be productive within minutes.</p></div></div>
        <div class="how-step"><div class="how-num">4</div><div><h5>Launch & Optimize</h5><p>Start your campaign and monitor performance in real time. Adjust dial ratios, pause campaigns, or reallocate agents on the fly.</p></div></div>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
        <div style="background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.08);border-radius:22px;padding:40px;">
          <h5 style="color:#fff;font-weight:700;margin-bottom:24px;"><i class="fas fa-check-circle" style="color:#5eead4;margin-right:10px;"></i>What's Included</h5>
          <ul class="check-list">
            <li><i class="fas fa-check-circle"></i> Predictive, preview, and power modes</li>
            <li><i class="fas fa-check-circle"></i> AI-powered answering machine detection</li>
            <li><i class="fas fa-check-circle"></i> CRM integration (40+ platforms)</li>
            <li><i class="fas fa-check-circle"></i> DNC list management & compliance</li>
            <li><i class="fas fa-check-circle"></i> Lead list import (CSV or API)</li>
            <li><i class="fas fa-check-circle"></i> Callback scheduling & retry logic</li>
            <li><i class="fas fa-check-circle"></i> Campaign analytics & ROI dashboard</li>
            <li><i class="fas fa-check-circle"></i> Time-zone compliance automation</li>
            <li><i class="fas fa-check-circle"></i> Call recording & transcription</li>
            <li><i class="fas fa-check-circle"></i> 24/7 support</li>
          </ul>
          <div style="margin-top:28px;padding:20px;background:rgba(20,184,166,.08);border:1px solid rgba(20,184,166,.2);border-radius:14px;">
            <div style="color:#fff;font-weight:600;margin-bottom:6px;">🔗 Better Together</div>
            <div style="color:rgba(255,255,255,.55);font-size:.88rem;line-height:1.6;">Pair the Auto-Dialer with our <a href="call-center.php" style="color:#5eead4;">Call Center Suite</a> for a complete inbound + outbound contact center on one unified platform.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-alt" style="padding:100px 0;">
  <div class="container">
    <div class="row justify-content-center text-center mb-5"><div class="col-lg-7" data-aos="fade-up"><div class="section-badge"><i class="fas fa-users"></i> Use Cases</div><h2 class="section-title">Who Benefits from <span class="accent">Auto-Dialing?</span></h2></div></div>
    <div class="row g-3">
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div class="use-card"><div class="use-icon"><i class="fas fa-chart-line"></i></div><div><h6>Sales & Telemarketing</h6><p>Increase agent talk time from 15 to 50+ minutes per hour. Run high-volume outbound campaigns without increasing headcount.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="60"><div class="use-card"><div class="use-icon"><i class="fas fa-file-invoice-dollar"></i></div><div><h6>Debt Collection</h6><p>Increase right-party contact rates with predictive dialing and time-zone compliance. Schedule callbacks automatically on first contact.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120"><div class="use-card"><div class="use-icon"><i class="fas fa-poll"></i></div><div><h6>Surveys & Research</h6><p>Power high-volume survey campaigns with predictive dialing and automatic recording. Disposition codes track responses in real time.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="180"><div class="use-card"><div class="use-icon"><i class="fas fa-user-plus"></i></div><div><h6>Lead Generation</h6><p>Maximize list penetration with intelligent retry logic and priority queuing for warm leads. Sync conversions directly to your CRM.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240"><div class="use-card"><div class="use-icon"><i class="fas fa-calendar-check"></i></div><div><h6>Appointment Setting</h6><p>Outbound appointment campaigns with real-time calendar integration. Agents book slots directly in the interface on live calls.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300"><div class="use-card"><div class="use-icon"><i class="fas fa-hospital"></i></div><div><h6>Healthcare Outreach</h6><p>Patient recall campaigns, appointment reminders, and wellness check-ins with full compliance for healthcare communication regulations.</p></div></div></div>
    </div>
  </div>
</section>

<section class="section-dark" style="padding:80px 0;">
  <div class="container"><div class="row justify-content-center"><div class="col-lg-8" data-aos="fade-up">
    <div class="testi">
      <div style="color:#f59e0b;font-size:.9rem;margin-bottom:14px;letter-spacing:2px;">★★★★★</div>
      <p style="color:rgba(255,255,255,.75);font-size:1.05rem;line-height:1.8;margin-bottom:24px;">"Before First Step Technology's auto-dialer, our 20-agent sales team averaged 45 contacts per agent per day dialing manually. After switching to predictive mode, we're hitting 180+ contacts per agent per day. Our conversion volume tripled within the first month without hiring a single new agent."</p>
      <div style="display:flex;align-items:center;gap:14px;"><div style="width:48px;height:48px;border-radius:50%;background:linear-gradient(135deg,#14b8a6,#06b6d4);display:flex;align-items:center;justify-content:center;font-weight:700;color:#fff;">TN</div><div><div style="color:#fff;font-weight:600;">Tom Nguyen</div><div style="color:rgba(255,255,255,.45);font-size:.82rem;">VP Sales, FinServ Direct</div></div></div>
    </div>
  </div></div></div>
</section>

<section class="svc-cta">
  <div class="svc-cta-bg" id="ctaBg"></div>
  <div class="container"><div class="row justify-content-center text-center" style="position:relative;z-index:2;"><div class="col-lg-7" data-aos="zoom-in">
    <div class="section-badge mx-auto mb-3"><i class="fas fa-robot"></i> Get Started</div>
    <h2 style="font-family:'Poppins',sans-serif;font-size:clamp(2rem,4vw,3rem);font-weight:800;color:#fff;margin-bottom:18px;">Ready to <span style="background:linear-gradient(90deg,#14b8a6,#06b6d4);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">3x Your Output?</span></h2>
    <p style="color:rgba(255,255,255,.6);font-size:1.05rem;max-width:500px;margin:0 auto 32px;line-height:1.75;">See exactly how our auto-dialer will work with your lists, your CRM, and your team. Book a live demo today.</p>
    <div class="d-flex gap-3 justify-content-center flex-wrap"><a href="contact.php" class="btn-primary-grad" style="background:linear-gradient(135deg,#14b8a6,#06b6d4);"><i class="fas fa-paper-plane"></i> Book a Demo</a><a href="call-center.php" class="btn-outline-light-custom"><i class="fas fa-headset"></i> Add Call Center</a></div>
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


