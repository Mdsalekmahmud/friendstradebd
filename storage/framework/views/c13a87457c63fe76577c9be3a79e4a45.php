<!DOCTYPE html>
<html dir="ltr" lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Friend Trade - Leading Computer, Laptop &amp; Gadget Shop in Bangladesh</title>
    <base />
    <meta name="description"
        content="Friend Trade is the Best Laptop, Computer, Gaming PC, Component, Accessories, and Gadget retail &amp; Online shop in Bangladesh. Friend Trade offers the Latest Tech products with the most competitive price in BD." />
    <meta name="keywords"
        content= "Laptop shop in Bangladesh, Laptop shop in bd, computer shop in Bangladesh, PC shop in Bangladesh, computer shop in BD, Gaming PC shop in Bangladesh, PC accessories shop in Bangladesh, best computer shop in Bangladesh, Gadget shop in bd, Gadget Shop in Bangladesh, Online Shop in BD, online computer shop in bd, computer accessories online shop in Bangladesh, computer parts shop in bd, Laptop in Bangladesh, Notebook, Laptop, Desktop, Brand PC, computer, computer store Bangladesh, laptop store Bangladesh, gaming, desktop, monitor, Friend Trade, computer accessories, Desktop accessories, Laptop accessories, Laptop Online Store in BD, adata, apacer, apple, asus, bangladesh, baseus, belkin, benq, best, boya, brother, cable, camera, canon, GPU, graphics card, Friend Trade Ltd," />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
    
    <link href="<?php echo e(asset('assets/css/main.css')); ?>" rel="stylesheet" type="text/css" media="screen">
    <link href="<?php echo e(asset('assets/css/home.min.30.css')); ?>" rel="stylesheet" type="text/css" media="screen">
    <link href="<?php echo e(asset('assets/css/category.min.30.css')); ?>" rel="stylesheet" type="text/css" media="screen">
    <link href="<?php echo e(asset('assets/css/product.min.30.css')); ?>" rel="stylesheet" type="text/css" media="screen">
    <link href="<?php echo e(asset('assets/css/checkout.min.31.css')); ?>" rel="stylesheet" type="text/css" media="screen">
    <link href="<?php echo e(asset('assets/fonts/MaterialIcons-Regular.woff2')); ?>" rel="preload" as="font" type="font/woff2"
        crossorigin>
    <link href="<?php echo e(asset('assets/images/icon-sprite-v8.png')); ?>" rel="preload" as="image" type="image/png">
    
    <?php echo $__env->yieldPushContent('styles'); ?>

    <script type="text/javascript">
        var app = {
            mgs_type: "popup",
            enablePopup: 1,
            popupDuration: 6,
            onReady: function(d, a, e, f, t) {
                a = Array.isArray(a) ? a : [a];
                t = t || 2E3;
                for (var g = !0, b = d, c = 0; c < a.length; c++) {
                    var h = a[c];
                    if ("undefined" == typeof b[h]) {
                        g = !1;
                        break
                    }
                    b = b[h]
                }
                g ? e() : f && setTimeout(function() {
                    app.onReady(d, a, e, --f)
                }, t)
            }
        };
    </script>
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/site.min.61.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/listing.min.8.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/product.min.193860.js')); ?>"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2BV6E3DJTL"></script>


    <style>
        .navbar-nav .nav-item>.drop-down.show {
            display: block !important;
        }

        @media (max-width: 991px) {

            .navbar-nav .drop-down {
                position: static !important;
                width: 100%;
                box-shadow: none;
                padding-left: 15px;
            }

            .navbar-nav .nav-item>.drop-down.show {
                display: block !important;
            }

            .navbar-nav .nav-item:hover>.drop-down {
                display: none;
            }

            @media (max-width:991px) {

                .drop-menu-1,
                .drop-menu-2 {
                    position: static !important;
                    left: auto !important;
                    right: auto !important;
                    top: auto !important;
                    width: 100% !important;
                }

            }

        }
    </style>
</head>

