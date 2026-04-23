<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" href="logo.png" />
  <meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hosted IP-PBX | First Step Technology</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="shared.css" />
  <style>
    :root{--svc-color:#22c55e;--svc-color2:#06b6d4;}
    .svc-hero{min-height:100vh;display:flex;align-items:center;position:relative;overflow:hidden;padding-top:100px;}
    .svc-hero-bg{position:absolute;inset:-60px;background:radial-gradient(ellipse 70% 60% at 70% 40%,rgba(34,197,94,.22) 0%,transparent 60%),radial-gradient(ellipse 50% 50% at 20% 70%,rgba(6,182,212,.15) 0%,transparent 55%),linear-gradient(180deg,#080f1e 0%,#071e14 50%,#080f1e 100%);will-change:transform;}
    .svc-hero-grid{position:absolute;inset:0;background-image:linear-gradient(rgba(34,197,94,.06) 1px,transparent 1px),linear-gradient(90deg,rgba(34,197,94,.06) 1px,transparent 1px);background-size:55px 55px;mask-image:radial-gradient(ellipse at center,black 30%,transparent 75%);animation:gd 20s linear infinite;}
    @keyframes gd{from{transform:translateY(0)}to{transform:translateY(55px)}}
    .hero-content{position:relative;z-index:2;}
    .svc-badge{display:inline-flex;align-items:center;gap:8px;background:rgba(34,197,94,.12);border:1px solid rgba(34,197,94,.35);border-radius:50px;padding:6px 18px;font-size:.82rem;color:#4ade80;font-weight:600;letter-spacing:.5px;margin-bottom:22px;}
    .section-alt{background:#0b1120;}.section-dark{background:#080f1e;}
    .feat-card{background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.08);border-radius:18px;padding:30px;height:100%;transition:all .35s;}
    .feat-card:hover{border-color:rgba(34,197,94,.35);transform:translateY(-6px);box-shadow:0 20px 50px rgba(0,0,0,.3);}
    .feat-icon{width:56px;height:56px;border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:1.4rem;margin-bottom:18px;background:linear-gradient(135deg,rgba(34,197,94,.18),rgba(6,182,212,.1));color:#4ade80;}
    .feat-card h5{color:#fff;font-weight:700;font-size:1rem;margin-bottom:8px;}
    .feat-card p{color:rgba(255,255,255,.5);font-size:.88rem;line-height:1.7;margin:0;}
    .how-step{display:flex;gap:18px;margin-bottom:36px;}
    .how-num{width:48px;height:48px;flex-shrink:0;border-radius:50%;background:linear-gradient(135deg,var(--svc-color),var(--svc-color2));display:flex;align-items:center;justify-content:center;font-weight:800;color:#fff;font-size:1rem;box-shadow:0 4px 20px rgba(34,197,94,.3);}
    .how-step h5{color:#fff;font-weight:700;margin-bottom:6px;}
    .how-step p{color:rgba(255,255,255,.5);font-size:.9rem;line-height:1.65;margin:0;}
    .mini-stat{text-align:center;padding:32px 20px;background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.08);border-radius:16px;}
    .mini-stat .num{font-family:'Poppins',sans-serif;font-size:2.4rem;font-weight:800;background:linear-gradient(90deg,var(--svc-color),var(--svc-color2));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;}
    .mini-stat .lbl{color:rgba(255,255,255,.5);font-size:.88rem;margin-top:4px;}
    .use-card{background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.07);border-radius:14px;padding:22px 20px;display:flex;gap:14px;align-items:flex-start;transition:all .3s;}
    .use-card:hover{border-color:rgba(34,197,94,.3);background:rgba(34,197,94,.04);}
    .use-icon{width:40px;height:40px;flex-shrink:0;border-radius:10px;background:rgba(34,197,94,.12);display:flex;align-items:center;justify-content:center;color:#4ade80;}
    .use-card h6{color:#fff;font-weight:600;margin-bottom:4px;}
    .use-card p{color:rgba(255,255,255,.45);font-size:.85rem;margin:0;line-height:1.6;}
    .testi{background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.09);border-radius:20px;padding:36px;position:relative;}
    .testi::before{content:'\201C';position:absolute;top:16px;right:24px;font-size:5rem;color:rgba(34,197,94,.12);font-family:Georgia,serif;line-height:1;}
    .svc-cta{padding:100px 0;position:relative;overflow:hidden;}
    .svc-cta-bg{position:absolute;inset:-60px;background:radial-gradient(ellipse 80% 60% at 40% 50%,rgba(34,197,94,.22) 0%,transparent 60%),radial-gradient(ellipse 60% 50% at 80% 30%,rgba(6,182,212,.18) 0%,transparent 55%),#050d1a;will-change:transform;}
    .check-list{list-style:none;padding:0;}
    .check-list li{display:flex;align-items:center;gap:10px;color:rgba(255,255,255,.65);font-size:.92rem;margin-bottom:10px;}
    .check-list li i{color:#22c55e;font-size:.8rem;}
    /* PBX diagram */
    .pbx-diagram{background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.08);border-radius:20px;padding:32px;}
    .pbx-center{width:80px;height:80px;background:linear-gradient(135deg,#22c55e,#06b6d4);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1.8rem;color:#fff;margin:0 auto 20px;box-shadow:0 0 40px rgba(34,197,94,.3);animation:pulse-ring 2.5s ease-in-out infinite;}
    @keyframes pulse-ring{0%,100%{box-shadow:0 0 0 0 rgba(34,197,94,.3);}50%{box-shadow:0 0 0 20px rgba(34,197,94,0);}}
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
        <nav aria-label="breadcrumb" style="margin-bottom:18px;"><div style="display:flex;align-items:center;gap:8px;font-size:.85rem;color:rgba(255,255,255,.4);"><a href="index.php" style="color:#4ade80;">Home</a><span>/</span><a href="services.php" style="color:#4ade80;">Services</a><span>/</span><span>Hosted IP-PBX</span></div></nav>
        <div class="svc-badge"><i class="fas fa-building fa-xs"></i> Hosted IP-PBX</div>
        <h1 style="font-family:'Poppins',sans-serif;font-size:clamp(2.4rem,5vw,4rem);font-weight:800;color:#fff;line-height:1.12;margin-bottom:22px;">Your Business Phone System,<br><span style="background:linear-gradient(90deg,#22c55e,#06b6d4);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">In the Cloud</span></h1>
        <p style="font-size:1.05rem;color:rgba(255,255,255,.62);line-height:1.8;margin-bottom:32px;">A full-featured cloud-based PBX for businesses of any size. Manage extensions, IVR menus, call routing, voicemail, and conferencing from one intuitive dashboard — with zero on-premises hardware required.</p>
        <div class="d-flex flex-wrap gap-3 mb-4">
          <a href="contact.php" class="btn-primary-grad" style="background:linear-gradient(135deg,#22c55e,#06b6d4);box-shadow:0 8px 28px rgba(34,197,94,.3);"><i class="fas fa-paper-plane"></i> Request Demo</a>
          <a href="#features" class="btn-outline-light-custom"><i class="fas fa-th-large"></i> See Features</a>
        </div>
        <div>
          <span style="display:inline-flex;align-items:center;gap:6px;padding:5px 14px;border-radius:50px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);font-size:.8rem;color:rgba(255,255,255,.6);margin:4px;"><i class="fas fa-check" style="color:#22c55e;"></i> No Hardware Needed</span>
          <span style="display:inline-flex;align-items:center;gap:6px;padding:5px 14px;border-radius:50px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);font-size:.8rem;color:rgba(255,255,255,.6);margin:4px;"><i class="fas fa-check" style="color:#22c55e;"></i> Unlimited Extensions</span>
          <span style="display:inline-flex;align-items:center;gap:6px;padding:5px 14px;border-radius:50px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);font-size:.8rem;color:rgba(255,255,255,.6);margin:4px;"><i class="fas fa-check" style="color:#22c55e;"></i> CRM Integration</span>
          <span style="display:inline-flex;align-items:center;gap:6px;padding:5px 14px;border-radius:50px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);font-size:.8rem;color:rgba(255,255,255,.6);margin:4px;"><i class="fas fa-check" style="color:#22c55e;"></i> Mobile Softphone</span>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
        <div class="pbx-diagram">
          <div class="pbx-center"><i class="fas fa-building"></i></div>
          <p style="text-align:center;color:rgba(255,255,255,.5);font-size:.82rem;margin-bottom:24px;">Cloud PBX — Central Hub</p>
          <div class="row g-3">
            <div class="col-6"><div style="background:rgba(34,197,94,.08);border:1px solid rgba(34,197,94,.2);border-radius:12px;padding:14px;display:flex;align-items:center;gap:10px;"><i class="fas fa-desktop" style="color:#4ade80;font-size:1.1rem;"></i><div><div style="color:#fff;font-size:.82rem;font-weight:600;">Desktop IP Phones</div><div style="color:rgba(255,255,255,.4);font-size:.72rem;">SIP compatible</div></div></div></div>
            <div class="col-6"><div style="background:rgba(6,182,212,.08);border:1px solid rgba(6,182,212,.2);border-radius:12px;padding:14px;display:flex;align-items:center;gap:10px;"><i class="fas fa-mobile-alt" style="color:#67e8f9;font-size:1.1rem;"></i><div><div style="color:#fff;font-size:.82rem;font-weight:600;">Mobile Softphone</div><div style="color:rgba(255,255,255,.4);font-size:.72rem;">iOS & Android</div></div></div></div>
            <div class="col-6"><div style="background:rgba(139,92,246,.08);border:1px solid rgba(139,92,246,.2);border-radius:12px;padding:14px;display:flex;align-items:center;gap:10px;"><i class="fas fa-laptop" style="color:#c4b5fd;font-size:1.1rem;"></i><div><div style="color:#fff;font-size:.82rem;font-weight:600;">Web Browser</div><div style="color:rgba(255,255,255,.4);font-size:.72rem;">WebRTC softphone</div></div></div></div>
            <div class="col-6"><div style="background:rgba(251,146,60,.08);border:1px solid rgba(251,146,60,.2);border-radius:12px;padding:14px;display:flex;align-items:center;gap:10px;"><i class="fas fa-headset" style="color:#fb923c;font-size:1.1rem;"></i><div><div style="color:#fff;font-size:.82rem;font-weight:600;">Call Center Agents</div><div style="color:rgba(255,255,255,.4);font-size:.72rem;">In-office or remote</div></div></div></div>
          </div>
          <div style="margin-top:20px;display:grid;grid-template-columns:repeat(3,1fr);gap:10px;">
            <div style="text-align:center;padding:12px;background:rgba(255,255,255,.03);border-radius:10px;"><div style="color:#4ade80;font-weight:800;font-size:1.2rem;">∞</div><div style="color:rgba(255,255,255,.45);font-size:.72rem;">Extensions</div></div>
            <div style="text-align:center;padding:12px;background:rgba(255,255,255,.03);border-radius:10px;"><div style="color:#4ade80;font-weight:800;font-size:1.2rem;">24/7</div><div style="color:rgba(255,255,255,.45);font-size:.72rem;">Availability</div></div>
            <div style="text-align:center;padding:12px;background:rgba(255,255,255,.03);border-radius:10px;"><div style="color:#4ade80;font-weight:800;font-size:1.2rem;">99.9%</div><div style="color:rgba(255,255,255,.45);font-size:.72rem;">Uptime SLA</div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="features" class="section-alt" style="padding:100px 0;">
  <div class="container">
    <div class="row justify-content-center text-center mb-5"><div class="col-lg-7" data-aos="fade-up"><div class="section-badge"><i class="fas fa-th-large"></i> Features</div><h2 class="section-title">Everything Your Business <span class="accent">Phone Needs</span></h2><p class="section-sub mx-auto">A complete enterprise phone system without the enterprise price tag or complexity.</p></div></div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div class="feat-card"><div class="feat-icon"><i class="fas fa-sitemap"></i></div><h5>Multi-Level IVR</h5><p>Build sophisticated auto-attendant menus with drag-and-drop simplicity. Route callers by department, language, or business hours with no coding required.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="60"><div class="feat-card"><div class="feat-icon"><i class="fas fa-users"></i></div><h5>Unlimited Extensions</h5><p>Add users and departments instantly — scale from 5 to 5,000 seats with no infrastructure changes. Each user gets desktop, mobile, and web access.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120"><div class="feat-card"><div class="feat-icon"><i class="fas fa-video"></i></div><h5>Video Conferencing</h5><p>Built-in multi-party video calls with screen sharing, chat, and recording. Host meetings without third-party tools — right from your PBX dashboard.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="180"><div class="feat-card"><div class="feat-icon"><i class="fas fa-plug"></i></div><h5>CRM Integration</h5><p>Native connectors for Salesforce, HubSpot, Zoho, Microsoft Dynamics, and 50+ platforms. Automatically log calls, pop screen records on inbound calls.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240"><div class="feat-card"><div class="feat-icon"><i class="fas fa-mobile-alt"></i></div><h5>Mobile Softphone App</h5><p>iOS and Android apps let your team take and make business calls from anywhere. Your office number rings on every device — desktop, mobile, and browser.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300"><div class="feat-card"><div class="feat-icon"><i class="fas fa-record-vinyl"></i></div><h5>Call Recording</h5><p>On-demand or automatic call recording with encrypted cloud storage, searchable transcripts, and one-click playback for compliance and training.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="360"><div class="feat-card"><div class="feat-icon"><i class="fas fa-voicemail"></i></div><h5>Visual Voicemail</h5><p>Voicemails transcribed to text and delivered via email or app. Never miss a message — listen, read, or forward voicemails from any device.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="420"><div class="feat-card"><div class="feat-icon"><i class="fas fa-clock"></i></div><h5>Time-Based Routing</h5><p>Automatically route calls differently during business hours, after-hours, holidays, and weekends. Set it once and your PBX handles everything.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="480"><div class="feat-card"><div class="feat-icon"><i class="fas fa-chart-pie"></i></div><h5>Call Analytics</h5><p>Real-time dashboards with call volumes, wait times, agent performance, and customer satisfaction scores. Export reports in any format.</p></div></div>
    </div>
  </div>
</section>

<section class="section-dark" style="padding:80px 0;position:relative;overflow:hidden;">
  <div style="position:absolute;inset:-60px;background:radial-gradient(ellipse 90% 70% at 50% 50%,rgba(34,197,94,.12) 0%,transparent 65%);will-change:transform;" id="statsBg"></div>
  <div class="container position-relative" style="z-index:2;">
    <div class="row g-4 text-center">
      <div class="col-6 col-lg-3" data-aos="zoom-in"><div class="mini-stat"><div class="num">∞</div><div class="lbl">Extensions</div></div></div>
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="80"><div class="mini-stat"><div class="num" data-count="50">0</div><div>+</div><div class="lbl">CRM Integrations</div></div></div>
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="160"><div class="mini-stat"><div class="num" data-count="99">0</div><div>.9%</div><div class="lbl">Uptime SLA</div></div></div>
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="240"><div class="mini-stat"><div class="num" data-count="48">0</div><div>hrs</div><div class="lbl">Setup Time</div></div></div>
    </div>
  </div>
</section>

<section class="section-alt" style="padding:100px 0;">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6" data-aos="fade-right">
        <div class="section-badge"><i class="fas fa-sitemap"></i> Getting Started</div>
        <h2 class="section-title">Up &amp; Running in <span class="accent">48 Hours</span></h2>
        <div class="divider"></div>
        <div class="how-step"><div class="how-num">1</div><div><h5>Sign Up &amp; Plan Selection</h5><p>Choose your plan based on the number of users and features needed. Our team will reach out within 24 hours to confirm your requirements.</p></div></div>
        <div class="how-step"><div class="how-num">2</div><div><h5>Configure Your PBX</h5><p>Set up extensions, IVR menus, and call routing via our intuitive web dashboard. Our onboarding team walks you through each step.</p></div></div>
        <div class="how-step"><div class="how-num">3</div><div><h5>Connect Your Numbers</h5><p>Port existing numbers or provision new DID numbers in 60+ countries. Numbers are ready in hours, not weeks.</p></div></div>
        <div class="how-step"><div class="how-num">4</div><div><h5>Train &amp; Go Live</h5><p>Install softphone apps on your team's devices, run a 30-minute training session, and go live. No downtime, no technical headaches.</p></div></div>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
        <div style="background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.08);border-radius:22px;padding:40px;">
          <h5 style="color:#fff;font-weight:700;margin-bottom:24px;"><i class="fas fa-check-circle" style="color:#4ade80;margin-right:10px;"></i>What's Included</h5>
          <ul class="check-list">
            <li><i class="fas fa-check-circle"></i> Unlimited extensions & ring groups</li>
            <li><i class="fas fa-check-circle"></i> Multi-level IVR & auto-attendant</li>
            <li><i class="fas fa-check-circle"></i> HD video conferencing & screen share</li>
            <li><i class="fas fa-check-circle"></i> Mobile & browser softphone apps</li>
            <li><i class="fas fa-check-circle"></i> Call recording with transcription</li>
            <li><i class="fas fa-check-circle"></i> Voicemail to email / text</li>
            <li><i class="fas fa-check-circle"></i> CRM integration (50+ platforms)</li>
            <li><i class="fas fa-check-circle"></i> Time-based & skill-based routing</li>
            <li><i class="fas fa-check-circle"></i> Call analytics & real-time reports</li>
            <li><i class="fas fa-check-circle"></i> 24/7 NOC support</li>
          </ul>
          <div style="margin-top:28px;padding:20px;background:rgba(34,197,94,.08);border:1px solid rgba(34,197,94,.2);border-radius:14px;">
            <div style="color:#fff;font-weight:600;margin-bottom:6px;">🏢 Works for Remote Teams Too</div>
            <div style="color:rgba(255,255,255,.55);font-size:.88rem;line-height:1.6;">Our hosted PBX is fully cloud-based. Agents can work from any location, device, or internet connection — perfect for hybrid and remote workforces.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-dark" style="padding:100px 0;">
  <div class="container">
    <div class="row justify-content-center text-center mb-5"><div class="col-lg-7" data-aos="fade-up"><div class="section-badge"><i class="fas fa-users"></i> Use Cases</div><h2 class="section-title">Perfect for <span class="accent">Every Business</span></h2></div></div>
    <div class="row g-3">
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div class="use-card"><div class="use-icon"><i class="fas fa-laptop-house"></i></div><div><h6>Remote & Hybrid Teams</h6><p>Keep distributed teams connected with a single unified phone system that works on any device from any location.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="60"><div class="use-card"><div class="use-icon"><i class="fas fa-store"></i></div><div><h6>SMBs & Startups</h6><p>Get enterprise-grade phone features without enterprise costs. No upfront hardware — pay monthly as your team grows.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120"><div class="use-card"><div class="use-icon"><i class="fas fa-city"></i></div><div><h6>Multi-Branch Companies</h6><p>Connect offices across different cities or countries on one unified system. Internal calls are free, all managed from one dashboard.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="180"><div class="use-card"><div class="use-icon"><i class="fas fa-hospital"></i></div><div><h6>Healthcare & Clinics</h6><p>HIPAA-compliant call handling with appointment scheduling IVR, call recording for compliance, and voicemail-to-text.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240"><div class="use-card"><div class="use-icon"><i class="fas fa-graduation-cap"></i></div><div><h6>Education Institutions</h6><p>Manage complex call routing across departments, campuses, and faculties with a single cloud system.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300"><div class="use-card"><div class="use-icon"><i class="fas fa-hotel"></i></div><div><h6>Hospitality & Hotels</h6><p>Guest room phones, front desk routing, concierge IVR, and housekeeping integration — all in one PBX platform.</p></div></div></div>
    </div>
  </div>
</section>

<section class="section-alt" style="padding:80px 0;">
  <div class="container"><div class="row justify-content-center"><div class="col-lg-8" data-aos="fade-up">
    <div class="testi">
      <div style="color:#f59e0b;font-size:.9rem;margin-bottom:14px;letter-spacing:2px;">★★★★★</div>
      <p style="color:rgba(255,255,255,.75);font-size:1.05rem;line-height:1.8;margin-bottom:24px;">"We replaced our aging on-premises PBX with First Step Technology's hosted solution and haven't looked back. Setup took 48 hours, our remote teams across 8 countries are now on the same system, and the monthly cost is 40% less than what we were paying for hardware maintenance alone."</p>
      <div style="display:flex;align-items:center;gap:14px;"><div style="width:48px;height:48px;border-radius:50%;background:linear-gradient(135deg,#22c55e,#06b6d4);display:flex;align-items:center;justify-content:center;font-weight:700;color:#fff;">NK</div><div><div style="color:#fff;font-weight:600;">Nina Kowalski</div><div style="color:rgba(255,255,255,.45);font-size:.82rem;">IT Director, EuroGroup Holdings</div></div></div>
    </div>
  </div></div></div>
</section>

<section class="svc-cta">
  <div class="svc-cta-bg" id="ctaBg"></div>
  <div class="container"><div class="row justify-content-center text-center" style="position:relative;z-index:2;"><div class="col-lg-7" data-aos="zoom-in">
    <div class="section-badge mx-auto mb-3"><i class="fas fa-rocket"></i> Get Started</div>
    <h2 style="font-family:'Poppins',sans-serif;font-size:clamp(2rem,4vw,3rem);font-weight:800;color:#fff;margin-bottom:18px;">Move Your Phone System <span style="background:linear-gradient(90deg,#22c55e,#06b6d4);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">to the Cloud</span></h2>
    <p style="color:rgba(255,255,255,.6);font-size:1.05rem;max-width:500px;margin:0 auto 32px;line-height:1.75;">No hardware, no hassle. Get a live demo and see your new PBX in action within the hour.</p>
    <div class="d-flex gap-3 justify-content-center flex-wrap"><a href="contact.php" class="btn-primary-grad" style="background:linear-gradient(135deg,#22c55e,#06b6d4);"><i class="fas fa-paper-plane"></i> Request a Demo</a><a href="services.php" class="btn-outline-light-custom"><i class="fas fa-th-large"></i> All Services</a></div>
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

