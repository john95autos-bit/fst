"use client";

import { useEffect } from 'react';
import { usePathname } from 'next/navigation';

export default function InteractiveLogic() {
  const pathname = usePathname();

  useEffect(() => {
    // Re-attach FAQ toggle logic
    const faqQs = document.querySelectorAll('.faq-q');
    const handleFaqClick = (e: Event) => {
      const target = e.currentTarget as HTMLElement;
      target.classList.toggle('active');
    };
    faqQs.forEach(el => el.addEventListener('click', handleFaqClick));

    // Re-attach Tab toggle logic
    const svcTabs = document.querySelectorAll('.svc-tab');
    const handleTabClick = (e: Event) => {
      const target = e.currentTarget as HTMLElement;
      
      // Remove active from all tabs
      document.querySelectorAll('.svc-tab').forEach(t => t.classList.remove('active'));
      target.classList.add('active');

      // Hide all panels
      document.querySelectorAll('.svc-panel').forEach(p => p.classList.remove('active'));
      
      // Simple logic based on text content (since we removed the inline onclick params)
      const text = target.innerText.toLowerCase();
      let panelId = '';
      if (text.includes('retail')) panelId = 'retail';
      else if (text.includes('wholesale')) panelId = 'wholesale';
      else if (text.includes('pbx')) panelId = 'pbx';
      else if (text.includes('did')) panelId = 'did';
      else if (text.includes('call center')) panelId = 'callcenter';
      else if (text.includes('dialer')) panelId = 'dialer';
      
      if (panelId) {
        const panel = document.getElementById(panelId);
        if (panel) panel.classList.add('active');
      }
    };
    svcTabs.forEach(el => el.addEventListener('click', handleTabClick));

    return () => {
      faqQs.forEach(el => el.removeEventListener('click', handleFaqClick));
      svcTabs.forEach(el => el.removeEventListener('click', handleTabClick));
    };
  }, [pathname]); // Re-run when path changes

  return null;
}
