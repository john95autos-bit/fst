<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" href="logo.png" />
  <meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Call Center Suite | First Step Technology</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="shared.css" />
  <style>
    :root{--svc-color:#ec4899;--svc-color2:#8b5cf6;}
    .svc-hero{min-height:100vh;display:flex;align-items:center;position:relative;overflow:hidden;padding-top:100px;}
    .svc-hero-bg{position:absolute;inset:-60px;background:radial-gradient(ellipse 70% 60% at 70% 40%,rgba(236,72,153,.22) 0%,transparent 60%),radial-gradient(ellipse 50% 50% at 20% 70%,rgba(139,92,246,.15) 0%,transparent 55%),linear-gradient(180deg,#080f1e 0%,#18091a 50%,#080f1e 100%);will-change:transform;}
    .svc-hero-grid{position:absolute;inset:0;background-image:linear-gradient(rgba(236,72,153,.06) 1px,transparent 1px),linear-gradient(90deg,rgba(236,72,153,.06) 1px,transparent 1px);background-size:55px 55px;mask-image:radial-gradient(ellipse at center,black 30%,transparent 75%);animation:gd 20s linear infinite;}
    @keyframes gd{from{transform:translateY(0)}to{transform:translateY(55px)}}
    .hero-content{position:relative;z-index:2;}
    .svc-badge{display:inline-flex;align-items:center;gap:8px;background:rgba(236,72,153,.12);border:1px solid rgba(236,72,153,.35);border-radius:50px;padding:6px 18px;font-size:.82rem;color:#f9a8d4;font-weight:600;letter-spacing:.5px;margin-bottom:22px;}
    .section-alt{background:#0b1120;}.section-dark{background:#080f1e;}
    .feat-card{background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.08);border-radius:18px;padding:30px;height:100%;transition:all .35s;}
    .feat-card:hover{border-color:rgba(236,72,153,.35);transform:translateY(-6px);box-shadow:0 20px 50px rgba(0,0,0,.3);}
    .feat-icon{width:56px;height:56px;border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:1.4rem;margin-bottom:18px;background:linear-gradient(135deg,rgba(236,72,153,.18),rgba(139,92,246,.12));color:#f9a8d4;}
    .feat-card h5{color:#fff;font-weight:700;font-size:1rem;margin-bottom:8px;}
    .feat-card p{color:rgba(255,255,255,.5);font-size:.88rem;line-height:1.7;margin:0;}
    .how-step{display:flex;gap:18px;margin-bottom:36px;}
    .how-num{width:48px;height:48px;flex-shrink:0;border-radius:50%;background:linear-gradient(135deg,var(--svc-color),var(--svc-color2));display:flex;align-items:center;justify-content:center;font-weight:800;color:#fff;font-size:1rem;box-shadow:0 4px 20px rgba(236,72,153,.3);}
    .how-step h5{color:#fff;font-weight:700;margin-bottom:6px;}
    .how-step p{color:rgba(255,255,255,.5);font-size:.9rem;line-height:1.65;margin:0;}
    .mini-stat{text-align:center;padding:32px 20px;background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.08);border-radius:16px;}
    .mini-stat .num{font-family:'Poppins',sans-serif;font-size:2.4rem;font-weight:800;background:linear-gradient(90deg,var(--svc-color),var(--svc-color2));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;}
    .mini-stat .lbl{color:rgba(255,255,255,.5);font-size:.88rem;margin-top:4px;}
    .use-card{background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.07);border-radius:14px;padding:22px 20px;display:flex;gap:14px;align-items:flex-start;transition:all .3s;}
    .use-card:hover{border-color:rgba(236,72,153,.3);background:rgba(236,72,153,.04);}
    .use-icon{width:40px;height:40px;flex-shrink:0;border-radius:10px;background:rgba(236,72,153,.12);display:flex;align-items:center;justify-content:center;color:#f9a8d4;}
    .use-card h6{color:#fff;font-weight:600;margin-bottom:4px;}
    .use-card p{color:rgba(255,255,255,.45);font-size:.85rem;margin:0;line-height:1.6;}
    .testi{background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.09);border-radius:20px;padding:36px;position:relative;}
    .testi::before{content:'\201C';position:absolute;top:16px;right:24px;font-size:5rem;color:rgba(236,72,153,.12);font-family:Georgia,serif;line-height:1;}
    .svc-cta{padding:100px 0;position:relative;overflow:hidden;}
    .svc-cta-bg{position:absolute;inset:-60px;background:radial-gradient(ellipse 80% 60% at 40% 50%,rgba(236,72,153,.25) 0%,transparent 60%),radial-gradient(ellipse 60% 50% at 80% 30%,rgba(139,92,246,.18) 0%,transparent 55%),#050d1a;will-change:transform;}
    .check-list{list-style:none;padding:0;}
    .check-list li{display:flex;align-items:center;gap:10px;color:rgba(255,255,255,.65);font-size:.92rem;margin-bottom:10px;}
    .check-list li i{color:#22c55e;font-size:.8rem;}
    /* Dashboard mockup */
    .agent-row{display:flex;align-items:center;gap:12px;padding:12px 14px;background:rgba(255,255,255,.03);border-radius:10px;margin-bottom:8px;}
    .agent-av{width:36px;height:36px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.82rem;color:#fff;flex-shrink:0;}
    .agent-status{width:8px;height:8px;border-radius:50%;flex-shrink:0;}
    .status-available{background:#22c55e;}
    .status-busy{background:#f59e0b;}
    .status-break{background:#6b7280;}
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
        <nav aria-label="breadcrumb" style="margin-bottom:18px;"><div style="display:flex;align-items:center;gap:8px;font-size:.85rem;color:rgba(255,255,255,.4);"><a href="index.php" style="color:#f9a8d4;">Home</a><span>/</span><a href="services.php" style="color:#f9a8d4;">Services</a><span>/</span><span>Call Center</span></div></nav>
        <div class="svc-badge"><i class="fas fa-headset fa-xs"></i> Call Center Suite</div>
        <h1 style="font-family:'Poppins',sans-serif;font-size:clamp(2.4rem,5vw,4rem);font-weight:800;color:#fff;line-height:1.12;margin-bottom:22px;">The Complete<br><span style="background:linear-gradient(90deg,#ec4899,#8b5cf6);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Call Center Platform</span></h1>
        <p style="font-size:1.05rem;color:rgba(255,255,255,.62);line-height:1.8;margin-bottom:32px;">A comprehensive inbound and outbound call center solution with unlimited agents — in-office or remote. Real-time monitoring, ACD queuing, call recording, supervisor tools, and performance dashboards all in one powerful platform.</p>
        <div class="d-flex flex-wrap gap-3 mb-4">
          <a href="contact.php" class="btn-primary-grad" style="background:linear-gradient(135deg,#ec4899,#8b5cf6);box-shadow:0 8px 28px rgba(236,72,153,.3);"><i class="fas fa-paper-plane"></i> Book a Demo</a>
          <a href="#features" class="btn-outline-light-custom"><i class="fas fa-th-large"></i> See Features</a>
        </div>
        <div>
          <span style="display:inline-flex;align-items:center;gap:6px;padding:5px 14px;border-radius:50px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);font-size:.8rem;color:rgba(255,255,255,.6);margin:4px;"><i class="fas fa-check" style="color:#22c55e;"></i> Unlimited Agents</span>
          <span style="display:inline-flex;align-items:center;gap:6px;padding:5px 14px;border-radius:50px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);font-size:.8rem;color:rgba(255,255,255,.6);margin:4px;"><i class="fas fa-check" style="color:#22c55e;"></i> ACD Queues</span>
          <span style="display:inline-flex;align-items:center;gap:6px;padding:5px 14px;border-radius:50px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);font-size:.8rem;color:rgba(255,255,255,.6);margin:4px;"><i class="fas fa-check" style="color:#22c55e;"></i> Supervisor Tools</span>
          <span style="display:inline-flex;align-items:center;gap:6px;padding:5px 14px;border-radius:50px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);font-size:.8rem;color:rgba(255,255,255,.6);margin:4px;"><i class="fas fa-check" style="color:#22c55e;"></i> Remote Agents</span>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
        <div style="background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.1);border-radius:24px;padding:28px;">
          <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;">
            <div style="color:#fff;font-weight:700;font-size:.95rem;"><i class="fas fa-tachometer-alt" style="color:#f9a8d4;margin-right:8px;"></i>Live Supervisor View</div>
            <span style="background:rgba(34,197,94,.1);border:1px solid rgba(34,197,94,.25);border-radius:20px;padding:3px 12px;color:#22c55e;font-size:.75rem;display:flex;align-items:center;gap:5px;"><span style="width:6px;height:6px;background:#22c55e;border-radius:50%;animation:pulse 2s infinite;"></span>Live</span>
          </div>
          <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:10px;margin-bottom:20px;">
            <div style="background:rgba(236,72,153,.1);border:1px solid rgba(236,72,153,.2);border-radius:10px;padding:12px;text-align:center;"><div style="color:#f9a8d4;font-weight:800;font-size:1.3rem;">24</div><div style="color:rgba(255,255,255,.45);font-size:.7rem;">Agents Online</div></div>
            <div style="background:rgba(34,197,94,.08);border:1px solid rgba(34,197,94,.2);border-radius:10px;padding:12px;text-align:center;"><div style="color:#4ade80;font-weight:800;font-size:1.3rem;">187</div><div style="color:rgba(255,255,255,.45);font-size:.7rem;">Calls Today</div></div>
            <div style="background:rgba(245,158,11,.08);border:1px solid rgba(245,158,11,.2);border-radius:10px;padding:12px;text-align:center;"><div style="color:#fbbf24;font-weight:800;font-size:1.3rem;">12s</div><div style="color:rgba(255,255,255,.45);font-size:.7rem;">Avg Wait</div></div>
          </div>
          <div style="color:rgba(255,255,255,.5);font-size:.75rem;text-transform:uppercase;letter-spacing:1px;margin-bottom:10px;">Agent Status</div>
          <div class="agent-row"><div class="agent-av" style="background:linear-gradient(135deg,#ec4899,#8b5cf6);">AK</div><div style="flex:1;"><div style="color:#fff;font-size:.85rem;font-weight:500;">Alex Kim</div><div style="color:rgba(255,255,255,.4);font-size:.72rem;">On call — 4:32</div></div><div class="agent-status status-busy"></div><div style="color:#f59e0b;font-size:.75rem;">BUSY</div></div>
          <div class="agent-row"><div class="agent-av" style="background:linear-gradient(135deg,#22c55e,#06b6d4);">SR</div><div style="flex:1;"><div style="color:#fff;font-size:.85rem;font-weight:500;">Sara Reyes</div><div style="color:rgba(255,255,255,.4);font-size:.72rem;">Ready — 1:15</div></div><div class="agent-status status-available"></div><div style="color:#22c55e;font-size:.75rem;">READY</div></div>
          <div class="agent-row"><div class="agent-av" style="background:linear-gradient(135deg,#8b5cf6,#06b6d4);">MT</div><div style="flex:1;"><div style="color:#fff;font-size:.85rem;font-weight:500;">Mark Tang</div><div style="color:rgba(255,255,255,.4);font-size:.72rem;">After-call work</div></div><div class="agent-status status-break"></div><div style="color:#9ca3af;font-size:.75rem;">ACW</div></div>
          <div style="margin-top:14px;background:rgba(236,72,153,.06);border:1px solid rgba(236,72,153,.15);border-radius:10px;padding:12px;display:flex;justify-content:space-between;">
            <span style="color:rgba(255,255,255,.5);font-size:.8rem;">Queue: Support</span>
            <span style="color:#f9a8d4;font-weight:600;font-size:.8rem;">3 callers waiting</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="features" class="section-alt" style="padding:100px 0;">
  <div class="container">
    <div class="row justify-content-center text-center mb-5"><div class="col-lg-7" data-aos="fade-up"><div class="section-badge"><i class="fas fa-th-large"></i> Features</div><h2 class="section-title">Everything to Run a <span class="accent">World-Class Contact Center</span></h2><p class="section-sub mx-auto">Inbound, outbound, supervisor tools, and analytics — one platform, unlimited scale.</p></div></div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div class="feat-card"><div class="feat-icon"><i class="fas fa-users"></i></div><h5>Unlimited Agents</h5><p>No per-seat licensing limits. Add agents without cost surprises. Agents can work from office, home, or any location worldwide via browser.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="60"><div class="feat-card"><div class="feat-icon"><i class="fas fa-list-ol"></i></div><h5>ACD & Skill-Based Routing</h5><p>Automatic Call Distribution routes each call to the best agent based on skill set, language, priority, availability, and queue thresholds.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120"><div class="feat-card"><div class="feat-icon"><i class="fas fa-eye"></i></div><h5>Supervisor Dashboard</h5><p>Live monitoring of all queues and agents. Whisper coaching, barge-in, call takeover, and silent monitoring — all from the supervisor panel.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="180"><div class="feat-card"><div class="feat-icon"><i class="fas fa-sitemap"></i></div><h5>IVR & Virtual Callback</h5><p>Multi-level IVR reduces unnecessary queuing. Virtual callback lets callers keep their place in queue without waiting on hold.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240"><div class="feat-card"><div class="feat-icon"><i class="fas fa-record-vinyl"></i></div><h5>Call Recording</h5><p>Automatic or on-demand call recording with encrypted storage, searchable transcripts, and easy playback for QA and compliance.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300"><div class="feat-card"><div class="feat-icon"><i class="fas fa-chart-bar"></i></div><h5>KPI & Performance Reports</h5><p>Track ASA, FCR, AHT, CSAT, NPS, abandonment rate, and 40+ other metrics in real-time. Schedule automated reports to stakeholders.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="360"><div class="feat-card"><div class="feat-icon"><i class="fas fa-plug"></i></div><h5>CRM Integration</h5><p>Screen pop on inbound calls, automatic call logging, and click-to-dial from Salesforce, HubSpot, Zoho, and 50+ CRM platforms.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="420"><div class="feat-card"><div class="feat-icon"><i class="fas fa-comments"></i></div><h5>Omnichannel Support</h5><p>Handle voice, SMS, webchat, and email from a single agent desktop. Unified queue management across all communication channels.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="480"><div class="feat-card"><div class="feat-icon"><i class="fas fa-laptop-house"></i></div><h5>Remote Agent Ready</h5><p>100% browser-based agent interface — no software installation required. Works on any device with a stable internet connection.</p></div></div>
    </div>
  </div>
</section>

<section class="section-dark" style="padding:80px 0;position:relative;overflow:hidden;">
  <div style="position:absolute;inset:-60px;background:radial-gradient(ellipse 90% 70% at 50% 50%,rgba(236,72,153,.12) 0%,transparent 65%);will-change:transform;" id="statsBg"></div>
  <div class="container position-relative" style="z-index:2;">
    <div class="row g-4 text-center">
      <div class="col-6 col-lg-3" data-aos="zoom-in"><div class="mini-stat"><div class="num">∞</div><div class="lbl">Agent Seats</div></div></div>
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="80"><div class="mini-stat"><div class="num" data-count="40">0</div><div>+</div><div class="lbl">KPI Metrics</div></div></div>
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="160"><div class="mini-stat"><div class="num" data-count="50">0</div><div>+</div><div class="lbl">CRM Integrations</div></div></div>
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="240"><div class="mini-stat"><div class="num" data-count="99">0</div><div>.9%</div><div class="lbl">Platform Uptime</div></div></div>
    </div>
  </div>
</section>

<section class="section-alt" style="padding:100px 0;">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6" data-aos="fade-right">
        <div class="section-badge"><i class="fas fa-sitemap"></i> Deployment</div>
        <h2 class="section-title">Launch Your Contact Center <span class="accent">in Days</span></h2>
        <div class="divider"></div>
        <div class="how-step"><div class="how-num">1</div><div><h5>Define Your Setup</h5><p>Share your agent count, call volumes, required queues, and CRM platform. We design your call center configuration based on your needs.</p></div></div>
        <div class="how-step"><div class="how-num">2</div><div><h5>Build Your IVR & Queues</h5><p>We configure your IVR menus, ACD routing rules, and skill groups. Connect your DID numbers and existing SIP infrastructure in hours.</p></div></div>
        <div class="how-step"><div class="how-num">3</div><div><h5>Agent & Supervisor Training</h5><p>Our team delivers 2-hour training for agents and supervisors. The browser-based interface is intuitive enough that most agents are proficient same-day.</p></div></div>
        <div class="how-step"><div class="how-num">4</div><div><h5>Go Live with Full Support</h5><p>Launch with our team on standby. Real-time monitoring ensures a smooth cutover, and 24/7 NOC support is always one call away.</p></div></div>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
        <div style="background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.08);border-radius:22px;padding:40px;">
          <h5 style="color:#fff;font-weight:700;margin-bottom:24px;"><i class="fas fa-check-circle" style="color:#f9a8d4;margin-right:10px;"></i>What's Included</h5>
          <ul class="check-list">
            <li><i class="fas fa-check-circle"></i> Unlimited agent seats</li>
            <li><i class="fas fa-check-circle"></i> ACD with skill-based routing</li>
            <li><i class="fas fa-check-circle"></i> Multi-level IVR & virtual callback</li>
            <li><i class="fas fa-check-circle"></i> Supervisor whisper, barge, monitor</li>
            <li><i class="fas fa-check-circle"></i> Call recording & transcription</li>
            <li><i class="fas fa-check-circle"></i> 40+ real-time KPI dashboards</li>
            <li><i class="fas fa-check-circle"></i> CRM integration (50+ platforms)</li>
            <li><i class="fas fa-check-circle"></i> Omnichannel (voice, SMS, chat)</li>
            <li><i class="fas fa-check-circle"></i> Remote agent browser client</li>
            <li><i class="fas fa-check-circle"></i> 24/7 NOC support</li>
          </ul>
          <div style="margin-top:28px;padding:20px;background:rgba(236,72,153,.08);border:1px solid rgba(236,72,153,.2);border-radius:14px;">
            <div style="color:#fff;font-weight:600;margin-bottom:6px;">💡 Pair With Auto-Dialer</div>
            <div style="color:rgba(255,255,255,.55);font-size:.88rem;line-height:1.6;">Combine the Call Center Suite with our <a href="auto-dialer.php" style="color:#f9a8d4;">Auto-Dialer</a> for complete inbound + outbound capability in one unified platform.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-dark" style="padding:100px 0;">
  <div class="container">
    <div class="row justify-content-center text-center mb-5"><div class="col-lg-7" data-aos="fade-up"><div class="section-badge"><i class="fas fa-users"></i> Use Cases</div><h2 class="section-title">Built for <span class="accent">Every Type</span> of Contact Center</h2></div></div>
    <div class="row g-3">
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div class="use-card"><div class="use-icon"><i class="fas fa-headset"></i></div><div><h6>Customer Support Centers</h6><p>Handle high inbound call volumes with ACD queuing, priority routing, and supervisor monitoring to maintain SLA targets.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="60"><div class="use-card"><div class="use-icon"><i class="fas fa-briefcase"></i></div><div><h6>BPO & Outsourcing</h6><p>Run multiple client campaigns on one platform. Separate agent pools, queues, and reporting by client with full isolation.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120"><div class="use-card"><div class="use-icon"><i class="fas fa-laptop-code"></i></div><div><h6>Technical Support</h6><p>Route technical calls based on product expertise, language, and tier level. Escalation queues ensure complex issues reach the right specialist.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="180"><div class="use-card"><div class="use-icon"><i class="fas fa-heartbeat"></i></div><div><h6>Healthcare Call Centers</h6><p>Appointment scheduling, nurse triage lines, and patient callback management with full recording for compliance and quality assurance.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240"><div class="use-card"><div class="use-icon"><i class="fas fa-university"></i></div><div><h6>Financial Services</h6><p>Secure, recorded interactions for banking, insurance, and fintech customer service with compliance-ready recording and reporting.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300"><div class="use-card"><div class="use-icon"><i class="fas fa-shopping-bag"></i></div><div><h6>Retail & E-Commerce</h6><p>Order support, returns, and customer care lines with CRM screen pop showing order history the moment a customer calls.</p></div></div></div>
    </div>
  </div>
</section>

<section class="section-alt" style="padding:80px 0;">
  <div class="container"><div class="row justify-content-center"><div class="col-lg-8" data-aos="fade-up">
    <div class="testi">
      <div style="color:#f59e0b;font-size:.9rem;margin-bottom:14px;letter-spacing:2px;">★★★★★</div>
      <p style="color:rgba(255,255,255,.75);font-size:1.05rem;line-height:1.8;margin-bottom:24px;">"We run a 120-agent BPO operation across 3 countries. First Step Technology's call center platform handles all our clients on one system with complete separation. The supervisor monitoring tools have dramatically improved our QA process, and our clients love the detailed reporting we can now provide."</p>
      <div style="display:flex;align-items:center;gap:14px;"><div style="width:48px;height:48px;border-radius:50%;background:linear-gradient(135deg,#ec4899,#8b5cf6);display:flex;align-items:center;justify-content:center;font-weight:700;color:#fff;">JA</div><div><div style="color:#fff;font-weight:600;">James Adeyemi</div><div style="color:rgba(255,255,255,.45);font-size:.82rem;">COO, ProConnect BPO</div></div></div>
    </div>
  </div></div></div>
</section>

<section class="svc-cta">
  <div class="svc-cta-bg" id="ctaBg"></div>
  <div class="container"><div class="row justify-content-center text-center" style="position:relative;z-index:2;"><div class="col-lg-7" data-aos="zoom-in">
    <div class="section-badge mx-auto mb-3"><i class="fas fa-headset"></i> Start Today</div>
    <h2 style="font-family:'Poppins',sans-serif;font-size:clamp(2rem,4vw,3rem);font-weight:800;color:#fff;margin-bottom:18px;">Transform Your <span style="background:linear-gradient(90deg,#ec4899,#8b5cf6);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Contact Center</span></h2>
    <p style="color:rgba(255,255,255,.6);font-size:1.05rem;max-width:500px;margin:0 auto 32px;line-height:1.75;">Unlimited agents, enterprise features, and 24/7 support — without enterprise pricing.</p>
    <div class="d-flex gap-3 justify-content-center flex-wrap"><a href="contact.php" class="btn-primary-grad" style="background:linear-gradient(135deg,#ec4899,#8b5cf6);"><i class="fas fa-paper-plane"></i> Book a Demo</a><a href="auto-dialer.php" class="btn-outline-light-custom"><i class="fas fa-robot"></i> Add Auto-Dialer</a></div>
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


