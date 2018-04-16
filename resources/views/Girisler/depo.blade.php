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
                            <h2>Depo Detayı </h2>
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
                                <form id="formkaydet"  method="post" >
                                    {{csrf_field()}}



                                    <br />
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6">



                                            {{--textbox başlangıç--}}

                                            <div class="form-group item">
                                                {{--{{csrf_field()}}--}}
                                                <label for="cunvan">Hesap Adı </label>
                                                <input   type="text" name="depoad" id="depoad" value="" class="form-control has-feedback-left" placeholder="Boş Bırakmayın"  >
                                                <span class="fa fa-user form-control-feedback left" aria-hidden="true" STYLE="margin-top: 29px"></span>
                                            </div> <!-- /.form-group -->

                                            <div class="form-group">
                                                <label for="email">E-Posta</label>
                                                <input type="text" name="deposta" id="deposta" value="" class="form-control" >
                                            </div> <!-- /.form-group -->

                                            <div class="row">
                                                <div class="col-xs-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="gsm">Cep Telefonu</label>
                                                        <input type="text" name="dcep" id="dcep" value="" class="form-control"  >
                                                    </div> <!-- /.form-group -->
                                                </div> <!-- /.col-md-6 -->
                                                <div class="col-xs-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone">Sabit Telefon</label>
                                                        <input type="text" name="dsabit" id="dsabit" value="" class="form-control" >
                                                    </div> <!-- /.form-group -->
                                                </div> <!-- /.col-md-6 -->
                                            </div> <!-- /.row -->
                                            <div class="row">
                                                <div class="col-xs-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="district">Yetkili Ad</label>
                                                        <input type="text" name="dyad" id="dyad" value="" class="form-control">
                                                    </div> <!-- /.form-group -->
                                                </div> <!-- /.col -->
                                                <div class="col-xs-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="city">Yetkili Tel</label>
                                                        <input type="text" name="dytel" id="dytel" value="" class="form-control" >
                                                    </div> <!-- /.form-group -->
                                                </div> <!-- /.col -->

                                            </div> <!-- /.row -->
                                        </div> <!-- /.col-md-6 -->
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="address">Adres</label>
                                                <input type="text" name="dadres" id="dadres" value="" class="form-control" >
                                            </div> <!-- /.form-group -->

                                            <div class="row">
                                                <div class="col-xs-6 col-md-4">
                                                    <div class="form-group">
                                                        <label for="district">İlçe-Bölge</label>
                                                        <input type="text" name="dilce" id="dilce" value="" class="form-control">
                                                    </div> <!-- /.form-group -->
                                                </div> <!-- /.col -->
                                                <div class="col-xs-6 col-md-4">
                                                    <div class="form-group">
                                                        <label for="city">Şehir-İl</label>
                                                        <input type="text" name="dil" id="dil" value="" class="form-control" >
                                                    </div> <!-- /.form-group -->
                                                </div> <!-- /.col -->

                                            </div> <!-- /.row -->

                                            <div class="row">
                                                <div class="col-xs-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="tax_home">Vergi Dairesi</label>
                                                        <input type="text" name="dvad" id="dvad" value="" class="form-control">
                                                    </div> <!-- /.form-group -->
                                                </div> <!-- /.col-md-4 -->
                                                <div class="col-xs-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="tax_no">Vergi No/T.C. No</label>
                                                        <input type="text" name="dvdno" id="dvdno" value="" class="form-control " >
                                                    </div> <!-- /.form-group -->
                                                </div> <!-- /.col-md-4 -->
                                            </div> <!-- /.row -->

                                        </div> <!-- /.col-md-6 -->

                                    </div>

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
                            <h2>Depo Listesi </h2>
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
                                    <table class="table table-striped" id="depotablo">
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
                                            <tr class="item{{$post->depoid}}">
                                                <td><a href="javascript:void(0);" id="adddepo" data-depoid="{{$post->depoid}}" data-depoad="{{$post->depoad}}" data-dadres="{{$post->dadres}}" data-dil="{{$post->dil}}" data-dilce="{{$post->dilce}}" data-deposta="{{$post->deposta}}" data-dcep="{{$post->dcep}}" data-dsabit="{{$post->dsabit}}" data-dvdno="{{$post->dvdno}}" data-dvad="{{$post->dvad}}" data-dyad="{{$post->dyad}}" data-dytel="{{$post->dytel}}">{{$post->depoad}}</a></td>
                                                <td><a href="javascript:void(0);" id="editdepo" data-depoid="{{$post->depoid}}" data-depoad="{{$post->depoad}}" data-dadres="{{$post->dadres}}" data-dil="{{$post->dil}}" data-dilce="{{$post->dilce}}" data-deposta="{{$post->deposta}}" data-dcep="{{$post->dcep}}" data-dsabit="{{$post->dsabit}}" data-dvdno="{{$post->dvdno}}" data-dvad="{{$post->dvad}}" data-dyad="{{$post->dyad}}" data-dytel="{{$post->dytel}}"><i class="fa fa-edit fa-2x"></i></a></td>
                                                <td><a href="javascript:void(0);" id="sildepo" data-depoid="{{$post->depoid}}"><i class="fa fa-trash-o fa-2x" ></i></a></td>

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
    <footer>


        <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
    </footer>
    <div class="modal fade bs-example-modal-lg"  id="editdepopopup" role="dialog">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span >×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Depo</h4>
                </div>
                <div class="modal-body"  >
                    <div class="row">
                        <div class="col-md-6">



                            {{--textbox başlangıç--}}

                            <div class="form-group item">
                                {{--{{csrf_field()}}--}}
                                <label for="cunvan">Hesap Adı </label>
                                <input   type="text" name="edepoad" id="edepoad" value="" class="form-control has-feedback-left" placeholder="Boş Bırakmayın"  autofocus>
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true" STYLE="margin-top: 29px"></span>
                            </div> <!-- /.form-group -->

                            <div class="form-group">
                                <label for="email">E-Posta</label>
                                <input type="text" name="edeposta" id="edeposta" value="" class="form-control" >
                            </div> <!-- /.form-group -->

                            <div class="row">
                                <div class="col-xs-6 col-md-6">
                                    <div class="form-group">
                                        <label for="gsm">Cep Telefonu</label>
                                        <input type="text" name="edcep" id="edcep" value="" class="form-control"  >
                                    </div> <!-- /.form-group -->
                                </div> <!-- /.col-md-6 -->
                                <div class="col-xs-6 col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Sabit Telefon</label>
                                        <input type="text" name="edsabit" id="edsabit" value="" class="form-control" >
                                    </div> <!-- /.form-group -->
                                </div> <!-- /.col-md-6 -->
                            </div> <!-- /.row -->
                            <div class="row">
                                <div class="col-xs-6 col-md-6">
                                    <div class="form-group">
                                        <label for="district">Yetkili Ad</label>
                                        <input type="text" name="edyad" id="edyad" value="" class="form-control">
                                    </div> <!-- /.form-group -->
                                </div> <!-- /.col -->
                                <div class="col-xs-6 col-md-6">
                                    <div class="form-group">
                                        <label for="city">Yetkili Tel</label>
                                        <input type="text" name="edytel" id="edytel" value="" class="form-control" >
                                    </div> <!-- /.form-group -->
                                </div> <!-- /.col -->

                            </div> <!-- /.row -->
                        </div> <!-- /.col-md-6 -->
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="address">Adres</label>
                                <input type="text" name="edadres" id="edadres" value="" class="form-control" >
                            </div> <!-- /.form-group -->

                            <div class="row">
                                <div class="col-xs-6 col-md-4">
                                    <div class="form-group">
                                        <label for="district">İlçe-Bölge</label>
                                        <input type="text" name="edilce" id="edilce" value="" class="form-control">
                                    </div> <!-- /.form-group -->
                                </div> <!-- /.col -->
                                <div class="col-xs-6 col-md-4">
                                    <div class="form-group">
                                        <label for="city">Şehir-İl</label>
                                        <input type="text" name="edil" id="edil" value="" class="form-control" >
                                    </div> <!-- /.form-group -->
                                </div> <!-- /.col -->

                            </div> <!-- /.row -->

                            <div class="row">
                                <div class="col-xs-6 col-md-6">
                                    <div class="form-group">
                                        <label for="tax_home">Vergi Dairesi</label>
                                        <input type="text" name="edvad" id="edvad" value="" class="form-control">
                                    </div> <!-- /.form-group -->
                                </div> <!-- /.col-md-4 -->
                                <div class="col-xs-6 col-md-6">
                                    <div class="form-group">
                                        <label for="tax_no">Vergi No/T.C. No</label>
                                        <input type="text" name="edvdno" id="edvdno" value="" class="form-control " >
                                    </div> <!-- /.form-group -->
                                </div> <!-- /.col-md-4 -->
                            </div> <!-- /.row -->

                        </div> <!-- /.col-md-6 -->

                    </div>

                </div>
                <div class="modal-footer footeredit" style="margin-top: 100px">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary edit" data-token="{{ csrf_token() }}" data-dismiss="modal">Düzenle</button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="deposilpopup" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Stok Sil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <input type="hidden" id="deposilid" value="">
                <div class="modal-body">
                    Döviz Silinecek Eminmisiniz?
                </div>
                <div class="footersild">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary delete" data-token="{{ csrf_token() }}" id="sil" data-dismiss="modal" >Eminmisiniz?</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('content_script')

    <script type="text/javascript">
        $(document).ready(function() {




            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).on('click', '#editdepo, #adddepo', function () {
                depoid = $(this).attr('data-depoid');
                $('#edepoad').val($(this).data('depoad'));
                $('#edadres').val($(this).data('dadres'));
                $('#edil').val($(this).data('dil'));
                $('#edilce').val($(this).data('dilce'));
                $('#edeposta').val($(this).data('deposta'));
                $('#edcep').val($(this).data('dcep'));
                $('#edsabit').val($(this).data('dsabit'));
                $('#edvdno').val($(this).data('dvdno'));
                $('#edvad').val($(this).data('dvad'));
                $('#edyad').val($(this).data('dyad'));
                $('#edytel').val($(this).data('dytel'));

                $('#editdepopopup').modal();
            });
            $(document).on('click', '#sildepo', function () {
                $('#deposilid').val($(this).data('depoid'));
                $('#deposilpopup').modal();
            });
            $(document).on('click', '.add', function() {
                var depoad=$('#depoad').val();
                if (depoad=="" || depoad==null) {


                    new PNotify({
                        title: 'Hata!',
                        text: 'Depo Adını Girmediniz.',
                        type: 'error',
                        styling: 'bootstrap3'
                    });
                }
                else {
                    $.ajax({
                        dataType: 'JSON',
                        type: 'POST',
                        url: '/depokaydet',
                        data: {
                            '_token': $('input[name=csrf-token]').val(),
                            'depoad': $('#depoad').val(),
                            'dadres': $('#dadres').val(),
                            'dil': $('#dil').val(),
                            'dilce': $('#dilce').val(),
                            'deposta': $('#deposta').val(),
                            'dcep': $('#dcep').val(),
                            'dsabit': $('#dsabit').val(),
                            'dvdno': $('#dvdno').val(),
                            'dvad': $('#dvad').val(),
                            'dyad': $('#dyad').val(),
                            'dytel': $('#dytel').val()
                        },
                        success: function (data) {
                            console.log(data);
                            $('#depotablo').append("<tr class='item" + data.depoid + "'>" +
                                "<td><a href='javascript:void(0);' id='adddepo' data-depoid='"+data.depoid+"' data-depoad='"+data.depoad+"' data-dadres='"+data.dadres+"' data-dil='"+data.dil+"' data-dilce='"+data.dilce+"' data-deposta='"+data.deposta+"' data-dcep='"+data.dcep+"' data-dsabit='"+data.dsabit+"' data-dvdno='"+data.dvdno+"' data-dvad='"+data.dvad+"' data-dyad='"+data.dyad+"' data-dytel='"+data.dytel+"'>" + data.depoad + "</a></td>" +
                                "<td><a href='javascript:void(0);' id='editdepo' data-depoid='"+data.depoid+"' data-depoad='"+data.depoad+"' data-dadres='"+data.dadres+"' data-dil='"+data.dil+"' data-dilce='"+data.dilce+"' data-deposta='"+data.deposta+"' data-dcep='"+data.dcep+"' data-dsabit='"+data.dsabit+"' data-dvdno='"+data.dvdno+"' data-dvad='"+data.dvad+"' data-dyad='"+data.dyad+"' data-dytel='"+data.dytel+"'><i class='fa fa-edit fa-2x'></i></a></td>" +
                                "<td><a href='javascript:void(0);' id='sildepo' data-depoid='" + data.depoid + "'><i class='fa fa-trash-o fa-2x'></i></a></td></tr>"
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
                $.ajax({
                    dataType: 'JSON',
                    type: 'PUT',
                    url: '/depoedit/' + depoid,
                    data: {
                        '_token': $('input[name=csrf-token]').val(),
                        'depoad': $('#edepoad').val(),
                        'dadres': $('#edadres').val(),
                        'dil': $('#edil').val(),
                        'dilce': $('#edilce').val(),
                        'deposta': $('#edeposta').val(),
                        'dcep': $('#edcep').val(),
                        'dsabit': $('#edsabit').val(),
                        'dvdno': $('#edvdno').val(),
                        'dvad': $('#edvad').val(),
                        'dyad': $('#edyad').val(),
                        'dytel': $('#edytel').val()
            },
                    success: function(data) {
                        console.log(data);
                        $('.item' + data.depoid).replaceWith("<tr class='item" + data.depoid + "'>" +
                            "<td><a href='javascript:void(0);' id='adddepo'  data-depoid='"+data.depoid+"' data-depoad='"+data.depoad+"' data-dadres='"+data.dadres+"' data-dil='"+data.dil+"' data-dilce='"+data.dilce+"' data-deposta='"+data.deposta+"' data-dcep='"+data.dcep+"' data-dsabit='"+data.dsabit+"' data-dvdno='"+data.dvdno+"' data-dvad='"+data.dvad+"' data-dyad='"+data.dyad+"' data-dytel='"+data.dytel+"'>" + data.depoad + "</a></td>" +
                            "<td><a href='javascript:void(0);' id='editdepo' data-depoid='"+data.depoid+"' data-depoad='"+data.depoad+"' data-dadres='"+data.dadres+"' data-dil='"+data.dil+"' data-dilce='"+data.dilce+"' data-deposta='"+data.deposta+"' data-dcep='"+data.dcep+"' data-dsabit='"+data.dsabit+"' data-dvdno='"+data.dvdno+"' data-dvad='"+data.dvad+"' data-dyad='"+data.dyad+"' data-dytel='"+data.dytel+"'><i class='fa fa-edit fa-2x'></i></a></td>" +
                            "<td><a href='javascript:void(0);' id='sildepo' data-depoid='" + data.depoid + "'><i class='fa fa-trash-o fa-2x'></i></a></td></tr>"
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
            $(document).on('click', '#sildepo', function() {
                depoid = $('#deposilid').val();
            });
            $('.footersild').on('click', '.delete', function() {
                $.ajax({
                    dataType: 'JSON',
                    type: 'delete',
                    url: '/deposil/' + depoid,
                    data: {
                        '_token': $('input[name=_token]').val()
                    },
                    success: function(data) {
                        $('.item' + data['depoid']).remove();
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