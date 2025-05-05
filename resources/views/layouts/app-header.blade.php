<!DOCTYPE html>
   <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>{{ config('app.name', 'Rgpc') }}</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
       <style>
           body {
               font-family: 'Inter', sans-serif;
           }
           .card {
               transition: transform 0.3s ease-in-out;
           }
           .card:hover {
               transform: scale(1.02);
           }
           .border-dashed {
               border-style: dashed !important;
           }
           .table th, .table td {
               vertical-align: middle;
           }
           .alert-dismissible .btn-close {
               padding: 0.75rem 1.25rem;
           }
       </style>
   </head>
   <body class="bg-light min-vh-100">
       <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
           <div class="container">
               <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Rgpc') }}</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                   <ul class="navbar-nav ms-auto">
                       @auth
                           <li class="nav-item">
                               <a class="nav-link" href="{{ route('notices.index') }}">Notices</a>
                           </li>
                           <li class="nav-item">
                               <form action="{{ route('logout') }}" method="POST">
                                   @csrf
                                   <button type="submit" class="nav-link btn btn-link">Logout</button>
                               </form>
                           </li>
                       @else
                           <li class="nav-item">
                               <a class="nav-link" href="{{ route('login') }}">Login</a>
                           </li>
                           {{-- <li class="nav-item">
                               <a class="nav-link" href="{{ route('register') }}">Register</a>
                           </li> --}}
                       @endauth
                   </ul>
               </div>
           </div>
       </nav>
       <main>
           @if (session('success'))
               <div class="container mt-3">
                   <div class="alert alert-success alert-dismissible fade show" role="alert">
                       {{ session('success') }}
                       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>
               </div>
           @endif
       </main>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@6.3.3/dist/js/bootstrap.bundle.min.js"></script>
