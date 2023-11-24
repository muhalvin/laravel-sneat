@extends('layouts.app')

@section('title', '500')

@section('app-content')
    <div class="container-xxl container-p-y">
        <div class="misc-wrapper">
            <h2 class="mb-2 mx-2">Internal Server Error</h2>
            <p class="mb-4 mx-2">Sorry for the inconvenience, something went wrong on the server. We're working to fix it</p>
            <div class="mt-4">
                <img src="{{ asset('assets/img/illustrations/girl-doing-yoga-light.png') }}" alt="girl-doing-yoga-light" width="500" class="img-fluid" data-app-dark-img="illustrations/girl-doing-yoga-dark.png" data-app-light-img="illustrations/girl-doing-yoga-light.png" />
            </div>
        </div>
    </div>
@endsection

@push('page-css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-misc.css') }}">
@endpush
