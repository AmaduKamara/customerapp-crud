<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{



    // Fetches all records in the Database
    public function index()
    {
        $customers = Customer::latest()->get();
        return view('customers.index', compact('customers'));
    }

    // Provides a form for capturing data to be stored to the database
    public function create()
    {
        $customer = new Customer();

        return view('customers.create', compact('customer'));
    }

    // Creat a record and stores in the Database
    public function store()
    {
        // $data = request()->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        //     'address' => 'required',
        // ]);

        $customer = Customer::create($this->validatedData());

        Mail::to($customer->email)->send(new WelcomeMail());

        return redirect('/customers/' . $customer->id);
    }

    // Shows a record's details from the Database
    public function show(Customer $customer)
    {
        // $customer = Customer::findOrFail()->get();
        return view('customers.show', compact('customer'));
    }

    // Create a form section with details to be edited
    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    // Updates a record when changes needs to be made and stored in the Database
    public function update(Customer $customer)
    {
        // $data = request()->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        //     'address' => 'required',
        // ]);

        $customer->update($this->validatedData());
        return redirect('/customers/' . $customer->id);
    }

    // Destroys or delete the data from the database
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect('/customers');
    }

    // Validation method that can be called in different places
    protected function validatedData()
    {
        return request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);
    }



    public function about()
    {
        return view('pages.about');
    }
    public function dashboard()
    {
        return view('pages.dashboard');
    }
    public function services()
    {
        return view('pages.services');
    }
    public function products()
    {
        return view('pages.products');
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
