@include('includes._header')


    <!-- body start -->
    <body class="loading" data-layout-mode="default" data-layout-color="light" data-layout-width="fluid" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='false'>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->

@include('includes._navbar')

@include('includes._sidebar')


@yield('contenu')


@include('includes._footer')

</div>
<!-- END wrapper -->
