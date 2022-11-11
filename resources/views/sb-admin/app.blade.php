
<!DOCTYPE html>
<html lang="en">

@include('sb-admin/head')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('sb-admin/sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Main -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    @include('sb-admin/index')
                    <!-- <h1 class="h3 mb-4 text-gray-800">Blank Page</h1> -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('sb-admin/footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    @include('sb-admin/button-topbar')
    <!-- End Scroll to Top Button-->

    <!-- Logout Modal-->
    @include('sb-admin/logout')
    <!-- End Logout Modal-->

    <!-- Bootstrap core JavaScript-->
    @include('sb-admin/script')
    <!-- End Bootstrap core JavaScript-->


</body>

</html>