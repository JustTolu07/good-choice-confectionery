<?php
$currentYear = date('Y');

$navLinks = [
    ['label' => 'Collection', 'href' => '#products'],
    ['label' => 'Experiences', 'href' => '#services'],
    ['label' => 'Catering', 'href' => '#catering'],
    ['label' => 'Academy', 'href' => '#training'],
    ['label' => 'Gallery', 'href' => '#gallery'],
];

$heroCategories = [
    [
        'id' => 'celebration-cakes',
        'label' => 'Celebration Cakes',
        'eyebrow' => 'Luxury cakes, crafted around your story',
        'headline' => 'Show-stopping cakes for weddings, birthdays, launches, and the moments everyone remembers.',
        'subtext' => 'From clean modern tiers to richly detailed statement cakes, we design centrepieces that taste as good as they photograph. Every order is tailored to your style, serving size, and timeline.',
        'image' => './cake.png',
        'thumb' => './cake.png',
        'accent' => 'Most loved',
        'note' => 'From ₦95,000',
        'metric' => '72hr design response',
    ],
    [
        'id' => 'dessert-tables',
        'label' => 'Dessert Tables',
        'eyebrow' => 'Styled dessert experiences for elevated events',
        'headline' => 'Turn your venue into a conversation piece with layered dessert tables and polished event styling.',
        'subtext' => 'We combine desserts, display styling, colour direction, and setup support into one refined experience for weddings, private parties, and corporate occasions.',
        'image' => 'https://images.unsplash.com/photo-1464349095431-e9a21285b5f3?auto=format&fit=crop&q=80&w=1200',
        'thumb' => 'https://images.unsplash.com/photo-1464349095431-e9a21285b5f3?auto=format&fit=crop&q=80&w=320',
        'accent' => 'Event favourite',
        'note' => 'Setups from ₦250,000',
        'metric' => 'Venue styling included',
    ],
    [
        'id' => 'baking-academy',
        'label' => 'Baking Academy',
        'eyebrow' => 'Hands-on learning for commercial confidence',
        'headline' => 'Learn premium baking, finishing, and pricing skills that help your craft become a business.',
        'subtext' => 'Our classes are practical, immersive, and built for aspiring bakers who want real production methods, stronger finishing techniques, and a more profitable offer.',
        'image' => 'https://images.unsplash.com/photo-1517433670267-08bbd4be890f?auto=format&fit=crop&q=80&w=1200',
        'thumb' => 'https://images.unsplash.com/photo-1517433670267-08bbd4be890f?auto=format&fit=crop&q=80&w=320',
        'accent' => 'Skill upgrade',
        'note' => 'Classes from ₦85,000',
        'metric' => 'Beginner to pro tracks',
    ],
];

$highlightCards = [
    [
        'icon' => 'bi-stars',
        'title' => 'Designed to feel bespoke',
        'text' => 'Each order is shaped around your event mood, serving plan, and visual references.',
    ],
    [
        'icon' => 'bi-truck',
        'title' => 'Reliable delivery windows',
        'text' => 'Timed dispatch, careful packaging, and setup support where your event needs it most.',
    ],
    [
        'icon' => 'bi-camera-fill',
        'title' => 'Camera-ready presentation',
        'text' => 'Clean finishes, elegant palettes, and details that hold up beautifully in photos.',
    ],
    [
        'icon' => 'bi-chat-heart-fill',
        'title' => 'Fast, clear communication',
        'text' => 'Expect quick updates, collaborative planning, and a smoother order experience from start to finish.',
    ],
];

$services = [
    [
        'title' => 'Signature Cakes',
        'description' => 'Tall celebration cakes, wedding tiers, and luxury birthday pieces finished with sharp detailing and standout flavour combinations.',
        'icon' => 'bi-cake2-fill',
        'image' => 'https://images.unsplash.com/photo-1571115177098-24ec42ed204d?auto=format&fit=crop&q=80&w=900',
    ],
    [
        'title' => 'Dessert Tables',
        'description' => 'Curated dessert displays with coordinated stands, labels, mini treats, and a visual direction that lifts your whole event.',
        'icon' => 'bi-grid-3x3-gap-fill',
        'image' => 'https://images.unsplash.com/photo-1550617931-e17a7b70dce2?auto=format&fit=crop&q=80&w=900',
    ],
    [
        'title' => 'Corporate Gifting',
        'description' => 'Premium boxed treats and branded sweet experiences for launches, client gifting, festive campaigns, and team moments.',
        'icon' => 'bi-gift-fill',
        'image' => 'https://images.unsplash.com/photo-1519864600265-abb23847ef2c?auto=format&fit=crop&q=80&w=900',
    ],
    [
        'title' => 'Baking Academy',
        'description' => 'Structured classes for beginners and professionals focused on baking, finishing, costing, packaging, and business growth.',
        'icon' => 'bi-mortarboard-fill',
        'image' => 'https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&q=80&w=900',
    ],
];

