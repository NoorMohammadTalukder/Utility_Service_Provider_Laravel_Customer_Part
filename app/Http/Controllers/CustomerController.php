<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;
use App\Http\Requests\StorecustomerRequest;
use App\Http\Requests\UpdatecustomerRequest;
use Session;

class CustomerController extends Controller
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
     * @param  \App\Http\Requests\StorecustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecustomerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecustomerRequest  $request
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecustomerRequest $request, customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer $customer)
    {
        //
    }

    // code started from here from me
    public function home(){
        return view('home');

    }

    public function signup(){
        return view("pages.customer.signup");

    }

    public function signupSubmit(Request $request){
        $validate=$request->validate([
            'name'=>'required|min:3|max:100',
            'email'=>'email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'address'=>'required',
            'password'=>'required',

        ],

        [
            'name.required'=>'Name is missing',
            'name.min'=>'Name must be greater than 3 charcters',
            'name.max'=>'Name must be less than 100 charcters',
            'email'=>"Mail is missing",
            'phone.required'=>"Phone number is missing",
            'phone.regex'=>"Enter a valid phone number",
            'address.required'=>"Address is missing",
            'password.required'=>"Password is missing"

        ]

    );
        $customer=new customer();
        $customer->name =$request->name;
        $customer->email=$request->email;
        $customer->phone =$request->phone;
        $customer->address=$request->address;
        $customer->password=$request->password;
        $customer->save();
        return redirect()->route('signup');
    }

    public function signin(){
        return view("pages.customer.signin");

    }

    public function signinSubmit(Request $request){
        $validate=$request->validate([
            
            'email'=>'email',
            'password'=>'required',

        ],
        [
            'email'=>"Mail is missing",
            'password.required'=>"Password is missing"

        ]
        );

        $customer=customer::where("email",$request->email)
        ->where("password",$request->password)
        ->first();
        if ($customer){
            $request->session()->put("customerId",$customer->id);

            return redirect()->route("customerDash");
        }
        return back();

    }

    public function customerDash(){
        return view ("pages.customer.customerDash");
    }

    public function customerInfo(){
        $id=Session::get("customerId");
        $t = customer::where('id',$id)->first();
        
        return $t->customerProfileDetail();
        
    }

    public function customerUpdateInformation(){
        return view("pages.customer.updateInformationPasswordCheck");
        
    }

    public function updateInformationPassFormSubmit(Request $request){
        $validate=$request->validate([
            'password'=>'required',

        ],
        [
            'password.required'=>"Password is missing"

        ]
        );
        $id=Session::get("customerId");
        $customer=customer::where("id",$id)
        ->where("password",$request->password)
        ->first();
        if ($customer){
            echo $customer;
            return redirect()->route("customerUpdate");
        }
        return back();
        
    }



    public function customerUpdate(){
        $id=Session::get("customerId");
        $user = customer::where('id', $id)->first();
        // return $customer;

        return view ("pages.customer.customerUpdate")->with('user', $user);
    }




    public function customerUpdateSubmit(Request $request){
        $id=Session::get("customerId");
        $user = customer::where('id', $request->id)->first();

        // return $request->id;
        $user->name = $request->name;
        $user->email= $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = $request->password;
        $user->save();
        return view ("pages.customer.customerUpdate");
    }



    public function customerLogout(){
        session()->forget('customerId');
        return redirect()->route('signin');
    }

}
