<?php

namespace App\Http\Livewire;
use App\Models\Cart;
use Livewire\Component;

class CartComponent extends Component
{
    public $cart;
    public function incrementQuantity(int $cartId)
    {
        $cartdata = Cart::where('id', $cartId)->where('user_id', auth()->user()->id)->first();
        dd('hello');
        if($cartdata){
            $cartdata->increment('quantity');
        }
        
        
    }
    public function render()
    {
        return view('livewire.cart-component');
    }
}