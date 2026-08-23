<x-app :breadcrumbs="$breadcrumbs">
   
    <div class="container">
        <div class="basic row">
            <div class="col-md-5 left">
                <div class="images product-images">
                    <div class="product-img-holder">
                        <a class="thumbnail" href="{{ $primaryImageUrl }}" title="{{ $product->name }}">
                            <img class="main-img" src="{{ $primaryImageUrl }}" title="{{ $product->name }}"
                                alt="{{ $product->name }}" width="500" height="500">
                        </a>
                    </div>

                    <ul class="thumbnails">
                        @foreach ($product->images as $image)
                            @php
                                $imgPath = $image->image;

                                $imgUrl = str_starts_with($imgPath, 'storage/')
                                    ? asset($imgPath)
                                    : asset('storage/' . $imgPath);
                            @endphp

                            <li>
                                <a class="thumbnail" href="{{ $imgUrl }}" title="{{ $product->name }}">
                                    <img src="{{ $imgUrl }}" title="{{ $product->name }}"
                                        alt="{{ $product->name }}" width="74" height="74">
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>


            <div class="col-md-7 right" id="product">
                <div class="pd-summary">
                    <div class="product-short-info">
                        <h1 itemprop="name" class="product-name">{{ $product->name }}</h1>
                        <table class="product-info-table">
                            <tbody>
                                <tr class="product-info-group">
                                    <td class="product-info-label">Price</td>
                                    <td class="product-info-data product-price">
                                        {{ number_format($product->price, 0, '', ',') }}৳</td>
                                </tr>
                                <tr class="product-info-group">
                                    <td class="product-info-label">Regular Price</td>
                                    <td class="product-info-data product-regular-price">
                                        {{ number_format($product->regular_price, 0, '', ',') }}৳</td>
                                </tr>
                                <tr class="product-info-group">
                                    <td class="product-info-label">Status</td>
                                    <td class="product-info-data product-status">In Stock</td>
                                </tr>
                                <tr class="product-info-group">
                                    <td class="product-info-label">Product Code</td>
                                    <td class="product-info-data product-code">45373</td>
                                </tr>
                                <tr class="product-info-group" itemprop="brand" itemtype="http://schema.org/Thing"
                                    itemscope="">
                                    <td class="product-info-label">Brand</td>
                                    <td class="product-info-data product-brand" itemprop="name">
                                        {{ $product->brand?->name ?? 'Brand' }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="short-description" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                        <link itemprop="availability" href="http://schema.org/InStock">
                        <link itemprop="itemCondition" href="http://schema.org/NewCondition">
                        <meta itemprop="priceCurrency" content="BDT">
                        <meta itemprop="price" content="1060.0000">
                        @php
                            $features = preg_split('/\r\n|\r|\n/', trim((string) $product->features));
                        @endphp
                        <h2>Key Features</h2>
                        <ul>
                            @foreach (array_slice($features, 0, 9) as $feature)
                                @if (trim($feature))
                                    <li>{{ trim($feature) }}</li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="stickers">

                        <div class="sticker reward">
                            <span class="material-icons">stars</span>
                            <span class="points">15</span>
                            <span class="text">Star Points</span>
                        </div>
                    </div>
                    <div class="p-opt-wrap">
                        <div class="p-opt required">
                            @foreach ($product->variations as $variation)
                                <div class="p-opt-lbl" id="input-option{{ $variation->attribute?->id ?? $variation->id }}">
                                    {{ $variation->attribute?->name ?? '' }}: <b></b>
                                </div>
                                <div class="p-opt-vals">
                                    @foreach ($variation->attributeValues as $attributeValue)
                                        <label>
                                            <input class="hide" type="radio"
                                                value="{{ $attributeValue->id }}"
                                                name="option[{{ $variation->attribute->id }}]"
                                                title="{{ $attributeValue->value }}">
                                            <span>{{ $attributeValue->value }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- <h2>Payment Options</h2>
                    <div class="product-price-options">
                        <label class="p-wrap cash active">
                            <input type="radio" name="enable_emi" checked="" value="0">
                            <span class="price">1,060৳</span>
                            <div class="p-tag">Cash Discount Price</div>
                                        title="Space Black"><span>Space Black</span></label>
                            </div>
                        </div>
                    </div>
                    {{-- <h2>Payment Options</h2>
                    <div class="product-price-options">
                        <label class="p-wrap cash active">
                            <input type="radio" name="enable_emi" checked="" value="0">
                            <span class="price">1,060৳</span>
                            <div class="p-tag">Cash Discount Price</div>
                            <div class="p-tag fade">Online / Cash Payment</div>
                        </label>
                        <label class="p-wrap emi">
                            <input type="radio" name="enable_emi" value="1">
                            <span class="price">97৳/month</span>
                            <div class="p-tag regular">Regular Price: 1,166৳</div>
                            <div class="p-tag fade">0% EMI for up to 12 Months***</div>
                        </label>
                    </div> --}}
                    <div class="cart-option">
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                       
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <button id="button-cart" class="btn submit-btn" data-loading-text="Loading...">Buy
                            Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pd-full">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="navs">
                        <ul class="nav">
                            <li data-area="specification">Specification</li>
                            <li data-area="description">Description</li>
                            <li class="hidden-xs" data-area="ask-question">Questions (9)</li>
                            <li data-area="write-review">Reviews (2)</li>
                        </ul>
                    </div>
                    <section class="specification-tab m-tb-10" id="specification">
                        <div class="section-head">
                            <h2>Specification</h2>
                        </div>
                        <table class="data-table flex-table" cellpadding="0" cellspacing="0">
                            <colgroup>
                                <col class="name">
                                <col class="value">
                            </colgroup>
                            <thead>
                                <tr>
                                    <td class="heading-row" colspan="3">Basic Information</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="name">Base Frequency</td>
                                    <td class="value">3.6 GHz</td>
                                </tr>
                                <tr>
                                    <td class="name">Maximum Turbo Frequency</td>
                                    <td class="value">4.1 GHz</td>
                                </tr>
                                <tr>
                                    <td class="name">Cache</td>
                                    <td class="value">Cache (L2+L3): 16 MB</td>
                                </tr>
                                <tr>
                                    <td class="name">Cores</td>
                                    <td class="value">6</td>
                                </tr>
                                <tr>
                                    <td class="name">Threads</td>
                                    <td class="value">6</td>
                                </tr>
                                <tr>
                                    <td class="name">Default TDP </td>
                                    <td class="value">65W</td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="heading-row" colspan="3">Warranty Information</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="name">Manufacturing Warranty</td>
                                    <td class="value">03 years warranty (No Warranty for Fan or Cooler)</td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                    <section class="description bg-white m-tb-15" id="description">
                        <div class="section-head">
                            <h2>Description</h2>
                        </div>
                        <div class="full-description" itemprop="description">
                            <h2 style="">AMD RYZEN 5 3500 Processor</h2>
                            <p style="">AMD is preparing two variants for the sub-$150 US market, the Ryzen 5
                                3500X &amp; the Ryzen 5 3500. Both processors feature 6 cores and 6 threads which means
                                that there won't be multi-threading support on either chip, however, given their price
                                point and the market they are aiming, a cut-down core configuration is expected. As
                                such, these would be the first Ryzen 3000 parts with no multi-threading support.
                                Starting off with the AMD Ryzen 5 3500X, we are looking at a base clock of 3.6 GHz and a
                                boost clock of 4.1 GHz. The processor features 32 MB of cache, a 65W TDP and a price
                                close to $150 US. It is highly liked that AMD would choose a $149.99 US price for this
                                specific chip. In official slides posted by BullsLab, the chip comes with 24 PCIe Gen 4
                                lanes, support for 3200 MHz memory and we also get to take a look at some performance
                                benchmarks where the chip is highly competitive.The Ryzen 5 3500, on the other hand, has
                                pretty much the same specifications and even the same clock speeds of 3.6 GHz base and
                                4.1 GHz boost. The difference is that it features 16 MB of cache versus 32 MB on the
                                Ryzen 5 3600X. It would result in a small performance penalty but we are also looking at
                                a lower price point. This processor also has no warranty.</p>
                        </div>
                    </section>
                    <section class="latest-price bg-white m-tb-15" id="latest-price">
                        <div class="section-head">
                            <h2>What is the price of AMD RYZEN 5 3500 Processor in Bangladesh?</h2>
                        </div>
                        <p>The latest price of AMD RYZEN 5 3500 Processor in Bangladesh is 8,650৳. You can buy the AMD
                            RYZEN 5 3500 Processor at best price from our website or visit any of our showrooms.</p>
                    </section>
                    <section class="ask-question q-n-r-section bg-white m-tb-15" id="ask-question">
                        <div class="section-head">
                            <div class="title-n-action">
                                <h2>Questions (9)</h2>
                                <p class="section-blurb">Have question about this product? Get specific details about
                                    this product from expert.</p>
                            </div>
                            <div class="q-action">
                                <a href="https://www.startech.com.bd/account/question?product_id=11601"
                                    class="btn st-outline">Ask Question</a>
                            </div>
                        </div>
                        <div id="question">
                            <div class="question-wrap" itemscope="" itemtype="https://schema.org/Question">
                                <p class="author"><span class="name" itemprop="author">sahat hussain</span> on
                                    <time itemprop="dateCreated" datetime="06 Jun 2021">06 Jun 2021</time>
                                </p>
                                <h3 class="question"><span class="hint">Q:</span> <span itemprop="name">Can I use
                                        an Asus Phoenix GeForce GTX 1050Ti 4GB GDDR5 Graphics Card with it? </span></h3>
                                <div class="answer-wrap" itemscope="" itemprop="acceptedAnswer"
                                    itemtype="https://schema.org/Answer">
                                    <p class="answer"><span class="hint">A:</span> <span itemprop="text">Yes sir.
                                            AMD RYZEN 5 3500 Processor is compatible with Asus Phoenix GeForce GTX
                                            1050Ti 4GB GDDR5 Graphics Card. </span></p>
                                    <p class="author answerer"><span class="fade">By</span><span
                                            itemprop="author">Star Tech Support</span><span class="fade"><time
                                                itemprop="dateCreated" datetime="06 Jun 2021">06 Jun
                                                2021</time></span></p>
                                </div>
                            </div>
                            <div class="question-wrap" itemscope="" itemtype="https://schema.org/Question">
                                <p class="author"><span class="name" itemprop="author">supriyo</span> on <time
                                        itemprop="dateCreated" datetime="05 May 2021">05 May 2021</time></p>
                                <h3 class="question"><span class="hint">Q:</span> <span itemprop="name">Can't i use
                                        this processor without gpu?</span></h3>
                                <div class="answer-wrap" itemscope="" itemprop="acceptedAnswer"
                                    itemtype="https://schema.org/Answer">
                                    <p class="answer"><span class="hint">A:</span> <span itemprop="text">Sorry Sir,
                                            you will not be able to use the AMD RYZEN 5 3500 Processor without a
                                            Graphics Card.</span></p>
                                    <p class="author answerer"><span class="fade">By</span><span
                                            itemprop="author">Star Tech Support</span><span class="fade"><time
                                                itemprop="dateCreated" datetime="05 May 2021">05 May
                                                2021</time></span></p>
                                </div>
                            </div>
                            <div class="question-wrap" itemscope="" itemtype="https://schema.org/Question">
                                <p class="author"><span class="name" itemprop="author">azam khan</span> on <time
                                        itemprop="dateCreated" datetime="07 Mar 2021">07 Mar 2021</time></p>
                                <h3 class="question"><span class="hint">Q:</span> <span itemprop="name">Can I use
                                        GTX 1650 SUPER with this CPU?</span></h3>
                                <div class="answer-wrap" itemscope="" itemprop="acceptedAnswer"
                                    itemtype="https://schema.org/Answer">
                                    <p class="answer"><span class="hint">A:</span> <span itemprop="text">Yes sir.
                                            you can use AMD RYZEN 5 3500 Processor with Gtx 1650 Super. </span></p>
                                    <p class="author answerer"><span class="fade">By</span><span
                                            itemprop="author">Star Tech Support</span><span class="fade"><time
                                                itemprop="dateCreated" datetime="07 Mar 2021">07 Mar
                                                2021</time></span></p>
                                </div>
                            </div>
                            <div class="question-wrap" itemscope="" itemtype="https://schema.org/Question">
                                <p class="author"><span class="name" itemprop="author">SabbirAhmed</span> on <time
                                        itemprop="dateCreated" datetime="05 Feb 2021">05 Feb 2021</time></p>
                                <h3 class="question"><span class="hint">Q:</span> <span itemprop="name">can I run
                                        this processor with AMD Radeon RX 480 4GB graphics card? </span></h3>
                                <div class="answer-wrap" itemscope="" itemprop="acceptedAnswer"
                                    itemtype="https://schema.org/Answer">
                                    <p class="answer"><span class="hint">A:</span> <span itemprop="text">Yes sir,
                                            you can run AMD RYZEN 5 3500 Processor with AMD Radeon RX 480 4GB graphics
                                            card.</span></p>
                                    <p class="author answerer"><span class="fade">By</span><span
                                            itemprop="author">Star Tech Support</span><span class="fade"><time
                                                itemprop="dateCreated" datetime="05 Feb 2021">05 Feb
                                                2021</time></span></p>
                                </div>
                            </div>
                            <div class="question-wrap" itemscope="" itemtype="https://schema.org/Question">
                                <p class="author"><span class="name" itemprop="author">Tausif rafi </span> on <time
                                        itemprop="dateCreated" datetime="12 Jul 2020">12 Jul 2020</time></p>
                                <h3 class="question"><span class="hint">Q:</span> <span itemprop="name">Can I use
                                        this processor with Colorful GeForce GT1030 V3 DDR5 2GB Graphics Card? </span>
                                </h3>
                                <div class="answer-wrap" itemscope="" itemprop="acceptedAnswer"
                                    itemtype="https://schema.org/Answer">
                                    <p class="answer"><span class="hint">A:</span> <span itemprop="text">No Sir,
                                            you wil not be able to use the Colorful GeForce GT1030 V3 DDR5 2GB Graphics
                                            Card with the AMD RYZEN 5 3500 Processor.</span></p>
                                    <p class="author answerer"><span class="fade">By</span><span
                                            itemprop="author">Star Tech Support</span><span class="fade"><time
                                                itemprop="dateCreated" datetime="12 Jul 2020">12 Jul
                                                2020</time></span></p>
                                </div>
                            </div>
                            <div class="text-right">
                                <ul class="pagination">
                                    <li><span class="disabled">PREV</span></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a
                                            href="https://www.startech.com.bd/product/product/question?product_id=11601&amp;page=2">2</a>
                                    </li>
                                    <li><a
                                            href="https://www.startech.com.bd/product/product/question?product_id=11601&amp;page=2">NEXT</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <div itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                        <meta itemprop="ratingValue" content="5">
                        <meta itemprop="reviewCount" content="2">
                    </div>
                    <section class="review  q-n-r-section bg-white m-tb-15" id="write-review">
                        <div class="section-head">
                            <div class="title-n-action">
                                <h2>Reviews (2)</h2>
                                <p class="section-blurb">Get specific details about this product from customers who own
                                    it.</p>
                                <div class="average-rating">
                                    <span class="count"><b>5</b><span> out of 5</span></span>
                                    <span class="rating">
                                        <span class="material-icons">star</span>
                                        <span class="material-icons">star</span>
                                        <span class="material-icons">star</span>
                                        <span class="material-icons">star</span>
                                        <span class="material-icons">star</span>
                                    </span>
                                </div>
                            </div>
                            <div class="q-action">
                                <a href="https://www.startech.com.bd/account/review?product_id=11601"
                                    class="btn st-outline">Write a Review</a>
                            </div>
                        </div>
                        <div id="review">
                            <div class="review-wrap">
                                <div class="review-author">
                                    <span class="rating">
                                        <span class="material-icons">star</span>
                                        <span class="material-icons">star</span>
                                        <span class="material-icons">star</span>
                                        <span class="material-icons">star</span>
                                        <span class="material-icons">star</span>
                                    </span>
                                </div>
                                <p class="review">The AMD Ryzen 5 3500 processor is by far the best processor for daily
                                    day tasks. </p>
                                <p class="author">By <span class="name">Shoriful Islam</span> on 30 May 2023</p>
                            </div>
                            <div class="review-wrap">
                                <div class="review-author">
                                    <span class="rating">
                                        <span class="material-icons">star</span>
                                        <span class="material-icons">star</span>
                                        <span class="material-icons">star</span>
                                        <span class="material-icons">star</span>
                                        <span class="material-icons">star</span>
                                    </span>
                                </div>
                                <p class="review">This is such a good processor...</p>
                                <p class="author">By <span class="name">Rasel</span> on 05 Jan 2020</p>
                            </div>
                            <div class="text-center"></div>
                        </div>
                    </section>
                </div>
                {{-- <div class="col-lg-3 col-md-12 c-left">

                    <section class="related-product-list">
                        <h3>Similar Product</h3>
                        <div class="p-s-item">
                            <div class="image-holder">
                                <a href="https://www.startech.com.bd/amd-ryzen-5-2400g-processor"><img
                                        src="https://www.startech.com.bd/image/cache/catalog/processor/amd/ryzen-5-2400g/ryzen-5-2400g-001-80x80.webp"
                                        alt="AMD Ryzen 5 2400G Desktop Processor with Radeon RX Vega 11 Graphics"
                                        width="80" height="80"></a>
                            </div>
                            <div class="caption">
                                <h4 class="product-name">
                                    <a href="https://www.startech.com.bd/amd-ryzen-5-2400g-processor">AMD Ryzen 5 2400G
                                        Desktop Processor with Radeon RX Vega 11 Graphics</a>
                                </h4>
                                <div class="p-item-price price">
                                    <span class="price-new">6,300৳</span> <span class="price-old">7,200৳</span>
                                </div>
                                <div class="actions">
                                    <span class="btn-compare" onclick="compare.add('7219');"><i
                                            class="material-icons">library_add</i>Add to Compare</span>
                                </div>
                            </div>
                        </div>
                        <div class="p-s-item">
                            <div class="image-holder">
                                <a href="https://www.startech.com.bd/amd-ryzen-5-3400g-processor"><img
                                        src="https://www.startech.com.bd/image/cache/catalog/processor/amd/ryzen-5-3400g/3400g-80x80.jpg"
                                        alt="AMD Ryzen 5 3400G Processor with Radeon RX Vega 11 Graphics"
                                        width="80" height="80"></a>
                            </div>
                            <div class="caption">
                                <h4 class="product-name">
                                    <a href="https://www.startech.com.bd/amd-ryzen-5-3400g-processor">AMD Ryzen 5 3400G
                                        Processor with Radeon RX Vega 11 Graphics</a>
                                </h4>
                                <div class="p-item-price price">
                                    <span class="price-new">8,500৳</span> <span class="price-old">9,500৳</span>
                                </div>
                                <div class="actions">
                                    <span class="btn-compare" onclick="compare.add('10293');"><i
                                            class="material-icons">library_add</i>Add to Compare</span>
                                </div>
                            </div>
                        </div>
                        <div class="p-s-item">
                            <div class="image-holder">
                                <a href="https://www.startech.com.bd/amd-ryzen-3-3200g"><img
                                        src="https://www.startech.com.bd/image/cache/catalog/processor/amd/ryzen-3-3200g/ryzen-3-3200g-3-80x80.jpg"
                                        alt="AMD Ryzen 3 3200G Processor with Radeon RX Vega 8 Graphics"
                                        width="80" height="80"></a>
                            </div>
                            <div class="caption">
                                <h4 class="product-name">
                                    <a href="https://www.startech.com.bd/amd-ryzen-3-3200g">AMD Ryzen 3 3200G Processor
                                        with Radeon RX Vega 8 Graphics</a>
                                </h4>
                                <div class="p-item-price price">
                                    <span class="price-new">6,400৳</span> <span class="price-old">7,800৳</span>
                                </div>
                                <div class="actions">
                                    <span class="btn-compare" onclick="compare.add('10295');"><i
                                            class="material-icons">library_add</i>Add to Compare</span>
                                </div>
                            </div>
                        </div>
                        <div class="p-s-item">
                            <div class="image-holder">
                                <a href="https://www.startech.com.bd/amd-ryzen-5-3500-pocessor"><img
                                        src="https://www.startech.com.bd/image/cache/catalog/processor/AMD/ryzen-3500/ryzen-3500-80x80.jpg"
                                        alt="AMD RYZEN 5 3500 Processor" width="80" height="80"></a>
                            </div>
                            <div class="caption">
                                <h4 class="product-name">
                                    <a href="https://www.startech.com.bd/amd-ryzen-5-3500-pocessor">AMD RYZEN 5 3500
                                        Processor</a>
                                </h4>
                                <div class="p-item-price price">
                                    <span>8,650৳</span>
                                </div>
                                <div class="actions">
                                    <span class="btn-compare" onclick="compare.add('11601');"><i
                                            class="material-icons">library_add</i>Add to Compare</span>
                                </div>
                            </div>
                        </div>
                    </section>
                </div> --}}
            </div>
        </div>
    </div>

</x-app>
