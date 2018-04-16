
<html>
<head>
    <!-- <meta http-equiv="content-type" content="text/html; charset=utf-8" />
     <title>Laravel 5 - Implementing datatables tutorial using yajra package</title>
     <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
     <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
     <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
     <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> -->
    {{--<link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">--}}
    <script src="{{ asset("js/jquery.min.js") }}"></script>
    <script src="{{ asset("js/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("js/validator.js") }}"></script>
    <script src="{{ asset("js/dataTables.bootstrap.min.js") }}"></script>
    <script src="{{ asset("js/dataTables.buttons.min.js") }}"></script>
    <script src="{{ asset("js/pnotify.js") }}"></script>
    <script src="{{ asset("js/pnotify.buttons.js") }}"></script>
    <script src="{{ asset("js/jquery.inputmask.bundle.js") }}"></script>
    <script src="{{ asset("js/pnotify.nonblock.js") }}"></script>
    <script src="{{ asset("js/validator.js") }}"></script>

    {{--<link href="{{ asset('css/sunburst.css') }}" rel="stylesheet"type="text/css">--}}
    {{--<link href="{{ asset('js/daterange/daterangepicker1.css') }}" rel="stylesheet"type="text/css">--}}
    {{--<link href="{{asset('css/custom.min.css') }}" rel="stylesheet">--}}
    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
    <link href="{{asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('css/pnotify.css') }}" rel="stylesheet">

    <link href="{{asset('css/pnotify.buttons.css') }}" rel="stylesheet">

    <link href="{{asset('css/pnotify.nonblock.css') }}" rel="stylesheet">


    {{--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>--}}
    {{--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>--}}







    {{--<link href="{{ asset("css/gentelella.min.css") }}" rel="stylesheet">--}}

    {{--<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">--}}
    {{--<link href="{{ asset("css/custom.css") }}" rel="stylesheet">--}}
    {{--<link href="{{ asset("css/site.css") }}" rel="stylesheet">--}}

</head>




<body>
<div class="container">
    <form  action="{{ action('Controller@acpost') }}" class="form-horizontal form-label-left" name="form1" method="POST"  novalidate>
        {{ csrf_field() }}


        <input class="form-control"  id="cunvan" name="name">





        <div class="col-md-12" id="banksatir">
            <div class="row" id="rowclone">

                <div >
                    <div class="col-md-3">
                        <label for="address">IBAN</label>

                        <input class="form-control"  id="iban" name="iban[]">

                    </div>
                    <div class="col-md-2">
                        <label for="address">Şube</label>
                        <input class="form-control" id="csube" name="csube[]">
                    </div>
                    <div class="col-md-1">
                        <label for="address">Şube K</label>
                        <input class="form-control"id="csubek" name="csubek[]">
                    </div>
                    <div class="col-md-2">
                        <label for="address">Hesap No</label>
                        <input class="form-control" id="chesapno" name="chesapno[]">
                    </div>
                    <div class="col-md-1 fright">
                        <br>

                        <a class="btn btn-default plusekle "  href="" id="satirsil" aria-label="Settings">
                            <i class="fa fa-times" aria-hidden="true"  ></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-success" href="#" id="satirekle" type="submit">Satır Ekle</button>
        <div class="h-20"></div>
        <div class="clearfix"></div>
        {{ csrf_field() }}
        <div class="table-responsive text-center">
            {{--<table class="table table-borderless" id="table">--}}
                {{--<thead>--}}
                {{--<tr>--}}
                    {{--<th class="text-center">Name</th>--}}
                    {{--<th class="text-center">Actions</th>--}}
                {{--</tr>--}}
                {{--</thead>--}}
                {{--@foreach($data as $item)--}}
                    {{--<tr class="item{{$item->cunvan}}">--}}
                        {{--<td>{{$item->cunvan}}</td>--}}
                        {{--<td><button class="edit-modal btn btn-info" data-id=""--}}
                                    {{--data-name="">--}}
                                {{--<span class="glyphicon glyphicon-edit"></span> Edit--}}
                            {{--</button>--}}
                            {{--<button class="delete-modal btn btn-danger"--}}
                                    {{--data-id="" data-name="">--}}
                                {{--<span class="glyphicon glyphicon-trash"></span> Delete--}}
                            {{--</button></td>--}}
                    {{--</tr>--}}
                {{--@endforeach--}}
            {{--</table>--}}
        </div>
        <div class="uyari"></div>
    </form>

</div>
</div>
{{--<script src="../vendors/jquery/dist/jquery.min.js"></script>--}}
{{--<!-- Bootstrap -->--}}
{{--<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>--}}
{{--<!-- FastClick -->--}}
{{--<script src="../vendors/fastclick/lib/fastclick.js"></script>--}}
{{--<!-- NProgress -->--}}
{{--<script src="../vendors/nprogress/nprogress.js"></script>--}}
{{--<!-- validator -->--}}
{{--<script src="../vendors/validator/validator.js"></script>--}}

{{--<!-- Custom Theme Scripts -->--}}
{{--<script src="../build/js/custom.min.js"></script>--}}
{{--<script type="text/javascript">--}}



    {{--//***************************başla****************************************--}}
    {{--$.ajaxSetup({--}}
        {{--headers: {--}}
            {{--'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
        {{--}--}}
    {{--});--}}







    {{--$(document).on('click','#satirekle',function () {--}}
        {{--var cunvan=$("#cunvan").val()--}}

        {{--if(cunvan =='') {--}}
            {{--alert('isim yazmadınız');--}}
        {{--}--}}
        {{--else {--}}
            {{--$.ajax({--}}
                {{--type: 'post',--}}
                {{--url: '/ibo/additem',--}}
{{--//                        cunvan: $("#cunvan").val(),--}}
                {{--data: {--}}
                    {{--'_token': $('input[name=_token]').val(),--}}
                    {{--'cunvan': $('#cunvan').val()--}}
                {{--},--}}
                {{--success: function(data) {--}}
                    {{--if ((data.errors)){--}}
                        {{--$('.error').removeClass('hidden');--}}
                        {{--$('.error').text(data.errors.name);--}}
                    {{--}--}}
                    {{--else {--}}
                        {{--$('.error').addClass('hidden');--}}
                        {{--$('#table').append(--}}
                            {{--"<tr class='item'>" +--}}
                            {{--"<td>" + data.cunvan + "</td>" +--}}
                            {{--"<td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "'>" +--}}
                            {{--"<span class='glyphicon glyphicon-edit'></span> Edit</button> " +--}}
                            {{--"<button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "'>" +--}}
                            {{--"<span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");--}}
                    {{--}--}}
                {{--},--}}

            {{--});--}}
            {{--$('#cunvan').val('');--}}

        {{--}--}}



    {{--});--}}










{{--</script>--}}
</body>







</html>
