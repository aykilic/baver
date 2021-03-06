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
                            <h2>Stok Türü Detayı </h2>
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
                            <div class="x_content">
                                <form id="formkaydet" action="" method="POST" >
                                    {{csrf_field()}}



                                    <br />
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6">



                                            {{--textbox başlangıç--}}

                                            <div class="form-group ">
                                                <label for="name">Stok Adı </label>
                                                <input type="text" name="stokturad" id="stokturad" value="" class="form-control has-feedback-left"  autocomplate="off" aria-required="true">
                                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div> <!-- /.form-group -->

                                            <div class="form-group">

                                            </div> <!-- /.form-group -->

                                            <div class="row">
                                                <div class="col-xs-6 col-md-6">

                                                </div> <!-- /.form-group -->
                                            </div> <!-- /.col-md-6 -->
                                            <div class="col-xs-6 col-md-6">
                                                <div class="form-group">

                                                </div> <!-- /.form-group -->
                                            </div> <!-- /.col-md-6 -->
                                        </div> <!-- /.row -->

                                    </div> <!-- /.col-md-6 -->
                                    <div class="col-md-6">

                                        <div class="form-group">

                                        </div> <!-- /.form-group -->

                                        <div class="row">
                                            <div class="col-xs-6 col-md-4">
                                                <div class="form-group">

                                                </div> <!-- /.form-group -->
                                            </div> <!-- /.col -->
                                            <div class="col-xs-6 col-md-4">
                                                <div class="form-group">

                                                </div> <!-- /.col -->

                                            </div> <!-- /.row -->

                                            <div class="row">
                                                <div class="col-xs-6 col-md-6">
                                                    <div class="form-group">

                                                    </div> <!-- /.form-group -->
                                                </div> <!-- /.col-md-4 -->
                                                <div class="col-xs-6 col-md-6">
                                                    <div class="form-group">

                                                    </div> <!-- /.form-group -->
                                                </div> <!-- /.col-md-4 -->
                                            </div> <!-- /.row -->

                                        </div> <!-- /.col-md-6 -->

                                    </div> <!-- /.row -->

                                    <div class="h-20"></div>

                                    <div class="clearfix"></div>











                                    <div class="text-right">
                                        <input type="hidden" name="add">
                                        <input type="hidden" name="uniquetime" value="1501288025.81">
                                        <button  class="btn btn-success btn-insert btn-xs-block add"   type="button" ><i class="fa fa-plus-square"></i>Kaydet</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Stok Türü Listesi </h2>
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
                                        $('#banka').DataTable({
                                            processing: true
                                        });
                                    });
                                </script>
                                <div class="table-responsive">
                                    <table class="table table-striped" id="stokturutablo">
                                        <thead>
                                        <tr class="headings">
                                            <th class="column-title">Adı </th>
                                            <th>Güncelle</th>
                                            <th>Sil</th>

                                            </th>

                                        </tr>

                                        </thead>
                                        <tbody>
                                        @foreach($post as $post)
                                            <tr class="item{{$post->stokturid}}">
                                                <td><a href="javascript:void(0);" id="adstokturu" data-stokturid="{{$post->stokturid}}" data-stokturad="{{$post->stokturad}}">{{$post->stokturad}}</a></td>
                                                <td><a href="javascript:void(0);" id="editstokturu" data-stokturid="{{$post->stokturid}}" data-stokturad="{{$post->stokturad}}"><i class="fa fa-edit fa-2x"></i></a></td>
                                                <td><a href="javascript:void(0);" id="silstokturu" data-stokturid="{{$post->stokturid}}"><i class="fa fa-trash-o fa-2x" ></i></a></td>

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
    <div class="modal fade"  id="editstokturupopup" role="dialog">
        <div class="modal-dialog " role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span >×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Stok Türü</h4>
                </div>
                <div class="modal-body"  >
                    <div class="col-lg-12" >
                        <div class="form-group">
                            <label for="address">Stokturu</label>
                            <input  class="form-control"  id="estokturuad" name="estokturuad"  >
                            {{ csrf_field() }}
                        </div>
                    </div>
                </div>
                <div class="modal-footer footeredit" style="margin-top: 100px">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary edit" data-token="{{ csrf_token() }}" data-dismiss="modal">Düzenle</button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="stokturusilpopup" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Stok Türü Sil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <input type="hidden" id="stokturusilid" value="">
                <div class="modal-body">
                    Stok Türü Silinecek Eminmisiniz?
                </div>
                <div class="footersild">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary delete" data-token="{{ csrf_token() }}" id="sil" data-dismiss="modal" >Eminmisiniz?</button>
                </div>
            </div>
        </div>
    </div>
    <!-- footer content -->
    <footer>
        <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
    </footer>
