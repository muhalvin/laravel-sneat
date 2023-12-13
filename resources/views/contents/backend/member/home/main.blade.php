@extends('layouts.app')

@section('title', 'Home')

@section('app-content')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            {{-- Menu --}}
            @include('partials.menu')
            {{-- !Menu --}}

            <!-- Layout container -->
            <div class="layout-page">

                {{-- Navbar --}}
                @include('partials.navbar')
                {{-- !Navbar --}}

                {{-- Content Wrapper --}}
                <div class="content-wrapper">

                    {{-- Content --}}
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-lg-8 mb-4 order-0">
                                <div class="card">
                                    <div class="d-flex align-items-end row">
                                        <div class="col-sm-7">
                                            <div class="card-body" style="min-height: 28vh;">
                                                <h5 class="card-title text-primary">Welcome
                                                    Back, {{ Auth::user()->name }}!</h5>
                                                <p class="mb-3">
                                                    Good day, What we'll do now? How about checking our users list?
                                                </p>

                                                <a href="javascript:;" class="btn btn-sm btn-outline-primary">View
                                                    Users</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 text-center text-sm-left">
                                            <div class="card-body pb-0 px-0 px-md-4">
                                                <img src="{{ asset('assets/img/illustrations/man-with-laptop-light.png') }}"
                                                     height="140" alt="View Badge User"
                                                     data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                                     data-app-light-img="illustrations/man-with-laptop-light.png"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- !Content --}}

                    {{-- Footer --}}
                    @include('partials.footer')
                    {{-- !Footer --}}

                    <div class="content-backdrop fade"></div>
                </div>
                {{-- !Content Wrapper --}}

            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
@endsection
