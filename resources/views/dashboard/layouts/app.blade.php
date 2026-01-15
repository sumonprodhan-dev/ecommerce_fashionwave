<!DOCTYPE html>
<html lang="en">

<head>
    @stack('title')
    @include('dashboard.partials.head')
    @stack('styles')
</head>

<body>
    <!-- Sidebar area start -->
    @include('dashboard.partials.sidebar')
    <!-- Sidebar area end -->
    <div class="main-content">
        <!-- Header section start -->
        @include('dashboard.partials.header')
        <!-- Header section end -->
        <div class="page-content-wrap">
            <!-- Container Fluid-->
            
            @yield('content')

            <!-- Footer section start -->
            @include('dashboard.partials.footer')
            <!-- Footer section end -->
        </div>

    </div>
    <!-- Modal Logout -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary me-2" data-bs-dismiss="modal">Cancel</button>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        @method('post')
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- js --}}
    @include('dashboard.partials.js')
    @stack('scripts')
</body>

</html>