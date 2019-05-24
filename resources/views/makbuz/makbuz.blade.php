@extends('layouts.blank')
@push('stylesheets')
@endpush
@section('main_container')
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('/css/site.css') }}" rel="stylesheet" type="text/css" />
    {{--<script src="{{ asset("js/jquery.js") }}"></script>--}}
    {{--<link href="{{ asset("css/site.css") }}" rel="stylesheet">--}}
    <!-- DataTables -->
        <!-- Bootstrap JavaScript -->
        <!-- App scripts -->

        <!-- Bootstrap CSS -->

    </head>
    <div class="right_col" role="main">
        <div class="row">
            <div >
                <div class="x_panel">
                    <div class="modall"></div>
                    <div class="clearfix"></div>
                    <div class="x_content">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-4">
                            {{--@if($makbuzturu==1)--}}
                                {{--<div class="col-md-2">--}}
                                    {{--<a href="#" class="btn btn-app btn-hareket">--}}
                                        {{--<i class="fa fa-plus-square-o"></i> Ekle--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--@else--}}
                                <div class="col-md-2">
                                    <a href="javascript:" class="btn btn-app btn-hareket">
                                        <i class="fa fa-plus-square-o"></i> Ekle
                                    </a>
                                </div>

                            {{--@endif--}}
                            <input type=hidden id="makbuzturu" value="{{$makbuzturu}}">

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
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    @if($makbuzturu==1)
                        <h2 class="sat">{{$makbuzadi}} Fişi Listesi </h2>
                    @else
                        <h2 class="al">{{$makbuzadi}} Fişi Listesi </h2>
                    @endif
                    <div class="clearfix"></div>
                    <div class="x_content" style="margin-top:15px">


                        <table class="table table-striped table-bordered jambo_table" id="makbuztablo">
                            <thead>

                            <tr class="headings">

                                <th >Numara </th>
                                <th >Tarih </th>
                                <th>Firma</th>
                                <th>Ödeme Türü</th>
                                <th>Banka</th>
                                <th>Fiş Tutarı</th>
                                <th>İptal</th>

                            </tr>

                            </thead>
                            {{ csrf_field() }}
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <footer>
        <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlibaaaa3333</a>
        </div>
        <div class="clearfix"></div>
    </footer>

    <div class="modal fade"  id="makpopup" role="dialog">
        <div class="modal-dialog modal-md" role="document">
            {{--<form id="aktar" action="{{action('irsaliyeController@sipaktarok')}}" method="post" novalidate>--}}

            {{--<input type="hidden" name="sfisnumara" id="sfisnumara" value="" class="form-control" >--}}
            {{--<input type="hidden" name="fisfid" id="fisfida" value="" class="form-control" >--}}


            <div class="modal-content">
                {{ csrf_field() }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span >×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">{{$makbuzadi}} Makbuzu</h4>
                </div>
                <div class="modal-body">
                    {{ csrf_field() }}

                    <div class="modall"></div>
                    <form id="makbuzform" name="makbuzform">
                    <div class="row">

                            <div class="col-md-8 ">
                                <div class="x_panel">

                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <label for="tar">Tarih</label>
                                            <input type="text" name="tar" id="maktarih" class="form-control has-feedback-left"   >
                                            <span class="fa fa-calendar-o form-control-feedback left"  aria-hidden="true"></span>


                                            <input type="hidden" name="fisturu" id="fisturu" value="{{$makbuzturu}}" class="form-control" >



                                        </div> <!-- /.form-group -->
                                        <div class="form-group has-feedback">
                                            <label for="address">Hesap</label>
                                            <input type="hidden" name="fisfid" id="fisfid"   value="" class="form-control" >
                                            <input type="hidden" name="makbuzid" id="makbuzid"   value="" class="form-control" >

                                            <input type="text" name="fisfad" id="fisfad"   value="" autocomplete="off" class="form-control has-feedback-left typeahead buyuk">
                                            <img class="Typeahead-spinner" src="../images/wait.gif">
                                            <span class="fa fa-search form-control-feedback left" ></span>
                                        </div> <!-- /.form-group -->

                                        <div class="form-group">
                                            <label for="fisno">Fiş No</label>
                                            <input type="text" name="makbuzno" id="makbuzno" value="{{$sonnumara}}" class="form-control" >
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="col-md-4" >

                                        {{--<div class="col-md-12">--}}
                                <div class="x_panel pad">


                                                <div class="form-group text-center">
                                                    <label class="text-center">Ödeme Türü</label>
                                                </div>

                                                <div class="form-group">

                                                    <div class="col-md-6">

                                                        <input type="radio" name="iCheck" id="nakit" class="iradio_square-grey" value="1" checked>
                                                        <label for="nakit" class="ll ">Nakit</label>
                                                    </div>

                                                    <div class="col-md-6 frightlabel">
                                                        <input type="radio" name="iCheck" id="havale" class="iradio_square-grey "  value="2">
                                                        <label for="havale" class="ll ">Havale</label>
                                                    </div>

                                                    <div class="col-md-12" id="bankadiv" style="visibility: hidden;">
                                                        <div style="margin-top: 5px;">

                                                            <label for="nakit" class="ll ">Banka</label>

                                                            <select data-toggle="dropdown" id="banka" class="form-control"    name="Banka" aria-expanded="false"  ><span class="caret"></span>

                                                                {{--@foreach($birim as $key => $bad)--}}
                                                                {{--<option  value="{{ $key }}">{{ $bad }}</option>--}}
                                                                <option value="" >Seçiniz</option>
                                                                {{--@endforeach--}}
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-12" id="hesapdiv" style="visibility: hidden;">
                                                        <div style="margin-top: 10px;">

                                                            <label for="hesap" class="ll ">Hesap</label>
                                                            <select data-toggle="dropdown" id="hesap" class="form-control " name="Hesap" aria-expanded="false"  ><span class="caret"></span>
                                                                {{--@foreach($birim as $key => $bad)--}}
                                                                {{--<option  value="{{ $key }}">{{ $bad }}</option>--}}
                                                                <option value="Seçiniz"></option>
                                                                {{--@endforeach--}}
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>


                                </div>

                            </div>
                        <div class="col-md-12">

                            <div class="x_panel">


                                <div class="table-responsive" >
                                    <table class="table table-striped"  id="siptable" >
                                        <thead style="background-color: #EAEAEA ">
                                        <tr>
                                            <th class="duz">Doviz</th>
                                            <th class="duz">Tutar</th>





                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="sipsatirs">
                                            <td class="col-md-2">
                                                {{--kdv zorrrrrrrr--}}
                                                <div class="col-lg-12 kutupad">
                                                    <select data-toggle="dropdown" id="doviz" name="doviz"  class="form-control" ><span class="caret"></span>

                                                        @foreach($doviz as $key => $dad)
                                                            <option  value="{{ $key }}">{{ $dad }}</option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </td>
                                            <td class="col-md-10">
                                                <div class="col-md-12 kutupad">
                                                    <input type="text" name="tutar" id="tutar"  autocomplete="off" class="form-control " value="" oninput="" style="padding-right:60px;font-family: monospace, monospace;" ><span id="t2" style="padding-right:35px;text-align:right" class=" form-control-feedback right ico" >TL</span>
                                                </div>
                                            </td>



                                            {{--<td>--}}
                                                {{--<a class="btn btn-default"  href="#" id="satirsil" aria-label="Settings">--}}
                                                    {{--<i class="fa fa-times" aria-hidden="true"  ></i>--}}
                                                {{--</a>--}}
                                            {{--</td>--}}
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>


                            </div>

                        </div>

                    </div>
                    </form>
                </div>
                <div class="modal-footer" >
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary makbuzkaydet" data-token="{{ csrf_token() }}" >Düzenle</button>
                    {{--<button type="button"   name="button2" value="button2" class="btn btn-primary sipaktarokk" data-token="{{ csrf_token() }}" >Düzenle</button>--}}
                </div>

            </div>
            {{--</form>--}}
        </div>
    </div>

@endsection
@section('content_script')
    <link href="{{ asset("css/site.css") }}" rel="stylesheet">
    <link href="{{ asset("css/green.css") }}" rel="stylesheet">

    <script src="{{ asset("js/sweetalert.js") }}"></script>
    <script src="{{ asset("js/flatpickr.js") }}"></script>
    <script src="{{ asset("js/icheck.min.js") }}"></script>

    <script type="text/javascript">

        $body = $("body");
        $(document).on({
            ajaxStart: function() { $body.addClass("loading");},
            ajaxStop: function() { $body.removeClass("loading");}
        });
        $(document).ready(function() {
            makbuzturu = $('#makbuzturu').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var table=$('#makbuztablo').DataTable({

                "ajax": {
                    "url": "/makbuzfislist",
                    "type": "post",
                    "data":{
                        'makbuzturu':makbuzturu  //hata
                    }
                },
                "columns": [
                    {   "data": null,
                            render:function (data) {

                                return "<a id='editn' href='javascript:' data-makbuzid='" + data.makbuzid +"' data-fisfid='" + data.makbuzfid +"' data-fisfad='" + data.cunvan +"' data-maktarih='" + data.makbuztar +"' data-makbuznumara='" + data.makbuznumara +"' data-doviz='" + data.makbuzdid +"' data-tutar='" + data.makbuztutar +"' data-odemeturu='" + data.odemeturu +"' data-bankad='" + data.baid +"' data-hesapd='" + data.cbid +"'>" + data.makbuznumara + "</a>";

                            }
                    },
                    {   "data": "makbuztar"},


                    {   "data": null,
                        render:function (data) {
                            return "<a id='editc' href='javascript:' data-makbuzid='" + data.makbuzid +"' data-fisfid='" + data.makbuzfid +"' data-fisfad='" + data.cunvan +"' data-maktarih='" + data.makbuztar +"' data-makbuznumara='" + data.makbuznumara +"' data-doviz='" + data.makbuzdid +"' data-tutar='" + data.makbuztutar +"' data-odemeturu='" + data.odemeturu +"' data-bankad='" + data.baid +"' data-hesapd='" + data.cbid +"'>" + data.cunvan + "</a>";
                        }
                    },
                    {   "data": "odemeturu"},
                    {
                        "data":null,

                        render: function (data, type, row) {
                            if(data.bankad){
                                return data.bankad + ' : ' + data.hesapno +' '+data.dad;
                            }else{
                                return data=null;}

                        }
                    },
                    {
                        "data":null,

                            render: function (data, type, row) {
                                var numm = $.fn.dataTable.render.number('.', ',', 2).display(data.makbuztutar);
                                return  numm +' '+data.dad ;
                    }
                    },


                    {
                        "data": "makdurum",
                        // render:function (data) {
                        //     return "<a class='' href='/makbuz/iptal/"+data.makbuzid +"' id='satiriptal' ><i class='fa fa-trash fa-2x' ></i></a>";
                        // }
                    },
                ],

                "order": [[ 1, "desc" ],[ 0, "desc" ]],
                'columnDefs': [



                    {
                        'targets': 1,
                        render:function(data){
                            return moment(data).format('DD-MM-YYYY');
                        }
                    },


                    { "targets": 3,"width": "8%",
                        'className':'dt-body-center',
                        "createdCell": function(td, cellData, rowData, row, col) {

                            switch(cellData || rowData) {
                                case 1:
                                    // $(td).addClass('label label-info');

                                    $(td).html("<SPAN class='label label-success'  id='acik'>NAKİT</SPAN>");
                                    break;
                                case 2:
                                    $(td).html("<span class='label label-warning'  >HAVALE</span>");
                                    break;
                                // case 4:
                                //     $(td).html("<span class='label label-success'>BANKA</span>");
                                //     break;

                            }
                        }
                    },
                    {
                        'targets': 5,
                        'className':'dt-body-right'
                    },
                    {
                        'targets': 6,"width": "5%",
                        'className':'dt-body-center',
                        "createdCell": function(td, cellData, rowData, row, col) {

                            switch(cellData || rowData) {
                                case 1:
                                    // $(td).addClass('label label-info');

                                    $(td).html("<a data-makbuzid="+rowData.makbuzid +" href='#' id='satiriptal' ><i class='fa fa-times-circle-o fa-2x' ></i></a>");
                                    break;
                                case 2:
                                    $(td).html("<span class='label label-danger'  >İPTAL</span>");
                                    break;
                                // case 4:
                                //     $(td).html("<span class='label label-success'>BANKA</span>");
                                //     break;

                            }
                        }
                    },
                ],
                "autoWidth": true,
                "paging": false,
//              "bStateSave": true,
                "language":  {
                    "sDecimal":        ",",
                    "sEmptyTable":     "Tabloda herhangi bir veri mevcut değil",
                    "sInfo":           "_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor",
                    "sInfoEmpty":      "Kayıt bulunamadı",
                    "sInfoFiltered":   "(_MAX_ kayıt içerisinden bulunan)",
                    "sInfoPostFix":    "",
                    "sInfoThousands":  ".",
                    "sLengthMenu":     "Sayfada _MENU_ kayıt göster",
                    "sLoadingRecords": "Yükleniyor...",
                    "sProcessing":     "İşleniyor...",
                    "sSearch":         "Ara:",
                    "sZeroRecords":    "Eşleşen kayıt bulunamadı",
                    "oPaginate": {
                        "sFirst":    "İlk",
                        "sLast":     "Son",
                        "sNext":     "Sonraki",
                        "sPrevious": "Önceki"
                    },
                    "oAria": {
                        "sSortAscending":  ": artan sütun sıralamasını aktifleştir",
                        "sSortDescending": ": azalan sütun sıralamasını aktifleştir"
                    },
                    "select": {
                        "rows": {
                            "_": "%d kayıt seçildi",
                            "0": "",
                            "1": "1 kayıt seçildi"
                        }
                    }
                }

            });


            $("#maktarih").flatpickr(
                {
                    // enableTime:true,
                    altInput: true,
                    altFormat: "d-m-Y ",
                    dateFormat: "Y-m-d",
                    weekNumbers: true,
                    locale:'tr',
                    allowInput: true,
                    defaultDate: "today"
                }

            );


            $("#fisfad").keyup(function(){
                this.value = this.value.toUpperCase();
            });
        });
        $(document).on('click','.btn-hareket,#editc,#editn', function() {
            $('#fisfid,#fisfad,#tutar').val("");
            if($('#makbuzturu').val()== 2){
                var fisturu=7;
            }else if($('#makbuzturu').val()==1){
                var fisturu=8;
            }
            setTimeout(function () {
                $("#havale").iCheck('uncheck');
                $("#nakit").iCheck('check');

            }, 1);

            $('#makpopup').modal();
// console.log($(this).data('fisfid'));
            if (!$(this).data('fisfid')){
                // console.log("dfdf");
                // setTimeout(function () {
                    $("#havale").iCheck('uncheck');
                    $("#nakit").iCheck('check');

                // });
                $('#doviz').val("1");
                $.ajax({
                    dataType: 'JSON',
                    type: 'POST',
                    url:"/ajaxsonnumara/"+fisturu,
                    data: {
                        '_token': $('input[name=csrf-token]').val(),

                    },
                    success: function (datam) {
                        // console.log(datam);
                        $('#makbuzno').val(datam);
                    }
                });
            }else{
                var bankad=$(this).data('bankad');
                var hesapd=$(this).data('hesapd');
                $('#makbuzid').val($(this).data('makbuzid'));
                $('#fisfid').val($(this).data('fisfid'));
                $('#fisfad').val($(this).data('fisfad'));
                $('#maktarih').val($(this).data('maktarih'));
                $('#makbuzno').val($(this).data('makbuznumara'));
                $('#odemeturu').val($(this).data('odemeturu'));
                // $('#banka').val($(this).data('banka'));
                // $('#hesap').val($(this).data('hesap'));
                $('#doviz').val($(this).data('doviz'));
                $('#tutar').val($(this).data('tutar'));

                 if($(this).data('odemeturu')==1){
                     $("#nakit").iCheck('check');
                     // $("#nakit").prop('checked', true);

                    }else{
                     // $("#nakit").attr('checked', false);
                     // $("#havale").attr('checked', true);
                     $("#nakit").iCheck('uncheck');
                    }
                            if($(this).data('odemeturu')==1){
                                $("#nakit").iCheck('check');
                                $("#havale").iCheck('uncheck');
                            }else{
                                 setTimeout(function () {
                                    $("#havale").iCheck('check');
                                    $("#nakit").iCheck('uncheck');
                                     // $('#banka').find("option:selected").val($(this).data('banka'));


                                 }, 1);
                                setTimeout(function () {

                                    // $('#banka').find("option:selected").val($(this).data('banka'));
                                    $('#banka').val(bankad);
                                    var evt = document.createEvent("HTMLEvents");
                                    evt.initEvent("change", false, true);
                                    document.getElementById("banka").dispatchEvent(evt);

                                }, 1000);
                                setTimeout(function () {
                                    $('#hesap').val(hesapd);
                                    // $('#banka').find("option:selected").val($(this).data('banka'));


                                }, 1500);
                                // $('#banka').find("option:selected").val(
                                //     $(this).data('banka'));

                    // setTimeout(function () {

                         // $('#banka').val($(this).data('banka'));

                    // }, 2);
                    // setTimeout(function () {
                    //     $('#hesap').val($(this).data('hesap'));
                    // }, 3);


                            }
            }

        });
        $(document).ready(function() {

            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-grey',
                increaseArea: '20%' // optional
            });

            $('#havale').on('ifChecked', function (event) {
                fisfid = $('#fisfid').val();
                if (fisfid == "" || fisfid == null || fisfid == undefined) {

                    swal("Hata!", "Hesap Seçmediniz!...", "error");
                    // $('#nakit').iCheck('update');
                    // $( "#nakit" ).prop( "checked", true );

                    // $('#havale').removeAttr('checked').iCheck('update')
                    setTimeout(function () {
                        $("#havale").iCheck('uncheck');
                        $("#nakit").iCheck('check');

                    }, 1);

                } else {
                    $.ajax({
                        dataType: 'JSON',
                        type: 'POST',
                        url: '/makbanka',
                        data: {
                            '_token': $('input[name=csrf-token]').val(),
                            'fisfid': $('#fisfid').val()
                            // $('#fisfid').val()
                        },
                        success: function (data) {
                            // console.log(data);
                            if (data[0].bankad == null) {

                                swal("Hata!", "Cari Hesabın Kayıtlı Bankası Bulunamadı !...", "error");
                                setTimeout(function () {
                                    $("#havale").iCheck('uncheck');
                                    $("#nakit").iCheck('check');

                                }, 1);
                            } else {
                                // var a =new Array();
                                document.getElementById('bankadiv').style.visibility = 'visible';
                                var $banka = $("#banka");
                                $banka.empty();
                                $.each(data, function (index, value) {
                                    if (index == 0) {
                                        $banka.append('<option value="0" class="bankadrop"> Seçiniz  </option>');
                                    }
                                    $banka.append('<option class="bankadrop"  value="' + value.baid + '">' + value.bankad + '</option>');
                                    // a.push(value);
                                });

                            }

                        }

                    });

                }

            });


            $('#havale').on('ifUnchecked', function () {
                document.getElementById('bankadiv').style.visibility = 'hidden';
                document.getElementById('hesapdiv').style.visibility = 'hidden';
            });
            // $('#havale').on('click',function(){
            //
            //
            // });
            $('#banka').on('change', function () {
// console.log($('#banka').find("option:selected").val());
                var fisfidd=$('#fisfid').val();
                $.ajax({
                    dataType: 'JSON',
                    type: 'POST',
                    url: '/makbankahesap',
                    data: {
                        '_token': $('input[name=csrf-token]').val(),
                        'fisfid': fisfidd,
                        'bankaid': $('#banka').find("option:selected").val()
                    },
                    success: function (datam) {
                        document.getElementById('hesapdiv').style.visibility = 'visible';
                        var $hesap = $("#hesap");
                        $hesap.empty();
                        $.each(datam, function (index, value) {
                            if (index == 0) {
                                $hesap.append('<option value="0"> Seçiniz  </option>');
                            }
                            $hesap.append('<option value="' + value.cbid + '">' + value.hesapno + "  |  " + value.dad + '</option>');
                            // a.push(value);
                        });
                    }
                });
            });

            Inputmask.extendAliases({
                'myCurrency': {
                    radixPoint: ',',
                    alias: 'numeric',
                    prefix: '',
                    digits: 2,
                    autoUnmask: true,
                    removeMaskOnSubmit: true,
                    unmaskAsNumber: true,
                    allowPlus: false,
                    allowMinus: false,
                    autoGroup: true,
                    groupSeparator: "."
                }
            });
            $('#tutar').inputmask("myCurrency");

            var bloodhound = new Bloodhound({

                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),

                queryTokenizer: Bloodhound.tokenizers.whitespace,
                prefetch: {
                    url: '/autocompletefirma',
                    cache: false,
                    filter: function (d) {
                        // assume data is an array of strings e.g. ['one', 'two', 'three']
                        return $.map(d, function (firma) {
                            //console.log("Called prepare");

                            return {
                                name: firma.cunvan,
                                id: firma.fid
                            };
                        });
                    }
                }
            });
            bloodhound.initialize();
