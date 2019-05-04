@component('mail::message')
# Company access update

You have been given access permission to the following companies

@foreach($companies as $company)
  - {{ $company }}
@endforeach

Thanks,<br>
{{ config('app.name') }}
@endcomponent
