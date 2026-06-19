<?php
$currentYear = date('Y');

$navLinks = [
    ['label' => 'Products', 'href' => '#products'],
    ['label' => 'Services', 'href' => '#services'],
    ['label' => 'Catering', 'href' => '#catering'],
    ['label' => 'Training', 'href' => '#training'],
    ['label' => 'Gallery', 'href' => '#gallery'],
];

$heroCategories = [
    [
        'id' => 'catering',
        'eyebrow' => 'Luxury Event Services',
        'headline' => "Unforgettable\nCatering",
        'subtext' => 'We curate polished dessert & savory food experiences for weddings, corporate galas, and private events.',
        'image' => 'https://images.unsplash.com/photo-1555507036-ab1f4038808a?q=80&w=1200&auto=format&fit=crop',
        'thumb' => 'https://images.unsplash.com/photo-1555507036-ab1f4038808a?q=80&w=300&auto=format&fit=crop',
        'accent' => '#FF7B2E',
        'icon' => 'bi-plate'
    ],
    [
        'id' => 'cakes',
        'eyebrow' => 'Artisanal Perfection',
        'headline' => "Exquisite\nCustom Cakes",
        'subtext' => 'Bespoke designs that taste as good as they look. From weddings to birthdays, we make your vision a reality.',
        'image' => './cake.png',
        'thumb' => './cake.png',
        'accent' => '#FF7B2E',
        'icon' => 'bi-cake2'
    ],
    [
        'id' => 'pastries',
        'eyebrow' => 'Freshly Baked',
        'headline' => "Artisanal\nPastries",
        'subtext' => 'Indulge in our collection of buttery, flaky delights, baked fresh every morning with premium ingredients.',
        'image' => 'assets/meat-pie.png',
        'thumb' => 'assets/meat-pie.png',
        'accent' => '#FF7B2E',
        'icon' => 'bi-pie-chart'
    ],
];

$services = [
    ['title' => 'Custom Cakes', 'price' => '₦450,000', 'description' => 'Centerpiece cakes designed for your most unforgettable milestones.', 'icon' => '🎂', 'image' => 'https://images.unsplash.com/photo-1571115177098-24ec42ed204d?auto=format&fit=crop&q=80&w=900'],
    ['title' => 'Artisan Pastries', 'price' => '₦45,000', 'description' => 'Flaky, buttery, beautifully finished pastries baked fresh daily.', 'icon' => '🥐', 'image' => 'https://images.unsplash.com/photo-1608198093002-ad4e005484ec?auto=format&fit=crop&q=80&w=900'],
    ['title' => 'Event Catering', 'price' => '₦1,200,000', 'description' => 'Dessert tables and confectionery styling for luxury celebrations.', 'icon' => '✨', 'image' => 'https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&q=80&w=900'],
    ['title' => 'Masterclasses', 'price' => '₦100,000', 'description' => 'Hands-on baking education designed for all skill levels.', 'icon' => '🎓', 'image' => 'https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&q=80&w=900'],
];

$products = [
    ['name' => 'Champagne Wedding Cake', 'price' => '₦450,000', 'category' => 'Cakes', 'image' => 'https://images.unsplash.com/photo-1535254973040-607b474cb8c2?auto=format&fit=crop&q=80&w=900', 'calories' => '450 kcal', 'fat' => '25%'],
    ['name' => 'Artisanal Macaron Suite', 'price' => '₦45,000', 'category' => 'Pastries', 'image' => 'https://images.unsplash.com/photo-1559622214-f8a9850965bb?auto=format&fit=crop&q=80&w=900', 'calories' => '120 kcal', 'fat' => '15%'],
    ['name' => 'Savory Party Platter', 'price' => '₦120,000', 'category' => 'Foods', 'image' => 'assets/samosa.png', 'calories' => '320 kcal', 'fat' => '18%'],
    ['name' => 'Belgian Croissants', 'price' => '₦6,500', 'category' => 'Pastries', 'image' => 'https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&q=80&w=900', 'calories' => '280 kcal', 'fat' => '22%'],
];

$courses = [
    ['title' => 'Luxury Cake Art', 'duration' => '4 Weeks', 'price' => '₦100,000', 'level' => 'Advanced', 'image' => 'https://images.unsplash.com/photo-1464349095431-e9a21285b5f3?auto=format&fit=crop&q=80&w=900'],
    ['title' => 'French Pastry', 'duration' => '2 Weeks', 'price' => '₦65,000', 'level' => 'Intermediate', 'image' => 'https://images.unsplash.com/photo-1517433670267-08bbd4be890f?auto=format&fit=crop&q=80&w=900'],
    ['title' => 'Event Styling', 'duration' => '3 Days', 'price' => '₦45,000', 'level' => 'Professional', 'image' => 'https://images.unsplash.com/photo-1530103043960-ef38714abb15?auto=format&fit=crop&q=80&w=900'],
];

$gallery = [
    'https://images.unsplash.com/photo-1535141192574-5d4897c12636?auto=format&fit=crop&q=80&w=900',
    'https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?auto=format&fit=crop&q=80&w=900',
    'https://images.unsplash.com/photo-1588195538326-c5b1e9f80a1b?auto=format&fit=crop&q=80&w=900',
    'https://images.unsplash.com/photo-1565958011703-44f9829ba187?auto=format&fit=crop&q=80&w=900',
    'https://images.unsplash.com/photo-1558961312-3004b3602f23?auto=format&fit=crop&q=80&w=900',
    'https://images.unsplash.com/photo-1551024601-bec78aea704b?auto=format&fit=crop&q=80&w=900',
];

$testimonials = [
    ['name' => 'Sarah Williams', 'role' => 'Bride', 'initials' => 'SW', 'text' => 'The wedding cake was stunning, delicious, and delivered exactly as promised. Guests still ask who made it.'],
    ['name' => 'John Carter', 'role' => 'Event Planner', 'initials' => 'JC', 'text' => 'Their dessert styling is refined, dependable, and always camera-ready. It makes event planning much easier.'],
    ['name' => 'Amanda Lee', 'role' => 'Baking Student', 'initials' => 'AL', 'text' => 'The masterclass gave me structure, confidence, and practical methods I could immediately use in my baking business.'],
];

