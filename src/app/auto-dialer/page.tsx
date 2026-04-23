import Link from 'next/link';
import type { Metadata } from 'next';

export const metadata: Metadata = {
  title: 'First Step Technology - Auto Dialer',
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
        <nav aria-label="breadcrumb" style={{ marginBottom: '18px' }}><div style={{ display: 'flex', alignItems: 'center', gap: '8px', fontSize: '.85rem', color: 'rgba(255,255,255,.4)' }}><Link href="/" style={{ color: '#5eead4' }}>Home</Link><span>/</span><Link href="/services" style={{ color: '#5eead4' }}>Services</Link><span>/</span><span>Auto-Dialer</span></div></nav>
        <div className="svc-badge"><i className="fas fa-robot fa-xs"></i> Auto-Dialer Technology</div>
        <h1 style={{ fontFamily: "'Poppins',sans-serif", fontSize: 'clamp(2.4rem,5vw,4rem)', fontWeight: '800', color: '#fff', lineHeight: '1.12', marginBottom: '22px' }}>Multiply Your Agent<br /><span style={{ background: 'linear-gradient(90deg,#14b8a6,#06b6d4)', WebkitBackgroundClip: 'text', WebkitTextFillColor: 'transparent', backgroundClip: 'text' }}>Productivity 3x</span></h1>
        <p style={{ fontSize: '1.05rem', color: 'rgba(255,255,255,.62)', lineHeight: '1.8', marginBottom: '32px' }}>Advanced outbound dialing technology that enables hundreds of simultaneous calls without manual dialing. Predictive, preview, and power modes with CRM integration let your agents spend time talking — not waiting.</p>
        <div className="d-flex flex-wrap gap-3 mb-4">
          <Link href="/contact" className="btn-primary-grad" style={{ background: 'linear-gradient(135deg,#14b8a6,#06b6d4)', boxShadow: '0 8px 28px rgba(20,184,166,.3)' }}><i className="fas fa-paper-plane"></i> Book a Demo</Link>
          <Link href="#features" className="btn-outline-light-custom"><i className="fas fa-th-large"></i> See Features</Link>
        </div>
        <div>
          <span style={{ display: 'inline-flex', alignItems: 'center', gap: '6px', padding: '5px 14px', borderRadius: '50px', background: 'rgba(255,255,255,.06)', border: '1px solid rgba(255,255,255,.12)', fontSize: '.8rem', color: 'rgba(255,255,255,.6)', margin: '4px' }}><i className="fas fa-check" style={{ color: '#22c55e' }}></i> 3 Dialing Modes</span>
          <span style={{ display: 'inline-flex', alignItems: 'center', gap: '6px', padding: '5px 14px', borderRadius: '50px', background: 'rgba(255,255,255,.06)', border: '1px solid rgba(255,255,255,.12)', fontSize: '.8rem', color: 'rgba(255,255,255,.6)', margin: '4px' }}><i className="fas fa-check" style={{ color: '#22c55e' }}></i> AMD Detection</span>
          <span style={{ display: 'inline-flex', alignItems: 'center', gap: '6px', padding: '5px 14px', borderRadius: '50px', background: 'rgba(255,255,255,.06)', border: '1px solid rgba(255,255,255,.12)', fontSize: '.8rem', color: 'rgba(255,255,255,.6)', margin: '4px' }}><i className="fas fa-check" style={{ color: '#22c55e' }}></i> CRM Integration</span>
          <span style={{ display: 'inline-flex', alignItems: 'center', gap: '6px', padding: '5px 14px', borderRadius: '50px', background: 'rgba(255,255,255,.06)', border: '1px solid rgba(255,255,255,.12)', fontSize: '.8rem', color: 'rgba(255,255,255,.6)', margin: '4px' }}><i className="fas fa-check" style={{ color: '#22c55e' }}></i> DNC Compliance</span>
        </div>
      </div>
      <div className="col-lg-6" data-aos="fade-left" data-aos-delay="200">
        <div style={{ background: 'rgba(255,255,255,.04)', border: '1px solid rgba(255,255,255,.1)', borderRadius: '24px', padding: '28px' }}>
          <div style={{ display: 'flex', justifyContent: 'space-between', alignItems: 'center', marginBottom: '20px' }}>
            <div style={{ color: '#fff', fontWeight: '700', fontSize: '.95rem' }}><i className="fas fa-robot" style={{ color: '#5eead4', marginRight: '8px' }}></i>Campaign Dashboard</div>
            <span style={{ background: 'rgba(34,197,94,.1)', border: '1px solid rgba(34,197,94,.25)', borderRadius: '20px', padding: '3px 12px', color: '#22c55e', fontSize: '.75rem', display: 'flex', alignItems: 'center', gap: '5px' }}><span style={{ width: '6px', height: '6px', background: '#22c55e', borderRadius: '50%', animation: 'pulse 2s infinite' }}></span>Running</span>
          </div>
          <div style={{ display: 'grid', gridTemplateColumns: 'repeat(3,1fr)', gap: '10px', marginBottom: '20px' }}>
            <div style={{ background: 'rgba(20,184,166,.1)', border: '1px solid rgba(20,184,166,.2)', borderRadius: '10px', padding: '12px', textAlign: 'center' }}><div style={{ color: '#5eead4', fontWeight: '800', fontSize: '1.4rem' }}>342</div><div style={{ color: 'rgba(255,255,255,.45)', fontSize: '.7rem' }}>Calls/Hour</div></div>
            <div style={{ background: 'rgba(34,197,94,.08)', border: '1px solid rgba(34,197,94,.2)', borderRadius: '10px', padding: '12px', textAlign: 'center' }}><div style={{ color: '#4ade80', fontWeight: '800', fontSize: '1.4rem' }}>28%</div><div style={{ color: 'rgba(255,255,255,.45)', fontSize: '.7rem' }}>Contact Rate</div></div>
            <div style={{ background: 'rgba(245,158,11,.08)', border: '1px solid rgba(245,158,11,.2)', borderRadius: '10px', padding: '12px', textAlign: 'center' }}><div style={{ color: '#fbbf24', fontWeight: '800', fontSize: '1.4rem' }}>94%</div><div style={{ color: 'rgba(255,255,255,.45)', fontSize: '.7rem' }}>Agent Utilization</div></div>
          </div>
          <div style={{ background: 'rgba(255,255,255,.04)', borderRadius: '12px', padding: '16px', marginBottom: '12px' }}>
            <div style={{ display: 'flex', justifyContent: 'space-between', alignItems: 'center', marginBottom: '8px' }}><span style={{ color: 'rgba(255,255,255,.6)', fontSize: '.82rem' }}>Campaign Progress</span><span style={{ color: '#5eead4', fontWeight: '600', fontSize: '.82rem' }}>4,210 / 15,000</span></div>
            <div style={{ height: '6px', background: 'rgba(255,255,255,.08)', borderRadius: '4px' }}><div style={{ width: '28%', height: '100%', background: 'linear-gradient(90deg,#14b8a6,#06b6d4)', borderRadius: '4px' }}></div></div>
          </div>
          <div style={{ display: 'grid', gridTemplateColumns: '1fr 1fr', gap: '10px' }}>
            <div style={{ background: 'rgba(255,255,255,.03)', borderRadius: '10px', padding: '12px' }}><div style={{ color: 'rgba(255,255,255,.5)', fontSize: '.72rem', marginBottom: '4px' }}>Active Agents</div><div style={{ color: '#fff', fontWeight: '700', fontSize: '1.1rem' }}>18 online</div></div>
            <div style={{ background: 'rgba(255,255,255,.03)', borderRadius: '10px', padding: '12px' }}><div style={{ color: 'rgba(255,255,255,.5)', fontSize: '.72rem', marginBottom: '4px' }}>Dial Mode</div><div style={{ color: '#5eead4', fontWeight: '700', fontSize: '1.1rem' }}>Predictive</div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{/*  DIALING MODES  */}
<section className="section-alt" style={{ padding: '100px 0' }}>
  <div className="container">
    <div className="row justify-content-center text-center mb-5"><div className="col-lg-7" data-aos="fade-up"><div className="section-badge"><i className="fas fa-sliders-h"></i> Dialing Modes</div><h2 className="section-title">Three Modes for <span className="accent">Every Campaign</span></h2><p className="section-sub mx-auto">Choose the dialing strategy that best fits your campaign type, agent count, and contact rate goals.</p></div></div>
    <div className="row g-4">
      <div className="col-md-4" data-aos="fade-up" data-aos-delay="0">
        <div className="mode-card">
          <div className="mode-icon">🤖</div>
          <h4>Predictive Dialing</h4>
          <p>AI-powered algorithm dials multiple numbers simultaneously per agent and connects only live answers. Maximises talk time by predicting call answer rates in real time. Best for large list campaigns with 10+ agents.</p>
          <span className="mode-tag" style={{ background: 'rgba(20,184,166,.15)', color: '#5eead4', border: '1px solid rgba(20,184,166,.3)' }}>High Volume</span>
        </div>
      </div>
      <div className="col-md-4" data-aos="fade-up" data-aos-delay="80">
        <div className="mode-card">
          <div className="mode-icon">👁️</div>
          <h4>Preview Dialing</h4>
          <p>Agents see the lead record before the call is placed. Ideal for high-value accounts, complex sales, or sensitive outreach where agents need context before speaking. The agent confirms, then the system dials.</p>
          <span className="mode-tag" style={{ background: 'rgba(139,92,246,.12)', color: '#c4b5fd', border: '1px solid rgba(139,92,246,.3)' }}>High Value</span>
        </div>
      </div>
      <div className="col-md-4" data-aos="fade-up" data-aos-delay="160">
        <div className="mode-card">
          <div className="mode-icon">⚡</div>
          <h4>Power Dialing</h4>
          <p>Dials one number per available agent at a fixed ratio. Simpler than predictive — no statistical modelling required. Perfect for smaller teams or campaigns requiring a consistent, measured outreach pace.</p>
          <span className="mode-tag" style={{ background: 'rgba(245,158,11,.1)', color: '#fbbf24', border: '1px solid rgba(245,158,11,.25)' }}>Balanced</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="features" className="section-dark" style={{ padding: '100px 0' }}>
  <div className="container">
    <div className="row justify-content-center text-center mb-5"><div className="col-lg-7" data-aos="fade-up"><div className="section-badge"><i className="fas fa-th-large"></i> Features</div><h2 className="section-title">Everything Your <span className="accent">Outbound Team Needs</span></h2><p className="section-sub mx-auto">From campaign management to compliance — one platform handles it all.</p></div></div>
    <div className="row g-4">
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div className="feat-card"><div className="feat-icon"><i className="fas fa-brain"></i></div><h5>AI-Powered Predictive Algorithm</h5><p>Our predictive engine learns your answer rates by time, day, and destination — dynamically adjusting the dial ratio to maximize agent talk time and minimize dropped calls.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="60"><div className="feat-card"><div className="feat-icon"><i className="fas fa-voicemail"></i></div><h5>AMD Detection</h5><p>Answering Machine Detection instantly identifies voicemail and live answer, routing only real human connections to agents — eliminating wasted time on answering machines.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120"><div className="feat-card"><div className="feat-icon"><i className="fas fa-plug"></i></div><h5>CRM Integration</h5><p>Bi-directional sync with Salesforce, HubSpot, Zoho, and 40+ platforms. Screen pop on connect, automatic disposition logging, and callback scheduling in your CRM.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="180"><div className="feat-card"><div className="feat-icon"><i className="fas fa-ban"></i></div><h5>DNC List Management</h5><p>Built-in Do-Not-Call list scrubbing with automatic compliance checking against national and custom DNC lists before every dial.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240"><div className="feat-card"><div className="feat-icon"><i className="fas fa-chart-area"></i></div><h5>Campaign Analytics</h5><p>Real-time dashboards tracking contact rate, conversion rate, talk time, wrap time, agent utilization, and campaign ROI. Drill down by agent, list, or time period.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300"><div className="feat-card"><div className="feat-icon"><i className="fas fa-list-ul"></i></div><h5>List Management</h5><p>Import lead lists via CSV or API, deduplicate automatically, set priority tiers, and configure retry logic for unanswered numbers — all configurable per campaign.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="360"><div className="feat-card"><div className="feat-icon"><i className="fas fa-calendar-alt"></i></div><h5>Callback Scheduling</h5><p>Agents can schedule callbacks directly from their interface. The dialer automatically queues the call at the agreed time — no manual reminders needed.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="420"><div className="feat-card"><div className="feat-icon"><i className="fas fa-record-vinyl"></i></div><h5>Call Recording</h5><p>All outbound calls recorded automatically with encrypted cloud storage, searchable transcripts, and disposition tagging for easy quality assurance review.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="480"><div className="feat-card"><div className="feat-icon"><i className="fas fa-clock"></i></div><h5>Time-Zone Compliance</h5><p>Automatic time-zone detection for each number ensures calls are only placed during permitted hours in each region — protecting you from compliance violations.</p></div></div>
    </div>
  </div>
</section>

<section className="section-alt" style={{ padding: '80px 0', position: 'relative', overflow: 'hidden' }}>
  <div style={{ position: 'absolute', inset: '-60px', background: 'radial-gradient(ellipse 90% 70% at 50% 50%,rgba(20,184,166,.12) 0%,transparent 65%)', willChange: 'transform' }} id="statsBg"></div>
  <div className="container position-relative" style={{ zIndex: '2' }}>
    <div className="row g-4 text-center">
      <div className="col-6 col-lg-3" data-aos="zoom-in"><div className="mini-stat"><div className="num" data-count="3">0</div><div>x</div><div className="lbl">Agent Productivity</div></div></div>
      <div className="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="80"><div className="mini-stat"><div className="num" data-count="94">0</div><div>%</div><div className="lbl">Agent Utilization</div></div></div>
      <div className="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="160"><div className="mini-stat"><div className="num" data-count="40">0</div><div>+</div><div className="lbl">CRM Integrations</div></div></div>
      <div className="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="240"><div className="mini-stat"><div className="num" data-count="99">0</div><div>.9%</div><div className="lbl">Uptime</div></div></div>
    </div>
  </div>
</section>

<section className="section-dark" style={{ padding: '100px 0' }}>
  <div className="container">
    <div className="row align-items-center g-5">
      <div className="col-lg-6" data-aos="fade-right">
        <div className="section-badge"><i className="fas fa-sitemap"></i> Getting Started</div>
        <h2 className="section-title">Launch Your First Campaign <span className="accent">Today</span></h2>
        <div className="divider"></div>
        <div className="how-step"><div className="how-num">1</div><div><h5>Configure Your Campaign</h5><p>Set your dialing mode, dial ratio, retry logic, and time-zone restrictions. Connect your DID numbers for outbound caller ID.</p></div></div>
        <div className="how-step"><div className="how-num">2</div><div><h5>Import Your Lead List</h5><p>Upload a CSV or sync leads from your CRM. Set priority tiers and configure DNC scrubbing rules before your first dial.</p></div></div>
        <div className="how-step"><div className="how-num">3</div><div><h5>Brief Your Agents</h5><p>Agents log in via browser — no software required. The interface is intuitive enough for first-time users to be productive within minutes.</p></div></div>
        <div className="how-step"><div className="how-num">4</div><div><h5>Launch & Optimize</h5><p>Start your campaign and monitor performance in real time. Adjust dial ratios, pause campaigns, or reallocate agents on the fly.</p></div></div>
      </div>
      <div className="col-lg-6" data-aos="fade-left" data-aos-delay="150">
        <div style={{ background: 'rgba(255,255,255,.03)', border: '1px solid rgba(255,255,255,.08)', borderRadius: '22px', padding: '40px' }}>
          <h5 style={{ color: '#fff', fontWeight: '700', marginBottom: '24px' }}><i className="fas fa-check-circle" style={{ color: '#5eead4', marginRight: '10px' }}></i>What's Included</h5>
          <ul className="check-list">
            <li><i className="fas fa-check-circle"></i> Predictive, preview, and power modes</li>
            <li><i className="fas fa-check-circle"></i> AI-powered answering machine detection</li>
            <li><i className="fas fa-check-circle"></i> CRM integration (40+ platforms)</li>
            <li><i className="fas fa-check-circle"></i> DNC list management & compliance</li>
            <li><i className="fas fa-check-circle"></i> Lead list import (CSV or API)</li>
            <li><i className="fas fa-check-circle"></i> Callback scheduling & retry logic</li>
            <li><i className="fas fa-check-circle"></i> Campaign analytics & ROI dashboard</li>
            <li><i className="fas fa-check-circle"></i> Time-zone compliance automation</li>
            <li><i className="fas fa-check-circle"></i> Call recording & transcription</li>
            <li><i className="fas fa-check-circle"></i> 24/7 support</li>
          </ul>
          <div style={{ marginTop: '28px', padding: '20px', background: 'rgba(20,184,166,.08)', border: '1px solid rgba(20,184,166,.2)', borderRadius: '14px' }}>
            <div style={{ color: '#fff', fontWeight: '600', marginBottom: '6px' }}>🔗 Better Together</div>
            <div style={{ color: 'rgba(255,255,255,.55)', fontSize: '.88rem', lineHeight: '1.6' }}>Pair the Auto-Dialer with our <Link href="/call-center" style={{ color: '#5eead4' }}>Call Center Suite</Link> for a complete inbound + outbound contact center on one unified platform.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section className="section-alt" style={{ padding: '100px 0' }}>
  <div className="container">
    <div className="row justify-content-center text-center mb-5"><div className="col-lg-7" data-aos="fade-up"><div className="section-badge"><i className="fas fa-users"></i> Use Cases</div><h2 className="section-title">Who Benefits from <span className="accent">Auto-Dialing?</span></h2></div></div>
    <div className="row g-3">
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div className="use-card"><div className="use-icon"><i className="fas fa-chart-line"></i></div><div><h6>Sales & Telemarketing</h6><p>Increase agent talk time from 15 to 50+ minutes per hour. Run high-volume outbound campaigns without increasing headcount.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="60"><div className="use-card"><div className="use-icon"><i className="fas fa-file-invoice-dollar"></i></div><div><h6>Debt Collection</h6><p>Increase right-party contact rates with predictive dialing and time-zone compliance. Schedule callbacks automatically on first contact.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120"><div className="use-card"><div className="use-icon"><i className="fas fa-poll"></i></div><div><h6>Surveys & Research</h6><p>Power high-volume survey campaigns with predictive dialing and automatic recording. Disposition codes track responses in real time.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="180"><div className="use-card"><div className="use-icon"><i className="fas fa-user-plus"></i></div><div><h6>Lead Generation</h6><p>Maximize list penetration with intelligent retry logic and priority queuing for warm leads. Sync conversions directly to your CRM.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240"><div className="use-card"><div className="use-icon"><i className="fas fa-calendar-check"></i></div><div><h6>Appointment Setting</h6><p>Outbound appointment campaigns with real-time calendar integration. Agents book slots directly in the interface on live calls.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300"><div className="use-card"><div className="use-icon"><i className="fas fa-hospital"></i></div><div><h6>Healthcare Outreach</h6><p>Patient recall campaigns, appointment reminders, and wellness check-ins with full compliance for healthcare communication regulations.</p></div></div></div>
    </div>
  </div>
</section>

<section className="section-dark" style={{ padding: '80px 0' }}>
  <div className="container"><div className="row justify-content-center"><div className="col-lg-8" data-aos="fade-up">
    <div className="testi">
      <div style={{ color: '#f59e0b', fontSize: '.9rem', marginBottom: '14px', letterSpacing: '2px' }}>★★★★★</div>
      <p style={{ color: 'rgba(255,255,255,.75)', fontSize: '1.05rem', lineHeight: '1.8', marginBottom: '24px' }}>"Before First Step Technology's auto-dialer, our 20-agent sales team averaged 45 contacts per agent per day dialing manually. After switching to predictive mode, we're hitting 180+ contacts per agent per day. Our conversion volume tripled within the first month without hiring a single new agent."</p>
      <div style={{ display: 'flex', alignItems: 'center', gap: '14px' }}><div style={{ width: '48px', height: '48px', borderRadius: '50%', background: 'linear-gradient(135deg,#14b8a6,#06b6d4)', display: 'flex', alignItems: 'center', justifyContent: 'center', fontWeight: '700', color: '#fff' }}>TN</div><div><div style={{ color: '#fff', fontWeight: '600' }}>Tom Nguyen</div><div style={{ color: 'rgba(255,255,255,.45)', fontSize: '.82rem' }}>VP Sales, FinServ Direct</div></div></div>
    </div>
  </div></div></div>
</section>

<section className="svc-cta">
  <div className="svc-cta-bg" id="ctaBg"></div>
  <div className="container"><div className="row justify-content-center text-center" style={{ position: 'relative', zIndex: '2' }}><div className="col-lg-7" data-aos="zoom-in">
    <div className="section-badge mx-auto mb-3"><i className="fas fa-robot"></i> Get Started</div>
    <h2 style={{ fontFamily: "'Poppins',sans-serif", fontSize: 'clamp(2rem,4vw,3rem)', fontWeight: '800', color: '#fff', marginBottom: '18px' }}>Ready to <span style={{ background: 'linear-gradient(90deg,#14b8a6,#06b6d4)', WebkitBackgroundClip: 'text', WebkitTextFillColor: 'transparent', backgroundClip: 'text' }}>3x Your Output?</span></h2>
    <p style={{ color: 'rgba(255,255,255,.6)', fontSize: '1.05rem', maxWidth: '500px', margin: '0 auto 32px', lineHeight: '1.75' }}>See exactly how our auto-dialer will work with your lists, your CRM, and your team. Book a live demo today.</p>
    <div className="d-flex gap-3 justify-content-center flex-wrap"><Link href="/contact" className="btn-primary-grad" style={{ background: 'linear-gradient(135deg,#14b8a6,#06b6d4)' }}><i className="fas fa-paper-plane"></i> Book a Demo</Link><Link href="/call-center" className="btn-outline-light-custom"><i className="fas fa-headset"></i> Add Call Center</Link></div>
  </div></div></div>
</section>
    </main>
  );
}




