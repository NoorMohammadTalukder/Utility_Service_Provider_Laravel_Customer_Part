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
}
