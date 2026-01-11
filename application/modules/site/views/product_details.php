<?php
// Product Details View - Premium Design Upgrade
?>

<style>
    /* =========================================
       Premium Theme Variables
       ========================================= */
    :root {
        --primary-color: #2563eb;       /* Rich Blue */
        --primary-dark: #1e40af;        /* Darker Blue */
        --primary-light: #eff6ff;       /* Very Light Blue */
        --secondary: #64748b;           /* Slate Gray */
        --accent-green: #10b981;
        --accent-purple: #8b5cf6;
        --accent-orange: #f59e0b;
        --accent-red: #ef4444;
        
        --glass-bg: rgba(255, 255, 255, 0.95);
        --glass-border: 1px solid rgba(226, 232, 240, 0.8);
        --shadow-sm: 0 2px 4px rgba(0,0,0,0.02);
        --shadow-md: 0 10px 30px -10px rgba(0,0,0,0.08);
        --shadow-lg: 0 20px 40px -15px rgba(37, 99, 235, 0.15);
        --shadow-hover: 0 25px 50px -12px rgba(0,0,0,0.15);
        
        --radius-sm: 8px;
        --radius-md: 16px;
        --radius-lg: 24px;
        
        --font-main: 'Inter', 'Segoe UI', sans-serif;
    }

    body {
        font-family: var(--font-main);
        color: #334155;
        background-color: #f8fafc;
        line-height: 1.7;
    }

    h1, h2, h3, h4, h5 {
        color: #0f172a;
        font-weight: 700;
        letter-spacing: -0.025em;
    }
    
    .section-padding { padding: 100px 0; position: relative; overflow: hidden; }
    .bg-white { background-color: #ffffff; }
    .bg-light { background-color: #f1f5f9; }
    
    /* Typography Utilities */
    .text-gradient {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-purple));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    
    .section-title {
        font-size: 2.5rem;
        margin-bottom: 1.5rem;
        position: relative;
        display: inline-block;
    }
    
    .section-subtitle {
        font-size: 1.125rem;
        color: var(--secondary);
        max-width: 700px;
        margin: 0 auto 4rem;
    }

    /* Modern Buttons */
    .btn-premium {
        background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
        color: white;
        padding: 14px 32px;
        border-radius: 50px;
        font-weight: 600;
        border: none;
        box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 0.9rem;
        text-decoration: none !important;
        display: inline-block;
    }
    .btn-premium:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(37, 99, 235, 0.4);
        color: white;
    }
    
    .btn-premium-outline {
        background: transparent;
        color: var(--primary-color);
        border: 2px solid var(--primary-color);
        padding: 12px 30px;
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none !important;
        transition: all 0.3s ease;
        display: inline-block;
    }
    .btn-premium-outline:hover {
        background: var(--primary-light);
        color: var(--primary-dark);
        border-color: var(--primary-dark);
    }

    /* =========================================
       1. Hero Section 
       ========================================= */
    .hero-section {
        padding: 140px 0 100px;
        background: radial-gradient(circle at top right, #e0f2fe 0%, #ffffff 60%);
    }
    .hero-content { padding-right: 40px; }
    .hero-badge {
        display: inline-block;
        background: rgba(37, 99, 235, 0.1);
        color: var(--primary-color);
        padding: 8px 20px;
        border-radius: 30px;
        font-weight: 600;
        font-size: 0.9rem;
        margin-bottom: 25px;
        border: 1px solid rgba(37, 99, 235, 0.1);
    }
    .hero-content h1 {
        font-size: 4rem;
        line-height: 1.1;
        margin-bottom: 1.5rem;
        color: #0f172a;
    }
    .hero-content p {
        font-size: 1.25rem;
        color: var(--secondary);
        margin-bottom: 2.5rem;
    }
    .hero-image-wrapper {
        position: relative;
        z-index: 10;
        transform: perspective(1000px) rotateY(-5deg) rotateX(2deg);
        transition: transform 0.5s ease;
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-lg);
    }
    .hero-image-wrapper:hover {
        transform: perspective(1000px) rotateY(0deg) rotateX(0deg);
        box-shadow: var(--shadow-hover);
    }
    .hero-image-wrapper img {
        border-radius: var(--radius-lg);
        width: 100%;
        display: block;
    }

    /* =========================================
       2. Why Us - Floating Bubbles
       ========================================= */
    .why-us-section {
        background: white;
    }
    .metric-bubble {
        width: 160px;
        height: 160px;
        background: white;
        border-radius: 50%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        box-shadow: var(--shadow-md);
        position: absolute;
        transition: all 0.4s ease;
        border: 4px solid var(--primary-light);
    }
    .metric-bubble:hover {
        transform: scale(1.1);
        z-index: 20;
        border-color: var(--primary-color);
    }
    .metric-bubble h3 { font-size: 2rem; color: var(--primary-color); margin: 0; font-weight: 800; }
    .metric-bubble span { font-size: 0.85rem; font-weight: 600; text-transform: uppercase; color: var(--secondary); margin-top: 5px; letter-spacing: 0.5px; }

    .bubbles-wrapper {
        position: relative;
        height: 450px;
    }
    /* Dynamic Positioning */
    .metric-bubble:nth-child(1) { top: 0; left: 10%; }
    .metric-bubble:nth-child(2) { top: 120px; left: 50%; }
    .metric-bubble:nth-child(3) { bottom: 20px; left: 15%; background: var(--primary-color); border-color: rgba(255,255,255,0.2); }
    .metric-bubble:nth-child(3) h3, .metric-bubble:nth-child(3) span { color: white; }
    .metric-bubble:nth-child(4) { bottom: 80px; left: 60%; width: 120px; height: 120px; }

    /* =========================================
       3. Vivid Summary Cards
       ========================================= */
    .summary-card {
        padding: 40px 30px;
        border-radius: var(--radius-md);
        color: white;
        text-align: center;
        height: 100%;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(255,255,255,0.1);
    }
    .summary-card:hover { transform: translateY(-10px); }
    /* Beautiful Gradients */
    .bg-green { background: linear-gradient(135deg, #10b981 0%, #059669 100%); box-shadow: 0 10px 25px rgba(16, 185, 129, 0.25); }
    .bg-blue { background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); box-shadow: 0 10px 25px rgba(59, 130, 246, 0.25); }
    .bg-red { background: linear-gradient(135deg, #f43f5e 0%, #e11d48 100%); box-shadow: 0 10px 25px rgba(244, 63, 94, 0.25); }
    .bg-orange { background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); box-shadow: 0 10px 25px rgba(245, 158, 11, 0.25); }
    
    .summary-card h4 { font-size: 2.2rem; color: white !important; margin: 15px 0 10px; text-shadow: 0 2px 4px rgba(0,0,0,0.1); }
    .summary-card .icon i { font-size: 3rem; opacity: 0.9; }
    .summary-card p { opacity: 0.9; font-size: 0.95rem; }

    /* =========================================
       4. Glass Cards (Modules/Features)
       ========================================= */
    .glass-card {
        background: var(--glass-bg);
        border: var(--glass-border);
        border-radius: var(--radius-md);
        padding: 30px;
        transition: all 0.3s ease;
        height: 100%;
    }
    .glass-card:hover {
        box-shadow: var(--shadow-md);
        border-color: var(--primary-color);
        transform: translateY(-5px);
    }
    .icon-box {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        margin-bottom: 20px;
    }
    .icon-blue { background: #eff6ff; color: var(--primary-color); }
    .icon-green { background: #ecfdf5; color: var(--accent-green); }
    .icon-purple { background: #f5f3ff; color: var(--accent-purple); }

    /* =========================================
       5. Pricing Upgrade
       ========================================= */
    .pricing-wrapper {
        display: flex;
        align-items: center; /* Center align cards vertically */
    }
    .pricing-card {
        background: white;
        border-radius: var(--radius-lg);
        padding: 50px 40px;
        text-align: center;
        border: 1px solid #f1f5f9;
        transition: all 0.3s ease;
        position: relative;
    }
    .pricing-card:hover {
        box-shadow: var(--shadow-lg);
        border-color: transparent;
        transform: scale(1.02);
        z-index: 5;
    }
    .pricing-card.popular {
        background: white; 
        color: inherit;
        transform: scale(1.05); /* Larger */
        box-shadow: 0 20px 40px rgba(37, 99, 235, 0.15); /* Soft blue shadow */
        border: 2px solid var(--primary-color);
        z-index: 10;
    }
    .pricing-card.popular h3 { color: var(--primary-color) !important; }
    .pricing-card.popular i { color: var(--primary-color) !important; }
    
    .pricing-card h3 { font-size: 1.25rem; text-transform: uppercase; margin-bottom: 20px; letter-spacing: 1px; color: var(--secondary); }
    .pricing-card .price { font-size: 3.5rem; font-weight: 800; color: #0f172a; margin-bottom: 10px; }
    .pricing-card .unit { font-size: 1rem; color: var(--secondary); font-weight: 500; }
    
    .pricing-features { text-align: left; margin: 30px 0 40px; list-style: none; padding: 0; }
    .pricing-features li { margin-bottom: 15px; font-size: 0.95rem; display: flex; align-items: center; }
    .pricing-features li i { color: var(--primary-color); margin-right: 12px; font-size: 1.1rem; }

    /* =========================================
       6. Support Section & Form
       ========================================= */
    .support-section {
        background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
    }
    .support-form-card {
        background: white;
        padding: 50px;
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-lg);
        border: 1px solid #f1f5f9;
    }
    .form-group { margin-bottom: 25px; }
    .form-control-custom {
        width: 100%;
        padding: 15px 20px;
        border: 2px solid #e2e8f0;
        border-radius: 12px;
        background: #f8fafc;
        transition: all 0.3s;
        font-size: 1rem;
    }
    .form-control-custom:focus {
        border-color: var(--primary-color);
        background: white;
        outline: none;
        box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
    }
    
    .faq-item {
        background: white;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        margin-bottom: 15px;
        overflow: hidden;
    }
    .faq-question {
        padding: 20px 25px;
        cursor: pointer;
        font-weight: 600;
        color: #1e293b;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: background 0.2s;
    }
    .faq-question:hover { background: #f8fafc; }
    .faq-answer {
        padding: 0 25px 25px;
        display: none;
        color: var(--secondary);
    }
    .faq-item.active .faq-question { color: var(--primary-color); background: #eff6ff; }

    /* Responsive */
    @media (max-width: 991px) {
        .hero-section { text-align: center; padding-top: 100px; }
        .hero-content { padding-right: 0; margin-bottom: 50px; }
        .hero-image-wrapper { transform: none !important; }
        
        .bubbles-wrapper { height: auto; display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; margin-bottom: 40px; }
        .metric-bubble { position: static; width: 140px; height: 140px; }
        
        .pricing-card.popular { transform: scale(1); }
    }
</style>

<div role="main" class="main">
    <?php if (isset($product) && !empty($product)) : ?>

    <!-- 1. Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content">
                    <span class="hero-badge"><i class="fa fa-star"></i> Featured Product</span>
                    <h1><?php echo $product->hero_heading; ?></h1>
                    <p><?php echo $product->hero_subheading; ?></p>
                    <div style="margin-bottom: 30px; font-size: 0.95rem; opacity: 0.8;"><?php echo $product->hero_description; ?></div>
                    <div class="d-flex gap-3">
                        <a href="<?php echo $product->hero_button_link; ?>" class="btn-premium"><?php echo $product->hero_button_text; ?></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image-wrapper">
                         <?php if($product->hero_image): ?>
                            <img src="<?php echo base_url('product_img/' . $product->hero_image); ?>" alt="<?php echo $product->name; ?>">
                        <?php else: ?>
                            <img src="https://via.placeholder.com/800x600?text=App+Preview" alt="Placeholder">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Why Us - Floating Bubbles Layout -->
    <section class="why-us-section section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="bubbles-wrapper">
                        <?php if(!empty($product->metrics)): 
                              $i = 0; foreach($product->metrics as $metric): ?>
                            <div class="metric-bubble">
                                <h3><?php echo $metric->value; ?></h3>
                                <span><?php echo $metric->label; ?></span>
                            </div>
                        <?php $i++; endforeach; endif; ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div style="padding-left: 20px;">
                        <h2 class="section-title">Why Choose <span class="text-gradient"><?php echo $product->name; ?></span>?</h2>
                        <h4 style="margin-bottom: 20px; font-weight: 400; color: var(--secondary);"><?php echo $product->why_heading; ?></h4>
                        <p style="font-size: 1.1rem; color: #64748b; margin-bottom: 35px;"><?php echo $product->why_description; ?></p>
                        
                        <ul class="fa-ul" style="margin-left: 25px; margin-bottom: 35px; color: #475569;">
                            <li style="margin-bottom: 10px;"><i class="fa-li fa fa-check-circle" style="color: var(--accent-green);"></i> Top-notch performance tailored for your business.</li>
                            <li style="margin-bottom: 10px;"><i class="fa-li fa fa-check-circle" style="color: var(--accent-green);"></i> 24/7 dedicated support team.</li>
                            <li><i class="fa-li fa fa-check-circle" style="color: var(--accent-green);"></i> Scalable architecture that grows with you.</li>
                        </ul>

                        <a href="<?php echo base_url('contact-us'); ?>" class="btn-premium-outline">Detailed Analysis <i class="fa fa-arrow-right" style="margin-left: 5px;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Summary Stats (Vibrant Cards) -->
    <?php if (!empty($product->app_links)) : ?>
    <section class="section-padding bg-white pt-0">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title"><?php echo $product->summary_heading; ?></h2>
                <div style="height: 50px;"></div>
            </div>
            <div class="row">
                <?php 
                 $bg_classes = ['bg-green', 'bg-blue', 'bg-red', 'bg-orange'];
                 $i = 0;
                 foreach ($product->app_links as $link) : ?>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="summary-card <?php echo $bg_classes[$i % 4]; ?>">
                        <div class="icon"><i class="fa <?php echo $link->icon; ?>"></i></div>
                        <h4><?php echo $link->count_text; ?></h4>
                        <p><?php echo $link->description; ?></p>
                    </div>
                </div>
                <?php $i++; endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- 4. Modules (Glass Grid) -->
    <?php if (!empty($product->modules)) : ?>
    <section class="section-padding bg-light">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title"><?php echo $product->modules_heading; ?></h2>
                <p class="section-subtitle">Comprehensive modules designed to cover every aspect of your operation.</p>
            </div>
            <div class="row">
                <?php $colors=['icon-blue', 'icon-green', 'icon-purple']; $c=0; foreach ($product->modules as $module) : ?>
                <div class="col-lg-4 col-md-6 mb-4" style="margin-bottom: 30px;">
                    <div class="glass-card">
                        <div class="icon-box <?php echo $colors[$c%3]; ?>">
                            <i class="fa <?php echo $module->icon; ?>"></i>
                        </div>
                        <h4><?php echo $module->title; ?></h4>
                        <p style="color: var(--secondary); font-size: 0.95rem; margin-bottom: 0;"><?php echo $module->description; ?></p>
                    </div>
                </div>
                <?php $c++; endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- 5. Features (Alternating Layout or Grid) -->
    <?php if (!empty($product->features)) : ?>
    <section class="section-padding bg-white">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title"><?php echo $product->features_heading; ?></h2>
                <p class="section-subtitle"><?php echo $product->features_subheading; ?></p>
            </div>
            <div class="row">
                <?php foreach ($product->features as $feature) : ?>
                <div class="col-md-4 col-sm-6 mb-4" style="margin-bottom: 30px;">
                    <div class="text-center p-4">
                        <div style="font-size: 3rem; margin-bottom: 20px; color: var(--primary-color);">
                            <i class="fa <?php echo $feature->icon; ?>"></i>
                        </div>
                        <h4 style="font-size: 1.25rem;"><?php echo $feature->title; ?></h4>
                        <p style="color: var(--secondary);"><?php echo $feature->description; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- 6. Audiences / Segments -->
     <?php if (!empty($product->audiences)) : ?>
     <section class="section-padding" style="background: linear-gradient(to bottom, #f8fafc, #ffffff);">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title"><?php echo $product->audiences_heading; ?></h2>
            </div>
             <div class="row justify-content-center">
                <?php foreach ($product->audiences as $audience) : ?>
                <div class="col-md-6 mb-4" style="margin-bottom: 30px;">
                    <div style="background: white; padding: 30px; border-radius: var(--radius-md); box-shadow: var(--shadow-sm); display: flex; align-items: start;">
                         <div style="background: var(--primary-light); color: var(--primary-color); padding: 15px; border-radius: 50%; font-size: 24px; margin-right: 20px;">
                            <i class="fa <?php echo $audience->icon; ?>"></i>
                         </div>
                         <div>
                            <h4 style="margin-top: 5px;"><?php echo $audience->title; ?></h4>
                            <p style="margin-bottom: 0; color: var(--secondary);"><?php echo $audience->description; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
             </div>
        </div>
     </section>
     <?php endif; ?>

    <!-- 7. Technologies -->
    <?php if (!empty($product->technologies)) : ?>
    <section class="section-padding bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h3 class="section-subtitle" style="text-transform: uppercase; letter-spacing: 2px; font-size: 0.9rem; font-weight: 700;"><?php echo $product->technology_heading; ?></h3>
            </div>
            <div class="row justify-content-center">
                 <?php foreach ($product->technologies as $tech) : ?>
                <div class="col-6 col-sm-4 col-md-2 text-center mb-4">
                    <img src="<?php echo base_url('assets/img/tech/' . $tech->icon); ?>" alt="<?php echo $tech->title; ?>" style="height: 60px; object-fit: contain; filter: grayscale(100%); opacity: 0.6; transition: all 0.3s;">
                    <h6 style="margin-top: 10px; font-size: 0.8rem; color: #94a3b8;"><?php echo $tech->title; ?></h6>
                </div>
                <?php endforeach; ?>
            </div>
            <script>
                document.querySelectorAll('.col-6 img').forEach(img => {
                    img.addEventListener('mouseenter', () => { img.style.filter = 'none'; img.style.opacity = '1'; img.style.transform = 'scale(1.1)'; });
                    img.addEventListener('mouseleave', () => { img.style.filter = 'grayscale(100%)'; img.style.opacity = '0.6'; img.style.transform = 'scale(1)'; });
                });
            </script>
        </div>
    </section>
    <?php endif; ?>

    <!-- 8. Pricing Tables -->
    <?php if (!empty($product->pricing_plans)) : ?>
    <section class="section-padding bg-light">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title"><?php echo $product->pricing_heading; ?></h2>
                <p class="section-subtitle"><?php echo $product->pricing_subheading; ?></p>
            </div>
            <div class="row pricing-wrapper justify-content-center">
                <?php foreach ($product->pricing_plans as $plan) : 
                    $is_pop = ($plan->plan_name == 'Premium' || $plan->plan_name == 'Standard' || $plan->plan_name == 'Pro');
                ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="pricing-card <?php echo $is_pop ? 'popular' : ''; ?>">
                        <h3><?php echo $plan->plan_name; ?></h3>
                        <div class="price"><?php echo $plan->price; ?></div>
                        <div class="unit"><?php echo $plan->price_unit; ?></div>
                        
                        <ul class="pricing-features">
                             <?php if(!empty($plan->features)): foreach($plan->features as $feature): ?>
                                <li><i class="fa fa-circle-o-notch"></i> <?php echo $feature->feature_text; ?></li>
                             <?php endforeach; endif; ?>
                        </ul>
                        
                        <a href="<?php echo $plan->button_link; ?>" class="<?php echo $is_pop ? 'btn-premium' : 'btn-premium-outline'; ?>" style="width: 100%;"><?php echo $plan->button_text; ?></a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    
    <!-- 9. Support & Contact (Split Layout) -->
     <section class="support-section section-padding">
        <div class="container">
            <div class="row">
                <!-- FAQ Column -->
                <div class="col-lg-6 mb-5">
                     <h2 class="section-title" style="margin-bottom: 30px;">Frequently Asked Questions</h2>
                     
                     <?php if (!empty($product->faqs)) : ?>
                     <div class="faq-list">
                        <?php $f=0; foreach ($product->faqs as $faq) : ?>
                        <div class="faq-item <?php echo $f==0 ? 'active' : ''; ?>">
                            <div class="faq-question">
                                <span><?php echo $faq->question; ?></span>
                                <i class="fa fa-angle-down"></i>
                            </div>
                            <div class="faq-answer" <?php echo $f==0 ? 'style="display:block;"' : ''; ?>>
                                <p><?php echo $faq->answer; ?></p>
                            </div>
                        </div>
                        <?php $f++; endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
                
                <!-- Form Column -->
                <div class="col-lg-5 offset-lg-1">
                    <div class="support-form-card">
                        <h3 class="text-center" style="margin-bottom: 10px;">Have Questions?</h3>
                        <p class="text-center" style="color: var(--secondary); margin-bottom: 30px;">Fill out the form below and we'll get back to you shortly.</p>
                        
                        <form action="<?php echo base_url('contact-us'); ?>" method="post">
                            <div class="form-group">
                                <label style="font-weight: 600; font-size: 0.9rem; margin-bottom: 8px;">Full Name</label>
                                <input type="text" class="form-control-custom" placeholder="John Doe">
                            </div>
                            <div class="form-group">
                                <label style="font-weight: 600; font-size: 0.9rem; margin-bottom: 8px;">Email Address</label>
                                <input type="email" class="form-control-custom" placeholder="john@example.com">
                            </div>
                            <div class="form-group">
                                <label style="font-weight: 600; font-size: 0.9rem; margin-bottom: 8px;">Your Message</label>
                                <textarea rows="3" class="form-control-custom" placeholder="How can we help?"></textarea>
                            </div>
                            <button type="submit" class="btn-premium" style="width: 100%;">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     </section>

    <!-- Bottom CTA -->
    <section class="section-padding text-center" style="background: #0f172a; color: white;">
        <div class="container">
            <h2 style="color: white; margin-bottom: 20px;"><?php echo $product->demo_call_to_action_heading ?: 'Ready to Transform Your Business?'; ?></h2>
            <p style="color: #94a3b8; margin-bottom: 40px; font-size: 1.2rem;">Join thousands of satisfied customers using our solution today.</p>
            <a href="<?php echo base_url('contact-us'); ?>" class="btn-premium" style="background: white; color: #0f172a;">Request Free Demo</a>
        </div>
    </section>

    <?php else : ?>
        <div class="container section-padding text-center" style="min-height: 60vh; display: flex; flex-direction: column; justify-content: center;">
            <h2>Product Not Found</h2>
            <p>The product you are looking for does not exist.</p>
            <a href="<?php echo base_url('site/products'); ?>" class="btn-premium">Back to Products</a>
        </div>
    <?php endif; ?>

</div>

<script>
// FAQ Toggle Logic
document.querySelectorAll('.faq-question').forEach(item => {
    item.addEventListener('click', event => {
        const parent = item.parentElement;
        const answer = item.nextElementSibling;
        
        // Close all others
        document.querySelectorAll('.faq-item').forEach(el => {
            if (el !== parent) {
                el.classList.remove('active');
                el.querySelector('.faq-answer').style.display = 'none';
            }
        });
        
        // Toggle current
        if (parent.classList.contains('active')) {
            parent.classList.remove('active');
            answer.style.display = 'none';
        } else {
            parent.classList.add('active');
            answer.style.display = 'block';
        }
    });
});
</script>
