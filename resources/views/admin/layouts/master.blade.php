<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.includes.head')
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        @include('admin.includes.nav')
        @include('admin.includes.sidebar')

        <div class="content-wrapper">
            @yield('content')
        </div>
        
        @include('admin.includes.footer')
        @include('admin.includes.footer-scripts')
    </body>
</html>