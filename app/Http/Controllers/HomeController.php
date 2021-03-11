<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Drug, Supplier, Transaction, User};

class HomeController extends Controller
{
    public function index()
    {
    	return view('home/index', [
    		'drug' => Drug::count(),
    		'supplier' => Supplier::count(),
    		'transaction' => Transaction::count(),
    		'user' => User::count()
    	]);
    }
}
