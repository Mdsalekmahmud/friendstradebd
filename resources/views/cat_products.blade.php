<x-app>
    <style>
        /* Price Range Filter Styles */
        .price-filter-card {
            padding: 1rem;
            margin-bottom: 1.5rem;
        }

        .price-range-wrapper {
            margin-top: 1rem;
        }

        .price-range-values {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .price-min-wrap,
        .price-max-wrap {
            flex: 1;
        }

        .price-label {
            display: block;
            font-size: 0.75rem;
            color: #6c757d;
            margin-bottom: 0.25rem;
            text-transform: uppercase;
        }

        .price-input-group {
            display: flex;
            align-items: center;
            border: 1px solid #dee2e6;
            border-radius: 6px;
            overflow: hidden;
            background: #fff;
        }

        .currency {
            padding: 0.5rem 0.75rem;
            background: #f8f9fa;
            color: #495057;
            border-right: 1px solid #dee2e6;
            font-weight: 500;
        }

        .price-input {
            flex: 1;
            border: none;
            padding: 0.5rem;
            outline: none;
            font-size: 0.9rem;
        }

        .price-separator {
            color: #adb5bd;
            font-weight: 500;
        }

        .price-slider {
            margin: 1rem 0;
        }

        .price-range-hint {
            display: flex;
            justify-content: space-between;
            font-size: 0.75rem;
            color: #6c757d;
            margin-top: 0.5rem;
        }

        /* Filter Group Styles */
        .filter-group {
            margin-bottom: 1.5rem;
            border-bottom: 1px solid #e9ecef;
            padding-bottom: 1rem;
        }

        .filter-group .label {
            font-weight: 600;
            margin-bottom: 0.75rem;
            font-size: 0.95rem;
            color: #212529;
            display: flex;
            justify-content: space-between;
            cursor: pointer;
        }

        .filter-group .label:after {
            content: "−";
            font-size: 1.2rem;
            color: #adb5bd;
        }

        .filter-group.collapsed .label:after {
            content: "+";
        }

        .filter-group.collapsed .items {
            display: none;
        }

        .filter-group .items {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            max-height: 200px;
            overflow-y: auto;
        }

        .filter {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
            font-size: 0.85rem;
            color: #495057;
        }

        .filter input[type="checkbox"] {
            cursor: pointer;
            width: 16px;
            height: 16px;
        }

        .filter span {
            flex: 1;
        }

        .filter .count {
            color: #6c757d;
            font-size: 0.75rem;
            margin-left: 0.25rem;
        }

        /* Filter Actions */
        .filter-actions {
            display: flex;
            gap: 0.75rem;
            margin-top: 1rem;
            padding-top: 0.5rem;
        }

        .btn-filter-apply,
        .btn-filter-reset {
            flex: 1;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
            font-size: 0.85rem;
            transition: all 0.2s;
        }

        .btn-filter-apply {
            background: #f05a28;
            color: white;
        }

        .btn-filter-apply:hover {
            background: #d94b1e;
        }

        .btn-filter-reset {
            background: #f8f9fa;
            color: #495057;
            border: 1px solid #dee2e6;
        }

        .btn-filter-reset:hover {
            background: #e9ecef;
        }

        /* Product Card Enhancements */
        .product-meta-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
            font-size: 0.75rem;
        }

        .brand-badge {
            color: #6c757d;
        }

        .stock-badge {
            color: #28a745;
            font-weight: 500;
        }

        /* Scrollbar Styling */
        .filter-group .items::-webkit-scrollbar {
            width: 4px;
        }

        .filter-group .items::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 4px;
        }

        .filter-group .items::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 4px;
        }

        .child-list a {
            display: inline-block;
            background: #fff;
            color: #333;
            border: 1px solid #ddd;
            padding: 2px 10px;
            border-radius: 25px;
            text-decoration: none;
            transition: all .3s ease;
        }

        .child-list a:hover {
            background: #0d6efd;
            border-color: #0d6efd;
            color: #fff;
            transform: translateY(-2px);
        }
    </style>
    @push('js')
        <script src="{{ asset('js/category-filter.js') }}"></script>
    @endpush



    <section class="after-header p-tb-10">
        <div class="container c-intro">
            <ul class="breadcrumb" itemscope itemtype="">
                <li><a href="{{ route('home') }}"><i class="material-icons" title="Home">home</i></a></li>
                @foreach ($breadcrumbs as $crumb)
                    <li itemprop="itemListElement" itemscope itemtype="">
                        <a itemtype="" itemprop="item" href="{{ route('catProducts', $crumb->id) }}">
                            <span itemprop="name">{{ $crumb->name }}</span>
                        </a>
                        <meta itemprop="position" content="1" />
                    </li>
                @endforeach
            </ul>
            <p><br></p>
            <div class="child-list">
            </div>
            <div class="child-list mb-4">
                @if ($subCategories->count())
                    @foreach ($subCategories as $subCategory)
                        <a href="{{ route('catProducts', $subCategory->id) }}" class="btn btn-light border me-2 mb-2">
                            {{ $subCategory->name }}
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </section>



    <section class="p-item-page bg-bt-gray p-tb-15">
        <div class="container">
            <div class="row">
                <div id="column-left" class="col-sm-3">
                    <form method="GET" action="{{ route('catProducts', $category->id) }}">
                        <span class="lc-close"><i class="material-icons" aria-hidden="true">close</i></span>
                        <div class="filters">

                            {{-- PRICE RANGE FILTER --}}
                            <div class="ws-box price-filter-card">
                                <div class="label">
                                    <span>Price Range</span>
                                </div>
                                <div class="price-range-wrapper">
                                    <div class="price-range-values">
                                        <div class="price-min-wrap">
                                            <span class="price-label">Min</span>
                                            <div class="price-input-group">
                                                <span class="currency">৳</span>
                                                <input type="number" id="price-min" class="price-input" min="0"
                                                    value="{{ (int) $minPrice }}" step="100">
                                            </div>
                                        </div>
                                        <div class="price-separator">—</div>
                                        <div class="price-max-wrap">
                                            <span class="price-label">Max</span>
                                            <div class="price-input-group">
                                                <span class="currency">৳</span>
                                                <input type="number" id="price-max" class="price-input" min="0"
                                                    value="{{ (int) $maxPrice }}" step="100">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="rang-slider" class="price-slider" data-from="{{ (int) $minPrice }}"
                                        data-to="{{ (int) $maxPrice }}" data-min="{{ (int) $minPrice }}"
                                        data-max="{{ (int) $maxPrice }}"></div>
                                    <div class="price-range-hint">
                                        <span>0৳</span>
                                        <span>{{ number_format((int) $maxPrice, 0) }}৳</span>
                                    </div>
                                </div>
                            </div>

                            {{-- AVAILABILITY FILTER --}}
                            <div class="filter-group ws-box show" data-group-type="status">
                                <div class="label">
                                    <span>Availability</span>
                                </div>
                                <div class="items">
                                    <label class="filter">
                                        <input type="checkbox" class="availability-filter" name="availability"
                                            value="in_stock" />
                                        <span>In Stock</span>
                                    </label>
                                    <label class="filter">
                                        <input type="checkbox" class="availability-filter" name="availability"
                                            value="pre_order" />
                                        <span>Pre Order</span>
                                    </label>
                                    <label class="filter">
                                        <input type="checkbox" class="availability-filter" name="availability"
                                            value="up_coming" />
                                        <span>Up Coming</span>
                                    </label>
                                </div>
                            </div>

                            {{-- BRAND FILTER --}}
                            <div class="filter-group ws-box show" data-group-id="brand-filter">
                                <div class="label">
                                    <span>Brand</span>
                                </div>
                                <div class="items">
                                    @foreach ($brands as $brand)
                                        <label class="filter filter-chip">
                                            <input type="checkbox" class="brand-filter" name="brands[]"
                                                value="{{ $brand['id'] }}"
                                                {{ in_array($brand['id'], request('brands', [])) ? 'checked' : '' }}>

                                            <span>
                                                {{ $brand['name'] }}
                                                <span class="count">({{ $brand['count'] }})</span>
                                            </span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>

                            {{-- SOCKET FILTER --}}
                            <div class="filter-group ws-box show" data-group-id="socket-filter">
                                <div class="label">
                                    <span>Socket</span>
                                </div>
                                <div class="items">
                                    <label class="filter">
                                        <input type="checkbox" class="socket-filter" name="socket" value="lga1700" />
                                        <span>LGA 1700</span>
                                    </label>
                                    <label class="filter">
                                        <input type="checkbox" class="socket-filter" name="socket"
                                            value="am5" />
                                        <span>AM5</span>
                                    </label>
                                    <label class="filter">
                                        <input type="checkbox" class="socket-filter" name="socket"
                                            value="am4" />
                                        <span>AM4</span>
                                    </label>
                                    <label class="filter">
                                        <input type="checkbox" class="socket-filter" name="socket"
                                            value="lga1200" />
                                        <span>LGA 1200</span>
                                    </label>
                                    <label class="filter">
                                        <input type="checkbox" class="socket-filter" name="socket"
                                            value="lga2066" />
                                        <span>LGA 2066</span>
                                    </label>
                                </div>
                            </div>

                            {{-- NUMBER OF CORE FILTER --}}
                            <div class="filter-group ws-box show" data-group-id="core-filter">
                                <div class="label">
                                    <span>Number of Core</span>
                                </div>
                                <div class="items">
                                    <label class="filter">
                                        <input type="checkbox" class="core-filter" name="core" value="2" />
                                        <span>2 Core</span>
                                    </label>
                                    <label class="filter">
                                        <input type="checkbox" class="core-filter" name="core" value="4" />
                                        <span>4 Core</span>
                                    </label>
                                    <label class="filter">
                                        <input type="checkbox" class="core-filter" name="core" value="6" />
                                        <span>6 Core</span>
                                    </label>
                                    <label class="filter">
                                        <input type="checkbox" class="core-filter" name="core" value="8" />
                                        <span>8 Core</span>
                                    </label>
                                    <label class="filter">
                                        <input type="checkbox" class="core-filter" name="core" value="10" />
                                        <span>10 Core</span>
                                    </label>
                                    <label class="filter">
                                        <input type="checkbox" class="core-filter" name="core" value="12" />
                                        <span>12 Core</span>
                                    </label>
                                    <label class="filter">
                                        <input type="checkbox" class="core-filter" name="core" value="16" />
                                        <span>16 Core</span>
                                    </label>
                                    <label class="filter">
                                        <input type="checkbox" class="core-filter" name="core" value="24" />
                                        <span>24 Core</span>
                                    </label>
                                </div>
                            </div>

                            {{-- NUMBER OF THREAD FILTER --}}
                            <div class="filter-group ws-box show" data-group-id="thread-filter">
                                <div class="label">
                                    <span>Number of Thread</span>
                                </div>
                                <div class="items">
                                    <label class="filter">
                                        <input type="checkbox" class="thread-filter" name="thread"
                                            value="4" />
                                        <span>4 Thread</span>
                                    </label>
                                    <label class="filter">
                                        <input type="checkbox" class="thread-filter" name="thread"
                                            value="8" />
                                        <span>8 Thread</span>
                                    </label>
                                    <label class="filter">
                                        <input type="checkbox" class="thread-filter" name="thread"
                                            value="12" />
                                        <span>12 Thread</span>
                                    </label>
                                    <label class="filter">
                                        <input type="checkbox" class="thread-filter" name="thread"
                                            value="16" />
                                        <span>16 Thread</span>
                                    </label>
                                    <label class="filter">
                                        <input type="checkbox" class="thread-filter" name="thread"
                                            value="20" />
                                        <span>20 Thread</span>
                                    </label>
                                    <label class="filter">
                                        <input type="checkbox" class="thread-filter" name="thread"
                                            value="24" />
                                        <span>24 Thread</span>
                                    </label>
                                    <label class="filter">
                                        <input type="checkbox" class="thread-filter" name="thread"
                                            value="32" />
                                        <span>32 Thread</span>
                                    </label>
                                </div>
                            </div>

                            {{-- FILTER ACTION BUTTONS --}}
                            <div class="filter-actions">
                                <button class="btn-filter-apply" id="apply-filters">Apply Filters</button>
                                <button class="btn-filter-reset" id="reset-filters">Reset All</button>
                            </div>

                        </div>

                    </form>
                </div>

                <div id="content" class="col-xs-12 col-md-9 product-listing">
                    <div class="top-bar ws-box">
                        <div class="row">
                            <div class="col-sm-4 col-xs-2 actions">
                                <button class="tool-btn" id="lc-toggle"><i class="material-icons">filter_list</i>
                                    Filter</button>
                                <label class="page-heading m-hide">{{ $category->name }}</label>
                            </div>
                            <div class="col-sm-8 col-xs-10 show-sort">
                                <div class="form-group rs-none">
                                    <label for="input-limit">Show:</label>
                                    <div class="custom-select">
                                        <select id="input-limit">
                                            <option value="20" selected="selected">20</option>
                                            <option value="24">24</option>
                                            <option value="48">48</option>
                                            <option value="75">75</option>
                                            <option value="90">90</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-sort">Sort By:</label>
                                    <div class="custom-select">
                                        <select id="input-sort">
                                            <option value="">Default</option>
                                            <option value="price_asc">Price (Low &gt; High)</option>
                                            <option value="price_desc">Price (High &gt; Low)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main-content p-items-wrap" id="product-grid">
                        @foreach ($products as $product)
                            <article class="p-item product-card" data-product-id="{{ $product->id }}"
                                data-brand-id="{{ $product->brand_id ?? 0 }}"
                                data-price="{{ (float) $product->price }}"
                                data-socket="{{ $product->socket ?? '' }}"
                                data-core="{{ $product->core_count ?? 0 }}"
                                data-thread="{{ $product->thread_count ?? 0 }}"
                                data-stock="{{ $product->stock_status ?? 'in_stock' }}">
                                <div class="p-item-inner">
                                    <div class="p-item-img">
                                        <a href="{{ route('productDetails', $product->id) }}"
                                            class="product-image-link">
                                            <img src="{{ $primaryImages[$product->id] ?? asset('storage/images/no-image.png') }}"
                                                alt="{{ $product->name }}" width="228" height="228">
                                        </a>
                                    </div>
                                    <div class="p-item-details">
                                        <div class="product-meta-row">
                                            <span class="brand-badge">{{ $product->brand?->name ?? 'Brand' }}</span>
                                            <span
                                                class="stock-badge">{{ ucfirst(str_replace('_', ' ', $product->status)) }}</span>
                                        </div>
                                        <h4 class="p-item-name">
                                            <a
                                                href="{{ route('productDetails', $product->id) }}">{{ $product->name }}</a>
                                        </h4>
                                        @php
                                            $features = preg_split('/\r\n|\r|\n/', trim((string) $product->features));
                                        @endphp
                                        <ul class="short-description">

                                            @foreach (array_slice($features, 1, 5) as $feature)
                                                @if (trim($feature))
                                                    <li>{{ trim($feature) }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                        <div class="p-item-price">
                                            <span
                                                class="price-new">{{ number_format((float) $product->price, 0) }}৳</span>
                                            @if (!empty($product->regular_price) && (float) $product->regular_price > (float) $product->price)
                                                <span
                                                    class="price-old">{{ number_format((float) $product->regular_price, 0) }}৳</span>
                                            @endif
                                        </div>
                                        <div class="actions">
                                            <button class="st-btn btn-add-cart" type="button">Buy Now</button>
                                            <button class="st-btn btn-compare" type="button">Add to Compare</button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                        <div id="no-products-found" class="no-products-found" style="display: none;">No products
                            match the selected filters.</div>
                    </div>

                    <div class="bottom-bar">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <ul class="pagination">
                                    <li><span class="disabled">PREV</span></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">NEXT</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 rs-none text-right">
                                <p>Showing 1 to 20 of 24 (2 Pages)</p>
                            </div>
                        </div>
                    </div>

                    <div class="category-description p-15 ws-box">
                        <h1 class="MsoNormal">
                            <b><span lang="EN">Buy {{ $category->name }} in Bangladesh at the Lowest
                                    Price</span></b>
                        </h1>
                        <p class="MsoNormal" style="text-align: justify;">
                            <span lang="EN">Explore the latest {{ strtolower($category->name) }} collection at
                                Friend Trade. We bring reliable products with competitive pricing, fresh stock, and a
                                smooth shopping experience for customers across Bangladesh.</span>
                        </p>
                        <p class="MsoNormal" style="text-align: justify;">
                            <span lang="EN">Use the dynamic filters on this page to narrow the catalog by price
                                and brand, then compare the featured products quickly before you make your
                                purchase.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll('.brand-filter').forEach(item => {
            item.addEventListener('change', function() {
                this.closest('form').submit();
            });
        });
        // Filter group toggle
        document.querySelectorAll('.filter-group .label').forEach(label => {
            label.addEventListener('click', () => {
                label.parentElement.classList.toggle('collapsed');
            });
        });

        // Reset filters
        document.getElementById('reset-filters')?.addEventListener('click', () => {
            document.querySelectorAll('.filter input[type="checkbox"]').forEach(checkbox => {
                checkbox.checked = false;
            });
            document.getElementById('price-min').value = document.getElementById('price-min').getAttribute('min');
            document.getElementById('price-max').value = document.getElementById('price-max').getAttribute('value');
        });
    </script>
</x-app>
