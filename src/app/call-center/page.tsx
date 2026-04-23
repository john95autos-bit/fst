import Link from 'next/link';
import type { Metadata } from 'next';

export const metadata: Metadata = {
  title: 'First Step Technology - Call Center',
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
        <nav aria-label="breadcrumb" style={{ marginBottom: '18px' }}><div style={{ display: 'flex', alignItems: 'center', gap: '8px', fontSize: '.85rem', color: 'rgba(255,255,255,.4)' }}><Link href="/" style={{ color: '#f9a8d4' }}>Home</Link><span>/</span><Link href="/services" style={{ color: '#f9a8d4' }}>Services</Link><span>/</span><span>Call Center</span></div></nav>
        <div className="svc-badge"><i className="fas fa-headset fa-xs"></i> Call Center Suite</div>
        <h1 style={{ fontFamily: "'Poppins',sans-serif", fontSize: 'clamp(2.4rem,5vw,4rem)', fontWeight: '800', color: '#fff', lineHeight: '1.12', marginBottom: '22px' }}>The Complete<br /><span style={{ background: 'linear-gradient(90deg,#ec4899,#8b5cf6)', WebkitBackgroundClip: 'text', WebkitTextFillColor: 'transparent', backgroundClip: 'text' }}>Call Center Platform</span></h1>
        <p style={{ fontSize: '1.05rem', color: 'rgba(255,255,255,.62)', lineHeight: '1.8', marginBottom: '32px' }}>A comprehensive inbound and outbound call center solution with unlimited agents — in-office or remote. Real-time monitoring, ACD queuing, call recording, supervisor tools, and performance dashboards all in one powerful platform.</p>
        <div className="d-flex flex-wrap gap-3 mb-4">
          <Link href="/contact" className="btn-primary-grad" style={{ background: 'linear-gradient(135deg,#ec4899,#8b5cf6)', boxShadow: '0 8px 28px rgba(236,72,153,.3)' }}><i className="fas fa-paper-plane"></i> Book a Demo</Link>
          <Link href="#features" className="btn-outline-light-custom"><i className="fas fa-th-large"></i> See Features</Link>
        </div>
        <div>
          <span style={{ display: 'inline-flex', alignItems: 'center', gap: '6px', padding: '5px 14px', borderRadius: '50px', background: 'rgba(255,255,255,.06)', border: '1px solid rgba(255,255,255,.12)', fontSize: '.8rem', color: 'rgba(255,255,255,.6)', margin: '4px' }}><i className="fas fa-check" style={{ color: '#22c55e' }}></i> Unlimited Agents</span>
          <span style={{ display: 'inline-flex', alignItems: 'center', gap: '6px', padding: '5px 14px', borderRadius: '50px', background: 'rgba(255,255,255,.06)', border: '1px solid rgba(255,255,255,.12)', fontSize: '.8rem', color: 'rgba(255,255,255,.6)', margin: '4px' }}><i className="fas fa-check" style={{ color: '#22c55e' }}></i> ACD Queues</span>
          <span style={{ display: 'inline-flex', alignItems: 'center', gap: '6px', padding: '5px 14px', borderRadius: '50px', background: 'rgba(255,255,255,.06)', border: '1px solid rgba(255,255,255,.12)', fontSize: '.8rem', color: 'rgba(255,255,255,.6)', margin: '4px' }}><i className="fas fa-check" style={{ color: '#22c55e' }}></i> Supervisor Tools</span>
          <span style={{ display: 'inline-flex', alignItems: 'center', gap: '6px', padding: '5px 14px', borderRadius: '50px', background: 'rgba(255,255,255,.06)', border: '1px solid rgba(255,255,255,.12)', fontSize: '.8rem', color: 'rgba(255,255,255,.6)', margin: '4px' }}><i className="fas fa-check" style={{ color: '#22c55e' }}></i> Remote Agents</span>
        </div>
      </div>
      <div className="col-lg-6" data-aos="fade-left" data-aos-delay="200">
        <div style={{ background: 'rgba(255,255,255,.04)', border: '1px solid rgba(255,255,255,.1)', borderRadius: '24px', padding: '28px' }}>
          <div style={{ display: 'flex', justifyContent: 'space-between', alignItems: 'center', marginBottom: '20px' }}>
            <div style={{ color: '#fff', fontWeight: '700', fontSize: '.95rem' }}><i className="fas fa-tachometer-alt" style={{ color: '#f9a8d4', marginRight: '8px' }}></i>Live Supervisor View</div>
            <span style={{ background: 'rgba(34,197,94,.1)', border: '1px solid rgba(34,197,94,.25)', borderRadius: '20px', padding: '3px 12px', color: '#22c55e', fontSize: '.75rem', display: 'flex', alignItems: 'center', gap: '5px' }}><span style={{ width: '6px', height: '6px', background: '#22c55e', borderRadius: '50%', animation: 'pulse 2s infinite' }}></span>Live</span>
          </div>
          <div style={{ display: 'grid', gridTemplateColumns: 'repeat(3,1fr)', gap: '10px', marginBottom: '20px' }}>
            <div style={{ background: 'rgba(236,72,153,.1)', border: '1px solid rgba(236,72,153,.2)', borderRadius: '10px', padding: '12px', textAlign: 'center' }}><div style={{ color: '#f9a8d4', fontWeight: '800', fontSize: '1.3rem' }}>24</div><div style={{ color: 'rgba(255,255,255,.45)', fontSize: '.7rem' }}>Agents Online</div></div>
            <div style={{ background: 'rgba(34,197,94,.08)', border: '1px solid rgba(34,197,94,.2)', borderRadius: '10px', padding: '12px', textAlign: 'center' }}><div style={{ color: '#4ade80', fontWeight: '800', fontSize: '1.3rem' }}>187</div><div style={{ color: 'rgba(255,255,255,.45)', fontSize: '.7rem' }}>Calls Today</div></div>
            <div style={{ background: 'rgba(245,158,11,.08)', border: '1px solid rgba(245,158,11,.2)', borderRadius: '10px', padding: '12px', textAlign: 'center' }}><div style={{ color: '#fbbf24', fontWeight: '800', fontSize: '1.3rem' }}>12s</div><div style={{ color: 'rgba(255,255,255,.45)', fontSize: '.7rem' }}>Avg Wait</div></div>
          </div>
          <div style={{ color: 'rgba(255,255,255,.5)', fontSize: '.75rem', textTransform: 'uppercase', letterSpacing: '1px', marginBottom: '10px' }}>Agent Status</div>
          <div className="agent-row"><div className="agent-av" style={{ background: 'linear-gradient(135deg,#ec4899,#8b5cf6)' }}>AK</div><div style={{ flex: '1' }}><div style={{ color: '#fff', fontSize: '.85rem', fontWeight: '500' }}>Alex Kim</div><div style={{ color: 'rgba(255,255,255,.4)', fontSize: '.72rem' }}>On call — 4:32</div></div><div className="agent-status status-busy"></div><div style={{ color: '#f59e0b', fontSize: '.75rem' }}>BUSY</div></div>
          <div className="agent-row"><div className="agent-av" style={{ background: 'linear-gradient(135deg,#22c55e,#06b6d4)' }}>SR</div><div style={{ flex: '1' }}><div style={{ color: '#fff', fontSize: '.85rem', fontWeight: '500' }}>Sara Reyes</div><div style={{ color: 'rgba(255,255,255,.4)', fontSize: '.72rem' }}>Ready — 1:15</div></div><div className="agent-status status-available"></div><div style={{ color: '#22c55e', fontSize: '.75rem' }}>READY</div></div>
          <div className="agent-row"><div className="agent-av" style={{ background: 'linear-gradient(135deg,#8b5cf6,#06b6d4)' }}>MT</div><div style={{ flex: '1' }}><div style={{ color: '#fff', fontSize: '.85rem', fontWeight: '500' }}>Mark Tang</div><div style={{ color: 'rgba(255,255,255,.4)', fontSize: '.72rem' }}>After-call work</div></div><div className="agent-status status-break"></div><div style={{ color: '#9ca3af', fontSize: '.75rem' }}>ACW</div></div>
          <div style={{ marginTop: '14px', background: 'rgba(236,72,153,.06)', border: '1px solid rgba(236,72,153,.15)', borderRadius: '10px', padding: '12px', display: 'flex', justifyContent: 'space-between' }}>
            <span style={{ color: 'rgba(255,255,255,.5)', fontSize: '.8rem' }}>Queue: Support</span>
            <span style={{ color: '#f9a8d4', fontWeight: '600', fontSize: '.8rem' }}>3 callers waiting</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="features" className="section-alt" style={{ padding: '100px 0' }}>
  <div className="container">
    <div className="row justify-content-center text-center mb-5"><div className="col-lg-7" data-aos="fade-up"><div className="section-badge"><i className="fas fa-th-large"></i> Features</div><h2 className="section-title">Everything to Run a <span className="accent">World-Class Contact Center</span></h2><p className="section-sub mx-auto">Inbound, outbound, supervisor tools, and analytics — one platform, unlimited scale.</p></div></div>
    <div className="row g-4">
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div className="feat-card"><div className="feat-icon"><i className="fas fa-users"></i></div><h5>Unlimited Agents</h5><p>No per-seat licensing limits. Add agents without cost surprises. Agents can work from office, home, or any location worldwide via browser.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="60"><div className="feat-card"><div className="feat-icon"><i className="fas fa-list-ol"></i></div><h5>ACD & Skill-Based Routing</h5><p>Automatic Call Distribution routes each call to the best agent based on skill set, language, priority, availability, and queue thresholds.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120"><div className="feat-card"><div className="feat-icon"><i className="fas fa-eye"></i></div><h5>Supervisor Dashboard</h5><p>Live monitoring of all queues and agents. Whisper coaching, barge-in, call takeover, and silent monitoring — all from the supervisor panel.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="180"><div className="feat-card"><div className="feat-icon"><i className="fas fa-sitemap"></i></div><h5>IVR & Virtual Callback</h5><p>Multi-level IVR reduces unnecessary queuing. Virtual callback lets callers keep their place in queue without waiting on hold.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240"><div className="feat-card"><div className="feat-icon"><i className="fas fa-record-vinyl"></i></div><h5>Call Recording</h5><p>Automatic or on-demand call recording with encrypted storage, searchable transcripts, and easy playback for QA and compliance.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300"><div className="feat-card"><div className="feat-icon"><i className="fas fa-chart-bar"></i></div><h5>KPI & Performance Reports</h5><p>Track ASA, FCR, AHT, CSAT, NPS, abandonment rate, and 40+ other metrics in real-time. Schedule automated reports to stakeholders.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="360"><div className="feat-card"><div className="feat-icon"><i className="fas fa-plug"></i></div><h5>CRM Integration</h5><p>Screen pop on inbound calls, automatic call logging, and click-to-dial from Salesforce, HubSpot, Zoho, and 50+ CRM platforms.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="420"><div className="feat-card"><div className="feat-icon"><i className="fas fa-comments"></i></div><h5>Omnichannel Support</h5><p>Handle voice, SMS, webchat, and email from a single agent desktop. Unified queue management across all communication channels.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="480"><div className="feat-card"><div className="feat-icon"><i className="fas fa-laptop-house"></i></div><h5>Remote Agent Ready</h5><p>100% browser-based agent interface — no software installation required. Works on any device with a stable internet connection.</p></div></div>
    </div>
  </div>
</section>

<section className="section-dark" style={{ padding: '80px 0', position: 'relative', overflow: 'hidden' }}>
  <div style={{ position: 'absolute', inset: '-60px', background: 'radial-gradient(ellipse 90% 70% at 50% 50%,rgba(236,72,153,.12) 0%,transparent 65%)', willChange: 'transform' }} id="statsBg"></div>
  <div className="container position-relative" style={{ zIndex: '2' }}>
    <div className="row g-4 text-center">
      <div className="col-6 col-lg-3" data-aos="zoom-in"><div className="mini-stat"><div className="num">∞</div><div className="lbl">Agent Seats</div></div></div>
      <div className="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="80"><div className="mini-stat"><div className="num" data-count="40">0</div><div>+</div><div className="lbl">KPI Metrics</div></div></div>
      <div className="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="160"><div className="mini-stat"><div className="num" data-count="50">0</div><div>+</div><div className="lbl">CRM Integrations</div></div></div>
      <div className="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="240"><div className="mini-stat"><div className="num" data-count="99">0</div><div>.9%</div><div className="lbl">Platform Uptime</div></div></div>
    </div>
  </div>
</section>

<section className="section-alt" style={{ padding: '100px 0' }}>
  <div className="container">
    <div className="row align-items-center g-5">
      <div className="col-lg-6" data-aos="fade-right">
        <div className="section-badge"><i className="fas fa-sitemap"></i> Deployment</div>
        <h2 className="section-title">Launch Your Contact Center <span className="accent">in Days</span></h2>
        <div className="divider"></div>
        <div className="how-step"><div className="how-num">1</div><div><h5>Define Your Setup</h5><p>Share your agent count, call volumes, required queues, and CRM platform. We design your call center configuration based on your needs.</p></div></div>
        <div className="how-step"><div className="how-num">2</div><div><h5>Build Your IVR & Queues</h5><p>We configure your IVR menus, ACD routing rules, and skill groups. Connect your DID numbers and existing SIP infrastructure in hours.</p></div></div>
        <div className="how-step"><div className="how-num">3</div><div><h5>Agent & Supervisor Training</h5><p>Our team delivers 2-hour training for agents and supervisors. The browser-based interface is intuitive enough that most agents are proficient same-day.</p></div></div>
        <div className="how-step"><div className="how-num">4</div><div><h5>Go Live with Full Support</h5><p>Launch with our team on standby. Real-time monitoring ensures a smooth cutover, and 24/7 NOC support is always one call away.</p></div></div>
      </div>
      <div className="col-lg-6" data-aos="fade-left" data-aos-delay="150">
        <div style={{ background: 'rgba(255,255,255,.03)', border: '1px solid rgba(255,255,255,.08)', borderRadius: '22px', padding: '40px' }}>
          <h5 style={{ color: '#fff', fontWeight: '700', marginBottom: '24px' }}><i className="fas fa-check-circle" style={{ color: '#f9a8d4', marginRight: '10px' }}></i>What's Included</h5>
          <ul className="check-list">
            <li><i className="fas fa-check-circle"></i> Unlimited agent seats</li>
            <li><i className="fas fa-check-circle"></i> ACD with skill-based routing</li>
            <li><i className="fas fa-check-circle"></i> Multi-level IVR & virtual callback</li>
            <li><i className="fas fa-check-circle"></i> Supervisor whisper, barge, monitor</li>
            <li><i className="fas fa-check-circle"></i> Call recording & transcription</li>
            <li><i className="fas fa-check-circle"></i> 40+ real-time KPI dashboards</li>
            <li><i className="fas fa-check-circle"></i> CRM integration (50+ platforms)</li>
            <li><i className="fas fa-check-circle"></i> Omnichannel (voice, SMS, chat)</li>
            <li><i className="fas fa-check-circle"></i> Remote agent browser client</li>
            <li><i className="fas fa-check-circle"></i> 24/7 NOC support</li>
          </ul>
          <div style={{ marginTop: '28px', padding: '20px', background: 'rgba(236,72,153,.08)', border: '1px solid rgba(236,72,153,.2)', borderRadius: '14px' }}>
            <div style={{ color: '#fff', fontWeight: '600', marginBottom: '6px' }}>💡 Pair With Auto-Dialer</div>
            <div style={{ color: 'rgba(255,255,255,.55)', fontSize: '.88rem', lineHeight: '1.6' }}>Combine the Call Center Suite with our <Link href="/auto-dialer" style={{ color: '#f9a8d4' }}>Auto-Dialer</Link> for complete inbound + outbound capability in one unified platform.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section className="section-dark" style={{ padding: '100px 0' }}>
  <div className="container">
    <div className="row justify-content-center text-center mb-5"><div className="col-lg-7" data-aos="fade-up"><div className="section-badge"><i className="fas fa-users"></i> Use Cases</div><h2 className="section-title">Built for <span className="accent">Every Type</span> of Contact Center</h2></div></div>
    <div className="row g-3">
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div className="use-card"><div className="use-icon"><i className="fas fa-headset"></i></div><div><h6>Customer Support Centers</h6><p>Handle high inbound call volumes with ACD queuing, priority routing, and supervisor monitoring to maintain SLA targets.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="60"><div className="use-card"><div className="use-icon"><i className="fas fa-briefcase"></i></div><div><h6>BPO & Outsourcing</h6><p>Run multiple client campaigns on one platform. Separate agent pools, queues, and reporting by client with full isolation.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120"><div className="use-card"><div className="use-icon"><i className="fas fa-laptop-code"></i></div><div><h6>Technical Support</h6><p>Route technical calls based on product expertise, language, and tier level. Escalation queues ensure complex issues reach the right specialist.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="180"><div className="use-card"><div className="use-icon"><i className="fas fa-heartbeat"></i></div><div><h6>Healthcare Call Centers</h6><p>Appointment scheduling, nurse triage lines, and patient callback management with full recording for compliance and quality assurance.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240"><div className="use-card"><div className="use-icon"><i className="fas fa-university"></i></div><div><h6>Financial Services</h6><p>Secure, recorded interactions for banking, insurance, and fintech customer service with compliance-ready recording and reporting.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300"><div className="use-card"><div className="use-icon"><i className="fas fa-shopping-bag"></i></div><div><h6>Retail & E-Commerce</h6><p>Order support, returns, and customer care lines with CRM screen pop showing order history the moment a customer calls.</p></div></div></div>
    </div>
  </div>
</section>

<section className="section-alt" style={{ padding: '80px 0' }}>
  <div className="container"><div className="row justify-content-center"><div className="col-lg-8" data-aos="fade-up">
    <div className="testi">
      <div style={{ color: '#f59e0b', fontSize: '.9rem', marginBottom: '14px', letterSpacing: '2px' }}>★★★★★</div>
      <p style={{ color: 'rgba(255,255,255,.75)', fontSize: '1.05rem', lineHeight: '1.8', marginBottom: '24px' }}>"We run a 120-agent BPO operation across 3 countries. First Step Technology's call center platform handles all our clients on one system with complete separation. The supervisor monitoring tools have dramatically improved our QA process, and our clients love the detailed reporting we can now provide."</p>
      <div style={{ display: 'flex', alignItems: 'center', gap: '14px' }}><div style={{ width: '48px', height: '48px', borderRadius: '50%', background: 'linear-gradient(135deg,#ec4899,#8b5cf6)', display: 'flex', alignItems: 'center', justifyContent: 'center', fontWeight: '700', color: '#fff' }}>JA</div><div><div style={{ color: '#fff', fontWeight: '600' }}>James Adeyemi</div><div style={{ color: 'rgba(255,255,255,.45)', fontSize: '.82rem' }}>COO, ProConnect BPO</div></div></div>
    </div>
  </div></div></div>
</section>

<section className="svc-cta">
  <div className="svc-cta-bg" id="ctaBg"></div>
  <div className="container"><div className="row justify-content-center text-center" style={{ position: 'relative', zIndex: '2' }}><div className="col-lg-7" data-aos="zoom-in">
    <div className="section-badge mx-auto mb-3"><i className="fas fa-headset"></i> Start Today</div>
    <h2 style={{ fontFamily: "'Poppins',sans-serif", fontSize: 'clamp(2rem,4vw,3rem)', fontWeight: '800', color: '#fff', marginBottom: '18px' }}>Transform Your <span style={{ background: 'linear-gradient(90deg,#ec4899,#8b5cf6)', WebkitBackgroundClip: 'text', WebkitTextFillColor: 'transparent', backgroundClip: 'text' }}>Contact Center</span></h2>
    <p style={{ color: 'rgba(255,255,255,.6)', fontSize: '1.05rem', maxWidth: '500px', margin: '0 auto 32px', lineHeight: '1.75' }}>Unlimited agents, enterprise features, and 24/7 support — without enterprise pricing.</p>
    <div className="d-flex gap-3 justify-content-center flex-wrap"><Link href="/contact" className="btn-primary-grad" style={{ background: 'linear-gradient(135deg,#ec4899,#8b5cf6)' }}><i className="fas fa-paper-plane"></i> Book a Demo</Link><Link href="/auto-dialer" className="btn-outline-light-custom"><i className="fas fa-robot"></i> Add Auto-Dialer</Link></div>
  </div></div></div>
</section>
    </main>
  );
}