//dfgdfgd
            $('.typeahead').typeahead({
                    limit:5,
                    hint: false,
                    highlight: true,
                    minLength: 1,
                    rateLimitWait:50
                },
                {
                    name: 'cunvan',
                    id: 'fid',
                    display: 'name',
                    //Input value to be set when you select a suggestion.

                    source: bloodhound.ttAdapter(),
                    templates: {
                        empty: [
                            '<div class="list-group search-results-dropdown"><div class="list-group-item">Veri Bulunamadı</div></div>'
                        ]
                    }

                }).on("typeahead:selected", function(obj, data) {
                $("#fisfid").val(data.id);
                setTimeout(function () {
                    $("#havale").iCheck('uncheck');
                    $("#nakit").iCheck('check');

                }, 1);

            })
                .on('typeahead:asyncrequest', function() {
                    $('.Typeahead-spinner').show();
                })
                .on('typeahead:asynccancel typeahead:asyncreceive', function() {
                    $('.Typeahead-spinner').hide();

                });

            $('#doviz').on('change', function () {
                // dtur=$('#birim').find('option:selected').val();
               var doviz = $('#doviz').find(":selected").text();

                $('#t2').text(doviz);
                // x = $('#dbirim').find("option:selected").val();
                // $('#did').val(x);
                //  $('#abc span').text('baa baa black sheep');

                var ssss = $(this).val()

//                $(this).find('option[value="' + value + '"]').attr("selected", "selected");
            });

            $(document).on('click','.makbuzkaydet', function() {
                // $('#makbuz').trigger('reset');
                fisfid = $('#fisfid').val();
                 tuta=$('#makbuzform').find("#tutar").val();

                if (fisfid == "" || fisfid == null || fisfid == undefined) {
                    swal("Hata!", "Cari Hesap Seçmediniz!...", "error");
                    return false;
                // }else if($('#banka').find('option:selected').val()==0){
                //     swal("Hata!", "Banka Seçmediniz!...", "error");
                //     return false;
                // }else if($('#hesap').find('option:selected').val()==0){
                //     swal("Hata!", "Banka Hesabı Seçmediniz!...", "error");
                //     return false;
                }

                else {
                    if ($('#havale').is(':checked') === true) {
                        if($('#banka').find('option:selected').val()==0) {
                            swal("Hata!", "Banka Seçmediniz!...", "error");
                            return false;
                        }else if($('#hesap').find('option:selected').val()==0){
                            swal("Hata!", "Banka Hesabı Seçmediniz!...", "error");
                            return false;
                        }
                        odemeturu = $('#havale').val();
                        var banka = $('#banka').val();
                        var hesap = $('#hesap').val();
                    } else if ($('#nakit').is(':checked') === true) {
                        var odemeturu = $('#nakit').val();
                        var banka = 0;
                        var hesap = 0;
                    }
                    if(tuta==="" || tuta===null || tuta === undefined){
                        swal("Hata!", "Tutar Girmediniz!...", "error");
                        return false;
                    }

                    $.ajax({
                        dataType: 'JSON',
                        type: 'POST',
                        url: '/makkaydet',
                        data: {
                            '_token': $('input[name=csrf-token]').val(),
                            'makbuzid':$('#makbuzid').val(),
                            'fisfid': $('#fisfid').val(),
                            'maktar': $('#maktarih').val(),
                            'makbuzno': $('#makbuzno').val(),
                            'makbuzturu': $('#fisturu').val(),
                            'odemeturu': odemeturu,
                            'baid': banka,
                            'hesap': hesap,
                            'doviz': $('#doviz').val(),
                            'tutar': $('#makbuzform').find("#tutar").val(),
                            // $('#fisfid').val()
                        },
                        success: function (data) {
                             // console.log(data);
                            $('#makbuztablo').DataTable().ajax.reload();
                            $("#makpopup").modal("hide");
                        },
                        error:function(error){
                            swal("Hata!", "Numara Kullanılmış Olabilir!...", "error");
                            return false;
                        }
                    });
                }
        });
            $(document).on('click','#satiriptal', function() {
                var makbuzid =$(this).data('makbuzid');

                swal({
                    title: "Eminmisiniz?",
                    text:  "Makbuz İptal Edilecek!...",

                    buttons: ["HAYIR!", "EVET!"],

                }).then((isConfirm) => {
                    if (isConfirm) {
                //        // var makbuzid =$('#satiriptal').val($(this).data('makbuzid'));
                        $.ajax({
                            dataType: 'JSON',
                            type: 'POST',
                            url: '/makbuziptal',
                            data: {
                                '_token': $('input[name=csrf-token]').val(),
                                'makbuzid': makbuzid
                                // $('#fisfid').val()
                            },
                            success: function (data) {
                                $('#makbuztablo').DataTable().ajax.reload();

                            },

                            error: function (error) {console.log(error);}
                //
                //
                //
                //
                //
                        });
                    } else {
                        // swal("Cancelled", "Hatalı", "error");
                        return false;
                    }
                //
                 });
            });
        });
    </script>
@endsection