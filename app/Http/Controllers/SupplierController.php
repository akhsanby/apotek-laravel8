<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Http\Requests\SupplierRequest;

class SupplierController extends Controller
{
    public function index()
    {
    	return view('data/supplier/index', [
    		'supplier' => Supplier::latest()->get()
    	]);
    }

    public function show(Supplier $supplier)
    {
    	return view('data/supplier/show', [
            'supplier' => $supplier
        ]);
    }

    public function add()
    {
    	return view('data/supplier/add');
    }

    public function store(SupplierRequest $request)
    {
        // mengambil data dalam semua form
        $data = $request->all();

        // menyimpan ke database
        Supplier::create($data);

        // kembali ke halaman supplier sambil membawa session
        return redirect('/supplier')->with('created', 'New supplier has been added!');
    }

    public function edit(Supplier $supplier)
    {
        return view('/data/supplier/edit', [
            'supplier' => $supplier
        ]);
    }

    public function update(SupplierRequest $request, Supplier $supplier)
    {
        // mengambil data dalam semua form
        $data = $request->all();

        // update isi data lalu simpan ke database
        $supplier->update($data);

        // kembali ke halaman supplier sambil membawa session
        return redirect('/supplier')->with('updated', 'Supplier has been updated!');
    }

    public function delete(Supplier $supplier)
    {
        $supplier->delete();

        return redirect()->to('/supplier')->with('deleted', 'Supplier has been deleted!');
    }
}
