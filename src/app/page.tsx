import Link from 'next/link';
import type { Metadata } from 'next';

export const metadata: Metadata = {
  title: 'First Step Technology - Index',
};

export default function Page() {
  return (
    <main>
      {/*  HERO  */}
<section id="hero">
  <div className="hero-parallax-bg" id="heroBg"></div>
  <div className="hero-grid"></div>
  <div className="particles-wrap" id="particles"></div>
  <div className="container">
    <div className="row align-items-center g-5">
      <div className="col-lg-6 hero-content" data-aos="fade-right" data-aos-duration="900">
        <div className="hero-badge"><i className="fa fa-circle fa-xs"></i> Global VoIP Leader Since 2013</div>
        <h1 className="hero-title">Next-Gen <span className="highlight">IP Voice</span><br />Solutions for the<br />Modern World</h1>
        <p className="hero-desc">First Step Technology delivers high-quality worldwide voice termination, wholesale VoIP platforms, and call center suites — all through a single, powerful global infrastructure.</p>
        <div className="d-flex flex-wrap gap-3">
          <Link href="/services" className="btn-primary-grad">Explore Services <i className="fas fa-arrow-right"></i></Link>
          <Link href="/contact" className="btn-outline-light-custom"><i className="fas fa-phone"></i> Talk to Us</Link>
        </div>
      </div>
      <div className="col-lg-6 hero-visual" data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">
        <div style={{ position: 'relative', padding: '20px 50px' }}>
          <div className="hero-card">
            <div className="hero-card-icon"><i className="fas fa-phone-volume text-white"></i></div>
            <h5 className="text-white mb-1" style={{ fontWeight: '700' }}>Global VoIP Network</h5>
            <p style={{ color: 'rgba(255,255,255,.5)', fontSize: '.88rem', margin: '0 0 14px' }}>Worldwide voice termination via a single connection</p>
            <div className="mb-2">
              <div className="d-flex justify-content-between mb-1"><span style={{ fontSize: '.78rem', color: 'rgba(255,255,255,.5)' }}>Network Uptime</span><span style={{ fontSize: '.78rem', color: 'var(--cyan)' }}>99.9%</span></div>
              <div style={{ height: '4px', background: 'rgba(255,255,255,.1)', borderRadius: '4px' }}><div style={{ width: '99%', height: '100%', background: 'linear-gradient(90deg,#0d6efd,#00c6ff)', borderRadius: '4px' }}></div></div>
            </div>
            <div>
              <div className="d-flex justify-content-between mb-1"><span style={{ fontSize: '.78rem', color: 'rgba(255,255,255,.5)' }}>Call Quality Score</span><span style={{ fontSize: '.78rem', color: 'var(--cyan)' }}>4.8 MOS</span></div>
              <div style={{ height: '4px', background: 'rgba(255,255,255,.1)', borderRadius: '4px' }}><div style={{ width: '96%', height: '100%', background: 'linear-gradient(90deg,#0d6efd,#00c6ff)', borderRadius: '4px' }}></div></div>
            </div>
            <div className="stat-row">
              <div className="stat-pill"><div className="num">150+</div><div className="lbl">Countries</div></div>
              <div className="stat-pill"><div className="num">1B+</div><div className="lbl">Minutes/yr</div></div>
              <div className="stat-pill"><div className="num">500+</div><div className="lbl">Partners</div></div>
            </div>
          </div>
          <div className="float-badge float-badge-1">
            <div className="dot"></div>
            <div><div style={{ color: '#fff', fontWeight: '600', fontSize: '.82rem' }}>Live Calls</div><div style={{ color: 'rgba(255,255,255,.4)', fontSize: '.72rem' }}>24,392 active</div></div>
          </div>
          <div className="float-badge float-badge-2">
            <i className="fas fa-shield-halved" style={{ color: 'var(--cyan)' }}></i>
            <div><div style={{ color: '#fff', fontWeight: '600', fontSize: '.82rem' }}>Encrypted</div><div style={{ color: 'rgba(255,255,255,.4)', fontSize: '.72rem' }}>End-to-end secure</div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div className="scroll-cue"><i className="fas fa-chevron-down"></i><span>Scroll to explore</span></div>
</section>

{/*  PARTNERS  */}
<section id="partners">
  <div className="container text-center">
    <p className="partners-label">Trusted by carriers and enterprises worldwide</p>
    <div className="row g-3 justify-content-center">
      <div className="col-6 col-md-4 col-lg-2"><div className="partner-logo">TeleCom+</div></div>
      <div className="col-6 col-md-4 col-lg-2"><div className="partner-logo">GlobalNet</div></div>
      <div className="col-6 col-md-4 col-lg-2"><div className="partner-logo">VoiceCore</div></div>
      <div className="col-6 col-md-4 col-lg-2"><div className="partner-logo">NexaTel</div></div>
      <div className="col-6 col-md-4 col-lg-2"><div className="partner-logo">SwiftCall</div></div>
      <div className="col-6 col-md-4 col-lg-2"><div className="partner-logo">PrimeLine</div></div>
    </div>
  </div>
</section>

{/*  SERVICES PREVIEW  */}
<section id="services-preview">
  <div className="container">
    <div className="row justify-content-center text-center mb-5">
      <div className="col-lg-7" data-aos="fade-up">
        <div className="section-badge"><i className="fas fa-th-large"></i> Our Services</div>
        <h2 className="section-title">End-to-End <span className="accent">Voice Solutions</span></h2>
        <p className="section-sub mx-auto">Everything your business needs to communicate globally — from retail voice to enterprise call centers.</p>
      </div>
    </div>
    <div className="row g-4">
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
        <div className="svc-card">
          <div className="svc-icon" style={{ background: 'linear-gradient(135deg,rgba(13,110,253,.2),rgba(0,198,255,.15))', color: 'var(--cyan)' }}><i className="fas fa-phone-volume"></i></div>
          <h4>Retail IP Voice</h4>
          <p>High-quality worldwide voice termination through a single IP connection with ultra-low latency and competitive rates.</p>
          <Link href="/services" className="svc-link">Learn more <i className="fas fa-arrow-right"></i></Link>
        </div>
      </div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="80">
        <div className="svc-card">
          <div className="svc-icon" style={{ background: 'linear-gradient(135deg,rgba(139,92,246,.2),rgba(0,198,255,.15))', color: '#a78bfa' }}><i className="fas fa-server"></i></div>
          <h4>Wholesale Platform</h4>
          <p>IP-to-IP voice for medium and small carriers. Remove operational complexity and streamline rating on our robust platform.</p>
          <Link href="/services" className="svc-link">Learn more <i className="fas fa-arrow-right"></i></Link>
        </div>
      </div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="160">
        <div className="svc-card">
          <div className="svc-icon" style={{ background: 'linear-gradient(135deg,rgba(236,72,153,.2),rgba(139,92,246,.15))', color: '#f472b6' }}><i className="fas fa-headset"></i></div>
          <h4>Call Center Suite</h4>
          <p>Comprehensive call center solution with unlimited agents, real-time monitoring, call recording, and performance dashboards.</p>
          <Link href="/services" className="svc-link">Learn more <i className="fas fa-arrow-right"></i></Link>
        </div>
      </div>
    </div>
    <div className="text-center mt-5" data-aos="fade-up">
      <Link href="/services" className="btn-primary-grad">View All Services <i className="fas fa-arrow-right"></i></Link>
    </div>
  </div>
</section>

{/*  STATS  */}
<section id="stats">
  <div className="stats-bg" id="statsBg"></div>
  <div className="stats-grid"></div>
  <div className="container position-relative" style={{ zIndex: '2' }}>
    <div className="row g-4 justify-content-center">
      <div className="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="0">
        <div className="stat-card"><div className="stat-icon"><i className="fas fa-globe"></i></div><span className="stat-number" data-count="150">0</span><span className="stat-number">+</span><span className="stat-label">Countries Covered</span></div>
      </div>
      <div className="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
        <div className="stat-card"><div className="stat-icon"><i className="fas fa-handshake"></i></div><span className="stat-number" data-count="500">0</span><span className="stat-number">+</span><span className="stat-label">Active Partners</span></div>
      </div>
      <div className="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
        <div className="stat-card"><div className="stat-icon"><i className="fas fa-signal"></i></div><span className="stat-number" data-count="99">0</span><span className="stat-number">.9%</span><span className="stat-label">Network Uptime</span></div>
      </div>
      <div className="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
        <div className="stat-card"><div className="stat-icon"><i className="fas fa-clock"></i></div><span className="stat-number" data-count="10">0</span><span className="stat-number">+</span><span className="stat-label">Years Experience</span></div>
      </div>
    </div>
  </div>
</section>

{/*  TESTIMONIALS  */}
<section id="testimonials">
  <div className="container">
    <div className="row justify-content-center text-center mb-5">
      <div className="col-lg-7" data-aos="fade-up">
        <div className="section-badge"><i className="fas fa-comments"></i> Testimonials</div>
        <h2 className="section-title">What Our <span className="accent">Partners Say</span></h2>
        <p className="section-sub mx-auto">Real feedback from carriers and enterprises who trust First Step Technology.</p>
      </div>
    </div>
    <div className="row g-4">
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
        <div className="testi-card"><div className="stars">★★★★★</div><p className="testi-text">"First Step Technology transformed our wholesale voice operations. The platform is rock-solid, rates are competitive, and their support team is genuinely exceptional."</p><div className="testi-author"><div className="author-av">MR</div><div><div className="author-name">Michael Rashad</div><div className="author-role">VP Operations, TeleCom+</div></div></div></div>
      </div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120">
        <div className="testi-card"><div className="stars">★★★★★</div><p className="testi-text">"We integrated their auto-dialer with our CRM in under a week. Our outbound campaign productivity tripled. The quality of calls is the best we've ever experienced."</p><div className="testi-author"><div className="author-av">SL</div><div><div className="author-name">Sarah Lin</div><div className="author-role">Head of Sales, NexaTel Asia</div></div></div></div>
      </div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240">
        <div className="testi-card"><div className="stars">★★★★★</div><p className="testi-text">"The hosted IP-PBX has been a game-changer for our remote teams across 8 countries. Setup was straightforward and the uptime has been flawless for over two years."</p><div className="testi-author"><div className="author-av">AK</div><div><div className="author-name">Ahmed Khalil</div><div className="author-role">CTO, GlobalNet MENA</div></div></div></div>
      </div>
    </div>
  </div>
</section>

{/*  CTA  */}
<section id="cta">
  <div className="cta-grad-bg" id="ctaBg"></div>
  <div className="container">
    <div className="cta-inner" data-aos="zoom-in" data-aos-duration="800">
      <div className="section-badge mx-auto mb-3"><i className="fas fa-rocket"></i> Start Today</div>
      <h2>Ready to <span style={{ background: 'linear-gradient(90deg,#0d6efd,#00c6ff)', WebkitBackgroundClip: 'text', WebkitTextFillColor: 'transparent', backgroundClip: 'text' }}>Transform</span> Your Communications?</h2>
      <p>Join 500+ partners who rely on First Step Technology for reliable, high-quality voice infrastructure.</p>
      <div className="d-flex gap-3 justify-content-center flex-wrap">
        <Link href="/contact" className="btn-primary-grad"><i className="fas fa-paper-plane"></i> Request a Demo</Link>
        <Link href="/services" className="btn-outline-light-custom"><i className="fas fa-book-open"></i> View Services</Link>
      </div>
    </div>
  </div>
</section>
    </main>
  );
}