$stats = [
    ['value' => '5,000+', 'label' => 'Cakes Crafted'],
    ['value' => '12', 'label' => 'Years of Excellence'],
    ['value' => '98%', 'label' => 'Client Satisfaction'],
    ['value' => '300+', 'label' => 'Events Styled'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Good Choice Confectionery — Premium Cakes & Events</title>
    <meta name="description" content="Good Choice Confectionery — custom cakes, pastries, luxury event catering, and baking masterclasses.">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* ============================================
           DESIGN TOKENS
        ============================================ */
        :root {
            --brand-orange: #FF7B2E;    /* Vibrant Primary */
            --brand-orange-soft: #FFF5F0;
            --brand-tan: #D4A76A;       /* Elegant Accent */
            --brand-gold: #C5A059;      /* Deep Gold */
            --midnight: #0A0A0A;        /* True Premium Black */
            --midnight-soft: #141414;
            --ink: #141414;             /* Soft Black */
            --paper: #F9F7F2;           /* Off-white canvas */
            --white: #FFFFFF;
            --muted: #888888;
            --radius-lg: 3rem;
            --radius-md: 2rem;
            --radius-sm: 1rem;
            --ease: cubic-bezier(0.25, 1, 0.3, 1);
            --shadow-premium: 0 30px 60px rgba(0,0,0,0.12);
            --shadow-hover: 0 40px 80px rgba(255, 123, 46, 0.2);
        }

        /* ============================================
           RESET & BASE
        ============================================ */
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; font-size: 16px; }
        body {
            background-color: var(--midnight);
            color: var(--white);
            font-family: 'Sora', sans-serif;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }
        h1,h2,h3,h4,h5,h6 { font-family: 'Sora', sans-serif; font-weight: 800; letter-spacing: -0.04em; }
        a { color: inherit; text-decoration: none; transition: all 0.3s var(--ease); }
        img { display: block; max-width: 100%; }
        .container { max-width: 1280px; margin: 0 auto; padding: 0 2rem; }

        /* ============================================
           SCROLLBAR
        ============================================ */
        ::-webkit-scrollbar { width: 4px; }
        ::-webkit-scrollbar-track { background: var(--ink); }
        ::-webkit-scrollbar-thumb { background: var(--brand-orange); border-radius: 2px; }

        /* ============================================
           PROGRESS BAR
        ============================================ */
        #progress-bar {
            position: fixed; top: 0; left: 0; height: 2px;
            background: linear-gradient(90deg, var(--brand-gold), var(--brand-orange));
            z-index: 10000; width: 0%; transition: width 0.1s linear;
        }

        /* ============================================
           UTILITIES
        ============================================ */
        .gold { color: var(--brand-orange); }
        .eyebrow {
            display: inline-flex; align-items: center; gap: 0.6rem;
            font-family: 'Sora', sans-serif; font-size: 0.72rem;
            font-weight: 800; text-transform: uppercase; letter-spacing: 0.2em;
            color: var(--brand-orange);
        }
        .eyebrow::before {
            content: ''; display: block; width: 24px; height: 1.5px;
            background: currentColor; flex-shrink: 0;
        }
        .section-pad { padding: 7rem 0; }
        .btn-gc {
            display: inline-flex; align-items: center; gap: 0.6rem;
            padding: 1.125rem 2.5rem; border-radius: 999px;
            font-family: 'Sora', sans-serif; font-size: 0.95rem;
            font-weight: 800; letter-spacing: -0.01em;
            cursor: pointer; border: none; outline: none;
            transition: all 0.5s var(--ease);
        }
        .btn-gc-gold {
            background: var(--brand-orange);
            color: var(--white);
            box-shadow: 0 8px 30px rgba(242,133,0,0.35);
        }
        .btn-gc-gold:hover {
            background: var(--brand-gold);
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 14px 40px rgba(242,133,0,0.45);
            color: var(--white);
        }
        .btn-gc-outline {
            background: transparent;
            color: var(--white);
            border: 1.5px solid rgba(255,255,255,0.3);
        }
        .btn-gc-outline:hover {
            background: rgba(255,255,255,0.08);
            border-color: rgba(255,255,255,0.6);
            transform: translateY(-3px);
            color: var(--white);
        }

        /* ============================================
           NAVBAR
        ============================================ */
        .site-nav {
            position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
            padding: 1.5rem 0;
            transition: all 0.5s var(--ease);
        }
        .site-nav.scrolled {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            padding: 1rem 0;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }
        .nav-inner {
            display: flex; align-items: center; justify-content: space-between;
        }
        .nav-logo {
            display: flex; align-items: center; gap: 1rem;
        }
        .nav-logo-img {
            height: 52px;
            width: auto;
            object-fit: contain;
            transition: transform 0.4s var(--ease);
        }
        .nav-logo:hover .nav-logo-img { transform: scale(1.05); }
        .nav-logo-text {
            font-family: 'Sora', sans-serif; font-weight: 800;
            font-size: 1.25rem; color: var(--white); letter-spacing: -0.04em;
        }
        .nav-logo-text span { color: var(--brand-orange); }
        .nav-links a {
            padding: 0.5rem 1.2rem;
            font-size: 0.95rem; font-weight: 700;
            color: var(--white);
            border-radius: 999px;
            transition: all 0.3s ease;
        }
        .nav-links a:hover { background: rgba(255,255,255,0.1); color: var(--brand-orange); }
        
        .nav-cta { display: flex; align-items: center; gap: 1rem; }
        .btn-talk {
            background: var(--brand-tan);
            color: var(--white);
            padding: 0.75rem 2rem;
            border-radius: 999px;
            font-weight: 800;
            font-size: 0.9rem;
            box-shadow: 0 10px 20px rgba(212, 167, 106, 0.3);
        }
        .btn-talk:hover {
            background: #c2965a;
            transform: translateY(-2px);
            color: #fff;
        }
        .hamburger {
            display: none; flex-direction: column; gap: 5px;
            cursor: pointer; padding: 0.5rem;
            background: none; border: none;
        }
        .hamburger span {
            display: block; width: 24px; height: 2px;
            background: var(--white); border-radius: 2px;
            transition: all 0.3s ease;
        }
        .mobile-menu {
            display: none; position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background: var(--midnight); z-index: 999;
            flex-direction: column; align-items: center; justify-content: center; gap: 2rem;
        }
        .mobile-menu.open { display: flex; }
        .mobile-menu a {
            font-size: 2.2rem; color: var(--white); font-family: 'Sora', sans-serif;
            font-weight: 800; transition: color 0.3s;
        }
        .mobile-menu a:hover { color: var(--brand-orange); }
        .mobile-close {
            position: absolute; top: 1.5rem; right: 1.5rem;
            font-size: 2rem; color: var(--white); background: none; border: none;
            cursor: pointer; line-height: 1;
        }

        /* ============================================
           HERO
        ============================================ */
        .hero {
            min-height: 100vh;
            background: var(--white);
            position: relative;
            overflow: hidden;
            display: flex; flex-direction: column;
            padding-bottom: 5rem;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0; right: 0;
            width: 45%; height: 100%;
            background: var(--brand-orange);
            border-radius: 60% 0 0 60%;
            z-index: 1;
            transform: translateX(10%);
        }
        
        @media (max-width: 991px) {
            .hero::before { 
                width: 100%; height: 40%; 
                border-radius: 0 0 50% 50%;
                top: 0; left: 0; transform: translateY(-10%);
            }
        }

        .hero-inner {
            position: relative;
            z-index: 10;
            padding-top: 10rem;
            padding-bottom: 6rem;
        }

        .hero-layout {
            display: grid;
            grid-template-columns: 1.1fr 1fr 0.6fr;
            align-items: center;
            gap: 2rem;
        }

        @media (max-width: 991px) {
            .hero-inner { padding-top: 4rem; }
            .hero-layout { 
                grid-template-columns: 1fr; 
                text-align: center;
                gap: 4rem;
            }
        }

        .hero-text-side { color: var(--ink); }
        .hero-title {
            font-family: 'Sora', sans-serif;
            font-size: clamp(3rem, 6vw, 4.8rem);
            font-weight: 800;
            color: var(--ink); line-height: 1.05;
            margin-bottom: 2rem;
            letter-spacing: -0.04em;
            max-width: 10ch;
        }
        @media (max-width: 991px) { .hero-title { margin-inline: auto; } }

        .hero-body {
            font-size: 1.05rem; color: var(--muted);
            line-height: 1.85; max-width: 32rem;
            margin-bottom: 2.5rem;
            font-weight: 500;
        }
        @media (max-width: 991px) { .hero-body { margin-inline: auto; } }

        .hero-actions { display: flex; align-items: center; gap: 1rem; flex-wrap: wrap; margin-bottom: 3.5rem; }
        @media (max-width: 991px) { .hero-actions { justify-content: center; } }
        
        .btn-gc-brand-orange {
            background: var(--brand-orange);
            color: var(--white);
            box-shadow: 0 15px 30px rgba(255, 123, 46, 0.3);
        }
        .btn-gc-brand-orange:hover {
            background: var(--gold-deep);
            transform: translateY(-3px);
            color: #fff;
        }
        .btn-gc-tan {
            background: var(--brand-tan);
            color: var(--white);
            box-shadow: 0 15px 30px rgba(212, 167, 106, 0.2);
        }
        .btn-gc-tan:hover {
            background: #c2965a;
            transform: translateY(-3px);
            color: #fff;
        }

        /* Hero Image Side - Circular */
        .hero-visual { position: relative; display: flex; justify-content: center; z-index: 3; }
        @media (max-width: 991px) { .hero-visual { order: 1; } }

        .hero-img-circle {
            width: 500px; height: 500px;
            border-radius: 50%;
            overflow: hidden;
            border: 15px solid rgba(255,255,255,0.1);
            box-shadow: var(--shadow-lg);
            position: relative;
            background: var(--white);
        }
        @media (max-width: 1200px) { .hero-img-circle { width: 400px; height: 400px; } }
        @media (max-width: 576px) { .hero-img-circle { width: 280px; height: 280px; border-width: 8px; } }

        #hero-main-img {
            width: 100%; height: 100%;
            object-fit: cover;
            transition: all 0.6s var(--ease);
        }

        /* Hero Toggle Side */
        .hero-toggle-side {
            display: flex; flex-direction: column; gap: 1.25rem;
            z-index: 4;
        }
        @media (max-width: 991px) {
            .hero-toggle-side { order: 3; flex-direction: row; justify-content: center; width: 100%; }
        }

        .category-card {
            background: var(--white);
            border-radius: 999px;
            padding: 1.15rem 1.75rem 1.15rem 1.15rem;
            display: flex; align-items: center; gap: 1.25rem;
            cursor: pointer;
            transition: all 0.5s var(--ease);
            box-shadow: 0 15px 35px rgba(0,0,0,0.08);
            border: 1px solid rgba(0,0,0,0.05);
            min-width: 240px;
            color: var(--midnight); /* FIX: Set explicit text color */
        }
        @media (max-width: 991px) {
            .category-card { min-width: auto; padding: 0.85rem 1.5rem; }
            .category-card span { display: none; }
        }

        .category-card.active {
            background: var(--midnight);
            color: var(--white);
            transform: translateX(-20px);
            box-shadow: var(--shadow-premium);
            border-color: var(--midnight);
        }
        @media (max-width: 991px) {
            .category-card.active { transform: translateY(-5px); }
            .category-card.active span { display: block; }
        }

        .cat-icon-wrap {
            width: 54px; height: 54px;
            background: var(--brand-orange-soft);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.4rem;
            color: var(--brand-orange);
            transition: all 0.5s ease;
            flex-shrink: 0;
        }
        .category-card.active .cat-icon-wrap {
            background: var(--brand-orange);
            color: var(--white);
        }
        .category-card:hover:not(.active) {
            transform: translateX(-10px);
            border-color: var(--brand-orange);
            background: var(--brand-orange-soft);
        }
        @media (max-width: 991px) {
            .category-card:hover:not(.active) { transform: translateY(-3px); }
        }

        .category-card span {
            font-weight: 800; font-size: 1.1rem; letter-spacing: -0.02em;
        }

        /* ============================================
           MARQUEE STRIP
        ============================================ */
        .marquee-strip {
            background: var(--midnight); padding: 1.25rem 0;
            overflow: hidden; white-space: nowrap;
            border-top: 1px solid rgba(255,255,255,0.1);
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .marquee-track {
            display: inline-flex; gap: 3rem;
            animation: marqueeScroll 20s linear infinite;
        }
        @keyframes marqueeScroll {
            from { transform: translateX(0); }
            to   { transform: translateX(-50%); }
        }
        .marquee-item {
            font-size: 0.8rem; font-weight: 800; color: var(--white);
            text-transform: uppercase; letter-spacing: 0.2em;
            display: inline-flex; align-items: center; gap: 1rem;
        }
        .marquee-item::after {
            content: '◆'; font-size: 0.5rem; color: rgba(255,255,255,0.5);
        }

        /* ============================================
           SERVICES OVERLAP
        ============================================ */
        .services-section {
            background: var(--white);
            border-radius: 2.5rem 2.5rem 0 0;
            margin-top: -3rem;
            position: relative; z-index: 10;
            padding: 6rem 0 5rem;
        }
        .services-grid {
            display: grid; grid-template-columns: repeat(4, 1fr); gap: 1.5rem;
            margin-top: 3.5rem;
        }
        .service-card {
            background: var(--surface); border-radius: var(--radius);
            padding: 2rem; border: 1px solid var(--line-dark);
            transition: all 0.4s var(--ease);
            cursor: default;
            position: relative; overflow: hidden;
        }
        .service-card::before {
            content: ''; position: absolute; inset: 0;
            background: linear-gradient(135deg, var(--gold-glow), transparent);
            opacity: 0; transition: opacity 0.4s ease;
        }
        .service-card:hover { transform: translateY(-6px); box-shadow: var(--shadow); }
        .service-card:hover::before { opacity: 1; }
        .svc-icon {
            width: 52px; height: 52px; border-radius: 14px;
            background: var(--ink); display: flex; align-items: center;
            justify-content: center; font-size: 1.4rem; margin-bottom: 1.5rem;
            transition: transform 0.3s var(--ease);
        }
        .service-card:hover .svc-icon { transform: rotate(-8deg) scale(1.08); }
        .service-card h3 {
            font-family: 'Sora', sans-serif; font-size: 1.15rem;
            font-weight: 800; margin-bottom: 0.6rem; letter-spacing: -0.02em;
        }
        .service-card p { font-size: 0.88rem; color: var(--muted); line-height: 1.7; margin-bottom: 1.5rem; }
        .svc-img {
            width: calc(100% + 4rem); margin-left: -2rem; margin-bottom: -2rem;
            height: 170px; object-fit: cover;
            border-radius: 0 0 var(--radius) var(--radius);
            transition: transform 0.5s var(--ease);
        }
        .service-card:hover .svc-img { transform: scale(1.04); }

        /* ============================================
           SECTION HEADING COMPONENT
        ============================================ */
        .section-head { max-width: 680px; }
        .section-head.centered { max-width: 600px; margin: 0 auto; text-align: center; }
        .section-head h2 {
            font-size: clamp(2.2rem, 3.5vw, 3rem);
            line-height: 1.1; margin: 0.75rem 0 1rem;
        }
        .section-head p { color: var(--muted); font-size: 1rem; line-height: 1.8; }

        /* ============================================
           PRODUCTS — DARK & PREMIUM
        ============================================ */
        .products-section {
            background: #120D09; /* Deep black-brown */
            padding: 7rem 0;
            position: relative;
        }
        .products-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 4rem;
        }
        @media (max-width: 768px) {
            .products-header { flex-direction: column; align-items: flex-start; gap: 2rem; }
        }

        /* Tabs/Toggle */
        .product-tabs {
            display: flex;
            gap: 0.5rem;
            background: rgba(255,255,255,0.03);
            padding: 0.5rem;
            border-radius: 999px;
            border: 1px solid rgba(255,255,255,0.08);
        }
        .tab-btn {
            padding: 0.6rem 1.5rem;
            border-radius: 999px;
            font-size: 0.85rem;
            font-weight: 700;
            color: rgba(255,255,255,0.5);
            cursor: pointer;
            transition: all 0.3s var(--ease);
        }
        .tab-btn.active {
            background: var(--brand-orange);
            color: var(--white);
            box-shadow: 0 10px 20px rgba(255, 123, 46, 0.2);
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
            align-items: flex-end;
        }
        @media (max-width: 1200px) { .products-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 576px) { .products-grid { grid-template-columns: 1fr; } }

        .product-card {
            background: #EEDCC6; /* Soft gold/tan background */
            border-radius: 2.5rem;
            padding: 2rem;
            text-align: center;
            transition: all 0.5s var(--ease);
            position: relative;
            cursor: pointer;
            color: var(--ink);
            min-height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }
        .product-card:hover, .product-card.active {
            background: var(--brand-orange);
            color: var(--white);
            transform: translateY(-20px);
            min-height: 460px;
            box-shadow: 0 30px 60px rgba(255, 123, 46, 0.3);
        }

        .product-card .img-container {
            position: absolute;
            top: -40px;
            left: 50%;
            transform: translateX(-50%);
            width: 80%;
            z-index: 2;
            transition: all 0.5s var(--ease);
        }
        .product-card:hover .img-container, .product-card.active .img-container {
            width: 90%;
            top: -60px;
        }
        .product-card img {
            width: 100%;
            aspect-ratio: 1/1;
            object-fit: contain;
            filter: drop-shadow(0 20px 30px rgba(0,0,0,0.2));
        }

        .product-card .card-content {
            margin-top: auto;
        }
        .product-card .brand-name {
            font-size: 0.75rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            opacity: 0.6;
            margin-bottom: 0.5rem;
        }
        .product-card .product-title {
            font-size: 1.6rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            letter-spacing: -0.02em;
        }
        .product-card .stats-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-bottom: 2rem;
            text-align: left;
            font-size: 0.7rem;
            opacity: 0.8;
        }
        .stat-item { display: flex; justify-content: space-between; border-bottom: 1px solid rgba(0,0,0,0.05); padding-bottom: 2px; }
        .product-card.active .stat-item, .product-card:hover .stat-item { border-color: rgba(255,255,255,0.1); }

        .add-to-cart-btn {
            background: #8B0000; /* Deep dark red for contrast */
            color: var(--white);
            padding: 0.8rem 2rem;
            border-radius: 999px;
            font-weight: 800;
            font-size: 0.85rem;
            text-transform: uppercase;
            border: none;
            width: 100%;
            transition: all 0.3s ease;
            opacity: 0;
            transform: translateY(10px);
        }
        .product-card:hover .add-to-cart-btn, .product-card.active .add-to-cart-btn {
            opacity: 1;
            transform: translateY(0);
        }
        .add-to-cart-btn:hover { background: #660000; }

        /* ============================================
           CATERING — LIGHT + EDITORIAL
        ============================================ */
        .catering-section { background: var(--surface); padding: 7rem 0; }
        .catering-layout {
            display: grid; grid-template-columns: 1fr 1fr; gap: 6rem;
            align-items: center;
        }
        .catering-img-stack { position: relative; }
        .catering-main {
            width: 100%; border-radius: var(--radius-xl) var(--radius-sm) var(--radius-xl) var(--radius-sm);
            aspect-ratio: 4/5; object-fit: cover;
            box-shadow: var(--shadow-lg);
        }
        .catering-float-card {
            position: absolute; bottom: -1.5rem; right: -2.5rem;
            background: var(--white); border-radius: var(--radius);
            padding: 1.5rem; max-width: 220px;
            box-shadow: var(--shadow);
            border: 1px solid var(--line-dark);
        }
        .catering-float-card .icon-wrap {
            width: 40px; height: 40px; background: var(--ink);
            border-radius: 10px; display: flex; align-items: center;
            justify-content: center; margin-bottom: 0.75rem; font-size: 1.1rem;
        }
        .catering-float-card strong {
            display: block; font-size: 0.9rem; font-weight: 800; margin-bottom: 0.35rem;
        }
        .catering-float-card p { font-size: 0.8rem; color: var(--muted); line-height: 1.6; margin: 0; }
        .catering-text { padding-left: 1rem; }
        .catering-text h2 { font-size: clamp(2.2rem, 3.5vw, 3.2rem); margin: 0.75rem 0 1.5rem; }
        .catering-text > p { color: var(--muted); font-size: 1rem; line-height: 1.85; margin-bottom: 2.5rem; }
        .catering-features { display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 2.5rem; }
        .feat-item { display: flex; gap: 0.875rem; align-items: flex-start; }
        .feat-icon {
            width: 38px; height: 38px; border-radius: 10px; flex-shrink: 0;
            background: var(--gold-glow); display: flex; align-items: center;
            justify-content: center; color: var(--gold); font-size: 1rem; margin-top: 2px;
        }
        .feat-item h4 { font-family: 'Sora', sans-serif; font-size: 0.95rem; font-weight: 800; margin-bottom: 0.2rem; }
        .feat-item p { font-size: 0.82rem; color: var(--muted); line-height: 1.6; margin: 0; }

        /* ============================================
           TRAINING
        ============================================ */
        .training-section { background: var(--ink); padding: 7rem 0; }
        .training-section .section-head h2 { color: var(--white); }
        .training-section .section-head p { color: rgba(255,255,255,0.5); }
        .courses-grid {
            display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem;
            margin-top: 3.5rem;
        }
        .course-card {
            background: var(--ink-2); border-radius: var(--radius);
            border: 1px solid var(--line); overflow: hidden;
            transition: all 0.4s var(--ease);
        }
        .course-card:hover { transform: translateY(-8px); box-shadow: 0 30px 60px rgba(0,0,0,0.4); border-color: rgba(242,133,0,0.3); }
        .course-img-wrap { position: relative; overflow: hidden; }
        .course-img { width: 100%; aspect-ratio: 16/10; object-fit: cover; transition: transform 0.5s var(--ease); }
        .course-card:hover .course-img { transform: scale(1.05); }
        .course-level-badge {
            position: absolute; top: 1rem; right: 1rem;
            background: var(--ink); color: var(--gold);
            font-size: 0.65rem; font-weight: 800; text-transform: uppercase;
            letter-spacing: 0.15em; padding: 0.4rem 0.85rem; border-radius: 999px;
        }
        .course-body { padding: 1.75rem; }
        .stars { color: var(--gold); font-size: 0.8rem; margin-bottom: 0.75rem; letter-spacing: 2px; }
        .course-title {
            font-family: 'Sora', sans-serif; color: var(--white);
            font-size: 1.35rem; font-weight: 800; margin-bottom: 1.25rem; line-height: 1.25;
        }
        .course-meta {
            display: grid; grid-template-columns: 1fr 1fr;
            gap: 1rem; padding: 1.25rem 0; margin-bottom: 1.25rem;
            border-top: 1px solid var(--line); border-bottom: 1px solid var(--line);
        }
        .meta-label { font-size: 0.65rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.15em; color: rgba(255,255,255,0.35); margin-bottom: 0.2rem; }
        .meta-val { font-size: 0.95rem; font-weight: 700; color: var(--white); }
        .course-cta {
            display: block; width: 100%; text-align: center;
            padding: 0.875rem; border-radius: 999px;
            background: var(--gold); color: var(--white);
            font-weight: 700; font-size: 0.88rem; letter-spacing: 0.04em;
            transition: all 0.3s ease;
        }
        .course-cta:hover { background: var(--gold-deep); color: var(--white); transform: scale(1.02); }

        /* ============================================
           GALLERY — MASONRY
        ============================================ */
        .gallery-section { background: var(--white); padding: 7rem 0; }
        .gallery-header {
            display: flex; justify-content: space-between; align-items: flex-end;
            margin-bottom: 3rem;
        }
        .gallery-link {
            font-size: 0.82rem; font-weight: 800; text-transform: uppercase;
            letter-spacing: 0.14em; color: var(--ink);
            display: inline-flex; align-items: center; gap: 0.5rem;
            border-bottom: 2px solid var(--ink); padding-bottom: 0.2rem;
        }
        .gallery-link:hover { color: var(--gold); border-color: var(--gold); }
        .gallery-grid {
            columns: 3; column-gap: 1.25rem;
        }
        .gallery-item {
            break-inside: avoid; margin-bottom: 1.25rem;
            border-radius: var(--radius-sm); overflow: hidden;
            position: relative; cursor: pointer;
        }
        .gallery-item img { width: 100%; display: block; transition: transform 0.5s var(--ease); }
        .gallery-item::after {
            content: ''; position: absolute; inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.4), transparent 60%);
            opacity: 0; transition: opacity 0.3s ease;
        }
        .gallery-item:hover img { transform: scale(1.06); }
        .gallery-item:hover::after { opacity: 1; }

        /* ============================================
           TESTIMONIALS
        ============================================ */
        .testimonials-section {
            padding: 7rem 0;
            background:
                radial-gradient(ellipse at 0% 0%, rgba(242,133,0,0.12), transparent 40%),
                radial-gradient(ellipse at 100% 100%, rgba(242,133,0,0.08), transparent 40%),
                #120D09;
        }
        .testimonials-section .section-head h2 { color: var(--white); }
        .testimonials-grid {
            display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.25rem;
            margin-top: 3.5rem;
        }
        .testimonial-card {
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.07);
            border-radius: var(--radius); padding: 2.25rem;
            transition: all 0.4s var(--ease);
        }
        .testimonial-card:hover { background: rgba(255,255,255,0.07); transform: translateY(-5px); }
        .t-stars { color: var(--gold); letter-spacing: 3px; font-size: 0.85rem; margin-bottom: 1.25rem; }
        .t-quote {
            font-size: 1.05rem; color: rgba(255,255,255,0.75);
            font-style: italic; line-height: 1.85; margin-bottom: 1.75rem;
        }
        .t-person { display: flex; align-items: center; gap: 0.875rem; }
        .t-avatar {
            width: 44px; height: 44px; border-radius: 50%;
            background: var(--gold-glow); border: 2px solid rgba(242,133,0,0.3);
            display: flex; align-items: center; justify-content: center;
            font-size: 0.85rem; font-weight: 800; color: var(--gold); flex-shrink: 0;
        }
        .t-name { font-weight: 800; font-size: 0.95rem; color: var(--white); }
        .t-role { font-size: 0.78rem; color: rgba(255,255,255,0.4); text-transform: uppercase; letter-spacing: 0.1em; }

        /* ============================================
           CTA
        ============================================ */
        .cta-section { background: var(--surface); padding: 7rem 0; }
        .cta-panel {
            background: var(--ink);
            border-radius: var(--radius-lg);
            padding: 5rem 4rem;
            text-align: center; position: relative; overflow: hidden;
        }
        .cta-panel::before {
            content: ''; position: absolute; inset: 0;
            background: radial-gradient(ellipse at center, rgba(242,133,0,0.12), transparent 60%);
        }
        .cta-panel .eyebrow { position: relative; z-index: 1; margin-bottom: 1.25rem; color: rgba(255,255,255,0.5); }
        .cta-panel .eyebrow::before { background: rgba(255,255,255,0.4); }
        .cta-panel h2 {
            position: relative; z-index: 1;
            font-size: clamp(2.2rem, 4vw, 3.5rem);
            color: var(--white); max-width: 700px; margin: 0 auto 1rem;
        }
        .cta-panel p {
            position: relative; z-index: 1;
            color: rgba(255,255,255,0.5); font-size: 1rem;
            max-width: 480px; margin: 0 auto 2.5rem; line-height: 1.8;
        }
        .cta-buttons { position: relative; z-index: 1; display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; }
        .cta-deco {
            position: absolute; font-family: 'Sora', sans-serif;
            font-size: 20rem; font-weight: 950; color: rgba(212,157,74,0.02);
            line-height: 1; pointer-events: none; user-select: none;
            letter-spacing: -0.08em;
        }
        .cta-deco-l { left: -2rem; bottom: -2rem; }
        .cta-deco-r { right: -2rem; top: -2rem; }

        /* ============================================
           FOOTER
        ============================================ */
        .site-footer { background: var(--ink); padding: 5rem 0 2rem; }
        .footer-top {
            display: grid; grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 4rem; padding-bottom: 4rem;
            border-bottom: 1px solid var(--line);
        }
        .footer-brand p { font-size: 0.9rem; color: rgba(255,255,255,0.45); line-height: 1.75; margin: 1.25rem 0 2rem; max-width: 280px; }
        .socials { display: flex; gap: 0.75rem; }
        .social-btn {
            width: 40px; height: 40px; border-radius: 10px;
            border: 1px solid var(--line);
            display: flex; align-items: center; justify-content: center;
            color: rgba(255,255,255,0.45); font-size: 1rem;
            transition: all 0.3s ease;
        }
        .social-btn:hover { background: var(--gold); border-color: var(--gold); color: var(--white); }
        .footer-col h4 {
            font-family: 'Sora', sans-serif; font-size: 0.8rem;
            font-weight: 800; text-transform: uppercase; letter-spacing: 0.15em;
            color: rgba(255,255,255,0.4); margin-bottom: 1.5rem;
        }
        .footer-links { list-style: none; display: flex; flex-direction: column; gap: 0.75rem; }
        .footer-links a { font-size: 0.9rem; color: rgba(255,255,255,0.6); transition: color 0.3s; }
        .footer-links a:hover { color: var(--gold); }
        .footer-contact-list { list-style: none; display: flex; flex-direction: column; gap: 1rem; }
        .footer-contact-list li { font-size: 0.88rem; color: rgba(255,255,255,0.5); }
        .footer-contact-list strong { display: block; color: rgba(255,255,255,0.8); font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 0.2rem; }
        .footer-bottom {
            display: flex; justify-content: space-between; align-items: center;
            padding-top: 2rem; gap: 1rem; flex-wrap: wrap;
        }
        .footer-bottom p { font-size: 0.82rem; color: rgba(255,255,255,0.3); margin: 0; }
        .footer-bottom-links { display: flex; gap: 2rem; }
        .footer-bottom-links a { font-size: 0.82rem; color: rgba(255,255,255,0.3); }
        .footer-bottom-links a:hover { color: var(--gold); }

        /* ============================================
           REVEAL ANIMATIONS
        ============================================ */
        .reveal {
            opacity: 0; transform: translateY(40px);
            transition: opacity 0.9s var(--ease), transform 0.9s var(--ease);
        }
        .reveal.in { opacity: 1; transform: translateY(0); }
        .reveal-left { opacity: 0; transform: translateX(-40px); transition: opacity 0.9s var(--ease), transform 0.9s var(--ease); }
        .reveal-left.in { opacity: 1; transform: translateX(0); }
        .reveal-right { opacity: 0; transform: translateX(40px); transition: opacity 0.9s var(--ease), transform 0.9s var(--ease); }
        .reveal-right.in { opacity: 1; transform: translateX(0); }
        .delay-1 { transition-delay: 0.1s; }
        .delay-2 { transition-delay: 0.2s; }
        .delay-3 { transition-delay: 0.3s; }
        .delay-4 { transition-delay: 0.4s; }

        /* ============================================
           RESPONSIVE
        ============================================ */
        @media (max-width: 1100px) {
            .hero-layout { grid-template-columns: 1fr; gap: 3rem; }
            .hero-visual { display: none; }
            .hero-title { text-align: center; }
            .hero-body { text-align: center; margin: 0 auto 2.5rem; }
            .hero-actions { justify-content: center; }
            .hero-stats-row { justify-content: center; }
            .hero-number { display: none; }
            .services-grid { grid-template-columns: repeat(2, 1fr); }
            .products-grid { grid-template-columns: repeat(2, 1fr); }
            .catering-layout { grid-template-columns: 1fr; }
            .catering-float-card { display: none; }
            .catering-text { padding-left: 0; }
            .courses-grid { grid-template-columns: 1fr 1fr; }
            .testimonials-grid { grid-template-columns: 1fr 1fr; }
            .footer-top { grid-template-columns: 1fr 1fr; }
        }
        @media (max-width: 768px) {
            .section-pad { padding: 5rem 0; }
            .nav-links, .nav-cta { display: none; }
            .hamburger { display: flex; }
            .services-grid, .products-grid, .courses-grid, .testimonials-grid { grid-template-columns: 1fr; }
            .catering-features { grid-template-columns: 1fr; }
            .gallery-grid { columns: 2; }
            .footer-top { grid-template-columns: 1fr; }
            .cta-panel { padding: 3rem 2rem; }
            .footer-bottom { flex-direction: column; text-align: center; }
            .hero-badge { display: none; }
        }
        @media (max-width: 480px) {
            .gallery-grid { columns: 1; }
        }
        /* ============================================
           GLOBAL PREMIUM CARD STYLE
        ============================================ */
        .premium-card {
            background: var(--white);
            border-radius: 2rem;
            padding: 1.5rem;
            text-align: center;
            transition: all 0.6s var(--ease);
            position: relative;
            cursor: pointer;
            color: var(--midnight);
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
            margin-top: 70px;
            min-height: 320px;
            border: 1px solid rgba(255,255,255,0.05);
        }
        .premium-card:hover {
            background: var(--brand-orange);
            color: var(--white);
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 40px 80px rgba(255, 123, 46, 0.3);
        }
        /* Active class logic: only highlight if specifically selected */
        .premium-card.active {
            background: var(--brand-orange);
            color: var(--white);
            transform: translateY(-15px);
        }

        /* Wave Divider */
        .wave-container {
            position: relative;
            background: transparent;
            line-height: 0;
            margin-top: -100px;
            z-index: 15;
            pointer-events: none;
        }
        @media (max-width: 991px) { .wave-container { margin-top: -50px; } }
        
        .wave-container svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 100px;
        }

        .wave-fill { fill: var(--white); }

        /* Orange Section */
        .orange-section {
            background: var(--brand-orange) !important;
            color: var(--white) !important;
        }
        .orange-section .section-head h2, 
        .orange-section .section-head p,
        .orange-section .eyebrow {
            color: var(--white) !important;
        }
        .orange-section .eyebrow::before {
            background: var(--white) !important;
        }
        .orange-section .testimonial-card {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.2);
        }
        .orange-section .t-stars { color: var(--white); }

        /* UI Polish */
        .premium-card {
            background: var(--white);
            border-radius: 2.5rem;
            padding: 1.75rem;
            text-align: center;
            transition: all 0.6s var(--ease);
            position: relative;
            cursor: pointer;
            color: var(--midnight);
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: var(--shadow-premium);
            margin-top: 80px;
            min-height: 340px;
            border: 1px solid rgba(0,0,0,0.03);
        }
        .premium-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: var(--shadow-hover);
        }
        .premium-card.active {
            background: var(--midnight);
            color: var(--white);
            transform: translateY(-15px);
        }
        .card-img-wrap {
            position: absolute;
            top: -60px;
            left: 50%;
            transform: translateX(-50%);
            width: 180px; height: 180px;
            z-index: 5;
            transition: all 0.6s var(--ease);
        }
        .premium-card:hover .card-img-wrap {
            transform: translateX(-50%) translateY(-10px) rotate(5deg) scale(1.1);
        }
        .premium-card img {
            width: 100%; height: 100%;
            border-radius: 50%;
            object-fit: cover;
            border: 8px solid var(--white);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        .premium-card:hover img { border-color: var(--brand-orange); }

        .premium-card .card-body { margin-top: 110px; width: 100%; }

        /* Floating Elements Animation */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .floating { animation: float 6s ease-in-out infinite; }

    </style>
</head>
<body>

<!-- Progress Bar -->
<div class="mobile-menu" id="mobileMenu">
    <button class="mobile-close" id="mobileClose" aria-label="Close menu">&#215;</button>
    <?php foreach ($navLinks as $link): ?>
        <a href="<?= htmlspecialchars($link['href']) ?>" class="mobile-nav-link"><?= htmlspecialchars($link['label']) ?></a>
    <?php endforeach; ?>
    <a href="#contact" class="btn-gc btn-gc-gold">Reserve a Date</a>
</div>

<!-- NAVBAR -->
<nav class="site-nav" id="siteNav">
    <div class="container">
        <div class="nav-inner">
            <a href="#top" class="nav-logo">
                <img src="assets/logo.png" alt="Good Choice Confectionery" class="nav-logo-img">
            </a>
            <div class="nav-links">
                <?php foreach ($navLinks as $link): ?>
                    <a href="<?= htmlspecialchars($link['href']) ?>"><?= htmlspecialchars($link['label']) ?></a>
                <?php endforeach; ?>
            </div>
            <div class="nav-cta">
                <a href="#contact" class="btn-gc btn-talk">Lets Talk</a>
            </div>
            <button class="hamburger" id="hamburger" aria-label="Open menu">
                <span style="background:var(--white);"></span><span style="background:var(--white);"></span><span style="background:var(--white);"></span>
            </button>
        </div>
    </div>
</nav>

<main id="top">

<!-- HERO -->
<section class="hero">
    <div class="hero-inner">
        <div class="container">
            <div class="hero-layout">
                <!-- 1. Text Side -->
                <div class="hero-text-side reveal-left">
                    <span class="eyebrow floating" style="animation-delay: 0s;">Premium Experience</span>
                    <h1 class="hero-title" id="hero-title" style="margin-top:1rem;">
                        <?= nl2br(htmlspecialchars($heroCategories[0]['headline'])) ?>
                    </h1>
                    <p class="hero-body" id="hero-copy"><?= htmlspecialchars($heroCategories[0]['subtext']) ?></p>
                    <div class="hero-actions">
                        <a href="#contact" class="btn-gc btn-gc-brand-orange">Reserve Now</a>
                        <a href="#products" class="btn-gc btn-gc-outline" style="color:var(--midnight); border-color:var(--midnight);">View Menu</a>
                    </div>
                </div>

                <!-- 2. Visual Side (Center) -->
                <div class="hero-visual reveal">
                    <div class="hero-img-circle floating" style="animation-delay: 1s;">
                        <img id="hero-main-img" src="<?= htmlspecialchars($heroCategories[0]['image']) ?>" alt="Featured hero image">
                    </div>
                    <!-- Decorative Floating Elements -->
                    <div class="floating" style="position:absolute; top:-20px; right:0; font-size:3rem; animation-delay: 0.5s;">🥐</div>
                    <div class="floating" style="position:absolute; bottom:20px; left:-40px; font-size:2.5rem; animation-delay: 1.5s;">🍰</div>
                </div>

                <!-- 3. Toggle Side (Right) -->
                <div class="hero-toggle-side reveal-right" style="color:var(--white);">
                    <p style="font-weight:800; font-size:0.7rem; text-transform:uppercase; letter-spacing:0.2em; opacity:0.8; margin-bottom:1rem;">Select Category</p>
                    <?php foreach ($heroCategories as $i => $cat): ?>
                    <div class="category-card <?= $i === 0 ? 'active' : '' ?>" data-index="<?= $i ?>">
                        <div class="cat-icon-wrap">
                            <i class="bi <?= htmlspecialchars($cat['icon']) ?>"></i>
                        </div>
                        <span><?= htmlspecialchars($cat['id'] === 'pastries' ? 'Pastries' : ucfirst($cat['id'])) ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Wave Bottom -->
    <div class="wave-container">
        <svg viewBox="0 0 1440 100" preserveAspectRatio="none">
            <path class="wave-fill" d="M0,0 C480,100 960,100 1440,0 L1440,100 L0,100 Z"></path>
        </svg>
    </div>
</section>

<!-- MARQUEE -->
<div class="marquee-strip" aria-hidden="true">
    <div class="marquee-track">
        <?php $marqueeItems = ['Custom Cakes', 'French Pastries', 'Event Catering', 'Baking Masterclass', 'Small Chops', 'Dessert Tables', 'Wedding Cakes', 'Corporate Events']; ?>
        <?php for ($r = 0; $r < 4; $r++): ?>
            <?php foreach ($marqueeItems as $item): ?>
                <span class="marquee-item"><?= htmlspecialchars($item) ?></span>
            <?php endforeach; ?>
        <?php endfor; ?>
    </div>
</div>

<!-- ============================================
     SERVICES
============================================ -->
<section id="services" class="services-section">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">What we do</span>
            <h2>Crafted with love.<br>Served with elegance.</h2>
            <p>From artisan cakes to curated event experiences — every detail is intentional, every bite unforgettable.</p>
        </div>
        <div class="services-grid">
            <?php foreach ($services as $i => $service): ?>
            <article class="premium-card reveal delay-<?= $i + 1 ?>">
                <div class="card-img-wrap">
                    <img src="<?= htmlspecialchars($service['image']) ?>" alt="<?= htmlspecialchars($service['title']) ?>" loading="lazy">
                </div>
                <div class="card-body">
                    <h3 class="card-title"><?= htmlspecialchars($service['title']) ?></h3>
                    <div class="card-meta">Premium • Artisanal</div>
                    <div class="card-price-row">
                        <span class="price"><?= $service['price'] ?></span>
                        <button class="plus-btn">+</button>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- PRODUCTS / DELICACIES -->
<section id="products" class="products-section">
    <div class="container">
        <div class="products-header reveal">
            <div class="section-head">
                <span class="eyebrow" style="color:var(--brand-orange);">Freshly prepared</span>
                <h2 style="color:#fff; margin:0;">Featured Delicacies</h2>
            </div>
            
            <div class="product-tabs">
                <div class="tab-btn active" data-filter="all">All</div>
                <div class="tab-btn" data-filter="Pastries">Pastries</div>
                <div class="tab-btn" data-filter="Cakes">Cakes</div>
                <div class="tab-btn" data-filter="Foods">Foods</div>
            </div>
        </div>

        <div class="products-grid" id="productsGrid">
            <?php foreach ($products as $i => $product): ?>
            <div class="premium-card reveal delay-<?= $i + 1 ?>" data-category="<?= htmlspecialchars($product['category']) ?>">
                <div class="card-img-wrap">
                    <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" loading="lazy">
                </div>
                <div class="card-body">
                    <h3 class="card-title"><?= htmlspecialchars($product['name']) ?></h3>
                    <div class="card-meta"><?= htmlspecialchars($product['category']) ?> • Fresh</div>
                    <div class="card-price-row">
                        <span class="price"><?= $product['price'] ?></span>
                        <button class="plus-btn">+</button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================
     CATERING
============================================ -->
<section id="catering" class="catering-section">
    <div class="container">
        <div class="catering-layout">
            <div class="catering-img-stack reveal-left">
                <img
                    src="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?auto=format&fit=crop&q=80&w=1200"
                    alt="Premium event catering" class="catering-main" loading="lazy">
                <div class="catering-float-card">
                    <div class="icon-wrap">📅</div>
                    <strong>Summer Bookings Open</strong>
                    <p>Reserve your date for a premium dessert bar experience tailored to your event theme.</p>
                </div>
            </div>
            <div class="catering-text reveal-right">
                <span class="eyebrow">Elevate your event</span>
                <h2>Memorable catering for extraordinary occasions.</h2>
                <p>Whether it's a corporate gala, intimate wedding, or milestone birthday — our team creates dessert styling and catering experiences that feel bespoke from the first sketch to the final setup.</p>
                <div class="catering-features">
                    <div class="feat-item">
                        <div class="feat-icon"><i class="bi bi-palette-fill"></i></div>
                        <div>
                            <h4>Bespoke Design</h4>
                            <p>Every display is styled around your colors, story, and guest experience.</p>
                        </div>
                    </div>
                    <div class="feat-item">
                        <div class="feat-icon"><i class="bi bi-geo-alt-fill"></i></div>
                        <div>
                            <h4>Nationwide Service</h4>
                            <p>We bring the luxury bakery experience directly to your location.</p>
                        </div>
                    </div>
                    <div class="feat-item">
                        <div class="feat-icon"><i class="bi bi-clock-fill"></i></div>
                        <div>
                            <h4>On-Time Delivery</h4>
                            <p>Precise logistics so every detail arrives fresh and styled perfectly.</p>
                        </div>
                    </div>
                    <div class="feat-item">
                        <div class="feat-icon"><i class="bi bi-star-fill"></i></div>
                        <div>
                            <h4>Premium Quality</h4>
                            <p>Only the finest ingredients — no compromises, ever.</p>
                        </div>
                    </div>
                </div>
                <a href="#contact" class="btn-gc btn-gc-dark">Request a Quote <i class="bi bi-arrow-right ms-1"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     TRAINING
============================================ -->
<section id="training" class="training-section">
    <div class="container">
        <div class="section-head centered reveal" style="margin:0 auto 0;">
            <span class="eyebrow" style="color:rgba(255,255,255,0.4);">Learning the art</span>
            <h2 style="color:#fff;">Baking Training Programs</h2>
            <p>Structured courses for aspiring bakers, side-hustlers, and professionals ready to refine their craft.</p>
        </div>
        <div class="courses-grid">
            <?php foreach ($courses as $i => $course): ?>
            <article class="premium-card reveal delay-<?= $i + 1 ?>">
                <div class="card-img-wrap">
                    <img src="<?= htmlspecialchars($course['image']) ?>" alt="<?= htmlspecialchars($course['title']) ?>" loading="lazy">
                </div>
                <div class="card-body">
                    <h3 class="card-title"><?= htmlspecialchars($course['title']) ?></h3>
                    <div class="card-meta"><?= htmlspecialchars($course['level']) ?> • <?= htmlspecialchars($course['duration']) ?></div>
                    <div class="card-price-row">
                        <span class="price"><?= htmlspecialchars($course['price']) ?></span>
                        <button class="plus-btn">+</button>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================
     GALLERY
============================================ -->
<section id="gallery" class="gallery-section">
    <div class="container">
        <div class="gallery-header reveal">
            <div class="section-head">
                <span class="eyebrow">Visual storytelling</span>
                <h2>Gallery of Art</h2>
            </div>
            <a href="#contact" class="gallery-link">
                Follow on Instagram <i class="bi bi-arrow-up-right"></i>
            </a>
        </div>
        <div class="gallery-grid reveal">
            <?php foreach ($gallery as $i => $img): ?>
            <div class="gallery-item">
                <img src="<?= htmlspecialchars($img) ?>" alt="Good Choice gallery image <?= $i + 1 ?>" loading="lazy">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================
     TESTIMONIALS
============================================ -->
<section class="testimonials-section orange-section">
    <div class="container">
        <div class="section-head centered reveal" style="margin:0 auto 0;">
            <span class="eyebrow" style="color:rgba(255,255,255,0.35);">Client voices</span>
            <h2>Trust in every bite.</h2>
        </div>
        <div class="testimonials-grid">
            <?php foreach ($testimonials as $i => $t): ?>
            <article class="testimonial-card reveal delay-<?= $i + 1 ?>">
                <div class="t-stars">★★★★★</div>
                <p class="t-quote">"<?= htmlspecialchars($t['text']) ?>"</p>
                <div class="t-person">
                    <div class="t-avatar"><?= htmlspecialchars($t['initials']) ?></div>
                    <div>
                        <div class="t-name"><?= htmlspecialchars($t['name']) ?></div>
                        <div class="t-role"><?= htmlspecialchars($t['role']) ?></div>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================
     CTA
============================================ -->
<section id="contact" class="cta-section">
    <div class="container">
        <div class="cta-panel reveal">
            <span class="cta-deco cta-deco-l" aria-hidden="true">G</span>
            <span class="cta-deco cta-deco-r" aria-hidden="true">C</span>
            <div class="eyebrow">Ready when you are</div>
            <h2>Ready to order or start your baking journey?</h2>
            <p>Contact us today for custom orders, catering inquiries, or a seat in our next masterclass.</p>
            <div class="cta-buttons">
                <a href="mailto:hello@goodchoiceconfectionery.com" class="btn-gc btn-gc-gold">
                    Place an Order <i class="bi bi-arrow-right"></i>
                </a>
                <a href="tel:+2348000000000" class="btn-gc btn-gc-outline">
                    <i class="bi bi-telephone-fill"></i> Call Us
                </a>
            </div>
        </div>
    </div>
</section>

</main>

<!-- ============================================
     FOOTER
============================================ -->
<footer class="site-footer">
    <div class="container">
        <div class="footer-top">
            <div class="footer-brand">
                <a href="#top" class="nav-logo" style="margin-bottom:0;">
                    <div class="nav-logo-mark">G</div>
                    <span class="nav-logo-text" style="color:#fff;">Good <span>Choice</span></span>
                </a>
                <p>The destination for artisanal cakes, pastries, event catering, and professional baking education. Premium confectionery, reimagined.</p>
                <div class="socials">
                    <a href="#contact" class="social-btn" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#contact" class="social-btn" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#contact" class="social-btn" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="#contact" class="social-btn" aria-label="TikTok"><i class="bi bi-tiktok"></i></a>
                </div>
            </div>
            <div class="footer-col">
                <h4>Explore</h4>
                <ul class="footer-links">
                    <li><a href="#products">Online Store</a></li>
                    <li><a href="#catering">Catering Menu</a></li>
                    <li><a href="#contact">Gift Cards</a></li>
                    <li><a href="#contact">Custom Orders</a></li>
                    <li><a href="#contact">Rewards</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Learn</h4>
                <ul class="footer-links">
                    <li><a href="#training">Cake Masterclass</a></li>
                    <li><a href="#training">Pastry Basics</a></li>
                    <li><a href="#training">Private Classes</a></li>
                    <li><a href="#training">Event Styling</a></li>
                    <li><a href="#training">Certification</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Contact</h4>
                <ul class="footer-contact-list">
                    <li>
                        <strong>HQ Address</strong>
                        12 Bakery Avenue, Artisan District, Nigeria
                    </li>
                    <li>
                        <strong>Email</strong>
                        hello@goodchoiceconfectionery.com
                    </li>
                    <li>
                        <strong>Phone</strong>
                        +234 800 000 0000
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?= htmlspecialchars((string)$currentYear) ?> Good Choice Confectionery. Designed for excellence.</p>
            <div class="footer-bottom-links">
                <a href="#top">Privacy Policy</a>
                <a href="#top">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script>
    /* ─── PRODUCT FILTERING ─── */
    const tabBtns      = document.querySelectorAll('.tab-btn');
    const productCards = document.querySelectorAll('.premium-card[data-category]');

    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.dataset.filter;
            
            // UI Update
            tabBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            // Filter logic
            productCards.forEach(card => {
                const cat = card.dataset.category;
                if (filter === 'all' || cat === filter) {
                    card.style.display = 'flex';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => card.style.display = 'none', 400);
                }
            });
        });
    });

    // Handle card activation on click
    document.querySelectorAll('.premium-card').forEach(card => {
        card.addEventListener('click', () => {
            const siblings = card.parentElement.querySelectorAll('.premium-card');
            siblings.forEach(c => c.classList.remove('active'));
            card.classList.add('active');
        });
    });
    /* ─── SCROLL PROGRESS ─── */
    const bar = document.getElementById('progress-bar');
    function updateProgress() {
        const pct = window.scrollY / (document.body.scrollHeight - window.innerHeight) * 100;
        if (bar) bar.style.width = pct + '%';
    }

    /* ─── NAVBAR SCROLL ─── */
    const nav = document.getElementById('siteNav');
    function handleScroll() {
        nav.classList.toggle('scrolled', window.scrollY > 60);
        updateProgress();
    }
    window.addEventListener('scroll', handleScroll, { passive: true });

    /* ─── MOBILE MENU ─── */
    const hamburger   = document.getElementById('hamburger');
    const mobileMenu  = document.getElementById('mobileMenu');
    const mobileClose = document.getElementById('mobileClose');
    hamburger?.addEventListener('click',   () => mobileMenu.classList.add('open'));
    mobileClose?.addEventListener('click', () => mobileMenu.classList.remove('open'));
    document.querySelectorAll('.mobile-nav-link').forEach(l =>
        l.addEventListener('click', () => mobileMenu.classList.remove('open'))
    );

    /* ─── HERO SWITCHER ─── */
    const categories  = <?= json_encode($heroCategories) ?>;
    const mainImg     = document.getElementById('hero-main-img');
    const heroTitle   = document.getElementById('hero-title');
    const heroCopy    = document.getElementById('hero-copy');
    const catCards    = document.querySelectorAll('.category-card');

    function switchHero(index) {
        const d = categories[index];
        if (!d) return;

        // Animate out
        [mainImg, heroTitle, heroCopy].forEach(el => {
            if (el) {
                el.style.opacity = '0';
                el.style.transform = 'translateY(10px)';
            }
        });

        // Update active state
        catCards.forEach(c => c.classList.remove('active'));
        catCards[index]?.classList.add('active');

        setTimeout(() => {
            if (mainImg)   mainImg.src          = d.image;
            if (heroTitle) heroTitle.innerHTML  = d.headline.replace(/\n/g, '<br>');
            if (heroCopy)  heroCopy.textContent = d.subtext;

            // Animate in
            [mainImg, heroTitle, heroCopy].forEach(el => {
                if (el) {
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                }
            });
        }, 400);
    }

    catCards.forEach(card => {
        card.addEventListener('click', () => {
            const idx = parseInt(card.dataset.index);
            switchHero(idx);
            // Reset auto-cycle timer if needed (optional)
        });
    });

    // Initial transition setup
    [mainImg, heroTitle, heroCopy].forEach(el => {
        if (el) el.style.transition = 'all 0.6s cubic-bezier(0.25, 1, 0.3, 1)';
    });

    /* Auto-cycle hero */
    let heroIdx = 0;
    let autoCycle = setInterval(() => {
        heroIdx = (heroIdx + 1) % categories.length;
        switchHero(heroIdx);
    }, 8000);

    // Stop auto-cycle on user interaction
    catCards.forEach(card => {
        card.addEventListener('mouseenter', () => clearInterval(autoCycle));
    });

    /* ─── REVEAL ON SCROLL ─── */
    const observer = new IntersectionObserver(entries => {
        entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); observer.unobserve(e.target); } });
    }, { threshold: 0.1, rootMargin: '0px 0px -60px 0px' });

    document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(el => observer.observe(el));
</script>
</body>
</html>
