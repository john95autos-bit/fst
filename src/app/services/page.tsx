import Link from 'next/link';
import type { Metadata } from 'next';

export const metadata: Metadata = {
  title: 'First Step Technology - Services',
};

export default function Page() {
  return (
    <main>
      {/*  PAGE BANNER  */}
<section className="page-banner">
  <div className="page-banner-bg" id="bannerBg"></div>
  <div className="page-banner-grid"></div>
  <div className="container page-banner-content">
    <div className="row align-items-center g-5">
      <div className="col-lg-7" data-aos="fade-right" data-aos-duration="800">
        <div className="breadcrumb-nav"><Link href="/">Home</Link><span>/</span><span>Services</span></div>
        <h1>Complete <span className="highlight">Voice Solutions</span> for Every Business</h1>
        <p>From retail IP voice to enterprise call center suites — six powerful products built on our carrier-grade global infrastructure.</p>
        <div className="d-flex gap-3 flex-wrap mt-4">
          <Link href="/contact" className="btn-primary-grad"><i className="fas fa-paper-plane"></i> Request a Demo</Link>
          <Link href="#compare" className="btn-outline-light-custom"><i className="fas fa-table"></i> Compare Plans</Link>
        </div>
      </div>
      <div className="col-lg-5" data-aos="fade-left" data-aos-delay="200">
        <div className="row g-3">
          <div className="col-6"><div style={{ background: 'rgba(13,110,253,.1)', border: '1px solid rgba(13,110,253,.25)', borderRadius: '16px', padding: '20px', textAlign: 'center' }}><i className="fas fa-phone-volume" style={{ color: 'var(--cyan)', fontSize: '1.8rem', display: 'block', marginBottom: '10px' }}></i><div style={{ color: '#fff', fontWeight: '600', fontSize: '.9rem' }}>Retail Voice</div></div></div>
          <div className="col-6"><div style={{ background: 'rgba(139,92,246,.1)', border: '1px solid rgba(139,92,246,.25)', borderRadius: '16px', padding: '20px', textAlign: 'center' }}><i className="fas fa-server" style={{ color: '#a78bfa', fontSize: '1.8rem', display: 'block', marginBottom: '10px' }}></i><div style={{ color: '#fff', fontWeight: '600', fontSize: '.9rem' }}>Wholesale</div></div></div>
          <div className="col-6"><div style={{ background: 'rgba(34,197,94,.08)', border: '1px solid rgba(34,197,94,.2)', borderRadius: '16px', padding: '20px', textAlign: 'center' }}><i className="fas fa-building" style={{ color: '#4ade80', fontSize: '1.8rem', display: 'block', marginBottom: '10px' }}></i><div style={{ color: '#fff', fontWeight: '600', fontSize: '.9rem' }}>Hosted PBX</div></div></div>
          <div className="col-6"><div style={{ background: 'rgba(251,146,60,.08)', border: '1px solid rgba(251,146,60,.2)', borderRadius: '16px', padding: '20px', textAlign: 'center' }}><i className="fas fa-hashtag" style={{ color: '#fb923c', fontSize: '1.8rem', display: 'block', marginBottom: '10px' }}></i><div style={{ color: '#fff', fontWeight: '600', fontSize: '.9rem' }}>DID Numbers</div></div></div>
          <div className="col-6"><div style={{ background: 'rgba(236,72,153,.08)', border: '1px solid rgba(236,72,153,.2)', borderRadius: '16px', padding: '20px', textAlign: 'center' }}><i className="fas fa-headset" style={{ color: '#f472b6', fontSize: '1.8rem', display: 'block', marginBottom: '10px' }}></i><div style={{ color: '#fff', fontWeight: '600', fontSize: '.9rem' }}>Call Center</div></div></div>
          <div className="col-6"><div style={{ background: 'rgba(20,184,166,.08)', border: '1px solid rgba(20,184,166,.2)', borderRadius: '16px', padding: '20px', textAlign: 'center' }}><i className="fas fa-robot" style={{ color: '#2dd4bf', fontSize: '1.8rem', display: 'block', marginBottom: '10px' }}></i><div style={{ color: '#fff', fontWeight: '600', fontSize: '.9rem' }}>Auto-Dialer</div></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

{/*  SERVICES TABS  */}
<section id="services">
  <div className="container">
    {/*  Tab Buttons  */}
    <div className="svc-tabs" data-aos="fade-up">
      <button className="svc-tab active" ><i className="fas fa-phone-volume me-1"></i> Retail Voice</button>
      <button className="svc-tab" ><i className="fas fa-server me-1"></i> Wholesale</button>
      <button className="svc-tab" ><i className="fas fa-building me-1"></i> Hosted PBX</button>
      <button className="svc-tab" ><i className="fas fa-hashtag me-1"></i> DID &amp; Toll-Free</button>
      <button className="svc-tab" ><i className="fas fa-headset me-1"></i> Call Center</button>
      <button className="svc-tab" ><i className="fas fa-robot me-1"></i> Auto-Dialer</button>
    </div>

    {/*  Retail Voice  */}
    <div className="svc-panel active" id="panel-retail">
      <div className="svc-detail-wrap">
        <div className="svc-detail-header" style={{ background: 'linear-gradient(135deg,rgba(13,110,253,.08),transparent)' }}>
          <div className="svc-detail-header::before" style={{ background: '#0d6efd' }}></div>
          <div className="svc-detail-icon" style={{ background: 'linear-gradient(135deg,rgba(13,110,253,.2),rgba(0,198,255,.15))', color: 'var(--cyan)' }}><i className="fas fa-phone-volume"></i></div>
          <h2>Retail IP Voice Services</h2>
          <p>Access high-quality worldwide voice termination through a single IP connection. Our retail voice service leverages our global carrier-grade backbone to deliver crystal-clear calls to any destination — at rates that keep you competitive.</p>
          <div className="mt-3 d-flex flex-wrap gap-2">
            <Link href="/contact" className="btn-primary-grad"><i className="fas fa-paper-plane"></i> Get Started</Link>
          </div>
        </div>
        <div className="svc-detail-body">
          <h5 style={{ color: '#fff', fontWeight: '700', marginBottom: '20px' }}>Key Features</h5>
          <div className="feature-grid">
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>150+ Country Coverage</h6><p>Terminate to any destination globally via a single SIP connection.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>Crystal-Clear HD Voice</h6><p>Wideband audio codecs (G.722, OPUS) for superior call clarity.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>Real-Time Rate Engine</h6><p>Dynamic per-minute rates updated automatically for best routing.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>Prepaid &amp; Postpaid</h6><p>Flexible billing models to match any business cash flow requirement.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>CDR &amp; Analytics</h6><p>Detailed call data records and reporting via web portal or API.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>99.9% SLA Uptime</h6><p>Redundant infrastructure with automatic failover across PoPs.</p></div></div>
          </div>
          <div className="mt-4"><h6 style={{ color: 'rgba(255,255,255,.6)', fontSize: '.82rem', textTransform: 'uppercase', letterSpacing: '1px', marginBottom: '12px' }}>Best For</h6>
            <span className="use-case-tag"><i className="fas fa-dot-circle" style={{ color: 'var(--cyan)', fontSize: '.6rem' }}></i> Calling Cards &amp; Prepaid Apps</span>
            <span className="use-case-tag"><i className="fas fa-dot-circle" style={{ color: 'var(--cyan)', fontSize: '.6rem' }}></i> SMB VoIP Providers</span>
            <span className="use-case-tag"><i className="fas fa-dot-circle" style={{ color: 'var(--cyan)', fontSize: '.6rem' }}></i> International Resellers</span>
          </div>
        </div>
      </div>
    </div>

    {/*  Wholesale  */}
    <div className="svc-panel" id="panel-wholesale">
      <div className="svc-detail-wrap">
        <div className="svc-detail-header" style={{ background: 'linear-gradient(135deg,rgba(139,92,246,.08),transparent)' }}>
          <div className="svc-detail-icon" style={{ background: 'linear-gradient(135deg,rgba(139,92,246,.2),rgba(0,198,255,.1))', color: '#a78bfa' }}><i className="fas fa-server"></i></div>
          <h2>Wholesale Platform</h2>
          <p>Our wholesale platform enables medium and small carriers to access IP-to-IP voice communication without the complexity of running their own network operations. We handle routing, rating, and redundancy — you focus on your customers.</p>
          <div className="mt-3"><Link href="/contact" className="btn-primary-grad"><i className="fas fa-paper-plane"></i> Get Started</Link></div>
        </div>
        <div className="svc-detail-body">
          <h5 style={{ color: '#fff', fontWeight: '700', marginBottom: '20px' }}>Key Features</h5>
          <div className="feature-grid">
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>LCR Routing Engine</h6><p>Least-cost routing with quality-based and country-priority rules.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>White-Label Portal</h6><p>Branded customer management portal for your resellers and end users.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>Automated Billing</h6><p>Per-minute rating engine with multi-currency support and invoicing.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>Unlimited Channels</h6><p>Scale from 100 to 100,000+ concurrent calls without infrastructure investment.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>Fraud Detection</h6><p>Real-time anomaly detection blocks fraudulent traffic before it costs you.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>REST API Access</h6><p>Full programmatic control of accounts, routes, and rate tables via API.</p></div></div>
          </div>
          <div className="mt-4"><h6 style={{ color: 'rgba(255,255,255,.6)', fontSize: '.82rem', textTransform: 'uppercase', letterSpacing: '1px', marginBottom: '12px' }}>Best For</h6>
            <span className="use-case-tag"><i className="fas fa-dot-circle" style={{ color: '#a78bfa', fontSize: '.6rem' }}></i> Regional Carriers</span>
            <span className="use-case-tag"><i className="fas fa-dot-circle" style={{ color: '#a78bfa', fontSize: '.6rem' }}></i> MVNO Operators</span>
            <span className="use-case-tag"><i className="fas fa-dot-circle" style={{ color: '#a78bfa', fontSize: '.6rem' }}></i> Telecom Aggregators</span>
          </div>
        </div>
      </div>
    </div>

    {/*  Hosted PBX  */}
    <div className="svc-panel" id="panel-pbx">
      <div className="svc-detail-wrap">
        <div className="svc-detail-header" style={{ background: 'linear-gradient(135deg,rgba(34,197,94,.06),transparent)' }}>
          <div className="svc-detail-icon" style={{ background: 'linear-gradient(135deg,rgba(34,197,94,.2),rgba(0,198,255,.1))', color: '#4ade80' }}><i className="fas fa-building"></i></div>
          <h2>Hosted IP-PBX</h2>
          <p>A full-featured cloud-based PBX system for businesses of any size. Manage extensions, IVR menus, call routing, voicemail, and conferencing from a single intuitive dashboard — no on-premises hardware required.</p>
          <div className="mt-3"><Link href="/contact" className="btn-primary-grad"><i className="fas fa-paper-plane"></i> Get Started</Link></div>
        </div>
        <div className="svc-detail-body">
          <h5 style={{ color: '#fff', fontWeight: '700', marginBottom: '20px' }}>Key Features</h5>
          <div className="feature-grid">
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>Unlimited Extensions</h6><p>Add users and departments instantly — scale from 5 to 5,000 seats.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>Multi-Level IVR</h6><p>Build sophisticated auto-attendant menus with drag-and-drop simplicity.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>Video Conferencing</h6><p>Built-in multi-party video calls with screen sharing and chat.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>CRM Integration</h6><p>Native connectors for Salesforce, HubSpot, Zoho, and 50+ platforms.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>Mobile Softphone</h6><p>iOS and Android apps let your team work from anywhere in the world.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>Call Recording</h6><p>On-demand or automatic call recording with encrypted cloud storage.</p></div></div>
          </div>
          <div className="mt-4"><h6 style={{ color: 'rgba(255,255,255,.6)', fontSize: '.82rem', textTransform: 'uppercase', letterSpacing: '1px', marginBottom: '12px' }}>Best For</h6>
            <span className="use-case-tag"><i className="fas fa-dot-circle" style={{ color: '#4ade80', fontSize: '.6rem' }}></i> SMBs &amp; Enterprises</span>
            <span className="use-case-tag"><i className="fas fa-dot-circle" style={{ color: '#4ade80', fontSize: '.6rem' }}></i> Remote &amp; Hybrid Teams</span>
            <span className="use-case-tag"><i className="fas fa-dot-circle" style={{ color: '#4ade80', fontSize: '.6rem' }}></i> Multi-Branch Companies</span>
          </div>
        </div>
      </div>
    </div>

    {/*  DID  */}
    <div className="svc-panel" id="panel-did">
      <div className="svc-detail-wrap">
        <div className="svc-detail-header" style={{ background: 'linear-gradient(135deg,rgba(251,146,60,.07),transparent)' }}>
          <div className="svc-detail-icon" style={{ background: 'linear-gradient(135deg,rgba(251,146,60,.2),rgba(253,224,71,.1))', color: '#fb923c' }}><i className="fas fa-hashtag"></i></div>
          <h2>DID &amp; Toll-Free Numbers</h2>
          <p>Acquire local, national, and toll-free phone numbers across 60+ countries. Instant provisioning, flexible call forwarding rules, and real-time analytics give you full control over your inbound communications.</p>
          <div className="mt-3"><Link href="/contact" className="btn-primary-grad"><i className="fas fa-paper-plane"></i> Get Started</Link></div>
        </div>
        <div className="svc-detail-body">
          <h5 style={{ color: '#fff', fontWeight: '700', marginBottom: '20px' }}>Key Features</h5>
          <div className="feature-grid">
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>60+ Countries</h6><p>Local, national, mobile, and toll-free numbers across all major markets.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>Instant Provisioning</h6><p>Numbers activated within minutes via portal or API — no waiting.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>Smart Call Routing</h6><p>Route by time-of-day, geography, caller ID, or custom rules.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>Number Porting</h6><p>Port your existing numbers to our platform with zero downtime.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>SMS Capable</h6><p>Send and receive SMS on selected DID numbers for unified comms.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>Number Analytics</h6><p>Track inbound call volumes, conversion rates, and caller geography.</p></div></div>
          </div>
          <div className="mt-4"><h6 style={{ color: 'rgba(255,255,255,.6)', fontSize: '.82rem', textTransform: 'uppercase', letterSpacing: '1px', marginBottom: '12px' }}>Best For</h6>
            <span className="use-case-tag"><i className="fas fa-dot-circle" style={{ color: '#fb923c', fontSize: '.6rem' }}></i> Global Businesses</span>
            <span className="use-case-tag"><i className="fas fa-dot-circle" style={{ color: '#fb923c', fontSize: '.6rem' }}></i> Marketing &amp; Lead Gen</span>
            <span className="use-case-tag"><i className="fas fa-dot-circle" style={{ color: '#fb923c', fontSize: '.6rem' }}></i> Customer Support Lines</span>
          </div>
        </div>
      </div>
    </div>

    {/*  Call Center  */}
    <div className="svc-panel" id="panel-callcenter">
      <div className="svc-detail-wrap">
        <div className="svc-detail-header" style={{ background: 'linear-gradient(135deg,rgba(236,72,153,.07),transparent)' }}>
          <div className="svc-detail-icon" style={{ background: 'linear-gradient(135deg,rgba(236,72,153,.2),rgba(139,92,246,.15))', color: '#f472b6' }}><i className="fas fa-headset"></i></div>
          <h2>Call Center Suite</h2>
          <p>A comprehensive inbound and outbound call center platform with unlimited agents working from office or remotely. Real-time monitoring, ACD queues, call recording, supervisor tools, and performance dashboards — all in one solution.</p>
          <div className="mt-3"><Link href="/contact" className="btn-primary-grad"><i className="fas fa-paper-plane"></i> Get Started</Link></div>
        </div>
        <div className="svc-detail-body">
          <h5 style={{ color: '#fff', fontWeight: '700', marginBottom: '20px' }}>Key Features</h5>
          <div className="feature-grid">
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>Unlimited Agents</h6><p>No per-seat licensing limits — scale your team without cost surprises.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>ACD &amp; Skill Routing</h6><p>Route calls to the right agent based on skill set, language, or availability.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>Supervisor Dashboard</h6><p>Live queue monitoring, agent whisper, barge-in, and call takeover tools.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>IVR &amp; Callback</h6><p>Reduce hold time with intelligent IVR and virtual callback scheduling.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>KPI Reporting</h6><p>ASA, FCR, AHT, CSAT, and 40+ other metrics in real-time dashboards.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>Remote Agent Support</h6><p>Fully browser-based agent UI — works from any device, anywhere.</p></div></div>
          </div>
          <div className="mt-4"><h6 style={{ color: 'rgba(255,255,255,.6)', fontSize: '.82rem', textTransform: 'uppercase', letterSpacing: '1px', marginBottom: '12px' }}>Best For</h6>
            <span className="use-case-tag"><i className="fas fa-dot-circle" style={{ color: '#f472b6', fontSize: '.6rem' }}></i> BPO &amp; Outsourcing</span>
            <span className="use-case-tag"><i className="fas fa-dot-circle" style={{ color: '#f472b6', fontSize: '.6rem' }}></i> Customer Service Teams</span>
            <span className="use-case-tag"><i className="fas fa-dot-circle" style={{ color: '#f472b6', fontSize: '.6rem' }}></i> Technical Support Centers</span>
          </div>
        </div>
      </div>
    </div>

    {/*  Auto Dialer  */}
    <div className="svc-panel" id="panel-dialer">
      <div className="svc-detail-wrap">
        <div className="svc-detail-header" style={{ background: 'linear-gradient(135deg,rgba(20,184,166,.07),transparent)' }}>
          <div className="svc-detail-icon" style={{ background: 'linear-gradient(135deg,rgba(20,184,166,.2),rgba(0,198,255,.1))', color: '#2dd4bf' }}><i className="fas fa-robot"></i></div>
          <h2>Auto-Dialer Technology</h2>
          <p>Advanced outbound dialer technology enabling hundreds of simultaneous outbound calls without manual dialing. Predictive, preview, and power dialing modes with CRM integration let your agents focus on conversations, not dialing.</p>
          <div className="mt-3"><Link href="/contact" className="btn-primary-grad"><i className="fas fa-paper-plane"></i> Get Started</Link></div>
        </div>
        <div className="svc-detail-body">
          <h5 style={{ color: '#fff', fontWeight: '700', marginBottom: '20px' }}>Key Features</h5>
          <div className="feature-grid">
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>Predictive Dialing</h6><p>AI-powered algorithm maximises agent talk time by predicting call answer rates.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>Preview &amp; Power Modes</h6><p>Let agents review lead info before dialing, or set fixed dial rates per agent.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>AMD Detection</h6><p>Automatic answering machine detection routes live calls to agents instantly.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>CRM Integration</h6><p>Sync with Salesforce, HubSpot, Zoho, or any CRM via API or Zapier.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>DNC Compliance</h6><p>Built-in Do-Not-Call list management for regulatory compliance.</p></div></div>
            <div className="feat-item"><div className="feat-check"><i className="fas fa-check"></i></div><div><h6>Campaign Analytics</h6><p>Real-time campaign dashboards with conversion, contact rate, and ROI metrics.</p></div></div>
          </div>
          <div className="mt-4"><h6 style={{ color: 'rgba(255,255,255,.6)', fontSize: '.82rem', textTransform: 'uppercase', letterSpacing: '1px', marginBottom: '12px' }}>Best For</h6>
            <span className="use-case-tag"><i className="fas fa-dot-circle" style={{ color: '#2dd4bf', fontSize: '.6rem' }}></i> Sales &amp; Telemarketing</span>
            <span className="use-case-tag"><i className="fas fa-dot-circle" style={{ color: '#2dd4bf', fontSize: '.6rem' }}></i> Debt Collection</span>
            <span className="use-case-tag"><i className="fas fa-dot-circle" style={{ color: '#2dd4bf', fontSize: '.6rem' }}></i> Survey &amp; Lead Gen</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{/*  STATS  */}
<section id="stats">
  <div className="stats-bg" id="statsBg"></div>
  <div className="stats-grid-line"></div>
  <div className="container position-relative" style={{ zIndex: '2' }}>
    <div className="row g-4 justify-content-center">
      <div className="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="0"><div className="stat-card"><div className="stat-icon"><i className="fas fa-globe"></i></div><span className="stat-number" data-count="150">0</span><span className="stat-number">+</span><span className="stat-label">Countries Covered</span></div></div>
      <div className="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100"><div className="stat-card"><div className="stat-icon"><i className="fas fa-handshake"></i></div><span className="stat-number" data-count="500">0</span><span className="stat-number">+</span><span className="stat-label">Active Partners</span></div></div>
      <div className="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200"><div className="stat-card"><div className="stat-icon"><i className="fas fa-signal"></i></div><span className="stat-number" data-count="99">0</span><span className="stat-number">.9%</span><span className="stat-label">Network Uptime</span></div></div>
      <div className="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300"><div className="stat-card"><div className="stat-icon"><i className="fas fa-phone"></i></div><span className="stat-number" data-count="1">0</span><span className="stat-number">B+ min/yr</span><span className="stat-label">Minutes Terminated</span></div></div>
    </div>
  </div>
</section>

{/*  COMPARE TABLE  */}
<section id="compare">
  <div className="container">
    <div className="row justify-content-center text-center mb-5">
      <div className="col-lg-7" data-aos="fade-up">
        <div className="section-badge"><i className="fas fa-table"></i> Compare</div>
        <h2 className="section-title">Service <span className="accent">Comparison</span></h2>
        <p className="section-sub mx-auto">See which solution fits your business needs at a glance.</p>
      </div>
    </div>
    <div className="compare-wrap" data-aos="fade-up">
      <div className="table-responsive">
        <table className="compare-table">
          <thead>
            <tr>
              <th>Feature</th>
              <th>Retail Voice</th>
              <th>Wholesale</th>
              <th>Hosted PBX</th>
              <th>Call Center</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>Global Voice Termination</td><td><i className="fas fa-check check-y"></i></td><td><i className="fas fa-check check-y"></i></td><td><i className="fas fa-check check-y"></i></td><td><i className="fas fa-check check-y"></i></td></tr>
            <tr><td>SIP Trunk / DID Numbers</td><td><i className="fas fa-check check-y"></i></td><td><i className="fas fa-check check-y"></i></td><td><i className="fas fa-check check-y"></i></td><td><i className="fas fa-check check-y"></i></td></tr>
            <tr><td>White-Label Portal</td><td><i className="fas fa-minus check-n"></i></td><td><i className="fas fa-check check-y"></i></td><td><i className="fas fa-check check-y"></i></td><td><i className="fas fa-check check-y"></i></td></tr>
            <tr><td>IVR / Auto-Attendant</td><td><i className="fas fa-minus check-n"></i></td><td><i className="fas fa-minus check-n"></i></td><td><i className="fas fa-check check-y"></i></td><td><i className="fas fa-check check-y"></i></td></tr>
            <tr><td>Call Center ACD Queues</td><td><i className="fas fa-minus check-n"></i></td><td><i className="fas fa-minus check-n"></i></td><td><i className="fas fa-minus check-n"></i></td><td><i className="fas fa-check check-y"></i></td></tr>
            <tr><td>Predictive Auto-Dialer</td><td><i className="fas fa-minus check-n"></i></td><td><i className="fas fa-minus check-n"></i></td><td><i className="fas fa-minus check-n"></i></td><td><i className="fas fa-check check-y"></i></td></tr>
            <tr><td>CRM Integration</td><td><i className="fas fa-minus check-n"></i></td><td><i className="fas fa-check check-y"></i></td><td><i className="fas fa-check check-y"></i></td><td><i className="fas fa-check check-y"></i></td></tr>
            <tr><td>Supervisor Dashboard</td><td><i className="fas fa-minus check-n"></i></td><td><i className="fas fa-minus check-n"></i></td><td><i className="fas fa-minus check-n"></i></td><td><i className="fas fa-check check-y"></i></td></tr>
            <tr><td>REST API</td><td><i className="fas fa-check check-y"></i></td><td><i className="fas fa-check check-y"></i></td><td><i className="fas fa-check check-y"></i></td><td><i className="fas fa-check check-y"></i></td></tr>
            <tr><td>24/7 NOC Support</td><td><i className="fas fa-check check-y"></i></td><td><i className="fas fa-check check-y"></i></td><td><i className="fas fa-check check-y"></i></td><td><i className="fas fa-check check-y"></i></td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

{/*  PROCESS  */}
<section id="process">
  <div className="container">
    <div className="row justify-content-center text-center mb-5">
      <div className="col-lg-7" data-aos="fade-up">
        <div className="section-badge"><i className="fas fa-sitemap"></i> Onboarding</div>
        <h2 className="section-title">Up &amp; Running in <span className="accent">4 Steps</span></h2>
        <p className="section-sub mx-auto">From sign-up to your first live call — our onboarding is fast, guided, and hassle-free.</p>
      </div>
    </div>
    <div className="row align-items-center g-3">
      <div className="col-md-3" data-aos="fade-up" data-aos-delay="0"><div className="step-card"><div className="step-num-circle">1</div><h5>Register &amp; Verify</h5><p>Create your account and complete KYC verification within 24 hours.</p></div></div>
      <div className="col-md-1 d-none d-md-flex step-connector" data-aos="fade-up" data-aos-delay="50"><i className="fas fa-chevron-right"></i></div>
      <div className="col-md-3" data-aos="fade-up" data-aos-delay="100"><div className="step-card"><div className="step-num-circle">2</div><h5>Choose a Plan</h5><p>Select Retail, Wholesale, or Enterprise based on your requirements.</p></div></div>
      <div className="col-md-1 d-none d-md-flex step-connector" data-aos="fade-up" data-aos-delay="150"><i className="fas fa-chevron-right"></i></div>
      <div className="col-md-3" data-aos="fade-up" data-aos-delay="200"><div className="step-card"><div className="step-num-circle">3</div><h5>Integrate &amp; Configure</h5><p>Our team provides SIP credentials and assists with integration.</p></div></div>
      <div className="col-md-1 d-none d-md-flex step-connector" data-aos="fade-up" data-aos-delay="250"><i className="fas fa-chevron-right"></i></div>
      <div className="col-md-3" data-aos="fade-up" data-aos-delay="300" style={{ marginTop: '0' }}><div className="step-card"><div className="step-num-circle">4</div><h5>Go Live &amp; Scale</h5><p>Start calls globally and scale capacity instantly as you grow.</p></div></div>
    </div>
  </div>
</section>

{/*  CTA  */}
<section id="cta">
  <div className="cta-bg" id="ctaBg"></div>
  <div className="container">
    <div className="cta-inner" data-aos="zoom-in" data-aos-duration="800">
      <div className="section-badge mx-auto mb-3"><i className="fas fa-rocket"></i> Start Today</div>
      <h2>Ready to Get <span style={{ background: 'linear-gradient(90deg,#0d6efd,#00c6ff)', WebkitBackgroundClip: 'text', WebkitTextFillColor: 'transparent', backgroundClip: 'text' }}>Started?</span></h2>
      <p>Join 500+ partners relying on First Step Technology for enterprise-grade voice infrastructure.</p>
      <div className="d-flex gap-3 justify-content-center flex-wrap">
        <Link href="/contact" className="btn-primary-grad"><i className="fas fa-paper-plane"></i> Request a Demo</Link>
        <Link href="/about" className="btn-outline-light-custom"><i className="fas fa-building"></i> Learn About Us</Link>
      </div>
    </div>
  </div>
</section>
    </main>
  );
}




