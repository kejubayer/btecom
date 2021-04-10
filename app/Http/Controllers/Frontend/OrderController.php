<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Validator;

class OrderController extends Controller
{
    public function show($id)
    {
        $order = Order::where('id', $id)->with('order_details','order_details.product')->first();

        return view('frontend.order.show', compact('order'));
    }

    public function placeOrder()
    {
        return view('frontend.order.order');
    }

    public function submitOrder(Request $request)
    {
        try {
            $rules = [
                'name' => ['required'],
                'email' => ['required'],
                'address' => ['required'],
                'phone' => ['required'],
                'txn_id' => ['required'],
                'method' => ['required'],
            ];
            $validate = Validator::make($request->all(), $rules);
            if ($validate->fails()) {
                return redirect()->back()->withErrors($validate)->withInput();
            }
            $carts = session()->get('cart');
            $total_price = 0;
            foreach ($carts as $item) {
                $total_price += $item['quantity'] * $item['price'];
            }
            DB::beginTransaction();
            $data = [
                'user_id' => auth()->user()->id,
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'address' => $request->input('address'),
                'phone' => $request->input('phone'),
                'txn_id' => $request->input('txn_id'),
                'method' => $request->input('method'),
                'price' => $total_price,
                'order_no' => Str::random(7),
                'status' => 'pending'
            ];
            $order = Order::create($data);

            foreach ($carts as $cart) {
                OrderDetails::create([
                    'order_id' => $order->id,
                    'product_id' => $cart['product_id'],
                    'qty' => $cart['quantity'],
                    'price' => $cart['price'],
                ]);
            }
            session()->forget('cart');
            DB::commit();
            return redirect()->route('profile');
        } catch (\Exception $exception) {
            DB::rollBack();
            dd($exception->getMessage());
        }
    }
}
