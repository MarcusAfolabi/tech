@extends('layouts.main')
@section('title', '503 - Unreachable')
@section('main')

<body class="error-page">
    <div class="main-wrapper">
        <div class="error-box">
            <h1>503</h1>
            <h3 class="h2 mb-3"><i class="fas fa-exclamation-circle"></i> Request Unreachable</h3>
            <p class="h4 font-weight-normal">The website is currently unable to handle your request.</p>
            <a href="{{ route('dashboard') }}" class="btn btn-primary">Try another request</a>
        </div>
    </div>
</body>
@endsection