<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function cartAdd()
    {
        $productId = request('product_id');
        $quantity  = request('quantity', 1);

        $product = Product::findOrFail($productId);

        $primaryImage = $product->images
            ->where('is_primary', true)
            ->first();

        $imagePath = $primaryImage?->image;

        $imageUrl = $imagePath
            ? (str_starts_with($imagePath, 'storage/')
                ? asset($imagePath)
                : asset('storage/' . $imagePath))
            : asset('images/no-image.png');

        Cart::add([
            'id'         => $product->id,
            'name'       => $product->name,
            'price'      => $product->price,
            'quantity'   => $quantity,
            'attributes' => [
                'image' => $imageUrl,
            ],
        ]);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function cartUpdate(Request $request, $id)
    {
        Cart::update($id, [
            'quantity' => [
                'relative' => false,
                'value'    => $request->quantity,
            ],
        ]);

        return response()->json([
            'success'       => true,
            'totalQuantity' => Cart::getTotalQuantity(),
            'total'         => Cart::getTotal(),
        ]);
    }
    public function cart()
    {
        $cartItems = Cart::getContent();
        return view('welcome', compact('cartItems'));
    }

    public function cartRemove($itemId)
    {
        Cart::remove($itemId);
        return redirect()->back()->with('success', 'Item removed from cart successfully!');
    }

}
