<?php

namespace App\Http\Controllers;

use App\Models\Operations;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function create(Request $information) {
        Operations::create([
            'name' => $information->name_client,
            'accountbalance' =>$information->account_balance

        ]);
        return "New User Create Sucess";
    }

    public function savings(Request $depositvalue, $id){
        $value = $depositvalue++;{
        if ($depositvalue > 0 )
        return "Deposit of $depositvalue value is sucessful";

        else 
        return "Invalid Value of Deposit";
        }
    }

    
}
