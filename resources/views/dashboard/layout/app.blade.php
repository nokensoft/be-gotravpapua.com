<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />

    <title> {{ $settings->site_title }} </title>

    <!-- META TAGS -->
    {!! $settings->meta_tags ?? '' !!}

    <!-- HTML METAS -->
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $settings->site_title }}" />
    <meta property="og:description" content="{{ $settings->meta_description }}" />
    <meta property="og:site_name" content="{{ $settings->site_title }}" />
    <meta property="og:image" content="{{ asset('images/settings' . $settings->logo) }}" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- FAVICON -->
    <link rel="apple-touch-icon" href="{{ asset('images/settings/' . $settings->logo_favicon) }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/settings/' . $settings->logo_favicon) }}">

    <!-- CSRF TOKEN -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- HEAD LINKS AND SCRIPTS -->
    @include('dashboard.layout.includes.header')

</head>
<body class="loading" data-layout-mode="detached" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": true}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

    <!-- WRAPPER START -->
    <div id="wrapper">

        <!-- HEADER NAVIGATION -->
        @include('dashboard.layout.includes.header-nav')

        <!-- SIDEBAR NAVIGATION -->
        @include('dashboard.layout.includes.sidebar')

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
                </div> <!-- container -->
            </div> <!-- content -->
            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            {!! $settings->deskripsi_situs ?? '' !!}
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-sm-block">
                                {!! $settings->copyright ?? '' !!}
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- WRAPPER END -->

    <!-- FOOTER -->
    @include('dashboard.layout.includes.footer')

    <!-- SWET ALERT -->
    @include('sweetalert::alert')

</body>
</html>
