<style>
    /* General Styles */
    .section-padding { padding: 60px 0; }
    .text-center { text-align: center; }
    .btn-custom {
        background-color: #007bff;
        color: #fff;
        padding: 12px 30px;
        border-radius: 5px;
        font-weight: 600;
        text-transform: uppercase;
        border: 2px solid transparent;
        transition: all 0.3s ease;
    }
    .btn-custom:hover {
        background-color: #0056b3;
        color: #fff;
    }
    
    /* New Hero Section */
    .product-list-hero-new {
        background: linear-gradient(to right, #eef5ff, #fdfcff);
        padding: 80px 0;
    }
    .product-list-hero-new .hero-text-container {
        padding-right: 30px;
    }
    .product-list-hero-new h1 {
        font-size: 2.8rem;
        font-weight: 700;
        line-height: 1.3;
        margin-bottom: 20px;
    }
    .product-list-hero-new h1 strong {
        color: #007bff;
    }
    .product-list-hero-new p {
        font-size: 1.1rem;
        color: #555;
        margin-bottom: 30px;
    }
    .product-list-hero-new .hero-image-container img {
        max-width: 100%;
        height: auto;
    }

    /* Product Section Title */
    .products-section-title {
        border: 1px solid #007bff;
        color: #007bff;
        display: inline-block;
        padding: 8px 20px;
        border-radius: 20px;
        margin-bottom: 40px;
        font-weight: 600;
    }

    /* New Product Card Design */
    .product-card-new {
        background: #fff;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        margin-bottom: 40px;
        padding: 30px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .product-card-new:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.12);
    }
    .product-card-new .product-logo {
        height: 45px;
        margin-bottom: 15px;
    }
    .product-card-new h3 {
        font-size: 1.6rem;
        font-weight: 700;
        margin-bottom: 10px;
    }
    .product-card-new .product-description {
        color: #666;
        font-size: 0.95rem;
        line-height: 1.7;
        margin-bottom: 20px;
        height: 100px; /* Fixed height for description */
        overflow: hidden;
    }
    .product-card-new .product-features-list ul {
        list-style: none;
        padding: 0;
        margin-bottom: 25px;
    }
    .product-card-new .product-features-list li {
        color: #333;
        font-size: 1rem;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
    }
    .product-card-new .product-features-list li i {
        color: #007bff;
        margin-right: 12px;
        font-size: 1.2rem;
    }
    .product-card-new .product-card-image-right img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }
    .product-card-new .product-card-buttons {
        display: flex;
        gap: 15px;
        margin-top: 20px;
    }
    .product-card-new .btn {
        flex: 1;
        font-size: 1rem;
        padding: 12px 15px;
        border-radius: 8px;
        font-weight: 600;
    }
    .product-card-new .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
    .product-card-new .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
    .product-card-new .btn-outline-secondary {
        background-color: #fff;
        color: #555;
        border: 2px solid #ccc;
    }
    .product-card-new .btn-outline-secondary:hover {
        background-color: #f8f9fa;
        color: #333;
        border-color: #aaa;
    }

</style>

<div role="main" class="main">

    <!-- ======================= New Hero Section ======================= -->
    <section class="product-list-hero-new section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 hero-text-container">
                    <h1>We create exceptional products with end-to-end <strong>support</strong> and <strong>expert guidance</strong></h1>
                    <p>Supporting your project at each stage; from initial discovery, design and development to post-production support and maintenance.</p>
                    <a href="#" class="btn btn-custom">Get Started</a>
                </div>
                <div class="col-md-6 hero-image-container">
                     <img src="<?php echo base_url('assets/img/product_page_hero.png'); ?>" alt="Products Hero">
                </div>
            </div>
        </div>
    </section>

    <div class="container section-padding">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="products-section-title">PRODUCTS</div>
            </div>
        </div>

        <div class="row">
            <?php if (!empty($products)) : ?>
                <?php foreach ($products as $product) : ?>
                    <div class="col-md-6">
                        <div class="product-card-new">
                            <div class="row">
                                <div class="col-md-7">
                                    <?php if (!empty($product->hero_image)) : ?>
                                        <img src="<?php echo base_url('product_img/' . $product->hero_image); ?>" alt="<?php echo $product->name; ?> Logo" class="product-logo">
                                    <?php else : ?>
                                        <img src="<?php echo base_url('assets/img/salesman_logo.png'); ?>" alt="<?php echo $product->name; ?> Logo" class="product-logo">
                                    <?php endif; ?>
                                    <h3><?php echo $product->name; ?></h3>
                                    <p class="product-description"><?php echo $product->hero_description; ?></p>
                                    <div class="product-features-list">
                                        <ul>
                                            <li><i class="fa fa-arrow-circle-right"></i> Product Carousel</li>
                                            <li><i class="fa fa-arrow-circle-right"></i> Advanced Product Filter</li>
                                            <li><i class="fa fa-arrow-circle-right"></i> Advanced Query Builder</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="product-card-image-right">
                                        <?php if (!empty($product->hero_image)) : ?>
                                            <img src="<?php echo base_url('product_img/' . $product->hero_image); ?>" alt="<?php echo $product->name; ?>">
                                        <?php else : ?>
                                            <img src="<?php echo base_url('assets/img/placeholder_product.png'); ?>" alt="Placeholder Product Image">
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-12">
                                     <div class="product-card-buttons">
                                        <a href="#" class="btn btn-primary"><i class="fa fa-phone"></i> Call Now</a>
                                        <a href="<?php echo base_url('product/' . $product->slug); ?>" class="btn btn-outline-secondary"><i class="fa fa-search"></i> Try Free Demo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="col-md-12 text-center">
                    <p>No products found at the moment.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