$productFilters = ['All', 'Cakes', 'Pastries', 'Dessert Cups', 'Catering'];

$products = [
    [
        'name' => 'Champagne Bloom Wedding Cake',
        'price' => 'From ₦420,000',
        'category' => 'Cakes',
        'details' => 'Four tiers | Serves 180 guests',
        'description' => 'Pearlescent textures, sugar florals, and a polished finish designed for modern luxury weddings.',
        'image' => 'https://images.unsplash.com/photo-1535254973040-607b474cb8c2?auto=format&fit=crop&q=80&w=900',
    ],
    [
        'name' => 'Red Velvet Royale',
        'price' => '₦95,000',
        'category' => 'Cakes',
        'details' => 'Celebration size | Serves 20 to 24',
        'description' => 'A rich velvet crumb with silky frosting and a bold finish that lands beautifully on any table.',
        'image' => 'https://images.unsplash.com/photo-1616031036561-0b362bc9478d?auto=format&fit=crop&q=80&w=900',
    ],
    [
        'name' => 'Artisanal Macaron Suite',
        'price' => '₦38,000 / box',
        'category' => 'Pastries',
        'details' => '12 premium pieces',
        'description' => 'An elegant assortment of crisp shells and smooth fillings for gifting, weddings, and dessert bars.',
        'image' => 'https://images.unsplash.com/photo-1559622214-f8a9850965bb?auto=format&fit=crop&q=80&w=900',
    ],
    [
        'name' => 'Belgian Chocolate Croissants',
        'price' => '₦8,500 / piece',
        'category' => 'Pastries',
        'details' => 'Baked fresh daily',
        'description' => 'Deep cocoa notes, buttery layers, and bakery-level flake for breakfast spreads and luxury brunch boxes.',
        'image' => 'https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&q=80&w=900',
    ],
    [
        'name' => 'Mini Dessert Cup Collection',
        'price' => 'From ₦65,000',
        'category' => 'Dessert Cups',
        'details' => '24 assorted cups',
        'description' => 'Layered parfaits, mousse cups, and cheesecake minis that add colour, texture, and easy service to events.',
        'image' => 'https://images.unsplash.com/photo-1488477181946-6428a0291777?auto=format&fit=crop&q=80&w=900',
    ],
    [
        'name' => 'Signature Dessert Table',
        'price' => 'From ₦250,000',
        'category' => 'Catering',
        'details' => 'Setup + styling included',
        'description' => 'A full dessert spread with custom styling, varied treats, and presentation details that transform your venue.',
        'image' => 'https://images.unsplash.com/photo-1464349095431-e9a21285b5f3?auto=format&fit=crop&q=80&w=900',
    ],
];

$processSteps = [
    [
        'step' => '01',
        'title' => 'Share the brief',
        'text' => 'Tell us the event date, guest count, budget range, colours, and any visual ideas you already love.',
    ],
    [
        'step' => '02',
        'title' => 'Shape the concept',
        'text' => 'We refine the design direction, flavour choices, servings, and setup details into a polished plan.',
    ],
    [
        'step' => '03',
        'title' => 'Bake, deliver, delight',
        'text' => 'Your order is produced fresh, quality checked, and delivered with the timing and finish your event deserves.',
    ],
];