<body class="common-home">
    
    <header id="header">
        <div class="top">
            <div class="container">
                <div class="ht-item logo">
                    <div class="mbl-nav-top h-desk">
                        <div id="nav-toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <a class="brand" href="<?php echo e(route('home')); ?>"><img
                            src="<?php echo e(asset('storage/images/banar_images/mainlogo.jpg')); ?>" title="Friend Trade Ltd "
                            width="144" height="164" alt="Friend Trade Ltd "></a>
                    <div class="mbl-right h-desk">
                        <div class="ac search-toggler"><i class="material-icons">search</i></div>
                        <div class="ac mc-toggler"><i class="material-icons">shopping_basket</i><span class="counter"
                                data-count="0"> <?php echo e(number_format(\Cart::getTotalQuantity())); ?></span></div>
                    </div>
                </div>
                <form action="<?php echo e(route('home')); ?>" method="GET">
                    <div class="ht-item search" style="width:600px" id="search">
                        <input type="text" name="search" placeholder="Search" autocomplete="off" />
                        <button type="submit" class="material-icons">search</button>
                    </div>
                </form>



                <div class="ht-item q-actions">
                    
                    
                    
                    
                    <div class="ac">
                        <a class="ic" href="#">
                            <i class="material-icons">person</i>
                        </a>

                        <div class="ac-content">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::check()): ?>
                                <a href="#">
                                    <h5><?php echo e(Auth::user()->name); ?></h5>
                                </a>

                                <p>
                                    <a href="<?php echo e(route('logout')); ?>"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                </p>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            <?php else: ?>
                                <a href="<?php echo e(route('login')); ?>">
                                    <h5>Account</h5>
                                </a>

                                <p>
                                    <a href="<?php echo e(route('register')); ?>">Register</a> or
                                    <a href="<?php echo e(route('login')); ?>">Login</a>
                                </p>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <?php
            use App\Models\Category;
            $categories = Category::with('children')->whereNull('parent_id')->get();
            $childCategory = Category::with('children')->whereNotNull('parent_id')->first();
        ?>
        <nav class="navbar" id="main-nav">
            <div class="container">
                <ul class="navbar-nav">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mainCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($mainCategory->children->count() > 0): ?>
                            <li class="nav-item has-child">
                                <a class="nav-link" href="<?php echo e(route('catProducts', $mainCategory->id)); ?>">
                                    <?php echo e($mainCategory->name); ?>

                                </a>


                                <ul class="drop-down drop-menu-1">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $mainCategory->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                                        <li class="nav-item <?php if($subCategory->children->count() > 0): ?> has-child <?php endif; ?>">
                                            <a class="nav-link" href="<?php echo e(route('catProducts', $subCategory->id)); ?>">
                                                <?php echo e($subCategory->name); ?>

                                            </a>

                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($subCategory->children->count() > 0): ?>
                                                <ul class="drop-down drop-menu-2">
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $subCategory->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                                href="<?php echo e(route('catProducts', $childCategory->id)); ?>">
                                                                <?php echo e($childCategory->name); ?>

                                                            </a>
                                                        </li>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                                                </ul>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        </li>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                                </ul>
                            </li>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                </ul>
            </div>
        </nav>


    </header>

      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($breadcrumbs)): ?>
        <?php if (isset($component)) { $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb','data' => ['items' => $breadcrumbs]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($breadcrumbs)]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2)): ?>
<?php $attributes = $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2; ?>
<?php unset($__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale19f62b34dfe0bfdf95075badcb45bc2)): ?>
<?php $component = $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2; ?>
<?php unset($__componentOriginale19f62b34dfe0bfdf95075badcb45bc2); ?>
<?php endif; ?>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <div class="f-btn cart-toggle" id="cart-btn">
        <i class="material-icons">shopping_basket</i>
        <div class="label">Cart</div>
        <span class="counter"><?php echo e(Cart::getTotalQuantity()); ?></span>
    </div>

    <div class="drawer m-cart" id="cart-drawer">

        <div class="title">
            <p>YOUR CART</p>

            <span class="mc-toggler loaded close" id="cart-close">
                <i class="material-icons">close</i>
            </span>
        </div>

        <div class="content">

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = \Cart::getContent(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                <div class="item">

                    <div class="image">
                        <img src="<?php echo e(asset($item->attributes->image)); ?>" alt="<?php echo e($item->name); ?>" width="47"
                            height="47">
                    </div>

                    <div class="info">

                        <div class="name">
                            <?php echo e($item->name); ?>

                        </div>
                        <div style="display:flex;align-items:center;gap:3px;flex-wrap:wrap">
                            <span class="amount">
                                <?php echo e(number_format($item->price)); ?>৳
                            </span>

                            <i class="material-icons">clear</i>

                            <div class="input-group mb-3 d-flex align-items-center quantity-container"
                                style="max-width: 100px;">

                                <div class="input-group-prepend">
                                    <button style="width: 30px; height: 30px; border: none; background: none;"
                                        class="decrease" data-id="<?php echo e($item->id); ?>" type="button">
                                        &minus;
                                    </button>
                                </div>

                                <input type="text" class="form-control text-center quantity-amount"
                                    value="<?php echo e($item->quantity); ?>" min="1" readonly>

                                <div class="input-group-append">
                                    <button style="width: 30px; height: 30px; border: none; background: none;"
                                        class="increase" data-id="<?php echo e($item->id); ?>" type="button">
                                        &plus;
                                    </button>
                                </div>

                            </div>

                            <span class="eq">=</span>

                            <span class="total">
                                <?php echo e(number_format($item->price * $item->quantity)); ?>৳
                            </span>
                        </div>
                    </div>

                    <div class="remove"
                        onclick="event.preventDefault();document.getElementById('remove-<?php echo e($item->id); ?>').submit();"
                        title="Remove">

                        <i class="material-icons" aria-hidden="true">delete</i>

                    </div>

                    <form id="remove-<?php echo e($item->id); ?>" action="<?php echo e(route('cart.remove', $item->id)); ?>"
                        method="POST" style="display:none">

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                    </form>

                </div>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

                <div style="padding:15px;text-align:center;">
                    Cart is empty
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


            <div class="footer">

                <div class="total">
                    <div class="title">Sub-Total</div>
                    <div class="amount">
                        <?php echo e(number_format(\Cart::getSubTotal())); ?>৳
                    </div>
                </div>

                <div class="total">
                    <div class="title">Total</div>
                    <div class="amount">
                        <?php echo e(number_format(\Cart::getTotal())); ?>৳
                    </div>
                </div>

                <div class="checkout-btn">
                    <a href="<?php echo e(route('checkout')); ?>">
                        <button class="btn submit">Checkout</button>
                    </a>
                </div>

            </div>

        </div>


    </div>
  


    <?php echo e($slot); ?>


    <footer>
        <div class="container">
            <div class="main-footer">

                <div class="footer-block contact-us">
                    <h4>Support</h4>

                    <a href="tel:" class="helpline-btn footer-big-btn">
                        <div class="ic"><i class="material-icons">phone</i></div>
                        <p>9 AM - 8 PM </p>
                        <h5>11111</h5>
                    </a>

                    <a href="" class="store-locator-btn footer-big-btn">
                        <div class="ic"><i class="material-icons">place</i></div>
                        <p>Store Locator</p>
                        <h5>Find Our Stores</h5>
                    </a>
                </div>

                <div class="footer-block about-us">
                    <h4>About Us</h4>
                    <ul>
                        <li><a href="">Affiliate Program</a></li>
                        <li><a href="">EMI Terms</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Online Delivery</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Terms and Conditions</a></li>
                        <li><a href="">Refund and Return Policy</a></li>
                        <li><a href="">Star Point Policy</a></li>
                        <li><a href="">Career</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">Brands</a></li>
                    </ul>
                </div>
                <div class="footer-block org-info">
                    <h4>Stay Connected</h4>
                    <p><b class="store-name">Frinds Trade Ltd</b><br />Head Office: 28 Kazi Nazrul Islam Ave,Navana
                        Zohura Square, Dhaka 1000</p>
                    <p><b>Email:</b><br /><a href="mailto:webteam@.com">webteam@.com</a> </p>
                </div>
            </div>

            <div class="social-footer">
                <div class="app-links">
                    <span class="app-link-text">Experience Frinds Trade App on your mobile:</span>
                    <span class="app-link-items">
                        <a class="app-link" href="" target="_blank" rel="noopener"
                            title="Frinds Trade Android APP">
                            <span class="icon-sprite playstore"></span>
                            <span class="app-link-text">
                                <span class="download">Download on</span>
                                <span class="app-store">Google Play</span>
                            </span>
                        </a>
                        <a class="app-link" href="" target="_blank" rel="noopener"
                            title="Frinds Trade ISO APP">
                            <span class="icon-sprite applestore"></span>
                            <span class="app-link-text">
                                <span class="download">Download on</span>
                                <span class="app-store">App Store</span>
                            </span>
                        </a>
                    </span>
                </div>
                <div class="social-links">
                    <a href="" target="_blank" rel="noopener" title="Whatsapp">
                        <span class="icon-sprite whatsapp"></span>
                    </a>
                    <a href="" target="_blank" rel="noopener" title="Facebook">
                        <span class="icon-sprite fb"></span>
                    </a>
                    <a href="" target="_blank" rel="noopener" title="Youtube">
                        <span class="icon-sprite youtube"></span>
                    </a>
                    <a href="" target="_blank" rel="noopener" title="Instagram">
                        <span class="icon-sprite insta"></span>
                    </a>
                </div>
            </div>
            <div class="row sub-footer">
                <div class="col-md-6 copyright-info">
                    <p>© 2026 Frinds Trade Ltd | All rights reserved</p>
                </div>
                <div class="col-md-6 powered-by">
                    <p>Powered By: Frinds Trade</p>
                </div>
            </div>
        </div>
    </footer>
    <div class="overlay"></div>
</body>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const toggler = document.getElementById('nav-toggler');
        const nav = document.getElementById('main-nav');

        if (toggler) {
            toggler.addEventListener('click', function() {
                nav.classList.toggle('open');
                toggler.classList.toggle('close');
            });
        }

        document.addEventListener('click', function(e) {

            const link = e.target.closest('.has-child > .nav-link');

            if (!link) return;

            if (window.innerWidth < 992) {

                e.preventDefault();

                const submenu = link.nextElementSibling;

                if (submenu) {
                    submenu.classList.toggle('show');
                }
            }

        });

    });

    document.addEventListener('click', function(e) {

        if (e.target.closest('.mc-toggler')) {
            document.getElementById('cart-drawer')
                .classList.toggle('open');
        }

    });


    document.addEventListener('DOMContentLoaded', function() {
        const openBtn = document.getElementById('cart-btn');
        const drawer = document.getElementById('cart-drawer');
        const closeBtn = document.getElementById('cart-close');

        if (!openBtn || !drawer || !closeBtn) {
            console.error("Cart elements missing!");
            return;
        }

        // OPEN
        openBtn.addEventListener('click', function() {
            drawer.classList.add('open');
        });

        // CLOSE
        closeBtn.addEventListener('click', function() {
            drawer.classList.remove('open');
        });

        // optional: click outside close
        // document.addEventListener('click', function(e) {
        //     if (!drawer.contains(e.target) && !openBtn.contains(e.target)) {
        //         drawer.classList.remove('open');
        //     }
        // });

        document.addEventListener('click', function(e) {

            if (e.target.closest('#cart-close')) {
                drawer.classList.remove('open');
            }

        });

        document.addEventListener('click', function(e) {

            if (e.target.closest('#cart-btn')) {
                drawer.classList.add('open');
            }

            if (e.target.closest('#cart-close')) {
                drawer.classList.remove('open');
            }

        });
    });

    document.addEventListener('DOMContentLoaded', function() {

        document.querySelectorAll('.increase').forEach(button => {

            button.addEventListener('click', function() {

                let id = this.dataset.id;

                let input = this.closest('.quantity-container')
                    .querySelector('.quantity-amount');

                let quantity = parseInt(input.value) + 1;

                updateCart(id, quantity, input);

            });

        });

        document.querySelectorAll('.decrease').forEach(button => {

            button.addEventListener('click', function() {

                let id = this.dataset.id;

                let input = this.closest('.quantity-container')
                    .querySelector('.quantity-amount');

                let quantity = parseInt(input.value) - 1;

                if (quantity < 1) {
                    quantity = 1;
                }

                updateCart(id, quantity, input);

            });

        });

        function updateCart(id, quantity, input) {

            fetch('/cart/update/' + id, {

                    method: 'POST',

                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document
                            .querySelector('meta[name="csrf-token"]')
                            .getAttribute('content')
                    },

                    body: JSON.stringify({
                        quantity: quantity
                    })

                })
                .then(response => response.json())
                .then(data => {

                    if (data.success) {

                        input.value = quantity;

                        location.reload();

                    }

                });

        }

    });
</script>
<?php echo $__env->yieldPushContent('js'); ?>

<!-- Mirrored from www.startech.com.bd/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jun 2026 14:36:32 GMT -->

</html>
<?php /**PATH C:\laragon\www\friendstradebd\resources\views/components/app.blade.php ENDPATH**/ ?>