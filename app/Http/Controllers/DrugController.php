<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DrugRequest;
use App\Models\{Drug, Supplier};

class DrugController extends Controller
{
    public function index()
    {
    	return view('data/drug/index', [
    		'drugs' => Drug::latest()->get()
    	]);
    }

    public function show(Drug $drug)
    {
    	return view('/data/drug/show', [
            'drug' => $drug
        ]);
    }

    public function add()
    {
    	return view('data/drug/add', [
            'suppliers' => Supplier::get()
        ]);
    }

    public function store(DrugRequest $request)
    {
    	if ($request->file('icon')) {
    		$icon = $request->file('icon')->store('images/drugs');
    	} else {
    		$icon = 'images/drugs/default.png';
    	}

        // mengambil data dalam semua form
        $data = $request->all();
        $data['icon'] = $icon;

        // menyimpan ke database
        Drug::create($data);

        // kembali ke halaman drug sambil membawa session
        return redirect('/drug')->with('created', 'New drug has been added!');
    }

    public function edit(Drug $drug)
    {
        return view('/data/drug/edit', [
            'drug' => $drug,
            'suppliers' => Supplier::get()

        ]);
    }

    public function update(DrugRequest $request, Drug $drug)
    {
        if ($request->file('icon')) {
            if ($drug->icon === 'images/drugs/default.png') {
                $icon = $request->file('icon')->store('images/drugs');
            } else {
                \Storage::delete($drug['icon']);
                $icon = $request->file('icon')->store('images/drugs');
            }
        } else {
            $icon = $drug['icon'];
        }

        // mengambil data dalam semua form
        $data = $request->all();
        $data['icon'] = $icon;

        // update isi data lalu simpan ke database
        $drug->update($data);

        // kembali ke halaman drug sambil membawa session
        return redirect('/drug')->with('updated', 'Drug has been updated!');
    }

    public function delete(Drug $drug)
    {
        if ($drug->icon !== 'images/drugs/default.png') {
            \Storage::delete($drug['icon']);
        }

        $drug->delete();

        return redirect()->to('/drug')->with('deleted', 'Drug has been deleted!');
    }
}















