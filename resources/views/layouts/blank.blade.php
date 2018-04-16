<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gentellela Alela! | </title>

        <!-- Bootstrap -->
        <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
        {{--<!-- Font Awesome -->--}}
        <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
        {{--<!-- Custom Theme Style -->--}}
      {{----}}
        {{--<!-- NProgress -->--}}
        <link href="{{asset('css/nprogress.css') }}" rel="stylesheet">

        {{--<!-- FullCalendar -->--}}
        {{--<link href="{{asset('css/fullcalendar.min.css') }}" rel="stylesheet">--}}
        {{--<link href="{{asset('css/fullcalendar.print.css') }}" rel="stylesheet" media="print">--}}
        {{--<!-- iCheck -->--}}
        <link href="{{asset('css/green.css') }}" rel="stylesheet">

        {{--<!-- pnotfy -->--}}
        <link href="{{asset('css/pnotify.css') }}" rel="stylesheet">

        <link href="{{asset('css/pnotify.buttons.css') }}" rel="stylesheet">

        {{--<link href="{{asset('css/pnotify.nonblock.css') }}" rel="stylesheet">--}}
        {{--<!-- jQuery custom content scroller -->--}}
        {{--<link href="{{asset('css/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet"/>--}}

        {{--<!-- USE IN FORM -->--}}
        {{--<!-- bootstrap-wysiwyg -->--}}
        {{--<link href="{{asset('css/prettify.min.css') }}" rel="stylesheet">--}}
        {{--<!-- Select2 -->--}}
        {{--<link href="{{asset('css/select2.min.css') }}" rel="stylesheet">--}}
        {{--<!-- Switchery -->--}}
        {{--<link href="{{asset('css/switchery.min.css') }}" rel="stylesheet">--}}
        {{--<!-- starrr -->--}}
        {{--<link href="{{asset('css/starrr.css') }}" rel="stylesheet">--}}

        {{--<!-- Ion.RangeSlider -->--}}
        <link href="{{asset('css/normalize.css') }}" rel="stylesheet">
        {{--<link href="{{asset('css/ion.rangeSlider.css') }}" rel="stylesheet">--}}
        {{--<link href="{{asset('css/ion.rangeSlider.skinFlat.css') }}" rel="stylesheet">--}}
        {{--<!-- Bootstrap Colorpicker -->--}}
        {{--<link href="{{asset('css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">--}}

        {{--<link href="{{asset('css/cropper.min.css') }}" rel="stylesheet">--}}

        {{--<!-- Dropzone.js -->--}}
        {{--<link href="{{asset('css/dropzone.min.css') }}" rel="stylesheet">--}}
        {{--<!-- USE IN FORM -->--}}

        {{--<!-- bootstrap-progressbar -->--}}
        {{--<link href="{{asset('css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">--}}
        {{--<!-- PNotify -->--}}
        {{--<link href="{{asset('css/pnotify.css') }}" rel="stylesheet">--}}
        {{--<link href="{{asset('css/pnotify.buttons.css') }}" rel="stylesheet">--}}
        {{--<link href="{{asset('css/pnotify.nonblock.css') }}" rel="stylesheet">--}}

        {{--<!-- JQVMap -->--}}
        {{--<link href="{{asset('css/jqvmap.min.css') }}" rel="stylesheet"/>--}}

       {{----}}
        <link href="{{ asset("css/daterangepicker.css") }}" rel="stylesheet">

        {{--<!-- Datatables -->--}}
        <link href="{{asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
        {{--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>--}}
        <link href="{{asset('css/buttons.bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{asset('css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{asset('css/responsive.bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{asset('css/scroller.bootstrap.min.css') }}" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="{{asset('css/custom.min.css') }}" rel="stylesheet">
{{--        <link href="{{asset('css/site.css') }}" rel="stylesheet">--}}

        @stack('stylesheets')

    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                @include('includes/sidebar')

                @include('includes/topbar')

                @yield('main_container')

            </div>
        </div>

        {{--<!-- jQuery -->--}}
        {{--<script src="{{ asset("js/jquery.min.js") }}"></script>--}}

        {{--<!-- Bootstrap -->--}}
        {{--<script src="{{ asset("js/bootstrap.min.js") }}"></script>--}}
        {{--<script src="{{ asset("js/jquery.dataTables.min.js") }}"></script>--}}


        {{--<script src="{{ asset("js/gentelella.min.js") }}"></script>--}}
        {{--<!-- Custom Theme Scripts -->--}}
        <!-- jQuery -->

        {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>--}}
        {{--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>--}}
        {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
        <script src="{{ asset("js/jquery.min.js") }}"></script>

        <!-- Bootstrap -->
        <script src="{{ asset("js/bootstrap.min.js") }}"></script>
        <!-- FastClick -->
        {{--<script src="{{ asset("js/jquery.dataTables.min.js") }}"></script>--}}
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
        <script src="{{ asset("js/moment.min.js") }}"></script>

        <script src="{{ asset("js/fastclick.js") }}"></script>
        <!-- inputmask -->

        <!-- NProgress -->
        <script src="{{ asset("js/jquery.inputmask.bundle.js") }}"></script>
        <script src="{{ asset("js/nprogress.js") }}"></script>
        <script src="{{ asset("js/daterangepicker.js") }}"></script>

        <script src="{{ asset("js/validator.js") }}"></script>
        <script src="{{ asset("js/pnotify.js") }}"></script>
        <script src="{{ asset("js/pnotify.buttons.js") }}"></script>

        {{--<script src="{{ asset("js/pnotify.nonblock.js") }}"></script>--}}

        <script src="{{ asset("js/custom.min.js") }}"></script>

        {{--/-------başla-///////////////////////--}}

        {{-----------------------------bitirrrrrr/--}}
        <!-- Custom Theme Scripts -->
        {{--<script src="{{ asset("js/jquery.min.js") }}"></script>--}}
        {{--<script src="{{ asset("js/bootstrap.min.js") }}"></script>--}}
        {{--<script src="{{ asset("js/fastclick.js") }}"></script>--}}
        {{--<script src="{{ asset("js/nprogress.js") }}"></script>--}}
        {{--<script src="{{ asset("js/validator.js") }}"></script>--}}
        {{--<script src="{{ asset("js/custom.min.js") }}"></script>--}}
        {{--<script src="http://gentelella.app/assets/js/validator.js"></script>--}}




        <!-- Datatables -->


        @yield('content_script')
    </body>
</html>