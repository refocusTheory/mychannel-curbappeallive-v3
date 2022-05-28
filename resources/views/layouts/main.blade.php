<!DOCTYPE HTML>
<html lang="en">
<head>
@include('partials._head')
</head>
    
<body class="theme-light">
    
    @include('partials._preloader')

    <div id="page">

        @include('partials._header')

        @include('partials._footer')

        <div class="page-title page-title-fixed">
            <div>
                <h1 class="font-16 color-highlight mb-n3">Welcome Back</h1>
                <h1>Enabled</h1>
            </div>
            <a href="#" class="page-title-icon shadow-xl bg-theme mt-2 color-theme" data-menu="menu-share"><i class="fa fa-share-alt"></i></a>
            <a href="#" class="page-title-icon shadow-xl bg-theme mt-2 color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
            <a href="#" class="page-title-icon shadow-xl bg-theme mt-2 color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
            <a href="#" class="page-title-icon shadow-xl bg-theme mt-2 color-theme" data-menu="menu-main"><i class="fa fa-bars"></i></a>
        </div>
        <div class="page-title-clear"></div>

        <div class="page-content pb-4">

            @yield('content')

        </div><!-- Page content ends here-->
        
        <!-- Main Menu--> 
        @include('menus._main')

        <!-- Share Menu-->
        @include('menus._share')

        <!-- Colors Menu-->
        @include('menus._colors')
        
    </div>

    @include('partials._scripts')

</body>
