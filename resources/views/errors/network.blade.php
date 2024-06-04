@extends('layouts.main')
@section('title', '500 - Connection Problem!')
@section('main')

<body class="error-page">
    <div class="main-wrapper">
        <div class="error-box">
            <h1>503</h1>
            <h3 class="h2 mb-3"><i class="fas fa-exclamation-circle"></i>@yield('title')</h3>
            <p class="h4 font-weight-normal">Poor internet connection. Please try again with strong internet connection. Thank you</p>
            <a href="{{ route('dashboard') }}" class="btn btn-primary">Back to Dashboard</a>
        </div>
    </div>
</body>
@endsection