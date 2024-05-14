<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('customer.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $wilayah=Wilayah::get();
        return view('customer.create',compact('wilayah'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'email'=>'required|email|unique:customers,email',
            'no_telp'=>'required|numeric',
            'wilayah_id'=>'required',
            'alamat_detail'=>'required',
            'tanggal_lahir'=>'required',
            'tempat_lahir'=>'required',
        ],[
            'nama.required'=>'Silahkan Masukkan Nama',
            'email.required'=>'Silahkan Masukkan Email',
            'email.email'=>'Silahkan Masukkan Format Email Yang Sesuai',
            'no_telp.required'=>'Silahkan Masukkan No Telp',
            'no_telp.numeric'=>'No Telp Harus Berupa Angka',
            'wilayah_id.required'=>'Silahkan Pilih Kabupaten/Kota',
            'alamat_detail.required'=>'Silahkan Masukkan Alamat Detail',
            'tanggal_lahir.required'=>'Silahkan Masukkan Tanggal Lahir',
            'tempat_lahir.required'=>'Silahkan Masukkan Tempat Lahir',
        ]);

        Customer::create($request->all());

        return redirect()->route('customer.index')->with('success','Sukses Menambah Customer Baru');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        $wilayah=Wilayah::get();
        return view('customer.edit',compact('customer','wilayah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'nama'=>'required',
            'email'=>'required|email|unique:customers,email,id'.$customer->id,
            'no_telp'=>'required|numeric',
            'wilayah_id'=>'required',
            'alamat_detail'=>'required',
            'tanggal_lahir'=>'required',
            'tempat_lahir'=>'required',
        ],[
            'nama.required'=>'Silahkan Masukkan Nama',
            'email.required'=>'Silahkan Masukkan Email',
            'email.email'=>'Silahkan Masukkan Format Email Yang Sesuai',
            'email.unique'=>'Email Ini Sudah Digunakan Sebelumnya',
            'no_telp.required'=>'Silahkan Masukkan No Telp',
            'no_telp.numeric'=>'No Telp Harus Berupa Angka',
            'wilayah_id.required'=>'Silahkan Pilih Kabupaten/Kota',
            'alamat_detail.required'=>'Silahkan Masukkan Alamat Detail',
            'tanggal_lahir.required'=>'Silahkan Masukkan Tanggal Lahir',
            'tempat_lahir.required'=>'Silahkan Masukkan Tempat Lahir',
        ]);

        Customer::where('id',$customer->id)->update($request->except('_method','_token'));

        return redirect()->route('customer.index')->with('success','Sukses Menambah Customer Baru');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customer.index')->with('success','Sukses Menghapus Data Customer');
    }
}
