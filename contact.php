<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" href="logo.png" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact | First Step Technology</title>
  <meta name="description" content="Get in touch with First Step Technology. Request a demo, ask about our services, or reach our 24/7 support team in Hong Kong." />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="shared.css" />
  <style>
    /* PAGE BANNER */
    .page-banner { padding: 180px 0 100px; position: relative; overflow: hidden; }
    .page-banner-bg { position: absolute; inset: -60px; background: radial-gradient(ellipse 65% 55% at 40% 50%,rgba(13,110,253,.22) 0%,transparent 60%), radial-gradient(ellipse 50% 50% at 80% 30%,rgba(0,198,255,.12) 0%,transparent 55%), linear-gradient(180deg,#080f1e 0%,#0b1a3c 60%,#080f1e 100%); will-change:transform; }
    .page-banner-grid { position: absolute; inset: 0; background-image: linear-gradient(rgba(13,110,253,.06) 1px,transparent 1px), linear-gradient(90deg,rgba(13,110,253,.06) 1px,transparent 1px); background-size: 60px 60px; mask-image: radial-gradient(ellipse at 40% 50%,black 30%,transparent 70%); animation: gridDrift 20s linear infinite; }
    @keyframes gridDrift{from{transform:translateY(0);}to{transform:translateY(60px);}}
    .page-banner-content { position: relative; z-index: 2; }
    .breadcrumb-nav { display: flex; align-items: center; gap: 8px; font-size: .85rem; color: rgba(255,255,255,.4); margin-bottom: 18px; }
    .breadcrumb-nav a { color: var(--cyan); }
    .page-banner h1 { font-family: 'Poppins',sans-serif; font-size: clamp(2.4rem,5vw,4rem); font-weight: 800; color: #fff; line-height: 1.15; margin-bottom: 20px; }
    .page-banner h1 .highlight { background: linear-gradient(90deg,var(--accent),var(--cyan)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    .page-banner p { font-size: 1.1rem; color: rgba(255,255,255,.6); line-height: 1.8; max-width: 580px; }

    /* CONTACT MAIN */
    #contact { padding: 100px 0; background: #0b1120; }

    /* Info Cards */
    .info-card { background: rgba(255,255,255,.03); border: 1px solid rgba(255,255,255,.08); border-radius: 18px; padding: 28px 24px; display: flex; align-items: center; gap: 18px; margin-bottom: 16px; transition: all .3s; }
    .info-card:hover { border-color: rgba(13,110,253,.3); transform: translateX(6px); background: rgba(13,110,253,.04); }
    .info-icon { width: 54px; height: 54px; flex-shrink: 0; background: linear-gradient(135deg,rgba(13,110,253,.2),rgba(0,198,255,.1)); border: 1px solid rgba(13,110,253,.25); border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; color: var(--cyan); }
    .info-card h6 { color: rgba(255,255,255,.5); font-size: .78rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 4px; }
    .info-card p { color: #fff; font-weight: 500; margin: 0; font-size: .95rem; }
    .info-card a { color: #fff; transition: color .3s; }
    .info-card a:hover { color: var(--cyan); }

    /* Form */
    .form-wrap { background: rgba(255,255,255,.03); border: 1px solid rgba(255,255,255,.08); border-radius: 24px; padding: 48px; }
    .btn-submit { width: 100%; background: linear-gradient(135deg,#0d6efd,#00c6ff); border: none; color: #fff; padding: 16px; border-radius: 12px; font-weight: 700; font-size: 1rem; transition: all .3s; box-shadow: 0 6px 24px rgba(13,110,253,.3); cursor: pointer; }
    .btn-submit:hover { transform: translateY(-2px); box-shadow: 0 12px 36px rgba(13,110,253,.45); }

    /* Office Hours Card */
    .hours-card { background: rgba(255,255,255,.03); border: 1px solid rgba(255,255,255,.08); border-radius: 18px; padding: 28px; margin-top: 20px; }
    .hours-row { display: flex; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid rgba(255,255,255,.06); font-size: .9rem; }
    .hours-row:last-child { border-bottom: none; }
    .hours-row .day { color: rgba(255,255,255,.6); }
    .hours-row .time { color: var(--cyan); font-weight: 600; }
    .hours-row .always { color: #22c55e; font-weight: 600; display: flex; align-items: center; gap: 6px; }
    .live-dot { width: 8px; height: 8px; border-radius: 50%; background: #22c55e; animation: pulse 2s ease-in-out infinite; }
    @keyframes pulse{0%,100%{opacity:1;}50%{opacity:.3;}}

    /* Social strip */
    .social-strip { display: flex; gap: 12px; margin-top: 20px; }
    .soc-card { flex: 1; background: rgba(255,255,255,.03); border: 1px solid rgba(255,255,255,.07); border-radius: 14px; padding: 16px; text-align: center; transition: all .3s; color: rgba(255,255,255,.5); }
    .soc-card:hover { color: #fff; transform: translateY(-4px); }
    .soc-card i { font-size: 1.3rem; display: block; margin-bottom: 6px; }
    .soc-card span { font-size: .75rem; }
    .soc-card.linkedin:hover { background: rgba(10,102,194,.15); border-color: rgba(10,102,194,.3); color: #0a66c2; }
    .soc-card.twitter:hover { background: rgba(29,161,242,.12); border-color: rgba(29,161,242,.3); color: #1da1f2; }
    .soc-card.whatsapp:hover { background: rgba(37,211,102,.12); border-color: rgba(37,211,102,.3); color: #25d366; }
    .soc-card.facebook:hover { background: rgba(24,119,242,.12); border-color: rgba(24,119,242,.3); color: #1877f2; }

    /* FAQ */
    #faq { padding: 100px 0; background: #080f1e; }
    .faq-item { background: rgba(255,255,255,.03); border: 1px solid rgba(255,255,255,.07); border-radius: 14px; margin-bottom: 12px; overflow: hidden; }
    .faq-q { display: flex; justify-content: space-between; align-items: center; padding: 20px 24px; cursor: pointer; color: #fff; font-weight: 600; font-size: .96rem; transition: background .3s; }
    .faq-q:hover { background: rgba(13,110,253,.06); }
    .faq-q .faq-icon { color: var(--cyan); transition: transform .3s; font-size: .9rem; flex-shrink: 0; }
    .faq-q.open .faq-icon { transform: rotate(45deg); }
    .faq-a { max-height: 0; overflow: hidden; transition: max-height .4s ease, padding .3s; }
    .faq-a.open { max-height: 200px; }
    .faq-a-inner { padding: 0 24px 20px; color: rgba(255,255,255,.55); font-size: .93rem; line-height: 1.75; }

    /* Map placeholder */
    #map-section { padding: 80px 0; background: #0b1120; }
    .map-wrap { border-radius: 20px; overflow: hidden; border: 1px solid rgba(255,255,255,.08); background: linear-gradient(135deg,#0d2a5e,#0a1f45); height: 320px; display: flex; align-items: center; justify-content: center; flex-direction: column; gap: 16px; position: relative; }
    .map-wrap::before { content:''; position:absolute; inset:0; background-image: linear-gradient(rgba(13,110,253,.08) 1px,transparent 1px), linear-gradient(90deg,rgba(13,110,253,.08) 1px,transparent 1px); background-size: 40px 40px; }
    .map-pin { width: 60px; height: 60px; background: linear-gradient(135deg,var(--accent),var(--cyan)); border-radius: 50% 50% 50% 0; transform: rotate(-45deg); display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 30px rgba(13,110,253,.4); animation: mapBounce 2s ease-in-out infinite; position: relative; z-index: 1; }
    .map-pin i { transform: rotate(45deg); color: #fff; font-size: 1.3rem; }
    @keyframes mapBounce{0%,100%{transform:rotate(-45deg) translateY(0);}50%{transform:rotate(-45deg) translateY(-8px);}}
    .map-label { color: #fff; font-weight: 700; font-size: 1.1rem; position: relative; z-index: 1; }
    .map-sub { color: rgba(255,255,255,.5); font-size: .88rem; position: relative; z-index: 1; }

    /* CTA */
    #cta { padding: 100px 0; position: relative; overflow: hidden; }
    .cta-bg { position: absolute; inset: -80px; background: radial-gradient(ellipse 80% 60% at 30% 60%,rgba(13,110,253,.35) 0%,transparent 60%), radial-gradient(ellipse 60% 60% at 80% 30%,rgba(0,198,255,.2) 0%,transparent 55%), #050d1a; will-change: transform; }
    .cta-inner { position: relative; z-index: 2; text-align: center; }
    .cta-inner h2 { font-family:'Poppins',sans-serif; font-size:clamp(2rem,4vw,3rem); font-weight:800; color:#fff; margin-bottom:20px; }
    .cta-inner p { color:rgba(255,255,255,.6); font-size:1.05rem; max-width:500px; margin:0 auto 32px; }

    @media(max-width:768px){ .form-wrap{padding:28px 20px;} .social-strip{flex-wrap:wrap;} .soc-card{min-width:calc(50% - 6px);} }
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
        <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
        <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
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
    <div class="breadcrumb-nav"><a href="index.php">Home</a><span>/</span><span>Contact</span></div>
    <h1>Let's <span class="highlight">Start the Conversation</span></h1>
    <p>Have questions about our services, want a live demo, or ready to get started? Our team is available 24/7 and typically responds within one business hour.</p>
  </div>
</section>

<!-- CONTACT MAIN -->
<section id="contact">
  <div class="container">
    <div class="row g-5">

      <!-- Left: Info -->
      <div class="col-lg-5" data-aos="fade-right" data-aos-duration="900">
        <h4 style="color:#fff;font-weight:700;margin-bottom:28px;">Contact Information</h4>

        <div class="info-card">
          <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
          <div><h6>Headquarters</h6><p>Hong Kong SAR, China</p></div>
        </div>
        <div class="info-card">
          <div class="info-icon"><i class="fas fa-envelope"></i></div>
          <div><h6>General Inquiries</h6><p><a href="mailto:info@firststeptechnology.com">info@firststeptechnology.com</a></p></div>
        </div>
        <div class="info-card">
          <div class="info-icon"><i class="fas fa-headset"></i></div>
          <div><h6>Technical Support</h6><p><a href="mailto:support@firststeptechnology.com">support@firststeptechnology.com</a></p></div>
        </div>
        <div class="info-card">
          <div class="info-icon"><i class="fas fa-briefcase"></i></div>
          <div><h6>Sales &amp; Partnerships</h6><p><a href="mailto:sales@firststeptechnology.com">sales@firststeptechnology.com</a></p></div>
        </div>

        <!-- Office Hours -->
        <div class="hours-card">
          <h6 style="color:#fff;font-weight:600;margin-bottom:16px;"><i class="fas fa-clock" style="color:var(--cyan);margin-right:8px;"></i>NOC &amp; Support Hours</h6>
          <div class="hours-row"><span class="day">Technical NOC</span><span class="always"><span class="live-dot"></span>24 / 7 / 365</span></div>
          <div class="hours-row"><span class="day">Sales Team</span><span class="time">Mon – Fri, 9am – 7pm HKT</span></div>
          <div class="hours-row"><span class="day">Emergency Line</span><span class="always"><span class="live-dot"></span>Always Available</span></div>
          <div class="hours-row"><span class="day">Response Time</span><span class="time">&lt; 1 Business Hour</span></div>
        </div>

        <!-- Social -->
        <div class="social-strip">
          <a href="#" class="soc-card linkedin"><i class="fab fa-linkedin-in"></i><span>LinkedIn</span></a>
          <a href="#" class="soc-card twitter"><i class="fab fa-twitter"></i><span>Twitter</span></a>
          <a href="#" class="soc-card whatsapp"><i class="fab fa-whatsapp"></i><span>WhatsApp</span></a>
          <a href="#" class="soc-card facebook"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
        </div>
      </div>

      <!-- Right: Form -->
      <div class="col-lg-7" data-aos="fade-left" data-aos-duration="900" data-aos-delay="150">
        <div class="form-wrap">
          <h4 style="color:#fff;font-weight:700;margin-bottom:8px;">Send Us a Message</h4>
          <p style="color:rgba(255,255,255,.5);font-size:.9rem;margin-bottom:28px;">Fill in the form below and a member of our team will get back to you shortly.</p>
          <form id="contactForm">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">First Name <span style="color:#ef4444;">*</span></label>
                <input type="text" class="form-control" placeholder="John" required />
              </div>
              <div class="col-md-6">
                <label class="form-label">Last Name <span style="color:#ef4444;">*</span></label>
                <input type="text" class="form-control" placeholder="Doe" required />
              </div>
              <div class="col-md-6">
                <label class="form-label">Email Address <span style="color:#ef4444;">*</span></label>
                <input type="email" class="form-control" placeholder="john@company.com" required />
              </div>
              <div class="col-md-6">
                <label class="form-label">Phone Number</label>
                <input type="tel" class="form-control" placeholder="+1 234 567 8901" />
              </div>
              <div class="col-md-6">
                <label class="form-label">Company Name</label>
                <input type="text" class="form-control" placeholder="Your Company Ltd." />
              </div>
              <div class="col-md-6">
                <label class="form-label">Country</label>
                <input type="text" class="form-control" placeholder="e.g. United States" />
              </div>
              <div class="col-12">
                <label class="form-label">Service Interest <span style="color:#ef4444;">*</span></label>
                <select class="form-select" required>
                  <option value="">Select a service…</option>
                  <option>Retail IP Voice Services</option>
                  <option>Wholesale Platform</option>
                  <option>Hosted IP-PBX</option>
                  <option>DID &amp; Toll-Free Numbers</option>
                  <option>Call Center Suite</option>
                  <option>Auto-Dialer Technology</option>
                  <option>Partnership / Reseller Inquiry</option>
                  <option>General / Technical Question</option>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label">Estimated Monthly Minutes</label>
                <select class="form-select">
                  <option value="">Select range…</option>
                  <option>Under 100K minutes</option>
                  <option>100K – 500K minutes</option>
                  <option>500K – 1M minutes</option>
                  <option>1M – 5M minutes</option>
                  <option>5M+ minutes</option>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label">Message <span style="color:#ef4444;">*</span></label>
                <textarea class="form-control" rows="5" placeholder="Tell us about your requirements, current setup, and any specific goals or challenges…" required></textarea>
              </div>
              <div class="col-12">
                <div style="display:flex;align-items:flex-start;gap:10px;margin-bottom:16px;">
                  <input type="checkbox" id="agree" style="width:18px;height:18px;margin-top:2px;accent-color:var(--accent);" required />
                  <label for="agree" style="color:rgba(255,255,255,.5);font-size:.85rem;line-height:1.6;cursor:pointer;">I agree to the <a href="#" style="color:var(--cyan);">Privacy Policy</a> and consent to First Step Technology contacting me regarding my inquiry.</label>
                </div>
                <button type="submit" class="btn-submit">
                  <i class="fas fa-paper-plane me-2"></i> Send Message
                </button>
              </div>
            </div>
          </form>
          <!-- Success -->
          <div id="formSuccess" style="display:none;margin-top:24px;padding:28px;background:rgba(34,197,94,.08);border:1px solid rgba(34,197,94,.25);border-radius:16px;text-align:center;">
            <div style="width:64px;height:64px;background:rgba(34,197,94,.15);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 16px;"><i class="fas fa-check" style="color:#22c55e;font-size:1.5rem;"></i></div>
            <h5 style="color:#fff;font-weight:700;margin-bottom:8px;">Message Sent Successfully!</h5>
            <p style="color:rgba(255,255,255,.55);font-size:.9rem;margin:0;">Our team will review your inquiry and get back to you within one business hour. We look forward to speaking with you.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MAP PLACEHOLDER -->
<section id="map-section">
  <div class="container" data-aos="fade-up">
    <div class="map-wrap">
      <div class="map-pin"><i class="fas fa-building"></i></div>
      <div class="map-label">First Step Technology</div>
      <div class="map-sub">Hong Kong SAR, China</div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section id="faq">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-7" data-aos="fade-up">
        <div class="section-badge"><i class="fas fa-question-circle"></i> FAQ</div>
        <h2 class="section-title">Frequently Asked <span class="accent">Questions</span></h2>
        <p class="section-sub mx-auto">Quick answers to the most common questions from new and existing partners.</p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-9" data-aos="fade-up">

        <div class="faq-item">
          <div class="faq-q" onclick="toggleFaq(this)">
            How quickly can I get started with your services?
            <i class="fas fa-plus faq-icon"></i>
          </div>
          <div class="faq-a"><div class="faq-a-inner">Account registration and KYC verification typically takes 24 hours. Once approved, our team will provide your SIP credentials and assist with integration. Most partners are making live calls within 48 hours of signing up.</div></div>
        </div>

        <div class="faq-item">
          <div class="faq-q" onclick="toggleFaq(this)">
            Do you offer a trial or demo before committing?
            <i class="fas fa-plus faq-icon"></i>
          </div>
          <div class="faq-a"><div class="faq-a-inner">Yes — we offer a guided live demo for all of our products, and qualified partners can request a trial SIP trunk with limited minutes to test call quality to their key destinations. Contact our sales team to arrange this.</div></div>
        </div>

        <div class="faq-item">
          <div class="faq-q" onclick="toggleFaq(this)">
            What billing models do you support?
            <i class="fas fa-plus faq-icon"></i>
          </div>
          <div class="faq-a"><div class="faq-a-inner">We support both prepaid (credit-based) and postpaid (invoice-based, monthly) billing. Prepaid accounts offer immediate provisioning, while postpaid is available to established partners after a credit check. We support multi-currency billing and automated invoicing.</div></div>
        </div>

        <div class="faq-item">
          <div class="faq-q" onclick="toggleFaq(this)">
            What codecs and protocols do you support?
            <i class="fas fa-plus faq-icon"></i>
          </div>
          <div class="faq-a"><div class="faq-a-inner">Our network supports SIP/SDP for signaling and G.711 (PCMU/PCMA), G.722, G.729, and OPUS for audio. We support both UDP and TCP transport, as well as TLS/SRTP for encrypted calls. Our platform is compatible with all major PBX and softswitch systems.</div></div>
        </div>

        <div class="faq-item">
          <div class="faq-q" onclick="toggleFaq(this)">
            How does your fraud detection work?
            <i class="fas fa-plus faq-icon"></i>
          </div>
          <div class="faq-a"><div class="faq-a-inner">Our platform includes real-time traffic analysis that detects anomalies such as sudden call volume spikes, calls to high-risk destinations, or unusual call patterns. Suspicious traffic is automatically flagged and can trigger automatic blocking or alerts. Partners can set custom spend limits and alert thresholds in the portal.</div></div>
        </div>

        <div class="faq-item">
          <div class="faq-q" onclick="toggleFaq(this)">
            Do you provide SLAs for uptime?
            <i class="fas fa-plus faq-icon"></i>
          </div>
          <div class="faq-a"><div class="faq-a-inner">Yes. All partners receive a 99.9% monthly uptime SLA backed by our redundant global infrastructure with automatic failover. Enterprise and wholesale partners can discuss enhanced SLAs with dedicated capacity. Our 24/7 NOC proactively monitors all traffic and responds to incidents in real time.</div></div>
        </div>

        <div class="faq-item">
          <div class="faq-q" onclick="toggleFaq(this)">
            Can I white-label your services for my customers?
            <i class="fas fa-plus faq-icon"></i>
          </div>
          <div class="faq-a"><div class="faq-a-inner">Absolutely. Our Wholesale Platform includes a white-label customer management portal that you can brand with your own logo, domain, and color scheme. Your end customers will never see First Step Technology branding. Contact our partnerships team for details on our reseller program.</div></div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section id="cta">
  <div class="cta-bg" id="ctaBg"></div>
  <div class="container">
    <div class="cta-inner" data-aos="zoom-in" data-aos-duration="800">
      <div class="section-badge mx-auto mb-3"><i class="fas fa-rocket"></i> Join 500+ Partners</div>
      <h2>Global Voice Infrastructure, <span style="background:linear-gradient(90deg,#0d6efd,#00c6ff);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Simplified</span></h2>
      <p>Everything your business needs to communicate globally — from a single trusted provider.</p>
      <div class="d-flex gap-3 justify-content-center flex-wrap">
        <a href="services.php" class="btn-primary-grad"><i class="fas fa-th-large"></i> Explore Services</a>
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
      <div class="col-6 col-lg-2"><h6 class="footer-heading">Services</h6><ul class="footer-links"><li><a href="services.php">Retail IP Voice</a></li><li><a href="services.php">Wholesale Platform</a></li><li><a href="services.php">Hosted IP-PBX</a></li><li><a href="services.php">DID &amp; Toll-Free</a></li><li><a href="services.php">Call Center Suite</a></li></ul></div>
      <div class="col-lg-4"><h6 class="footer-heading">Stay Updated</h6><p style="color:rgba(255,255,255,.45);font-size:.9rem;margin-bottom:16px;">Subscribe for product updates and industry insights.</p><div class="d-flex gap-2"><input type="email" class="form-control" placeholder="your@email.com" style="flex:1;" /><button style="background:linear-gradient(135deg,#0d6efd,#00c6ff);border:none;color:#fff;padding:0 20px;border-radius:12px;font-weight:600;white-space:nowrap;cursor:pointer;">Subscribe</button></div></div>
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
    p('bannerBg',.3); p('ctaBg',.25);
  }, { passive: true });

  // FAQ accordion
  function toggleFaq(btn) {
    const isOpen = btn.classList.contains('open');
    document.querySelectorAll('.faq-q').forEach(q => { q.classList.remove('open'); q.nextElementSibling.classList.remove('open'); });
    if (!isOpen) { btn.classList.add('open'); btn.nextElementSibling.classList.add('open'); }
  }

  // Contact form
  document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const btn = this.querySelector('.btn-submit');
    btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Sending…';
    btn.disabled = true;
    setTimeout(() => {
      this.style.display = 'none';
      document.getElementById('formSuccess').style.display = 'block';
      document.getElementById('formSuccess').scrollIntoView({ behavior: 'smooth', block: 'center' });
    }, 1500);
  });
</script>
</body>
</html>

