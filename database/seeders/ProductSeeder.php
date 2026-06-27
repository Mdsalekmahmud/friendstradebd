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
    public function run(): void
    {
        $rows = Excel::toArray([], storage_path('app/products.xlsx'))[0];

        foreach ($rows as $key => $row) {

            if ($key == 0) {
                continue;
            }

           
            $imageColumns = [10,11, 12, 13, 14]; 

            // Category
            $categoryId = null;

            if (!empty(trim($row[1] ?? ''))) {

                $cat1 = Category::firstOrCreate(
                    ['name' => trim($row[1])],
                    ['slug' => Str::slug(trim($row[1]))]
                );

                $categoryId = $cat1->id;

                if (!empty(trim($row[2] ?? ''))) {

                    $cat2 = Category::firstOrCreate(
                        [
                            'name' => trim($row[2]),
                            'parent_id' => $cat1->id,
                        ],
                        [
                            'slug' => Str::slug($row[1] . '-' . $row[2]),
                        ]
                    );

                    $categoryId = $cat2->id;

                    if (!empty(trim($row[3] ?? ''))) {

                        $cat3 = Category::firstOrCreate(
                            [
                                'name' => trim($row[3]),
                                'parent_id' => $cat2->id,
                            ],
                            [
                                'slug' => Str::slug($row[1] . '-' . $row[2] . '-' . $row[3]),
                            ]
                        );

                        $categoryId = $cat3->id;
                    }
                }
            }

            // Brand
            $brandId = null;

            if (!empty(trim($row[4] ?? ''))) {

                $brand = Brand::firstOrCreate(
                    ['name' => trim($row[4])],
                    ['slug' => Str::slug(trim($row[4]))]
                );

                $brandId = $brand->id;
            }

            // Price
            $price = preg_replace('/[^0-9]/', '', (string) $row[5]);
            $price = (int) $price;

            if ($price > 100000000) {
                $price = (int) substr((string) $price, 0, 6);
            }

            // Product
            $product = Product::firstOrCreate(
                ['name' => trim($row[0])],
                [
                    'slug'          => Str::slug($row[0]) . '-' . uniqid(),
                    'category_id'   => $categoryId,
                    'brand_id'      => $brandId,
                    'price'         => $price,
                    'regular_price' => (int) preg_replace('/[^0-9]/', '', (string) $row[6]),
                    'features'      => $row[7] ?? null,
                    'description'   => $row[8] ?? null,
                    'specification' => $row[9] ?? null,
                    'source_url'    => $row[10] ?? null,
                ]
            );

            // Images
            foreach ($imageColumns as $index => $column) {

                $imageUrl = trim($row[$column] ?? '');

                if (!$imageUrl) {
                    continue;
                }

                try {
                    $response = Http::timeout(20)->get($imageUrl);

                    if ($response->successful()) {

                        $extension = pathinfo(parse_url($imageUrl, PHP_URL_PATH), PATHINFO_EXTENSION);

                        if (!$extension) {
                            $extension = 'jpg';
                        }

                        $fileName = Str::slug($product->name)
                            . '-' . uniqid()
                            . '.' . $extension;

                        Storage::disk('public')->put(
                            'images/productimage/' . $fileName,
                            $response->body()
                        );

                        ProductImage::create([
                            'product_id' => $product->id,
                            'image'      => 'storage/images/productimage/' . $fileName,
                            'is_primary' => $index === 0, // row[10] = primary
                        ]);
                    }

                } catch (\Exception $e) {
                    logger()->error($e->getMessage());
                }
            }
        }
    }
}   