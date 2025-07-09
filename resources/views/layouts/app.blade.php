<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-startbar="light" data-bs-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" />
         <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
         <link href="https://cdn.jsdelivr.net/npm/@icon/icofont@1.0.1-alpha.1/icofont.min.css" rel="stylesheet">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <!-- <link rel="preconnect" href="https://fonts.bunny.net"> -->
        <!-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> -->

        <!-- Scripts -->
      
    </head>
    <body>
            <!-- Top Bar Start -->
            @include('layouts/navbar');
            <!-- end navbar-->
             <!-- leftbar-tab-menu -->
             @include('layouts/sidebar');
              <!-- end leftbar-tab-menu-->
         
         <div class="page-wrapper">
            <!-- Page Content-->
            <div class="page-content">
            <!-- Page Content -->

            <!-- <main> -->
                {{ $slot }}
            <!-- </main> -->
             <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->
                
                <!--end Rightbar/offcanvas-->
                <!--end Rightbar-->
                
             <!--Start Footer-->
                @include('layouts/footer');
                
                <!--end footer-->
            
           </div>
            <!-- end page content -->
        </div>

        <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('libs/apexcharts/apexcharts.min.js') }} "></script>
        <script src="{{ asset('js/pages/projects-task.init.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
