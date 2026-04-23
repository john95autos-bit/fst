import Link from 'next/link';
import type { Metadata } from 'next';

export const metadata: Metadata = {
  title: 'First Step Technology - Hosted Pbx',
};

export default function Page() {
  return (
    <main>
      <section className="svc-hero">
  <div className="svc-hero-bg" id="heroBg"></div>
  <div className="svc-hero-grid"></div>
  <div className="container">
    <div className="row align-items-center g-5">
      <div className="col-lg-6 hero-content" data-aos="fade-right" data-aos-duration="900">
        <nav aria-label="breadcrumb" style={{ marginBottom: '18px' }}><div style={{ display: 'flex', alignItems: 'center', gap: '8px', fontSize: '.85rem', color: 'rgba(255,255,255,.4)' }}><Link href="/" style={{ color: '#4ade80' }}>Home</Link><span>/</span><Link href="/services" style={{ color: '#4ade80' }}>Services</Link><span>/</span><span>Hosted IP-PBX</span></div></nav>
        <div className="svc-badge"><i className="fas fa-building fa-xs"></i> Hosted IP-PBX</div>
        <h1 style={{ fontFamily: "'Poppins',sans-serif", fontSize: 'clamp(2.4rem,5vw,4rem)', fontWeight: '800', color: '#fff', lineHeight: '1.12', marginBottom: '22px' }}>Your Business Phone System,<br /><span style={{ background: 'linear-gradient(90deg,#22c55e,#06b6d4)', WebkitBackgroundClip: 'text', WebkitTextFillColor: 'transparent', backgroundClip: 'text' }}>In the Cloud</span></h1>
        <p style={{ fontSize: '1.05rem', color: 'rgba(255,255,255,.62)', lineHeight: '1.8', marginBottom: '32px' }}>A full-featured cloud-based PBX for businesses of any size. Manage extensions, IVR menus, call routing, voicemail, and conferencing from one intuitive dashboard — with zero on-premises hardware required.</p>
        <div className="d-flex flex-wrap gap-3 mb-4">
          <Link href="/contact" className="btn-primary-grad" style={{ background: 'linear-gradient(135deg,#22c55e,#06b6d4)', boxShadow: '0 8px 28px rgba(34,197,94,.3)' }}><i className="fas fa-paper-plane"></i> Request Demo</Link>
          <Link href="#features" className="btn-outline-light-custom"><i className="fas fa-th-large"></i> See Features</Link>
        </div>
        <div>
          <span style={{ display: 'inline-flex', alignItems: 'center', gap: '6px', padding: '5px 14px', borderRadius: '50px', background: 'rgba(255,255,255,.06)', border: '1px solid rgba(255,255,255,.12)', fontSize: '.8rem', color: 'rgba(255,255,255,.6)', margin: '4px' }}><i className="fas fa-check" style={{ color: '#22c55e' }}></i> No Hardware Needed</span>
          <span style={{ display: 'inline-flex', alignItems: 'center', gap: '6px', padding: '5px 14px', borderRadius: '50px', background: 'rgba(255,255,255,.06)', border: '1px solid rgba(255,255,255,.12)', fontSize: '.8rem', color: 'rgba(255,255,255,.6)', margin: '4px' }}><i className="fas fa-check" style={{ color: '#22c55e' }}></i> Unlimited Extensions</span>
          <span style={{ display: 'inline-flex', alignItems: 'center', gap: '6px', padding: '5px 14px', borderRadius: '50px', background: 'rgba(255,255,255,.06)', border: '1px solid rgba(255,255,255,.12)', fontSize: '.8rem', color: 'rgba(255,255,255,.6)', margin: '4px' }}><i className="fas fa-check" style={{ color: '#22c55e' }}></i> CRM Integration</span>
          <span style={{ display: 'inline-flex', alignItems: 'center', gap: '6px', padding: '5px 14px', borderRadius: '50px', background: 'rgba(255,255,255,.06)', border: '1px solid rgba(255,255,255,.12)', fontSize: '.8rem', color: 'rgba(255,255,255,.6)', margin: '4px' }}><i className="fas fa-check" style={{ color: '#22c55e' }}></i> Mobile Softphone</span>
        </div>
      </div>
      <div className="col-lg-6" data-aos="fade-left" data-aos-delay="200">
        <div className="pbx-diagram">
          <div className="pbx-center"><i className="fas fa-building"></i></div>
          <p style={{ textAlign: 'center', color: 'rgba(255,255,255,.5)', fontSize: '.82rem', marginBottom: '24px' }}>Cloud PBX — Central Hub</p>
          <div className="row g-3">
            <div className="col-6"><div style={{ background: 'rgba(34,197,94,.08)', border: '1px solid rgba(34,197,94,.2)', borderRadius: '12px', padding: '14px', display: 'flex', alignItems: 'center', gap: '10px' }}><i className="fas fa-desktop" style={{ color: '#4ade80', fontSize: '1.1rem' }}></i><div><div style={{ color: '#fff', fontSize: '.82rem', fontWeight: '600' }}>Desktop IP Phones</div><div style={{ color: 'rgba(255,255,255,.4)', fontSize: '.72rem' }}>SIP compatible</div></div></div></div>
            <div className="col-6"><div style={{ background: 'rgba(6,182,212,.08)', border: '1px solid rgba(6,182,212,.2)', borderRadius: '12px', padding: '14px', display: 'flex', alignItems: 'center', gap: '10px' }}><i className="fas fa-mobile-alt" style={{ color: '#67e8f9', fontSize: '1.1rem' }}></i><div><div style={{ color: '#fff', fontSize: '.82rem', fontWeight: '600' }}>Mobile Softphone</div><div style={{ color: 'rgba(255,255,255,.4)', fontSize: '.72rem' }}>iOS & Android</div></div></div></div>
            <div className="col-6"><div style={{ background: 'rgba(139,92,246,.08)', border: '1px solid rgba(139,92,246,.2)', borderRadius: '12px', padding: '14px', display: 'flex', alignItems: 'center', gap: '10px' }}><i className="fas fa-laptop" style={{ color: '#c4b5fd', fontSize: '1.1rem' }}></i><div><div style={{ color: '#fff', fontSize: '.82rem', fontWeight: '600' }}>Web Browser</div><div style={{ color: 'rgba(255,255,255,.4)', fontSize: '.72rem' }}>WebRTC softphone</div></div></div></div>
            <div className="col-6"><div style={{ background: 'rgba(251,146,60,.08)', border: '1px solid rgba(251,146,60,.2)', borderRadius: '12px', padding: '14px', display: 'flex', alignItems: 'center', gap: '10px' }}><i className="fas fa-headset" style={{ color: '#fb923c', fontSize: '1.1rem' }}></i><div><div style={{ color: '#fff', fontSize: '.82rem', fontWeight: '600' }}>Call Center Agents</div><div style={{ color: 'rgba(255,255,255,.4)', fontSize: '.72rem' }}>In-office or remote</div></div></div></div>
          </div>
          <div style={{ marginTop: '20px', display: 'grid', gridTemplateColumns: 'repeat(3,1fr)', gap: '10px' }}>
            <div style={{ textAlign: 'center', padding: '12px', background: 'rgba(255,255,255,.03)', borderRadius: '10px' }}><div style={{ color: '#4ade80', fontWeight: '800', fontSize: '1.2rem' }}>∞</div><div style={{ color: 'rgba(255,255,255,.45)', fontSize: '.72rem' }}>Extensions</div></div>
            <div style={{ textAlign: 'center', padding: '12px', background: 'rgba(255,255,255,.03)', borderRadius: '10px' }}><div style={{ color: '#4ade80', fontWeight: '800', fontSize: '1.2rem' }}>24/7</div><div style={{ color: 'rgba(255,255,255,.45)', fontSize: '.72rem' }}>Availability</div></div>
            <div style={{ textAlign: 'center', padding: '12px', background: 'rgba(255,255,255,.03)', borderRadius: '10px' }}><div style={{ color: '#4ade80', fontWeight: '800', fontSize: '1.2rem' }}>99.9%</div><div style={{ color: 'rgba(255,255,255,.45)', fontSize: '.72rem' }}>Uptime SLA</div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="features" className="section-alt" style={{ padding: '100px 0' }}>
  <div className="container">
    <div className="row justify-content-center text-center mb-5"><div className="col-lg-7" data-aos="fade-up"><div className="section-badge"><i className="fas fa-th-large"></i> Features</div><h2 className="section-title">Everything Your Business <span className="accent">Phone Needs</span></h2><p className="section-sub mx-auto">A complete enterprise phone system without the enterprise price tag or complexity.</p></div></div>
    <div className="row g-4">
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div className="feat-card"><div className="feat-icon"><i className="fas fa-sitemap"></i></div><h5>Multi-Level IVR</h5><p>Build sophisticated auto-attendant menus with drag-and-drop simplicity. Route callers by department, language, or business hours with no coding required.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="60"><div className="feat-card"><div className="feat-icon"><i className="fas fa-users"></i></div><h5>Unlimited Extensions</h5><p>Add users and departments instantly — scale from 5 to 5,000 seats with no infrastructure changes. Each user gets desktop, mobile, and web access.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120"><div className="feat-card"><div className="feat-icon"><i className="fas fa-video"></i></div><h5>Video Conferencing</h5><p>Built-in multi-party video calls with screen sharing, chat, and recording. Host meetings without third-party tools — right from your PBX dashboard.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="180"><div className="feat-card"><div className="feat-icon"><i className="fas fa-plug"></i></div><h5>CRM Integration</h5><p>Native connectors for Salesforce, HubSpot, Zoho, Microsoft Dynamics, and 50+ platforms. Automatically log calls, pop screen records on inbound calls.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240"><div className="feat-card"><div className="feat-icon"><i className="fas fa-mobile-alt"></i></div><h5>Mobile Softphone App</h5><p>iOS and Android apps let your team take and make business calls from anywhere. Your office number rings on every device — desktop, mobile, and browser.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300"><div className="feat-card"><div className="feat-icon"><i className="fas fa-record-vinyl"></i></div><h5>Call Recording</h5><p>On-demand or automatic call recording with encrypted cloud storage, searchable transcripts, and one-click playback for compliance and training.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="360"><div className="feat-card"><div className="feat-icon"><i className="fas fa-voicemail"></i></div><h5>Visual Voicemail</h5><p>Voicemails transcribed to text and delivered via email or app. Never miss a message — listen, read, or forward voicemails from any device.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="420"><div className="feat-card"><div className="feat-icon"><i className="fas fa-clock"></i></div><h5>Time-Based Routing</h5><p>Automatically route calls differently during business hours, after-hours, holidays, and weekends. Set it once and your PBX handles everything.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="480"><div className="feat-card"><div className="feat-icon"><i className="fas fa-chart-pie"></i></div><h5>Call Analytics</h5><p>Real-time dashboards with call volumes, wait times, agent performance, and customer satisfaction scores. Export reports in any format.</p></div></div>
    </div>
  </div>
</section>

<section className="section-dark" style={{ padding: '80px 0', position: 'relative', overflow: 'hidden' }}>
  <div style={{ position: 'absolute', inset: '-60px', background: 'radial-gradient(ellipse 90% 70% at 50% 50%,rgba(34,197,94,.12) 0%,transparent 65%)', willChange: 'transform' }} id="statsBg"></div>
  <div className="container position-relative" style={{ zIndex: '2' }}>
    <div className="row g-4 text-center">
      <div className="col-6 col-lg-3" data-aos="zoom-in"><div className="mini-stat"><div className="num">∞</div><div className="lbl">Extensions</div></div></div>
      <div className="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="80"><div className="mini-stat"><div className="num" data-count="50">0</div><div>+</div><div className="lbl">CRM Integrations</div></div></div>
      <div className="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="160"><div className="mini-stat"><div className="num" data-count="99">0</div><div>.9%</div><div className="lbl">Uptime SLA</div></div></div>
      <div className="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="240"><div className="mini-stat"><div className="num" data-count="48">0</div><div>hrs</div><div className="lbl">Setup Time</div></div></div>
    </div>
  </div>
</section>

<section className="section-alt" style={{ padding: '100px 0' }}>
  <div className="container">
    <div className="row align-items-center g-5">
      <div className="col-lg-6" data-aos="fade-right">
        <div className="section-badge"><i className="fas fa-sitemap"></i> Getting Started</div>
        <h2 className="section-title">Up &amp; Running in <span className="accent">48 Hours</span></h2>
        <div className="divider"></div>
        <div className="how-step"><div className="how-num">1</div><div><h5>Sign Up &amp; Plan Selection</h5><p>Choose your plan based on the number of users and features needed. Our team will reach out within 24 hours to confirm your requirements.</p></div></div>
        <div className="how-step"><div className="how-num">2</div><div><h5>Configure Your PBX</h5><p>Set up extensions, IVR menus, and call routing via our intuitive web dashboard. Our onboarding team walks you through each step.</p></div></div>
        <div className="how-step"><div className="how-num">3</div><div><h5>Connect Your Numbers</h5><p>Port existing numbers or provision new DID numbers in 60+ countries. Numbers are ready in hours, not weeks.</p></div></div>
        <div className="how-step"><div className="how-num">4</div><div><h5>Train &amp; Go Live</h5><p>Install softphone apps on your team's devices, run a 30-minute training session, and go live. No downtime, no technical headaches.</p></div></div>
      </div>
      <div className="col-lg-6" data-aos="fade-left" data-aos-delay="150">
        <div style={{ background: 'rgba(255,255,255,.03)', border: '1px solid rgba(255,255,255,.08)', borderRadius: '22px', padding: '40px' }}>
          <h5 style={{ color: '#fff', fontWeight: '700', marginBottom: '24px' }}><i className="fas fa-check-circle" style={{ color: '#4ade80', marginRight: '10px' }}></i>What's Included</h5>
          <ul className="check-list">
            <li><i className="fas fa-check-circle"></i> Unlimited extensions & ring groups</li>
            <li><i className="fas fa-check-circle"></i> Multi-level IVR & auto-attendant</li>
            <li><i className="fas fa-check-circle"></i> HD video conferencing & screen share</li>
            <li><i className="fas fa-check-circle"></i> Mobile & browser softphone apps</li>
            <li><i className="fas fa-check-circle"></i> Call recording with transcription</li>
            <li><i className="fas fa-check-circle"></i> Voicemail to email / text</li>
            <li><i className="fas fa-check-circle"></i> CRM integration (50+ platforms)</li>
            <li><i className="fas fa-check-circle"></i> Time-based & skill-based routing</li>
            <li><i className="fas fa-check-circle"></i> Call analytics & real-time reports</li>
            <li><i className="fas fa-check-circle"></i> 24/7 NOC support</li>
          </ul>
          <div style={{ marginTop: '28px', padding: '20px', background: 'rgba(34,197,94,.08)', border: '1px solid rgba(34,197,94,.2)', borderRadius: '14px' }}>
            <div style={{ color: '#fff', fontWeight: '600', marginBottom: '6px' }}>🏢 Works for Remote Teams Too</div>
            <div style={{ color: 'rgba(255,255,255,.55)', fontSize: '.88rem', lineHeight: '1.6' }}>Our hosted PBX is fully cloud-based. Agents can work from any location, device, or internet connection — perfect for hybrid and remote workforces.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section className="section-dark" style={{ padding: '100px 0' }}>
  <div className="container">
    <div className="row justify-content-center text-center mb-5"><div className="col-lg-7" data-aos="fade-up"><div className="section-badge"><i className="fas fa-users"></i> Use Cases</div><h2 className="section-title">Perfect for <span className="accent">Every Business</span></h2></div></div>
    <div className="row g-3">
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div className="use-card"><div className="use-icon"><i className="fas fa-laptop-house"></i></div><div><h6>Remote & Hybrid Teams</h6><p>Keep distributed teams connected with a single unified phone system that works on any device from any location.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="60"><div className="use-card"><div className="use-icon"><i className="fas fa-store"></i></div><div><h6>SMBs & Startups</h6><p>Get enterprise-grade phone features without enterprise costs. No upfront hardware — pay monthly as your team grows.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120"><div className="use-card"><div className="use-icon"><i className="fas fa-city"></i></div><div><h6>Multi-Branch Companies</h6><p>Connect offices across different cities or countries on one unified system. Internal calls are free, all managed from one dashboard.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="180"><div className="use-card"><div className="use-icon"><i className="fas fa-hospital"></i></div><div><h6>Healthcare & Clinics</h6><p>HIPAA-compliant call handling with appointment scheduling IVR, call recording for compliance, and voicemail-to-text.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240"><div className="use-card"><div className="use-icon"><i className="fas fa-graduation-cap"></i></div><div><h6>Education Institutions</h6><p>Manage complex call routing across departments, campuses, and faculties with a single cloud system.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300"><div className="use-card"><div className="use-icon"><i className="fas fa-hotel"></i></div><div><h6>Hospitality & Hotels</h6><p>Guest room phones, front desk routing, concierge IVR, and housekeeping integration — all in one PBX platform.</p></div></div></div>
    </div>
  </div>
</section>

<section className="section-alt" style={{ padding: '80px 0' }}>
  <div className="container"><div className="row justify-content-center"><div className="col-lg-8" data-aos="fade-up">
    <div className="testi">
      <div style={{ color: '#f59e0b', fontSize: '.9rem', marginBottom: '14px', letterSpacing: '2px' }}>★★★★★</div>
      <p style={{ color: 'rgba(255,255,255,.75)', fontSize: '1.05rem', lineHeight: '1.8', marginBottom: '24px' }}>"We replaced our aging on-premises PBX with First Step Technology's hosted solution and haven't looked back. Setup took 48 hours, our remote teams across 8 countries are now on the same system, and the monthly cost is 40% less than what we were paying for hardware maintenance alone."</p>
      <div style={{ display: 'flex', alignItems: 'center', gap: '14px' }}><div style={{ width: '48px', height: '48px', borderRadius: '50%', background: 'linear-gradient(135deg,#22c55e,#06b6d4)', display: 'flex', alignItems: 'center', justifyContent: 'center', fontWeight: '700', color: '#fff' }}>NK</div><div><div style={{ color: '#fff', fontWeight: '600' }}>Nina Kowalski</div><div style={{ color: 'rgba(255,255,255,.45)', fontSize: '.82rem' }}>IT Director, EuroGroup Holdings</div></div></div>
    </div>
  </div></div></div>
</section>

<section className="svc-cta">
  <div className="svc-cta-bg" id="ctaBg"></div>
  <div className="container"><div className="row justify-content-center text-center" style={{ position: 'relative', zIndex: '2' }}><div className="col-lg-7" data-aos="zoom-in">
    <div className="section-badge mx-auto mb-3"><i className="fas fa-rocket"></i> Get Started</div>
    <h2 style={{ fontFamily: "'Poppins',sans-serif", fontSize: 'clamp(2rem,4vw,3rem)', fontWeight: '800', color: '#fff', marginBottom: '18px' }}>Move Your Phone System <span style={{ background: 'linear-gradient(90deg,#22c55e,#06b6d4)', WebkitBackgroundClip: 'text', WebkitTextFillColor: 'transparent', backgroundClip: 'text' }}>to the Cloud</span></h2>
    <p style={{ color: 'rgba(255,255,255,.6)', fontSize: '1.05rem', maxWidth: '500px', margin: '0 auto 32px', lineHeight: '1.75' }}>No hardware, no hassle. Get a live demo and see your new PBX in action within the hour.</p>
    <div className="d-flex gap-3 justify-content-center flex-wrap"><Link href="/contact" className="btn-primary-grad" style={{ background: 'linear-gradient(135deg,#22c55e,#06b6d4)' }}><i className="fas fa-paper-plane"></i> Request a Demo</Link><Link href="/services" className="btn-outline-light-custom"><i className="fas fa-th-large"></i> All Services</Link></div>
  </div></div></div>
</section>
    </main>
  );
}




