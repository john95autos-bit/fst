import type { Metadata } from 'next';
import './globals.css';
import AosInit from '@/components/AosInit';
import Preloader from '@/components/Preloader';
import Navigation from '@/components/Navigation';
import Footer from '@/components/Footer';
import InteractiveLogic from '@/components/InteractiveLogic';
import Script from 'next/script';

export const metadata: Metadata = {
  title: 'First Step Technology | Next-Gen IP Voice Solutions',
  description: 'First Step Technology offers premium retail routing, wholesale platforms, call center suites, and hosted PBX services.',
};

export default function RootLayout({
  children,
}: {
  children: React.ReactNode;
}) {
  return (
    <html lang="en">
      <head>
        <link rel="icon" type="image/png" href="/logo.png" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
      </head>
      <body>
        <Preloader />
        <Navigation />
        <AosInit />
        <InteractiveLogic />
        {children}
        <Footer />
        <Script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" strategy="lazyOnload" />
      </body>
    </html>
  );
}




