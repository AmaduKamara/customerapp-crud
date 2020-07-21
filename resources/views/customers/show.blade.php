@extends('layouts.main')

@section('content')
    <div class="container mx-auto bg-gray-100 mt-16 p-8 rounded shadow">
        <h1 class="text-teal-500 text-3xl border-b border-gray-300 pb-2">Details for {{ $customer->name }}</h1>

        <h1 class="text-teal-600 text-2xl">{{ $customer->name }}</h1>
        <p class="text-gray-600 mt-1">Email: {{ $customer->email }}</p>
        <p class="text-gray-600 mt-1">Phone: {{ $customer->phone }}</p>
        <p class="text-gray-600 mt-1">Address: {{ $customer->address }}</p>
        <hr class="bg-gray-300 mt-3">
        <div class="mt-5 flex">
          <a href="/customers/{{ $customer->id }}/edit" class="py-2 px-6 border border-teal-600 rounded bg-teal-600 mr-2 hover:bg-teal-500 text-white uppercase">Edit</a>
          <form action="/customers/{{ $customer->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="py-2 px-6 border border-red-400 rounded mr-2 hover:bg-red-400 hover:text-white text-red-400 uppercase focus:outline-none">Delete</button>
          </form>
          <a href="/customers" class="py-2 px-6 border border-teal-600 rounded hover:bg-teal-700 hover:text-white mr-2 uppercase">Back</a>
        </div>
        
    </div>
@endsection
