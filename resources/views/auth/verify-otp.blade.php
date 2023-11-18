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
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <!-- /Logo -->
        <form method="POST" action="{{ route('login.otp.store') }}">
            @csrf
            <div class="mb-3">
                <label for="otp" class="form-label">OTP</label>
                <input
                    type="text"
                    class="form-control"
                    id="otp"
                    name="otp"
                    placeholder="Enter your otp"
                    autofocus
                />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Submit</button>
            </div>
        </form>
    </div>

</div>
@endsection
