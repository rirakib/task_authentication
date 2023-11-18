@extends('layouts.auth')
@section('content')
    <div class="card">
        <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
                <a href="{{ route('dashboard') }}" class="app-brand-link gap-2">

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
            <form id="formAuthentication" class="mb-3" action="{{ route('password.email') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="Enter your email" autofocus />
                </div>

                <div class="mb-3">
                    <button class="btn btn-primary d-grid w-100" type="submit">Send Email</button>
                </div>
            </form>

        </div>
    </div>
@endsection
