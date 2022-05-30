<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    protected $data = [
        'page_title'=>'التعاملات'
    ];
    public function index()
    {
        $transactions = Transaction::get();

        return  view('admin.pages.transactions.index',['data'=>$this->data],compact('transactions'));
    }



}
