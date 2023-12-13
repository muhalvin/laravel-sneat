@extends('layouts.app')

@section('title', 'Home')

@section('app-content')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            {{-- Menu --}}
            @include('components.menu')
            {{-- !Menu --}}

            <!-- Layout container -->
            <div class="layout-page">

                {{-- Navbar --}}
                @include('components.navbar')
                {{-- !Navbar --}}

                {{-- Content Wrapper --}}
                <div class="content-wrapper">

                    {{-- Content --}}
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            @include('contents.backend.admin.home.partials.card-user')
                        </div>
                    </div>
                    {{-- !Content --}}

                    {{-- Footer --}}
                    @include('components.footer')
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
