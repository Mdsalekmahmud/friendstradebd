document.addEventListener('DOMContentLoaded', function () {
    const productGrid = document.getElementById('product-grid');
    const noProducts = document.getElementById('no-products-found');
    const priceMin = document.getElementById('price-min');
    const priceMax = document.getElementById('price-max');
    const brandFilters = document.querySelectorAll('.brand-filter');

    if (!productGrid) return;

    function applyFilters() {
        const min = parseFloat(priceMin?.value || 0) || 0;
        const max = parseFloat(priceMax?.value || Number.MAX_SAFE_INTEGER) || Number.MAX_SAFE_INTEGER;
        const selectedBrands = Array.from(brandFilters).filter((item) => item.checked).map((item) => item.value);

        let visibleCount = 0;

        productGrid.querySelectorAll('.product-card').forEach((card) => {
            const price = parseFloat(card.dataset.price || 0);
            const brandId = card.dataset.brandId || '0';
            const matchesPrice = price >= min && price <= max;
            const matchesBrand = selectedBrands.length === 0 || selectedBrands.includes(brandId);

            const visible = matchesPrice && matchesBrand;
            card.style.display = visible ? '' : 'none';
            if (visible) visibleCount += 1;
        });

        if (noProducts) {
            noProducts.style.display = visibleCount === 0 ? 'block' : 'none';
        }
    }

    [priceMin, priceMax].forEach((input) => {
        input?.addEventListener('input', applyFilters);
    });

    brandFilters.forEach((input) => {
        input.addEventListener('change', applyFilters);
    });
});
