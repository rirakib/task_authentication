@extends('layouts.auth')
@section('content')
<div class="card">
    <div class="card-body">
        <!-- Logo -->
        <div class="app-brand justify-content-center">
            <a href="{{route('dashboard')}}" class="app-brand-link gap-2">

            <span class="app-brand-text demo text-body fw-bolder">Logo</span>
            </a>
        </div>
        <!-- /Logo -->
        <h4 class="mb-2">Verification Email</h4>
        <p>please verify your email account.</p>
    </div>
    <div class="card-footer d-flex justify-content-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <button class="btn btn-secondary" type="submit">
                    {{ __('Resend Verification Email') }}
                </button>
            </div>
        </form>
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="btn btn-danger ">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</div>
@endsection
