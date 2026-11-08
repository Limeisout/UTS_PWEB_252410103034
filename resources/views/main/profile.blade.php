@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <h1>Profile</h1>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('images/profile.jpg') }}" class="img-fluid rounded-start" alt="Profile Picture">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name }}</h5>
                    <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
                    <p class="card-text"><strong>Role:</strong> {{ $user->role }}</p>
                </div>
            </div>
        </div>
@endsection