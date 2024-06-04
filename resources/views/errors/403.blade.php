@extends('layouts.main')
@section('title', '403 - Unauthorised page')
@section('main')

<body class="error-page">
    <div class="main-wrapper">
        <div class="error-box">
            <h1>403</h1>
            <h3 class="h2 mb-3"><i class="fas fa-exclamation-circle"></i> @yield('title')</h3>
            <p class="h4 font-weight-normal">The page you requested was not meant for you.</p>
            <a href="{{ route('dashboard') }}" class="btn btn-primary">Back to Dashboard</a>
        </div>
    </div>
</body>
@endsection