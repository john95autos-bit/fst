import Link from 'next/link';
import type { Metadata } from 'next';

export const metadata: Metadata = {
  title: 'First Step Technology - Wholesale',
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
        <nav aria-label="breadcrumb" style={{ marginBottom: '18px' }}><div style={{ display: 'flex', alignItems: 'center', gap: '8px', fontSize: '.85rem', color: 'rgba(255,255,255,.4)' }}><Link href="/" style={{ color: '#c4b5fd' }}>Home</Link><span>/</span><Link href="/services" style={{ color: '#c4b5fd' }}>Services</Link><span>/</span><span>Wholesale</span></div></nav>
        <div className="svc-badge"><i className="fas fa-server fa-xs"></i> Wholesale Platform</div>
        <h1 style={{ fontFamily: "'Poppins',sans-serif", fontSize: 'clamp(2.4rem,5vw,4rem)', fontWeight: '800', color: '#fff', lineHeight: '1.12', marginBottom: '22px' }}>Carrier-Grade Voice<br /><span style={{ background: 'linear-gradient(90deg,#8b5cf6,#06b6d4)', WebkitBackgroundClip: 'text', WebkitTextFillColor: 'transparent', backgroundClip: 'text' }}>Without the Complexity</span></h1>
        <p style={{ fontSize: '1.05rem', color: 'rgba(255,255,255,.62)', lineHeight: '1.8', marginBottom: '32px' }}>Our wholesale platform enables medium and small carriers to access IP-to-IP voice communication at scale. We eliminate the complexity of network operations, routing management, and billing — so you can focus on growing your business.</p>
        <div className="d-flex flex-wrap gap-3 mb-4">
          <Link href="/contact" className="btn-primary-grad" style={{ background: 'linear-gradient(135deg,#8b5cf6,#06b6d4)', boxShadow: '0 8px 28px rgba(139,92,246,.35)' }}><i className="fas fa-paper-plane"></i> Get Started</Link>
          <Link href="#features" className="btn-outline-light-custom"><i className="fas fa-th-large"></i> See Features</Link>
        </div>
        <div>
          <span style={{ display: 'inline-flex', alignItems: 'center', gap: '6px', padding: '5px 14px', borderRadius: '50px', background: 'rgba(255,255,255,.06)', border: '1px solid rgba(255,255,255,.12)', fontSize: '.8rem', color: 'rgba(255,255,255,.6)', margin: '4px' }}><i className="fas fa-check" style={{ color: '#22c55e' }}></i> White-Label Ready</span>
          <span style={{ display: 'inline-flex', alignItems: 'center', gap: '6px', padding: '5px 14px', borderRadius: '50px', background: 'rgba(255,255,255,.06)', border: '1px solid rgba(255,255,255,.12)', fontSize: '.8rem', color: 'rgba(255,255,255,.6)', margin: '4px' }}><i className="fas fa-check" style={{ color: '#22c55e' }}></i> LCR Routing</span>
          <span style={{ display: 'inline-flex', alignItems: 'center', gap: '6px', padding: '5px 14px', borderRadius: '50px', background: 'rgba(255,255,255,.06)', border: '1px solid rgba(255,255,255,.12)', fontSize: '.8rem', color: 'rgba(255,255,255,.6)', margin: '4px' }}><i className="fas fa-check" style={{ color: '#22c55e' }}></i> REST API</span>
          <span style={{ display: 'inline-flex', alignItems: 'center', gap: '6px', padding: '5px 14px', borderRadius: '50px', background: 'rgba(255,255,255,.06)', border: '1px solid rgba(255,255,255,.12)', fontSize: '.8rem', color: 'rgba(255,255,255,.6)', margin: '4px' }}><i className="fas fa-check" style={{ color: '#22c55e' }}></i> Fraud Detection</span>
        </div>
      </div>
      <div className="col-lg-6" data-aos="fade-left" data-aos-delay="200">
        <div style={{ background: 'rgba(255,255,255,.04)', border: '1px solid rgba(255,255,255,.1)', borderRadius: '24px', padding: '36px', backdropFilter: 'blur(20px)' }}>
          <div style={{ display: 'flex', alignItems: 'center', gap: '12px', marginBottom: '24px' }}>
            <div style={{ width: '48px', height: '48px', background: 'linear-gradient(135deg,#8b5cf6,#06b6d4)', borderRadius: '12px', display: 'flex', alignItems: 'center', justifyContent: 'center' }}><i className="fas fa-server text-white fa-lg"></i></div>
            <div style={{ color: '#fff', fontWeight: '700' }}>Wholesale Dashboard</div>
          </div>
          <div style={{ display: 'grid', gridTemplateColumns: '1fr 1fr', gap: '12px', marginBottom: '16px' }}>
            <div style={{ background: 'rgba(139,92,246,.1)', border: '1px solid rgba(139,92,246,.2)', borderRadius: '12px', padding: '16px' }}><div style={{ color: '#c4b5fd', fontSize: '.75rem', marginBottom: '4px' }}>ACTIVE CHANNELS</div><div style={{ color: '#fff', fontSize: '1.6rem', fontWeight: '800' }}>48,290</div><div style={{ color: '#22c55e', fontSize: '.75rem' }}>▲ 12% this month</div></div>
            <div style={{ background: 'rgba(6,182,212,.1)', border: '1px solid rgba(6,182,212,.2)', borderRadius: '12px', padding: '16px' }}><div style={{ color: '#67e8f9', fontSize: '.75rem', marginBottom: '4px' }}>ROUTES AVAILABLE</div><div style={{ color: '#fff', fontSize: '1.6rem', fontWeight: '800' }}>2,840</div><div style={{ color: 'rgba(255,255,255,.45)', fontSize: '.75rem' }}>Across 150+ countries</div></div>
          </div>
          <div style={{ background: 'rgba(255,255,255,.04)', borderRadius: '12px', padding: '16px', marginBottom: '12px' }}>
            <div style={{ display: 'flex', justifyContent: 'space-between', alignItems: 'center', marginBottom: '10px' }}><span style={{ color: 'rgba(255,255,255,.6)', fontSize: '.82rem' }}>Top Route — USA Mobile</span><span style={{ color: '#c4b5fd', fontSize: '.82rem', fontWeight: '600' }}>$0.0032/min</span></div>
            <div style={{ display: 'flex', justifyContent: 'space-between', alignItems: 'center', marginBottom: '10px' }}><span style={{ color: 'rgba(255,255,255,.6)', fontSize: '.82rem' }}>Top Route — UK Landline</span><span style={{ color: '#c4b5fd', fontSize: '.82rem', fontWeight: '600' }}>$0.0015/min</span></div>
            <div style={{ display: 'flex', justifyContent: 'space-between', alignItems: 'center' }}><span style={{ color: 'rgba(255,255,255,.6)', fontSize: '.82rem' }}>Top Route — UAE Mobile</span><span style={{ color: '#c4b5fd', fontSize: '.82rem', fontWeight: '600' }}>$0.0058/min</span></div>
          </div>
          <div style={{ display: 'flex', alignItems: 'center', gap: '8px', padding: '12px 16px', background: 'rgba(34,197,94,.08)', border: '1px solid rgba(34,197,94,.2)', borderRadius: '10px' }}><span style={{ width: '8px', height: '8px', background: '#22c55e', borderRadius: '50%', flexShrink: '0', animation: 'pulse 2s infinite' }}></span><span style={{ color: 'rgba(255,255,255,.6)', fontSize: '.82rem' }}>Rate table last updated: <strong style={{ color: '#fff' }}>2 minutes ago</strong></span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="features" className="section-alt" style={{ padding: '100px 0' }}>
  <div className="container">
    <div className="row justify-content-center text-center mb-5"><div className="col-lg-7" data-aos="fade-up"><div className="section-badge"><i className="fas fa-th-large"></i> Features</div><h2 className="section-title">Powerful Tools for <span className="accent">Carriers</span></h2><p className="section-sub mx-auto">Everything a carrier needs to compete — without building the infrastructure yourself.</p></div></div>
    <div className="row g-4">
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div className="feat-card"><div className="feat-icon"><i className="fas fa-route"></i></div><h5>LCR Routing Engine</h5><p>Least-cost routing with quality-based, country-priority, and failover rules. Automatically route each call via the optimal path for cost and quality balance.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="60"><div className="feat-card"><div className="feat-icon"><i className="fas fa-paint-brush"></i></div><h5>White-Label Portal</h5><p>A fully branded customer management portal with your own logo, domain, and colors. Your resellers and end customers never see our branding.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120"><div className="feat-card"><div className="feat-icon"><i className="fas fa-calculator"></i></div><h5>Automated Rating & Billing</h5><p>Per-minute rating engine with multi-currency support, automatic invoicing, credit limit management, and low-balance alert notifications.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="180"><div className="feat-card"><div className="feat-icon"><i className="fas fa-infinity"></i></div><h5>Unlimited Concurrent Channels</h5><p>Scale from 100 to 100,000+ simultaneous calls without any infrastructure investment. We handle capacity planning and redundancy for you.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240"><div className="feat-card"><div className="feat-icon"><i className="fas fa-shield-halved"></i></div><h5>Real-Time Fraud Detection</h5><p>AI-powered anomaly detection blocks fraudulent traffic — IRSF, wangiri, and call flooding — before it impacts your account or downstream customers.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300"><div className="feat-card"><div className="feat-icon"><i className="fas fa-code"></i></div><h5>Full REST API</h5><p>Programmatic control over accounts, rate tables, routing rules, balance top-ups, CDR exports, and number management. Full Swagger documentation provided.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="360"><div className="feat-card"><div className="feat-icon"><i className="fas fa-chart-bar"></i></div><h5>Traffic Analytics</h5><p>Real-time dashboards showing ASR, ACD, NER, PDD, and concurrent call metrics. Drill down by country, route, customer, or time period.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="420"><div className="feat-card"><div className="feat-icon"><i className="fas fa-users-cog"></i></div><h5>Multi-Tenant Management</h5><p>Manage unlimited sub-accounts with individual rate plans, credit limits, and traffic reports. Ideal for resellers managing multiple end customers.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="480"><div className="feat-card"><div className="feat-icon"><i className="fas fa-plug"></i></div><h5>Softswitch Integration</h5><p>Compatible with all major softswitches including Metaswitch, Sonus, PortaSwitch, FreeSWITCH, and Asterisk. Our team assists with any integration.</p></div></div>
    </div>
  </div>
</section>

<section className="section-dark" style={{ padding: '80px 0', position: 'relative', overflow: 'hidden' }}>
  <div style={{ position: 'absolute', inset: '-60px', background: 'radial-gradient(ellipse 90% 70% at 50% 50%,rgba(139,92,246,.15) 0%,transparent 65%)', willChange: 'transform' }} id="statsBg"></div>
  <div className="container position-relative" style={{ zIndex: '2' }}>
    <div className="row g-4 text-center">
      <div className="col-6 col-lg-3" data-aos="zoom-in"><div className="mini-stat"><div className="num" data-count="2840">0</div><div className="lbl">Available Routes</div></div></div>
      <div className="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="80"><div className="mini-stat"><div className="num" data-count="150">0</div><div>+</div><div className="lbl">Countries</div></div></div>
      <div className="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="160"><div className="mini-stat"><div className="num" data-count="500">0</div><div>+</div><div className="lbl">Carrier Partners</div></div></div>
      <div className="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="240"><div className="mini-stat"><div className="num" data-count="99">0</div><div>.9%</div><div className="lbl">Uptime SLA</div></div></div>
    </div>
  </div>
</section>

<section className="section-alt" style={{ padding: '100px 0' }}>
  <div className="container">
    <div className="row align-items-center g-5">
      <div className="col-lg-6" data-aos="fade-right">
        <div className="section-badge"><i className="fas fa-sitemap"></i> Onboarding</div>
        <h2 className="section-title">Launch Your Wholesale <span className="accent">Business Fast</span></h2>
        <div className="divider"></div>
        <div className="how-step"><div className="how-num">1</div><div><h5>Apply for a Carrier Account</h5><p>Complete our carrier application with company details and traffic projections. Our team reviews and approves accounts within 48 hours.</p></div></div>
        <div className="how-step"><div className="how-num">2</div><div><h5>Configure Your White-Label Portal</h5><p>Upload your branding, set up your domain, and configure rate plans for your customers. We handle all the backend infrastructure.</p></div></div>
        <div className="how-step"><div className="how-num">3</div><div><h5>Integrate Your Softswitch</h5><p>Our technical team provides SIP peering credentials and assists with your softswitch or PBX integration. Usually completed same day.</p></div></div>
        <div className="how-step"><div className="how-num">4</div><div><h5>Onboard Your Customers</h5><p>Create sub-accounts for your resellers or end customers. Set individual rate plans, credit limits, and traffic policies per account.</p></div></div>
      </div>
      <div className="col-lg-6" data-aos="fade-left" data-aos-delay="150">
        <div style={{ background: 'rgba(255,255,255,.03)', border: '1px solid rgba(255,255,255,.08)', borderRadius: '22px', padding: '40px' }}>
          <h5 style={{ color: '#fff', fontWeight: '700', marginBottom: '24px' }}><i className="fas fa-check-circle" style={{ color: '#c4b5fd', marginRight: '10px' }}></i>What's Included</h5>
          <ul className="check-list">
            <li><i className="fas fa-check-circle"></i> White-label customer portal (your brand)</li>
            <li><i className="fas fa-check-circle"></i> Multi-tenant sub-account management</li>
            <li><i className="fas fa-check-circle"></i> LCR + quality-based routing engine</li>
            <li><i className="fas fa-check-circle"></i> Automated rating and invoicing</li>
            <li><i className="fas fa-check-circle"></i> Real-time fraud detection & blocking</li>
            <li><i className="fas fa-check-circle"></i> REST API with full documentation</li>
            <li><i className="fas fa-check-circle"></i> 2,800+ routes across 150+ countries</li>
            <li><i className="fas fa-check-circle"></i> 24/7 NOC support with dedicated SLA</li>
            <li><i className="fas fa-check-circle"></i> Traffic analytics & CDR reporting</li>
            <li><i className="fas fa-check-circle"></i> Softswitch integration assistance</li>
          </ul>
          <div style={{ marginTop: '28px', padding: '20px', background: 'rgba(139,92,246,.1)', border: '1px solid rgba(139,92,246,.25)', borderRadius: '14px' }}>
            <div style={{ color: '#fff', fontWeight: '600', marginBottom: '6px' }}>🚀 Volume Pricing Available</div>
            <div style={{ color: 'rgba(255,255,255,.55)', fontSize: '.88rem', lineHeight: '1.6' }}>Custom rates available for partners terminating 1M+ minutes per month. Contact our carrier sales team to discuss your traffic profile.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section className="section-dark" style={{ padding: '100px 0' }}>
  <div className="container">
    <div className="row justify-content-center text-center mb-5"><div className="col-lg-7" data-aos="fade-up"><div className="section-badge"><i className="fas fa-users"></i> Use Cases</div><h2 className="section-title">Who Uses Our <span className="accent">Wholesale Platform?</span></h2></div></div>
    <div className="row g-3">
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div className="use-card"><div className="use-icon"><i className="fas fa-network-wired"></i></div><div><h6>Regional Carriers</h6><p>Small and medium carriers that want to offer global termination without building their own international interconnects and routing.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="60"><div className="use-card"><div className="use-icon"><i className="fas fa-sim-card"></i></div><div><h6>MVNO Operators</h6><p>Mobile Virtual Network Operators need reliable, scalable voice termination for their subscribers at competitive wholesale rates.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120"><div className="use-card"><div className="use-icon"><i className="fas fa-handshake"></i></div><div><h6>Telecom Aggregators</h6><p>Aggregators buying and reselling voice capacity need a robust platform to manage sub-accounts, routing, and billing at scale.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="180"><div className="use-card"><div className="use-icon"><i className="fas fa-phone-square"></i></div><div><h6>VoIP Service Providers</h6><p>VoIP providers looking for a wholesale backbone to power their retail products with high-quality international termination.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240"><div className="use-card"><div className="use-icon"><i className="fas fa-store"></i></div><div><h6>Reseller Businesses</h6><p>Entrepreneurs and businesses wanting to launch a voice reseller operation with a white-label portal and their own brand identity.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300"><div className="use-card"><div className="use-icon"><i className="fas fa-satellite"></i></div><div><h6>ISPs & Data Centers</h6><p>Internet service providers and data center operators who want to add voice services to their existing customer base.</p></div></div></div>
    </div>
  </div>
</section>

<section className="section-alt" style={{ padding: '80px 0' }}>
  <div className="container"><div className="row justify-content-center"><div className="col-lg-8" data-aos="fade-up">
    <div className="testi">
      <div style={{ color: '#f59e0b', fontSize: '.9rem', marginBottom: '14px', letterSpacing: '2px' }}>★★★★★</div>
      <p style={{ color: 'rgba(255,255,255,.75)', fontSize: '1.05rem', lineHeight: '1.8', marginBottom: '24px' }}>"We launched our own white-label VoIP brand in 3 weeks using First Step Technology's wholesale platform. The portal handles all billing automatically, the LCR routing beats everything we tried before, and their carrier sales team was hands-on throughout the entire setup process."</p>
      <div style={{ display: 'flex', alignItems: 'center', gap: '14px' }}><div style={{ width: '48px', height: '48px', borderRadius: '50%', background: 'linear-gradient(135deg,#8b5cf6,#06b6d4)', display: 'flex', alignItems: 'center', justifyContent: 'center', fontWeight: '700', color: '#fff' }}>RC</div><div><div style={{ color: '#fff', fontWeight: '600' }}>Rami Chalabi</div><div style={{ color: 'rgba(255,255,255,.45)', fontSize: '.82rem' }}>Founder, VoicePlus MENA</div></div></div>
    </div>
  </div></div></div>
</section>

<section className="svc-cta">
  <div className="svc-cta-bg" id="ctaBg"></div>
  <div className="container"><div className="row justify-content-center text-center" style={{ position: 'relative', zIndex: '2' }}><div className="col-lg-7" data-aos="zoom-in">
    <div className="section-badge mx-auto mb-3"><i className="fas fa-rocket"></i> Partner With Us</div>
    <h2 style={{ fontFamily: "'Poppins',sans-serif", fontSize: 'clamp(2rem,4vw,3rem)', fontWeight: '800', color: '#fff', marginBottom: '18px' }}>Launch Your Wholesale Voice <span style={{ background: 'linear-gradient(90deg,#8b5cf6,#06b6d4)', WebkitBackgroundClip: 'text', WebkitTextFillColor: 'transparent', backgroundClip: 'text' }}>Business Today</span></h2>
    <p style={{ color: 'rgba(255,255,255,.6)', fontSize: '1.05rem', maxWidth: '500px', margin: '0 auto 32px', lineHeight: '1.75' }}>Join 500+ carrier partners on our wholesale platform. White-label, scale, and compete — without the infrastructure costs.</p>
    <div className="d-flex gap-3 justify-content-center flex-wrap"><Link href="/contact" className="btn-primary-grad" style={{ background: 'linear-gradient(135deg,#8b5cf6,#06b6d4)' }}><i className="fas fa-paper-plane"></i> Contact Carrier Sales</Link><Link href="/services" className="btn-outline-light-custom"><i className="fas fa-th-large"></i> All Services</Link></div>
  </div></div></div>
</section>
    </main>
  );
}




