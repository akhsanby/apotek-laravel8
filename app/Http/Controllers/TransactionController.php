<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Transaction, Drug};
use App\Http\Requests\TransactionRequest;

class TransactionController extends Controller
{
    public function index() 
    {
    	return view('data/transaction/index', [
    		'transaction' => Transaction::latest()->get()
    	]);
    }

    public function show(Transaction $transaction)
    {
    	return view('data/transaction/show', [
            'transaction' => $transaction
        ]);
    }

    public function add()
    {
    	return view('data/transaction/add', [
            'drugs' => Drug::get()
        ]);
    }

    public function store(TransactionRequest $request)
    {
        // mengambil data dalam semua form
        $data = $request->all();

        // menyimpan ke database
        Transaction::create($data);

        // kembali ke halaman transaction sambil membawa session
        return redirect('/transaction')->with('created', 'New transaction has been added!');
    }

    public function edit(Transaction $transaction)
    {
        return view('/data/transaction/edit', [
            'transaction' => $transaction
        ]);
    }

    public function update(TransactionRequest $request, Transaction $transaction)
    {
        // mengambil data dalam semua form
        $data = $request->all();

        // update isi data lalu simpan ke database
        $transaction->update($data);

        // kembali ke halaman transaction sambil membawa session
        return redirect('/transaction')->with('updated', 'transaction has been updated!');
    }

    public function delete(Transaction $transaction)
    {
        $transaction->delete();

        return redirect()->to('/transaction')->with('deleted', 'transaction has been deleted!');
    }
}
