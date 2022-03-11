<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\order;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreproductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductRequest  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproductRequest $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }


    public function list(){
        // echo "hi";
        $products = product::all();
        // return $products;
        return view('pages.product.service')->with('products',$products);
        // return view('pages.product.service');
        // ->with('products',$products);

    }

    public function addtocart(Request $request){
        $id = $request->id;
        $p = product::where('id',$id)->first();
        $cart=[];
        //$jsonCart = $req->session()->get('cart'); to get session value
        //session()->get('cart')
        if(session()->has('cart')){
            $cart = json_decode(session()->get('cart'));
        }
        $product = array('id'=>$id,'qty'=>1,'name'=>$p->name,'price'=>$p->price,'image'=>$p->image);
        $cart[] = (object)($product);
        $jsonCart = json_encode($cart);
        session()->put('cart',$jsonCart);
        //return session()->get('cart');
        return redirect()->route('list');
    }

    public function cart(){
        $cart = json_decode(session()->get('cart'));
        return view('pages.product.cart')
        ->with('cart',$cart);
    }

    public function checkout(Request $request){
        //let when logged in there will be a field in session
        $products = json_decode(session()->get('cart'));
        //creating order
        $customer_id = Session::get("customerId");
        $order = new order();
        $order->customer_id = $customer_id;
        $order->status="Ordered";
        $order->price = $request->total_price;
        $order->save();

        //creating order details
        // foreach($products as $p){
        //     $o_d = new Orderdetail();
        //     $o_d->o_id = $order->id;
        //     $o_d->product_id = $p->id;
        //     $o_d->qty = $p->qty;
        //     $o_d->unit_price = $p->price;
        //     $o_d->save();
        // }

        session()->forget('cart');

        return "Added to db";
        

    }

    
}
