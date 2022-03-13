<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $primarykey="id";

    // public function moredetail(){
    //     $details= order::where("customer_id",$this->t)->get();
    //     return $details;
    //     // return "hi";
    //     //  return view('pages.customer.problemDetails')->with('details', $details);
    // }
}
