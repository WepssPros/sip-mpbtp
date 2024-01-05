<!DOCTYPE html>
<html dir="ltr" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
        <title>Nice admin Template - The Ultimate Multipurpose admin template</title>

        @include('components.admin.css')


    </head>

    <body>

        @include('components.admin.loader')

        <div id="main-wrapper">

            @include('components.admin.header')


            @include('components.admin.sidebar')


            <div class="page-wrapper">

                @yield('breadcump-content')


                <div class="container-fluid">

                    @yield('admin-content')

                </div>

                @include('components.admin.footer')

            </div>

        </div>

        {{-- @include('components.admin.rightbar')
        <div class="chat-windows"></div>  --}}

        <!-- All Jquery -->
        @include('components.admin.js')
    </body>

</html>