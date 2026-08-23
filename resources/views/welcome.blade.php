<x-app>

    <style>
        .status {
            position: absolute;
            top: -15px;
            right: 0;
            width: 85px;
            height: 85px;
            overflow: hidden;
            pointer-events: none;
            z-index: 10;
        }

        .status-tag {
            position: absolute;
            top: 18px;
            right: -25px;
            width: 110px;
            text-align: center;
            transform: rotate(45deg);
            display: block;
            padding: 4px 0;
            font-family: sans-serif;
            font-size: 10px;
            font-weight: bold;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .drawer {
            position: fixed;
            top: 0;
            right: 0;
            width: 400px;
            max-width: 90%;
            height: 100%;
            background: #fff;
            box-shadow: -2px 0 10px rgba(0, 0, 0, 0.2);
            transform: translateX(100%);
            transition: transform 0.3s ease;
            z-index: 9999;
            padding: 20px;
            overflow-y: auto;
        }

        .drawer.open {
            transform: translateX(0);
        }

        .title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .title p {
            margin: 0;
            font-weight: bold;
        }

        #cart-close {
            cursor: pointer;
        }

        .item {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .image img {
            width: 47px;
            height: 47px;
            background: #f0f0f0;
        }

        .info {
            flex: 1;
        }

        .remove {
            cursor: pointer;
            color: #ff0000;
        }

        .footer {
            margin-top: 20px;
            border-top: 1px solid #ddd;
            padding-top: 20px;
        }

        .input-group {
            display: flex;
            gap: 10px;
        }

        .input-group input {
            flex: 1;
            padding: 8px 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .input-group-btn button {
            padding: 8px 16px;
            background: #000;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .material-icons {
            font-family: 'Material Icons';
            font-weight: normal;
            font-style: normal;
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
        }

        #cart-close {
            cursor: pointer;
            pointer-events: auto !important;
            z-index: 10000;
            position: relative;
        }
    </style>
    {{-- @push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endpush --}}

    <body class="common-home">

        {{-- <div class="f-btn cart-toggle" id="cart-btn">
            <i class="material-icons">shopping_basket</i>
            <div class="label">Cart</div>
            <span class="counter">{{ Cart::getTotalQuantity() }}</span>
        </div> --}}
        {{-- <div class="f-btn cmpr-toggler" id="cmpr-btn">
        <i class="material-icons">library_add</i>
        <div class="label">Compare</div>
        <span class="counter">0</span>
    </div> --}}

        {{-- <div class="drawer m-cart" id="cart-drawer">
            <div class="title">
                <p>YOUR CART</p>
                <span class="mc-toggler loaded close" id="cart-close">
                    <i class="material-icons">close</i>
                </span>
            </div>
            <div class="content">
                <div class="content">

                    @forelse($cartItems as $item)
                        <div class="item">

                            <div class="image">
                                <img src="{{ {{ $primaryImages[$product->id] }} ?? 'images/no-image.png') }}"
                                    alt="{{ $item->name }}" width="47" height="47">
                            </div>

                            <div class="info">

                                <div class="name">
                                    {{ $item->name }}
                                </div>

                                <span class="amount">
                                    {{ number_format($item->price) }}৳
                                </span>

                                <span>{{ $item->quantity }}</span>

                                <span class="eq">=</span>

                                <span class="total">
                                    {{ number_format($item->price * $item->quantity) }}৳
                                </span>

                            </div>

                            <div class="remove" title="Remove">

                                <form action="{{ route('cart.remove', $item->id) }}" method="POST"
                                    style="display:inline;">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                        style="background:none;border:none;padding:0;cursor:pointer;">

                                        <i class="material-icons" aria-hidden="true">
                                            delete
                                        </i>

                                    </button>

                                </form>

                            </div>

                        </div>

                    @empty

                        <div style="padding:20px;text-align:center;">
                            Your cart is empty
                        </div>
                    @endforelse

                </div>

                <div class="footer">

                    <div class="promotion-code">
                        <div class="input-group">
                            <input type="text" placeholder="Promo Code" id="input-cart-coupon">

                            <span class="input-group-btn">
                                <button data-target="#input-cart-coupon" class="btn button-coupon" type="submit">
                                    Apply
                                </button>
                            </span>
                        </div>
                    </div>

                    <div style="padding:15px 0;font-weight:600;">
                        Total :
                        {{ number_format(\Cart::getTotal()) }}৳
                    </div>

                </div>
            </div>
            <div class="footer">
                <div class="promotion-code">
                    <div class="input-group">
                        <input type="text" placeholder="Promo Code" id="input-cart-coupon">
                        <span class="input-group-btn">
                            <button data-target="#input-cart-coupon" class="btn button-coupon"
                                type="submit">Apply</button>
                        </span>
                    </div>
                </div>
            </div>
        </div> --}}

        <di v class="bg-gray content p-tb-30">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-9 d-pr-0">
                        <div class="home-slider" itemscope itemtype="https://schema.org/ItemList">
                            <div class="slide" itemprop="itemListElement" itemscope itemtype="">
                                <a href="information/offer/info9358.html?offer_id=1430" itemprop="url"><img
                                        src="{{ asset('storage/images/banar_images/mainbanar.jpg') }}"
                                        alt="sylhet offer" class="img-responsive" width="982" height="500"
                                        itemprop="contentUrl" /></a>
                                <meta itemprop="position" content="1" />
                                <meta itemprop="name" content="sylhet offer" />
                                <meta itemprop="caption" content="" />
                            </div>
                            <meta itemprop="name" content="Homepage Banners" />
                            <div class="slide" itemprop="itemListElement" itemscope itemtype="">
                                <a href="hp-laptop.html" itemprop="url"><img src="" alt="laptop"
                                        class="img-responsive" width="982" height="500"
                                        itemprop="contentUrl" /></a>
                                <meta itemprop="position" content="2" />
                                <meta itemprop="name" content="laptop" />
                                <meta itemprop="caption" content="" />
                            </div>
                            <meta itemprop="name" content="Homepage Banners" />
                            <div class="slide" itemprop="itemListElement" itemscope itemtype="">
                                <a href="benq-monitor.html" itemprop="url"><img
                                        src="image/cache/catalog/home/banner/2026/benq-web-banner-main-982x500.webp"
                                        alt="BenQ monitor" class="img-responsive" width="982" height="500"
                                        itemprop="contentUrl" /></a>
                                <meta itemprop="position" content="3" />
                                <meta itemprop="name" content="BenQ monitor" />
                                <meta itemprop="caption" content="" />
                            </div>
                            <meta itemprop="name" content="Homepage Banners" />
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-3">
                        <div class="row">
                            <div class="banner-item col-sm-6 col-lg-12 m-mt-15 m-pr-8">
                                <a href=""><img src="{{ asset('storage/images/banar_images/subbanar.jpg') }}"
                                        alt="Frinds Trade App" width="315" height="252" /></a>
                            </div>
                            <div class="banner-item col-sm-6 col-lg-12 m-t-15 m-mt-15 m-pl-8">
                                <a href="tool/btu_calculator.html"><img
                                        src="{{ asset('storage/images/banar_images/subbanar.jpg') }}"
                                        alt="Frinds Trade AC  tonCalculater" width="315" height="252" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sliding_text_wrap">
                    <marquee direction="left">Sunday, 07 June, All our branches are open except IDB branch.
                        Additionally,
                        our online activities are Operational. Please check our contact page for the schedule.</marquee>
                </div>
                {{-- <div class="row r-lnk-wrap m-home">
                    <div class="col-lg-3 col-md-6 col-sm-6"><a href="tool/finder.html" class="c-card ws-box">
                            <div class="ic"><i class="material-icons">laptop</i></div>
                            <div><span class="blurb">Laptop Finder</span>
                                <p class="m-hide">Find Your Laptop Easily</p>
                            </div>
                        </a></div>
                    <div class="col-lg-3 col-md-6 col-sm-6"><a href="https://complain.startech.info.bd/"
                            target="_blank" rel="noopener" class="c-card ws-box">
                            <div class="ic"><i class="material-icons">feedback</i></div>
                            <div><span class="blurb">Raise a Complain</span>
                                <p class="m-hide">Share your experience</p>
                            </div>
                        </a></div>
                    <div class="col-lg-3 col-md-6 col-sm-6"><a href="https://service.startech.com.bd/home-service"
                            target="_blank" rel="noopener" class="c-card ws-box">
                            <div class="ic"><i class="material-icons">home</i></div>
                            <div><span class="blurb">Home Service
                                </span>
                                <p class="m-hide">Get expert help.
                                </p>
                            </div>
                        </a></div>
                    <div class="col-lg-3 col-md-6 col-sm-6"><a href="https://service.startech.com.bd/"
                            target="_blank" rel="noopener" class="c-card ws-box">
                            <div class="ic"><i class="material-icons">settings</i></div>
                            <div><span class="blurb">Servicing Center</span>
                                <p class="m-hide">Repair Your Device</p>
                            </div>
                        </a></div>
                </div> --}}
                <div class="m-home m-cat">
                    <h2 class="m-header">Featured Category</h2>
                    <p class="m-blurb">Get Your Desired Product from Featured Category!</p>
                    <div class="cat-items-wrap">
                        <div class="cat-item">
                            <a href="air-conditioner.html" class="cat-item-inner">
                                <span class="cat-icon"><img
                                        src="{{ asset('storage/images/category-thumb/ac-48x48.png') }}"
                                        alt="AC Icon" width="48" height="48"></span>
                                <p>AC</p>
                            </a>
                        </div>
                        <div class="cat-item">
                            <a href="portable-power-station.html" class="cat-item-inner">
                                <span class="cat-icon"><img
                                        src="{{ asset('storage/images/category-thumb/powerstation-48x48.png') }}"
                                        alt="Portable Power Station Icon" width="48" height="48"></span>
                                <p>Portable Power Station</p>
                            </a>
                        </div>
                        <div class="cat-item">
                            <a href="air-fryer.html" class="cat-item-inner">
                                <span class="cat-icon"><img
                                        src="{{ asset('storage/images/category-thumb/air-fryer-48x48.png') }}"
                                        alt="Air Fryer Icon" width="48" height="48"></span>
                                <p>Air Fryer</p>
                            </a>
                        </div>
                        <div class="cat-item">
                            <a href="drone.html" class="cat-item-inner">
                                <span class="cat-icon"><img
                                        src="{{ asset('storage/images/category-thumb/drone-48x48.png') }}"
                                        alt="Drone Icon" width="48" height="48"></span>
                                <p>Drone</p>
                            </a>
                        </div>
                        <div class="cat-item">
                            <a href="gimbal.html" class="cat-item-inner">
                                <span class="cat-icon"><img
                                        src="{{ asset('storage/images/category-thumb/gimbal-48x48.png') }}"
                                        alt="Gimbal Icon" width="48" height="48"></span>
                                <p>Gimbal</p>
                            </a>
                        </div>
                        <div class="cat-item">
                            <a href="tablet-pc.html" class="cat-item-inner">
                                <span class="cat-icon"><img
                                        src="{{ asset('storage/images/category-thumb/tablet-48x48.png') }}"
                                        alt="Table PC Icon" width="48" height="48"></span>
                                <p>Table PC</p>
                            </a>
                        </div>
                        <div class="cat-item">
                            <a href="television-startech.html" class="cat-item-inner">
                                <span class="cat-icon"><img
                                        src="{{ asset('storage/images/category-thumb/tv-48x48.png') }}"
                                        alt="TV Icon" width="48" height="48"></span>
                                <p>TV</p>
                            </a>
                        </div>
                        <div class="cat-item">
                            <a href="refrigerator.html" class="cat-item-inner">
                                <span class="cat-icon"><img
                                        src="{{ asset('storage/images/category-thumb/refrigerator-48x48.png') }}"
                                        alt="Fridge Icon" width="48" height="48"></span>
                                <p>Fridge</p>
                            </a>
                        </div>
                        <div class="cat-item">
                            <a href="mobile-phone.html" class="cat-item-inner">
                                <span class="cat-icon"><img
                                        src="{{ asset('storage/images/category-thumb/mobile-phone-48x48.png') }}"
                                        alt="Mobile Phone Icon" width="48" height="48"></span>
                                <p>Mobile Phone</p>
                            </a>
                        </div>
                        <div class="cat-item">
                            <a href="mobile-phone-accessories.html" class="cat-item-inner">
                                <span class="cat-icon"><img
                                        src="{{ asset('storage/images/category-thumb/mobile-phone-accessories-48x48.png') }}"
                                        alt="Mobile Accessories Icon" width="48" height="48"></span>
                                <p>Mobile Accessories</p>
                            </a>
                        </div>
                        <div class="cat-item">
                            <a href="portable-ssd.html" class="cat-item-inner">
                                <span class="cat-icon"><img
                                        src="{{ asset('storage/images/category-thumb/portable-ssd-48x48.png') }}"
                                        alt="Portable SSD Icon" width="48" height="48"></span>
                                <p>Portable SSD</p>
                            </a>
                        </div>
                        <div class="cat-item">
                            <a href="wifi-camera.html" class="cat-item-inner">
                                <span class="cat-icon"><img
                                        src="{{ asset('storage/images/category-thumb/portable-ip-camera-48x48.png') }}"
                                        alt="WiFi Camera Icon" width="48" height="48"></span>
                                <p>WiFi Camera</p>
                            </a>
                        </div>
                        <div class="cat-item">
                            <a href="trimmer.html" class="cat-item-inner">
                                <span class="cat-icon"><img
                                        src="{{ asset('storage/images/category-thumb/trimmer-48x48.png') }}"
                                        alt="Trimmer Icon" width="48" height="48"></span>
                                <p>Trimmer</p>
                            </a>
                        </div>
                        <div class="cat-item">
                            <a href="gadget/smart-watch.html" class="cat-item-inner">
                                <span class="cat-icon"><img
                                        src="{{ asset('storage/images/category-thumb/smart-watch-48x48.png') }}"
                                        alt="Smart Watch Icon" width="48" height="48"></span>
                                <p>Smart Watch</p>
                            </a>
                        </div>
                        <div class="cat-item">
                            <a href="earbuds.html" class="cat-item-inner">
                                <span class="cat-icon"><img
                                        src="{{ asset('storage/images/category-thumb/earbuds-48x48.png') }}"
                                        alt="Earbuds Icon" width="48" height="48"></span>
                                <p>Earbuds</p>
                            </a>
                        </div>
                        <div class="cat-item">
                            <a href="gaming-console.html" class="cat-item-inner">
                                <span class="cat-icon"><img
                                        src="{{ asset('storage/images/category-thumb/gaming-console-48x48.png') }}"
                                        alt="Gaming Console Icon" width="48" height="48"></span>
                                <p>Gaming Console</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="m-home store-finder ws-box p-30">
                    <div class="row" style="align-items: center">
                        <div class="col-md-7 col-sm-12 info d-fc">
                            <div class="ic"><i class="material-icons lg">place</i></div>
                            <div class="txt">
                                <h3>20+ Physical Stores</h3>
                                <p>Visit Our Store & Get Your Desired IT Product!</p>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 store-find"><a href="information/contact.html"
                                class="btn find d-fc">Find Our Store<i class="material-icons">search</i></a></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="m-product m-home" id="module-481">
                    <h3 class="m-header">Featured Products</h3>
                    <p class="m-blurb">Check &amp; Get Your Desired Product!</p>
                    <div class="p-items-wrap">
                        @foreach ($products as $product)
                            <div class="p-item">
                                <div class="p-item-inner">
                                    <div class="marks" style="display:flex; width:100%; posi">


                                        <span class="status">
                                            <strong class="status-tag"
                                                style="background: {{ $product->status == 'Available'
                                                    ? '#2ecc71'
                                                    : ($product->status == 'Stock Out'
                                                        ? '#e74c3c'
                                                        : ($product->status == 'Upcoming'
                                                            ? '#f39c12'
                                                            : '#7f8c8d')) }};
                                                    ">
                                                {{ $product->status }}
                                            </strong>
                                        </span>
                                        <span class="mark">
                                            Save: {{ $product->regular_price - $product->price }}৳
                                        </span>
                                    </div>
                                    <div class="p-item-img"> <a href="{{ route('productDetails',$product->slug) }}">
                                            <img src="{{ $primaryImages[$product->id] }}" alt="{{ $product->name }}"
                                                width="228" height="228" /></a>
                                    </div>
                                    <div class="p-item-details">
                                        <h4 class="p-item-name">
                                            <a
                                                href="{{ route('productDetails', $product->id) }}">{{ $product->name }}</a>
                                        </h4>
                                        <div class="p-item-price">
                                            @if ($product->call_for_price == 0)
                                                <span class="price-new">{{ $product->price }}৳</span>
                                                <span class="price-old">{{ $product->regular_price }}৳</span>
                                            @else
                                                <span class="price-new" style="color:red;font-weight:bold;">
                                                    Call for Price
                                                </span>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
                <div class="m-home seo-content m-html">
                    <h1>Leading Computer, Laptop &amp; Gaming PC Retail &amp; Online Shop in Bangladesh</h1>
                    <div>
                        <p>Technology has become a part of our daily lives, and we depend on tech products daily for a
                            vast
                            portion of our lives. There is hardly a home in Bangladesh without a tech product. This is
                            where
                            we come in. <a href="index.html">Frinds Trade Ltd.</a> started as a Tech Product Shop in
                            March
                            2007. We focus on giving the best customer service in Bangladesh, following our motto of
                            <strong>“Customer Comes First.”</strong> This is why Frinds Trade is the most
                            <strong>trusted
                                computer shop in Bangladesh</strong> today, capturing the loyalty of a large customer
                            base.
                            After a long 16-year journey, Frinds Trade Ltd. was certified with the renowned "ISO
                            9001:2015
                            certification" as a recognition for the best Quality Control Management System. As an
                            <strong>ISO-certified organization</strong>, Frinds Trade Ltd. is now up to the
                            international
                            standards that specify a Quality Management System (QMS). This Certification denotes that
                            the
                            organization strictly maintains all sorts of regulatory requirements to provide customers
                            with
                            products and services of a global standard.
                        </p>
                        <h2>Best Laptop Shop in Bangladesh</h2>
                        <p>Frinds Trade is the most popular <a href="laptop-notebook/laptop.html">Laptop Brand Shop in
                                BD</a>. Frinds Trade <a href="laptop-notebook/laptop.html">Laptop</a> Shop has the
                            perfect
                            device, whether you are a freelancer, officegoer, or student. Gamers love our collection of
                            <a href="laptop-notebook/Gaming-Laptop.html">Gaming Laptops</a> because we always bring the
                            latest laptops in Bangladesh. As the best laptop shop in BD, a customer’s budget is our
                            first
                            concern. We bring the latest Intel Laptop and AMD Laptop under budget for every customer -
                            from
                            starters to expert users. Frinds Trade is considered the most trusted laptop shop in BD,
                            allowing
                            you to buy the best laptops from top laptop brands in the world. Along with the best laptop
                            brands, our experts provide you with the best buying decisions based on your needs and
                            budget -
                            making Frinds Trade the trusted and most popular laptop shop in Bangladesh. Frinds Trade
                            lets you buy
                            an official Apple <a href="apple-macbook.html">MacBook</a> Air or MacBook Pro from <a
                                href="apple.html">Apple Store in Bangladesh.</a> Frinds Trade sells the latest models
                            of the
                            most popular laptop brands, such as - <a href="laptop-notebook/laptop.html">Razer</a>, <a
                                href="hp-laptop.html">HP</a>, Dell, <a href="apple-macbook.html">Apple MacBook</a>, <a
                                href="asus-laptop.html">Asus</a>, <a href="acer-laptop.html">Acer</a>, <a
                                href="lenovo-laptop.html">Lenovo</a>, <a
                                href="microsoft-surface-laptop.html">Microsoft
                                Surface</a>, MSI, Gigabyte, <a href="laptop-notebook/laptop.html">Infinix</a>, <a
                                href="walton-laptop.html">Walton</a>, Xiaomi MI, Huawei, Chuwi, etc.
                        </p>
                        <h2>Best Desktop PC Shop In Bangladesh</h2>
                        <p><a href="index.html">Frinds Trade</a> has the most comprehensive array of <a
                                href="desktops.html">Desktop PCs</a>. We offer top-of-the-line Custom PC, <a
                                href="desktops/brand-pc.html">Brand PC</a>, All-in-One PC, and <a
                                href="desktops/portable-mini-pc.html">Portable Mini PC</a> at Frinds Trade outlets, the
                            trusted and most popular Desktop PC shop in Bangladesh, which are spread nationwide. Get
                            your
                            new iMac Desktop or <a href="apple-mac-mini.html">Apple Mac Mini</a> with an international
                            warranty and servicing plan. You can always depend on the Frinds Trade PC shop experts to
                            build the
                            best desktop PC or computer with parts of your choice. Frinds Trade is Bangladesh's most
                            reliable
                            repair shop for PC, laptops, &amp; other consumer electronics. Take your gaming or
                            professional
                            content creation to the next level with a large collection of high-end Gaming PC and Editing
                            PC
                            from Frinds Trade. You can build a complete personal computer with the best desktop PC parts
                            picked
                            by you with our <a href="tool/pc_builder.html">PC Builder</a> feature. The features let you
                            <a href="tool/pc_builder.html">pick PC parts</a> to buy the best desktop PC anytime. Or,
                            you
                            can visit any Frinds Trade custom PC shop near you to build the best Desktop PC according to
                            your
                            taste, live, and in front of you.
                        </p>
                        <h2>Best Gaming PC Shop In Bangladesh</h2>
                        <p>We at Frinds Trade love gaming. Therefore, we aim to provide a holistic gaming experience
                            with our
                            best gaming PC shop in Bangladesh, “Star Tech Rig House.” The Rig House is a specialized
                            shop
                            for PC builds with high-end PC components. Frinds Trade Rig House is highly decorated with
                            the best
                            gaming PC parts for customers to build online Gaming or editing PC. Our gaming PC shop in
                            Bangladesh offers the broadest range of Gaming PC, Gaming Laptops, and <a
                                href="gaming-console.html">Game Consoles</a> from XBOX &amp; PlayStation. Star Tech’s
                            largest Gaming PC shop consists of Gaming Motherboards, Liquid Coolers, Custom Water Cooling
                            for
                            PC, Gaming Casings, high-performance RAM Kits, Graphics Cards, etc. Our exceptional Gaming
                            accessories cover Gaming Chairs, Gaming Sofas, RGB Mousepads, Gaming Headphones, Headphone
                            Stands, RGB Gaming PC Light-Strips and many more. We have strategic partnerships with many
                            world-renowned computer Gaming brands like Razer, PNY, ASRock, Asus, Zadak, GALAX, Noctua,
                            Antec, Lian Li, CRYORIG, EKWB, Gamdias, KWG, XFX, etc. Our gaming concern extends to leading
                            gaming brands, including A4Tech Bloody, SteelSeries, Logitech, Corsair, Redragon, Cooler
                            Master,
                            Fantech, DeepCool, Cougar, Gigabyte &amp; Elgato products at our exclusive Gaming PC Shop.
                        </p>
                        <h2>Best Office Equipment Shop In Bangladesh</h2>
                        <p>Frinds Trade Ltd. is Bangladesh's most trusted <a href="office-equipment.html">Office
                                Equipment
                            </a>Shop. For more than 18 years, we have been providing the best Office Solution. Take a
                            quick
                            drive to the nearest Frinds Trade retail center and furnish your home office, Start-up
                            business
                            desk, or corporate space with the best <a href="office-equipment.html">Office Equipment</a>
                            and office supplies. <a href="tool/finder.html">Find Laptops</a>, Desktops, Antiviruses,
                            CCTV
                            &amp; IP Cameras, Printers, Routers, Photocopiers, Attendance Machines, Scanners, Conference
                            Systems, Server Equipment, etc for smooth office operation.</p>
                        <h2>Largest Gadget Shop In Bangladesh</h2>
                        <p>We bring in the most sought-after&nbsp;<a href="gadget.html">gadgets </a>at Frinds Trade.
                            Only
                            genuine and leading brands of <a href="gadget/smart-watch.html">Smart Watch</a>, <a
                                href="earbuds.html">Earbuds</a>, <a href="television-startech.html">TV</a>, <a
                                href="power-bank.html">Power Bank</a>, and Mobile Phone Accessories are available at
                            our
                            Gadget Shop. We are also concerned for creative professionals for whom we bring exciting
                            gadgets
                            like Drones, Studio Equipment, <a href="dslr-camera.html">DSLR Camera</a>, <a
                                href="gimbal.html">Gimbals </a>&amp; Stream Decks from internationally reputed brands
                            like
                            DJI, Blackmagic, Corsair, Zhiyun, Gudsen, and Loupedeck. Frinds Trade has established the
                            largest
                            gadget shop in BD with the help of an app &amp; E-commerce website. Ease up your chores with
                            Daily Lifestyle gadgets from our gadget shop. Xiaomi, Anker, Micropack, Vention, Fire-Boltt,
                            UGREEN, OnePlus, Apple, Baseus, Orico, Havit, Samsung, and HOCO are a few of the brands we
                            cover.</p>
                        <h2>Top Mobile Shop in Bangladesh</h2>
                        <p>Frinds Trade <a href="mobile-phone.html">mobile phone</a> shop offers the latest smartphones
                            and
                            <a href="feature-phone.html">feature phones</a> from top mobile brands. <a
                                href="samsung-mobile-phone.html">Samsung</a>, Motorola, Google Pixel, <a
                                href="vivo-mobile-phone.html">Vivo</a>, Huawei, Xiaomi, <a
                                href="oppo-mobile-phone.html">OPPO</a>, Mi, Realme, and <a
                                href="oneplus-mobile-phone.html">OnePlus</a> are among the Android smartphone brands at
                            our mobile shop. Frinds Trade is a one-stop solution for buying <a
                                href="apple-iphone.html">iPhones</a> in Bangladesh. Frinds Trade is also your go-to
                            destination for buying the latest Android tablets and <a href="apple-ipad.html">iPads</a>
                            in
                            Bangladesh. Offering extensive warranty, EMI &amp; home delivery service spanning the
                            country,
                            we are the top <a href="mobile-phone.html">mobile</a> shop in Bangladesh, presenting the
                            best
                            online shop for mobile phones. Our mobile phone shop has an extensive collection of <a
                                href="mobile-phone-accessories.html">mobile phone accessories</a>, including chargers,
                            USB
                            Type-C Cables, Power Banks, Wireless Chargers, and many more to go with your smartphone.
                        </p>
                        <h2>Best Home Appliance Shop in Bangladesh</h2>
                        <p>Frinds Trade is a popular home appliance shop in Bangladesh with a variety of top-quality
                            home
                            appliances including <a href="air-conditioner.html">air conditioners</a>, <a
                                href="washing-machine.html">washing machines</a>, <a href="oven.html">ovens</a>,
                            refrigerators, <a href="geyser-water-heater.html">geysers</a>, vacuum cleaners, <a
                                href="sewing-machine.html">sewing machines</a>, <a href="room-heater.html">electric
                                room
                                heaters</a>, and more. Frinds Trade offers home appliances from renowned brands like
                            Samsung,
                            LG, Hitachi, Whirlpool, Singer, Haier, <a href="walton-ac.html">Walton</a>, and so on. To
                            assist customers in selecting the appropriate air conditioner, Frinds Trade has an <a
                                href="tool/btu_calculator.html">AC Ton Calculator</a>, helping determine the ideal AC
                            capacity based on room size and other factors. Frinds Trade focuses on the evolving needs of
                            modern
                            households and ensures best quality Home Appliance at best price in Bangladesh.</p>
                        <h2>Trusted Online Shopping From Bangladesh at The Best E-Commerce Website</h2>
                        <p>Frinds Trade believes the most in customer satisfaction. To meet the surging demand for
                            online
                            shopping from Bangladesh, we launched our <a href="index.html">E-Commerce</a> website. our
                            highly trusted online shop has been regarded as one of the best E-Commerce websites with
                            most
                            visits. Frinds Trade is revolutionizing online shopping in Bangladesh, featuring a brilliant
                            search
                            engine that helps our valued customers find their desired products easily. We have developed
                            the
                            most comprehensive PC Builder App, also integrated into our online retail store. With the PC
                            Builder, you can build your Custom PC for gaming or productivity, save the build, and get an
                            estimated budget, wattage, and detailed performance report. Our E-Commerce platform runs a
                            variety of campaigns and exciting deals on multiple national &amp; international occasions.
                            a
                            few of our most successful events are - Mistery Box, Flash sale, Special offer, Thursday
                            Thunder, Anniversary Special Offer, New Year Offer, 11.11, 12.12 Campaign, and many more. We
                            also arrange special eSports Online Gaming Events and tournaments for Bangladeshi gamers in
                            partnership with renowned <a href="gaming.html">gaming </a>brands like Razer and Asus ROG.
                        </p>
                        <h3>Best Price, Product, After-sales Customer Service, &amp; Fastest Delivery</h3>
                        <p>Frinds Trade Ltd. has taken care of its customers since the beginning. Whether a customer is
                            purchasing or inquiring, our customers get the highest priority. We deliver the best product
                            for
                            the best price with extended after-sales support &amp; the highest standard of customer
                            service.
                            We <a href="information/offer.html">offer </a>your desired product within the fastest
                            delivery
                            timeframe. With our nationwide presence, we cover all 64 districts of Bangladesh. Our
                            distribution hubs are located in Dhaka, Chattogram, Khulna, Rangpur, Gazipur, Rajshahi, and
                            Mymensingh. We also have over 15 dedicated <a
                                href="https://service.startech.com.bd/">service
                                centers</a> and are proud to offer <a
                                href="https://service.startech.com.bd/home-service">computer home service</a> for the
                            first time in Bangladesh. The plan to expand our operations in other cities is already in
                            motion.</p>
                    </div>
                </div>

            </div>
        </di>

        <div class="overlay"></div>
    </body>

    </html>

    <script>
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
    </script>
</x-app>
