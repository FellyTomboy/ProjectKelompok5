{{-- resources/views/home.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (Auth::user()->hasRole('user'))
                        <p>Welcome to your dashboard, {{ Auth::user()->name }}!</p>
                        <p>This is the user section of the website.</p>
                        <ul>
                            <li><a href="{{ route('profile.edit') }}">Edit Profile</a></li>
                            <li><a href="{{ route('profile.update') }}">Update Profile</a></li>
                        </ul>
                    @else
                        <p>You do not have the necessary permissions to access this page.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
