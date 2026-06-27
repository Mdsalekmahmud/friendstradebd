<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request)
{
    $products = Product::query()
        ->when($request->search, function ($query) use ($request) {
            $query->search($request->search);
        })
        ->with('images')
        ->inRandomOrder()
        ->take(20)
        ->get();

    $categories = Category::with('products')->get();

    $primaryImages = [];

    foreach ($products as $product) {

        $primaryImage = $product->images
            ->where('is_primary', true)
            ->first();

        if ($primaryImage) {
            $imagePath = $primaryImage->image;

            $primaryImages[$product->id] = str_starts_with($imagePath, 'storage/')
                ? asset($imagePath)
                : asset('storage/' . $imagePath);
        } else {
            $primaryImages[$product->id] = asset('images/no-image.png');
        }
    }

    return view('welcome', compact(
        'products',
        'categories',
        'primaryImages'
    ));
}

    public function catProducts($category)
    {
        $category = Category::with([
            'parent',
            'children',
            'children.children',
            'products.brand',
            'products.images',
        ])->findOrFail($category);

        $products = $this->getCategoryProducts($category)
            ->unique('id')
            ->sortByDesc('price');

        $primaryImages = [];
        $brands        = [];
        $minPrice      = null;
        $maxPrice      = null;

        foreach ($products as $product) {

            $primaryImage = $product->images
                ->where('is_primary', true)
                ->first();

            $primaryImages[$product->id] = $primaryImage
                ? (str_starts_with($primaryImage->image, 'storage/')
                    ? asset($primaryImage->image)
                    : asset('storage/' . $primaryImage->image))
                : asset('storage/images/no-image.png');

            $price = (float) $product->price;

            $minPrice = $minPrice === null
                ? $price
                : min($minPrice, $price);

            $maxPrice = $maxPrice === null
                ? $price
                : max($maxPrice, $price);

            if ($product->brand) {
                $brands[$product->brand->id] = [
                    'id'    => $product->brand->id,
                    'name'  => $product->brand->name,
                    'count' => ($brands[$product->brand->id]['count'] ?? 0) + 1,
                ];
            }

            if (request()->has('brands')) {

                $selectedBrands = request('brands');

                $products = $products->filter(function ($product) use ($selectedBrands) {
                    return in_array($product->brand_id, $selectedBrands);
                });
            }
        }

        $minPrice = $minPrice ?? 0;
        $maxPrice = $maxPrice ?? 1000;

        if ($maxPrice <= $minPrice) {
            $maxPrice = $minPrice + 1000;
        }

        $breadcrumbs = [];
        $current     = $category;

        while ($current) {
            array_unshift($breadcrumbs, $current);
            $current = $current->parent;
        }

        $subCategories = $category->children;

        return view('cat_products', compact(
            'category',
            'products',
            'primaryImages',
            'brands',
            'minPrice',
            'maxPrice',
            'breadcrumbs',
            'subCategories'
        ));
    }

    private function getCategoryProducts($category)
    {
        $products = collect($category->products);

        foreach ($category->children as $child) {
            $products = $products->merge(
                $this->getCategoryProducts($child)
            );
        }

        return $products;
    }

    public function productDetails($product)
    {
        $product = Product::with([
            'brand',
            'category',
            'images',
        ])->findOrFail($product);

        $primaryImage = $product->images
            ->where('is_primary', true)
            ->first();

        if ($primaryImage) {
            $imagePath = $primaryImage->image;

            $primaryImageUrl = str_starts_with($imagePath, 'storage/')
                ? asset($imagePath)
                : asset('storage/' . $imagePath);
        } else {
            $primaryImageUrl = asset('images/no-image.png');
        }

        return view('product_details', compact(
            'product',
            'primaryImageUrl'
        ));
    }
}
