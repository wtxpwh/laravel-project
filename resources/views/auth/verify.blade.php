@extends('masters.app')

@section('content')
<div class="container-fluid mb-5 mt-5">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card-deck">
                
                @include('partials.sections.announcement')
                                
                <div class="card">
                    <div class="card-body p-4">
                        <div class="lead text-center my-3">{{ __('Verify Your Email Address') }}</div>
                        <div class="card-block">
                            
                        @if (session('resent'))
                            <div class="alert alert-success my-2" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection