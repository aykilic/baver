@extends('layouts.blank')
@push('stylesheets')
@endpush
@section('main_container')
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--<script src="{{ asset("js/jquery.js") }}"></script>--}}
        {{--<link href="{{ asset("css/site.css") }}" rel="stylesheet">--}}
        <!-- DataTables -->
        <!-- Bootstrap JavaScript -->
        <!-- App scripts -->

        <!-- Bootstrap CSS -->

    </head>
    <div class="right_col" role="main">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2></h2>
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
                                {{--<form id="formkaydet" action="{{ action('Controller@bankakaydet') }}" method="POST" >--}}
                                    {{csrf_field()}}



                                    <br />
                                    {{ csrf_field() }}
                                    <div class="row">
                                        {{--<div class="col-md-4">--}}
                                        @if($fisturu==1)
                                            <div class="col-md-2">
                                                <a href="http://baver.test/siparisfisi/1" class="btn btn-app btn-hareket">
                                                    <i class="fa fa-plus-square-o"></i> Ekle
                                                </a>
                                            </div>
                                        @else
                                            <div class="col-md-2">
                                                <a href="http://baver.test/siparisfisi/2" class="btn btn-app btn-hareket">
                                                    <i class="fa fa-plus-square-o"></i> Ekle
                                                </a>
                                            </div>

                                        @endif






                                         <!-- /.c

                                            {{--textbox başlangıç--}}

                                            {{--<div class="form-group ">--}}
                                                {{--<label for="tax_no"  name="stoktur">Stok Türü</label>--}}
                                                {{--<select data-toggle="dropdown" id="stoktur" class="form-control" name="stoktur" aria-expanded="false"  ><span class="caret"></span>--}}
                                                    {{--<option >Seciniz</option>--}}
                                                    {{--@foreach($post as $key => $stokturad)--}}
                                                        {{--<option  value="{{ $key }}">{{ $stokturad }}</option>--}}
                                                    {{--@endforeach--}}
                                                {{--</select>--}}
                                            {{--</div> <!-- /.form-group -->--}}

                                            {{--<div class="form-group">--}}

                                                {{--<label for="name">Stok Adı </label>--}}
                                                {{--<input type="text" name="sad" id="sad" value="" class="form-control "  autocomplate="off" aria-required="true">--}}
                                            {{--</div> <!-- /.form-group -->--}}

                                            {{--<div class="row">--}}
                                                {{--<div class="col-xs-6 col-md-6">--}}

                                                {{--</div> <!-- /.form-group -->--}}
                                            {{--</div> <!-- /.col-md-6 -->--}}
                                            {{--<div class="col-xs-6 col-md-6">--}}
                                                {{--<div class="form-group">--}}

                                                {{--</div> <!-- /.form-group -->--}}
                                            {{--</div> <!-- /.col-md-6 -->--}}
                                        {{--</div> <!-- /.row -->--}}

                                    </div> <!-- /.col-md-6 -->
                                    <div class="col-md-4">

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


                                {{--</form>--}}

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
                            @if($fisturu==1)
                            <h2 class="sat">{{$sipfisnoadi}} Sipariş Fişi Listesi </h2>
                                @else
                                <h2 class="al">{{$sipfisnoadi}} Sipariş Fişi Listesi </h2>

                            @endif
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


                                    <table class="table table-striped table-bordered" id="stoktablo">
                                        <thead>
                                        <tr class="headings">
                                            <th >Tarih </th>
                                            <th class="column-title">Numara </th>
                                            <th>Firma</th>
                                            <th>Fiş Tutarı</th>

                                            <th>Sil</th>

                                        </tr>

                                        </thead>
                                        <tbody>

                                        @foreach($sipfislistt as $post)

                                            <tr class="item{{$post->sipfisid}}" >
                                                <td><a href="javascript:void(0);">{{$post->created_at}}</a></td>
                                                <td><a href="javascript:void(0);"  >{{$post->numara}}</a></td>
                                                <td><a href="/siparisfisi/edit/{{$post->sipfisid}}/{{$fisturu}}"  >{{$post->cunvan}}</a></td>
                                                 <td><a href="javascript:void(0);"  > {{number_format($post->gtoplam, 2, ',', '.')}} {{$post->dad}}</a></td>
                                               {{--<td><a href="javascript:void(0);"  ><i class="fa fa-edit fa-2x"></i></a></td>--}}
                                                <td><a href="javascript:void(0);" id="silsipfis" data-sipfisid="{{$post->sipfisid}}" ><i class="fa fa-trash-o fa-2x" ></i></a></td>
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
    <div class="modal fade" id="sipfissilpopup" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title" id="exampleModalLabel">UYARI!</h3>
                </div>
                <input type="hidden" id="sipfissilid" value="">
                <div class="modal-body">
                   <h2>Fiş Silinecek Eminmisiniz?</h2>
                </div>
                <div class="modal-footer footersil">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                    <button type="button" class="btn btn-primary delete" data-token="{{ csrf_token() }}" id="sil" data-dismiss="modal" >Onay</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    </script>
    <!-- footer content -->
    <footer>


        <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlibaaaa3333</a>
        </div>
        <div class="clearfix"></div>
    </footer>
@endsection
@section('content_script')
    <script src="{{ asset("js/icheck.min.js") }}"></script>
    {{--<!-- Datatables -->--}}
    <script src="{{ asset("js/dataTables.bootstrap.min.js") }}"></script>
    <script src="{{ asset("js/dataTables.buttons.min.js") }}"></script>
    {{--<script src="{{ asset("js/buttons.bootstrap.min.js") }}"></script>--}}
    {{--<script src="{{ asset("js/buttons.flash.min.js") }}"></script>--}}
    {{--<script src="{{ asset("js/buttons.html5.min.js") }}"></script>--}}
    {{--<script src="{{ asset("js/buttons.print.min.js") }}"></script>--}}
    {{--<script src="{{ asset("js/dataTables.fixedHeader.min.js") }}"></script>--}}
    {{--<script src="{{ asset("js/dataTables.keyTable.min.js") }}"></script>--}}
    <script src="{{ asset("js/dataTables.responsive.min.js") }}"></script>
    <script src="{{ asset("js/responsive.bootstrap.js") }}"></script>
    {{--<script src="{{ asset("js/datatables.scroller.min.js") }}"></script>--}}
    {{--<script src="{{ asset("js/pdfmake.min.js") }}"></script>--}}
    <script src="{{ asset("js/vfs_fonts.js") }}"></script>
    <script src="{{ asset("js/daterangepicker.tr.js") }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {

                $(document).on('click', '#silsipfis', function () {
                    $('#sipfissilid').val($(this).data('sipfisid'));
                    sipfisid = $('#sipfissilid').val();
                    $('#sipfissilpopup').modal();
                });
            $('.footersil').on('click', '.delete', function() {

                $.ajax({
                    dataType: 'JSON',
                    type: 'delete',
                    url: '/siparisfisi/delete/' + sipfisid,
                    data: {
                        '_token': $('input[name=_token]').val()
                    },
                    success: function(data) {
                        $('.item' + data['sipfisid']).remove();
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


                $('#stoktablo').DataTable({
                    //"order": [ 0, 'desc' ]
                    "order": [[ 0, 'desc' ], [ 1, 'desc' ]]
                });


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


//   **************         büyük harf ****************/////////////////////

            $(":input").keyup(function(){
                this.value = this.value.toUpperCase();
            });
        });
    </script>
@endsection