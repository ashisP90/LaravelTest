<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;
use App\models\Cart;

class CartController extends Controller
{
    public Function index(Request $request){
       
        return response()->json([
            'message' => 'Cart fetched successfully',
            'cart' => [
                ['id' => 1, 'product' => 'Book', 'quantity' => 2],
                ['id' => 2, 'product' => 'Pen', 'quantity' => 5],
            ]
        ]);
    }

    public function cartHistory(Request $request){
        return response()->json(['message' => 'Cart History']);
    }
}
