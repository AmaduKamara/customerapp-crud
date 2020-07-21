@component('mail::message')
# Introduction

<div>
  <h2 class="text-teal-500 bg-teal-600">Welcome to CustomerApp</h2>
</div>

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }} 

@endcomponent
