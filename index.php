<?php
// index.php - Good Choice Confectionery Homepage
// You can add dynamic PHP logic here, e.g. DB connections, session handling, etc.

$page_title = "Good Choice Confectionery | Artisanal Excellence";
$current_page = "home"; // Used for active nav link highlighting
$whatsapp_number = "2348000000000"; // Update with real number
$year = date('Y');
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        <?php echo htmlspecialchars($page_title); ?>
    </title>

    <!-- Tailwind CSS with custom configuration -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <!-- Google Fonts for Modern UI (Outfit & Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Material Icons for elegant interface clues -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />

    <!-- GSAP & ScrollTrigger Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#D45622",
                        secondary: "#9CA3AF",
                        accent: "#AF8C47",
                        background: "#111111",
                        "on-background": "#FFFFFF",
                        "surface-muted": "#1E1E1E",
                        "outline-color": "#2C2C2E"
                    },
                    fontFamily: {
                        sans: ["'Inter'", "sans-serif"],
                        serif: ["'Outfit'", "sans-serif"]
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-background text-on-background font-sans overflow-x-hidden selection:bg-primary selection:text-white">

    <!-- Top Navigation Bar -->
    <nav class="fixed top-0 w-full z-50 bg-transparent transition-all duration-500 border-b border-transparent"
        id="main-nav">
        <div class="flex justify-between items-center w-full px-8 md:px-16 py-5 max-w-[1440px] mx-auto">
            <a href="index.php" class="flex items-center gap-3">
                <img src="assets/logo.png" alt="Good Choice Logo"
                    class="h-12 w-auto object-contain transition-transform duration-500 hover:scale-105" />
            </a>

            <div class="hidden md:flex items-center gap-8">
                <?php
                $nav_links = [
                    ['href' => 'index.php', 'label' => 'Home'],
                    ['href' => 'menu.php', 'label' => 'Menu'],
                    ['href' => 'catering.php', 'label' => 'Catering'],
                    ['href' => 'academy.php', 'label' => 'Academy'],
                    ['href' => 'gallery.php', 'label' => 'Gallery'],
                ];
                foreach ($nav_links as $link):
                    ?>
                    <a class="nav-link font-sans text-xs font-semibold uppercase tracking-widest text-black hover:text-primary transition-colors relative py-1"
                        href="<?php echo $link['href']; ?>">
                        <?php echo $link['label']; ?>
                    </a>
                <?php endforeach; ?>
            </div>

            <div class="flex items-center gap-6">
                <a href="catering.php"
                    class="hidden md:inline-flex items-center justify-center bg-primary text-white px-6 py-3 font-sans text-[10px] font-bold uppercase tracking-widest hover:bg-white hover:text-black transition-all duration-300 btn-premium magnet-btn">
                    Get a Quote
                </a>
                <button class="md:hidden text-white" id="mobile-menu-toggle">
                    <span class="material-symbols-outlined text-3xl">menu</span>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Drawer -->
        <div id="mobile-menu"
            class="fixed inset-0 bg-background/98 z-40 flex flex-col justify-center items-center gap-8 translate-x-full transition-transform duration-500 md:hidden">
            <button class="absolute top-6 right-6 text-on-background" id="mobile-menu-close">
                <span class="material-symbols-outlined text-4xl">close</span>
            </button>
            <?php foreach ($nav_links as $link): ?>
                <a class="font-serif text-3xl text-on-background hover:text-primary transition-colors"
                    href="<?php echo $link['href']; ?>">
                    <?php echo $link['label']; ?>
                </a>
            <?php endforeach; ?>
            <a href="catering.php"
                class="bg-primary text-white px-8 py-4 font-sans text-xs font-bold uppercase tracking-widest hover:bg-white hover:text-black transition-all duration-300 btn-premium">
                Get a Quote
            </a>
        </div>
    </nav>

    <!-- Hero Section (3D Gallery) -->
    <header
        class="relative min-h-[85vh] flex flex-col items-center justify-center overflow-hidden bg-white text-black pt-24 pb-8">
        <div class="absolute inset-0 pointer-events-none overflow-hidden">
            <div
                class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] rounded-full bg-primary/5 blur-3xl">
            </div>
        </div>

        <div class="container mx-auto px-4 md:px-8 relative z-10 flex flex-col items-center w-full mt-8 md:mt-12">
            <div class="text-center max-w-4xl flex flex-col items-center gap-4 opacity-0 hero-text-intro">
                <span class="font-sans text-xs md:text-sm font-bold uppercase text-primary tracking-[0.2em] mb-1">We've
                    got you covered</span>

                <!-- 3D Curved Gallery -->
                <div
                    class="w-full relative h-[250px] md:h-[350px] lg:h-[400px] mt-8 mb-8 perspective-container flex justify-center items-center opacity-0 hero-gallery-intro">
                    <?php
                    $gallery_items = [
                        ['id' => 1, 'size' => 'w-[100px] md:w-[150px] lg:w-[180px]', 'src' => 'assets/graduation.png', 'alt' => 'Graduation Cake'],
                        ['id' => 2, 'size' => 'w-[120px] md:w-[180px] lg:w-[220px]', 'src' => 'assets/girl-cake.png', 'alt' => 'Girl Birthday Cake'],
                        ['id' => 3, 'size' => 'w-[140px] md:w-[220px] lg:w-[260px]', 'src' => 'assets/two step-cake.png', 'alt' => 'Two Step Cake', 'center' => true],
                        ['id' => 4, 'size' => 'w-[120px] md:w-[180px] lg:w-[220px]', 'src' => 'assets/samosa.png', 'alt' => 'Small Chops'],
                        ['id' => 5, 'size' => 'w-[100px] md:w-[150px] lg:w-[180px]', 'src' => 'assets/40-cake.png', 'alt' => '40th Birthday Cake'],
                        ['id' => 6, 'size' => 'w-[100px] md:w-[150px] lg:w-[180px]', 'src' => 'assets/pj-mask.png', 'alt' => 'PJ Mask Kids Cake'],
                    ];
                    foreach ($gallery_items as $item):
                        $border = !empty($item['center']) ? 'border-primary/20' : 'border-outline-color/50';
                        $z = !empty($item['center']) ? ' z-10' : '';
                        ?>
                        <div class="gallery-item <?php echo $item['size']; ?> aspect-[4/5] rounded-xl md:rounded-2xl overflow-hidden shadow-2xl border <?php echo $border . $z; ?> bg-surface-muted"
                            id="gallery-item-<?php echo $item['id']; ?>">
                            <img src="<?php echo $item['src']; ?>" alt="<?php echo $item['alt']; ?>"
                                class="w-full h-full object-cover">
                        </div>
                    <?php endforeach; ?>
                </div>

                <h1 id="hero-title"
                    class="font-serif text-4xl md:text-5xl lg:text-6xl leading-[1.1] text-black font-normal min-h-[2.2em] md:min-h-[2.2em] flex flex-col justify-center">
                    Beautiful Custom Cakes,<br />
                    <span class="font-sans font-black text-primary tracking-tight">Artisanal Pastries</span>
                </h1>

                <p id="hero-desc"
                    class="font-sans text-sm md:text-base text-gray-600 leading-relaxed max-w-[600px] min-h-[3em] flex items-center justify-center">
                    Abuja's trusted bakery to celebrate, indulge, and enjoy — beautifully and deliciously.
                </p>

                <a href="#custom-cake"
                    class="text-black rounded-full font-sans text-xs md:text-sm font-bold uppercase tracking-widest px-8 py-4 hover:bg-primary hover:text-white transition-all duration-300 mt-2 flex items-center gap-3 magnet-btn">
                    Order Now <span class="material-symbols-outlined text-lg">arrow_forward</span>
                </a>
            </div>

            <!-- 3 Columns Bottom -->
            <div
                class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12 lg:gap-24 w-full max-w-6xl border-t border-outline-color/50 pt-8 opacity-0 hero-features-intro">
                <div class="flex flex-col items-center md:items-start text-center md:text-left">
                    <h3 class="font-sans text-base md:text-lg font-bold text-black mb-2">Custom Cake Design</h3>
                    <p class="font-sans text-xs md:text-sm text-gray-600 leading-relaxed">
                        Work with our team to bring your dream cake to life. Any theme, any size, beautifully executed.
                    </p>
                </div>
                <div class="flex flex-col items-center md:items-start text-center md:text-left relative">
                    <div
                        class="hidden md:block absolute left-[-1.5rem] lg:left-[-3rem] top-0 bottom-0 w-px bg-outline-color/50">
                    </div>
                    <div
                        class="hidden md:block absolute right-[-1.5rem] lg:right-[-3rem] top-0 bottom-0 w-px bg-outline-color/50">
                    </div>
                    <h3 class="font-sans text-base md:text-lg font-bold text-black mb-2">Event Catering</h3>
                    <p class="font-sans text-xs md:text-sm text-gray-600 leading-relaxed">
                        Seamless catering services tailored to your occasion's size and style. Savories, pastries, and
                        more.
                    </p>
                </div>
                <div class="flex flex-col items-center md:items-start text-center md:text-left">
                    <h3 class="font-sans text-base md:text-lg font-bold text-black mb-2">The Baking Academy</h3>
                    <p class="font-sans text-xs md:text-sm text-gray-600 leading-relaxed">
                        Learn from the best with our practical baking classes. From beginner basics to expert pastry
                        techniques.
                    </p>
                </div>
            </div>
        </div>
    </header>

    <!-- Section: Our Heritage -->
    <section id="heritage"
        class="mx-3 md:mx-6 my-6 md:my-10 py-16 md:py-24 px-6 md:px-16 bg-[#AF8C47] text-white rounded-[32px] overflow-hidden scroll-reveal border border-white/10 shadow-xl relative z-10">
        <div class="container mx-auto max-w-[1440px]">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-24 items-center">
                <div class="lg:col-span-7 flex flex-col gap-6">
                    <span
                        class="font-sans text-xs font-bold uppercase text-white/85 tracking-[0.2em] scroll-reveal-label">Our
                        Story</span>
                    <h2
                        class="font-serif text-[40px] md:text-[52px] leading-tight text-white font-normal scroll-reveal-title">
                        Making Celebrations Sweeter Since 1984</h2>
                    <blockquote
                        class="font-serif text-xl md:text-2xl text-white italic leading-relaxed border-l-2 border-white/40 pl-6 my-4">
                        "At Good Choice Confectionery, we believe every celebration deserves something special."
                    </blockquote>
                    <div
                        class="font-sans text-sm md:text-base text-white/80 leading-relaxed flex flex-col gap-4 max-w-[580px] scroll-reveal-desc opacity-0">
                        <p>
                            That's why we create beautiful cakes, fresh pastries, and memorable catering experiences for
                            birthdays, weddings, graduations, corporate events, and family gatherings.
                        </p>
                        <p>
                            For over four decades, families and businesses across Abuja have trusted us to be part of
                            their most important moments.
                        </p>
                    </div>
                </div>

                <div class="lg:col-span-5 relative gsap-reveal-img mt-8 lg:mt-0">
                    <div
                        class="relative w-full aspect-[4/5] overflow-hidden border border-white/20 bg-black/10 rounded-2xl">
                        <img src="assets/heritage_story.png" alt="Our Artisan Chef"
                            class="w-full h-full object-cover transition-transform duration-1000 hover:scale-105" />
                    </div>
                    <div
                        class="absolute -bottom-6 -right-4 bg-white text-black p-6 shadow-2xl flex flex-col items-center justify-center -rotate-6 select-none w-28 h-28 rounded-full border border-black/5">
                        <span
                            class="font-sans text-[7px] uppercase font-bold tracking-[0.2em] text-[#AF8C47]">Atelier</span>
                        <span class="font-serif text-sm leading-none font-medium mt-1 text-center">Abuja, NG</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Our Menu (Bento Style) -->
    <section id="menu"
        class="mx-3 md:mx-6 my-6 md:my-10 py-16 md:py-24 px-6 md:px-16 bg-[#1E1D1B] border border-outline-color/30 rounded-[32px] overflow-hidden scroll-reveal">
        <div class="container mx-auto max-w-[1440px]">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6 mb-16">
                <div class="max-w-[600px]">
                    <span
                        class="font-sans text-xs font-bold uppercase text-primary tracking-[0.2em] mb-3 block scroll-reveal-label">Selection</span>
                    <h2
                        class="font-serif text-[40px] md:text-[52px] leading-tight text-white font-normal scroll-reveal-title">
                        Curated Masterpieces</h2>
                </div>
                <div class="pb-2">
                    <a class="group inline-flex items-center gap-2 font-sans text-xs font-bold uppercase tracking-wider text-primary border-b border-primary pb-1"
                        href="#booking">
                        Inquire Pricing
                        <span
                            class="material-symbols-outlined text-sm transition-transform group-hover:translate-x-1">arrow_forward</span>
                    </a>
                </div>
            </div>

            <!-- Bento Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 md:grid-rows-3 gap-6 h-auto md:h-[900px]">

                <!-- Item 1: Custom Milestone Cakes -->
                <div
                    class="md:col-span-1 md:row-span-2 relative group overflow-hidden bg-[#D45622] rounded-2xl border border-white/10 gsap-reveal-img flex flex-col p-8 justify-between hover:border-white/30 transition-colors text-white">
                    <div class="z-20">
                        <span
                            class="font-sans text-[10px] font-bold uppercase tracking-widest text-white/80 mb-2 block">Premium
                            Execution</span>
                        <h3 class="font-serif text-3xl font-medium mb-3">Custom Milestone Cakes</h3>
                        <p class="font-sans text-xs md:text-sm text-white/70 leading-relaxed">Handcrafted masterpieces
                            designed to steal the show at any birthday or celebration.</p>
                    </div>
                    <div
                        class="relative w-full aspect-square mt-8 rounded-xl overflow-hidden shadow-2xl z-10 border border-white/10 transform transition-all duration-500 group-hover:scale-[1.03]">
                        <img alt="Bespoke Milestone Cake"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            src="assets/girl-cake.png" />
                    </div>
                </div>

                <!-- Item 2: Artisanal Savory Trays -->
                <div
                    class="md:col-span-2 md:row-span-1 relative group overflow-hidden bg-[#AF8C47] rounded-2xl border border-white/10 gsap-reveal-img flex flex-col md:flex-row p-8 hover:border-white/30 transition-colors items-center gap-8 text-white">
                    <div class="z-20 md:w-1/2">
                        <span
                            class="font-sans text-[10px] font-bold uppercase tracking-widest text-white/80 mb-2 block">Event
                            Catering</span>
                        <h3 class="font-serif text-2xl md:text-3xl font-medium mb-3 leading-tight">Artisanal Savory
                            Trays</h3>
                        <p class="font-sans text-xs md:text-sm text-white/70 leading-relaxed">Gourmet meat pies,
                            samosas, and puff-puff. Perfect for your guests to indulge in.</p>
                        <a href="#booking"
                            class="inline-flex mt-4 items-center gap-2 font-sans text-xs font-bold uppercase tracking-wider text-white hover:text-white/80 transition-colors duration-300">Order
                            Tray &rarr;</a>
                    </div>
                    <div
                        class="relative w-full md:w-1/2 h-48 md:h-full rounded-xl overflow-hidden z-10 border border-white/10 transform transition-all duration-500 group-hover:scale-[1.03]">
                        <img alt="Artisanal Meat Pies"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            src="assets/meat-pie.png" />
                    </div>
                </div>

                <!-- Item 3: Graduation Cakes -->
                <div
                    class="md:col-span-1 md:row-span-1 relative group overflow-hidden bg-[#1E1E1E] rounded-2xl border border-outline-color gsap-reveal-img flex flex-col p-6 hover:border-primary/50 transition-colors justify-between text-white">
                    <div class="z-20">
                        <h3 class="font-serif text-xl font-medium mb-2 text-white">Graduation Cakes</h3>
                        <p class="font-sans text-xs text-secondary leading-relaxed">Celebrate academic excellence.</p>
                    </div>
                    <div
                        class="relative w-full aspect-video mt-4 rounded-xl overflow-hidden z-10 border border-outline-color/50 transform transition-all duration-500 group-hover:scale-[1.03]">
                        <img alt="Graduation Custom Cake"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            src="assets/graduation.png" />
                    </div>
                </div>

                <!-- Item 4: Theme Cakes -->
                <div
                    class="md:col-span-1 md:row-span-1 relative group overflow-hidden bg-[#1E1E1E] rounded-2xl border border-outline-color gsap-reveal-img flex flex-col p-6 hover:border-primary/50 transition-colors justify-between text-white">
                    <div class="z-20">
                        <h3 class="font-serif text-xl font-medium mb-2 text-white">Theme Cakes</h3>
                        <p class="font-sans text-xs text-secondary leading-relaxed">Fun and creative kids cakes.</p>
                    </div>
                    <div
                        class="relative w-full aspect-video mt-4 rounded-xl overflow-hidden z-10 border border-outline-color/50 transform transition-all duration-500 group-hover:scale-[1.03]">
                        <img alt="Kids Custom Cake"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            src="assets/pj-mask.png" />
                    </div>
                </div>

                <!-- Item 5: Luxury Wedding Cakes -->
                <div
                    class="md:col-span-2 md:row-span-1 relative group overflow-hidden bg-[#D45622] rounded-2xl border border-white/10 gsap-reveal-img flex flex-col md:flex-row-reverse p-8 hover:border-white/30 transition-colors items-center gap-8 text-white">
                    <div class="z-20 md:w-1/2">
                        <span
                            class="font-sans text-[10px] font-bold uppercase tracking-widest text-white/80 mb-2 block">Elegant
                            Affairs</span>
                        <h3 class="font-serif text-2xl md:text-3xl font-medium mb-3 leading-tight">Luxury Wedding Cakes
                        </h3>
                        <p class="font-sans text-xs md:text-sm text-white/70 leading-relaxed">Multi-tiered masterpieces
                            crafted with fine floral details and premium fondant.</p>
                    </div>
                    <div
                        class="relative w-full md:w-1/2 h-48 md:h-full rounded-xl overflow-hidden z-10 border border-white/10 transform transition-all duration-500 group-hover:scale-[1.03]">
                        <img alt="Wedding Two Step Cake"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            src="assets/two step-cake.png" />
                    </div>
                </div>

                <!-- Item 6: Small Chops -->
                <div
                    class="md:col-span-1 md:row-span-1 relative group overflow-hidden bg-[#AF8C47] rounded-2xl border border-white/10 gsap-reveal-img flex flex-col p-6 hover:border-white/30 transition-colors justify-between text-white">
                    <div class="z-20">
                        <span
                            class="font-sans text-[10px] font-bold uppercase tracking-widest text-white/85 mb-1 block">Quick
                            Bites</span>
                        <h3 class="font-serif text-xl font-medium mb-2">Small Chops</h3>
                        <p class="font-sans text-xs text-white/70 leading-relaxed">Crispy samosas &amp; rolls.</p>
                    </div>
                    <div
                        class="relative w-full aspect-video mt-4 rounded-xl overflow-hidden z-10 border border-white/10 transform transition-all duration-500 group-hover:scale-[1.03]">
                        <img alt="Small Chops Samosa"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            src="assets/samosa.png" />
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Section: Services -->
    <section id="services"
        class="mx-3 md:mx-6 my-6 md:my-10 py-16 md:py-24 px-6 md:px-12 bg-[#D45622] text-white rounded-[32px] overflow-hidden scroll-reveal border border-white/10 shadow-xl relative z-10">
        <div class="container mx-auto max-w-[1440px]">
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-end gap-6 mb-16">
                <div class="max-w-[600px]">
                    <span
                        class="font-sans text-xs font-bold uppercase text-white/80 tracking-[0.2em] mb-3 block scroll-reveal-label">How
                        We Can Help</span>
                    <h2
                        class="font-serif text-[40px] md:text-[52px] leading-tight text-white font-normal scroll-reveal-title">
                        What Can We Help You With Today?</h2>
                </div>
                <p class="font-sans text-sm md:text-base text-white/70 max-w-[400px] scroll-reveal-desc opacity-0">
                    Select an option below to start your order or check out our baking academy.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php
                $services = [
                    ['num' => '01', 'emoji' => '🎂', 'title' => 'I Need a Cake', 'desc' => 'Custom cakes for birthdays, weddings, graduations, anniversaries, baby showers, and more.', 'link' => '#custom-cake', 'cta' => 'Order a Cake'],
                    ['num' => '02', 'emoji' => '🥐', 'title' => 'I Want Pastries &amp; Chops', 'desc' => 'Fresh meat pies, sausage rolls, doughnuts, chin chin, puff-puff, cupcakes, and more.', 'link' => 'menu.php', 'cta' => 'See Our Menu'],
                    ['num' => '03', 'emoji' => '🍽️', 'title' => 'I Need Catering', 'desc' => 'Food, pastries, drinks, and professional service for weddings, parties, and corporate events.', 'link' => 'catering.php', 'cta' => 'Book Catering'],
                    ['num' => '04', 'emoji' => '👩🏽‍🍳', 'title' => 'I Want to Learn', 'desc' => 'Join our academy and learn cake decoration, baking, pastries, and business skills.', 'link' => 'academy.php', 'cta' => 'Join the Academy'],
                ];
                foreach ($services as $s):
                    ?>
                    <div
                        class="group flex flex-col justify-between p-8 border border-white/15 bg-white/5 hover:bg-white/10 hover:border-white/30 transition-all duration-500 hover:shadow-xl hover:shadow-white/5 gsap-reveal-service btn-premium rounded-2xl">
                        <div>
                            <div class="flex justify-between items-start mb-12">
                                <span
                                    class="font-serif text-3xl font-light text-white/30 group-hover:text-white transition-colors">
                                    <?php echo $s['num']; ?>
                                </span>
                                <span class="text-4xl">
                                    <?php echo $s['emoji']; ?>
                                </span>
                            </div>
                            <h3 class="font-serif text-2xl font-normal text-white mb-4">
                                <?php echo $s['title']; ?>
                            </h3>
                            <p class="font-sans text-sm text-white/75 leading-relaxed mb-8">
                                <?php echo $s['desc']; ?>
                            </p>
                        </div>
                        <a href="<?php echo $s['link']; ?>"
                            class="inline-flex items-center gap-2 font-sans text-xs font-bold uppercase tracking-wider text-white border-b border-transparent hover:border-white w-fit pb-1 transition-all">
                            <?php echo $s['cta']; ?> &rarr;
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Section: Custom Cake Order & Visual Designer -->
    <section id="custom-cake"
        class="mx-3 md:mx-6 my-6 md:my-10 py-16 md:py-24 px-6 md:px-12 bg-[#1E1E1E] text-white rounded-[32px] overflow-hidden scroll-reveal border border-outline-color/40 shadow-xl relative z-10">
        <div class="container mx-auto max-w-[1440px]">
            <span
                class="font-sans text-xs font-bold uppercase text-primary tracking-[0.2em] mb-3 block text-center scroll-reveal-label">Bespoke
                Creator</span>
            <h2
                class="font-serif text-[40px] md:text-[52px] leading-tight text-white font-normal text-center mb-12 scroll-reveal-title">
                Design Your Custom Cake</h2>

            <div class="grid lg:grid-cols-12 gap-12 lg:gap-24 items-center">
                <!-- Visual Cake Display -->
                <div
                    class="lg:col-span-5 flex flex-col items-center justify-center p-8 border border-outline-color/60 bg-black/25 rounded-2xl min-h-[450px] relative overflow-hidden btn-premium">
                    <div
                        class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(212,86,34,0.03),transparent_60%)] pointer-events-none">
                    </div>
                    <div class="relative w-[280px] h-[340px] flex flex-col justify-end items-center z-10">
                        <div id="cake-topper"
                            class="w-12 h-12 mb-2 flex items-center justify-center text-primary transition-all duration-300">
                            <span class="material-symbols-outlined text-4xl">favorite</span>
                        </div>
                        <div id="cake-tier-3"
                            class="w-[120px] h-[70px] bg-secondary border-t border-white/20 transition-all duration-500 origin-bottom shadow-lg z-30 mb-[-1px] rounded-t-lg hidden">
                        </div>
                        <div id="cake-tier-2"
                            class="w-[180px] h-[80px] bg-secondary border-t border-white/20 transition-all duration-500 origin-bottom shadow-lg z-20 mb-[-1px] rounded-t-lg hidden">
                        </div>
                        <div id="cake-tier-1"
                            class="w-[240px] h-[90px] bg-secondary border-t border-white/20 transition-all duration-500 origin-bottom shadow-lg z-10 rounded-t-lg">
                        </div>
                        <div class="w-[280px] h-[12px] bg-white/20 rounded-full mt-2 border-t border-white/10 z-0">
                        </div>
                    </div>
                </div>

                <!-- Customization Options -->
                <div class="lg:col-span-7 flex flex-col gap-8">
                    <!-- Shape -->
                    <div>
                        <label
                            class="font-sans text-[10px] uppercase text-primary font-bold tracking-wider block mb-3">1.
                            Select Cake Shape</label>
                        <div class="flex flex-wrap gap-4" id="shape-options">
                            <?php
                            $shapes = [
                                ['val' => 'round', 'icon' => '⚪', 'label' => 'Round', 'active' => true],
                                ['val' => 'square', 'icon' => '⬜', 'label' => 'Square', 'active' => false],
                                ['val' => 'geometric', 'icon' => '💠', 'label' => 'Geometric', 'active' => false],
                            ];
                            foreach ($shapes as $shape):
                                $cls = $shape['active']
                                    ? 'active border-2 border-primary bg-primary/5 text-primary'
                                    : 'border-2 border-outline-color text-gray-400';
                                ?>
                                <button data-shape="<?php echo $shape['val']; ?>"
                                    class="shape-btn <?php echo $cls; ?> px-6 py-3 font-sans text-xs font-bold uppercase tracking-wider rounded-lg flex items-center gap-2 hover:scale-[1.02] transition-all">
                                    <span>
                                        <?php echo $shape['icon']; ?>
                                    </span>
                                    <?php echo $shape['label']; ?>
                                </button>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Tiers -->
                    <div>
                        <label
                            class="font-sans text-[10px] uppercase text-primary font-bold tracking-wider block mb-3">2.
                            Select Height (Tiers)</label>
                        <div class="flex flex-wrap gap-4" id="tier-options">
                            <?php
                            $tiers = [
                                ['val' => 1, 'label' => '1 Layer / Tier', 'active' => true],
                                ['val' => 2, 'label' => '2 Layers / Tiers', 'active' => false],
                                ['val' => 3, 'label' => '3 Layers / Tiers', 'active' => false],
                            ];
                            foreach ($tiers as $tier):
                                $cls = $tier['active']
                                    ? 'active border-2 border-primary bg-primary/5 text-primary'
                                    : 'border-2 border-outline-color text-gray-400';
                                ?>
                                <button data-tiers="<?php echo $tier['val']; ?>"
                                    class="tier-btn <?php echo $cls; ?> px-6 py-3 font-sans text-xs font-bold uppercase tracking-wider rounded-lg hover:scale-[1.02] transition-all">
                                    <?php echo $tier['label']; ?>
                                </button>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Flavor -->
                    <div>
                        <label
                            class="font-sans text-[10px] uppercase text-primary font-bold tracking-wider block mb-3">3.
                            Choose Flavor Profile</label>
                        <div class="flex flex-wrap gap-4" id="flavor-options">
                            <?php
                            $flavors = [
                                ['val' => 'Red Velvet', 'color' => '#D45622', 'icon' => '🍓', 'active' => true],
                                ['val' => 'Belgian Chocolate', 'color' => '#795C57', 'icon' => '🍫', 'active' => false],
                                ['val' => 'Vanilla Raspberry', 'color' => '#AF8C47', 'icon' => '🍯', 'active' => false],
                            ];
                            foreach ($flavors as $f):
                                $cls = $f['active']
                                    ? 'active border-2 border-primary bg-primary/5 text-primary'
                                    : 'border-2 border-outline-color text-gray-400';
                                ?>
                                <button data-flavor="<?php echo $f['val']; ?>" data-color="<?php echo $f['color']; ?>"
                                    class="flavor-btn <?php echo $cls; ?> px-6 py-3 font-sans text-xs font-bold uppercase tracking-wider rounded-lg hover:scale-[1.02] transition-all">
                                    <?php echo $f['icon'] . ' ' . $f['val']; ?>
                                </button>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Summary & Pricing -->
                    <div
                        class="border-t border-outline-color/60 pt-6 flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
                        <div>
                            <span
                                class="font-sans text-[10px] uppercase text-gray-400 font-bold tracking-wider">Estimated
                                Cost</span>
                            <div class="flex items-baseline gap-2 mt-1">
                                <span id="custom-cake-price"
                                    class="font-serif text-3xl md:text-4xl text-primary font-bold">&#8358;15,000</span>
                                <span class="font-sans text-xs text-gray-500">(&#8358;15,000 per tier)</span>
                            </div>
                            <span id="custom-cake-summary" class="font-sans text-xs text-gray-400 mt-1 block">1 Tier
                                &middot; Round &middot; Red Velvet</span>
                        </div>
                        <a id="custom-cake-wa-btn" href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank"
                            class="w-full md:w-auto bg-[#25D366] text-white px-8 py-4 font-sans text-xs font-bold uppercase tracking-widest hover:bg-[#20ba56] hover:scale-[1.02] transition-all duration-300 btn-premium flex items-center justify-center gap-2 magnet-btn rounded-xl">
                            <span>🟢</span> Order via WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Our Process -->
    <section id="process"
        class="mx-3 md:mx-6 my-6 md:my-10 py-16 md:py-24 px-6 md:px-16 bg-[#AF8C47] text-white rounded-[32px] overflow-hidden scroll-reveal border border-white/10 shadow-xl relative z-10">
        <div class="container mx-auto max-w-[1440px]">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-24">
                <div class="lg:col-span-5 lg:sticky lg:top-32 h-fit flex flex-col gap-6">
                    <span
                        class="font-sans text-xs font-bold uppercase text-white/85 tracking-[0.2em] scroll-reveal-label">The
                        Craftsmanship</span>
                    <h2
                        class="font-serif text-[40px] md:text-[52px] leading-tight text-white font-normal scroll-reveal-title">
                        The Alchemy of Flavor</h2>
                    <p
                        class="font-sans text-sm md:text-base text-white/80 leading-relaxed max-w-[400px] scroll-reveal-desc opacity-0">
                        How we transform raw ingredients into moments of pure sensory joy. Every step is guided by
                        precision, patience, and passion.
                    </p>
                    <div class="w-16 h-px bg-white mt-4"></div>
                </div>

                <div class="lg:col-span-7 flex flex-col gap-12 lg:gap-20">
                    <?php
                    $steps = [
                        ['num' => '01', 'title' => 'Sourcing the Finest', 'desc' => 'We partner with local and global organic farms to source top-tier cocoa, dairy, and grains. No preservatives, artificial flavors, or compromises.'],
                        ['num' => '02', 'title' => 'Time-Honored Techniques', 'desc' => 'Our recipe vault integrates generations-old French and Belgian patisserie methods. Doughs are laminated, chocolates tempered, and custards cooked with slow precision.'],
                        ['num' => '03', 'title' => 'Fine Aesthetic Finish', 'desc' => 'Before a pastry leaves our kitchen, it undergoes a meticulous finish: hand-piped garnishes, edible 24k gold dust, or crystalized fruit petals.'],
                    ];
                    foreach ($steps as $i => $step):
                        $border = $i < count($steps) - 1 ? 'border-b border-white/20 pb-12' : 'pb-4';
                        ?>
                        <div class="group <?php echo $border; ?> flex gap-6 md:gap-12 scroll-process-step">
                            <span
                                class="font-serif text-4xl md:text-6xl font-light text-white/30 group-hover:text-white transition-colors duration-500">
                                <?php echo $step['num']; ?>
                            </span>
                            <div class="flex flex-col gap-3">
                                <h3 class="font-serif text-2xl font-normal text-white">
                                    <?php echo $step['title']; ?>
                                </h3>
                                <p class="font-sans text-sm md:text-base text-white/80 leading-relaxed">
                                    <?php echo $step['desc']; ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: The Academy -->
    <section id="academy"
        class="mx-3 md:mx-6 my-6 md:my-10 py-16 md:py-24 px-6 md:px-16 bg-[#D45622] text-white rounded-[32px] overflow-hidden relative scroll-reveal border border-white/10 shadow-xl z-10">
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(212,86,34,0.1),transparent_40%)] pointer-events-none">
        </div>
        <div class="absolute top-0 right-0 w-1/3 h-full bg-white/5 -skew-x-12 translate-x-1/2 pointer-events-none">
        </div>

        <div class="container mx-auto max-w-[1440px] grid lg:grid-cols-2 gap-12 lg:gap-24 items-center relative z-10">
            <div class="order-2 lg:order-1">
                <div
                    class="relative gsap-reveal-img overflow-hidden border border-white/10 group btn-premium rounded-2xl">
                    <img alt="The Academy Mastery"
                        class="w-full h-[550px] object-cover grayscale brightness-110 contrast-125 group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCBbnDplMV03KvUeTEtRX-Xjf0-BFi8K5xoSerfrgYPpVv4ufXoGQTjH6m5HkKMf3puVwdkpSJS7plpBQk3v8n0n2o1VusV98M53VyV3Iv15uXTRNee4OMzgfOFjMc6pDKv00uymsJ1I1IqYuQKVI7xf90glA9TU3dU_IKtwSr_eDFbz1S2Z3MrhNAsUyip6k6f63SJxnZGksbrr8RYMxv94b-9p3tAMJIhfEqJOlxmK7zyv7eeUdAdN0ER44M_fkLoyoJzs6qj_Rw" />
                    <div
                        class="absolute -top-6 -right-6 bg-[#1E1E1E] text-white p-10 hidden md:flex flex-col items-center justify-center rounded-full w-28 h-28 border border-white/10 select-none shadow-2xl">
                        <span class="font-serif text-3xl font-bold leading-none">100%</span>
                        <span
                            class="font-sans text-[8px] uppercase tracking-widest mt-1 font-bold text-primary">Practical</span>
                    </div>
                </div>
            </div>
            <div class="order-1 lg:order-2 flex flex-col gap-8">
                <span
                    class="font-sans text-xs font-bold uppercase text-white/80 tracking-[0.3em] scroll-reveal-label">Baking
                    Academy</span>
                <h2
                    class="font-serif text-[40px] md:text-[52px] leading-tight text-white font-normal scroll-reveal-title">
                    Learn Baking the Practical Way</h2>
                <p class="font-sans text-sm md:text-base text-white/90 leading-relaxed scroll-reveal-desc opacity-0">
                    Want to start a baking business or improve your skills? Our training programs teach you everything
                    from baking and cake decoration to pricing and customer management.
                </p>

                <ul class="flex flex-col gap-4 py-2 scroll-reveal-list opacity-0 font-sans text-sm">
                    <?php
                    $academy_features = ['Beginner Friendly', 'Practical Classes', 'Experienced Instructors', 'Certificate Available'];
                    foreach ($academy_features as $feature):
                        ?>
                        <li class="flex items-center gap-4">
                            <span class="w-5 h-5 rounded-full border border-white/40 flex items-center justify-center">
                                <span class="material-symbols-outlined text-[10px] text-white font-bold">check</span>
                            </span>
                            <span class="text-white">
                                <?php echo $feature; ?>
                            </span>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <a href="academy.php"
                    class="bg-white text-primary font-sans text-xs font-bold uppercase tracking-widest px-8 py-4 w-fit hover:bg-black hover:text-white transition-all duration-300 btn-premium magnet-btn scroll-reveal-btn opacity-0 rounded-xl">
                    Register for the Next Class
                </a>
            </div>
        </div>
    </section>

    <!-- Section: Private Events Booking -->
    <section id="booking"
        class="mx-3 md:mx-6 my-6 md:my-10 py-16 md:py-24 px-6 md:px-16 bg-[#1E1E1E] text-white rounded-[32px] overflow-hidden scroll-reveal border border-outline-color/40 shadow-xl relative z-10">
        <div class="container mx-auto max-w-[1440px]">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-24 items-center">

                <div class="lg:col-span-6 flex flex-col gap-8">
                    <span
                        class="font-sans text-xs font-bold uppercase text-white/80 tracking-[0.2em] scroll-reveal-label">Event
                        Catering</span>
                    <h2
                        class="font-serif text-[40px] md:text-[52px] leading-tight text-white font-normal scroll-reveal-title">
                        Planning an Event?</h2>
                    <p
                        class="font-sans text-sm md:text-base text-white/85 leading-relaxed scroll-reveal-desc opacity-0">
                        Whether it's 20 guests or 500 guests, we can handle the food while you focus on enjoying the
                        occasion.
                    </p>

                    <div class="grid grid-cols-2 gap-4 my-2 font-sans text-xs uppercase tracking-wider text-white/70">
                        <?php
                        $event_types = ['Weddings', 'Birthdays', 'Corporate Events', 'Conferences', 'Church Events', 'School Events', 'Family Gatherings'];
                        foreach ($event_types as $i => $et):
                            $span = ($i === count($event_types) - 1) ? ' md:col-span-2' : '';
                            ?>
                            <div class="flex items-center gap-2<?php echo $span; ?>">
                                <span class="text-primary font-bold text-sm">&bull;</span>
                                <?php echo $et; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Inquiry Form -->
                    <form action="catering.php" method="GET"
                        class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4 scroll-reveal-form opacity-0">
                        <div class="flex flex-col gap-2">
                            <label class="font-sans text-[10px] uppercase text-primary font-bold tracking-wider">Event
                                Type</label>
                            <select name="event_type"
                                class="bg-transparent border-0 border-b border-outline-color focus:border-primary focus:ring-0 py-2 px-0 font-sans text-sm text-white">
                                <?php
                                $event_options = ['Wedding', 'Birthday', 'Corporate Event', 'Conference', 'Church/School Event', 'Family Gathering'];
                                foreach ($event_options as $opt):
                                    ?>
                                    <option class="bg-[#1E1E1E] text-white"
                                        value="<?php echo strtolower(str_replace(' ', '_', $opt)); ?>">
                                        <?php echo $opt; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="font-sans text-[10px] uppercase text-primary font-bold tracking-wider">Guest
                                Count</label>
                            <input name="guest_count"
                                class="bg-transparent border-0 border-b border-outline-color focus:border-primary focus:ring-0 py-2 px-0 font-sans text-sm text-white placeholder:text-white/30"
                                placeholder="e.g. 150 guests" type="number" min="1" />
                        </div>
                        <div class="flex flex-col gap-2 md:col-span-2">
                            <label class="font-sans text-[10px] uppercase text-primary font-bold tracking-wider">Desired
                                Date</label>
                            <input name="event_date"
                                class="bg-transparent border-0 border-b border-outline-color focus:border-primary focus:ring-0 py-2 px-0 font-sans text-sm text-white"
                                type="date" min="<?php echo date('Y-m-d'); ?>" />
                        </div>
                        <div class="flex flex-col gap-2 md:col-span-2">
                            <label class="font-sans text-[10px] uppercase text-primary font-bold tracking-wider">Design
                                Details / Special Requests</label>
                            <textarea name="details" id="bookingDetails"
                                class="bg-transparent border-0 border-b border-outline-color focus:border-primary focus:ring-0 py-2 px-0 font-sans text-sm text-white placeholder:text-white/30 min-h-[80px]"
                                placeholder="Tell us about your catering menu preferences, venue, or timeline..."></textarea>
                        </div>
                        <button
                            class="md:col-span-2 bg-primary text-white font-sans text-xs font-bold uppercase tracking-widest py-4 mt-6 hover:bg-black hover:text-white hover:border-white/20 border border-transparent transition-all duration-300 btn-premium magnet-btn rounded-xl"
                            type="submit">
                            🟠 Request Catering Quote
                        </button>
                    </form>
                </div>

                <div class="lg:col-span-6 relative mt-8 lg:mt-0 gsap-reveal-img">
                    <div
                        class="aspect-[4/5] overflow-hidden border border-white/10 bg-black/10 rounded-2xl btn-premium">
                        <img alt="Luxury Event Setting" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDfJJEiHudmBW_2u9G_RoFHhATLZnjOZAwFroarFJgUq0AKTquuUXVjlYdNmBs68yirRThpKlS88ezo0oT0vfgk85221qA222td1ebAAN3NUUaDR03RRKtbYdGAwseJDBq__5diWTDXaF6sTg_4-By-WqVqT8vIQA7VlGT442N-c8hL8v1kdRzwbJTDcNOTdkuQ6aCIdA8AfHFNQbtBqjAQT7zjg_kwOr2n31UIlQlHSwvpF8b8bGlSpbPcAyfHOhr7YUs1I4w57is" />
                    </div>
                    <div
                        class="absolute -bottom-6 -left-6 bg-[#1E1E1E]/90 backdrop-blur-md p-8 text-white max-w-[280px] hidden md:block border border-white/10 shadow-2xl rounded-2xl">
                        <p class="font-serif text-lg font-light italic mb-2">"An unparalleled catering experience in
                            Abuja."</p>
                        <span class="font-sans text-[9px] uppercase font-bold tracking-widest text-primary">— Elite
                            Events Magazine</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section id="final-cta"
        class="mx-3 md:mx-6 my-6 md:my-10 py-16 md:py-24 px-6 md:px-16 bg-[#1E1E1E] text-white rounded-[32px] overflow-hidden relative scroll-reveal border border-outline-color/40 shadow-xl z-10">
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(212,86,34,0.08),transparent_70%)] pointer-events-none">
        </div>

        <div class="container mx-auto max-w-[1200px] relative z-10 text-center flex flex-col items-center">
            <span
                class="font-sans text-xs font-bold uppercase text-primary tracking-[0.2em] mb-4 block scroll-reveal-label">Ready
                to Begin?</span>
            <h2
                class="font-serif text-[40px] md:text-[52px] leading-tight text-white font-normal mb-12 scroll-reveal-title">
                What Are You Looking For Today?</h2>

            <div class="grid grid-cols-1 md:grid-cols-6 gap-6 w-full scroll-reveal-desc opacity-0">
                <?php
                $cta_cards = [
                    ['span' => 'md:col-span-4', 'href' => '#custom-cake', 'img' => 'assets/two step-cake.png', 'alt' => 'Order a Cake', 'tag' => 'Bespoke Creators', 'title' => 'Order a Cake', 'desc' => 'Design your dream milestone cake online'],
                    ['span' => 'md:col-span-2', 'href' => 'menu.php', 'img' => 'assets/meat-pie.png', 'alt' => 'Buy Pastries', 'tag' => 'Freshly Baked', 'title' => 'Buy Pastries', 'desc' => 'Explore our daily menu'],
                    ['span' => 'md:col-span-2', 'href' => 'catering.php', 'img' => 'assets/samosa.png', 'alt' => 'Book Catering', 'tag' => 'Events &amp; Soirees', 'title' => 'Book Catering', 'desc' => 'Elite catering for your events'],
                    ['span' => 'md:col-span-4', 'href' => 'academy.php', 'img' => 'assets/girl-cake.png', 'alt' => 'Join the Academy', 'tag' => 'Baking Academy', 'title' => 'Join the Academy', 'desc' => 'Learn professional patisserie'],
                ];
                foreach ($cta_cards as $card):
                    ?>
                    <a href="<?php echo $card['href']; ?>"
                        class="<?php echo $card['span']; ?> h-[350px] relative overflow-hidden rounded-2xl group flex flex-col justify-end p-8 border border-white/10 shadow-lg transition-all duration-500">
                        <div class="absolute inset-0 z-0">
                            <img src="<?php echo $card['img']; ?>" alt="<?php echo $card['alt']; ?>"
                                class="w-full h-full object-cover transition-all duration-700 ease-out scale-100 group-hover:scale-110 filter brightness-[0.4] group-hover:brightness-[0.6] group-hover:contrast-110" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/45 to-transparent"></div>
                        </div>
                        <div class="relative z-10 flex flex-col items-start text-left w-full">
                            <span class="font-sans text-[10px] text-primary font-bold uppercase tracking-widest mb-1">
                                <?php echo $card['tag']; ?>
                            </span>
                            <h3 class="font-serif text-2xl text-white mb-2 group-hover:text-primary transition-colors">
                                <?php echo $card['title']; ?>
                            </h3>
                            <span
                                class="font-sans text-xs text-white/75 group-hover:translate-x-1 transition-transform duration-300 flex items-center gap-2">
                                <?php echo $card['desc']; ?> &rarr;
                            </span>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer
        class="mx-3 md:mx-6 mb-6 mt-10 py-16 md:py-24 px-6 md:px-16 bg-[#D45622] text-white rounded-[32px] overflow-hidden relative z-10 border border-white/10 shadow-xl">
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(212,86,34,0.06),transparent_50%)] pointer-events-none">
        </div>
        <div
            class="absolute top-8 left-1/2 -translate-x-1/2 w-full text-center pointer-events-none select-none z-0 overflow-hidden opacity-5">
            <h2 class="font-serif text-[13vw] font-bold uppercase tracking-[0.1em] text-white whitespace-nowrap">GOOD
                CHOICE</h2>
        </div>

        <div class="container mx-auto max-w-[1440px] relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-8 pb-20 border-b border-white/10">
                <!-- Brand -->
                <div class="lg:col-span-5 flex flex-col items-start gap-8">
                    <a href="index.php" class="flex items-center gap-3">
                        <img src="assets/logo.png" alt="Good Choice Logo"
                            class="h-16 w-auto object-contain brightness-0 invert" />
                    </a>
                    <p class="font-sans text-sm text-white/80 leading-relaxed max-w-[360px]">
                        Crafting high-fidelity pastry and custom milestone cake designs since 1984. Dedicated to the
                        pursuit of culinary perfection in Abuja, Nigeria, and beyond.
                    </p>
                    <div class="flex gap-4">
                        <a class="w-10 h-10 rounded-full border border-white/15 text-white/70 flex items-center justify-center hover:bg-white hover:text-[#D45622] transition-all duration-300"
                            href="#" aria-label="Instagram">
                            <span class="material-symbols-outlined text-lg">favorite</span>
                        </a>
                        <a class="w-10 h-10 rounded-full border border-white/15 text-white/70 flex items-center justify-center hover:bg-white hover:text-[#D45622] transition-all duration-300"
                            href="#" aria-label="Pinterest">
                            <span class="material-symbols-outlined text-lg">share</span>
                        </a>
                        <a class="w-10 h-10 rounded-full border border-white/15 text-white/70 flex items-center justify-center hover:bg-white hover:text-[#D45622] transition-all duration-300"
                            href="#" aria-label="Twitter">
                            <span class="material-symbols-outlined text-lg">brand_awareness</span>
                        </a>
                    </div>
                </div>

                <!-- Nav Columns -->
                <div class="lg:col-span-4 grid grid-cols-2 gap-8">
                    <div class="flex flex-col gap-6">
                        <span
                            class="font-sans text-[10px] text-white/95 uppercase tracking-[0.2em] font-bold">Atelier</span>
                        <ul class="flex flex-col gap-3 font-sans text-sm text-white/70">
                            <li><a class="hover:text-white transition-colors" href="#menu">The Menu</a></li>
                            <li><a class="hover:text-white transition-colors" href="#services">Our Services</a></li>
                            <li><a class="hover:text-white transition-colors" href="#custom-cake">Cake Designer</a></li>
                            <li><a class="hover:text-white transition-colors" href="#academy">The Academy</a></li>
                        </ul>
                    </div>
                    <div class="flex flex-col gap-6">
                        <span
                            class="font-sans text-[10px] text-white/95 uppercase tracking-[0.2em] font-bold">Inquiries</span>
                        <ul class="flex flex-col gap-3 font-sans text-sm text-white/70">
                            <li><a class="hover:text-white transition-colors" href="#booking">Book Consult</a></li>
                            <li><a class="hover:text-white transition-colors" href="#heritage">Our Story</a></li>
                            <li><a class="hover:text-white transition-colors" href="#">Privacy Policy</a></li>
                            <li><a class="hover:text-white transition-colors" href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Newsletter -->
                <div class="lg:col-span-3 flex flex-col gap-6">
                    <span class="font-sans text-[10px] text-white/95 uppercase tracking-[0.2em] font-bold">Join the
                        Atelier</span>
                    <p class="font-sans text-sm text-white/70 leading-relaxed">
                        Subscribe to receive seasonal menu previews and exclusive masterclass invitations.
                    </p>
                    <form action="newsletter.php" method="POST"
                        class="flex border-b border-white/20 focus-within:border-white transition-colors overflow-hidden mt-2">
                        <input name="email"
                            class="bg-transparent border-none focus:ring-0 w-full py-2 px-0 font-sans text-sm text-white placeholder:text-white/45"
                            placeholder="Your Email Address" type="email" required />
                        <button class="text-white p-2 hover:translate-x-1 transition-transform" type="submit"
                            aria-label="Submit Newsletter">
                            <span class="material-symbols-outlined text-xl">east</span>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Copyright -->
            <div
                class="pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-white/50 font-sans text-xs">
                <span>&copy;
                    <?php echo $year; ?> Good Choice Confectionery. Abuja, Nigeria. All Rights Reserved.
                </span>
                <div class="flex gap-6">
                    <a class="hover:text-white transition-colors" href="#">Instagram</a>
                    <a class="hover:text-white transition-colors" href="#">Pinterest</a>
                    <a class="hover:text-white transition-colors" href="#">Twitter</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- GSAP Script Logic -->
    <script>
        gsap.registerPlugin(ScrollTrigger);

        const cursor = document.getElementById('custom-cursor');
        const cursorRing = document.getElementById('custom-cursor-ring');

        if (cursor && cursorRing) {
            let mouseX = 0, mouseY = 0, ringX = 0, ringY = 0, cursorX = 0, cursorY = 0;
            window.addEventListener('mousemove', (e) => { mouseX = e.clientX; mouseY = e.clientY; });
            gsap.ticker.add(() => {
                ringX += (mouseX - ringX) * 0.15; ringY += (mouseY - ringY) * 0.15;
                cursorX += (mouseX - cursorX) * 0.4; cursorY += (mouseY - cursorY) * 0.4;
                gsap.set(cursor, { x: cursorX, y: cursorY });
                gsap.set(cursorRing, { x: ringX, y: ringY });
            });
            document.querySelectorAll('a, button, select, input, option').forEach(el => {
                el.addEventListener('mouseenter', () => {
                    gsap.to(cursor, { scale: 1.5, backgroundColor: '#1A1715', duration: 0.3 });
                    gsap.to(cursorRing, { scale: 1.5, borderColor: '#D45622', borderWidth: 2, duration: 0.3 });
                });
                el.addEventListener('mouseleave', () => {
                    gsap.to(cursor, { scale: 1, backgroundColor: '#D45622', duration: 0.3 });
                    gsap.to(cursorRing, { scale: 1, borderColor: 'rgba(212, 86, 34, 0.4)', borderWidth: 1, duration: 0.3 });
                });
            });
        }

        // Custom Cake Customizer
        const shapeBtns = document.querySelectorAll('.shape-btn');
        const tierBtns = document.querySelectorAll('.tier-btn');
        const flavorBtns = document.querySelectorAll('.flavor-btn');
        const cakePrice = document.getElementById('custom-cake-price');
        const cakeSummary = document.getElementById('custom-cake-summary');
        const cakeWaBtn = document.getElementById('custom-cake-wa-btn');

        let selectedShape = 'round';
        let selectedTiers = 1;
        let selectedFlavor = 'Red Velvet';
        let selectedColor = '#D45622';

        function updateCustomizer() {
            for (let i = 1; i <= 3; i++) {
                const tier = document.getElementById(`cake-tier-${i}`);
                if (!tier) continue;
                if (i <= selectedTiers) {
                    if (tier.classList.contains('hidden')) {
                        tier.classList.remove('hidden');
                        gsap.fromTo(tier, { scaleY: 0, opacity: 0 }, { scaleY: 1, opacity: 1, duration: 0.4, ease: "back.out(1.2)" });
                    }
                    tier.style.backgroundColor = selectedColor;
                    tier.style.borderRadius = selectedShape === 'round' ? '24px 24px 0 0' : selectedShape === 'square' ? '4px 4px 0 0' : '50px 4px 50px 4px';
                } else {
                    tier.classList.add('hidden');
                }
            }
            const topper = document.getElementById('cake-topper');
            if (topper) gsap.fromTo(topper, { scale: 0.5, rotate: -45 }, { scale: 1, rotate: 0, duration: 0.5, ease: "elastic.out(1, 0.5)" });

            const priceVal = selectedTiers * 15000;
            cakePrice.textContent = `₦${priceVal.toLocaleString()}`;
            const shapeLabel = selectedShape.charAt(0).toUpperCase() + selectedShape.slice(1);
            cakeSummary.textContent = `${selectedTiers} ${selectedTiers === 1 ? 'Tier' : 'Tiers'} · ${shapeLabel} · ${selectedFlavor}`;
            const waMessage = encodeURIComponent(`Hello! I want to order a custom cake:\n- Height: ${selectedTiers} Tier(s)\n- Shape: ${shapeLabel}\n- Flavor: ${selectedFlavor}\n- Est. Cost: ₦${priceVal.toLocaleString()}`);
            cakeWaBtn.href = `https://wa.me/<?php echo $whatsapp_number; ?>?text=${waMessage}`;
        }

        function activateBtn(group, clicked) {
            group.forEach(b => {
                b.classList.remove('active', 'border-primary', 'bg-primary/5', 'text-primary');
                b.classList.add('border-outline-color', 'text-gray-400');
            });
            clicked.classList.add('active', 'border-primary', 'bg-primary/5', 'text-primary');
            clicked.classList.remove('border-outline-color', 'text-gray-400');
        }

        shapeBtns.forEach(btn => btn.addEventListener('click', () => {
            activateBtn(shapeBtns, btn);
            selectedShape = btn.dataset.shape;
            updateCustomizer();
        }));
        tierBtns.forEach(btn => btn.addEventListener('click', () => {
            activateBtn(tierBtns, btn);
            selectedTiers = parseInt(btn.dataset.tiers);
            updateCustomizer();
        }));
        flavorBtns.forEach(btn => btn.addEventListener('click', () => {
            activateBtn(flavorBtns, btn);
            selectedFlavor = btn.dataset.flavor;
            selectedColor = btn.dataset.color;
            updateCustomizer();
        }));
        updateCustomizer();

        // Mobile Menu
        const menuToggle = document.getElementById('mobile-menu-toggle');
        const menuClose = document.getElementById('mobile-menu-close');
        const mobileMenu = document.getElementById('mobile-menu');
        if (menuToggle && menuClose && mobileMenu) {
            menuToggle.addEventListener('click', () => gsap.to(mobileMenu, { x: 0, duration: 0.5, ease: "power4.out" }));
            const closeFn = () => gsap.to(mobileMenu, { x: '100%', duration: 0.5, ease: "power4.in" });
            menuClose.addEventListener('click', closeFn);
            mobileMenu.querySelectorAll('a').forEach(link => link.addEventListener('click', closeFn));
        }

        // Magnet Buttons
        document.querySelectorAll('.magnet-btn').forEach(btn => {
            btn.addEventListener('mousemove', (e) => {
                const b = btn.getBoundingClientRect();
                gsap.to(btn, { x: (e.clientX - b.left - b.width / 2) * 0.35, y: (e.clientY - b.top - b.height / 2) * 0.35, duration: 0.3, ease: "power2.out" });
            });
            btn.addEventListener('mouseleave', () => gsap.to(btn, { x: 0, y: 0, duration: 0.5, ease: "elastic.out(1, 0.3)" }));
        });

        // Hero Animation
        window.addEventListener('load', () => {
            const tl = gsap.timeline({ defaults: { ease: "power4.out", duration: 1.2 } });
            const isMobile = window.innerWidth < 768;
            const xOffset1 = isMobile ? 90 : 250, xOffset2 = isMobile ? 160 : 460;
            const zOffset1 = isMobile ? -80 : -150, zOffset2 = isMobile ? -180 : -350;
            const rot1 = isMobile ? 12 : 20, rot2 = isMobile ? 22 : 35;

            const galleryItems = document.querySelectorAll('.gallery-item');
            const totalItems = galleryItems.length;
            let activeIndex = 2, lastActiveIndex = -1;

            const heroTextData = [
                { title: "Graduation Cakes", highlight: "Artisanal Design", desc: "Mark academic milestones with custom cakes that taste as good as they look." },
                { title: "Birthday Cakes", highlight: "Sweet Memories", desc: "Delectable and beautiful custom cakes tailored to celebrate your special years." },
                { title: "Wedding Cakes", highlight: "Eternal Elegance", desc: "Exquisite multi-tiered masterpieces designed to make your big day unforgettable." },
                { title: "Small Chops", highlight: "Savory Delights", desc: "Crispy samosas, spring rolls, and delicious local puff-puff for your guests." },
                { title: "Milestone Cakes", highlight: "Perfect Celebrations", desc: "Elegant custom creations to celebrate life's most important achievements." },
                { title: "Kids Theme Cakes", highlight: "Pure Joy", desc: "Fun, vibrant, and delicious theme cakes that bring your kids' dreams to life." }
            ];

            function updateGallery() {
                galleryItems.forEach((item, index) => {
                    let diff = index - activeIndex;
                    while (diff < -totalItems / 2) diff += totalItems;
                    while (diff > totalItems / 2) diff -= totalItems;
                    let xO, zO, rotY, opacity, scale;
                    if (diff === 0) { xO = 0; zO = 0; rotY = 0; opacity = 1; scale = 1; item.style.zIndex = 10; }
                    else if (Math.abs(diff) === 1) { xO = diff * xOffset1; zO = zOffset1; rotY = diff * -rot1; opacity = 1; scale = 0.9; item.style.zIndex = 5; }
                    else if (Math.abs(diff) === 2) { xO = Math.sign(diff) * xOffset2; zO = zOffset2; rotY = Math.sign(diff) * -rot2; opacity = 1; scale = 0.8; item.style.zIndex = 1; }
                    else { xO = 0; zO = zOffset2 - 100; rotY = 0; opacity = 0; scale = 0.5; item.style.zIndex = 0; }
                    gsap.to(item, { x: xO, z: zO, rotationY: rotY, opacity, scale, duration: 0.8, ease: "power3.out" });
                });

                if (activeIndex !== lastActiveIndex) {
                    const data = heroTextData[activeIndex];
                    const titleEl = document.getElementById('hero-title');
                    const descEl = document.getElementById('hero-desc');
                    if (titleEl && descEl) {
                        if (lastActiveIndex === -1) {
                            titleEl.innerHTML = `${data.title},<br/><span class="font-sans font-black text-primary tracking-tight">${data.highlight}</span>`;
                            descEl.textContent = data.desc;
                        } else {
                            gsap.timeline()
                                .to([titleEl, descEl], { y: -15, opacity: 0, duration: 0.25, ease: "power2.in" })
                                .add(() => {
                                    titleEl.innerHTML = `${data.title},<br/><span class="font-sans font-black text-primary tracking-tight">${data.highlight}</span>`;
                                    descEl.textContent = data.desc;
                                })
                                .fromTo([titleEl, descEl], { y: 15, opacity: 0 }, { y: 0, opacity: 1, duration: 0.35, ease: "power2.out" });
                        }
                    }
                    lastActiveIndex = activeIndex;
                }
            }

            gsap.set(".gallery-item", { opacity: 0, scale: 0.5 });
            tl.to(".hero-text-intro", { opacity: 1, y: 0, duration: 1 }, "+=0.2")
                .to(".hero-gallery-intro", { opacity: 1, duration: 0.5 }, "-=0.5")
                .add(() => updateGallery(), "-=0.2")
                .fromTo(".hero-features-intro > div", { y: 30, opacity: 0 }, { y: 0, opacity: 1, duration: 0.8, stagger: 0.15 }, "+=0.4");

            let autoPlay = setInterval(() => { activeIndex = (activeIndex + 1) % totalItems; updateGallery(); }, 3000);
            const gc = document.querySelector('.perspective-container');
            gc.addEventListener('mouseenter', () => clearInterval(autoPlay));
            gc.addEventListener('mouseleave', () => { autoPlay = setInterval(() => { activeIndex = (activeIndex + 1) % totalItems; updateGallery(); }, 3000); });

            let touchStartX = 0, touchEndX = 0;
            gc.addEventListener('touchstart', e => { touchStartX = e.changedTouches[0].screenX; clearInterval(autoPlay); });
            gc.addEventListener('touchend', e => {
                touchEndX = e.changedTouches[0].screenX;
                if (touchEndX < touchStartX - 50) activeIndex = (activeIndex + 1) % totalItems;
                if (touchEndX > touchStartX + 50) activeIndex = (activeIndex - 1 + totalItems) % totalItems;
                updateGallery();
                autoPlay = setInterval(() => { activeIndex = (activeIndex + 1) % totalItems; updateGallery(); }, 3000);
            });
        });

        // Nav state
        const handleNavState = () => {
            const nav = document.getElementById('main-nav');
            if (!nav) return;
            const scrolled = window.scrollY > 50 || window.innerWidth < 768;
            nav.classList.toggle('bg-background/95', scrolled);
            nav.classList.toggle('backdrop-blur-md', scrolled);
            nav.classList.toggle('shadow-sm', scrolled);
            nav.classList.toggle('py-3', scrolled);
            nav.classList.toggle('border-outline-color/40', scrolled);
            nav.classList.toggle('bg-transparent', !scrolled);
            nav.classList.toggle('py-5', !scrolled);
            nav.classList.toggle('border-transparent', !scrolled);
            nav.querySelectorAll('.nav-link').forEach(l => {
                l.classList.toggle('text-white', scrolled);
                l.classList.toggle('text-black', !scrolled);
            });
            const toggle = document.getElementById('mobile-menu-toggle');
            if (toggle) {
                toggle.classList.toggle('text-white', scrolled);
                toggle.classList.toggle('text-black', !scrolled);
            }
        };
        window.addEventListener('scroll', handleNavState);
        window.addEventListener('resize', handleNavState);
        handleNavState();

        // Scroll Reveal Animations
        document.querySelectorAll('.scroll-reveal').forEach(section => {
            const title = section.querySelector('.scroll-reveal-title');
            const label = section.querySelector('.scroll-reveal-label');
            const desc = section.querySelector('.scroll-reveal-desc');
            const list = section.querySelector('.scroll-reveal-list');
            const btn = section.querySelector('.scroll-reveal-btn');
            const form = section.querySelector('.scroll-reveal-form');
            const imgs = section.querySelectorAll('.gsap-reveal-img');
            const services = section.querySelectorAll('.gsap-reveal-service');
            const steps = section.querySelectorAll('.scroll-process-step');

            const tl = gsap.timeline({ scrollTrigger: { trigger: section, start: "top 80%", toggleActions: "play none none none" } });
            if (label) tl.from(label, { y: 20, opacity: 0, duration: 0.6 });
            if (title) tl.from(title, { y: 40, opacity: 0, duration: 0.8, ease: "power3.out" }, "-=0.4");
            if (desc) tl.to(desc, { opacity: 1, y: 0, duration: 0.6 }, "-=0.4");
            if (list) tl.to(list, { opacity: 1, y: 0, duration: 0.6 }, "-=0.4");
            if (form) tl.to(form, { opacity: 1, y: 0, duration: 0.6 }, "-=0.4");
            if (btn) tl.to(btn, { opacity: 1, y: 0, duration: 0.6 }, "-=0.4");
            if (services.length) tl.from(services, { y: 40, opacity: 0, duration: 0.8, stagger: 0.15, ease: "power3.out" }, "-=0.4");
            if (steps.length) tl.from(steps, { y: 30, opacity: 0, duration: 0.8, stagger: 0.2, ease: "power3.out" }, "-=0.4");
            imgs.forEach(img => gsap.from(img, { opacity: 0, y: 30, scale: 0.98, duration: 1.2, ease: "power3.out", scrollTrigger: { trigger: img, start: "top 85%" } }));
        });
    </script>
</body>

</html>