<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    public function customerProfileDetail(){
        $details= customer::where("id",$this->id)->get();
        // return $details;
        return view('pages.customer.customerInfo')->with('details', $details);
    }
    public function customerProfileDetail1(){
        $details= customer::where("id",$this->id)->get();
        // return $details;
        return view('pages.customer.customerInfo1')->with('details', $details);
    }
    
    // protected $primarykey="id";
    // public function moredetail(){
    //     $details= order::where("customer_id",$this->t)->get();
    //     return $details;
    //     // return "hi";
    //     //  return view('pages.customer.problemDetails')->with('details', $details);
    // }
}
