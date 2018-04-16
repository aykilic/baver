@extends('layouts.blank')
@push('stylesheets')
@endpush
@section('main_container')
      <head>
          <meta name="csrf-token" content="{{ csrf_token() }}">
          <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <!-- App scripts -->

        <!-- Bootstrap CSS -->

    </head>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Form Elements</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Cari Hesap Detayı </h2>
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
                            {{--action="{!! url('/Cari/update/'.$sdf->fid) !!}"--}}
                            <div class="clearfix"></div>
                            <div class="x_content">
                                <form name="form_cari" id="form_cari"  action="{{action('Controller@update',$sdf->fid) }}"  method="post" >
                                    {{ csrf_field() }}
                                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Hesap Bilgileri</a>
                                            </li>
                                            <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Banka Bilgileri</a>
                                            </li>
                                        </ul>
                                        <div id="myTabContent" class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">






                                    <div class="row">
                                        <div class="col-md-6">




                                            <div class="form-group">
                                                <input type="hidden" id="firmaid" value="{{$sdf->fid}}">
                                                <input type="hidden" id="bankaid" value="{{$sdfa->baid}}">

                                                <label for="name">Hesap Adı </label>
                                                <input type="text" name="cunvan" id="cunvan" value="{{$sdf->cunvan}}" class="form-control "  >
                                                 </div> <!-- /.form-group -->

                                            <div class="form-group">
                                                <label for="email">E-Posta</label>
                                                <input type="email" name="email" id="email" value="" class="form-control" >
                                            </div> <!-- /.form-group -->

                                            <div class="row">
                                                <div class="col-xs-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="gsm">Cep Telefonu</label>
                                                        <input type="tel" name="gsm" id="gsm" value="" class="form-control " >
                                                    </div> <!-- /.form-group -->
                                                </div> <!-- /.col-md-6 -->
                                                <div class="col-xs-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone">Sabit Telefon</label>
                                                        <input type="tel" name="phone" id="phone" value="" class="form-control" >
                                                    </div> <!-- /.form-group -->
                                                </div> <!-- /.col-md-6 -->
                                            </div> <!-- /.row -->

                                        </div> <!-- /.col-md-6 -->
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="address">Adres</label>
                                                <input type="text" name="cadres1" id="cadres1" value="{{$sdf->cadres1}}" class="form-control" >
                                            </div> <!-- /.form-group -->

                                            <div class="row">
                                                <div class="col-xs-6 col-md-4">
                                                    <div class="form-group">
                                                        <label for="district">İlçe-Bölge</label>
                                                        <input type="text" name="district" id="district" value="" class="form-control" >
                                                    </div> <!-- /.form-group -->
                                                </div> <!-- /.col -->
                                                <div class="col-xs-6 col-md-4">
                                                    <div class="form-group">
                                                        <label for="city">Şehir-İl</label>
                                                        <input type="text" name="city" id="city" value="" class="form-control" >
                                                    </div> <!-- /.form-group -->
                                                </div> <!-- /.col -->

                                            </div> <!-- /.row -->

                                            <div class="row">
                                                <div class="col-xs-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="tax_home">Vergi Dairesi</label>
                                                        <input type="text" name="tax_home" id="tax_home" value="" class="form-control" >
                                                    </div> <!-- /.form-group -->
                                                </div> <!-- /.col-md-4 -->
                                                <div class="col-xs-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="tax_no">Vergi No/T.C. No</label>
                                                        <input type="tel" name="tax_no" id="tax_no" value="" class="form-control" >
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
                                        <button  class="btn btn-success btn-insert btn-xs-block" type="Submit"   ><i class="glyphicon glyphicon-saved"></i></button>
                                    </div>
                                    </div>
                                            <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                                {{ csrf_field() }}

                                    {{--//// pop up //////////////////--}}


                                                <div class="modal fade bs-example-modal-lg"  id="editbankapopup" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">

                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal"><span >×</span>
                                                                </button>
                                                                <h4 class="modal-title" id="myModalLabel">Banka Hesap Detayı</h4>
                                                            </div>
                                                            <div class="modal-body"  >

                                                                    <div class="col-lg-12" >
                                                                        <div class="form-group">



                                                                            <label for="tax_no"  name="lbanka">Banka</label>

                                                                            <select data-toggle="dropdown" id="banka" class="form-control" name="dbanka" aria-expanded="false"  ><span class="caret"></span>
                                                                                <option >Seciniz</option>
                                                                                @foreach($banka as $keyb => $bankad)
                                                                                    <option  value="{{ $keyb }}">{{ $bankad }}</option>
                                                                                @endforeach
                                                                            </select>

                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="tax_no" name="ldoviz">DÖVİZ</label>

                                                                            <select data-toggle="dropdown" id="doviz" class="form-control" name="did" aria-expanded="false"  ><span class="caret"></span>

                                                                                <option >Seciniz</option>
                                                                                @foreach($doviz as $keyd=>$dad)

                                                                                    <option  value="{{ $keyd }}">{{ $dad }}</option>
                                                                                @endforeach

                                                                            </select>

                                                                        </div>

                                                                            <div class="form-group">
                                                                                <label for="address">IBAN</label>

                                                                                <input class="form-control"  id="iban" name="iban" value="" >

                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="address">Şube</label>
                                                                                <input class="form-control" id="bsube" name="bsube">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="address">Şube K</label>
                                                                                <input class="form-control"id="bsubek" name="bsubek">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="address">Hesap No</label>
                                                                                <input class="form-control" id="hesapno" name="hesapno">
                                                                            </div>


                                                                        {{ csrf_field() }}
                                                                    </div>


                                                            </div>
                                                            <div class="modal-footer" style="margin-top: 400px">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary edit" data-dismiss="modal">Güncelle</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>


                                                <button type="button"  id="savebanka"  class="btn btn-primary" >
                                                    Banka Ekle
                                                </button>

                                                {{--<button type="button" class="btn btn-success" href="#" id="satirekle">Satır Ekle</button>--}}
                                                {{--<div class="alert alert-info">--}}
                                                    {{--<p>{{ $deger }}</p>--}}
                                                {{--</div>--}}
                                                <div class="table-responsive">
                                                    <table class="table table-striped" id="bankatablo">
                                                        <thead>
                                                        <tr class="headings">
                                                            <th class="column-title" >ADI </th>
                                                            <th>DÖVİZ </th>
                                                            <th>IBAN</th>
                                                            <th>ŞUBE</th>
                                                            <th>ŞUBE KODU</th>
                                                            <th>HESAP NO</th>
                                                            <th></th>



                                                            <!-- <th class="bulk-actions" colspan="7">
                                                                 <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                                             </th> -->
                                                        </tr>
                                                            </thead>
                                                        {{ csrf_field() }}
                                                        <tbody>
                                                        @foreach($cbankaObj as $post)
                                                            <tr class="item{{$post->cbid}}">
                                                                <td> <a href="javascript:void(0);" id="editbanka" data-cbid="{{$post->cbid}}" data-iban="{{$post->iban}}" data-baid="{{$post->baid}}" data-did="{{$post->did}}" data-bsube="{{$post->bsube}}" data-bsubek="{{$post->bsubek}}" data-hesapno="{{$post->hesapno}}" data-dbankad="{{$post->bankad}}" data-dovizad="{{$post->dad}}" > {{$post->bankad}}</a></td>
                                                                <td>{{$post->dad}}</td>
                                                                <td>{{$post->iban}}</td>
                                                                <td>{{$post->bsube}}</td>
                                                                <td>{{$post->bsubek}}</td>
                                                                <td  >{{$post->hesapno}}</td>
                                                                <td><a href="javascript:void(0);" id="silbanka" data-cbid="{{$post->cbid}}"><i  class="fa fa-trash-o fa-2x">
                                                                       </i></a></td>

                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
{{--*********************************cbankasillll*************************************--}}
                                                <div class="modal fade" id="cbankasilpopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Banka Silinecek Eminmisiniz?
                                                            </div>
                                                            <div class="footersil">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary" data-token="{{ csrf_token() }}" id="sil" data-dismiss="modal" >Eminmisiniz?</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                    </div>
                                    </div>
                                    </div>

                                </form>
                                <form action="#" id="formkaydet" method="post">
                                    {{--//// kaydet form //////////////////--}}
                                    <div class="modal fade bs-example-modal-lg"  id="savebankapopup" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span >×</span>
                                                    </button>
                                                    <h4 class="modal-title" id="myModalLabel">Banka Hesap Detayı</h4>
                                                </div>
                                                <div class="modal-body"  >

                                                    <div class="col-lg-12" >
                                                        <div class="form-group">



                                                            <label for="tax_no"  name="lbanka">Banka</label>

                                                            <select data-toggle="dropdown" id="bankak" class="form-control" name="dbankak" aria-expanded="false"  ><span class="caret"></span>
                                                                <option >Seçiniz</option>
                                                                @foreach($banka as $keyb => $bankad)
                                                                    <option  value="{{ $keyb }}">{{ $bankad }}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>

                                                        <div class="form-group">
                                                            <label for="tax_no" name="ldoviz">DÖVİZ</label>

                                                            <select data-toggle="dropdown" id="dovizk" class="form-control" name="didk" aria-expanded="false"  ><span class="caret"></span>

                                                                <option >Seçiniz</option>
                                                                @foreach($doviz as $keyd=>$dad)

                                                                    <option  value="{{ $keyd }}">{{ $dad }}</option>
                                                                @endforeach

                                                            </select>

                                                        </div>

                                                        <div class="form-group">
                                                            <label for="address">IBAN</label>

                                                            <input type="text" class="form-control"  id="ibank" name="ibank" value="" >

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="address">ŞUBE</label>
                                                            <input class="form-control" id="bsubeka" name="bsubeka">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="address">ŞUBE K</label>
                                                            <input class="form-control" id="bsubekk" name="bsubekk">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="address">HESAP NO</label>
                                                            <input class="form-control" id="hesapnok" name="bhesapnok">
                                                        </div>


                                                        {{ csrf_field() }}
                                                    </div>


                                                </div>
                                                <div class="modal-footer footerekle" style="margin-top: 400px">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary add"  data-dismiss="modal">Kaydet</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    {{--//// kaydet form //////////////////--}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>


    <!-- /page content -->

    <!-- footer content -->
    <footer>
        <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
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
    {{--<script src="{{ asset("js/jszip.min.js") }}"></script>--}}
    {{--<script src="{{ asset("js/pdfmake.min.js") }}"></script>--}}
    <script src="{{ asset("js/vfs_fonts.js") }}"></script>
    <script src="{{ asset("js/daterangepicker.tr.js") }}"></script>
    <script type="text/javascript">



        //***************************başla****************************************




        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on('click', '#editbanka', function() {
            cbid = $(this).attr('data-cbid');
             $('#iban').val($(this).data('iban'));
                $('#banka').val($(this).data('baid'));
                $('#doviz').val($(this).data('did'));
                $('#bsube').val($(this).data('bsube'));
                $('#bsubek').val($(this).data('bsubek'));
                $('#hesapno').val($(this).data('hesapno'));
                $('#editbankapopup').modal();
            });
            $(document).on('click', '#savebanka', function() {
                $('#savebankapopup').modal();
            });
            $(document).on('click', '#silbanka', function() {
                $('#cbankasilpopup').modal();
            });
            $('#hesapno').inputmask('decimal', { rightAlign: false });
            $('#bsubek').inputmask('decimal', { rightAlign: false});
            $('#hesapnok').inputmask('decimal', { rightAlign: false });
            $('#bsubekk').inputmask('decimal', { rightAlign: false});
            $('#iban').inputmask("TR99 9999 9999 9999 9999 9999 99");
            $('#ibank').inputmask("TR99 9999 9999 9999 9999 9999 99");
            fid = $('#firmaid').val();
            baid=$('#bankaid').val();
            $('.footerekle').on('click', '.add', function() {
                var bankad= $('#bankak').find('option:selected').text();
                var dovizad= $('#dovizk').find('option:selected').text();
                $.ajax({
                    dataType: 'JSON',
                    type: 'POST',
                    url: '/cbankaydet',
                    data: {
                        '_token': $('input[name=csrf-token]').val(),
                        'dbankak': $('#bankak').find('option:selected').val(),
                        'fid': $('#firmaid').val(),
                        'didk': $('#dovizk').find('option:selected').val(),
                        'ibank': $('#ibank').val(),
                        'bsubeka': $('#bsubeka').val(),
                        'bsubekk': $('#bsubekk').val(),
                        'hesapnok': $('#hesapnok').val()
                    },

                        success: function(data) {
                            $(
                   '#bankatablo').append("<tr class='item" + data.cbid + "'>" +
                                "<td><a href='javascript:void(0);' id='editbanka' data-cbid='" + data.cbid + "' data-iban='" + data.iban + "' data-baid='" + data.baid + "' data-did='" + data.did + "' data-bsube='" + data.bsube + "' data-bsubek='" + data.bsubek + "' data-hesapno='" + data.hesapno + "' >" + bankad + "</a></td>" +
                                "<td>"+ dovizad +"</td>" +
                                "<td>"+ data.iban + "</td>" +
                                "<td>"+ data.bsube + "</td>" +
                                "<td>"+ data.bsubek + "</td>" +
                                "<td>"+ data.hesapno + "</td>" +
                                "<td><a href='javascript:void(0);' id='silbanka' data-cbid='" + data.cbid + "'><i  class='fa fa-trash-o fa-2x'  ></i></a></td></tr>");



                            new PNotify({
                                title: 'Popup Title',
                                text: 'Operation Complated!',
                                type: 'success',
                                addclass: 'pnotify-center',
                                // type: 'notice',
                                styling:'bootstrap3'
                            });


                            $('#formkaydet').trigger('reset');

                        }


                });
            });
            $('.modal-footer').on('click', '.edit', function() {
                var bankad= $('#banka').find('option:selected').text();
                var dovizad= $('#doviz').find('option:selected').text();

                $.ajax({
                    dataType: 'JSON',
                    type: 'PUT',
                    url: '/cbankedit/' + cbid,
                    data: {
                        '_token': $('input[name=csrf-token]').val(),
                        'dbanka': $('#banka').find('option:selected').val(),
                        'fid': $('#firmaid').val(),
                        'did': $('#doviz').find('option:selected').val(),
                        'iban': $('#iban').val(),
                        'baid':$('#bankaid').val(),
                        'bsube': $('#bsube').val(),
                        'bsubek': $('#bsubek').val(),
                        'hesapno': $('#hesapno').val()
                    },

                    success: function(data) {
                        console.log(data);
                        $(
                            '.item' + data.cbid).replaceWith("<tr class='item" + data.cbid + "'>" +
                            "<td><a href='javascript:void(0);' id='editbanka' data-cbid='" + data.cbid + "' data-iban='" + data.iban + "' data-baid='" + data.baid + "' data-did='" + data.did + "' data-bsube='" + data.bsube + "' data-bsubek='" + data.bsubek + "' data-hesapno='" + data.hesapno + "' >" + bankad + "</a></td>" +
                            "<td>"+ dovizad +"</td>" +
                            "<td>"+ data.iban + "</td>" +
                            "<td>"+ data.bsube + "</td>" +
                            "<td>"+ data.bsubek + "</td>" +
                            "<td>"+ data.hesapno + "</td>" +
                            "<td><a href='javascript:void(0);' id='silbanka' data-cbid='" + data.cbid + "'><i  class='glyphicon glyphicon-trash'  ></i></a></td></tr>"
                        );


                        new PNotify({
                            title: 'Popup Title',
                            text: 'Operation Complated!',
                            type: 'success',
                            // type: 'notice',
                            styling:'bootstrap3'
                        });


//                         /*   $('.modal-footer').trigger('reset')*/

                    }
                });
            });
            $(document).on('click', '#silbanka', function() {
               var cbid = $(this).attr('data-cbid');

            });
            $('.footersil').on('click', '#sil', function() {
                $.ajax({
                    type: 'DELETE',
                    url: '/cbanksil/' + cbid,
                    data: {
                        '_token': $('input[name=_token]').val(),
                    },
                    success: function(data) {
                        console.log(data);
                        $('.item' + data['cbid']).remove();
                        new PNotify({
                            title: '',
                            addclass: 'pnotify-center',
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