@extends('patient.layouts.app')
@section('title' , 'Email Verifcation')
@section('content')
<!-- Page Content -->
<div class="content">
    <div class="my-50 text-center">
        <h2 class="font-w700 text-black mb-10">{{ __('Verify Your Email Address') }}</h2>
    </div>
    <div class="block p-100 h4">
        <div class="block-content">
            @if (session('resent'))
            <div class="alert alert-success" role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
            @endif
            <p class="text-muted">
                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }},
            </p>

            <form class="d-inline h3" method="POST" action="{{ localUrl(route('verification.resend')) }}">
                @csrf
                <button type="submit"
                    class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
            </form>
        </div>
    </div>
</div>
<!-- END Page Content -->
@endsection
