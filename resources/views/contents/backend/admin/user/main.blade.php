@extends('layouts.app')

@section('title', 'Users')

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

                        {{-- With Role Admin  --}}
                        <div class="card">
                            <h5 class="card-header">Admin</h5>
                            <div class="table-responsive text-wrap">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th class="text-center" style="width: 5%;">No</th>
                                        <th style="width: 20%;">Email</th>
                                        <th style="width: 20%;">Name</th>
                                        <th style="width: 20%;">Register Date</th>
                                        <th style="width: 20%;">Verified Date</th>
                                        <th style="width: 10%;">Status</th>
                                        <th class="text-center" style="width: 5%;">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                    @forelse ($admin as $item)
                                        <tr>
                                            <td class="text-center fw-medium">{{ $loop->iteration }}</td>
                                            <td>
                                                {{ $item->email }}
                                            </td>
                                            <td>
                                                {{ $item->name }}
                                            </td>
                                            <td>
                                                {{ $item->created_at }}
                                            </td>
                                            <td>
                                                {{ $item->email_verified_at }}
                                            </td>
                                            <td class="text-center">
                                                    <span class="badge bg-label-{{ $item->deleted_at == null ? 'primary' : 'danger' }} me-1">{{ $item->deleted_at == null ? 'Active' : 'Deleted' }}
                                                    </span>
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                            data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="bx bx-trash me-1"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center" colspan="7">No Data</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>

                            </div>

                            <div class="mt-3">
                                {{ $admin->onEachSide(1)->links() }}
                            </div>
                        </div>


                        <div class="divider">
                            <div class="divider-text">Divider</div>
                        </div>


                        {{-- With Role Member  --}}
                        <div class="card">
                            <h5 class="card-header">Member</h5>
                            <div class="table-responsive text-wrap">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th class="text-center" style="width: 5%;">No</th>
                                        <th style="width: 20%;">Email</th>
                                        <th style="width: 20%;">Name</th>
                                        <th style="width: 20%;">Register Date</th>
                                        <th style="width: 20%;">Verified Date</th>
                                        <th style="width: 10%;">Status</th>
                                        <th class="text-center" style="width: 5%;">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                    @forelse ($member as $item)
                                        <tr>
                                            <td class="text-center fw-medium">{{ $loop->iteration }}</td>
                                            <td>
                                                {{ $item->email }}
                                            </td>
                                            <td>
                                                {{ $item->name }}
                                            </td>
                                            <td>
                                                {{ $item->created_at }}
                                            </td>
                                            <td>
                                                {{ $item->email_verified_at }}
                                            </td>
                                            <td class="text-center">
                                                    <span class="badge bg-label-{{ $item->deleted_at == null ? 'primary' : 'danger' }} me-1">{{ $item->deleted_at == null ? 'Active' : 'Deleted' }}
                                                    </span>
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                            data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="bx bx-trash me-1"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center" colspan="7">No Data</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>

                            <div class="mt-3">
                                {{ $member->onEachSide(1)->links() }}
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
