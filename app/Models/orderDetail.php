<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderDetail extends Model
{
    use HasFactory;
    protected $table='order_details';

    //public $timestamps = false;



    public function history1()

    {

       

       // return history::where('customer_id', $this->id1)->get();

    }
    // public function orderHistory(){
    //     // $history= order_details::where("customer_id",$this->t1)->get();
    //     $history = DB::table('order_details')->where('customer_id', $t1)->get();
    //     // return $details;
    //     return view('pages.product.history')->with('history', $history);
    // }
}
