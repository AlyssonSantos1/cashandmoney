<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function create(Request $information) {
        Request::create([
            'name' => $information->name_client,
            'accountbalance' =>$accountbalance->account_balance

        ]);
        return "New User Create Sucess";
    }

    public function savings(Request $depositvalue, $id){
        $value = $depositvalue++;
        if ($depositvalue < 0  );
        return "Deposit of $depositvalue value is sucessful";
    }

    
}
