@extends('layouts.app')

@section('title', '405')

@section('app-content')
    <div class="container-xxl container-p-y">
        <div class="misc-wrapper">
            <h2 class="mb-2 mx-2">Method Not Allowed</h2>
            <p class="mb-4 mx-2">Specific method not allowed for this resource.</p>
            <div class="mt-3">
                <img src="{{ asset('assets/img/illustrations/page-misc-error-light.png') }}" alt="page-misc-error-light" width="500" class="img-fluid"  data-app-dark-img="illustrations/page-misc-error-dark.png" data-app-light-img="illustrations/page-misc-error-light.png" />
            </div>
        </div>
    </div>
@endsection

@push('page-css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-misc.css') }}">
@endpush