@endsection
@section('content_script')
    <script type="text/javascript">
        $(document).ready(function() {




            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).on('click', '#editstokturu, #adstokturu', function () {
                estokturid = $(this).attr('data-stokturid');
                $('#estokturuad').val($(this).data('stokturad'));
                $('#editstokturupopup').modal();
            });
            $(document).on('click', '#silstokturu', function () {
                $('#stokturusilid').val($(this).data('stokturid'));
                $('#stokturusilpopup').modal();
            });
            $('#formkaydet').on('click', '.add', function() {
                var sad=$('#stokturad').val();


                if (sad=="" || sad==null) {


                    new PNotify({
                        title: 'Hata!',
                        text: 'Stok Türünü Girmediniz.',
                        type: 'error',
                        styling: 'bootstrap3'
                    });
                }
                else {
                    $.ajax({
                        dataType: 'JSON',
                        type: 'POST',
                        url: '/stokturukaydet',
                        data: {
                            '_token': $('input[name=csrf-token]').val(),
                            'sad': sad
                        },
                        success: function (data) {
                            console.log(data);
                            $('#stokturutablo').append("<tr class='item" + data.stokturid + "'>" +
                                "<td><a href='javascript:void(0);' id='adstokturu' data-stokturid='" + data.stokturid + "' data-stokturad='" + data.stokturad + "'>" + data.stokturad + "</a></td>" +
                                "<td><a href='javascript:void(0);' id='editstokturu' data-stokturuid='" + data.stokturid + "' data-stokturad='" + data.stokturad + "'><i class='fa fa-edit fa-2x'></i></a></td>" +
                                "<td><a href='javascript:void(0);' id='silstokturu' data-stokturid='" + data.stokturid + "'><i class='fa fa-trash-o fa-2x'></i></a></td></tr>"
                            );
                            new PNotify({
                                title: 'Popup Title',
                                text: 'Operation Complated!',
                                type: 'success',
                                // type: 'notice',
                                styling: 'bootstrap3'
                            });

                            $('#formkaydet').trigger('reset');
                        }
                    });
                }
            });
            $('.footeredit').on('click', '.edit', function() {
                var sad=$('#estokturuad').val();



                $.ajax({
                    dataType: 'JSON',
                    type: 'PUT',
                    url: '/stokturuedit/' + estokturid,
                    data: {
                        '_token': $('input[name=csrf-token]').val(),
                        'sad': sad
                    },
                    success: function(data) {
                        console.log(data);
                        $('.item' + data.stokturid).replaceWith("<tr class='item" + data.stokturid + "'>" +
                            "<td><a href='javascript:void(0);' id='adstokturu'  data-stokturid='" + data.stokturid + "' data-stokturad='" + data.stokturad + "'>" + data.stokturad + "</a></td>" +
                            "<td><a href='javascript:void(0);' id='editstokturu' data-stokturid='" + data.stokturid + "' data-stokturad='" + data.stokturad + "'><i class='fa fa-edit fa-2x'></i></a></td>" +
                            "<td><a href='javascript:void(0);' id='silstokturu' data-stokturid='" + data.stokturid + "'><i class='fa fa-trash-o fa-2x'></i></a></td></tr>"
                        );
                        new PNotify({
                            title: 'Popup Title',
                            text: 'Operation Complated!',
                            type: 'success',
                            // type: 'notice',
                            styling:'bootstrap3'
                        });
                    }
                });
            });
            $('.footersild').on('click', '.delete', function() {
                stokid = $('#stokturusilid').val();
                $.ajax({
                    dataType: 'JSON',
                    type: 'delete',
                    url: '/stokturusil/' + stokid,
                    data: {
                        '_token': $('input[name=_token]').val()
                    },
                    success: function(data) {
                        $('.item' + data['stokturid']).remove();
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
//   **************         büyük harf ****************/////////////////////

            $(":input").keyup(function(){
                this.value = this.value.toUpperCase();
            });
        });
    </script>
@endsection