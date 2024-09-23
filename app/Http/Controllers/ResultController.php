<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function savings(Request $depositvalue)
    {
        $user = $depositvalue->user();
        $value = $depositvalue->deposit;
        if ($value > 0 ) {
            $user->operation()->update([
                'account_balance' => $value,
            ]);

            return "Deposit of $value value is sucessful";
        } else {
            return "Invalid Value of Deposit";
        }
    }

    public function withdrawValue(Request $information)
    {
        $user = $information->user();
        $account_balance = $user->operation->account_balance;
        $withdraw_value = $information->withdraw;

        if ($withdraw_value <= $account_balance) {
            $user->operation()->update([
                'account_balance' => $account_balance - $withdraw_value,
            ]);

            return "Withdraw is Sucessfull please Waiting";
        } else {
            return "Withdraw Unsucessfull";
        }
    }

    public function withdraw()
    {
        return view('withdraw');
    }

    public function deposit()
    {
        return view('deposit');
    }


}
