@extends('layouts.main')

@section('content')
    <div class="container w-full flex flex-col items-center mx-auto bg-gray-100 mt-6 p-8 rounded shadow">
        <div class="relative flex items-center justify-between w-full border-b border-gray-300 pb-2">
            <h1 class="text-teal-500 text-3xl sm:text-2xl">Customers View</h1>
            <a href="/customers/create" class="absolute top-0 right-0 bg-teal-500 text-white py-1 px-2 rounded mt-2 hover:bg-teal-700 md:text-sm uppercase">Add New Customer</a>
        </div>
        <div class="grid md:grid-cols-3 gap-8 sm:grid-cols-2">
            @forelse ($customers as $customer)
                <div class="shadow-lg bg-white p-6 text-center w-full mr-6 mt-4 boder-b border-b-4 border-teal-600 rounded-lg">
                    <h2 class="text-teal-500 text-2xl mb-3 hover:text-teal-400">
                        <a href="/customers/{{ $customer->id }}">{{ $customer->name }}</a>
                    </h2>
                    <p class="text-gray-500 mb-2">{{ $customer->email }}</p>
                    <p class="text-gray-700">{{ $customer->phone }}</p>
                    <p class="text-gray-700">{{ $customer->address }}</p>
                </div>
            @empty
            <h2 class="text-teal-500 text-2xl mb-3">No Customer Record In The Database</h2>
            @endforelse
        </div>
    </div>
@endsection
