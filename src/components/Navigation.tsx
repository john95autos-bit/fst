"use client";

import Link from 'next/link';
import { useEffect, useState } from 'react';

export default function Navigation() {
  const [scrolled, setScrolled] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      setScrolled(window.scrollY > 40);
    };
    window.addEventListener('scroll', handleScroll, { passive: true });
    // Check initial state
    handleScroll();
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  return (
    <nav className={`navbar navbar-expand-lg ${scrolled ? 'scrolled' : ''}`} id="mainNav">
      <div className="container">
        <Link className="navbar-brand" href="/">
          <img src="/logo.png" alt="First Step Technology" style={{ height: '40px', width: 'auto' }} />
        </Link>
        <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
          <span className="navbar-toggler-icon"></span>
        </button>
        <div className="collapse navbar-collapse" id="navMenu">
          <ul className="navbar-nav ms-auto align-items-lg-center gap-lg-1">
            <li className="nav-item"><Link className="nav-link" href="/">Home</Link></li>
            <li className="nav-item"><Link className="nav-link" href="/about">About</Link></li>
            <li className="nav-item"><Link className="nav-link" href="/services">Services</Link></li>
            <li className="nav-item"><Link className="nav-link" href="/contact">Contact</Link></li>
            <li className="nav-item ms-lg-2"><Link className="nav-link nav-cta" href="/contact">Get Started</Link></li>
          </ul>
        </div>
      </div>
    </nav>
  );
}
