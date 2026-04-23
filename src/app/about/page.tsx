import Link from 'next/link';
import type { Metadata } from 'next';

export const metadata: Metadata = {
  title: 'First Step Technology - About',
};

export default function Page() {
  return (
    <main>
      {/*  PAGE BANNER  */}
<section className="page-banner">
  <div className="page-banner-bg" id="bannerBg"></div>
  <div className="page-banner-grid"></div>
  <div className="container page-banner-content" data-aos="fade-up" data-aos-duration="800">
    <div className="breadcrumb-nav"><Link href="/">Home</Link><span className="sep">/</span><span>About Us</span></div>
    <h1>Connecting the World <span className="highlight">One Call</span> at a Time</h1>
    <p>Since 2013, we've been building the infrastructure that powers global communications for carriers, enterprises, and communication providers across 150+ countries.</p>
  </div>
</section>

{/*  STORY  */}
<section id="story">
  <div className="container">
    <div className="row align-items-center g-5">
      <div className="col-lg-5" data-aos="fade-right" data-aos-duration="900">
        <div className="story-img-box" style={{ paddingBottom: '40px' }}>
          <div style={{ background: 'linear-gradient(135deg,#0d2a5e,#0a3d7c)', borderRadius: '24px', padding: '60px 40px', textAlign: 'center' }}>
            <i className="fas fa-network-wired" style={{ fontSize: '5.5rem', color: 'rgba(0,198,255,.55)', display: 'block', marginBottom: '28px' }}></i>
            <div style={{ display: 'flex', gap: '16px', justifyContent: 'center', flexWrap: 'wrap' }}>
              <div style={{ background: 'rgba(255,255,255,.07)', borderRadius: '12px', padding: '16px 20px' }}>
                <div style={{ fontSize: '1.8rem', fontWeight: '800', color: 'var(--cyan)' }}>2013</div>
                <div style={{ fontSize: '.75rem', color: 'rgba(255,255,255,.4)', marginTop: '4px' }}>Founded</div>
              </div>
              <div style={{ background: 'rgba(255,255,255,.07)', borderRadius: '12px', padding: '16px 20px' }}>
                <div style={{ fontSize: '1.8rem', fontWeight: '800', color: 'var(--cyan)' }}>HK</div>
                <div style={{ fontSize: '.75rem', color: 'rgba(255,255,255,.4)', marginTop: '4px' }}>HQ</div>
              </div>
              <div style={{ background: 'rgba(255,255,255,.07)', borderRadius: '12px', padding: '16px 20px' }}>
                <div style={{ fontSize: '1.8rem', fontWeight: '800', color: 'var(--cyan)' }}>150+</div>
                <div style={{ fontSize: '.75rem', color: 'rgba(255,255,255,.4)', marginTop: '4px' }}>Countries</div>
              </div>
            </div>
          </div>
          <div className="story-overlay-num">
            <div className="big">10+</div>
            <div style={{ color: 'rgba(255,255,255,.55)', fontSize: '.85rem', marginTop: '6px' }}>Years of Excellence</div>
          </div>
        </div>
      </div>
      <div className="col-lg-7" data-aos="fade-left" data-aos-duration="900" data-aos-delay="150">
        <div className="section-badge"><i className="fas fa-building"></i> Our Story</div>
        <h2 className="section-title">A Global Leader in <span className="accent">IP Telephony</span></h2>
        <div className="divider"></div>
        <p style={{ color: 'rgba(255,255,255,.6)', lineHeight: '1.85', marginBottom: '32px' }}>
          First Step Technology was founded in Hong Kong in 2013 with a singular vision: to make high-quality, reliable voice communication accessible to any carrier or enterprise in the world through a single, intelligent IP infrastructure. Over the past decade, we have grown from a regional operator into one of the primary global leaders in internet telephony and prepaid voice services.
        </p>
        <p style={{ color: 'rgba(255,255,255,.55)', lineHeight: '1.85', marginBottom: '32px' }}>
          Today, our global VoIP backbone spans 150+ countries, terminating billions of minutes annually for a diverse ecosystem of wholesale carriers, SMBs, and enterprise call centers. We are defined by our commitment to technical excellence, transparent partnerships, and 24/7 operational reliability.
        </p>
        <div>
          <div className="feature-item" data-aos="fade-up" data-aos-delay="200">
            <div className="feature-icon"><i className="fas fa-globe"></i></div>
            <div><h6>Global Infrastructure</h6><p>A carrier-grade network spanning 150+ countries delivering crystal-clear voice via a single connection.</p></div>
          </div>
          <div className="feature-item" data-aos="fade-up" data-aos-delay="300">
            <div className="feature-icon"><i className="fas fa-handshake"></i></div>
            <div><h6>Long-Term Partnerships</h6><p>We serve several leading organizations through strategic partnerships built on trust, performance, and transparency.</p></div>
          </div>
          <div className="feature-item" data-aos="fade-up" data-aos-delay="400">
            <div className="feature-icon"><i className="fas fa-bolt"></i></div>
            <div><h6>Continuous Innovation</h6><p>From IP-PBX to advanced auto-dialer technology, we continuously invest in next-generation communication solutions.</p></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{/*  MISSION & VISION  */}
<section id="mission">
  <div className="container">
    <div className="row justify-content-center text-center mb-5">
      <div className="col-lg-7" data-aos="fade-up">
        <div className="section-badge"><i className="fas fa-bullseye"></i> Mission & Vision</div>
        <h2 className="section-title">What <span className="accent">Drives Us</span></h2>
      </div>
    </div>
    <div className="row g-4">
      <div className="col-lg-6" data-aos="fade-right">
        <div className="mv-card mv-card-mission">
          <div className="mv-glow" style={{ background: '#0d6efd' }}></div>
          <div className="mv-icon">🎯</div>
          <h3>Our Mission</h3>
          <p>To empower carriers and enterprises worldwide with reliable, high-quality IP voice solutions that simplify global communication. We remove complexity from voice infrastructure so our partners can focus on growing their businesses.</p>
          <ul style={{ color: 'rgba(255,255,255,.55)', fontSize: '.92rem', lineHeight: '2', marginTop: '16px', paddingLeft: '20px' }}>
            <li>Deliver crystal-clear voice quality to every destination</li>
            <li>Provide transparent, competitive pricing</li>
            <li>Maintain 99.9%+ uptime across our global network</li>
            <li>Offer 24/7 expert technical support</li>
          </ul>
        </div>
      </div>
      <div className="col-lg-6" data-aos="fade-left">
        <div className="mv-card mv-card-vision">
          <div className="mv-glow" style={{ background: '#8b5cf6' }}></div>
          <div className="mv-icon">🔭</div>
          <h3>Our Vision</h3>
          <p>To be the world's most trusted voice carrier ecosystem — a platform where any business, anywhere, can access enterprise-grade communication tools without barriers of geography, cost, or technical complexity.</p>
          <ul style={{ color: 'rgba(255,255,255,.55)', fontSize: '.92rem', lineHeight: '2', marginTop: '16px', paddingLeft: '20px' }}>
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

{/*  TIMELINE  */}
<section id="timeline">
  <div className="container">
    <div className="row justify-content-center text-center mb-5">
      <div className="col-lg-7" data-aos="fade-up">
        <div className="section-badge"><i className="fas fa-road"></i> Our Journey</div>
        <h2 className="section-title">A Decade of <span className="accent">Growth</span></h2>
        <p className="section-sub mx-auto">Key milestones that shaped First Step Technology into the global leader it is today.</p>
      </div>
    </div>
    <div className="tl-wrap">
      <div className="tl-item" data-aos="fade-right">
        <div className="tl-content"><div className="tl-year">2013</div><h5>Company Founded</h5><p>First Step Technology established in Hong Kong with a vision to democratize global voice communication through next-generation IP infrastructure.</p></div>
        <div className="tl-dot"></div>
      </div>
      <div className="tl-item" data-aos="fade-left">
        <div className="tl-content"><div className="tl-year">2015</div><h5>Wholesale Platform Launch</h5><p>Launched our B2B wholesale platform, enabling small and medium carriers to access our global network without complex infrastructure overhead.</p></div>
        <div className="tl-dot"></div>
      </div>
      <div className="tl-item" data-aos="fade-right">
        <div className="tl-content"><div className="tl-year">2017</div><h5>100-Country Milestone</h5><p>Expanded our termination reach to 100+ countries, establishing strategic Points of Presence (PoPs) across Asia, Europe, and the Americas.</p></div>
        <div className="tl-dot"></div>
      </div>
      <div className="tl-item" data-aos="fade-left">
        <div className="tl-content"><div className="tl-year">2019</div><h5>Hosted IP-PBX & Call Center Suite</h5><p>Introduced cloud-hosted PBX and full-featured call center suite, expanding from pure carrier services to enterprise communication solutions.</p></div>
        <div className="tl-dot"></div>
      </div>
      <div className="tl-item" data-aos="fade-right">
        <div className="tl-content"><div className="tl-year">2021</div><h5>Auto-Dialer Technology</h5><p>Launched advanced predictive auto-dialer enabling hundreds of simultaneous outbound calls, transforming call center productivity for our clients.</p></div>
        <div className="tl-dot"></div>
      </div>
      <div className="tl-item" data-aos="fade-left">
        <div className="tl-content"><div className="tl-year">2024</div><h5>150+ Countries & 500+ Partners</h5><p>Reached our biggest milestone yet — a global network covering 150+ countries serving over 500 active partners with billions of minutes annually.</p></div>
        <div className="tl-dot"></div>
      </div>
    </div>
  </div>
</section>

{/*  TEAM  */}
<section id="team">
  <div className="container">
    <div className="row justify-content-center text-center mb-5">
      <div className="col-lg-7" data-aos="fade-up">
        <div className="section-badge"><i className="fas fa-users"></i> Our Team</div>
        <h2 className="section-title">The People Behind <span className="accent">First Step</span></h2>
        <p className="section-sub mx-auto">A diverse team of telecom veterans, engineers, and business development experts united by one mission.</p>
      </div>
    </div>
    <div className="row g-4">
      <div className="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
        <div className="team-card">
          <div className="team-avatar">JC</div>
          <h5>James Chen</h5>
          <div className="role">CEO & Co-Founder</div>
          <p>15+ years in telecom. Former VP at a major Asia-Pacific carrier. Visionary behind FST's global expansion strategy.</p>
          <div className="team-social"><Link href="#"><i className="fab fa-linkedin-in"></i></Link><Link href="#"><i className="fab fa-twitter"></i></Link></div>
        </div>
      </div>
      <div className="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="80">
        <div className="team-card">
          <div className="team-avatar" style={{ background: 'linear-gradient(135deg,#8b5cf6,#06b6d4)' }}>SK</div>
          <h5>Sarah Kim</h5>
          <div className="role">CTO & Co-Founder</div>
          <p>Deep expertise in VoIP architecture, SIP signaling, and distributed systems. Architect of our carrier-grade backbone.</p>
          <div className="team-social"><Link href="#"><i className="fab fa-linkedin-in"></i></Link><Link href="#"><i className="fab fa-github"></i></Link></div>
        </div>
      </div>
      <div className="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="160">
        <div className="team-card">
          <div className="team-avatar" style={{ background: 'linear-gradient(135deg,#10b981,#06b6d4)' }}>MR</div>
          <h5>Marcus Reid</h5>
          <div className="role">VP of Sales</div>
          <p>Built carrier partnerships across EMEA and Americas. Expert in wholesale voice markets and enterprise communication sales.</p>
          <div className="team-social"><Link href="#"><i className="fab fa-linkedin-in"></i></Link><Link href="#"><i className="fab fa-twitter"></i></Link></div>
        </div>
      </div>
      <div className="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="240">
        <div className="team-card">
          <div className="team-avatar" style={{ background: 'linear-gradient(135deg,#f59e0b,#ef4444)' }}>LP</div>
          <h5>Lisa Park</h5>
          <div className="role">Head of Operations</div>
          <p>Oversees 24/7 NOC operations, quality management, and partner onboarding. Ensures our 99.9% uptime SLA is always met.</p>
          <div className="team-social"><Link href="#"><i className="fab fa-linkedin-in"></i></Link><Link href="#"><i className="fab fa-twitter"></i></Link></div>
        </div>
      </div>
    </div>
  </div>
</section>

{/*  WHY US  */}
<section id="why">
  <div className="container">
    <div className="row align-items-center g-5">
      <div className="col-lg-6" data-aos="fade-right">
        <div className="section-badge"><i className="fas fa-star"></i> Why Choose Us</div>
        <h2 className="section-title">Built for <span className="accent">Reliability</span> at Scale</h2>
        <div className="divider"></div>
        <div className="why-card" data-aos="fade-up" data-aos-delay="100"><div className="why-num">1</div><div><h5>Single-Connection Simplicity</h5><p>Access our entire global network through one SIP trunk — no need to manage multiple carriers or complex routing tables.</p></div></div>
        <div className="why-card" data-aos="fade-up" data-aos-delay="180"><div className="why-num">2</div><div><h5>Transparent, Competitive Pricing</h5><p>Real-time rate updates, volume discounts, and prepaid flexibility ensure you always get the best value for every minute.</p></div></div>
        <div className="why-card" data-aos="fade-up" data-aos-delay="260"><div className="why-num">3</div><div><h5>24/7 Expert NOC Support</h5><p>Our Network Operations Center monitors traffic around the clock, proactively resolving issues before they impact your calls.</p></div></div>
        <div className="why-card" data-aos="fade-up" data-aos-delay="340"><div className="why-num">4</div><div><h5>Carrier-Grade Security</h5><p>End-to-end TLS/SRTP encryption, DDoS protection, and real-time fraud detection safeguard every call on our platform.</p></div></div>
      </div>
      <div className="col-lg-6" data-aos="fade-left" data-aos-delay="200">
        <div style={{ background: 'rgba(255,255,255,.03)', border: '1px solid rgba(255,255,255,.08)', borderRadius: '24px', padding: '44px', position: 'relative', overflow: 'hidden' }}>
          <div style={{ position: 'absolute', top: '-40px', right: '-40px', width: '220px', height: '220px', background: 'radial-gradient(circle,rgba(13,110,253,.12),transparent 70%)', borderRadius: '50%' }}></div>
          <h4 style={{ color: '#fff', fontWeight: '700', marginBottom: '28px' }}>Platform at a Glance</h4>
          <div className="row g-3">
            <div className="col-6"><div style={{ background: 'rgba(255,255,255,.04)', border: '1px solid rgba(255,255,255,.07)', borderRadius: '14px', padding: '20px', textAlign: 'center' }}><i className="fas fa-shield-halved" style={{ color: 'var(--cyan)', fontSize: '1.5rem', marginBottom: '8px', display: 'block' }}></i><div style={{ color: '#fff', fontWeight: '600', fontSize: '.88rem' }}>Secure</div><div style={{ color: 'rgba(255,255,255,.4)', fontSize: '.75rem' }}>TLS + SRTP</div></div></div>
            <div className="col-6"><div style={{ background: 'rgba(255,255,255,.04)', border: '1px solid rgba(255,255,255,.07)', borderRadius: '14px', padding: '20px', textAlign: 'center' }}><i className="fas fa-bolt" style={{ color: '#f59e0b', fontSize: '1.5rem', marginBottom: '8px', display: 'block' }}></i><div style={{ color: '#fff', fontWeight: '600', fontSize: '.88rem' }}>Fast</div><div style={{ color: 'rgba(255,255,255,.4)', fontSize: '.75rem' }}>&lt;20ms latency</div></div></div>
            <div className="col-6"><div style={{ background: 'rgba(255,255,255,.04)', border: '1px solid rgba(255,255,255,.07)', borderRadius: '14px', padding: '20px', textAlign: 'center' }}><i className="fas fa-infinity" style={{ color: '#a78bfa', fontSize: '1.5rem', marginBottom: '8px', display: 'block' }}></i><div style={{ color: '#fff', fontWeight: '600', fontSize: '.88rem' }}>Scalable</div><div style={{ color: 'rgba(255,255,255,.4)', fontSize: '.75rem' }}>Unlimited channels</div></div></div>
            <div className="col-6"><div style={{ background: 'rgba(255,255,255,.04)', border: '1px solid rgba(255,255,255,.07)', borderRadius: '14px', padding: '20px', textAlign: 'center' }}><i className="fas fa-headset" style={{ color: '#4ade80', fontSize: '1.5rem', marginBottom: '8px', display: 'block' }}></i><div style={{ color: '#fff', fontWeight: '600', fontSize: '.88rem' }}>Support</div><div style={{ color: 'rgba(255,255,255,.4)', fontSize: '.75rem' }}>24/7 NOC</div></div></div>
          </div>
          <div className="row g-3 mt-1">
            <div className="col-4 text-center"><div style={{ padding: '16px 8px', borderRadius: '12px', background: 'rgba(13,110,253,.08)', border: '1px solid rgba(13,110,253,.2)' }}><div style={{ fontFamily: "'Poppins',sans-serif", fontSize: '1.6rem', fontWeight: '800', color: 'var(--cyan)' }}>150+</div><div style={{ color: 'rgba(255,255,255,.45)', fontSize: '.72rem' }}>Countries</div></div></div>
            <div className="col-4 text-center"><div style={{ padding: '16px 8px', borderRadius: '12px', background: 'rgba(13,110,253,.08)', border: '1px solid rgba(13,110,253,.2)' }}><div style={{ fontFamily: "'Poppins',sans-serif", fontSize: '1.6rem', fontWeight: '800', color: 'var(--cyan)' }}>500+</div><div style={{ color: 'rgba(255,255,255,.45)', fontSize: '.72rem' }}>Partners</div></div></div>
            <div className="col-4 text-center"><div style={{ padding: '16px 8px', borderRadius: '12px', background: 'rgba(13,110,253,.08)', border: '1px solid rgba(13,110,253,.2)' }}><div style={{ fontFamily: "'Poppins',sans-serif", fontSize: '1.6rem', fontWeight: '800', color: 'var(--cyan)' }}>99.9%</div><div style={{ color: 'rgba(255,255,255,.45)', fontSize: '.72rem' }}>Uptime</div></div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{/*  CTA  */}
<section id="cta">
  <div className="cta-bg-grad" id="ctaBg"></div>
  <div className="container">
    <div className="cta-inner" data-aos="zoom-in" data-aos-duration="800">
      <div className="section-badge mx-auto mb-3"><i className="fas fa-rocket"></i> Partner With Us</div>
      <h2>Ready to Join the <span style={{ background: 'linear-gradient(90deg,#0d6efd,#00c6ff)', WebkitBackgroundClip: 'text', WebkitTextFillColor: 'transparent', backgroundClip: 'text' }}>First Step</span> Family?</h2>
      <p>Become part of a global network of 500+ carriers and enterprises shaping the future of communications.</p>
      <div className="d-flex gap-3 justify-content-center flex-wrap">
        <Link href="/contact" className="btn-primary-grad"><i className="fas fa-paper-plane"></i> Contact Our Team</Link>
        <Link href="/services" className="btn-outline-light-custom"><i className="fas fa-th-large"></i> Explore Services</Link>
      </div>
    </div>
  </div>
</section>
    </main>
  );
}




