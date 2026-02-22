
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
