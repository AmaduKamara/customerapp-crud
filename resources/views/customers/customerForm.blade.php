
@csrf

<div class="mb-4  w-1/2">
  <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
    Name
  </label>
  <input name="name" class="{{($errors->first('name') ? " border-red-300" : "")}} shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Enter customer name" value="{{ old('name') ?? $customer->name  }}">
  @error('name')
      <p class="text-red-300">{{ $message }}</p>
  @enderror
</div>
<div class="mb-4  w-1/2">
  <label class="block text-gray-700 text-sm font-bold mb-2" for="emal">
    Email
  </label>
  <input name="email" class="{{($errors->first('email') ? " border-red-300" : "")}} shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="emal" type="text" placeholder="Enter customer eamil" value="{{ old('email') ?? $customer->email }}">
  @error('email')
    <p class="text-red-300">{{ $message }}</p>
  @enderror
</div>
<div class="mb-4  w-1/2">
  <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
    Phone
  </label>
  <input name="phone" class="{{($errors->first('phone') ? " border-red-300" : "")}} shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="text" placeholder="Enter customer phone" value="{{ old('phone') ?? $customer->phone }}">
  @error('phone')
    <p class="text-red-300">{{ $message }}</p>
  @enderror
</div>
<div class="mb-4  w-1/2">
  <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
    Address
  </label>
  <input name="address" class="{{($errors->first('address') ? " border-red-300" : "")}} shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" type="text" placeholder="Enter customer address" value="{{ old('address') ?? $customer->address }}">
  @error('address')
    <p class="text-red-300">{{ $message }}</p>
  @enderror
</div>