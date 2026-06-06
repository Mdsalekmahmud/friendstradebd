<?php
namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $rows = Excel::toArray([], storage_path('app/products.xlsx'))[0];

        foreach ($rows as $key => $row) {

            if ($key == 0) {
                continue;
            }

            // Category
            $categoryId = null;

// Level 1
            if (! empty(trim($row[5] ?? ''))) {

                $cat1 = Category::firstOrCreate(
                    ['name' => trim($row[5])],
                    ['slug' => Str::slug(trim($row[5]))]
                );

                $categoryId = $cat1->id;

                // Level 2
                if (! empty(trim($row[6] ?? ''))) {

                    $cat2 = Category::firstOrCreate(
                        [
                            'name'      => trim($row[6]),
                            'parent_id' => $cat1->id,
                        ],
                        [
                            'slug' => Str::slug($row[5] . '-' . $row[6]),
                        ]
                    );

                    $categoryId = $cat2->id;

                    // Level 3
                    if (! empty(trim($row[7] ?? ''))) {

                        $cat3 = Category::firstOrCreate(
                            [
                                'name'      => trim($row[7]),
                                'parent_id' => $cat2->id,
                            ],
                            [
                                'slug' => Str::slug($row[5] . '-' . $row[6] . '-' . $row[7]),
                            ]
                        );

                        $categoryId = $cat3->id;
                    }
                }
            }

            // Brand
            
            // if (Str::contains(
                //     Str::slug($row[7] ?? ''),
                //     'bose-soundlink-revolve'
                // )) {
                    //     dd($row);
                    // }
                    

            $brandId = null;

            if (! empty(trim($row[8] ?? ''))) {

                $brand = Brand::firstOrCreate(
                    ['name' => trim($row[8])],
                    ['slug' => Str::slug(trim($row[8]))]
                );

                $brandId = $brand->id;
            }

            // Product
            preg_match('/\d{1,3}(,\d{3})*/', $row[9], $matches);

            $price = isset($matches[0])
                ? (int) str_replace(',', '', $matches[0])
                : null;
            $product = Product::firstOrCreate(
                ['name' => $row[4]],
                [
                    'slug'        => Str::slug($row[4]) . '-' . uniqid(),
                    'category_id' => $categoryId,
                    'brand_id'    => $brandId,
                    'price'       => $price,
                ]
            );

            // Image
            $imageUrl = $row[14];

            if ($imageUrl) {
                try {
                    $response = Http::timeout(10)->get($imageUrl);

                    if ($response->successful()) {
                        $fileName = Str::slug($product->name) . '-' . uniqid() . '.jpg';

                        Storage::disk('public')->put('products/' . $fileName, $response->body());

                        ProductImage::create([
                            'product_id' => $product->id,
                            'image'      => 'storage/products/' . $fileName,
                        ]);
                    }
                } catch (\Exception $e) {}
            }
        }
    }
}
