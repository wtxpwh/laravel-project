@component('mail::message')

{{ __('Dear Buzzex User') }} <a href="mailto:{{ $data->email }}">{{ $data->email }}</a>:

{{ __('We have autogenerated a password for you :')}} <br>

{{ __('Username : ')}} {{ $data->email }}<br>
{{ __('Password : ')}} {{ $password }}<br>

{{ __('You need to reset your password') }} <br><br>

{{ __('Click here to reset your password') }} <br>

<a class="btn btn-info btn-lg" href="{{ route('password.request',['locale'=>'en']) }}">Click Here</a> <br><br>

{{ __('Copy and paste this link to your url and hit enter') }}


<a class="btn btn-info btn-lg" href="{{ route('password.request',['locale'=>'en']) }}">{{ route('password.request',['locale'=>'en']) }}</a> <br><br>

{{ __('Thanks') }},<br>
{{ config('app.name') }}
@endcomponent