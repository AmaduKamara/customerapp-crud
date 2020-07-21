@extends('layouts.main')

@section('content')
    <div class="container mx-auto bg-gray-100 mt-16 p-8 rounded shadow">
        <h1 class="text-teal-500 text-3xl border-b border-gray-300 pb-2">Create A Customer</h1>
        <form action="/customers" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 mt-6">

          @include('customers.customerForm')

          <div>
            <button type="submit" class="bg-teal-500 text-white uppercase py-2 px-8 rounded hover:bg-teal-700 focus:outline-none">Submit</button>
          </div>
        </form>
    </div>
@endsection