$courses = [
    [
        'title' => 'Mastering Luxury Cakes',
        'duration' => '4 Weeks',
        'price' => '₦180,000',
        'level' => 'Advanced',
        'image' => 'https://images.unsplash.com/photo-1464349095431-e9a21285b5f3?auto=format&fit=crop&q=80&w=900',
    ],
    [
        'title' => 'French Pastry Foundations',
        'duration' => '2 Weeks',
        'price' => '₦120,000',
        'level' => 'Intermediate',
        'image' => 'https://images.unsplash.com/photo-1517433670267-08bbd4be890f?auto=format&fit=crop&q=80&w=900',
    ],
    [
        'title' => 'Dessert Table Styling Intensive',
        'duration' => '3 Days',
        'price' => '₦85,000',
        'level' => 'Professional',
        'image' => 'https://images.unsplash.com/photo-1530103043960-ef38714abb15?auto=format&fit=crop&q=80&w=900',
    ],
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
    [
        'name' => 'Amaka D.',
        'role' => 'Bride',
        'text' => 'Good Choice made our wedding cake feel like part of the decor story. It looked incredible and every slice was soft, rich, and memorable.',
    ],
    [
        'name' => 'Tobi A.',
        'role' => 'Brand Manager',
        'text' => 'We booked a dessert table for a product launch and the presentation lifted the entire event. Guests stayed around the setup all evening.',
    ],
    [
        'name' => 'Kemi O.',
        'role' => 'Academy Student',
        'text' => 'The training was practical and honest. I left with better finishing skills, better pricing confidence, and a clear next step for my business.',
    ],
];

