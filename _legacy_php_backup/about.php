<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" href="logo.png" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us | First Step Technology</title>
  <meta name="description" content="Learn about First Step Technology — a global VoIP leader headquartered in Hong Kong, building next-gen IP voice solutions since 2013." />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="shared.css" />
  <style>
    /* PAGE BANNER */
    .page-banner { padding: 180px 0 110px; position: relative; overflow: hidden; }
    .page-banner-bg {
      position: absolute; inset: -60px;
      background:
        radial-gradient(ellipse 70% 60% at 60% 40%, rgba(13,110,253,.22) 0%, transparent 60%),
        radial-gradient(ellipse 50% 50% at 20% 70%, rgba(0,198,255,.12) 0%, transparent 55%),
        linear-gradient(180deg,#080f1e 0%,#0b1a3c 60%,#080f1e 100%);
      will-change: transform;
    }
    .page-banner-grid { position: absolute; inset: 0; background-image: linear-gradient(rgba(13,110,253,.06) 1px,transparent 1px), linear-gradient(90deg,rgba(13,110,253,.06) 1px,transparent 1px); background-size: 60px 60px; mask-image: radial-gradient(ellipse at 60% 50%,black 30%,transparent 70%); animation: gridDrift 20s linear infinite; }
    @keyframes gridDrift{from{transform:translateY(0);}to{transform:translateY(60px);}}
    .page-banner-content { position: relative; z-index: 2; }
    .breadcrumb-nav { display: flex; align-items: center; gap: 8px; font-size: .85rem; color: rgba(255,255,255,.4); margin-bottom: 18px; }
    .breadcrumb-nav a { color: var(--cyan); }
    .page-banner h1 { font-family: 'Poppins',sans-serif; font-size: clamp(2.4rem,5vw,4rem); font-weight: 800; color: #fff; line-height: 1.15; margin-bottom: 20px; }
    .page-banner h1 .highlight { background: linear-gradient(90deg,var(--accent),var(--cyan)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    .page-banner p { font-size: 1.1rem; color: rgba(255,255,255,.6); line-height: 1.8; max-width: 580px; }

    /* STORY */
    #story { padding: 110px 0; background: #0b1120; }
    .story-img-box { border-radius: 24px; overflow: hidden; position: relative; }
    .story-overlay-num { position: absolute; bottom: -20px; right: -20px; background: rgba(8,15,30,.92); border: 1px solid rgba(255,255,255,.1); backdrop-filter: blur(20px); border-radius: 16px; padding: 20px 24px; }
    .story-overlay-num .big { font-family:'Poppins',sans-serif; font-size:2.8rem; font-weight:800; color:var(--cyan); line-height:1; }
    .feature-item { display:flex; align-items:flex-start; gap:14px; margin-bottom:22px; }
    .feature-icon { width:44px; height:44px; flex-shrink:0; background:rgba(13,110,253,.15); border:1px solid rgba(13,110,253,.3); border-radius:10px; display:flex; align-items:center; justify-content:center; color:var(--cyan); }
    .feature-item h6 { color:#fff; font-weight:600; margin-bottom:4px; }
    .feature-item p { color:rgba(255,255,255,.5); font-size:.9rem; line-height:1.65; margin:0; }

    /* MISSION VISION */
    #mission { padding: 100px 0; background: #080f1e; }
    .mv-card { border-radius:20px; padding:44px 36px; height:100%; position:relative; overflow:hidden; }
    .mv-card-mission { background: linear-gradient(135deg,rgba(13,110,253,.12),rgba(0,198,255,.06)); border:1px solid rgba(13,110,253,.25); }
    .mv-card-vision  { background: linear-gradient(135deg,rgba(139,92,246,.12),rgba(0,198,255,.06)); border:1px solid rgba(139,92,246,.25); }
    .mv-icon { font-size:2.5rem; margin-bottom:20px; }
    .mv-card h3 { color:#fff; font-family:'Poppins',sans-serif; font-weight:700; font-size:1.6rem; margin-bottom:16px; }
    .mv-card p { color:rgba(255,255,255,.6); font-size:1rem; line-height:1.8; }
    .mv-glow { position:absolute; bottom:-60px; right:-60px; width:200px; height:200px; border-radius:50%; filter:blur(60px); opacity:.15; }

    /* TIMELINE */
    #timeline { padding: 110px 0; background: #0b1120; }
    .tl-wrap { position:relative; }
    .tl-wrap::before { content:''; position:absolute; left:50%; top:0; bottom:0; width:2px; background:linear-gradient(180deg,var(--accent),transparent); transform:translateX(-50%); }
    .tl-item { display:flex; margin-bottom:60px; position:relative; }
    .tl-item:nth-child(odd)  { flex-direction:row-reverse; }
    .tl-item:nth-child(even) { flex-direction:row; }
    .tl-content { width:45%; padding:28px; background:rgba(255,255,255,.03); border:1px solid rgba(255,255,255,.08); border-radius:16px; transition:all .3s; }
    .tl-content:hover { border-color:rgba(13,110,253,.3); box-shadow:0 12px 40px rgba(0,0,0,.25); }
    .tl-item:nth-child(odd)  .tl-content { margin-right:55px; }
    .tl-item:nth-child(even) .tl-content { margin-left:55px; }
    .tl-dot { position:absolute; left:50%; top:28px; transform:translateX(-50%); width:16px; height:16px; border-radius:50%; background:var(--accent); border:3px solid #0b1120; box-shadow:0 0 0 4px rgba(13,110,253,.25); z-index:1; }
    .tl-year { font-family:'Poppins',sans-serif; font-size:1.1rem; font-weight:700; color:var(--cyan); margin-bottom:6px; }
    .tl-content h5 { color:#fff; font-weight:600; margin-bottom:8px; }
    .tl-content p { color:rgba(255,255,255,.5); font-size:.9rem; line-height:1.65; margin:0; }

    /* TEAM */
    #team { padding: 110px 0; background: #080f1e; }
    .team-card { background:rgba(255,255,255,.03); border:1px solid rgba(255,255,255,.08); border-radius:20px; padding:36px 28px; text-align:center; transition:all .35s; }
    .team-card:hover { transform:translateY(-8px); border-color:rgba(13,110,253,.35); box-shadow:0 20px 60px rgba(0,0,0,.3); }
    .team-avatar { width:90px; height:90px; border-radius:50%; background:linear-gradient(135deg,var(--accent),var(--cyan)); display:flex; align-items:center; justify-content:center; font-size:2rem; font-weight:800; color:#fff; margin:0 auto 20px; box-shadow:0 8px 30px rgba(13,110,253,.3); }
    .team-card h5 { color:#fff; font-weight:700; font-size:1.05rem; margin-bottom:4px; }
    .team-card .role { color:var(--cyan); font-size:.85rem; font-weight:500; margin-bottom:14px; }
    .team-card p { color:rgba(255,255,255,.5); font-size:.88rem; line-height:1.65; margin-bottom:18px; }
    .team-social a { display:inline-flex; align-items:center; justify-content:center; width:34px; height:34px; border-radius:8px; background:rgba(255,255,255,.06); color:rgba(255,255,255,.4); font-size:.82rem; margin:0 3px; transition:all .3s; }
    .team-social a:hover { background:var(--accent); color:#fff; }

    /* WHY US */
    #why { padding: 110px 0; background: #0b1120; }
    .why-card { display:flex; gap:18px; align-items:flex-start; padding:26px; border-radius:16px; border:1px solid rgba(255,255,255,.06); background:rgba(255,255,255,.02); transition:all .3s; margin-bottom:18px; }
    .why-card:hover { border-color:rgba(13,110,253,.3); background:rgba(13,110,253,.05); transform:translateX(6px); }
    .why-num { width:46px; height:46px; flex-shrink:0; background:linear-gradient(135deg,var(--accent),var(--cyan)); border-radius:12px; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:1rem; color:#fff; }
    .why-card h5 { color:#fff; font-weight:600; margin-bottom:6px; }
    .why-card p { color:rgba(255,255,255,.5); font-size:.9rem; line-height:1.65; margin:0; }

    /* CTA */
    #cta { padding:120px 0; position:relative; overflow:hidden; }
    .cta-bg-grad { position:absolute; inset:-80px; background:radial-gradient(ellipse 80% 60% at 30% 60%,rgba(13,110,253,.35) 0%,transparent 60%), radial-gradient(ellipse 60% 60% at 80% 30%,rgba(0,198,255,.2) 0%,transparent 55%), #050d1a; will-change:transform; }
    .cta-inner { position:relative; z-index:2; text-align:center; }
    .cta-inner h2 { font-family:'Poppins',sans-serif; font-size:clamp(2rem,4.5vw,3.2rem); font-weight:800; color:#fff; margin-bottom:20px; }
    .cta-inner p { color:rgba(255,255,255,.6); font-size:1.05rem; max-width:520px; margin:0 auto 36px; line-height:1.75; }

    @media(max-width:768px){
      .tl-wrap::before{left:20px;}
      .tl-item,.tl-item:nth-child(odd){flex-direction:column;}
      .tl-content,.tl-item:nth-child(odd) .tl-content,.tl-item:nth-child(even) .tl-content{width:100%;margin:0 0 0 44px;}
      .tl-dot{left:20px;}
    }
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
        <li class="nav-item"><a class="nav-link active" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
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
  <div class="container page-banner-content" data-aos="fade-up" data-aos-duration="800">
    <div class="breadcrumb-nav"><a href="index.php">Home</a><span class="sep">/</span><span>About Us</span></div>
    <h1>Connecting the World <span class="highlight">One Call</span> at a Time</h1>
    <p>Since 2013, we've been building the infrastructure that powers global communications for carriers, enterprises, and communication providers across 150+ countries.</p>
  </div>
</section>

<!-- STORY -->
<section id="story">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-5" data-aos="fade-right" data-aos-duration="900">
        <div class="story-img-box" style="padding-bottom:40px;">
          <div style="background:linear-gradient(135deg,#0d2a5e,#0a3d7c);border-radius:24px;padding:60px 40px;text-align:center;">
            <i class="fas fa-network-wired" style="font-size:5.5rem;color:rgba(0,198,255,.55);display:block;margin-bottom:28px;"></i>
            <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
              <div style="background:rgba(255,255,255,.07);border-radius:12px;padding:16px 20px;">
                <div style="font-size:1.8rem;font-weight:800;color:var(--cyan);">2013</div>
                <div style="font-size:.75rem;color:rgba(255,255,255,.4);margin-top:4px;">Founded</div>
              </div>
              <div style="background:rgba(255,255,255,.07);border-radius:12px;padding:16px 20px;">
                <div style="font-size:1.8rem;font-weight:800;color:var(--cyan);">HK</div>
                <div style="font-size:.75rem;color:rgba(255,255,255,.4);margin-top:4px;">HQ</div>
              </div>
              <div style="background:rgba(255,255,255,.07);border-radius:12px;padding:16px 20px;">
                <div style="font-size:1.8rem;font-weight:800;color:var(--cyan);">150+</div>
                <div style="font-size:.75rem;color:rgba(255,255,255,.4);margin-top:4px;">Countries</div>
              </div>
            </div>
          </div>
          <div class="story-overlay-num">
            <div class="big">10+</div>
            <div style="color:rgba(255,255,255,.55);font-size:.85rem;margin-top:6px;">Years of Excellence</div>
          </div>
        </div>
      </div>
      <div class="col-lg-7" data-aos="fade-left" data-aos-duration="900" data-aos-delay="150">
        <div class="section-badge"><i class="fas fa-building"></i> Our Story</div>
        <h2 class="section-title">A Global Leader in <span class="accent">IP Telephony</span></h2>
        <div class="divider"></div>
        <p style="color:rgba(255,255,255,.6);line-height:1.85;margin-bottom:32px;">
          First Step Technology was founded in Hong Kong in 2013 with a singular vision: to make high-quality, reliable voice communication accessible to any carrier or enterprise in the world through a single, intelligent IP infrastructure. Over the past decade, we have grown from a regional operator into one of the primary global leaders in internet telephony and prepaid voice services.
        </p>
        <p style="color:rgba(255,255,255,.55);line-height:1.85;margin-bottom:32px;">
          Today, our global VoIP backbone spans 150+ countries, terminating billions of minutes annually for a diverse ecosystem of wholesale carriers, SMBs, and enterprise call centers. We are defined by our commitment to technical excellence, transparent partnerships, and 24/7 operational reliability.
        </p>
        <div>
          <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-icon"><i class="fas fa-globe"></i></div>
            <div><h6>Global Infrastructure</h6><p>A carrier-grade network spanning 150+ countries delivering crystal-clear voice via a single connection.</p></div>
          </div>
          <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-icon"><i class="fas fa-handshake"></i></div>
            <div><h6>Long-Term Partnerships</h6><p>We serve several leading organizations through strategic partnerships built on trust, performance, and transparency.</p></div>
          </div>
          <div class="feature-item" data-aos="fade-up" data-aos-delay="400">
            <div class="feature-icon"><i class="fas fa-bolt"></i></div>
            <div><h6>Continuous Innovation</h6><p>From IP-PBX to advanced auto-dialer technology, we continuously invest in next-generation communication solutions.</p></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MISSION & VISION -->
<section id="mission">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-7" data-aos="fade-up">
        <div class="section-badge"><i class="fas fa-bullseye"></i> Mission & Vision</div>
        <h2 class="section-title">What <span class="accent">Drives Us</span></h2>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-lg-6" data-aos="fade-right">
        <div class="mv-card mv-card-mission">
          <div class="mv-glow" style="background:#0d6efd;"></div>
          <div class="mv-icon">🎯</div>
          <h3>Our Mission</h3>
          <p>To empower carriers and enterprises worldwide with reliable, high-quality IP voice solutions that simplify global communication. We remove complexity from voice infrastructure so our partners can focus on growing their businesses.</p>
          <ul style="color:rgba(255,255,255,.55);font-size:.92rem;line-height:2;margin-top:16px;padding-left:20px;">
            <li>Deliver crystal-clear voice quality to every destination</li>
            <li>Provide transparent, competitive pricing</li>
            <li>Maintain 99.9%+ uptime across our global network</li>
            <li>Offer 24/7 expert technical support</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <div class="mv-card mv-card-vision">
          <div class="mv-glow" style="background:#8b5cf6;"></div>
          <div class="mv-icon">🔭</div>
          <h3>Our Vision</h3>
          <p>To be the world's most trusted voice carrier ecosystem — a platform where any business, anywhere, can access enterprise-grade communication tools without barriers of geography, cost, or technical complexity.</p>
          <ul style="color:rgba(255,255,255,.55);font-size:.92rem;line-height:2;margin-top:16px;padding-left:20px;">
            <li>Expand our network to 200+ countries by 2027</li>
            <li>Lead the industry in AI-powered voice analytics</li>
            <li>Enable 10,000+ global partners on our platform</li>
            <li>Set the standard for carrier-grade reliability</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TIMELINE -->
<section id="timeline">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-7" data-aos="fade-up">
        <div class="section-badge"><i class="fas fa-road"></i> Our Journey</div>
        <h2 class="section-title">A Decade of <span class="accent">Growth</span></h2>
        <p class="section-sub mx-auto">Key milestones that shaped First Step Technology into the global leader it is today.</p>
      </div>
    </div>
    <div class="tl-wrap">
      <div class="tl-item" data-aos="fade-right">
        <div class="tl-content"><div class="tl-year">2013</div><h5>Company Founded</h5><p>First Step Technology established in Hong Kong with a vision to democratize global voice communication through next-generation IP infrastructure.</p></div>
        <div class="tl-dot"></div>
      </div>
      <div class="tl-item" data-aos="fade-left">
        <div class="tl-content"><div class="tl-year">2015</div><h5>Wholesale Platform Launch</h5><p>Launched our B2B wholesale platform, enabling small and medium carriers to access our global network without complex infrastructure overhead.</p></div>
        <div class="tl-dot"></div>
      </div>
      <div class="tl-item" data-aos="fade-right">
        <div class="tl-content"><div class="tl-year">2017</div><h5>100-Country Milestone</h5><p>Expanded our termination reach to 100+ countries, establishing strategic Points of Presence (PoPs) across Asia, Europe, and the Americas.</p></div>
        <div class="tl-dot"></div>
      </div>
      <div class="tl-item" data-aos="fade-left">
        <div class="tl-content"><div class="tl-year">2019</div><h5>Hosted IP-PBX & Call Center Suite</h5><p>Introduced cloud-hosted PBX and full-featured call center suite, expanding from pure carrier services to enterprise communication solutions.</p></div>
        <div class="tl-dot"></div>
      </div>
      <div class="tl-item" data-aos="fade-right">
        <div class="tl-content"><div class="tl-year">2021</div><h5>Auto-Dialer Technology</h5><p>Launched advanced predictive auto-dialer enabling hundreds of simultaneous outbound calls, transforming call center productivity for our clients.</p></div>
        <div class="tl-dot"></div>
      </div>
      <div class="tl-item" data-aos="fade-left">
        <div class="tl-content"><div class="tl-year">2024</div><h5>150+ Countries & 500+ Partners</h5><p>Reached our biggest milestone yet — a global network covering 150+ countries serving over 500 active partners with billions of minutes annually.</p></div>
        <div class="tl-dot"></div>
      </div>
    </div>
  </div>
</section>

<!-- TEAM -->
<section id="team">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-7" data-aos="fade-up">
        <div class="section-badge"><i class="fas fa-users"></i> Our Team</div>
        <h2 class="section-title">The People Behind <span class="accent">First Step</span></h2>
        <p class="section-sub mx-auto">A diverse team of telecom veterans, engineers, and business development experts united by one mission.</p>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
        <div class="team-card">
          <div class="team-avatar">JC</div>
          <h5>James Chen</h5>
          <div class="role">CEO & Co-Founder</div>
          <p>15+ years in telecom. Former VP at a major Asia-Pacific carrier. Visionary behind FST's global expansion strategy.</p>
          <div class="team-social"><a href="#"><i class="fab fa-linkedin-in"></i></a><a href="#"><i class="fab fa-twitter"></i></a></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="80">
        <div class="team-card">
          <div class="team-avatar" style="background:linear-gradient(135deg,#8b5cf6,#06b6d4);">SK</div>
          <h5>Sarah Kim</h5>
          <div class="role">CTO & Co-Founder</div>
          <p>Deep expertise in VoIP architecture, SIP signaling, and distributed systems. Architect of our carrier-grade backbone.</p>
          <div class="team-social"><a href="#"><i class="fab fa-linkedin-in"></i></a><a href="#"><i class="fab fa-github"></i></a></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="160">
        <div class="team-card">
          <div class="team-avatar" style="background:linear-gradient(135deg,#10b981,#06b6d4);">MR</div>
          <h5>Marcus Reid</h5>
          <div class="role">VP of Sales</div>
          <p>Built carrier partnerships across EMEA and Americas. Expert in wholesale voice markets and enterprise communication sales.</p>
          <div class="team-social"><a href="#"><i class="fab fa-linkedin-in"></i></a><a href="#"><i class="fab fa-twitter"></i></a></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="240">
        <div class="team-card">
          <div class="team-avatar" style="background:linear-gradient(135deg,#f59e0b,#ef4444);">LP</div>
          <h5>Lisa Park</h5>
          <div class="role">Head of Operations</div>
          <p>Oversees 24/7 NOC operations, quality management, and partner onboarding. Ensures our 99.9% uptime SLA is always met.</p>
          <div class="team-social"><a href="#"><i class="fab fa-linkedin-in"></i></a><a href="#"><i class="fab fa-twitter"></i></a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WHY US -->
<section id="why">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6" data-aos="fade-right">
        <div class="section-badge"><i class="fas fa-star"></i> Why Choose Us</div>
        <h2 class="section-title">Built for <span class="accent">Reliability</span> at Scale</h2>
        <div class="divider"></div>
        <div class="why-card" data-aos="fade-up" data-aos-delay="100"><div class="why-num">1</div><div><h5>Single-Connection Simplicity</h5><p>Access our entire global network through one SIP trunk — no need to manage multiple carriers or complex routing tables.</p></div></div>
        <div class="why-card" data-aos="fade-up" data-aos-delay="180"><div class="why-num">2</div><div><h5>Transparent, Competitive Pricing</h5><p>Real-time rate updates, volume discounts, and prepaid flexibility ensure you always get the best value for every minute.</p></div></div>
        <div class="why-card" data-aos="fade-up" data-aos-delay="260"><div class="why-num">3</div><div><h5>24/7 Expert NOC Support</h5><p>Our Network Operations Center monitors traffic around the clock, proactively resolving issues before they impact your calls.</p></div></div>
        <div class="why-card" data-aos="fade-up" data-aos-delay="340"><div class="why-num">4</div><div><h5>Carrier-Grade Security</h5><p>End-to-end TLS/SRTP encryption, DDoS protection, and real-time fraud detection safeguard every call on our platform.</p></div></div>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
        <div style="background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.08);border-radius:24px;padding:44px;position:relative;overflow:hidden;">
          <div style="position:absolute;top:-40px;right:-40px;width:220px;height:220px;background:radial-gradient(circle,rgba(13,110,253,.12),transparent 70%);border-radius:50%;"></div>
          <h4 style="color:#fff;font-weight:700;margin-bottom:28px;">Platform at a Glance</h4>
          <div class="row g-3">
            <div class="col-6"><div style="background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.07);border-radius:14px;padding:20px;text-align:center;"><i class="fas fa-shield-halved" style="color:var(--cyan);font-size:1.5rem;margin-bottom:8px;display:block;"></i><div style="color:#fff;font-weight:600;font-size:.88rem;">Secure</div><div style="color:rgba(255,255,255,.4);font-size:.75rem;">TLS + SRTP</div></div></div>
            <div class="col-6"><div style="background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.07);border-radius:14px;padding:20px;text-align:center;"><i class="fas fa-bolt" style="color:#f59e0b;font-size:1.5rem;margin-bottom:8px;display:block;"></i><div style="color:#fff;font-weight:600;font-size:.88rem;">Fast</div><div style="color:rgba(255,255,255,.4);font-size:.75rem;">&lt;20ms latency</div></div></div>
            <div class="col-6"><div style="background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.07);border-radius:14px;padding:20px;text-align:center;"><i class="fas fa-infinity" style="color:#a78bfa;font-size:1.5rem;margin-bottom:8px;display:block;"></i><div style="color:#fff;font-weight:600;font-size:.88rem;">Scalable</div><div style="color:rgba(255,255,255,.4);font-size:.75rem;">Unlimited channels</div></div></div>
            <div class="col-6"><div style="background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.07);border-radius:14px;padding:20px;text-align:center;"><i class="fas fa-headset" style="color:#4ade80;font-size:1.5rem;margin-bottom:8px;display:block;"></i><div style="color:#fff;font-weight:600;font-size:.88rem;">Support</div><div style="color:rgba(255,255,255,.4);font-size:.75rem;">24/7 NOC</div></div></div>
          </div>
          <div class="row g-3 mt-1">
            <div class="col-4 text-center"><div style="padding:16px 8px;border-radius:12px;background:rgba(13,110,253,.08);border:1px solid rgba(13,110,253,.2);"><div style="font-family:'Poppins',sans-serif;font-size:1.6rem;font-weight:800;color:var(--cyan);">150+</div><div style="color:rgba(255,255,255,.45);font-size:.72rem;">Countries</div></div></div>
            <div class="col-4 text-center"><div style="padding:16px 8px;border-radius:12px;background:rgba(13,110,253,.08);border:1px solid rgba(13,110,253,.2);"><div style="font-family:'Poppins',sans-serif;font-size:1.6rem;font-weight:800;color:var(--cyan);">500+</div><div style="color:rgba(255,255,255,.45);font-size:.72rem;">Partners</div></div></div>
            <div class="col-4 text-center"><div style="padding:16px 8px;border-radius:12px;background:rgba(13,110,253,.08);border:1px solid rgba(13,110,253,.2);"><div style="font-family:'Poppins',sans-serif;font-size:1.6rem;font-weight:800;color:var(--cyan);">99.9%</div><div style="color:rgba(255,255,255,.45);font-size:.72rem;">Uptime</div></div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section id="cta">
  <div class="cta-bg-grad" id="ctaBg"></div>
  <div class="container">
    <div class="cta-inner" data-aos="zoom-in" data-aos-duration="800">
      <div class="section-badge mx-auto mb-3"><i class="fas fa-rocket"></i> Partner With Us</div>
      <h2>Ready to Join the <span style="background:linear-gradient(90deg,#0d6efd,#00c6ff);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">First Step</span> Family?</h2>
      <p>Become part of a global network of 500+ carriers and enterprises shaping the future of communications.</p>
      <div class="d-flex gap-3 justify-content-center flex-wrap">
        <a href="contact.php" class="btn-primary-grad"><i class="fas fa-paper-plane"></i> Contact Our Team</a>
        <a href="services.php" class="btn-outline-light-custom"><i class="fas fa-th-large"></i> Explore Services</a>
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
        <p style="color:rgba(255,255,255,.45);font-size:.9rem;margin-bottom:16px;">Subscribe for product updates and industry insights.</p>
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
    const e = document.getElementById('bannerBg'); if(e) e.style.transform=`translateY(${scrollY*.3}px)`;
    const c = document.getElementById('ctaBg'); if(c) c.style.transform=`translateY(${scrollY*.25}px)`;
  }, { passive: true });
</script>
</body>
</html>


