@extends('layouts.main')

@section('content')
    <div class="container mx-auto bg-gray-100 mt-16 p-8 rounded shadow">
        <h1 class="text-teal-500 text-3xl border-b border-gray-300 pb-2">Edit Customer</h1>
        <form action="/customers/{{ $customer->id }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 mt-6">

          @method('PATCH')

          @include('customers.customerForm')

          <div>
            <button type="submit" class="bg-teal-500 text-white uppercase py-2 px-8 rounded hover:bg-teal-700 focus:outline-none">Save</button>
            <a href="/customers" class="py-2 px-6 border border-teal-600 rounded hover:bg-teal-700 hover:text-white ml-2 uppercase">Cancel</a>
          </div>  
        </form>
    </div>
@endsection
