@extends('layouts.main')

@section('content')
    <div class="container mx-auto bg-gray-100 mt-16 p-8 rounded shadow">
        <h1 class="text-teal-500 text-3xl border-b border-gray-300 pb-2">Edit Customer</h1>
        <form action="/customers/{{ $customer->id }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 mt-6">

          @csrf
          @method('PATCH')

          <div class="mb-4  w-1/2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              Name
            </label>
            <input name="name" class="{{($errors->first('name') ? " border-red-300" : "")}} shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Enter customer name" value="{{ $customer->name }}">
            @error('name')
                <p class="text-red-300">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-4  w-1/2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="emal">
              Email
            </label>
            <input name="email" class="{{($errors->first('email') ? " border-red-300" : "")}} shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="emal" type="text" placeholder="Enter customer eamil" value="{{ $customer->email }}">
            @error('email')
              <p class="text-red-300">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-4  w-1/2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
              Phone
            </label>
            <input name="phone" class="{{($errors->first('phone') ? " border-red-300" : "")}} shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="text" placeholder="Enter customer phone" value="{{ $customer->phone }}">
            @error('phone')
              <p class="text-red-300">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-4  w-1/2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
              Address
            </label>
            <input name="address" class="{{($errors->first('address') ? " border-red-300" : "")}} shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" type="text" placeholder="Enter customer address" value="{{ $customer->address }}">
            @error('address')
              <p class="text-red-300">{{ $message }}</p>
            @enderror
          </div>
          
          <div>
            <button type="submit" class="bg-teal-500 text-white uppercase py-2 px-8 rounded hover:bg-teal-700 focus:outline-none">Save</button>
            <a href="/customers" class="py-2 px-6 border border-teal-600 rounded hover:bg-teal-700 hover:text-white ml-2 uppercase">Cancel</a>
          </div>  
        </form>
    </div>
@endsection