$exploreLinks = ['Wedding Cakes', 'Birthday Collection', 'Dessert Tables', 'Corporate Gifting', 'Custom Orders'];
$learnLinks = ['Luxury Cake Masterclass', 'Pastry Foundations', 'Private Coaching', 'Dessert Styling', 'Business Mentoring'];
$socialLinks = [
    ['icon' => 'bi-instagram', 'label' => 'Instagram'],
    ['icon' => 'bi-facebook', 'label' => 'Facebook'],
    ['icon' => 'bi-tiktok', 'label' => 'TikTok'],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Good Choice Confectionery | Luxury Cakes, Dessert Tables & Baking Academy</title>
    <meta name="description"
        content="Good Choice Confectionery creates premium cakes, dessert tables, catering experiences, and hands-on baking training with polished presentation and reliable delivery.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Cormorant+Garamond:wght@500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top site-navbar">
        <div class="container">
            <a class="navbar-brand brand-signature" href="#top">
                <span class="brand-mark">GC</span>
                <span class="brand-lockup">
                    <span class="brand-text">Good Choice</span>
                    <small>Confectionery Atelier</small>
                </span>
            </a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#siteNav" aria-controls="siteNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="siteNav">
                <ul class="navbar-nav mx-auto mb-3 mb-lg-0">
                    <?php foreach ($navLinks as $link): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= htmlspecialchars($link['href']) ?>">
                                <?= htmlspecialchars($link['label']) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <a class="btn btn-brand" href="#contact">Book a tasting</a>
            </div>
        </div>
    </nav>

    <main id="top">
        <section class="hero-section">
            <div class="hero-backdrop"></div>
            <div class="container position-relative">
                <div class="hero-shell">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 order-2 order-lg-1">
                            <div class="hero-copy-column">
                                <span id="hero-tag"
                                    class="hero-kicker"><?= htmlspecialchars($heroCategories[0]['eyebrow']) ?></span>
                                <h1 id="hero-title" class="hero-title">
                                    <?= htmlspecialchars($heroCategories[0]['headline']) ?></h1>
                                <p id="hero-copy" class="hero-copy">
                                    <?= htmlspecialchars($heroCategories[0]['subtext']) ?></p>

                                <div class="hero-action-row">
                                    <a class="btn btn-brand btn-lg" href="#contact">Start your order</a>
                                    <a class="btn btn-soft btn-lg" href="#products">Explore collection</a>
                                </div>

                                <div class="hero-proof-row">
                                    <span><i class="bi bi-stars"></i> Tailored design direction</span>
                                    <span><i class="bi bi-check2-circle"></i> Freshly produced to order</span>
                                    <span><i class="bi bi-geo-alt-fill"></i> Delivery across key cities</span>
                                </div>

                                <div class="hero-stats-grid reveal">
                                    <article class="hero-stat-card">
                                        <strong data-target="1200" data-suffix="+">0</strong>
                                        <span>celebration cakes delivered</span>
                                    </article>
                                    <article class="hero-stat-card">
                                        <strong data-target="300" data-suffix="+">0</strong>
                                        <span>dessert table setups styled</span>
                                    </article>
                                    <article class="hero-stat-card">
                                        <strong data-target="48" data-suffix="hr">0</strong>
                                        <span>average quote response window</span>
                                    </article>
                                </div>

                                <div class="hero-quick-book reveal">
                                    <div class="hero-quick-book-head">
                                        <div>
                                            <span class="mini-label">Quick planning</span>
                                            <h2>Plan the mood before you place the order.</h2>
                                        </div>
                                        <span class="hero-mini-pill">Lagos based</span>
                                    </div>
                                    <div class="hero-quick-book-grid">
                                        <div class="quick-book-item">
                                            <label>Occasion</label>
                                            <span>Wedding, birthday, launch, shower</span>
                                        </div>
                                        <div class="quick-book-item">
                                            <label>Budget range</label>
                                            <span>From ₦95k to full event setups</span>
                                        </div>
                                        <div class="quick-book-item">
                                            <label>Style direction</label>
                                            <span>Minimal, floral, luxury, playful</span>
                                        </div>
                                        <a class="btn btn-light btn-lg quick-book-btn" href="#contact">Request a custom
                                            quote</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 order-1 order-lg-2">
                            <div class="hero-visual-stage reveal">
                                <div class="hero-image-frame">
                                    <span class="hero-orbit hero-orbit-one"></span>
                                    <span class="hero-orbit hero-orbit-two"></span>
                                    <img id="hero-main-img" src="<?= htmlspecialchars($heroCategories[0]['image']) ?>"
                                        alt="<?= htmlspecialchars($heroCategories[0]['label']) ?>"
                                        class="hero-main-image">
                                </div>

                                <div class="hero-floating-card hero-floating-pricing">
                                    <span class="mini-label">Current spotlight</span>
                                    <strong id="hero-note"><?= htmlspecialchars($heroCategories[0]['note']) ?></strong>
                                    <p id="hero-metric"><?= htmlspecialchars($heroCategories[0]['metric']) ?></p>
                                </div>

                                <div class="hero-floating-card hero-floating-review">
                                    <div class="review-stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <strong>“Beautiful finish and amazing flavour.”</strong>
                                    <p>Clients keep coming back for the polish, taste, and timely delivery.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hero-selector-wrap reveal">
                        <div class="hero-selector-grid">
                            <?php foreach ($heroCategories as $index => $item): ?>
                                <button type="button" class="hero-selector-card <?= $index === 0 ? 'active' : '' ?>"
                                    data-index="<?= $index ?>">
                                    <img src="<?= htmlspecialchars($item['thumb']) ?>"
                                        alt="<?= htmlspecialchars($item['label']) ?>">
                                    <div class="hero-selector-copy">
                                        <strong><?= htmlspecialchars($item['label']) ?></strong>
                                        <span><?= htmlspecialchars($item['accent']) ?></span>
                                    </div>
                                    <i class="bi bi-arrow-up-right"></i>
                                </button>
                            <?php endforeach; ?>
                        </div>
                        <div class="hero-progress-track" aria-hidden="true">
                            <span id="hero-progress-bar" class="hero-progress-bar"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="section-space highlight-section reveal">
            <div class="container">
                <div class="row g-4">
                    <?php foreach ($highlightCards as $card): ?>
                        <div class="col-md-6 col-xl-3">
                            <article class="highlight-card h-100">
                                <span class="highlight-icon"><i
                                        class="bi <?= htmlspecialchars($card['icon']) ?>"></i></span>
                                <h3><?= htmlspecialchars($card['title']) ?></h3>
                                <p><?= htmlspecialchars($card['text']) ?></p>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="products" class="section-space collection-section reveal">
            <div class="container">
                <div class="section-heading text-center">
                    <span class="section-tag">Curated menu</span>
                    <h2>Signature pieces that keep the room talking</h2>
                    <p class="mx-auto">Explore a tighter, more premium collection with pricing in naira and cleaner
                        paths for guests to browse what fits their occasion.</p>
                </div>

                <div class="filter-chip-row" role="tablist" aria-label="Filter products">
                    <?php foreach ($productFilters as $index => $filter): ?>
                        <button type="button" class="filter-chip <?= $index === 0 ? 'active' : '' ?>"
                            data-filter="<?= htmlspecialchars($filter) ?>">
                            <?= htmlspecialchars($filter) ?>
                        </button>
                    <?php endforeach; ?>
                </div>

                <div class="row g-4 mt-2" id="product-grid">
                    <?php foreach ($products as $product): ?>
                        <div class="col-md-6 col-xl-4 product-filter-item"
                            data-category="<?= htmlspecialchars($product['category']) ?>">
                            <article class="product-card h-100">
                                <div class="product-image-wrap">
                                    <img src="<?= htmlspecialchars($product['image']) ?>"
                                        alt="<?= htmlspecialchars($product['name']) ?>" class="product-image"
                                        loading="lazy">
                                    <span class="product-badge"><?= htmlspecialchars($product['category']) ?></span>
                                </div>
                                <div class="product-info">
                                    <span class="mini-label">Good Choice selection</span>
                                    <h3><?= htmlspecialchars($product['name']) ?></h3>
                                    <p class="product-description"><?= htmlspecialchars($product['description']) ?></p>
                                    <div class="product-meta">
                                        <strong class="product-price"><?= htmlspecialchars($product['price']) ?></strong>
                                        <span><?= htmlspecialchars($product['details']) ?></span>
                                    </div>
                                    <a class="btn btn-outline-dark w-100" href="#contact">Enquire now</a>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section-space experience-section reveal">
            <div class="container">
                <div class="section-heading section-heading-split">
                    <div>
                        <span class="section-tag">Crafted experiences</span>
                        <h2>Built to feel lively, premium, and deeply intentional.</h2>
                    </div>
                    <p>Inspired by bold food-led layouts, this refreshed experience balances strong imagery, warm
                        contrast, richer copy, and more movement without sacrificing clarity on mobile.</p>
                </div>

                <div class="row g-4">
                    <?php foreach ($services as $service): ?>
                        <div class="col-md-6">
                            <article class="experience-card h-100">
                                <div class="experience-card-copy">
                                    <span class="experience-icon"><i
                                            class="bi <?= htmlspecialchars($service['icon']) ?>"></i></span>
                                    <h3><?= htmlspecialchars($service['title']) ?></h3>
                                    <p><?= htmlspecialchars($service['description']) ?></p>
                                    <a href="#contact">Let’s plan this <i class="bi bi-arrow-right"></i></a>
                                </div>
                                <img src="<?= htmlspecialchars($service['image']) ?>"
                                    alt="<?= htmlspecialchars($service['title']) ?>" loading="lazy">
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="catering" class="section-space showcase-section reveal">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <div class="showcase-visual">
                            <img src="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?auto=format&fit=crop&q=80&w=1200"
                                alt="Dessert table and event styling" class="showcase-image" loading="lazy">
                            <div class="showcase-note">
                                <span class="mini-label">Popular request</span>
                                <strong>Wedding dessert styling + cake + setup</strong>
                                <p>One coordinated experience that looks polished from the welcome table to the final
                                    photo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <span class="section-tag">For events that deserve more</span>
                        <h2>From brief to setup, we make premium catering feel easy.</h2>
                        <p class="section-copy">Whether you need a statement cake, a full dessert corner, or a branded
                            gifting moment, our process keeps the experience organised, collaborative, and beautifully
                            executed.</p>

                        <div class="process-stack">
                            <?php foreach ($processSteps as $step): ?>
                                <article class="process-card">
                                    <span class="process-step"><?= htmlspecialchars($step['step']) ?></span>
                                    <div>
                                        <h3><?= htmlspecialchars($step['title']) ?></h3>
                                        <p><?= htmlspecialchars($step['text']) ?></p>
                                    </div>
                                </article>
                            <?php endforeach; ?>
                        </div>

                        <a class="btn btn-brand btn-lg mt-4" href="#contact">Request event pricing</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="training" class="section-space academy-section reveal">
            <div class="container">
                <div class="section-heading text-center">
                    <span class="section-tag">Academy</span>
                    <h2>Training that sharpens your skill and your business sense</h2>
                    <p class="mx-auto">Each class pairs practical production with finishing, costing, and real-world
                        commercial habits so students leave more capable and more confident.</p>
                </div>

                <div class="row g-4">
                    <?php foreach ($courses as $course): ?>
                        <div class="col-md-6 col-xl-4">
                            <article class="course-card h-100">
                                <div class="course-image-wrap">
                                    <img src="<?= htmlspecialchars($course['image']) ?>"
                                        alt="<?= htmlspecialchars($course['title']) ?>" class="course-image" loading="lazy">
                                    <span class="course-level"><?= htmlspecialchars($course['level']) ?></span>
                                </div>
                                <div class="course-body">
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <small>Expert led</small>
                                    </div>
                                    <h3><?= htmlspecialchars($course['title']) ?></h3>
                                    <div class="course-meta-row">
                                        <div>
                                            <span>Duration</span>
                                            <strong><?= htmlspecialchars($course['duration']) ?></strong>
                                        </div>
                                        <div>
                                            <span>Investment</span>
                                            <strong><?= htmlspecialchars($course['price']) ?></strong>
                                        </div>
                                    </div>
                                    <a class="btn btn-dark w-100" href="#contact">Reserve a seat</a>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="gallery" class="section-space gallery-section reveal">
            <div class="container">
                <div class="section-heading section-heading-split align-items-end">
                    <div>
                        <span class="section-tag">Gallery</span>
                        <h2>The kind of presentation guests photograph before they even taste it</h2>
                    </div>
                    <a href="#contact" class="gallery-link">Book your own showcase</a>
                </div>

                <div class="gallery-grid">
                    <?php foreach ($gallery as $index => $image): ?>
                        <div class="gallery-item">
                            <img src="<?= htmlspecialchars($image) ?>" alt="Good Choice gallery image <?= $index + 1 ?>"
                                loading="lazy">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section-space testimonial-section reveal">
            <div class="container">
                <div class="section-heading text-center text-white">
                    <span class="section-tag section-tag-light">Client love</span>
                    <h2 class="text-white">The trust is in the detail, the flavour, and the finish</h2>
                </div>

                <div class="row g-4">
                    <?php foreach ($testimonials as $testimonial): ?>
                        <div class="col-md-6 col-xl-4">
                            <article class="testimonial-card h-100">
                                <div class="review-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p><?= htmlspecialchars($testimonial['text']) ?></p>
                                <h3><?= htmlspecialchars($testimonial['name']) ?></h3>
                                <span><?= htmlspecialchars($testimonial['role']) ?></span>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="contact" class="section-space cta-section reveal">
            <div class="container">
                <div class="cta-panel">
                    <span class="section-tag section-tag-light">Ready when you are</span>
                    <h2>Let’s create something that feels as good as it looks.</h2>
                    <p>Reach out for custom cake orders, dessert tables, event catering, or the next available academy
                        session.</p>
                    <div class="cta-action-row">
                        <a class="btn btn-brand btn-lg" href="mailto:hello@goodchoice.ng">hello@goodchoice.ng</a>
                        <a class="btn btn-soft btn-lg" href="tel:+2349030001234">+234 903 000 1234</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <a class="navbar-brand brand-signature footer-brand" href="#top">
                        <span class="brand-mark">GC</span>
                        <span class="brand-lockup">
                            <span class="brand-text">Good Choice</span>
                            <small>Confectionery Atelier</small>
                        </span>
                    </a>
                    <p class="footer-copy">A premium confectionery studio for custom cakes, dessert tables, event
                        styling, and hands-on baking education.</p>
                    <div class="social-row">
                        <?php foreach ($socialLinks as $social): ?>
                            <a href="#contact" class="social-link" aria-label="<?= htmlspecialchars($social['label']) ?>">
                                <i class="bi <?= htmlspecialchars($social['icon']) ?>"></i>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <h3>Explore</h3>
                    <ul class="list-unstyled footer-links">
                        <?php foreach ($exploreLinks as $item): ?>
                            <li><a href="#products"><?= htmlspecialchars($item) ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <h3>Learn</h3>
                    <ul class="list-unstyled footer-links">
                        <?php foreach ($learnLinks as $item): ?>
                            <li><a href="#training"><?= htmlspecialchars($item) ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h3>Contact</h3>
                    <ul class="list-unstyled footer-contact">
                        <li>
                            <strong>Studio Address</strong>
                            <span>12 Admiralty Way, Lekki Phase 1, Lagos</span>
                        </li>
                        <li>
                            <strong>Email Inquiry</strong>
                            <span>hello@goodchoice.ng</span>
                        </li>
                        <li>
                            <strong>Call or WhatsApp</strong>
                            <span>+234 903 000 1234</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?= htmlspecialchars((string) $currentYear) ?> Good Choice Confectionery. Crafted for
                    memorable occasions.</p>
                <div class="footer-bottom-links">
                    <a href="#top">Privacy Policy</a>
                    <a href="#top">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const heroCategories = <?= json_encode($heroCategories) ?>;

        document.addEventListener('DOMContentLoaded', () => {
            const navbar = document.querySelector('.site-navbar');
            const selectors = document.querySelectorAll('.hero-selector-card');
            const heroTitle = document.getElementById('hero-title');
            const heroCopy = document.getElementById('hero-copy');
            const heroTag = document.getElementById('hero-tag');
            const heroImage = document.getElementById('hero-main-img');
            const heroNote = document.getElementById('hero-note');
            const heroMetric = document.getElementById('hero-metric');
            const progressBar = document.getElementById('hero-progress-bar');
            const filterButtons = document.querySelectorAll('.filter-chip');
            const productItems = document.querySelectorAll('.product-filter-item');
            const revealItems = document.querySelectorAll('.reveal');
            const counters = document.querySelectorAll('[data-target]');

            let activeHeroIndex = 0;
            let heroInterval = null;
            const heroRotationDelay = 5500;

            const setNavbarState = () => {
                navbar.classList.toggle('scrolled', window.scrollY > 40);
            };

            const resetHeroProgress = () => {
                if (!progressBar) {
                    return;
                }
                progressBar.classList.remove('is-animating');
                void progressBar.offsetWidth;
                progressBar.classList.add('is-animating');
            };

            const setHero = (index, restartTimer = false) => {
                const data = heroCategories[index];
                const animatedElements = [heroTitle, heroCopy, heroTag, heroImage, heroNote, heroMetric];

                animatedElements.forEach((element) => element.classList.add('is-changing'));

                window.setTimeout(() => {
                    heroTitle.textContent = data.headline;
                    heroCopy.textContent = data.subtext;
                    heroTag.textContent = data.eyebrow;
                    heroImage.src = data.image;
                    heroImage.alt = data.label;
                    heroNote.textContent = data.note;
                    heroMetric.textContent = data.metric;
                    animatedElements.forEach((element) => element.classList.remove('is-changing'));
                }, 180);

                selectors.forEach((selector, selectorIndex) => {
                    selector.classList.toggle('active', selectorIndex === index);
                });

                activeHeroIndex = index;
                resetHeroProgress();

                if (restartTimer) {
                    startHeroRotation();
                }
            };

            const startHeroRotation = () => {
                if (heroInterval) {
                    window.clearInterval(heroInterval);
                }

                heroInterval = window.setInterval(() => {
                    const nextIndex = (activeHeroIndex + 1) % heroCategories.length;
                    setHero(nextIndex);
                }, heroRotationDelay);
            };

            selectors.forEach((selector) => {
                selector.addEventListener('click', () => {
                    const index = Number(selector.dataset.index || 0);
                    setHero(index, true);
                });
            });

            filterButtons.forEach((button) => {
                button.addEventListener('click', () => {
                    const filter = button.dataset.filter || 'All';
                    filterButtons.forEach((item) => item.classList.remove('active'));
                    button.classList.add('active');

                    productItems.forEach((item) => {
                        const matches = filter === 'All' || item.dataset.category === filter;
                        item.classList.toggle('d-none', !matches);
                    });
                });
            });

            const animateCounter = (counter) => {
                if (counter.dataset.animated === 'true') {
                    return;
                }

                counter.dataset.animated = 'true';
                const target = Number(counter.dataset.target || 0);
                const suffix = counter.dataset.suffix || '';
                const duration = 1200;
                const startTime = performance.now();

                const tick = (time) => {
                    const progress = Math.min((time - startTime) / duration, 1);
                    const eased = 1 - Math.pow(1 - progress, 3);
                    const value = Math.round(target * eased);
                    counter.textContent = value.toLocaleString() + suffix;

                    if (progress < 1) {
                        window.requestAnimationFrame(tick);
                    }
                };

                window.requestAnimationFrame(tick);
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) {
                        return;
                    }

                    entry.target.classList.add('active');

                    if (entry.target.matches('.hero-stats-grid')) {
                        counters.forEach((counter) => animateCounter(counter));
                    }

                    observer.unobserve(entry.target);
                });
            }, {
                threshold: 0.15,
                rootMargin: '0px 0px -40px 0px'
            });

            revealItems.forEach((item) => observer.observe(item));
            const heroStatsGrid = document.querySelector('.hero-stats-grid');
            if (heroStatsGrid) {
                observer.observe(heroStatsGrid);
            }

            setNavbarState();
            window.addEventListener('scroll', setNavbarState);
            resetHeroProgress();
            startHeroRotation();
        });
    </script>
</body>

</html>