"use client";

import Link from 'next/link';
import { useEffect, useState } from 'react';

export default function Footer() {
  const [showBackToTop, setShowBackToTop] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      setShowBackToTop(window.scrollY > 400);
    };
    window.addEventListener('scroll', handleScroll, { passive: true });
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  const scrollToTop = () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  };

  return (
    <>
      <footer>
        <div className="container">
          <div className="row g-5">
            <div className="col-lg-4">
              <div className="footer-brand">
                <img src="/logo.png" alt="First Step Technology" style={{ height: '48px', width: 'auto' }} />
              </div>
              <p className="footer-desc">A leading global provider of next-generation IP Voice services - connecting the world since 2013.</p>
              <div className="mt-4">
                <Link href="#" className="social-btn"><i className="fab fa-linkedin-in"></i></Link>
                <Link href="#" className="social-btn"><i className="fab fa-twitter"></i></Link>
                <Link href="#" className="social-btn"><i className="fab fa-facebook-f"></i></Link>
                <Link href="#" className="social-btn"><i className="fab fa-whatsapp"></i></Link>
              </div>
            </div>
            <div className="col-6 col-lg-2">
              <h6 className="footer-heading">Pages</h6>
              <ul className="footer-links">
                <li><Link href="/">Home</Link></li>
                <li><Link href="/about">About Us</Link></li>
                <li><Link href="/services">Services</Link></li>
                <li><Link href="/contact">Contact</Link></li>
              </ul>
            </div>
            <div className="col-6 col-lg-2">
              <h6 className="footer-heading">Services</h6>
              <ul className="footer-links">
                <li><Link href="/services">Retail IP Voice</Link></li>
                <li><Link href="/services">Wholesale Platform</Link></li>
                <li><Link href="/services">Hosted IP-PBX</Link></li>
                <li><Link href="/services">DID & Toll-Free</Link></li>
                <li><Link href="/services">Call Center Suite</Link></li>
              </ul>
            </div>
            <div className="col-lg-4">
              <h6 className="footer-heading">Stay Updated</h6>
              <p style={{ color: 'rgba(255,255,255,.45)', fontSize: '.9rem', marginBottom: '16px' }}>Subscribe for product updates, industry news, and exclusive offers.</p>
              <div className="d-flex gap-2">
                <input type="email" className="form-control" placeholder="your@email.com" style={{ flex: 1 }} />
                <button style={{ background: 'linear-gradient(135deg,#0d6efd,#00c6ff)', border: 'none', color: '#fff', padding: '0 20px', borderRadius: '12px', fontWeight: 600, whiteSpace: 'nowrap', cursor: 'pointer' }}>Subscribe</button>
              </div>
            </div>
          </div>
          <div className="footer-bottom">
            <p>&copy; 2025 First Step Technology Limited. All rights reserved.</p>
            <div className="d-flex gap-3">
              <Link href="#">Privacy Policy</Link>
              <Link href="#">Terms of Service</Link>
            </div>
          </div>
        </div>
      </footer>
      <button 
        id="backToTop" 
        className={showBackToTop ? 'show' : ''} 
        onClick={scrollToTop}
      >
        <i className="fas fa-arrow-up"></i>
      </button>
    </>
  );
}
