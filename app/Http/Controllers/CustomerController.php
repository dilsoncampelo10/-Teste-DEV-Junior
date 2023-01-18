<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('insert_customer');
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $phone = $request->phone;
        $address = $request->address;
        $birthdate = $request->birthdate;
        $cpf = $request->cpf;

        if ($name && $phone && $address && $birthdate && $cpf) {
            Customer::create([
                'name' => $name,
                'phone' => $phone,
                'address' => $address,
                'birthdate' => $birthdate,
                'cpf' => $cpf,
            ]);

            return redirect()->route('show.customers')->with('success', 'Cliente cadastrado com sucesso');
        }

        return redirect()->route('insert.customer')->with('failed', 'Não foi possível cadastrar cliente');
    }

    public function show()
    {
        $customers = Customer::all();
        $data = [
            'customers' => $customers
        ];
        return view('show', $data);
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        $data = [
            'customer' => $customer
        ];
        return view('edit_customer', $data);
    }
    public function update(Request $request)
    {
        Customer::findOrFail($request->id)->update($request->all());

        return redirect()->route('show.customers')->with('success', 'Cliente alterado');
    }

    public function destroy($id)
    {
        Customer::findOrFail($id)->delete();

        return redirect()->route('show.customers')->with('success', 'Cliente excluído');
    }
}
