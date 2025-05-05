@extends('layouts.app')

@section('content')
<div class="container py-5 text-center">
    <h1 class="mb-4 text-dark fw-bold">Welcome to GicPharmacy</h1>
    <p class="lead text-muted">Manage your important notices with ease.</p>
    @auth
        <a href="{{ route('notices.index') }}" class="btn btn-primary btn-lg mt-3">Go to Notices</a>
    @else
        <a href="{{ route('login') }}" class="btn btn-primary btn-lg mt-3 me-2">Login</a>
        <a href="{{ route('register') }}" class="btn btn-outline-primary btn-lg mt-3">Register</a>
    @endauth
</div>
@endsection
