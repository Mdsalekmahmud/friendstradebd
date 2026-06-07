<x-app>


<body class="common-home">
   
    <div class="f-btn mc-toggler" id="cart">
        <i class="material-icons">shopping_basket</i>
        <div class="label">Cart</div>
        <span class="counter">0</span>
    </div>
    {{-- <div class="f-btn cmpr-toggler" id="cmpr-btn">
        <i class="material-icons">library_add</i>
        <div class="label">Compare</div>
        <span class="counter">0</span>
    </div> --}}
    <div class="drawer cmpr-panel " id="cmpr-panel">
        <div class="title">
            <p>Compare Product</p>
            <span class="cmpr-toggler"><i class="material-icons">close</i></span>
        </div>
        <div class="content">
            <div class="loader"></div>
        </div>
        <div class="footer btn-wrap"></div>
    </div>

    <div class="drawer m-cart" id="m-cart">
        <div class="title">
            <p>YOUR CART</p>
            <span class="mc-toggler"><i class="material-icons">close</i></span>
        </div>
        <div class="content">
            <div class="loader"></div>
        </div>
        <div class="footer"></div>
    </div>

    <div class="bg-gray content p-tb-30">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-9 d-pr-0">
                    <div class="home-slider" itemscope itemtype="https://schema.org/ItemList">
                        <div class="slide" itemprop="itemListElement" itemscope
                            itemtype="">
                            <a href="information/offer/info9358.html?offer_id=1430" itemprop="url"><img
                                    src="{{ asset('storage/images/banar_images/mainbanar.jpg') }}"
                                    alt="sylhet offer" class="img-responsive" width="982" height="500"
                                    itemprop="contentUrl" /></a>
                            <meta itemprop="position" content="1" />
                            <meta itemprop="name" content="sylhet offer" />
                            <meta itemprop="caption" content="" />
                        </div>
                        <meta itemprop="name" content="Homepage Banners" />
                        <div class="slide" itemprop="itemListElement" itemscope
                            itemtype="">
                            <a href="hp-laptop.html" itemprop="url"><img
                                    src=""
                                    alt="laptop" class="img-responsive" width="982" height="500"
                                    itemprop="contentUrl" /></a>
                            <meta itemprop="position" content="2" />
                            <meta itemprop="name" content="laptop" />
                            <meta itemprop="caption" content="" />
                        </div>
                        <meta itemprop="name" content="Homepage Banners" />
                        <div class="slide" itemprop="itemListElement" itemscope
                            itemtype="">
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
                            <a href=""><img
                                    src="{{ asset('storage/images/banar_images/subbanar.jpg') }}"
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
                <marquee direction="left">Sunday, 07 June, All our branches are open except IDB branch. Additionally,
                    our online activities are Operational. Please check our contact page for the schedule.</marquee>
            </div>
            <div class="row r-lnk-wrap m-home">
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
                <div class="col-lg-3 col-md-6 col-sm-6"><a href="https://service.startech.com.bd/" target="_blank"
                        rel="noopener" class="c-card ws-box">
                        <div class="ic"><i class="material-icons">settings</i></div>
                        <div><span class="blurb">Servicing Center</span>
                            <p class="m-hide">Repair Your Device</p>
                        </div>
                    </a></div>
            </div>
            <div class="m-home m-cat">
                <h2 class="m-header">Featured Category</h2>
                <p class="m-blurb">Get Your Desired Product from Featured Category!</p>
                <div class="cat-items-wrap">
                    <div class="cat-item">
                        <a href="air-conditioner.html" class="cat-item-inner">
                            <span class="cat-icon"><img src="{{asset('storage/images/category-thumb/ac-48x48.png')}}"
                                    alt="AC Icon" width="48" height="48"></span>
                            <p>AC</p>
                        </a>
                    </div>
                    <div class="cat-item">
                        <a href="portable-power-station.html" class="cat-item-inner">
                            <span class="cat-icon"><img
                                    src="{{asset('storage/images/category-thumb/powerstation-48x48.png')}}"
                                    alt="Portable Power Station Icon" width="48" height="48"></span>
                            <p>Portable Power Station</p>
                        </a>
                    </div>
                    <div class="cat-item">
                        <a href="air-fryer.html" class="cat-item-inner">
                            <span class="cat-icon"><img src="{{asset('storage/images/category-thumb/air-fryer-48x48.png')}}"
                                    alt="Air Fryer Icon" width="48" height="48"></span>
                            <p>Air Fryer</p>
                        </a>
                    </div>
                    <div class="cat-item">
                        <a href="drone.html" class="cat-item-inner">
                            <span class="cat-icon"><img src="{{asset('storage/images/category-thumb/drone-48x48.png')}}"
                                    alt="Drone Icon" width="48" height="48"></span>
                            <p>Drone</p>
                        </a>
                    </div>
                    <div class="cat-item">
                        <a href="gimbal.html" class="cat-item-inner">
                            <span class="cat-icon"><img src="{{asset('storage/images/category-thumb/gimbal-48x48.png')}}"
                                    alt="Gimbal Icon" width="48" height="48"></span>
                            <p>Gimbal</p>
                        </a>
                    </div>
                    <div class="cat-item">
                        <a href="tablet-pc.html" class="cat-item-inner">
                            <span class="cat-icon"><img src="{{asset('storage/images/category-thumb/tablet-48x48.png')}}"
                                    alt="Table PC Icon" width="48" height="48"></span>
                            <p>Table PC</p>
                        </a>
                    </div>
                    <div class="cat-item">
                        <a href="television-startech.html" class="cat-item-inner">
                            <span class="cat-icon"><img src="{{asset('storage/images/category-thumb/tv-48x48.png')}}"
                                    alt="TV Icon" width="48" height="48"></span>
                            <p>TV</p>
                        </a>
                    </div>
                    <div class="cat-item">
                        <a href="refrigerator.html" class="cat-item-inner">
                            <span class="cat-icon"><img
                                    src="{{asset('storage/images/category-thumb/refrigerator-48x48.png')}}"
                                    alt="Fridge Icon" width="48" height="48"></span>
                            <p>Fridge</p>
                        </a>
                    </div>
                    <div class="cat-item">
                        <a href="mobile-phone.html" class="cat-item-inner">
                            <span class="cat-icon"><img
                                    src="{{asset('storage/images/category-thumb/mobile-phone-48x48.png')}}"
                                    alt="Mobile Phone Icon" width="48" height="48"></span>
                            <p>Mobile Phone</p>
                        </a>
                    </div>
                    <div class="cat-item">
                        <a href="mobile-phone-accessories.html" class="cat-item-inner">
                            <span class="cat-icon"><img
                                    src="{{asset('storage/images/category-thumb/mobile-phone-accessories-48x48.png')}}"
                                    alt="Mobile Accessories Icon" width="48" height="48"></span>
                            <p>Mobile Accessories</p>
                        </a>
                    </div>
                    <div class="cat-item">
                        <a href="portable-ssd.html" class="cat-item-inner">
                            <span class="cat-icon"><img
                                    src="{{asset('storage/images/category-thumb/portable-ssd-48x48.png')}}"
                                    alt="Portable SSD Icon" width="48" height="48"></span>
                            <p>Portable SSD</p>
                        </a>
                    </div>
                    <div class="cat-item">
                        <a href="wifi-camera.html" class="cat-item-inner">
                            <span class="cat-icon"><img
                                    src="{{asset('storage/images/category-thumb/portable-ip-camera-48x48.png')}}"
                                    alt="WiFi Camera Icon" width="48" height="48"></span>
                            <p>WiFi Camera</p>
                        </a>
                    </div>
                    <div class="cat-item">
                        <a href="trimmer.html" class="cat-item-inner">
                            <span class="cat-icon"><img src="{{asset('storage/images/category-thumb/trimmer-48x48.png')}}"
                                    alt="Trimmer Icon" width="48" height="48"></span>
                            <p>Trimmer</p>
                        </a>
                    </div>
                    <div class="cat-item">
                        <a href="gadget/smart-watch.html" class="cat-item-inner">
                            <span class="cat-icon"><img
                                    src="{{asset('storage/images/category-thumb/smart-watch-48x48.png')}}"
                                    alt="Smart Watch Icon" width="48" height="48"></span>
                            <p>Smart Watch</p>
                        </a>
                    </div>
                    <div class="cat-item">
                        <a href="earbuds.html" class="cat-item-inner">
                            <span class="cat-icon"><img src="{{asset('storage/images/category-thumb/earbuds-48x48.png')}}"
                                    alt="Earbuds Icon" width="48" height="48"></span>
                            <p>Earbuds</p>
                        </a>
                    </div>
                    <div class="cat-item">
                        <a href="gaming-console.html" class="cat-item-inner">
                            <span class="cat-icon"><img
                                    src="{{asset('storage/images/category-thumb/gaming-console-48x48.png')}}"
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
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Save: 21,707৳ (-26%)</span>
                            </div>
                            <div class="p-item-img"> <a href="singer-1-5-ton-inverter-ac.html"><img
                                        src="image/cache/catalog/air-conditioner/singer/sas18cexr32lvsgrihco/sas18cexr32lvsgrihco-official-01-200x200.webp"
                                        alt="SINGER 1.5 Ton Inverter AC" width="228" height="228" /></a>
                            </div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a href="singer-1-5-ton-inverter-ac.html">SINGER 1.5 Ton
                                        Inverter AC</a></h4>
                                <div class="p-item-price">
                                    <span class="price-new">61,783৳</span> <span class="price-old">83,490৳</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Save: 2,250৳ (-8%)</span>
                            </div>
                            <div class="p-item-img"> <a href="ecoflow-river-3-portable-power-station.html"><img
                                        src="image/cache/catalog/portable-power-station/ecoflow/river-3/river-3-005-200x200.webp"
                                        alt="EcoFlow River 3 Portable Power Station" width="228"
                                        height="228" /></a></div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a
                                        href="ecoflow-river-3-portable-power-station.html">EcoFlow River 3 Portable
                                        Power Station</a></h4>
                                <div class="p-item-price">
                                    <span class="price-new">27,250৳</span> <span class="price-old">29,500৳</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Earn Point: 400</span>
                            </div>
                            <div class="p-item-img"> <a href="starlink-standard-4-x.html"><img
                                        src="image/cache/catalog/starlink/starlink-standard/starlink-standard-001-200x200.webp"
                                        alt="Starlink Standard 4 X Kit" width="228" height="228" /></a></div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a href="starlink-standard-4-x.html">Starlink Standard 4 X
                                        Kit</a></h4>
                                <div class="p-item-price">
                                    49,500৳ </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Earn Point: 180</span>
                            </div>
                            <div class="p-item-img"> <a href="xtrike-me-gc-907-rgb-gaming-chair.html"><img
                                        src="image/cache/catalog/gaming-chair/xtrike-me/gc-907/gc-907-01-200x200.webp"
                                        alt="Xtrike Me GC-907 RGB Gaming Chair" width="228"
                                        height="228" /></a></div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a href="xtrike-me-gc-907-rgb-gaming-chair.html">Xtrike Me
                                        GC-907 RGB Gaming Chair</a></h4>
                                <div class="p-item-price">
                                    23,500৳ </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Save: 4,500৳ (-7%)</span>
                            </div>
                            <div class="p-item-img"> <a href="msi-bz09-brand-pc.html"><img
                                        src="image/cache/catalog/brand-pc/msi/barebone-bz09/barebone-bz09-01-200x200.webp"
                                        alt="MSI BZ09 Core i5-14400 H610M DDR4 Mini Tower PC With MAG A500N-H Power Supply"
                                        width="228" height="228" /></a></div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a href="msi-bz09-brand-pc.html">MSI BZ09 Core i5-14400
                                        H610M DDR4 Mini Tower PC With MAG A500N-H Power Supply</a></h4>
                                <div class="p-item-price">
                                    <span class="price-new">56,500৳</span> <span class="price-old">61,000৳</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Save: 1,200৳ (-4%)</span>
                            </div>
                            <div class="p-item-img"> <a href="amd-ryzen-3-2200g-desktop-pc.html"><img
                                        src="image/cache/catalog/desktop-pc/desktop-offer/47054-200x200.webp"
                                        alt="AMD Ryzen 3 2200G Desktop PC" width="228" height="228" /></a>
                            </div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a href="amd-ryzen-3-2200g-desktop-pc.html">AMD Ryzen 3
                                        2200G Desktop PC</a></h4>
                                <div class="p-item-price">
                                    <span class="price-new">28,800৳</span> <span class="price-old">30,000৳</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Save: 1,049৳ (-6%)</span>
                            </div>
                            <div class="p-item-img"> <a href="singer-srsm-sm024-electric-sewing-machine.html"><img
                                        src="image/cache/catalog/sewing-machine/singer/sm024/sm024-01-200x200.jpg"
                                        alt="SINGER SRSM-SM024 Electric Sewing Machine" width="228"
                                        height="228" /></a></div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a
                                        href="singer-srsm-sm024-electric-sewing-machine.html">SINGER SRSM-SM024
                                        Electric Sewing Machine</a></h4>
                                <div class="p-item-price">
                                    <span class="price-new">16,441৳</span> <span class="price-old">17,490৳</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Save: 5,800৳ (-17%)</span>
                            </div>
                            <div class="p-item-img"> <a href="aoc-cs25g-gaming-monitor.html"><img
                                        src="image/cache/catalog/monitor/aoc/cs25g/cs25g-02-200x200.webp"
                                        alt="AOC CS25G 24.5&quot; FHD 310Hz Fast IPS CS mode Gaming Monitor "
                                        width="228" height="228" /></a></div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a href="aoc-cs25g-gaming-monitor.html">AOC CS25G
                                        24.5&quot; FHD 310Hz Fast IPS CS mode Gaming Monitor </a></h4>
                                <div class="p-item-price">
                                    <span class="price-new">28,200৳</span> <span class="price-old">34,000৳</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Save: 15,100৳ (-18%)</span>
                            </div>
                            <div class="p-item-img"> <a
                                    href="aoc-agon-pro-ag276fk-27-inch-520hz-fhd-gaming-monitor.html"><img
                                        src="image/cache/catalog/monitor/aoc/agon-pro-ag276fk/agon-pro-ag276fk-01-200x200.webp"
                                        alt="AOC AGON PRO AG276FK 27&quot; 520Hz FHD Fast IPS Gaming Monitor"
                                        width="228" height="228" /></a></div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a
                                        href="aoc-agon-pro-ag276fk-27-inch-520hz-fhd-gaming-monitor.html">AOC AGON PRO
                                        AG276FK 27&quot; 520Hz FHD Fast IPS Gaming Monitor</a></h4>
                                <div class="p-item-price">
                                    <span class="price-new">69,900৳</span> <span class="price-old">85,000৳</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Save: 40,100৳ (-26%)</span>
                            </div>
                            <div class="p-item-img"> <a
                                    href="aoc-agon-pro-ag276qkd-26-5-inch-480hz-qhd-oled-gaming-monitor.html"><img
                                        src="image/cache/catalog/monitor/aoc/agon-pro-ag276qkd/agon-pro-ag276qkd-001-200x200.webp"
                                        alt="AOC AGON PRO AG276QKD 26.5&quot; 480Hz QHD OLED Gaming Monitor"
                                        width="228" height="228" /></a></div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a
                                        href="aoc-agon-pro-ag276qkd-26-5-inch-480hz-qhd-oled-gaming-monitor.html">AOC
                                        AGON PRO AG276QKD 26.5&quot; 480Hz QHD OLED Gaming Monitor</a></h4>
                                <div class="p-item-price">
                                    <span class="price-new">114,900৳</span> <span class="price-old">155,000৳</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Save: 3,000৳ (-19%)</span> <span class="mark">Gift: Projector
                                    Tripod</span>
                            </div>
                            <div class="p-item-img"> <a href="xinji-px1-portable-projector.html"><img
                                        src="image/cache/catalog/projector/xinji/px1/px1-06-200x200.webp"
                                        alt="XINJI PX1 100 ANSI Lumens LCD Portable Projector With Android OS"
                                        width="228" height="228" /></a></div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a href="xinji-px1-portable-projector.html">XINJI PX1 100
                                        ANSI Lumens LCD Portable Projector With Android OS</a></h4>
                                <div class="p-item-price">
                                    <span class="price-new">13,000৳</span> <span class="price-old">16,000৳</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Earn Point: 500</span>
                            </div>
                            <div class="p-item-img"> <a
                                    href="lenovo-yoga-7-2-in-1-14akp10-ryzen-ai-7-350-laptop-tidal-teal.html"><img
                                        src="image/cache/catalog/laptop/lenovo/yoga-7-2-in-1-14akp10/yoga-7-2-in-1-14akp10-tidal-teal-01-200x200.webp"
                                        alt="Lenovo Yoga 7 2-in-1 14AKP10 Ryzen AI 7 350 14&quot; WUXGA Touch OLED Laptop"
                                        width="228" height="228" /></a></div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a
                                        href="lenovo-yoga-7-2-in-1-14akp10-ryzen-ai-7-350-laptop-tidal-teal.html">Lenovo
                                        Yoga 7 2-in-1 14AKP10 Ryzen AI 7 350 14&quot; WUXGA Touch OLED Laptop</a></h4>
                                <div class="p-item-price">
                                    175,000৳ </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Earn Point: 500</span>
                            </div>
                            <div class="p-item-img"> <a href="msi-thin-a15-b7uc-ryzen-5-7535hs-laptop.html"><img
                                        src="image/cache/catalog/laptop/msi/thin-15-b13ve/thin-15-b13vethin-15-b13ve-01-200x200.webp"
                                        alt="MSI Thin A15 B7UC Ryzen 5 7535HS RTX 3050 4GB GDDR6 Graphics 15.6&quot; FHD Gaming Laptop"
                                        width="228" height="228" /></a></div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a href="msi-thin-a15-b7uc-ryzen-5-7535hs-laptop.html">MSI
                                        Thin A15 B7UC Ryzen 5 7535HS RTX 3050 4GB GDDR6 Graphics 15.6&quot; FHD Gaming
                                        Laptop</a></h4>
                                <div class="p-item-price">
                                    105,000৳ </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Save: 6,000৳ (-13%)</span>
                            </div>
                            <div class="p-item-img"> <a href="asus-nuc-13-pro-core-i3-13th-gen-mini-pc.html"><img
                                        src="image/cache/catalog/mini-pc/asus/nuc-13-pro/asus-nuc-13-pro-1-200x200.webp"
                                        alt="Asus NUC 13 Pro Core i3 13th Gen Portable Mini Pc" width="228"
                                        height="228" /></a></div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a
                                        href="asus-nuc-13-pro-core-i3-13th-gen-mini-pc.html">Asus NUC 13 Pro Core i3
                                        13th Gen Portable Mini Pc</a></h4>
                                <div class="p-item-price">
                                    <span class="price-new">40,500৳</span> <span class="price-old">46,500৳</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Earn Point: 450</span>
                            </div>
                            <div class="p-item-img"> <a href="msi-stealth-a16-ai-plus-a3xwjg-laptop.html"><img
                                        src="image/cache/catalog/laptop/msi/stealth-a16-ai-a3xwjg/stealth-a16-ai-a3xwjg-02-200x200.webp"
                                        alt="MSI Stealth A16 AI+ A3XWJG Ryzen AI 9 HX 370 RTX 5090 24GB Graphics 16” QHD+ 240Hz OLED Gaming Laptop Copilot+PC"
                                        width="228" height="228" /></a></div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a href="msi-stealth-a16-ai-plus-a3xwjg-laptop.html">MSI
                                        Stealth A16 AI+ A3XWJG Ryzen AI 9 HX 370 RTX 5090 24GB Graphics 16” QHD+ 240Hz
                                        OLED Gaming Laptop Copilot+PC</a></h4>
                                <div class="p-item-price">
                                    620,000৳ </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Save: 4,886৳ (-14%)</span>
                            </div>
                            <div class="p-item-img"> <a href="haier-hwm80-316s6-washing-machine.html"><img
                                        src="image/cache/catalog/washing-machine/haier/hwm80-316s6/hwm80-316s6-04-200x200.webp"
                                        alt="Haier 8 KG Top Load Washing Machine (HWM80-316S6)" width="228"
                                        height="228" /></a></div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a href="haier-hwm80-316s6-washing-machine.html">Haier 8 KG
                                        Top Load Washing Machine (HWM80-316S6)</a></h4>
                                <div class="p-item-price">
                                    <span class="price-new">30,014৳</span> <span class="price-old">34,900৳</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Save: 23,000৳ (-16%)</span>
                            </div>
                            <div class="p-item-img"> <a href="dji-mini-5-pro-fly-more-combo-plus.html"><img
                                        src="image/cache/catalog/drones/dji/mini-5-pro/mini-5-pro-01-200x200.webp"
                                        alt="DJI Mini 5 Pro Fly More Combo Plus With RC2" width="228"
                                        height="228" /></a></div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a href="dji-mini-5-pro-fly-more-combo-plus.html">DJI Mini
                                        5 Pro Fly More Combo Plus With RC2</a></h4>
                                <div class="p-item-price">
                                    <span class="price-new">117,000৳</span> <span class="price-old">140,000৳</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Save: 309৳ (-24%)</span>
                            </div>
                            <div class="p-item-img"> <a href="xinji-stone-mini-earbuds.html"><img
                                        src="image/cache/catalog/earbuds/xinji/stone-mini/stone-mini-black-02-200x200.webp"
                                        alt="XINJI Stone Mini True Wireless Earbuds" width="228"
                                        height="228" /></a></div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a href="xinji-stone-mini-earbuds.html">XINJI Stone Mini
                                        True Wireless Earbuds</a></h4>
                                <div class="p-item-price">
                                    <span class="price-new">990৳</span> <span class="price-old">1,299৳</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Save: 10,010৳ (-11%)</span>
                            </div>
                            <div class="p-item-img"> <a
                                    href="sony-playstation-5-analog-console-slim-edition.html"><img
                                        src="image/cache/catalog/gaming-console/playstation/playstation-5-analog-console-slim-edition/playstation-5-analog-console-slim-edition-01-200x200.webp"
                                        alt="Sony PlayStation 5 Slim Gaming Console" width="228"
                                        height="228" /></a></div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a
                                        href="sony-playstation-5-analog-console-slim-edition.html">Sony PlayStation 5
                                        Slim Gaming Console</a></h4>
                                <div class="p-item-price">
                                    <span class="price-new">84,990৳</span> <span class="price-old">95,000৳</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Save: 4,000৳ (-4%)</span>
                            </div>
                            <div class="p-item-img"> <a href="apollo-ap-800s-money-counting-machine.html"><img
                                        src="image/cache/catalog/money-counter/jb-2000s/jb-2000s-01-200x200.webp"
                                        alt="APOLLO AP-800S Money Counting Machine" width="228"
                                        height="228" /></a></div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a href="apollo-ap-800s-money-counting-machine.html">APOLLO
                                        AP-800S Money Counting Machine</a></h4>
                                <div class="p-item-price">
                                    <span class="price-new">108,000৳</span> <span class="price-old">112,000৳</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-home seo-content m-html">
                <h1>Leading Computer, Laptop &amp; Gaming PC Retail &amp; Online Shop in Bangladesh</h1>
                <div>
                    <p>Technology has become a part of our daily lives, and we depend on tech products daily for a vast
                        portion of our lives. There is hardly a home in Bangladesh without a tech product. This is where
                        we come in. <a href="index.html">Frinds Trade Ltd.</a> started as a Tech Product Shop in March
                        2007. We focus on giving the best customer service in Bangladesh, following our motto of
                        <strong>“Customer Comes First.”</strong> This is why Frinds Trade is the most <strong>trusted
                            computer shop in Bangladesh</strong> today, capturing the loyalty of a large customer base.
                        After a long 16-year journey, Frinds Trade Ltd. was certified with the renowned "ISO 9001:2015
                        certification" as a recognition for the best Quality Control Management System. As an
                        <strong>ISO-certified organization</strong>, Frinds Trade Ltd. is now up to the international
                        standards that specify a Quality Management System (QMS). This Certification denotes that the
                        organization strictly maintains all sorts of regulatory requirements to provide customers with
                        products and services of a global standard.
                    </p>
                    <h2>Best Laptop Shop in Bangladesh</h2>
                    <p>Frinds Trade is the most popular <a href="laptop-notebook/laptop.html">Laptop Brand Shop in
                            BD</a>. Frinds Trade <a href="laptop-notebook/laptop.html">Laptop</a> Shop has the perfect
                        device, whether you are a freelancer, officegoer, or student. Gamers love our collection of <a
                            href="laptop-notebook/Gaming-Laptop.html">Gaming Laptops</a> because we always bring the
                        latest laptops in Bangladesh. As the best laptop shop in BD, a customer’s budget is our first
                        concern. We bring the latest Intel Laptop and AMD Laptop under budget for every customer - from
                        starters to expert users. Frinds Trade is considered the most trusted laptop shop in BD, allowing
                        you to buy the best laptops from top laptop brands in the world. Along with the best laptop
                        brands, our experts provide you with the best buying decisions based on your needs and budget -
                        making Frinds Trade the trusted and most popular laptop shop in Bangladesh. Frinds Trade lets you buy
                        an official Apple <a href="apple-macbook.html">MacBook</a> Air or MacBook Pro from <a
                            href="apple.html">Apple Store in Bangladesh.</a> Frinds Trade sells the latest models of the
                        most popular laptop brands, such as - <a href="laptop-notebook/laptop.html">Razer</a>, <a
                            href="hp-laptop.html">HP</a>, Dell, <a href="apple-macbook.html">Apple MacBook</a>, <a
                            href="asus-laptop.html">Asus</a>, <a href="acer-laptop.html">Acer</a>, <a
                            href="lenovo-laptop.html">Lenovo</a>, <a href="microsoft-surface-laptop.html">Microsoft
                            Surface</a>, MSI, Gigabyte, <a href="laptop-notebook/laptop.html">Infinix</a>, <a
                            href="walton-laptop.html">Walton</a>, Xiaomi MI, Huawei, Chuwi, etc.</p>
                    <h2>Best Desktop PC Shop In Bangladesh</h2>
                    <p><a href="index.html">Frinds Trade</a> has the most comprehensive array of <a
                            href="desktops.html">Desktop PCs</a>. We offer top-of-the-line Custom PC, <a
                            href="desktops/brand-pc.html">Brand PC</a>, All-in-One PC, and <a
                            href="desktops/portable-mini-pc.html">Portable Mini PC</a> at Frinds Trade outlets, the
                        trusted and most popular Desktop PC shop in Bangladesh, which are spread nationwide. Get your
                        new iMac Desktop or <a href="apple-mac-mini.html">Apple Mac Mini</a> with an international
                        warranty and servicing plan. You can always depend on the Frinds Trade PC shop experts to build the
                        best desktop PC or computer with parts of your choice. Frinds Trade is Bangladesh's most reliable
                        repair shop for PC, laptops, &amp; other consumer electronics. Take your gaming or professional
                        content creation to the next level with a large collection of high-end Gaming PC and Editing PC
                        from Frinds Trade. You can build a complete personal computer with the best desktop PC parts picked
                        by you with our <a href="tool/pc_builder.html">PC Builder</a> feature. The features let you <a
                            href="tool/pc_builder.html">pick PC parts</a> to buy the best desktop PC anytime. Or, you
                        can visit any Frinds Trade custom PC shop near you to build the best Desktop PC according to your
                        taste, live, and in front of you.</p>
                    <h2>Best Gaming PC Shop In Bangladesh</h2>
                    <p>We at Frinds Trade love gaming. Therefore, we aim to provide a holistic gaming experience with our
                        best gaming PC shop in Bangladesh, “Star Tech Rig House.” The Rig House is a specialized shop
                        for PC builds with high-end PC components. Frinds Trade Rig House is highly decorated with the best
                        gaming PC parts for customers to build online Gaming or editing PC. Our gaming PC shop in
                        Bangladesh offers the broadest range of Gaming PC, Gaming Laptops, and <a
                            href="gaming-console.html">Game Consoles</a> from XBOX &amp; PlayStation. Star Tech’s
                        largest Gaming PC shop consists of Gaming Motherboards, Liquid Coolers, Custom Water Cooling for
                        PC, Gaming Casings, high-performance RAM Kits, Graphics Cards, etc. Our exceptional Gaming
                        accessories cover Gaming Chairs, Gaming Sofas, RGB Mousepads, Gaming Headphones, Headphone
                        Stands, RGB Gaming PC Light-Strips and many more. We have strategic partnerships with many
                        world-renowned computer Gaming brands like Razer, PNY, ASRock, Asus, Zadak, GALAX, Noctua,
                        Antec, Lian Li, CRYORIG, EKWB, Gamdias, KWG, XFX, etc. Our gaming concern extends to leading
                        gaming brands, including A4Tech Bloody, SteelSeries, Logitech, Corsair, Redragon, Cooler Master,
                        Fantech, DeepCool, Cougar, Gigabyte &amp; Elgato products at our exclusive Gaming PC Shop.</p>
                    <h2>Best Office Equipment Shop In Bangladesh</h2>
                    <p>Frinds Trade Ltd. is Bangladesh's most trusted <a href="office-equipment.html">Office Equipment
                        </a>Shop. For more than 18 years, we have been providing the best Office Solution. Take a quick
                        drive to the nearest Frinds Trade retail center and furnish your home office, Start-up business
                        desk, or corporate space with the best <a href="office-equipment.html">Office Equipment</a>
                        and office supplies. <a href="tool/finder.html">Find Laptops</a>, Desktops, Antiviruses, CCTV
                        &amp; IP Cameras, Printers, Routers, Photocopiers, Attendance Machines, Scanners, Conference
                        Systems, Server Equipment, etc for smooth office operation.</p>
                    <h2>Largest Gadget Shop In Bangladesh</h2>
                    <p>We bring in the most sought-after&nbsp;<a href="gadget.html">gadgets </a>at Frinds Trade. Only
                        genuine and leading brands of <a href="gadget/smart-watch.html">Smart Watch</a>, <a
                            href="earbuds.html">Earbuds</a>, <a href="television-startech.html">TV</a>, <a
                            href="power-bank.html">Power Bank</a>, and Mobile Phone Accessories are available at our
                        Gadget Shop. We are also concerned for creative professionals for whom we bring exciting gadgets
                        like Drones, Studio Equipment, <a href="dslr-camera.html">DSLR Camera</a>, <a
                            href="gimbal.html">Gimbals </a>&amp; Stream Decks from internationally reputed brands like
                        DJI, Blackmagic, Corsair, Zhiyun, Gudsen, and Loupedeck. Frinds Trade has established the largest
                        gadget shop in BD with the help of an app &amp; E-commerce website. Ease up your chores with
                        Daily Lifestyle gadgets from our gadget shop. Xiaomi, Anker, Micropack, Vention, Fire-Boltt,
                        UGREEN, OnePlus, Apple, Baseus, Orico, Havit, Samsung, and HOCO are a few of the brands we
                        cover.</p>
                    <h2>Top Mobile Shop in Bangladesh</h2>
                    <p>Frinds Trade <a href="mobile-phone.html">mobile phone</a> shop offers the latest smartphones and
                        <a href="feature-phone.html">feature phones</a> from top mobile brands. <a
                            href="samsung-mobile-phone.html">Samsung</a>, Motorola, Google Pixel, <a
                            href="vivo-mobile-phone.html">Vivo</a>, Huawei, Xiaomi, <a
                            href="oppo-mobile-phone.html">OPPO</a>, Mi, Realme, and <a
                            href="oneplus-mobile-phone.html">OnePlus</a> are among the Android smartphone brands at
                        our mobile shop. Frinds Trade is a one-stop solution for buying <a
                            href="apple-iphone.html">iPhones</a> in Bangladesh. Frinds Trade is also your go-to
                        destination for buying the latest Android tablets and <a href="apple-ipad.html">iPads</a> in
                        Bangladesh. Offering extensive warranty, EMI &amp; home delivery service spanning the country,
                        we are the top <a href="mobile-phone.html">mobile</a> shop in Bangladesh, presenting the best
                        online shop for mobile phones. Our mobile phone shop has an extensive collection of <a
                            href="mobile-phone-accessories.html">mobile phone accessories</a>, including chargers, USB
                        Type-C Cables, Power Banks, Wireless Chargers, and many more to go with your smartphone.
                    </p>
                    <h2>Best Home Appliance Shop in Bangladesh</h2>
                    <p>Frinds Trade is a popular home appliance shop in Bangladesh with a variety of top-quality home
                        appliances including <a href="air-conditioner.html">air conditioners</a>, <a
                            href="washing-machine.html">washing machines</a>, <a href="oven.html">ovens</a>,
                        refrigerators, <a href="geyser-water-heater.html">geysers</a>, vacuum cleaners, <a
                            href="sewing-machine.html">sewing machines</a>, <a href="room-heater.html">electric room
                            heaters</a>, and more. Frinds Trade offers home appliances from renowned brands like Samsung,
                        LG, Hitachi, Whirlpool, Singer, Haier, <a href="walton-ac.html">Walton</a>, and so on. To
                        assist customers in selecting the appropriate air conditioner, Frinds Trade has an <a
                            href="tool/btu_calculator.html">AC Ton Calculator</a>, helping determine the ideal AC
                        capacity based on room size and other factors. Frinds Trade focuses on the evolving needs of modern
                        households and ensures best quality Home Appliance at best price in Bangladesh.</p>
                    <h2>Trusted Online Shopping From Bangladesh at The Best E-Commerce Website</h2>
                    <p>Frinds Trade believes the most in customer satisfaction. To meet the surging demand for online
                        shopping from Bangladesh, we launched our <a href="index.html">E-Commerce</a> website. our
                        highly trusted online shop has been regarded as one of the best E-Commerce websites with most
                        visits. Frinds Trade is revolutionizing online shopping in Bangladesh, featuring a brilliant search
                        engine that helps our valued customers find their desired products easily. We have developed the
                        most comprehensive PC Builder App, also integrated into our online retail store. With the PC
                        Builder, you can build your Custom PC for gaming or productivity, save the build, and get an
                        estimated budget, wattage, and detailed performance report. Our E-Commerce platform runs a
                        variety of campaigns and exciting deals on multiple national &amp; international occasions. a
                        few of our most successful events are - Mistery Box, Flash sale, Special offer, Thursday
                        Thunder, Anniversary Special Offer, New Year Offer, 11.11, 12.12 Campaign, and many more. We
                        also arrange special eSports Online Gaming Events and tournaments for Bangladeshi gamers in
                        partnership with renowned <a href="gaming.html">gaming </a>brands like Razer and Asus ROG.</p>
                    <h3>Best Price, Product, After-sales Customer Service, &amp; Fastest Delivery</h3>
                    <p>Frinds Trade Ltd. has taken care of its customers since the beginning. Whether a customer is
                        purchasing or inquiring, our customers get the highest priority. We deliver the best product for
                        the best price with extended after-sales support &amp; the highest standard of customer service.
                        We <a href="information/offer.html">offer </a>your desired product within the fastest delivery
                        timeframe. With our nationwide presence, we cover all 64 districts of Bangladesh. Our
                        distribution hubs are located in Dhaka, Chattogram, Khulna, Rangpur, Gazipur, Rajshahi, and
                        Mymensingh. We also have over 15 dedicated <a href="https://service.startech.com.bd/">service
                            centers</a> and are proud to offer <a
                            href="https://service.startech.com.bd/home-service">computer home service</a> for the
                        first time in Bangladesh. The plan to expand our operations in other cities is already in
                        motion.</p>
                </div>
            </div>
            {{-- <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "name": "Frinds Trade Ltd.",
      "legalName": "Frinds Trade Ltd.",
      "url": "https://www.startech.com.bd/",
      "logo": "https://www.startech.com.bd/image/catalog/site-logo.png",
      "description": "Frinds Trade Ltd. is the leading technology retail and online shop in Bangladesh, offering a wide range of electronics and IT products including computers, laptops, gaming PC, mobile phones, gadgets, and accessories .",
      "foundingDate": "2007",
      "founders": [
        {
          "@type": "Person",
          "name": "Md Rashed Ali Bhuyian"
        },
        {
          "@type": "Person",
          "name": "Mohammad Jahed Ali Bhuyian"
        },
        {
          "@type": "Person",
          "name": "Mazharul Alam"
        },
        {
          "@type": "Person",
          "name": "Mahabub Alam Rakib"
        }
      ],
      "slogan": "Customer Comes First.",
      "email": "webteam@startechbd.com",
      "telephone": "+8809678002003",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Dhaka",
        "addressRegion": "BD",
        "postalCode": "1000",
        "streetAddress": "28 Kazi Nazrul Islam Ave, Navana Zohura Square"
      },
      "hasCertification": {
        "@type": "Certification",
        "name": "ISO 9001:2015 Certification",
        "issuedBy": {
          "@type": "Organization",
          "name": "International Organization for Standardization (ISO)"
        }
      },
      "sameAs": [
        "https://www.facebook.com/star.tech.ltd",
        "https://linkedin.com/company/startech-com-bd",
        "https://instagram.com/startech.com.bd/",
        "https://www.youtube.com/@StarTechLtd",
        "https://www.tiktok.com/@startech.com.bd",
        "https://www.pinterest.com/startechbd/",
        "https://twitter.com/startechbd"
      ],
      "keywords": "Frinds Trade, Computer Shop in Bangladesh, Laptop Shop in Bangladesh, Mobile Shop in Bangladesh, PC Accessories, Gaming PC",
      "mainEntityOfPage": "https://www.startech.com.bd/about_us",
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "telephone": "+8809678002003",
          "contactType": "Customer Support",
          "email": "webteam@startechbd.com",
          "areaServed": "BD",
          "availableLanguage": "en"
        }
      ]
    },
    {
      "@type": "OnlineStore",
      "name": "Frinds Trade Online Store",
      "url": "https://www.startech.com.bd/",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://www.startech.com.bd/product/search?q={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },
    {
      "@type": "WebSite",
      "url": "https://www.startech.com.bd/",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://www.startech.com.bd/product/search?q={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
  ]
}</script> --}}
        </div>
    </div>
   
    <div class="overlay"></div>
</body>
<!-- Mirrored from www.startech.com.bd/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jun 2026 14:36:32 GMT -->

</html>
</x-app>
