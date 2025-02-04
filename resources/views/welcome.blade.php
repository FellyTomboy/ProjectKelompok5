@extends('layouts.app')

@section('content')
    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="path_to_logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-top">
                Nama Website
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Image and Headline -->
    <div class="container-fluid" style="background: rgba(0, 0, 0, 0.5); height: 300px;">
        <div class="row justify-content-center align-items-center" style="height: 100%;">
            <div class="col text-center text-white">
                <h1 class="display-4">Resep Sehat Mulai Hari Ini</h1>
                <p class="lead">Mulai hidup sehat dengan resep pilihan yang mudah dan bergizi.</p>
            </div>
        </div>
    </div>
@endsection
