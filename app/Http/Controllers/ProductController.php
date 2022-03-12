<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\order;
use App\Models\orderDetail;
use App\Models\customer;
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
        $products = product::all();
        return view('pages.product.service')->with('products',$products);

    }

     public function serviceDetail(Request $request){
        $id = $request->id;
        $request->session()->put("serviceId",$id);
        // return $id;
        $p = product::find($id);
        // return $p;
        return view('pages.product.serviceDetail')->with('p', $p);

    }

    public function addtocart(Request $request){
        
        $id = Session::get("serviceId");
        $qty =$request->qty;
        $problem =$request->problem;
        $request->session()->put("problem",$problem);
      
        $p = product::where('id',$id)->first();
        $cart=[];
        
        if(session()->has('cart')){
            $cart = json_decode(session()->get('cart'));
        }
        $product = array('id'=>$id,'qty'=>$qty,'problem'=>$problem,'name'=>$p->name,'price'=>$p->price,'image'=>$p->image,);
        $cart[] = (object)($product);
        $jsonCart = json_encode($cart);
        session()->put('cart',$jsonCart);
       
        return redirect()->route('list');
    }

    public function cart(){
        $cart = json_decode(session()->get('cart'));
        return view('pages.product.cart')
        ->with('cart',$cart);
    }

    public function checkout(Request $request){
      
        $products = json_decode(session()->get('cart'));
        
        $customer_id = Session::get("customerId");
        $problem= Session::get("problem");
        
        // ------------
        // $cart = json_decode(session()->get('cart'));
        // $k = array_search(4, $cart);
        // return $k;

        // -----------
        $order = new order();

        $order->customer_id = $customer_id;
        $order->status="Pending";
        $order->price = $request->total_price;
        $order->problem = $problem;
       
        $order->save();

   
        foreach($products as $p){
            $orderDetail = new orderDetail();
            $orderDetail->order_id = $order->id;
            $orderDetail->product_id = $p->id;
            $orderDetail->quantity = $p->qty;
            $orderDetail->unit_price = $p->price;
            $orderDetail->customer_id = $customer_id;
            $orderDetail->serviceName = $p->name;
            $orderDetail->totalPrice = $request->total_price;
            $orderDetail->orderStatus = "pending";
            $orderDetail->serviceProvider = "not assigned yet";
            $orderDetail->save();
        }

        session()->forget('cart');

        return redirect()->route('home');
        

    }

    public function orderHistory(){
        $id=Session::get("customerId");
        $history=orderDetail::where("customer_id",$id)->get();
        // $customer=customer::where("id",$id)->first();
        // return $history;
        return view ("pages.product.history")->with('history', $history);
    }

    public function emptycart(){
        session()->forget('cart');
        if(!session()->has('cart')){
            return redirect()->route('cart');
        }
        return session('cart');
        
    }

    
}
