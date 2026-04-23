import Link from 'next/link';
import type { Metadata } from 'next';

export const metadata: Metadata = {
  title: 'First Step Technology - Contact',
};

export default function Page() {
  return (
    <main>
      {/*  PAGE BANNER  */}
<section className="page-banner">
  <div className="page-banner-bg" id="bannerBg"></div>
  <div className="page-banner-grid"></div>
  <div className="container page-banner-content" data-aos="fade-up" data-aos-duration="800">
    <div className="breadcrumb-nav"><Link href="/">Home</Link><span>/</span><span>Contact</span></div>
    <h1>Let's <span className="highlight">Start the Conversation</span></h1>
    <p>Have questions about our services, want a live demo, or ready to get started? Our team is available 24/7 and typically responds within one business hour.</p>
  </div>
</section>

{/*  CONTACT MAIN  */}
<section id="contact">
  <div className="container">
    <div className="row g-5">

      {/*  Left: Info  */}
      <div className="col-lg-5" data-aos="fade-right" data-aos-duration="900">
        <h4 style={{ color: '#fff', fontWeight: '700', marginBottom: '28px' }}>Contact Information</h4>

        <div className="info-card">
          <div className="info-icon"><i className="fas fa-map-marker-alt"></i></div>
          <div><h6>Headquarters</h6><p>Hong Kong SAR, China</p></div>
        </div>
        <div className="info-card">
          <div className="info-icon"><i className="fas fa-envelope"></i></div>
          <div><h6>General Inquiries</h6><p><Link href="mailto:info@firststeptechnology.com">info@firststeptechnology.com</Link></p></div>
        </div>
        <div className="info-card">
          <div className="info-icon"><i className="fas fa-headset"></i></div>
          <div><h6>Technical Support</h6><p><Link href="mailto:support@firststeptechnology.com">support@firststeptechnology.com</Link></p></div>
        </div>
        <div className="info-card">
          <div className="info-icon"><i className="fas fa-briefcase"></i></div>
          <div><h6>Sales &amp; Partnerships</h6><p><Link href="mailto:sales@firststeptechnology.com">sales@firststeptechnology.com</Link></p></div>
        </div>

        {/*  Office Hours  */}
        <div className="hours-card">
          <h6 style={{ color: '#fff', fontWeight: '600', marginBottom: '16px' }}><i className="fas fa-clock" style={{ color: 'var(--cyan)', marginRight: '8px' }}></i>NOC &amp; Support Hours</h6>
          <div className="hours-row"><span className="day">Technical NOC</span><span className="always"><span className="live-dot"></span>24 / 7 / 365</span></div>
          <div className="hours-row"><span className="day">Sales Team</span><span className="time">Mon – Fri, 9am – 7pm HKT</span></div>
          <div className="hours-row"><span className="day">Emergency Line</span><span className="always"><span className="live-dot"></span>Always Available</span></div>
          <div className="hours-row"><span className="day">Response Time</span><span className="time">&lt; 1 Business Hour</span></div>
        </div>

        {/*  Social  */}
        <div className="social-strip">
          <Link href="#" className="soc-card linkedin"><i className="fab fa-linkedin-in"></i><span>LinkedIn</span></Link>
          <Link href="#" className="soc-card twitter"><i className="fab fa-twitter"></i><span>Twitter</span></Link>
          <Link href="#" className="soc-card whatsapp"><i className="fab fa-whatsapp"></i><span>WhatsApp</span></Link>
          <Link href="#" className="soc-card facebook"><i className="fab fa-facebook-f"></i><span>Facebook</span></Link>
        </div>
      </div>

      {/*  Right: Form  */}
      <div className="col-lg-7" data-aos="fade-left" data-aos-duration="900" data-aos-delay="150">
        <div className="form-wrap">
          <h4 style={{ color: '#fff', fontWeight: '700', marginBottom: '8px' }}>Send Us a Message</h4>
          <p style={{ color: 'rgba(255,255,255,.5)', fontSize: '.9rem', marginBottom: '28px' }}>Fill in the form below and a member of our team will get back to you shortly.</p>
          <form id="contactForm">
            <div className="row g-3">
              <div className="col-md-6">
                <label className="form-label">First Name <span style={{ color: '#ef4444' }}>*</span></label>
                <input type="text" className="form-control" placeholder="John" required />
              </div>
              <div className="col-md-6">
                <label className="form-label">Last Name <span style={{ color: '#ef4444' }}>*</span></label>
                <input type="text" className="form-control" placeholder="Doe" required />
              </div>
              <div className="col-md-6">
                <label className="form-label">Email Address <span style={{ color: '#ef4444' }}>*</span></label>
                <input type="email" className="form-control" placeholder="john@company.com" required />
              </div>
              <div className="col-md-6">
                <label className="form-label">Phone Number</label>
                <input type="tel" className="form-control" placeholder="+1 234 567 8901" />
              </div>
              <div className="col-md-6">
                <label className="form-label">Company Name</label>
                <input type="text" className="form-control" placeholder="Your Company Ltd." />
              </div>
              <div className="col-md-6">
                <label className="form-label">Country</label>
                <input type="text" className="form-control" placeholder="e.g. United States" />
              </div>
              <div className="col-12">
                <label className="form-label">Service Interest <span style={{ color: '#ef4444' }}>*</span></label>
                <select className="form-select" required>
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
              <div className="col-12">
                <label className="form-label">Estimated Monthly Minutes</label>
                <select className="form-select">
                  <option value="">Select range…</option>
                  <option>Under 100K minutes</option>
                  <option>100K – 500K minutes</option>
                  <option>500K – 1M minutes</option>
                  <option>1M – 5M minutes</option>
                  <option>5M+ minutes</option>
                </select>
              </div>
              <div className="col-12">
                <label className="form-label">Message <span style={{ color: '#ef4444' }}>*</span></label>
                <textarea className="form-control" rows={5} placeholder="Tell us about your requirements, current setup, and any specific goals or challenges…" required></textarea>
              </div>
              <div className="col-12">
                <div style={{ display: 'flex', alignItems: 'flex-start', gap: '10px', marginBottom: '16px' }}>
                  <input type="checkbox" id="agree" style={{ width: '18px', height: '18px', marginTop: '2px', accentColor: 'var(--accent)' }} required />
                  <label htmlFor="agree" style={{ color: 'rgba(255,255,255,.5)', fontSize: '.85rem', lineHeight: '1.6', cursor: 'pointer' }}>I agree to the <Link href="#" style={{ color: 'var(--cyan)' }}>Privacy Policy</Link> and consent to First Step Technology contacting me regarding my inquiry.</label>
                </div>
                <button type="submit" className="btn-submit">
                  <i className="fas fa-paper-plane me-2"></i> Send Message
                </button>
              </div>
            </div>
          </form>
          {/*  Success  */}
          <div id="formSuccess" style={{ display: 'none', marginTop: '24px', padding: '28px', background: 'rgba(34,197,94,.08)', border: '1px solid rgba(34,197,94,.25)', borderRadius: '16px', textAlign: 'center' }}>
            <div style={{ width: '64px', height: '64px', background: 'rgba(34,197,94,.15)', borderRadius: '50%', display: 'flex', alignItems: 'center', justifyContent: 'center', margin: '0 auto 16px' }}><i className="fas fa-check" style={{ color: '#22c55e', fontSize: '1.5rem' }}></i></div>
            <h5 style={{ color: '#fff', fontWeight: '700', marginBottom: '8px' }}>Message Sent Successfully!</h5>
            <p style={{ color: 'rgba(255,255,255,.55)', fontSize: '.9rem', margin: '0' }}>Our team will review your inquiry and get back to you within one business hour. We look forward to speaking with you.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{/*  MAP PLACEHOLDER  */}
<section id="map-section">
  <div className="container" data-aos="fade-up">
    <div className="map-wrap">
      <div className="map-pin"><i className="fas fa-building"></i></div>
      <div className="map-label">First Step Technology</div>
      <div className="map-sub">Hong Kong SAR, China</div>
    </div>
  </div>
</section>

{/*  FAQ  */}
<section id="faq">
  <div className="container">
    <div className="row justify-content-center text-center mb-5">
      <div className="col-lg-7" data-aos="fade-up">
        <div className="section-badge"><i className="fas fa-question-circle"></i> FAQ</div>
        <h2 className="section-title">Frequently Asked <span className="accent">Questions</span></h2>
        <p className="section-sub mx-auto">Quick answers to the most common questions from new and existing partners.</p>
      </div>
    </div>
    <div className="row justify-content-center">
      <div className="col-lg-9" data-aos="fade-up">

        <div className="faq-item">
          <div className="faq-q" >
            How quickly can I get started with your services?
            <i className="fas fa-plus faq-icon"></i>
          </div>
          <div className="faq-a"><div className="faq-a-inner">Account registration and KYC verification typically takes 24 hours. Once approved, our team will provide your SIP credentials and assist with integration. Most partners are making live calls within 48 hours of signing up.</div></div>
        </div>

        <div className="faq-item">
          <div className="faq-q" >
            Do you offer a trial or demo before committing?
            <i className="fas fa-plus faq-icon"></i>
          </div>
          <div className="faq-a"><div className="faq-a-inner">Yes — we offer a guided live demo for all of our products, and qualified partners can request a trial SIP trunk with limited minutes to test call quality to their key destinations. Contact our sales team to arrange this.</div></div>
        </div>

        <div className="faq-item">
          <div className="faq-q" >
            What billing models do you support?
            <i className="fas fa-plus faq-icon"></i>
          </div>
          <div className="faq-a"><div className="faq-a-inner">We support both prepaid (credit-based) and postpaid (invoice-based, monthly) billing. Prepaid accounts offer immediate provisioning, while postpaid is available to established partners after a credit check. We support multi-currency billing and automated invoicing.</div></div>
        </div>

        <div className="faq-item">
          <div className="faq-q" >
            What codecs and protocols do you support?
            <i className="fas fa-plus faq-icon"></i>
          </div>
          <div className="faq-a"><div className="faq-a-inner">Our network supports SIP/SDP for signaling and G.711 (PCMU/PCMA), G.722, G.729, and OPUS for audio. We support both UDP and TCP transport, as well as TLS/SRTP for encrypted calls. Our platform is compatible with all major PBX and softswitch systems.</div></div>
        </div>

        <div className="faq-item">
          <div className="faq-q" >
            How does your fraud detection work?
            <i className="fas fa-plus faq-icon"></i>
          </div>
          <div className="faq-a"><div className="faq-a-inner">Our platform includes real-time traffic analysis that detects anomalies such as sudden call volume spikes, calls to high-risk destinations, or unusual call patterns. Suspicious traffic is automatically flagged and can trigger automatic blocking or alerts. Partners can set custom spend limits and alert thresholds in the portal.</div></div>
        </div>

        <div className="faq-item">
          <div className="faq-q" >
            Do you provide SLAs for uptime?
            <i className="fas fa-plus faq-icon"></i>
          </div>
          <div className="faq-a"><div className="faq-a-inner">Yes. All partners receive a 99.9% monthly uptime SLA backed by our redundant global infrastructure with automatic failover. Enterprise and wholesale partners can discuss enhanced SLAs with dedicated capacity. Our 24/7 NOC proactively monitors all traffic and responds to incidents in real time.</div></div>
        </div>

        <div className="faq-item">
          <div className="faq-q" >
            Can I white-label your services for my customers?
            <i className="fas fa-plus faq-icon"></i>
          </div>
          <div className="faq-a"><div className="faq-a-inner">Absolutely. Our Wholesale Platform includes a white-label customer management portal that you can brand with your own logo, domain, and color scheme. Your end customers will never see First Step Technology branding. Contact our partnerships team for details on our reseller program.</div></div>
        </div>

      </div>
    </div>
  </div>
</section>

{/*  CTA  */}
<section id="cta">
  <div className="cta-bg" id="ctaBg"></div>
  <div className="container">
    <div className="cta-inner" data-aos="zoom-in" data-aos-duration="800">
      <div className="section-badge mx-auto mb-3"><i className="fas fa-rocket"></i> Join 500+ Partners</div>
      <h2>Global Voice Infrastructure, <span style={{ background: 'linear-gradient(90deg,#0d6efd,#00c6ff)', WebkitBackgroundClip: 'text', WebkitTextFillColor: 'transparent', backgroundClip: 'text' }}>Simplified</span></h2>
      <p>Everything your business needs to communicate globally — from a single trusted provider.</p>
      <div className="d-flex gap-3 justify-content-center flex-wrap">
        <Link href="/services" className="btn-primary-grad"><i className="fas fa-th-large"></i> Explore Services</Link>
        <Link href="/about" className="btn-outline-light-custom"><i className="fas fa-building"></i> Learn About Us</Link>
      </div>
    </div>
  </div>
</section>
    </main>
  );
}




