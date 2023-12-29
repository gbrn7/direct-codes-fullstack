<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index(){
        $transactions = Transaction::with([
            'package', //Calling the package  function in model
            'user'     //Calling the user  function in model
        ])->get();
        // dd($transactions);
        return view('admin.transactions', ['transactions'=> $transactions]); //Inject Data
    }
}
