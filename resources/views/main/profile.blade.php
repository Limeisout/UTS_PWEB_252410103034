@extends('layouts.app')

@section('title', 'Profile')

@php
    $user = session('user');
@endphp

@section('content')
    <div class="container-fluid">
        <h1>Profile</h1>

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('public/default_pfp.jpg') }}" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $user['name'] ?? 'guest' }}</h5>
                        <p class="card-text"><strong>Email:</strong> {{ $user['email'] ?? '-' }}</p>
                        <p class="card-text"><strong>Role:</strong> {{ $user['role'] ?? '-' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection