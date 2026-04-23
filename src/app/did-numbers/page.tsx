import Link from 'next/link';
import type { Metadata } from 'next';

export const metadata: Metadata = {
  title: 'First Step Technology - Did Numbers',
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
        <nav aria-label="breadcrumb" style={{ marginBottom: '18px' }}><div style={{ display: 'flex', alignItems: 'center', gap: '8px', fontSize: '.85rem', color: 'rgba(255,255,255,.4)' }}><Link href="/" style={{ color: '#fbbf24' }}>Home</Link><span>/</span><Link href="/services" style={{ color: '#fbbf24' }}>Services</Link><span>/</span><span>DID Numbers</span></div></nav>
        <div className="svc-badge"><i className="fas fa-hashtag fa-xs"></i> DID &amp; Toll-Free Numbers</div>
        <h1 style={{ fontFamily: "'Poppins',sans-serif", fontSize: 'clamp(2.4rem,5vw,4rem)', fontWeight: '800', color: '#fff', lineHeight: '1.12', marginBottom: '22px' }}>Local Numbers,<br /><span style={{ background: 'linear-gradient(90deg,#f59e0b,#ef4444)', WebkitBackgroundClip: 'text', WebkitTextFillColor: 'transparent', backgroundClip: 'text' }}>Global Reach</span></h1>
        <p style={{ fontSize: '1.05rem', color: 'rgba(255,255,255,.62)', lineHeight: '1.8', marginBottom: '32px' }}>Acquire local, national, and toll-free phone numbers across 60+ countries. Instant provisioning, smart call forwarding, and real-time analytics give you complete control over your inbound communications.</p>
        <div className="d-flex flex-wrap gap-3 mb-4">
          <Link href="/contact" className="btn-primary-grad" style={{ background: 'linear-gradient(135deg,#f59e0b,#ef4444)', boxShadow: '0 8px 28px rgba(245,158,11,.3)' }}><i className="fas fa-hashtag"></i> Get Numbers</Link>
          <Link href="#features" className="btn-outline-light-custom"><i className="fas fa-th-large"></i> See Features</Link>
        </div>
        <div>
          <span style={{ display: 'inline-flex', alignItems: 'center', gap: '6px', padding: '5px 14px', borderRadius: '50px', background: 'rgba(255,255,255,.06)', border: '1px solid rgba(255,255,255,.12)', fontSize: '.8rem', color: 'rgba(255,255,255,.6)', margin: '4px' }}><i className="fas fa-check" style={{ color: '#22c55e' }}></i> 60+ Countries</span>
          <span style={{ display: 'inline-flex', alignItems: 'center', gap: '6px', padding: '5px 14px', borderRadius: '50px', background: 'rgba(255,255,255,.06)', border: '1px solid rgba(255,255,255,.12)', fontSize: '.8rem', color: 'rgba(255,255,255,.6)', margin: '4px' }}><i className="fas fa-check" style={{ color: '#22c55e' }}></i> Instant Activation</span>
          <span style={{ display: 'inline-flex', alignItems: 'center', gap: '6px', padding: '5px 14px', borderRadius: '50px', background: 'rgba(255,255,255,.06)', border: '1px solid rgba(255,255,255,.12)', fontSize: '.8rem', color: 'rgba(255,255,255,.6)', margin: '4px' }}><i className="fas fa-check" style={{ color: '#22c55e' }}></i> Number Porting</span>
          <span style={{ display: 'inline-flex', alignItems: 'center', gap: '6px', padding: '5px 14px', borderRadius: '50px', background: 'rgba(255,255,255,.06)', border: '1px solid rgba(255,255,255,.12)', fontSize: '.8rem', color: 'rgba(255,255,255,.6)', margin: '4px' }}><i className="fas fa-check" style={{ color: '#22c55e' }}></i> SMS Capable</span>
        </div>
      </div>
      <div className="col-lg-6" data-aos="fade-left" data-aos-delay="200">
        <div style={{ background: 'rgba(255,255,255,.04)', border: '1px solid rgba(255,255,255,.1)', borderRadius: '24px', padding: '32px' }}>
          <h5 style={{ color: '#fff', fontWeight: '700', marginBottom: '20px' }}><i className="fas fa-hashtag" style={{ color: '#fbbf24', marginRight: '8px' }}></i>Available Number Types</h5>
          <div className="row g-3 mb-4">
            <div className="col-6"><div className="number-type"><div className="num-ex">+1 (213) 555-xxxx</div><div className="num-label">🇺🇸 US Local DID</div></div></div>
            <div className="col-6"><div className="number-type"><div className="num-ex">+44 20 7946-xxxx</div><div className="num-label">🇬🇧 UK London DID</div></div></div>
            <div className="col-6"><div className="number-type"><div className="num-ex">1-800-xxx-xxxx</div><div className="num-label">🇺🇸 US Toll-Free</div></div></div>
            <div className="col-6"><div className="number-type"><div className="num-ex">+971 4 xxx-xxxx</div><div className="num-label">🇦🇪 UAE Dubai DID</div></div></div>
            <div className="col-6"><div className="number-type"><div className="num-ex">+852 xxxx-xxxx</div><div className="num-label">🇭🇰 Hong Kong DID</div></div></div>
            <div className="col-6"><div className="number-type"><div className="num-ex">+49 30 xxxx-xxxx</div><div className="num-label">🇩🇪 Germany Berlin</div></div></div>
          </div>
          <div style={{ display: 'flex', alignItems: 'center', justifyContent: 'space-between', background: 'rgba(245,158,11,.08)', border: '1px solid rgba(245,158,11,.2)', borderRadius: '12px', padding: '14px 18px' }}>
            <span style={{ color: 'rgba(255,255,255,.6)', fontSize: '.85rem' }}>Available countries</span>
            <span style={{ color: '#fbbf24', fontWeight: '700', fontSize: '1.1rem' }}>60+ countries</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="features" className="section-alt" style={{ padding: '100px 0' }}>
  <div className="container">
    <div className="row justify-content-center text-center mb-5"><div className="col-lg-7" data-aos="fade-up"><div className="section-badge"><i className="fas fa-th-large"></i> Features</div><h2 className="section-title">Complete Inbound <span className="accent">Number Management</span></h2><p className="section-sub mx-auto">Smart routing, instant provisioning, and full analytics for every number in your portfolio.</p></div></div>
    <div className="row g-4">
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div className="feat-card"><div className="feat-icon"><i className="fas fa-globe"></i></div><h5>60+ Country Coverage</h5><p>Local, national, mobile, and toll-free numbers across all major markets in Europe, Americas, Asia-Pacific, Middle East, and Africa.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="60"><div className="feat-card"><div className="feat-icon"><i className="fas fa-bolt"></i></div><h5>Instant Provisioning</h5><p>Numbers activated within minutes via web portal or API. Browse available numbers, select, pay, and start receiving calls — immediately.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120"><div className="feat-card"><div className="feat-icon"><i className="fas fa-route"></i></div><h5>Smart Call Routing</h5><p>Route calls by time-of-day, day-of-week, caller geography, caller ID, or custom business rules. Set up failover and backup destinations.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="180"><div className="feat-card"><div className="feat-icon"><i className="fas fa-exchange-alt"></i></div><h5>Number Porting</h5><p>Port your existing local, national, or toll-free numbers to our platform with zero downtime and continuous service throughout the transfer.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240"><div className="feat-card"><div className="feat-icon"><i className="fas fa-comment-sms"></i></div><h5>SMS-Capable Numbers</h5><p>Send and receive SMS on selected DID numbers for a unified communications experience. Manage messages via API or web portal.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300"><div className="feat-card"><div className="feat-icon"><i className="fas fa-chart-line"></i></div><h5>Number Analytics</h5><p>Track inbound call volumes, answer rates, peak hours, caller geography, and conversion metrics for each number in your portfolio.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="360"><div className="feat-card"><div className="feat-icon"><i className="fas fa-shield-halved"></i></div><h5>Spam & Fraud Protection</h5><p>Automatic spam call filtering, caller ID verification, and configurable blocklists protect your numbers from abuse and unwanted traffic.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="420"><div className="feat-card"><div className="feat-icon"><i className="fas fa-code"></i></div><h5>REST API Control</h5><p>Provision, configure, and manage numbers programmatically. Integrate number management into your own platform or CRM system.</p></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="480"><div className="feat-card"><div className="feat-icon"><i className="fas fa-layer-group"></i></div><h5>Bulk Number Management</h5><p>Manage hundreds or thousands of DIDs from a single dashboard. Bulk configure routing rules, set group policies, and export reports.</p></div></div>
    </div>
  </div>
</section>

<section className="section-dark" style={{ padding: '80px 0', position: 'relative', overflow: 'hidden' }}>
  <div style={{ position: 'absolute', inset: '-60px', background: 'radial-gradient(ellipse 90% 70% at 50% 50%,rgba(245,158,11,.12) 0%,transparent 65%)', willChange: 'transform' }} id="statsBg"></div>
  <div className="container position-relative" style={{ zIndex: '2' }}>
    <div className="row g-4 text-center">
      <div className="col-6 col-lg-3" data-aos="zoom-in"><div className="mini-stat"><div className="num" data-count="60">0</div><div>+</div><div className="lbl">Countries Available</div></div></div>
      <div className="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="80"><div className="mini-stat"><div className="num" data-count="5">0</div><div>min</div><div className="lbl">Activation Time</div></div></div>
      <div className="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="160"><div className="mini-stat"><div className="num" data-count="3">0</div><div> types</div><div className="lbl">Local/National/TF</div></div></div>
      <div className="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="240"><div className="mini-stat"><div className="num" data-count="99">0</div><div>.9%</div><div className="lbl">Inbound Uptime</div></div></div>
    </div>
  </div>
</section>

<section className="section-alt" style={{ padding: '100px 0' }}>
  <div className="container">
    <div className="row align-items-center g-5">
      <div className="col-lg-6" data-aos="fade-right">
        <div className="section-badge"><i className="fas fa-sitemap"></i> How It Works</div>
        <h2 className="section-title">Numbers Live in <span className="accent">Minutes</span></h2>
        <div className="divider"></div>
        <div className="how-step"><div className="how-num">1</div><div><h5>Browse & Select Numbers</h5><p>Search our inventory by country, city, or area code. Choose local DIDs, national numbers, or toll-free prefixes from our extensive catalog.</p></div></div>
        <div className="how-step"><div className="how-num">2</div><div><h5>Configure Routing Rules</h5><p>Point each number to a SIP endpoint, trunk, or IVR. Set business-hours routing, geographic routing, and failover destinations.</p></div></div>
        <div className="how-step"><div className="how-num">3</div><div><h5>Activate in Minutes</h5><p>Purchase and activate your selected numbers instantly. No waiting periods, no complex paperwork for most countries.</p></div></div>
        <div className="how-step"><div className="how-num">4</div><div><h5>Monitor & Optimize</h5><p>Use our analytics dashboard to track call volumes, peak hours, and geographic patterns. Adjust routing rules in real time as needed.</p></div></div>
      </div>
      <div className="col-lg-6" data-aos="fade-left" data-aos-delay="150">
        <div style={{ background: 'rgba(255,255,255,.03)', border: '1px solid rgba(255,255,255,.08)', borderRadius: '22px', padding: '40px' }}>
          <h5 style={{ color: '#fff', fontWeight: '700', marginBottom: '24px' }}><i className="fas fa-check-circle" style={{ color: '#fbbf24', marginRight: '10px' }}></i>What's Included</h5>
          <ul className="check-list">
            <li><i className="fas fa-check-circle"></i> Local, national, and toll-free DIDs</li>
            <li><i className="fas fa-check-circle"></i> 60+ country coverage</li>
            <li><i className="fas fa-check-circle"></i> Instant number provisioning</li>
            <li><i className="fas fa-check-circle"></i> Smart routing & failover rules</li>
            <li><i className="fas fa-check-circle"></i> Time-of-day & geographic routing</li>
            <li><i className="fas fa-check-circle"></i> Number porting with zero downtime</li>
            <li><i className="fas fa-check-circle"></i> SMS capability on selected numbers</li>
            <li><i className="fas fa-check-circle"></i> Real-time call analytics dashboard</li>
            <li><i className="fas fa-check-circle"></i> REST API for number management</li>
            <li><i className="fas fa-check-circle"></i> Spam & fraud protection</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section className="section-dark" style={{ padding: '100px 0' }}>
  <div className="container">
    <div className="row justify-content-center text-center mb-5"><div className="col-lg-7" data-aos="fade-up"><div className="section-badge"><i className="fas fa-users"></i> Use Cases</div><h2 className="section-title">Who Needs <span className="accent">DID Numbers?</span></h2></div></div>
    <div className="row g-3">
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div className="use-card"><div className="use-icon"><i className="fas fa-globe"></i></div><div><h6>Global Businesses</h6><p>Establish a local presence in every market with local numbers. Customers call a local number — you receive calls anywhere in the world.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="60"><div className="use-card"><div className="use-icon"><i className="fas fa-bullhorn"></i></div><div><h6>Marketing Campaigns</h6><p>Assign unique DIDs to each campaign, channel, or ad group. Track call conversions and attribution with per-number analytics.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120"><div className="use-card"><div className="use-icon"><i className="fas fa-headset"></i></div><div><h6>Customer Support Lines</h6><p>Offer toll-free or local support numbers in each country you serve. Route to the right team based on caller location or language.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="180"><div className="use-card"><div className="use-icon"><i className="fas fa-shopping-cart"></i></div><div><h6>E-Commerce Stores</h6><p>Give customers in each country a local number to call. Build trust with local presence even when your team is centralized.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240"><div className="use-card"><div className="use-icon"><i className="fas fa-hospital"></i></div><div><h6>Healthcare Providers</h6><p>Dedicated lines for each clinic, department, or doctor. Smart routing ensures calls always reach the right practitioner.</p></div></div></div>
      <div className="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300"><div className="use-card"><div className="use-icon"><i className="fas fa-phone-square"></i></div><div><h6>VoIP Resellers</h6><p>Provision DIDs for your own customers using our wholesale DID inventory and API. Scale your DID business without infrastructure costs.</p></div></div></div>
    </div>
  </div>
</section>

<section className="section-alt" style={{ padding: '80px 0' }}>
  <div className="container"><div className="row justify-content-center"><div className="col-lg-8" data-aos="fade-up">
    <div className="testi">
      <div style={{ color: '#f59e0b', fontSize: '.9rem', marginBottom: '14px', letterSpacing: '2px' }}>★★★★★</div>
      <p style={{ color: 'rgba(255,255,255,.75)', fontSize: '1.05rem', lineHeight: '1.8', marginBottom: '24px' }}>"We set up local numbers in 12 countries for our support team in under an hour using First Step Technology's portal. The call routing flexibility is incredible — we route by time zone and language automatically. Customer satisfaction scores improved 30% just because customers were now calling a local number."</p>
      <div style={{ display: 'flex', alignItems: 'center', gap: '14px' }}><div style={{ width: '48px', height: '48px', borderRadius: '50%', background: 'linear-gradient(135deg,#f59e0b,#ef4444)', display: 'flex', alignItems: 'center', justifyContent: 'center', fontWeight: '700', color: '#fff' }}>PW</div><div><div style={{ color: '#fff', fontWeight: '600' }}>Paula Werner</div><div style={{ color: 'rgba(255,255,255,.45)', fontSize: '.82rem' }}>Head of Customer Success, ShopEU</div></div></div>
    </div>
  </div></div></div>
</section>

<section className="svc-cta">
  <div className="svc-cta-bg" id="ctaBg"></div>
  <div className="container"><div className="row justify-content-center text-center" style={{ position: 'relative', zIndex: '2' }}><div className="col-lg-7" data-aos="zoom-in">
    <div className="section-badge mx-auto mb-3"><i className="fas fa-hashtag"></i> Get Your Numbers</div>
    <h2 style={{ fontFamily: "'Poppins',sans-serif", fontSize: 'clamp(2rem,4vw,3rem)', fontWeight: '800', color: '#fff', marginBottom: '18px' }}>Go Local in <span style={{ background: 'linear-gradient(90deg,#f59e0b,#ef4444)', WebkitBackgroundClip: 'text', WebkitTextFillColor: 'transparent', backgroundClip: 'text' }}>60+ Countries</span></h2>
    <p style={{ color: 'rgba(255,255,255,.6)', fontSize: '1.05rem', maxWidth: '500px', margin: '0 auto 32px', lineHeight: '1.75' }}>Provision local, national, and toll-free numbers in minutes. No paperwork. No waiting.</p>
    <div className="d-flex gap-3 justify-content-center flex-wrap"><Link href="/contact" className="btn-primary-grad" style={{ background: 'linear-gradient(135deg,#f59e0b,#ef4444)' }}><i className="fas fa-hashtag"></i> Get Started</Link><Link href="/services" className="btn-outline-light-custom"><i className="fas fa-th-large"></i> All Services</Link></div>
  </div></div></div>
</section>
    </main>
  );
}




