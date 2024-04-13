<div class="mb-4 col-lg-6 order-0">
    <div class="card">
        <div class="d-flex align-items-end row">
            <div class="col-sm-7">
                <div class="card-body" style="min-height: 28vh;">
                    <h5 class="card-title text-primary">Welcome Back, {{ Auth::user()->name }}!</h5>
                    @role('Administrator')
                        <p class="mb-5">
                            Good day, What we'll do now? How about checking our users list?
                        </p>

                        <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Users</a>
                    @endrole
                </div>
            </div>
            <div class="text-center col-sm-5 text-sm-left">
                <div class="px-0 pb-0 card-body px-md-4">
                    <img src="{{ asset('assets/img/illustrations/man-with-laptop-light.png') }}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                        data-app-light-img="illustrations/man-with-laptop-light.png" />
                </div>
            </div>
        </div>
    </div>
</div>
