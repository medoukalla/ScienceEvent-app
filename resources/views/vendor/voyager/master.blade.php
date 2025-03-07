<!DOCTYPE html>

<html lang="{{ config('app.locale') }}" dir="{{ __('voyager::generic.is_rtl') == 'true' ? 'rtl' : 'ltr' }}"  data-style="light">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('page_title', setting('admin.title') . " - " . setting('admin.description'))</title>

    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="/">
    
    
    <!-- Favicon -->
    <?php $admin_favicon = Voyager::setting('admin.icon_image', ''); ?>
    @if($admin_favicon == '')
        <link rel="shortcut icon" href="{{ voyager_asset('images/logo-icon.png') }}" type="image/png">
    @else
        <link rel="shortcut icon" href="{{ Voyager::image($admin_favicon) }}" type="image/png">
    @endif

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets-dashboard/vendor/fonts/fontawesome.css') }}" />


    <link rel="stylesheet" href="{{ asset('assets-dashboard/vendor/fonts/flag-icons.css') }}" />

    <!-- Core CSS -->
    
    <link rel="stylesheet" href="{{ asset('assets-dashboard/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets-dashboard/vendor/css/rtl/theme-default.css') }}" class="template-customizer-theme-css" />
    
    <link rel="stylesheet" href="{{ asset('assets-dashboard/css/demo.css') }}" />
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets-dashboard/vendor/libs/node-waves/node-waves.css') }}" />
    
    <link rel="stylesheet" href="{{ asset('assets-dashboard/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets-dashboard/vendor/libs/typeahead-js/typeahead.css') }}" /> 
    <link rel="stylesheet" href="{{ asset('assets-dashboard/vendor/libs/apex-charts/apex-charts.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets-dashboard/vendor/libs/swiper/swiper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets-dashboard/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-dashboard/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-dashboard/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}">

    <link rel="stylesheet" href="{{ asset('assets-dashboard/vendor/fonts/tabler-icons.css') }}"/>


    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets-dashboard/vendor/css/pages/cards-advance.css') }}" />

    <link rel="stylesheet" href="{{ voyager_asset('css/app.css') }}">


    <!-- timymce editor  -->
    <script src="https://cdn.tiny.cloud/1/pgs9q9rp2as64d2xxnbtfdo6xxisqb8vb0v8mq8qur0vmt65/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>


    @yield('css')
    @if(__('voyager::generic.is_rtl') == 'true')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
        <link rel="stylesheet" href="{{ voyager_asset('css/rtl.css') }}">
    @endif

    @if(!empty(config('voyager.additional_css')))<!-- Additional CSS -->
        @foreach(config('voyager.additional_css') as $css)<link rel="stylesheet" type="text/css" href="{{ asset($css) }}">@endforeach
    @endif

    @yield('head')
    
    @livewireStyles
    

    <style>
        @import url('https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css');

    </style>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets-dashboard/js/config.js') }}"></script>
    
  </head>

  <body class="voyager @if(isset($dataType) && isset($dataType->slug)){{ $dataType->slug }}@endif">

    @php
        if (\Illuminate\Support\Str::startsWith(Auth::user()->avatar, 'http://') || \Illuminate\Support\Str::startsWith(Auth::user()->avatar, 'https://')) {
        $user_avatar = Auth::user()->avatar;
        } else {
            $user_avatar = Voyager::image(Auth::user()->avatar);
        }
    @endphp

    
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">

            <!-- Menu Sidebar -->
            @include('voyager::dashboard.sidebar')

            <!-- Menu Sidebar -->

            <!-- Layout container -->
            <div class="layout-page">

                <!-- Navbar -->
                @include('voyager::dashboard.navbar')
                <!-- Navbar -->


                <!-- Content wrapper -->
                <div class="content-wrapper vyager">

                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row g-6" id="vyager">
                            @yield('page_header')

                            @yield('content')
                        </div>
                    </div>
                    <!-- Content -->


                    <!-- Footer -->
                    {{-- @include('voyager::partials.app-footer') --}}
                    <!-- Footer -->


                    <div class="content-backdrop fade"></div>


                </div>
                <!-- Content wrapper -->



            </div>
            <!-- / Layout page -->


        </div>


        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->


        



    <!-- Javascript Libs -->
    <!-- Core JS -->
    <script src="{{ asset('assets-dashboard/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets-dashboard/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets-dashboard/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets-dashboard/vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ asset('assets-dashboard/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets-dashboard/vendor/libs/hammer/hammer.js') }}"></script>
    {{-- <script src="{{ asset('assets-dashboard/vendor/libs/i18n/i18n.js') }}"></script> --}}
    <script src="{{ asset('assets-dashboard/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    {{-- <script src="{{ asset('assets-dashboard/vendor/js/menu.js') }}"></script> --}}
    
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets-dashboard/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets-dashboard/vendor/libs/swiper/swiper.js') }}"></script>
    <script src="{{ asset('assets-dashboard/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets-dashboard/js/main.js') }}"></script>
    

    <!-- Page JS -->
    <script src="{{ asset('assets-dashboard/js/dashboards-analytics.js') }}"></script>

    <script type="text/javascript" src="{{ voyager_asset('js/app.js') }}"></script>


    @if ( Auth::user()->role->id == 2 )
        <!--StartofTawk.toScript-->
        <script type="text/javascript"> var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date(); (function(){ var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0]; s1.async=true; s1.src='https://embed.tawk.to/66aa527732dca6db2cb811cf/default'; s1.charset='UTF-8'; s1.setAttribute('crossorigin','*'); s0.parentNode.insertBefore(s1,s0); })(); </script>
        <!--End of Tawk.to Script-->
    @endif

    <script>
        @if(Session::has('alerts'))
            let alerts = {!! json_encode(Session::get('alerts')) !!};
            helpers.displayAlerts(alerts, toastr);
        @endif
    
        @if(Session::has('message'))
    
        // TODO: change Controllers to use AlertsMessages trait... then remove this
        var alertType = {!! json_encode(Session::get('alert-type', 'info')) !!};
        var alertMessage = {!! json_encode(Session::get('message')) !!};
        var alerter = toastr[alertType];
    
        if (alerter) {
            alerter(alertMessage);
        } else {
            toastr.error("toastr alert-type " + alertType + " is unknown");
        }
        @endif
    </script>
    @include('voyager::media.manager')
    @yield('javascript')
    @stack('javascript')
    @if(!empty(config('voyager.additional_js')))<!-- Additional Javascript -->
        @foreach(config('voyager.additional_js') as $js)<script type="text/javascript" src="{{ asset($js) }}"></script>@endforeach
    @endif
    @livewireScripts

</body>
</html>
