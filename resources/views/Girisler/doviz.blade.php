@extends('layouts.blank')
@push('stylesheets')
@endpush
@section('main_container')



    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ asset("js/jquery.js") }}"></script>
        <link href="{{ asset("css/site.css") }}" rel="stylesheet">
        <!-- DataTables -->
        <!-- Bootstrap JavaScript -->
        <!-- App scripts -->

        <!-- Bootstrap CSS -->

    </head>

    <div class="right_col" role="main">
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>DÖVİZ DETAYI </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>

                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                            <div class="x_content">






                                    <br />



                                    <div class="h-20"></div>

                                    <div class="clearfix"></div>


                                    <div class="text-right">

                                        <button  class="btn btn-success btn-insert btn-xs-block"  id="savedoviz"  ><i class="fa fa-plus-square"></i>Ekle</button>
                                    </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Döviz Listesi </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                            <div class="x_content" style="margin-top:15px">

                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $('#doviztabl').DataTable({
                                            processing: true
                                        });
                                    });


                                </script>

                                <div class="table-responsive">
                                    <table class="table table-striped" id="doviztablo">
                                        <thead>
                                        <tr class="headings">

                                            <th class="column-title">Adı </th>
                                            <th>Güncelle</th>
                                            <th>Sil</th>

                                            </th>

                                        </tr>

                                        </thead>
                                        {{ csrf_field() }}

                                        <tbody>
                                        @foreach($doviz as $dovizt )

                                            <tr class="item{{$dovizt->did}}">

                                                <td><a href="javascript:void(0);" id="dovizad" data-did="{{$dovizt->did}}" data-dad="{{$dovizt->dad}}">{{$dovizt->dad}}</a></td>

                                                <td><a href="javascript:void(0);" id="editdoviz" data-did="{{$dovizt->did}}" data-dad="{{$dovizt->dad}}"><i class="fa fa-edit fa-2x"></i></a></td>

                                                <td><a href="javascript:void(0);" id="sildoviz" data-did="{{$dovizt->did}}"><i class="fa fa-trash-o fa-2x" ></i></a></td>

                                            </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        {{--//// kaydet form //////////////////--}}
        {{--//// kaydet form //////////////////--}}

    <form action="#" id="formkaydet" method="post">
        {{ csrf_field() }}
        {{--//// kaydet form //////////////////--}}
        <div class="modal fade"  id="savedovizpopup" role="dialog">
            <div class="modal-dialog " role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span >×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Döviz</h4>
                    </div>
                    <div class="modal-body"  >

                        <div class="col-lg-12" >


                            <div class="form-group">
                                <label for="address">Döviz</label>

                                <input type="text" class="form-control"  id="dad" name="dad"  >
                                {{ csrf_field() }}

                            </div>




                        </div>


                    </div>
                    <div class="modal-footer footerekle" style="margin-top: 100px">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary add" data-token="{{ csrf_token() }}" data-dismiss="modal">Kaydet</button>
                    </div>

                </div>
            </div>
        </div>
        {{--//// kaydet form //////////////////--}}

    </form>
    <div class="modal fade "  id="editdovizpopup" role="dialog">
        <div class="modal-dialog " role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span >×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Döviz</h4>
                </div>
                <div class="modal-body"  >

                    <div class="col-lg-12" >


                        <div class="form-group">
                            <label for="address">Döviz</label>

                            <input  class="form-control"  id="edad" name="edad"  >

                        </div>

                        {{ csrf_field() }}



                    </div>


                </div>
                <div class="modal-footer footeredit" style="margin-top: 100px">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary edit" data-token="{{ csrf_token() }}" data-dismiss="modal">Kaydet</button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="bankasilpopup" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Döviz Ekle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <input type="hidden" id="dovizsilid" value="">
                {{ csrf_field() }}

                <div class="modal-body">
                    Döviz Silinecek Eminmisiniz?
                </div>
                <div class="footersild">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary delete"  id="sil" data-dismiss="modal" >Eminmisiniz?</button>
                </div>
            </div>
        </div>
    </div>






    <footer>
        <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
    </footer>
@endsection
@section('content_script')

    <script type="text/javascript">
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).on('click', '#savedoviz', function() {
            $('#savedovizpopup').modal();
        });
            $(document).on('click', '#editdoviz', function() {
               edid = $(this).attr('data-did');
                $('#edad').val($(this).data('dad'));
                $('#editdovizpopup').modal();

            });
            $(document).on('click', '#sildoviz', function() {
                $('#dovizsilid').val($(this).data('did'));
                $('#bankasilpopup').modal();
                });


            $('.footerekle').on('click', '.add', function() {
              var dad=$('#dad').val();
            $.ajax({
                dataType: 'JSON',
                type: 'POST',
                url: '/dovizkaydet',
                data: {
                    '_token': $('input[name=csrf-token]').val(),
                    'dad': dad
                },

                success: function(data) {
                    console.log(data);
                    $('#doviztablo').append("<tr class='item" + data.did + "'>" +
                        "<td><a href='javascript:void(0);' id='dovizad'  data-did='" + data.did + "' data-dad='" + data.dad + "'>" + data.dad + "</a></td>" +
                        "<td><a href='javascript:void(0);' id='editdoviz' data-did='" + data.did + "' data-dad='" + data.dad + "'><i class='fa fa-edit fa-2x'></i></a></td>" +
                        "<td><a href='javascript:void(0);' id='sildoviz' data-did='" + data.did + "'><i class='fa fa-trash-o fa-2x'></i></a></td></tr>"
                    );

                    new PNotify({
                        title: 'Popup Title',
                        text: 'Operation Complated!',
                        type: 'success',
                        // type: 'notice',
                        styling:'bootstrap3'
                    });

                    $('#formkaydet').trigger('reset');
                }
            });

        });

            $('.footeredit').on('click', '.edit', function() {
                var edad=$('#edad').val();
                $.ajax({
                    dataType: 'JSON',
                    type: 'PUT',
                    url: '/dovizedit/' + edid,
                    data: {
                        '_token': $('input[name=csrf-token]').val(),
                        'dad': edad
                    },
                    success: function(data) {
                        console.log(data);
                        $('.item' + data.did).replaceWith("<tr class='item" + data.did + "'>" +
                            "<td><a href='javascript:void(0);' id='dovizad'  data-did='" + data.did + "' data-dad='" + data.dad + "'>" + data.dad + "</a></td>" +
                            "<td><a href='javascript:void(0);' id='editdoviz' data-did='" + data.did + "' data-dad='" + data.dad + "'><i class='fa fa-edit fa-2x'></i></a></td>" +
                            "<td><a href='javascript:void(0);' id='sildoviz' data-did='" + data.did + "'><i class='fa fa-trash-o fa-2x'></i></a></td></tr>"
                        );



                        new PNotify({
                            title: 'Popup Title',
                            text: 'Operation Complated!',
                            type: 'success',
                            // type: 'notice',
                            styling:'bootstrap3'
                        });

//                        $('#formedit').trigger('reset');

                    }


                });

            });


        $(document).on('click', '#sildoviz', function() {
            dovizid = $('#dovizsilid').val();
        });
            $('.footersild').on('click', '.delete', function() {
                $.ajax({
                    dataType: 'JSON',
                    type: 'delete',
                    url: '/dovizsil/' + dovizid,
                    data: {
                        '_token': $('input[name=_token]').val()
                    },
                    success: function(data) {
                        $('.item' + data['did']).remove();
                        console.log(data);
                        new PNotify({
                            title: '',
                            text: 'Başarıyla Silindi!',
                            type: 'success',
                            // type: 'notice',
                            styling:'bootstrap3'
                        });
                    }

                });
            });
            $(":input").keyup(function(){
                this.value = this.value.toUpperCase();
            });
        });
    </script>
@endsection