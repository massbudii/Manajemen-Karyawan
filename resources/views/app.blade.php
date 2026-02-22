<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.style')
</head>

<body>

    {{-- @include('sweetalert::alert') --}}


    <!-- Begin page -->
    <div id="wrapper">


        <!-- Topbar Start -->
        <div class="navbar-custom">
            @include('layouts.topbar')
        </div>
        <!-- end Topbar -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            @include('layouts.sidebar')
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col mb-2">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Abstack</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Basic Tables</li>
                                    </ol>
                                </div>
                              <h4 class="page-title">@yield('title')</h4>
                            </div>
                        </div>
                    </div>

                    <!-- start page title -->
                    @yield('content')
                    <!-- end page title -->

                </div> <!-- end container-fluid -->

            </div> <!-- end content -->



            <!-- Footer Start -->
            <footer class="footer">
                @include('layouts.footer')
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->



    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    @include('layouts.script')

</body>

</html>
