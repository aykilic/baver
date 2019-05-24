@extends('layouts.blank')
@push('stylesheets')
@endpush
@section('main_container')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <head>
        <script type="text/javascript">

        </script>


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
                        <div class="x_title bg">
                            <h2 id="bg">Cari Hesap Detayı </h2>
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
                                <form  action="{{action('Controller@kaydet')}}" class="form-horizontal form-label-left" name="form1" method="POST"  novalidate>
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
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-md-6">



                                                        {{--textbox başlangıç--}}

                                                        <div class="form-group item">
                                                            {{--{{csrf_field()}}--}}
                                                            <label for="cunvan">Hesap Adı </label>
                                                            <input data-validate-lengthRange="2"   type="text" name="cunvan" id="cunvan" value="" class="form-control has-feedback-left" placeholder="Boş Bırakmayın"  required="required">
                                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true" STYLE="margin-top: 29px"></span>
                                                        </div> <!-- /.form-group -->

                                                        <div class="form-group">
                                                            <label for="email">E-Posta</label>
                                                            <input type="email" name="email" id="email" value="" class="form-control" >
                                                        </div> <!-- /.form-group -->

                                                        <div class="row">
                                                            <div class="col-xs-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label for="gsm">Cep Telefonu</label>
                                                                    <input type="tel" name="gsm" id="gsm" value="" class="form-control"  >
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
                                                            <input type="text" name="cadres1" id="cadres1" value="" class="form-control" >
                                                        </div> <!-- /.form-group -->

                                                        <div class="row">
                                                            <div class="col-xs-6 col-md-4">
                                                                <div class="form-group">
                                                                    <label for="district">İlçe-Bölge</label>
                                                                    <input type="text" name="district" id="district" value="" class="form-control">
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
                                                                    <input type="text" name="tax_home" id="tax_home" value="" class="form-control">
                                                                </div> <!-- /.form-group -->
                                                            </div> <!-- /.col-md-4 -->
                                                            <div class="col-xs-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label for="tax_no">Vergi No/T.C. No</label>
                                                                    <input type="tel" name="tax_no" id="tax_no" value="" class="form-control " >
                                                                </div> <!-- /.form-group -->
                                                            </div> <!-- /.col-md-4 -->
                                                        </div> <!-- /.row -->

                                                    </div> <!-- /.col-md-6 -->

                                                </div> <!-- /.row -->



                                                <div class="h-20"></div>

                                                <div class="clearfix"></div>

                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <div class="control-group">
                                                            <div class="controls">
                                                                <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                                                                    <input type="hidden" name="tar" id="tarih" class="form-control has-feedback-left" data-inputmask="'mask': '99-99-9999'"  aria-describedby="inputSuccess2Status2">
                                                                    {{--<span class="fa fa-calendar-o form-control-feedback left"  aria-hidden="true"></span>--}}
                                                                    {{--<span id="inputSuccess2Status2" class="sr-only">(success)</span>--}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="text-right">
                                                    <input type="hidden" name="add">

                                                    <button id="send" type="submit" class="btn btn-success">Kaydet</button>   </div>

                                                    <table class="table table-striped table-bordered dt-responsive nowrap" id="firma">
                                                        <thead>
                                                        <tr class="headings">
                                                            <th >Tarih </th>
                                                            <th >Hesap Adı </th>
                                                            <th >Bakiye </th>
                                                            {{--<th>Düzenle</th>--}}
                                                            <th>Sil</th>

                                                            <!-- <th class="bulk-actions" colspan="7">
                                                                 <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                                             </th> -->
                                                        </tr>

                                                        </thead>
                                                        <tbody>
                                                        @foreach($firma as $post )
                                                            <tr>
                                                                <td>{{$post->tar}}</td>
                                                                {{--<td>{{ date('d-m-Y',strtotime($post->created_at)) }}</td>--}}
                                                                <td ><a href="Cari/Edit/{{$post->fid}}"> {{$post->cunvan}}</a></td>
                                                                <td>{{$post->cadres1}}</td>
                                                                {{--<td>--}}
                                                                {{--<a href="Cari/Edit/fid={{$post->fid}}" >--}}
                                                                {{--{{$post->cunvan}} --}}{{--<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>--}}
                                                                {{--</a>--}}
                                                                {{--</td>--}}
                                                                <td><a href="Cari/sil/{{$post->fid}}"  aria-label="Delete"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a></td>
                                                                {{--<a href="{!! route('/cari, $id')!!}" class="btn btn-danger">Delete</a>--}}
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>

                                                </div>
                                            <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                                    {{ csrf_field() }}




                                                    <div class="col-md-12" id="banksatir">
                                                   <div class="row" id="rowclone">
                                                        <div class="col-md-2" >

                                                                                <label for="tax_no"  name="lbanka">Banka</label>

                                                                                {{--<select data-toggle="dropdown" id="banka" class="form-control" name="dbanka" aria-expanded="false"  ><span class="caret"></span>--}}

                                                                                        {{--@foreach($banka as $abanka)--}}

                                                                                        {{--<option  value="{{ $abanka->baid }}" {{ $secb == $abanka->baid ? 'selected=="selected"' : '' }}>{{ $abanka->bankad }}</option>--}}
                                                                                        {{--@endforeach--}}
                                                                                    {{--<option SELECTED >Seçiniz</option>--}}
                                                                                    {{--</select>--}}
                                                            <select data-toggle="dropdown" id="banka" class="form-control" name="dbanka[]" aria-expanded="false"  ><span class="caret"></span>
                                                                <option >Seçiniz</option>
                                                                @foreach($banka1 as $key => $bankad)
                                                                    <option  value="{{ $key }}">{{ $bankad }}</option>
                                                                @endforeach
                                                            </select>
                                                                                </div>
                                                        <div class="col-md-1">
                                                                                    <label for="tax_no" name="ldoviz">DÖVİZ</label>

                                                                                    <select data-toggle="dropdown" id="doviz" class="form-control" name="did[]" aria-expanded="false"  ><span class="caret"></span>


                                                                                        @foreach($doviz as $adoviz)
                                                                                            <option value="{{ $adoviz->did }}" {{ $secd == $adoviz->did ? 'selected=="selected"' : '' }}>{{ $adoviz->dad }}</option>
                                                                                        @endforeach
                                                                                        <option SELECTED >Seçiniz</option>

                                                                                    </select>

                                                                            </div>
                                                       <div >
                                                        <div class="col-md-3">
                                                       <label for="address">IBAN</label>

                                                            <input class="form-control"  id="iban1" name="iban[]">

                                                    </div>
                                                        <div class="col-md-2">
                                                            <label for="address">Şube</label>
                                                            <input class="form-control" id="sube" name="sube[]">
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label for="address">Şube K</label>
                                                            <input class="form-control"id="subek" name="subek[]">
                                                    </div>
                                                        <div class="col-md-2">
                                                            <label for="address">Hesap No</label>
                                                            <input class="form-control" id="hesapno" name="hesapno[]">
                                                        </div>
                                                        <div class="col-md-1 fright">
                                                            <br>

                                                            <a class="btn btn-default plusekle "  href="#" id="satirsil" aria-label="Settings">
                                                                <i class="fa fa-times" aria-hidden="true"  ></i>
                                                            </a>
                                                        </div>
                                                       </div>
                                                    </div>
                                            </div>

                                                                                                 {{--////////////**************modal açılış buton**************////////////////////////--}}



                                                        <button type="button" class="btn btn-success" href="#" id="satirekle">Satır Ekle</button>
                                                        <div class="h-20"></div>
                                                        <div class="clearfix"></div>
<div>

    {{--<table class="table table-striped table-bordered dt-responsive nowrap" id="cbhesap">--}}
        {{--<thead>--}}
        {{--<tr class="headings">--}}
            {{--<th >Tarih </th>--}}
            {{--<th >Hesap Adı </th>--}}
            {{--<th >Adres </th>--}}
            {{--<th>Sil</th>--}}
        {{--</tr>--}}

        {{--</thead>--}}
        {{--<tbody>--}}
        {{--@foreach($firma as $post )--}}
            {{--<tr>--}}
                {{--<td></td>--}}
                {{--<td ><a href=""> </a></td>--}}
                {{--<td></td>--}}
                {{--<td><a href=""  aria-label="Delete"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a></td>--}}
                {{--<a href="{!! route('/cari, $id')!!}" class="btn btn-danger">Delete</a>--}}
            {{--</tr>--}}
        {{--@endforeach--}}
        {{--</tbody>--}}
    {{--</table>--}}


</div>

                                            </div>

                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
    </div>
        <footer>


            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
    @endsection
    @section('content_script')
        <!-- iCheck -->
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


        {{--***************************************--}}


        <script type="text/javascript">



            //***************************başla****************************************


            $(window).load(function(){

                $(function() {
                    var scntDiv = $('#banksatir');
                    $('#banksatir').addClass('row');
                    var i = $('#banksatir').size() + 1;

                    $(document).on('click','#satirekle', function sonuc() {
                        var form_1=document.forms["form1"]["cunvan"].value;

                        if (form_1=="" || form_1==null){


                                      new PNotify({
                                          title: 'Hata!',
                                         text: 'Hesap Adını Girmediniz.',
                                          type: 'error',
                                          styling:'bootstrap3'
                                      });



//                                var bg = '<div id="hata" class="alert alert-danger alert-dismissible fade in"> <strong>Hata!</strong> Hesap Adını Girmediniz!\n</div>';
//                                document.getElementById("bg").insertAdjacentHTML("afterBegin",bg);




                            document.forms["cunvan"]["form_1"].focus();
                            return false;


                        }
                        else
                            $("#hata").remove();
                        $('<tspan><div class="row">'+
                            '<div class="col-md-2">'+
                        '<label for="tax_no" name="lbanka[]">Banka</label>'+
                            '<select data-toggle="dropdown" class="form-control" name="dbanka[]" aria-expanded="false"><span class="caret"></span>'+
                                '@foreach($banka as $abanka)'+
                            '<option value="{{ $abanka->baid }}" {{ $secb == $abanka->baid ? 'selected=="selected"' : '' }}>{{$abanka->bankad}}</option>'+
                                '@endforeach'+
                            '<option SELECTED >Seçiniz</option>'+
                            '</select>'+
                            '</div>'+
                            '<div class="col-md-1">'+
                            '<label for="tax_no">DÖVİZ</label>'+
                            '<select data-toggle="dropdown" class="form-control" name="did[]" aria-expanded="false"  ><span class="caret"></span>'+
                                '@foreach($doviz as $adoviz)'+
                            '<option value="{{ $adoviz->did }}" {{ $secd == $adoviz->did ? 'selected=="selected"' : '' }}>{{ $adoviz->dad }}</option>'+
                                '@endforeach'+
                            '<option SELECTED >Seçiniz</option>'+
                            '</select>'+
                            '</div>'+
                            '<div class="col-md-3">'+
                            '<label for="address">IBAN</label>'+
                            '<input class="form-control" id="iban" name="iban[]">'+
                            '</div>'+
                            '<div class="col-md-2">'+
                            '<label for="address">Şube</label>'+
                            '<input class="form-control"  name="sube[]">'+
                            '</div>'+
                            '<div class="col-md-1">'+
                            '<label for="address">Şube K</label>'+
                        '<input class="form-control"  name="subek[]">'+
                            '</div>'+
                            '<div class="col-md-2">'+
                            '<label for="address">Hesap No</label>'+
                        '<input class="form-control"  name="hesapno[]">'+
                            '</div>'+
                            '<div class="col-md-1"><br><a class="btn btn-default plusekle " href="#" id="delItem" aria-label="Settings">'+
                            '<i class="fa fa-times" aria-hidden="true"></i></div>'+
                            '</a>'+
                            '</div></tspan>').appendTo(scntDiv);
                        $('input[id=iban]').inputmask("TR99 9999 9999 9999 9999 9999 99");
                        i++;
                        return false;
                    });

                    $(document).on('click','#delItem', function() {
                        if( i > 2 ) {
                            $(this).parents('tspan').remove();
                            i--;
                        }
                        return false;
                    });

                });

            });

            $(document).ready(function(){


                $('#iban').inputmask("TR99 9999 9999 9999 9999 9999 99");
                $('#iban1').inputmask("TR99 9999 9999 9999 9999 9999 99");


                $('#firma').dataTable();
                //   banka ekle //
                $('.modal-footer').on('click', '.add', function() {
                    $.ajax({

                        type: 'POST',
                        url: "/cbankaydet",
                        data: {
                            '_token': $('input[name=_token]').val(),
                            'dbanka': $('#banka').find('option:selected').val(),
                          //  $('#select_id').find('option:selected').val()
                      //      'dbanka':$('select[name=dbanka]').val(),
                           // 'did': $('#did').val(),//
                            'did':$('select[name=did]').val(),
                            'iban': $('#iban').val(),
                            success: function(data) {
                                new PNotify({
                                    title: 'Popup Title',
                                    text: 'Your form as been submitted',
                                   type: 'success',
                                   // type: 'notice',
                                    styling:'bootstrap3'
                                });
                            }
                        }


                    });

                });

//
                /////////////////////////////**************takvim******************////////////////////
                $('#tarih').daterangepicker({
                    "singleDatePicker": true,
                    "maxDate": "31-12-2050",
                    singleClasses: "tarih",
                    "showDropdowns": true,
                    "showWeekNumbers": true,
                    ranges: {
                        'Bugün': [moment(), moment()],
                        'Dün': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Son 7 gün': [moment().subtract(6, 'days'), moment()],
                        'Son 30 gün': [moment().subtract(29, 'days'), moment()],
                        'Bu ay': [moment().startOf('month'), moment().endOf('month')],
                        'Geçen ay': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },

                    "alwaysShowCalendars": true,
    //                "dateLimit": {
    //                    "days": 7
    //                },
                    "locale": {
                        "direction": "ltr",
                        "format": "DD-MM-YYYY",
                        "separator": "-",
                        "applyLabel": "Uygula",
                        "cancelLabel": "Kapat",
                        "fromLabel": "From",
                        "toLabel": "To",
                        "customRangeLabel": "Seç",
                        "daysOfWeek": [
                            "Pt",
                            "Sl",
                            "Çr",
                            "Pr",
                            "Cm",
                            "Ct",
                            "Pz"
                        ],
                        "monthNames": [
                            "Ocak",
                            "Şubat",
                            "Mart",
                            "Nisan",
                            "Mayıs",
                            "Haziran",
                            "Temmuz",
                            "Ağustos",
                            "Eylül",
                            "Ekim",
                            "Kasım",
                            "Aralık"
                        ],
                        "firstDay": 0
                    }

                }, function(start, end, label) {
                    console.log("New date range selected: ' + start.format('DD-MM-YYYY') + ' to ' + end.format('DD-MM-YYYY') + ' (predefined range: ' + label + ')");
                });
                ///////////////////////****************************takvim************************//////////////////////////////

///////////*****************bitir*************************************************

//                $('#send').click('submit');//.prop('disabled', true);
// initialize the validator function
//                    validator.message.date = 'not a real date';
//
//                    // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
//                    $('form')
//                        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
//                        .on('change', 'select.required', validator.checkField)
//                        .on('keypress', 'input[required][pattern]', validator.keypress);
////
////                    $('.multi.required').on('keyup blur', 'input', function() {
////                        validator.checkField.apply($(this).siblings().last()[0]);
////                    });
////
//                    $('form').submit(function(e) {
//                        e.preventDefault();
//                        var submit = true;
////
////                        // evaluate the form using generic validaing
////                        if (!validator.checkAll($(this))) {
////                            submit = false;
////                        }
////
//                        if (submit)
//                            this.submit();
////
//
//                    });

                $(":input").keyup(function(){
                    this.value = this.value.toUpperCase();
                });

            });

        </script>
    @endsection