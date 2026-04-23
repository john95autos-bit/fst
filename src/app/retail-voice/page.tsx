import Link from 'next/link';
import type { Metadata } from 'next';

export const metadata: Metadata = {
  title: 'First Step Technology - Retail Voice',
};

export default function Page() {
  return (
    <main>
      {/*  HERO  */}
<section className="svc-hero">
  <div className="svc-hero-bg" id="heroBg"></div>
  <div className="svc-hero-grid"></div>
  <div className="container">
    <div className="row align-items-center g-5">
      <div className="col-lg-6 hero-content" data-aos="fade-right" data-aos-duration="900">
        <nav aria-label="breadcrumb" style={{ marginBottom: '18px' }}>
          <div style={{ display: 'flex', alignItems: 'center', gap: '8px', fontSize: '.85rem', color: 'rgba(255,255,255,.4)' }}>
            <Link href="/" style={{ color: '#00c6ff' }}>Home</Link><span>/</span>
            <Link href="/services" style={{ color: '#00c6ff' }}>Services</Link><span>/</span>
            <span>Retail IP Voice</span>
          </div>
        </nav>
        <div className="svc-badge"><i className="fas fa-phone-volume fa-xs"></i> Retail IP Voice Services</div>
        <h1 style={{ fontFamily: "'Poppins',sans-serif", fontSize: 'clamp(2.4rem,5vw,4rem)', fontWeight: '800', color: '#fff', lineHeight: '1.12', marginBottom: '22px' }}>
          Crystal-Clear Voice<br /><span style={{ background: 'linear-gradient(90deg,#0d6efd,#00c6ff)', WebkitBackgroundClip: 'text', WebkitTextFillColor: 'transparent', backgroundClip: 'text' }}>to Any Destination</span>
        </h1>
        <p style={{ fontSize: '1.05rem', color: 'rgba(255,255,255,.62)', lineHeight: '1.8', marginBottom: '32px' }}>
          Access high-quality worldwide voice termination through a single IP connection. Our retail voice service leverages a carrier-grade global backbone to deliver every call with ultra-low latency, superior clarity, and competitive per-minute rates.
        </p>
        <div className="d-flex flex-wrap gap-3 mb-4">
          <Link href="/contact" className="btn-primary-grad"><i className="fas fa-paper-plane"></i> Get Started Free</Link>
          <Link href="#features" className="btn-outline-light-custom"><i className="fas fa-th-large"></i> See Features</Link>
        </div>
        <div>
          <span className="hero-tag"><i className="fas fa-check" style={{ color: '#22c55e' }}></i> 150+ Countries</span>
          <span className="hero-tag"><i className="fas fa-check" style={{ color: '#22c55e' }}></i> 99.9% Uptime SLA</span>
          <span className="hero-tag"><i className="fas fa-check" style={{ color: '#22c55e' }}></i> Prepaid & Postpaid</span>
          <span className="hero-tag"><i className="fas fa-check" style={{ color: '#22c55e' }}></i> HD Voice</span>
        </div>
      </div>
      <div className="col-lg-6" data-aos="fade-left" data-aos-delay="200">
        <div style={{ background: 'rgba(255,255,255,.04)', border: '1px solid rgba(255,255,255,.1)', borderRadius: '24px', padding: '36px', backdropFilter: 'blur(20px)' }}>
          <div style={{ display: 'flex', alignItems: 'center', gap: '14px', marginBottom: '24px' }}>
            <div style={{ width: '52px', height: '52px', background: 'linear-gradient(135deg,#0d6efd,#00c6ff)', borderRadius: '14px', display: 'flex', alignItems: 'center', justifyContent: 'center', fontSize: '1.4rem' }}><i className="fas fa-phone-volume text-white"></i></div>
            <div><div style={{ color: '#fff', fontWeight: '700', fontSize: '1.05rem' }}>Live Network Status</div><div style={{ color: '#22c55e', fontSize: '.82rem', display: 'flex', alignItems: 'center', gap: '5px' }}><span style={{ width: '7px', height: '7px', background: '#22c55e', borderRadius: '50%', display: 'inline-block', animation: 'pulse 2s infinite' }}></span>All Systems Operational</div></div>
          </div>
          <div style={{ display: 'flex', flexDirection: 'column', gap: '14px' }}>
            <div style={{ background: 'rgba(255,255,255,.04)', borderRadius: '12px', padding: '16px' }}>
              <div style={{ display: 'flex', justifyContent: 'space-between', marginBottom: '8px' }}><span style={{ color: 'rgba(255,255,255,.6)', fontSize: '.82rem' }}>Global Uptime</span><span style={{ color: '#00c6ff', fontSize: '.82rem', fontWeight: '600' }}>99.9%</span></div>
              <div style={{ height: '5px', background: 'rgba(255,255,255,.08)', borderRadius: '3px' }}><div style={{ width: '99.9%', height: '100%', background: 'linear-gradient(90deg,#0d6efd,#00c6ff)', borderRadius: '3px' }}></div></div>
            </div>
            <div style={{ background: 'rgba(255,255,255,.04)', borderRadius: '12px', padding: '16px' }}>
              <div style={{ display: 'flex', justifyContent: 'space-between', marginBottom: '8px' }}><span style={{ color: 'rgba(255,255,255,.6)', fontSize: '.82rem' }}>Average Latency</span><span style={{ color: '#00c6ff', fontSize: '.82rem', fontWeight: '600' }}>&lt;18ms</span></div>
              <div style={{ height: '5px', background: 'rgba(255,255,255,.08)', borderRadius: '3px' }}><div style={{ width: '95%', height: '100%', background: 'linear-gradient(90deg,#0d6efd,#00c6ff)', borderRadius: '3px' }}></div></div>
            </div>
            <div style={{ background: 'rgba(255,255,255,.04)', borderRadius: '12px', padding: '16px' }}>
              <div style={{ display: 'flex', justifyContent: 'space-between', marginBottom: '8px' }}><span style={{ color: 'rgba(255,255,255,.6)', fontSize: '.82rem' }}>Call Quality (MOS)</span><span style={{ color: '#00c6ff', fontSize: '.82rem', fontWeight: '600' }}>4.8 / 5.0</span></div>
              <div style={{ height: '5px', background: 'rgba(255,255,255,.08)', borderRadius: '3px' }}><div style={{ width: '96%', height: '100%', background: 'linear-gradient(90deg,#0d6efd,#00c6ff)', borderRadius: '3px' }}></div></div>
            </div>
          </div>
          <div style={{ display: 'grid', gridTemplateColumns: 'repeat(3,1fr)', gap: '12px', marginTop: '20px' }}>
            <div style={{ background: 'rgba(13,110,253,.1)', border: '1px solid rgba(13,110,253,.2)', borderRadius: '12px', padding: '14px', textAlign: 'center' }}><div style={{ fontWeight: '800', fontSize: '1.3rem', color: '#00c6ff' }}>150+</div><div style={{ fontSize: '.72rem', color: 'rgba(255,255,255,.45)', marginTop: '3px' }}>Countries</div></div>
            <div style={{ background: 'rgba(13,110,253,.1)', border: '1px solid rgba(13,110,253,.2)', borderRadius: '12px', padding: '14px', textAlign: 'center' }}><div style={{ fontWeight: '800', fontSize: '1.3rem', color: '#00c6ff' }}>1B+</div><div style={{ fontSize: '.72rem', color: 'rgba(255,255,255,.45)', marginTop: '3px' }}>Min/Year</div></div>
            <div style={{ background: 'rgba(13,110,253,.1)', border: '1px solid rgba(13,110,253,.2)', borderRadius: '12px', padding: '14px', textAlign: 'center' }}><div style={{ fontWeight: '800', fontSize: '1.3rem', color: '#00c6ff' }}>24/7</div><div style={{ fontSize: '.72rem', color: 'rgba(255,255,255,.45)', marginTop: '3px' }}>NOC Support</div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{/*  FEATURES  */}
<section id="features" className="section-alt" style={{ padding: '100px 0' }}>
  <div className="container">
    <div className="row justify-content-center text-center mb-5">
      <div className="col-lg-7" data-aos="fade-up">
        <div className="section-badge"><i className="fas fa-th-large"></i> Features</div>
        <h2 className="section-title">Everything You Need for <span className="accent">Global Voice</span></h2>
        <p className="section-sub mx-auto">One connection, every destination, unbeatable quality.</p>
      </div>
    </div>
    <div className="row g-4">
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div className="feat-card"><div className="feat-icon"><i className="fas fa-globe"></i></div><h5>150+ Country Coverage</h5><p>Terminate calls to any destination globally with a single SIP trunk connection. No need to manage multiple carriers or routing tables.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="60"><div className="feat-card"><div className="feat-icon"><i className="fas fa-wave-square"></i></div><h5>HD Voice Quality</h5><p>Wideband audio codecs — G.722, OPUS, and G.711 — deliver crystal-clear, natural-sounding voice on every call, anywhere in the world.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120"><div className="feat-card"><div className="feat-icon"><i className="fas fa-chart-line"></i></div><h5>Real-Time Rate Engine</h5><p>Dynamic per-minute rates updated automatically across all destinations. Our LCR engine routes every call via the optimal path for cost and quality.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="180"><div className="feat-card"><div className="feat-icon"><i className="fas fa-wallet"></i></div><h5>Prepaid & Postpaid Billing</h5><p>Flexible billing models to match any business cash flow. Prepaid accounts are provisioned instantly; postpaid monthly invoicing for established partners.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240"><div className="feat-card"><div className="feat-icon"><i className="fas fa-file-invoice"></i></div><h5>CDR & Analytics Portal</h5><p>Detailed call data records, real-time traffic dashboards, ASR/ACD/NER metrics, and exportable reports via web portal or REST API.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300"><div className="feat-card"><div className="feat-icon"><i className="fas fa-shield-halved"></i></div><h5>Fraud Protection</h5><p>Real-time anomaly detection, automatic spend limits, and DDoS protection secure every call. Alerts trigger instantly on suspicious traffic patterns.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="360"><div className="feat-card"><div className="feat-icon"><i className="fas fa-code"></i></div><h5>REST API Access</h5><p>Programmatically manage your account, pull CDRs, update routing rules, and check balances — all via our fully documented REST API.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="420"><div className="feat-card"><div className="feat-icon"><i className="fas fa-rotate"></i></div><h5>Automatic Failover</h5><p>Redundant Points of Presence across Asia, Europe, and the Americas ensure calls reroute automatically if any node experiences an issue.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="480"><div className="feat-card"><div className="feat-icon"><i className="fas fa-headset"></i></div><h5>24/7 NOC Support</h5><p>Our Network Operations Center monitors your traffic around the clock and proactively resolves issues before they affect your end users.</p></div></div>
    </div>
  </div>
</section>

{/*  STATS  */}
<section className="section-dark" style={{ padding: '80px 0', position: 'relative', overflow: 'hidden' }}>
  <div style={{ position: 'absolute', inset: '-60px', background: 'radial-gradient(ellipse 90% 70% at 50% 50%,rgba(13,110,253,.15) 0%,transparent 65%)', willChange: 'transform' }} id="statsBg"></div>
  <div className="container position-relative" style={{ zIndex: '2' }}>
    <div className="row g-4 text-center">
      <div className="col-6 col-lg-3" data-aos="zoom-in"><div className="mini-stat"><div className="num" data-count="150">0</div><div>+</div><div className="lbl">Countries Reached</div></div></div>
      <div className="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="80"><div className="mini-stat"><div className="num" data-count="18">0</div><div>ms avg</div><div className="lbl">Latency</div></div></div>
      <div className="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="160"><div className="mini-stat"><div className="num" data-count="99">0</div><div>.9%</div><div className="lbl">Uptime SLA</div></div></div>
      <div className="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="240"><div className="mini-stat"><div className="num" data-count="1">0</div><div>B+ min/yr</div><div className="lbl">Minutes Terminated</div></div></div>
    </div>
  </div>
</section>

{/*  HOW IT WORKS  */}
<section className="section-alt" style={{ padding: '100px 0' }}>
  <div className="container">
    <div className="row align-items-center g-5">
      <div className="col-lg-6" data-aos="fade-right">
        <div className="section-badge"><i className="fas fa-sitemap"></i> How It Works</div>
        <h2 className="section-title">From Sign-Up to <span className="accent">First Call</span></h2>
        <div className="divider"></div>
        <div className="how-step"><div className="how-num">1</div><div><h5>Create Your Account</h5><p>Register online, submit KYC documents, and our team verifies your account within 24 hours. No upfront hardware required.</p></div></div>
        <div className="how-step"><div className="how-num">2</div><div><h5>Fund & Configure</h5><p>Add prepaid credit or set up postpaid billing. Receive your SIP credentials and configure your PBX or softswitch in minutes.</p></div></div>
        <div className="how-step"><div className="how-num">3</div><div><h5>Test Call Quality</h5><p>Make test calls to your key destinations. Our team assists with codec and routing optimization to ensure peak performance.</p></div></div>
        <div className="how-step"><div className="how-num">4</div><div><h5>Go Live & Monitor</h5><p>Start terminating real traffic. Monitor quality, spend, and CDRs in real-time via the web portal or API dashboard.</p></div></div>
      </div>
      <div className="col-lg-6" data-aos="fade-left" data-aos-delay="150">
        <div style={{ background: 'rgba(255,255,255,.03)', border: '1px solid rgba(255,255,255,.08)', borderRadius: '22px', padding: '40px' }}>
          <h5 style={{ color: '#fff', fontWeight: '700', marginBottom: '24px' }}><i className="fas fa-check-circle" style={{ color: 'var(--cyan)', marginRight: '10px' }}></i>What's Included</h5>
          <ul className="check-list">
            <li><i className="fas fa-check-circle"></i> Single SIP trunk with global termination</li>
            <li><i className="fas fa-check-circle"></i> Dedicated account manager</li>
            <li><i className="fas fa-check-circle"></i> Real-time rate table access</li>
            <li><i className="fas fa-check-circle"></i> CDR export (CSV / API)</li>
            <li><i className="fas fa-check-circle"></i> Fraud monitoring & spend limits</li>
            <li><i className="fas fa-check-circle"></i> 99.9% uptime SLA</li>
            <li><i className="fas fa-check-circle"></i> 24/7 NOC technical support</li>
            <li><i className="fas fa-check-circle"></i> Automatic failover routing</li>
            <li><i className="fas fa-check-circle"></i> Multi-codec support (G.711/G.722/OPUS)</li>
            <li><i className="fas fa-check-circle"></i> TLS/SRTP encryption option</li>
          </ul>
          <div style={{ marginTop: '28px', padding: '20px', background: 'rgba(13,110,253,.1)', border: '1px solid rgba(13,110,253,.25)', borderRadius: '14px' }}>
            <div style={{ color: '#fff', fontWeight: '600', marginBottom: '6px' }}>⚡ Quick Setup</div>
            <div style={{ color: 'rgba(255,255,255,.55)', fontSize: '.88rem', lineHeight: '1.6' }}>Most partners are live within <strong style={{ color: '#00c6ff' }}>48 hours</strong> of account approval — no hardware procurement, no lengthy integrations.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{/*  USE CASES  */}
<section className="section-dark" style={{ padding: '100px 0' }}>
  <div className="container">
    <div className="row justify-content-center text-center mb-5"><div className="col-lg-7" data-aos="fade-up"><div className="section-badge"><i className="fas fa-users"></i> Use Cases</div><h2 className="section-title">Who Uses <span className="accent">Retail IP Voice?</span></h2><p className="section-sub mx-auto">Our retail voice service powers businesses across multiple industries that need reliable global calling.</p></div></div>
    <div className="row g-3">
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div className="use-card"><div className="use-icon"><i className="fas fa-credit-card"></i></div><div><h6>Calling Card Providers</h6><p>Power prepaid calling cards and apps with high-quality international termination at rates that keep you competitive in the market.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="60"><div className="use-card"><div className="use-icon"><i className="fas fa-building"></i></div><div><h6>SMB VoIP Providers</h6><p>Offer affordable international calling to small business customers without building your own termination infrastructure.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120"><div className="use-card"><div className="use-icon"><i className="fas fa-store"></i></div><div><h6>International Resellers</h6><p>Resell global voice termination to your own customer base with our competitive wholesale rates and flexible billing options.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="180"><div className="use-card"><div className="use-icon"><i className="fas fa-mobile-alt"></i></div><div><h6>App Developers</h6><p>Integrate PSTN calling into your mobile or web app using our SIP infrastructure and REST API for account management.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240"><div className="use-card"><div className="use-icon"><i className="fas fa-headset"></i></div><div><h6>Contact Centers</h6><p>Add outbound termination to your contact center platform with per-minute billing and quality guarantees to key destinations.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300"><div className="use-card"><div className="use-icon"><i className="fas fa-globe-asia"></i></div><div><h6>Diaspora Communities</h6><p>Enable affordable calls to home countries for diaspora communities with premium quality to key international destinations.</p></div></div></div>
    </div>
  </div>
</section>

{/*  TESTIMONIAL  */}
<section className="section-alt" style={{ padding: '80px 0' }}>
  <div className="container">
    <div className="row justify-content-center">
      <div className="col-lg-8" data-aos="fade-up">
        <div className="testi">
          <div style={{ color: '#f59e0b', fontSize: '.9rem', marginBottom: '14px', letterSpacing: '2px' }}>★★★★★</div>
          <p style={{ color: 'rgba(255,255,255,.75)', fontSize: '1.05rem', lineHeight: '1.8', marginBottom: '24px' }}>"We switched our international termination to First Step Technology six months ago and the difference is night and day. Call quality to Southeast Asia — our most important market — improved dramatically, and rates are 20% lower than our previous provider. The CDR portal saves our billing team hours every week."</p>
          <div style={{ display: 'flex', alignItems: 'center', gap: '14px' }}>
            <div style={{ width: '48px', height: '48px', borderRadius: '50%', background: 'linear-gradient(135deg,#0d6efd,#00c6ff)', display: 'flex', alignItems: 'center', justifyContent: 'center', fontWeight: '700', color: '#fff' }}>DL</div>
            <div><div style={{ color: '#fff', fontWeight: '600' }}>David Lim</div><div style={{ color: 'rgba(255,255,255,.45)', fontSize: '.82rem' }}>CEO, AsiaVoice Networks</div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{/*  CTA  */}
<section className="svc-cta">
  <div className="svc-cta-bg" id="ctaBg"></div>
  <div className="container">
    <div className="row justify-content-center text-center" style={{ position: 'relative', zIndex: '2' }}>
      <div className="col-lg-7" data-aos="zoom-in">
        <div className="section-badge mx-auto mb-3"><i className="fas fa-rocket"></i> Start Today</div>
        <h2 style={{ fontFamily: "'Poppins',sans-serif", fontSize: 'clamp(2rem,4vw,3rem)', fontWeight: '800', color: '#fff', marginBottom: '18px' }}>Ready to Upgrade Your <span style={{ background: 'linear-gradient(90deg,#0d6efd,#00c6ff)', WebkitBackgroundClip: 'text', WebkitTextFillColor: 'transparent', backgroundClip: 'text' }}>Voice Infrastructure?</span></h2>
        <p style={{ color: 'rgba(255,255,255,.6)', fontSize: '1.05rem', maxWidth: '500px', margin: '0 auto 32px', lineHeight: '1.75' }}>Join 500+ partners already terminating billions of minutes on our network. Get started in 48 hours.</p>
        <div className="d-flex gap-3 justify-content-center flex-wrap">
          <Link href="/contact" className="btn-primary-grad"><i className="fas fa-paper-plane"></i> Request a Demo</Link>
          <Link href="/services" className="btn-outline-light-custom"><i className="fas fa-th-large"></i> All Services</Link>
        </div>
      </div>
    </div>
  </div>
</section>
    </main>
  );
}




