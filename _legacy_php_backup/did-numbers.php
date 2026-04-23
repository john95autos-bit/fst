<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" href="logo.png" />
  <meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DID & Toll-Free Numbers | First Step Technology</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="shared.css" />
  <style>
    :root{--svc-color:#f59e0b;--svc-color2:#ef4444;}
    .svc-hero{min-height:100vh;display:flex;align-items:center;position:relative;overflow:hidden;padding-top:100px;}
    .svc-hero-bg{position:absolute;inset:-60px;background:radial-gradient(ellipse 70% 60% at 70% 40%,rgba(245,158,11,.22) 0%,transparent 60%),radial-gradient(ellipse 50% 50% at 20% 70%,rgba(239,68,68,.12) 0%,transparent 55%),linear-gradient(180deg,#080f1e 0%,#1a1107 50%,#080f1e 100%);will-change:transform;}
    .svc-hero-grid{position:absolute;inset:0;background-image:linear-gradient(rgba(245,158,11,.06) 1px,transparent 1px),linear-gradient(90deg,rgba(245,158,11,.06) 1px,transparent 1px);background-size:55px 55px;mask-image:radial-gradient(ellipse at center,black 30%,transparent 75%);animation:gd 20s linear infinite;}
    @keyframes gd{from{transform:translateY(0)}to{transform:translateY(55px)}}
    .hero-content{position:relative;z-index:2;}
    .svc-badge{display:inline-flex;align-items:center;gap:8px;background:rgba(245,158,11,.12);border:1px solid rgba(245,158,11,.35);border-radius:50px;padding:6px 18px;font-size:.82rem;color:#fbbf24;font-weight:600;letter-spacing:.5px;margin-bottom:22px;}
    .section-alt{background:#0b1120;}.section-dark{background:#080f1e;}
    .feat-card{background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.08);border-radius:18px;padding:30px;height:100%;transition:all .35s;}
    .feat-card:hover{border-color:rgba(245,158,11,.35);transform:translateY(-6px);box-shadow:0 20px 50px rgba(0,0,0,.3);}
    .feat-icon{width:56px;height:56px;border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:1.4rem;margin-bottom:18px;background:linear-gradient(135deg,rgba(245,158,11,.18),rgba(239,68,68,.1));color:#fbbf24;}
    .feat-card h5{color:#fff;font-weight:700;font-size:1rem;margin-bottom:8px;}
    .feat-card p{color:rgba(255,255,255,.5);font-size:.88rem;line-height:1.7;margin:0;}
    .how-step{display:flex;gap:18px;margin-bottom:36px;}
    .how-num{width:48px;height:48px;flex-shrink:0;border-radius:50%;background:linear-gradient(135deg,var(--svc-color),var(--svc-color2));display:flex;align-items:center;justify-content:center;font-weight:800;color:#fff;font-size:1rem;box-shadow:0 4px 20px rgba(245,158,11,.3);}
    .how-step h5{color:#fff;font-weight:700;margin-bottom:6px;}
    .how-step p{color:rgba(255,255,255,.5);font-size:.9rem;line-height:1.65;margin:0;}
    .mini-stat{text-align:center;padding:32px 20px;background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.08);border-radius:16px;}
    .mini-stat .num{font-family:'Poppins',sans-serif;font-size:2.4rem;font-weight:800;background:linear-gradient(90deg,var(--svc-color),var(--svc-color2));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;}
    .mini-stat .lbl{color:rgba(255,255,255,.5);font-size:.88rem;margin-top:4px;}
    .use-card{background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.07);border-radius:14px;padding:22px 20px;display:flex;gap:14px;align-items:flex-start;transition:all .3s;}
    .use-card:hover{border-color:rgba(245,158,11,.3);background:rgba(245,158,11,.04);}
    .use-icon{width:40px;height:40px;flex-shrink:0;border-radius:10px;background:rgba(245,158,11,.12);display:flex;align-items:center;justify-content:center;color:#fbbf24;}
    .use-card h6{color:#fff;font-weight:600;margin-bottom:4px;}
    .use-card p{color:rgba(255,255,255,.45);font-size:.85rem;margin:0;line-height:1.6;}
    .testi{background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.09);border-radius:20px;padding:36px;position:relative;}
    .testi::before{content:'\201C';position:absolute;top:16px;right:24px;font-size:5rem;color:rgba(245,158,11,.12);font-family:Georgia,serif;line-height:1;}
    .svc-cta{padding:100px 0;position:relative;overflow:hidden;}
    .svc-cta-bg{position:absolute;inset:-60px;background:radial-gradient(ellipse 80% 60% at 40% 50%,rgba(245,158,11,.22) 0%,transparent 60%),radial-gradient(ellipse 60% 50% at 80% 30%,rgba(239,68,68,.15) 0%,transparent 55%),#050d1a;will-change:transform;}
    .check-list{list-style:none;padding:0;}
    .check-list li{display:flex;align-items:center;gap:10px;color:rgba(255,255,255,.65);font-size:.92rem;margin-bottom:10px;}
    .check-list li i{color:#22c55e;font-size:.8rem;}
    /* Number showcase */
    .number-type{background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.08);border-radius:14px;padding:20px;transition:all .3s;}
    .number-type:hover{border-color:rgba(245,158,11,.3);transform:translateY(-4px);}
    .number-type .num-ex{font-family:'Poppins',sans-serif;font-size:1.1rem;font-weight:700;color:#fbbf24;margin-bottom:6px;}
    .number-type .num-label{color:rgba(255,255,255,.5);font-size:.8rem;}
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
        <nav aria-label="breadcrumb" style="margin-bottom:18px;"><div style="display:flex;align-items:center;gap:8px;font-size:.85rem;color:rgba(255,255,255,.4);"><a href="index.php" style="color:#fbbf24;">Home</a><span>/</span><a href="services.php" style="color:#fbbf24;">Services</a><span>/</span><span>DID Numbers</span></div></nav>
        <div class="svc-badge"><i class="fas fa-hashtag fa-xs"></i> DID &amp; Toll-Free Numbers</div>
        <h1 style="font-family:'Poppins',sans-serif;font-size:clamp(2.4rem,5vw,4rem);font-weight:800;color:#fff;line-height:1.12;margin-bottom:22px;">Local Numbers,<br><span style="background:linear-gradient(90deg,#f59e0b,#ef4444);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Global Reach</span></h1>
        <p style="font-size:1.05rem;color:rgba(255,255,255,.62);line-height:1.8;margin-bottom:32px;">Acquire local, national, and toll-free phone numbers across 60+ countries. Instant provisioning, smart call forwarding, and real-time analytics give you complete control over your inbound communications.</p>
        <div class="d-flex flex-wrap gap-3 mb-4">
          <a href="contact.php" class="btn-primary-grad" style="background:linear-gradient(135deg,#f59e0b,#ef4444);box-shadow:0 8px 28px rgba(245,158,11,.3);"><i class="fas fa-hashtag"></i> Get Numbers</a>
          <a href="#features" class="btn-outline-light-custom"><i class="fas fa-th-large"></i> See Features</a>
        </div>
        <div>
          <span style="display:inline-flex;align-items:center;gap:6px;padding:5px 14px;border-radius:50px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);font-size:.8rem;color:rgba(255,255,255,.6);margin:4px;"><i class="fas fa-check" style="color:#22c55e;"></i> 60+ Countries</span>
          <span style="display:inline-flex;align-items:center;gap:6px;padding:5px 14px;border-radius:50px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);font-size:.8rem;color:rgba(255,255,255,.6);margin:4px;"><i class="fas fa-check" style="color:#22c55e;"></i> Instant Activation</span>
          <span style="display:inline-flex;align-items:center;gap:6px;padding:5px 14px;border-radius:50px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);font-size:.8rem;color:rgba(255,255,255,.6);margin:4px;"><i class="fas fa-check" style="color:#22c55e;"></i> Number Porting</span>
          <span style="display:inline-flex;align-items:center;gap:6px;padding:5px 14px;border-radius:50px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);font-size:.8rem;color:rgba(255,255,255,.6);margin:4px;"><i class="fas fa-check" style="color:#22c55e;"></i> SMS Capable</span>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
        <div style="background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.1);border-radius:24px;padding:32px;">
          <h5 style="color:#fff;font-weight:700;margin-bottom:20px;"><i class="fas fa-hashtag" style="color:#fbbf24;margin-right:8px;"></i>Available Number Types</h5>
          <div class="row g-3 mb-4">
            <div class="col-6"><div class="number-type"><div class="num-ex">+1 (213) 555-xxxx</div><div class="num-label">🇺🇸 US Local DID</div></div></div>
            <div class="col-6"><div class="number-type"><div class="num-ex">+44 20 7946-xxxx</div><div class="num-label">🇬🇧 UK London DID</div></div></div>
            <div class="col-6"><div class="number-type"><div class="num-ex">1-800-xxx-xxxx</div><div class="num-label">🇺🇸 US Toll-Free</div></div></div>
            <div class="col-6"><div class="number-type"><div class="num-ex">+971 4 xxx-xxxx</div><div class="num-label">🇦🇪 UAE Dubai DID</div></div></div>
            <div class="col-6"><div class="number-type"><div class="num-ex">+852 xxxx-xxxx</div><div class="num-label">🇭🇰 Hong Kong DID</div></div></div>
            <div class="col-6"><div class="number-type"><div class="num-ex">+49 30 xxxx-xxxx</div><div class="num-label">🇩🇪 Germany Berlin</div></div></div>
          </div>
          <div style="display:flex;align-items:center;justify-content:space-between;background:rgba(245,158,11,.08);border:1px solid rgba(245,158,11,.2);border-radius:12px;padding:14px 18px;">
            <span style="color:rgba(255,255,255,.6);font-size:.85rem;">Available countries</span>
            <span style="color:#fbbf24;font-weight:700;font-size:1.1rem;">60+ countries</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="features" class="section-alt" style="padding:100px 0;">
  <div class="container">
    <div class="row justify-content-center text-center mb-5"><div class="col-lg-7" data-aos="fade-up"><div class="section-badge"><i class="fas fa-th-large"></i> Features</div><h2 class="section-title">Complete Inbound <span class="accent">Number Management</span></h2><p class="section-sub mx-auto">Smart routing, instant provisioning, and full analytics for every number in your portfolio.</p></div></div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div class="feat-card"><div class="feat-icon"><i class="fas fa-globe"></i></div><h5>60+ Country Coverage</h5><p>Local, national, mobile, and toll-free numbers across all major markets in Europe, Americas, Asia-Pacific, Middle East, and Africa.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="60"><div class="feat-card"><div class="feat-icon"><i class="fas fa-bolt"></i></div><h5>Instant Provisioning</h5><p>Numbers activated within minutes via web portal or API. Browse available numbers, select, pay, and start receiving calls — immediately.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120"><div class="feat-card"><div class="feat-icon"><i class="fas fa-route"></i></div><h5>Smart Call Routing</h5><p>Route calls by time-of-day, day-of-week, caller geography, caller ID, or custom business rules. Set up failover and backup destinations.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="180"><div class="feat-card"><div class="feat-icon"><i class="fas fa-exchange-alt"></i></div><h5>Number Porting</h5><p>Port your existing local, national, or toll-free numbers to our platform with zero downtime and continuous service throughout the transfer.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240"><div class="feat-card"><div class="feat-icon"><i class="fas fa-comment-sms"></i></div><h5>SMS-Capable Numbers</h5><p>Send and receive SMS on selected DID numbers for a unified communications experience. Manage messages via API or web portal.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300"><div class="feat-card"><div class="feat-icon"><i class="fas fa-chart-line"></i></div><h5>Number Analytics</h5><p>Track inbound call volumes, answer rates, peak hours, caller geography, and conversion metrics for each number in your portfolio.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="360"><div class="feat-card"><div class="feat-icon"><i class="fas fa-shield-halved"></i></div><h5>Spam & Fraud Protection</h5><p>Automatic spam call filtering, caller ID verification, and configurable blocklists protect your numbers from abuse and unwanted traffic.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="420"><div class="feat-card"><div class="feat-icon"><i class="fas fa-code"></i></div><h5>REST API Control</h5><p>Provision, configure, and manage numbers programmatically. Integrate number management into your own platform or CRM system.</p></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="480"><div class="feat-card"><div class="feat-icon"><i class="fas fa-layer-group"></i></div><h5>Bulk Number Management</h5><p>Manage hundreds or thousands of DIDs from a single dashboard. Bulk configure routing rules, set group policies, and export reports.</p></div></div>
    </div>
  </div>
</section>

<section class="section-dark" style="padding:80px 0;position:relative;overflow:hidden;">
  <div style="position:absolute;inset:-60px;background:radial-gradient(ellipse 90% 70% at 50% 50%,rgba(245,158,11,.12) 0%,transparent 65%);will-change:transform;" id="statsBg"></div>
  <div class="container position-relative" style="z-index:2;">
    <div class="row g-4 text-center">
      <div class="col-6 col-lg-3" data-aos="zoom-in"><div class="mini-stat"><div class="num" data-count="60">0</div><div>+</div><div class="lbl">Countries Available</div></div></div>
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="80"><div class="mini-stat"><div class="num" data-count="5">0</div><div>min</div><div class="lbl">Activation Time</div></div></div>
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="160"><div class="mini-stat"><div class="num" data-count="3">0</div><div> types</div><div class="lbl">Local/National/TF</div></div></div>
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="240"><div class="mini-stat"><div class="num" data-count="99">0</div><div>.9%</div><div class="lbl">Inbound Uptime</div></div></div>
    </div>
  </div>
</section>

<section class="section-alt" style="padding:100px 0;">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6" data-aos="fade-right">
        <div class="section-badge"><i class="fas fa-sitemap"></i> How It Works</div>
        <h2 class="section-title">Numbers Live in <span class="accent">Minutes</span></h2>
        <div class="divider"></div>
        <div class="how-step"><div class="how-num">1</div><div><h5>Browse & Select Numbers</h5><p>Search our inventory by country, city, or area code. Choose local DIDs, national numbers, or toll-free prefixes from our extensive catalog.</p></div></div>
        <div class="how-step"><div class="how-num">2</div><div><h5>Configure Routing Rules</h5><p>Point each number to a SIP endpoint, trunk, or IVR. Set business-hours routing, geographic routing, and failover destinations.</p></div></div>
        <div class="how-step"><div class="how-num">3</div><div><h5>Activate in Minutes</h5><p>Purchase and activate your selected numbers instantly. No waiting periods, no complex paperwork for most countries.</p></div></div>
        <div class="how-step"><div class="how-num">4</div><div><h5>Monitor & Optimize</h5><p>Use our analytics dashboard to track call volumes, peak hours, and geographic patterns. Adjust routing rules in real time as needed.</p></div></div>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
        <div style="background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.08);border-radius:22px;padding:40px;">
          <h5 style="color:#fff;font-weight:700;margin-bottom:24px;"><i class="fas fa-check-circle" style="color:#fbbf24;margin-right:10px;"></i>What's Included</h5>
          <ul class="check-list">
            <li><i class="fas fa-check-circle"></i> Local, national, and toll-free DIDs</li>
            <li><i class="fas fa-check-circle"></i> 60+ country coverage</li>
            <li><i class="fas fa-check-circle"></i> Instant number provisioning</li>
            <li><i class="fas fa-check-circle"></i> Smart routing & failover rules</li>
            <li><i class="fas fa-check-circle"></i> Time-of-day & geographic routing</li>
            <li><i class="fas fa-check-circle"></i> Number porting with zero downtime</li>
            <li><i class="fas fa-check-circle"></i> SMS capability on selected numbers</li>
            <li><i class="fas fa-check-circle"></i> Real-time call analytics dashboard</li>
            <li><i class="fas fa-check-circle"></i> REST API for number management</li>
            <li><i class="fas fa-check-circle"></i> Spam & fraud protection</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-dark" style="padding:100px 0;">
  <div class="container">
    <div class="row justify-content-center text-center mb-5"><div class="col-lg-7" data-aos="fade-up"><div class="section-badge"><i class="fas fa-users"></i> Use Cases</div><h2 class="section-title">Who Needs <span class="accent">DID Numbers?</span></h2></div></div>
    <div class="row g-3">
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div class="use-card"><div class="use-icon"><i class="fas fa-globe"></i></div><div><h6>Global Businesses</h6><p>Establish a local presence in every market with local numbers. Customers call a local number — you receive calls anywhere in the world.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="60"><div class="use-card"><div class="use-icon"><i class="fas fa-bullhorn"></i></div><div><h6>Marketing Campaigns</h6><p>Assign unique DIDs to each campaign, channel, or ad group. Track call conversions and attribution with per-number analytics.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120"><div class="use-card"><div class="use-icon"><i class="fas fa-headset"></i></div><div><h6>Customer Support Lines</h6><p>Offer toll-free or local support numbers in each country you serve. Route to the right team based on caller location or language.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="180"><div class="use-card"><div class="use-icon"><i class="fas fa-shopping-cart"></i></div><div><h6>E-Commerce Stores</h6><p>Give customers in each country a local number to call. Build trust with local presence even when your team is centralized.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240"><div class="use-card"><div class="use-icon"><i class="fas fa-hospital"></i></div><div><h6>Healthcare Providers</h6><p>Dedicated lines for each clinic, department, or doctor. Smart routing ensures calls always reach the right practitioner.</p></div></div></div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300"><div class="use-card"><div class="use-icon"><i class="fas fa-phone-square"></i></div><div><h6>VoIP Resellers</h6><p>Provision DIDs for your own customers using our wholesale DID inventory and API. Scale your DID business without infrastructure costs.</p></div></div></div>
    </div>
  </div>
</section>

<section class="section-alt" style="padding:80px 0;">
  <div class="container"><div class="row justify-content-center"><div class="col-lg-8" data-aos="fade-up">
    <div class="testi">
      <div style="color:#f59e0b;font-size:.9rem;margin-bottom:14px;letter-spacing:2px;">★★★★★</div>
      <p style="color:rgba(255,255,255,.75);font-size:1.05rem;line-height:1.8;margin-bottom:24px;">"We set up local numbers in 12 countries for our support team in under an hour using First Step Technology's portal. The call routing flexibility is incredible — we route by time zone and language automatically. Customer satisfaction scores improved 30% just because customers were now calling a local number."</p>
      <div style="display:flex;align-items:center;gap:14px;"><div style="width:48px;height:48px;border-radius:50%;background:linear-gradient(135deg,#f59e0b,#ef4444);display:flex;align-items:center;justify-content:center;font-weight:700;color:#fff;">PW</div><div><div style="color:#fff;font-weight:600;">Paula Werner</div><div style="color:rgba(255,255,255,.45);font-size:.82rem;">Head of Customer Success, ShopEU</div></div></div>
    </div>
  </div></div></div>
</section>

<section class="svc-cta">
  <div class="svc-cta-bg" id="ctaBg"></div>
  <div class="container"><div class="row justify-content-center text-center" style="position:relative;z-index:2;"><div class="col-lg-7" data-aos="zoom-in">
    <div class="section-badge mx-auto mb-3"><i class="fas fa-hashtag"></i> Get Your Numbers</div>
    <h2 style="font-family:'Poppins',sans-serif;font-size:clamp(2rem,4vw,3rem);font-weight:800;color:#fff;margin-bottom:18px;">Go Local in <span style="background:linear-gradient(90deg,#f59e0b,#ef4444);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">60+ Countries</span></h2>
    <p style="color:rgba(255,255,255,.6);font-size:1.05rem;max-width:500px;margin:0 auto 32px;line-height:1.75;">Provision local, national, and toll-free numbers in minutes. No paperwork. No waiting.</p>
    <div class="d-flex gap-3 justify-content-center flex-wrap"><a href="contact.php" class="btn-primary-grad" style="background:linear-gradient(135deg,#f59e0b,#ef4444);"><i class="fas fa-hashtag"></i> Get Started</a><a href="services.php" class="btn-outline-light-custom"><i class="fas fa-th-large"></i> All Services</a></div>
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


