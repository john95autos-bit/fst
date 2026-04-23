"use client";

import { useEffect, useState } from 'react';

export default function Preloader() {
  const [loaded, setLoaded] = useState(false);
  const [hidden, setHidden] = useState(false);

  useEffect(() => {
    // Run the animation for at least 3000ms
    const timer = setTimeout(() => {
      setLoaded(true);
      // Wait another 1s for the slide-out CSS transition to finish before unmounting
      setTimeout(() => {
        setHidden(true);
      }, 1000);
    }, 3000);

    return () => clearTimeout(timer);
  }, []);

  if (hidden) return null;

  return (
    <div id="ctn-preloader" className={`ctn-preloader ${loaded ? 'loaded' : ''}`}>
      <div className="animation-preloader">
        <div className="txt-loading">
          <span data-text-preloader="F" className="letters-loading">F</span>
          <span data-text-preloader="I" className="letters-loading">I</span>
          <span data-text-preloader="R" className="letters-loading">R</span>
          <span data-text-preloader="S" className="letters-loading">S</span>
          <span data-text-preloader="T" className="letters-loading">T</span>
          <span data-text-preloader="S" className="letters-loading">S</span>
          <span data-text-preloader="T" className="letters-loading">T</span>
          <span data-text-preloader="E" className="letters-loading">E</span>
          <span data-text-preloader="P" className="letters-loading">P</span>
        </div>
      </div>
      <div className="loader">
        <div className="row">
          <div className="col-3 loader-section section-left"><div className="bg"></div></div>
          <div className="col-3 loader-section section-left"><div className="bg"></div></div>
          <div className="col-3 loader-section section-right"><div className="bg"></div></div>
          <div className="col-3 loader-section section-right"><div className="bg"></div></div>
        </div>
      </div>
    </div>
  );
}
