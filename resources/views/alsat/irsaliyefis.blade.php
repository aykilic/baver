@extends('layouts.blank')
@push('stylesheets')
@endpush
@section('main_container')
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- DataTables -->
        <!-- Bootstrap JavaScript -->
        <!-- App scripts -->

        <!-- Bootstrap CSS -->
        <link href="{{ asset('/css/alertify.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/css/alertify.default.min.css') }}" rel="stylesheet" type="text/css" />
    </head>

    {{--<!-- @if($id==1)--}}
    {{--@php $ftur = "Satış"; @endphp--}}
    {{--@else--}}
    {{--@php $ftur = "Alış"; @endphp--}}
    {{--@endif -->--}}
    <div class="right_col" role="main">
        <div class="">
            <div class="row">

                <div class="modall"></div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            @if($fisturu==1)
                                <h2 class="sat">{{$sipfisnoadi}} İrsaliye Fişi </h2>
                            @else
                                <h2 class="al">{{$sipfisnoadi}} İrsaliye Fişi </h2>

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
                            <div class="x_content">
                                <form id="satirler" action="{{action('irsaliyeController@irsaliyekaydet')}}"  class="form-horizontal form-label-left" name="form1" method="POST"  novalidate>
                                    {{csrf_field()}}



                                    <br />

                                    {{ csrf_field() }}
                                    <div class="x_panel">
                                        <div class="col-md-6">
                                            <div class="col-md-4">



                                            <!-- {{--textbox başlangıç--}} -->

                                                <div class="form-group item">
                                                    <label for="tar">Tarih</label>
                                                    <input type="hidden" id="sipaktarrayf" name="sipaktarrayf" value="">
                                                    <input type="hidden" name="fisturu" id="fisturu" value="{{$fisturu}}" class="form-control" >
                                                    <input type="hidden" name="fisturum"  value="{{$fisturu}}" class="form-control" >
                                                    <input type="hidden" name="satirsayisi"  value="" class="form-control" >
                                                    <input type="hidden" name="edit" id="edit" value="" class="form-control" >
                                                    <input type="text" name="tar" id="tarih" class="form-control has-feedback-left"   aria-describedby="inputSuccess2Status2">
                                                    <span class="fa fa-calendar-o form-control-feedback left"  aria-hidden="true"></span>
                                                    <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                                                </div> <!-- /.form-group -->

                                                <div class="form-group">
                                                    <label for="fisno">Fiş No</label>
                                                    <input type="text" name="irno" id="irno" value="{{$numara}}" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="address">Hesap</label>
                                                            <input type="hidden" name="fisfid" id="fisfid" value="" class="form-control" >

                                                            <input type="text" name="fisfad" id="fisfad" value="@isset($firmad) {{$firmad}} @endisset" autocomplete="off" class="form-control has-feedback-left typeahead buyuk">
                                                            <img class="Typeahead-spinner" src="../images/wait.gif">
                                                            <span class="fa fa-search form-control-feedback left" ></span>
                                                        </div> <!-- /.form-group -->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="district">Durum</label>
                                                            <input type="hidden" name="olayid" id="olayid" value="{{ $olayid }}" class="form-control" >
                                                            <select data-toggle="dropdown" id="olay" class="form-control" disabled><span class="caret"></span>
                                                            <!-- {{--<option >Seçiniz</option>--}} -->
                                                                @foreach($olay as $key => $olayad)
                                                                    <option  value="{{ $key }}">{{ $olayad }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div> <!-- /.form-group -->
                                                    </div> <!-- /.col -->
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="city">Şehir-İl</label>
                                                            <input type="text" name="dil" id="dil" value="" class="form-control" >
                                                        </div> <!-- /.form-group -->
                                                    </div> <!-- /.col -->

                                                </div> <!-- /.row -->

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="">Depo</label>
                                                            <input type="hidden" name="depo" id="depoid" value="1" class="form-control">
                                                            <select data-toggle="dropdown" id="depo" class="form-control"><span class="caret"></span>
                                                            <!-- {{--<option >Seçiniz</option>--}} -->
                                                                @foreach($depo as $key => $depoad)
                                                                    <option  value="{{ $key }}">{{ $depoad }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div> <!-- /.form-group -->
                                                    </div> <!-- /.col-md-4 -->
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="tax_no">Döviz</label>
                                                            <input type="hidden" name="did" id="did" value="1" class="form-control" >
                                                            <select data-toggle="dropdown" id="dbirim" class="form-control" name="dbirim[]" aria-expanded="false"><span class="caret"></span>
                                                            <!-- {{--<option >Seçiniz</option>--}} -->
                                                                @foreach($doviz as $key => $dad)
                                                                    <option  value="{{ $key }}">{{ $dad }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div> <!-- /.form-group -->
                                                    </div> <!-- /.col-md-4 -->
                                                </div> <!-- /.row -->

                                            </div> <!-- /.col-md-6 -->




                                        </div>
                                    <!-- {{--<div class="col-md-6" style="float:left;">--}}



                                    {{--<div class="form-group">--}}
                                    {{--<label for="city">Sevk Adresi</label>--}}
                                    {{--<textarea type="text" name="dil" id="dil" value="" class="form-control" style="height: 170px;" ></textarea>--}}
                                    {{--</div> <!-- /.form-group --}}





                                    {{--</div>--}} -->
                                    </div>
                                    <div class="h-20"></div>
                                    <div class="clearfix"></div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="x_panel">









                                                <div class="table-responsive" >
                                                    <table class="table table-striped"  id="siptable" >
                                                        <thead style="background-color: #EAEAEA ">
                                                        <tr>
                                                            <th class="duz">
                                                                Stok Adı

                                                            </th>
                                                            <th class="duz">Miktar</th>
                                                            <th class="duz">Birim</th>
                                                            <th class="duz">Birim Fiyatı</th>
                                                            <th class="duz">Kdv</th>
                                                            <th class="duz">Tutar</th>

                                                            <th class="duz"></th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr class="sipsatirs ilk">
                                                            <td class="col-md-4">
                                                                <div class="col-lg-12 kutupad">
                                                                    <div class="form-group kutupad">
                                                                        <input type="hidden" name="fissid[]" id="fissid0" class="fissid" value="">
                                                                        <input type="text" name="stokad[]" id="stokad"  autocomplete="off" class="form-control has-feedback-left buyuk" style="padding-left:65px;">
                                                                        <img class="Typeahead-spinners" src="../images/wait.gif">
                                                                        <span class="fa fa-search form-control-feedback left ico"   ></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="col-md-1">
                                                                <div class="col-md-12 kutupad">
                                                                    <input type="text" name="miktar[]" id="miktar0"  autocomplete="off" class="form-control miktar" oninput="calculate(0)" style="font-family: monospace, monospace;" >
                                                                </div>
                                                            </td>
                                                            <td class="col-md-1">
                                                                <div class="col-lg-12 kutupad">
                                                                    <select data-toggle="dropdown" id="birim" class="form-control birim" name="birim[]" aria-expanded="false"  ><span class="caret"></span>
                                                                        @foreach($birim as $key => $bad)
                                                                            <option  value="{{ $key }}">{{ $bad }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </td>
                                                            <td class="col-md-2">
                                                                <div class="col-md-12 kutupad">
                                                                    <input type="text" name="bfiyat[]" id="bfiyat0" value="" autocomplete="off" class="form-control bfiyat" style="padding-right:55.6px;text-align:right;font-family: monospace, monospace;" oninput="calculate(0)" ><span id="t1" class=" form-control-feedback right ico">TL</span>
                                                                </div>
                                                            </td>
                                                            <td class="col-md-1">
                                                                {{--kdv zorrrrrrrr--}}
                                                                <div class="col-lg-12 kutupad">
                                                                    <select data-toggle="dropdown" id="kdv0" name="kdv[]" class="form-control kkdv" onchange="myFunction(0)" onclick="eski($(this).find(':selected').text())"  name="kdv[]"><span class="caret"></span>
                                                                        {{--@foreach($vergi as $akdv)--}}
                                                                        {{--<option value="{{ $akdv->vid }}" {{ $svergi == $akdv->vid ? 'selected=="selected"' : '' }}>{{ $akdv->vor }}</option>--}}
                                                                        {{--@endforeach--}}
                                                                        @foreach($vergim as $key => $vor)
                                                                            <option  value="{{ $key }}">{{ $vor }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    {{--<select data-toggle="dropdown" id="kdv" class="form-control" name="birim[]"  aria-expanded="false"  ><span class="caret"></span>--}}

                                                                    {{--@foreach($vergi as $key => $vor)--}}
                                                                    {{--<option  value="{{ $key }}">{{ $vor }}</option>--}}

                                                                    {{----}}
                                                                    {{--<option  value="{{ $key }}">{{ $vor }}</option>--}}
                                                                    {{--@endforeach--}}
                                                                    {{--</select>--}}
                                                                </div>
                                                            </td>

                                                            <td class="col-md-12">
                                                                <div class="col-md-12 kutupad">
                                                                    <input type="text" name="tutar[]" id="tutar0" value="0,00" autocomplete="off" class="form-control tutar" style="padding-right:55px;text-align:right;font-family: monospace, monospace"  ><span id="t2" class=" form-control-feedback right ico" >TL</span>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <a class="btn btn-default"  href="#" id="satirsil" aria-label="Settings">
                                                                    <i class="fa fa-times" aria-hidden="true"  ></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                {{--<input type="hidden" name="satirsayisi" id="satirsayisi" value="{{$i}}" class="form-control" >--}}
                                                <div class="col-lg-12" style="padding-left: 0px;">
                                                    <a class="btn btn-default"  id="satirekle" >Satır Ekle</a>
                                                    {{--<a class="btn btn-default"  id="reset" onclick="window.location.reload()" style="visibility: hidden;margin-pad: 50px">Reset</a>--}}
                                                </div>





                                                <div style="width:100%;height:90px">
                                                <!-- {{--<div class="row" style="float:right">--}} -->
                                                    <label class="col-md-2" style="font-size: 14px;margin-left:55.5%;margin-top:7px;font-family: monospace, monospace">Ara Toplam :</label>
                                                <!-- {{--//  <input for="toplam" id="toplam">--}} -->
                                                    <div class="col-md-3" style="font-size: 14px;width:25.5%">
                                                        <input id="toplamm"  class="form-control " style="font-family: monospace, monospace;padding-right:55px" value="0,00" readonly/><span id="t2" style="padding-right:45px;text-align:right" class=" form-control-feedback right ico" >TL</span>
                                                    </div>
                                                <!-- {{--</div>--}} -->
                                                </div>
                                                <div style="width:100%;height:90px;" id="kdvbel" class="kdvbel ">
                                                    <div class="kdv18 kdvtutt ilk">
                                                    <!-- {{--<div class="row" style="float:right">--}} -->
                                                        <label class="col-md-1"  style="font-size: 14px;margin-left:55.5%;margin-top:7px;font-family: monospace, monospace">KDV  :</label>
                                                        <label class="col-md-1 kdv" id="kdv18"  style="font-size: 14px;margin-top:7px;font-family: monospace, monospace" >% 18</label>
                                                    <!-- {{--//  <input for="toplam" id="toplam">--}} -->
                                                        <div class="col-md-3 kadeve" style="font-size: 14px;width:25.5%">
                                                            <input id="toplamkdv18"  class="form-control kdvtut" name="kdvtut[]" style="font-family: monospace, monospace;padding-right:55px; text-align: right;" value="0,00" readonly/><span id="t2" style="padding-right:45px;text-align:right" class=" form-control-feedback right ico" >TL</span>
                                                        </div>
                                                    <!-- {{--</div>--}} -->
                                                    </div>
                                                </div>

                                                <div style="width:100%;height:90px">
                                                <!-- {{--<div class="row" style="float:right">--}} -->
                                                    <label class="col-md-2" style="font-size: 14px;margin-left:55.5%;margin-top:7px;font-family: monospace, monospace">Toplam :</label>
                                                <!-- {{--//  <input for="toplam" id="toplam">--}} -->
                                                    <div class="col-md-3" style="font-size: 14px;width:25.5%">
                                                        <input id="gtoplam" name="gtoplam" class="form-control"  style="font-family: monospace, monospace;padding-right:55px; text-align: right;" value="0,00" readonly/><span id="t2" style="padding-right:45px;text-align:right" class=" form-control-feedback right ico" >TL</span>
                                                    </div>
                                                <!-- {{--</div>--}} -->
                                                </div>

                                            <!-- {{--<div class="col-xs-1 col-md-2">--}}
                                            {{--<div class="form-group">--}}

                                            {{--<input type="hidden" name="sid[]" id="sid" value="" >--}}
                                            {{--<input type="text" name="stokad" id="stokad" value="" autocomplete="off" class="form-control has-feedback-left typeaheads" >--}}
                                            {{--<img class="Typeahead-spinners" src="../images/wait.gif">--}}
                                            {{--<span class="fa fa-search form-control-feedback left" style="margin-top:6px" ></span>--}}
                                            {{--</div>--}}
                                            {{--</div>--}} -->
                                                <div class="h-20"></div>

                                                <div class="clearfix"></div>


                                                <div class="text-right">


                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-right">
                                        <input type="hidden" name="add">
                                        <button class="btn btn-success" type="button" id="sipaktar" style="visibility: visible"><i class="fa fa-download"></i> Sipariş Aktar</button>
                                        {{--<i class="fa fa-download"></i> Sipariş Aktar--}}
                                        {{--<input type="hidden" name="uniquetime" value="1501288025.81">--}}
                                        <!-- <button  class="btn btn-success btn-insert btn-xs-block add" onsubmit="return false;"  type="submit" ><i class="fa fa-plus-square"></i>Kaydet</button> -->
                                        <button  class="btn btn-success btn-insert btn-xs-block add" name="button1" value="button1" onClick="kaydet(this.form);"  type="button" ><i class="fa fa-plus-square"></i> Kaydet</button>

                                    </div>

                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade"  id="sipaktarpopup" role="dialog">
        <div class="modal-dialog " role="document">
            {{--<form id="aktar" action="{{action('irsaliyeController@sipaktarok')}}" method="post" novalidate>--}}

                <input type="hidden" name="sfisnumara" id="sfisnumara" value="{{$numara}}" class="form-control" >
                {{--<input type="hidden" name="fisfid" id="fisfida" value="" class="form-control" >--}}

                <input type="hidden" id="sipaktarray" name="sipaktarray" value="">
                <input type="hidden" id="sipaktarrays" name="sipaktarrays" value="">
                <input type="hidden" id="sipaktarraysok" name="sipaktarraysok" value="">
            <div class="modal-content">
                {{ csrf_field() }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span >×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Sipariş Aktarma</h4>
                </div>
                <div class="modal-body">
                    {{ csrf_field() }}

                    <div class="modall"></div>
                    <table class="table table-striped table-bordered" id="sipaktartablo">
                        <thead>
                        <tr class="headings">
                            <th > </th>
                            <th >Tarih </th>
                            <th class="column-title">Numara </th>
                            <th>Durum</th>

                            {{ csrf_field() }}
                        </tr>

                        </thead>
                        <tbody>

                        </tbody>
                    </table>

                </div>
                <div class="modal-footer footeredit" style="margin-top: 130px">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary sipaktarok" data-token="{{ csrf_token() }}" data-dismiss="modal">Düzenle</button>
                    {{--<button type="button"   name="button2" value="button2" class="btn btn-primary sipaktarokk" data-token="{{ csrf_token() }}" >Düzenle</button>--}}
                </div>

            </div>
            {{--</form>--}}
        </div>
    </div>

    <footer>

        <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorliba3</a>
        </div>
        <div class="clearfix"></div>
    </footer>



@endsection

@section('content_script')

    <link href="{{ asset("css/site.css") }}" rel="stylesheet">
    {{--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css"/>--}}

    {{--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />--}}
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/awesome-bootstrap-checkbox/0.3.7/awesome-bootstrap-checkbox.css" rel="stylesheet" type="text/css" />--}}
    {{--<link href="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.9/css/dataTables.checkboxes.css" rel="stylesheet" type="text/css" />--}}
    <script src="{{ asset("js/datatable.select.min.js") }}"></script>

    <script src="{{ asset("js/typeahead.js") }}"></script>
    <script src="{{ asset("js/sweetalert.js") }}"></script>
    <script src="{{ asset("js/flatpickr.js") }}"></script>
    <script src="{{ asset("js/alertify.min.js") }}"></script>
    {{--<script  src="{{ asset("js/datatable.select.min.js")}}"></script>--}}

    <!-- {{--<script src="{{ asset("js/bootstrap3-typhead.js") }}"></script>--}} -->
    <!-- {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>--}} -->
    <script type="text/javascript">
        $body = $("body");
        $(document).on({
            ajaxStart: function() { $body.addClass("loading");},
            ajaxStop: function() { $body.removeClass("loading");}
        });
        //enter tuşu submit iptal
        document.getElementById("satirler").onkeypress = function(e) {
            var key = e.charCode || e.keyCode || 0;
            if (key == 13) {
                e.preventDefault();
            }
        };


        $(document).on('click','#sipaktar', function() {

            fisturu = $('#fisturu').val();
            fid=$('#fisfid').val();

            if (fid == "" || fid == null )  {
                // swal("Hata!", "Hesap Seçmediniz!...", "error");
                // alertify.error('Cari Hesap Seçilmedi')
                // alertify.confirm('Cari Hesap Seçilmedi');
                // alertify.confirm('a callback will be invoked on ok.').set('onok' );

                // alertify.alert()
                //     .setting({
                //         'title':'<h2>UYARI!</h2>',
                //         'label':'Kapat',
                //         // 'message': 'This dialog is : ' + (closable ? ' ' : ' not ') + 'closable.' ,
                //         'message':'<h2>Cari Hesap Seçilmedi!...</h2>'
                //
                //     }).show();

                new PNotify({
                    title: 'UYARI!',
                    text: 'Cari Hesap Seçilmedi!',
                    type: 'error',
                    // type: 'notice',
                    styling:'bootstrap3'
                });

            }else{

            $.ajax({
                dataType: 'JSON',
                type: 'POST',
                url: '/sipaktarlist',
                data: {
                    '_token': $('input[name=csrf-token]').val(),
                    'fisturu': fisturu,
                    'fid':fid,
                    'olayid':$('#olayid').val()
                },
                success: function (response) {
                    // $("#sipaktartablo").dataTable().fnDestroy();
                    console.log(response);
                   table=$('#sipaktartablo').DataTable({
                         stateSave: true,
                       destroy: true,

                       'data':response.data,

                        "searching": false,
                        "columns": [
                            { data:"sipfisid",
                                'render': function() {
                                    return '<div class="checkbox"><input type="checkbox" class="dt-checkboxes"><label></label>' +
                                        '</div>'

                                },
                                //"visible": false,
                            },
                            { data: "sipfistar"},
                            { data: "numara" },
                            { data: "olayad" },
                            //
                        ],
                        columnDefs: [
                            {

//          { className: "my_class", "targets": [ 0 ] }
                                'orderable': false,
                                'targets': 0,
                                'render': function(data, type, row, meta){
                                    if(type === 'display'){
                                        data = '<div class="checkbox"><input type="checkbox" class="dt-checkboxes"><label></label></div>';
                                    }
                                    return  row;
                                },
                                'checkboxes': {
                                    'selectRow': true,
                                    'selectAllRender': '<div class="checkbox"><input type="checkbox" class="dt-checkboxes"><label></label></div>'
                                }



                            },
                        ],
                        select: {
                            style:    'multi',
                            //selector: 'td:first-child'
                        },
                        order: [[ 1, 'desc' ]],


                        // "order": [[ 0, "desc" ],[ 1, "desc" ]],

                        "autoWidth": false,

                        "paging": false,
//              "bStateSave": true,
                        "language":  {
                            "sDecimal":        ",",
                            "sEmptyTable":     "Tabloda herhangi bir veri mevcut değil",
                            "sInfo":           "_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor",
                            "sInfoEmpty":      "Kayıt yok",
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


                },
                error: function (response) {

                }
            });
                $('#sipaktarpopup').modal();

            }



        });




        function kaydet(form) {
            var fisfid = $('#fisfid').val();
            if(fisfid == "" || fisfid == null || fisfid== undefined){

                swal("Hata!", "Hesap Seçmediniz!...", "error");
                // document.getElementsByClassName("swal-button")[0].style.backgroundColor = '#26B99A';

                // swal({
                // // text: "How was your experience getting help with this issue?",
                // title:"Hesap Seçmediniz!",
                // buttons: {
                //     cancel: "Kapat",
                // },
                // });
            }else{
                swal({
                    title: "Eminmisiniz?",
                    text: "İrsaliye Fişi Kaydedilecek!...",
                    // icon: "warning",

                    // buttons:{
                    // cancel: {
                    //     text: "KAPAT!",
                    //     value: null,
                    //     visible: true,
                    //     className: "",
                    //     closeModal: true,
                    // },
                    // confirm: {
                    //     text: "TAMAMDIR...",
                    //     value: true,
                    //     visible: true,
                    //     className: "",
                    //     closeModal: true
                    // },
                    // },
                    buttons: ["HAYIR!", "EVET!"],
                    // buttons: true,
                    // confirmButtonColor: "#DD6B55",
                    // confirmButtonText: "Evet, silinsin!",
                    // cancelButtonText: "Hayır, vazgeç!",


                    // dangerMode: true,
                })
                    .then((kaydetsipfis) => {
                        if (kaydetsipfis) {

                            form.submit();


                        } else {
                            return false;
                        }

                    });
                // form.submit();

            }

            // if (confirm("Kaydetmek istediğinize eminmisiniz")) {
            // form.submit();
            // }


        }
        // $('#satirler').submit(function(e) {
        //     e.preventDefault();

        //     if (confirm('Are you sure you want to submit this form?')) {
        //             return true;
        //         } else {
        //             return false;
        //         }

        //     });
        //enter tuşu submit iptal
        eskik=18;
        f=18;
        $("tr.sipsatirs input").keyup(function(event) {
            if (event.keyCode === 13) {

                $("#satirekle").click();
                //     $("#bfiyat0").focus();
            }
        });
        kdv=$('#kdv').find(":selected").text();





        if(dtur=""){
            dtur="TL";
        }else{
            dtur = $('#dbirim').find(":selected").text();
        }

        //  kdv = $('#kdv').find(":selected").text();
        // kdv değişti

        var h = ($('#siptable tr.sipsatirs').length)-1;

        function calculate(elementID, satirsayii) {
            try {

                if(kdv=="" || kdv==null){
                    kdv=18;
                }else {
                    kdv = $('#kdv' + h).find(":selected").text();
                }



                // var mi = $('#miktar')[0].value;
                // var bf = $('#bfiyat')[0].value;
                // var tut = mi * bf;
                // var tuta = Number(tut).toLocaleString('tr', {minimumFractionDigits: 2});
                // $('#tutar').val(tuta);
                //document.getElementById('#miktar' + elementID);

                //ilk element slinirse
                if(document.getElementById('miktar' + elementID)){


                    var myBox = $('#miktar' + elementID)[0].value;
                    var myBoxx = $('#bfiyat' + elementID)[0].value;
                    //  console.log(elementID);
                    var tutaa = myBox * myBoxx;
                    var tutaaa = Number(tutaa).toLocaleString('tr', {minimumFractionDigits: 2});
                    $('#tutar' + elementID).val(tutaaa);
                }
                // $('')

                // kdv = satirsayi;
                sum=0;
                $("input[name^='tutar']").each(function(){
                    sum += +$(this).val();
                    //console.log(sum);
                });
                var sattoplam=Number(sum).toLocaleString('tr',{ minimumFractionDigits: 2 });
                //var sattoplamm=sum.replace(/\./g,",");
                $('#toplamm').val(sattoplam);
                var kacsat = $('#siptable tr.sipsatirs').length;
                oran=0;
                var kdvtutart;
                kdvtutare=0;
                kdvtutari=0;
                $('#siptable tr.sipsatirs').each(function() {
                    var kdvtutarii;
                    var kdvora;
                    var kdvoran;
                    var kdvtutar;

                    kdvora = $('#kdv' + oran).find(":selected").text();
                    kdvtutari=0;
                    if(kacsat > 1 && oran > 0){
                        orann=0;
                        $('#siptable tr.sipsatirs').each(function() {
                            kdvoran = $('#kdv' + orann).find(":selected").text();

                            if(kdvoran==kdvora){
                                kdvtutar  = $('#tutar' + orann).val();
                                kdvtutari += (kdvtutar * kdvora / 100);
                                kdvtutarii=Number(kdvtutari).toLocaleString('tr',{ minimumFractionDigits: 2 });
                                $('#toplamkdv'+kdvora).val(kdvtutarii);

                                // $('#gtoplam').val(sattoplam);

                            }
                            orann++;
                        });


                    }else{
                        // tek satır olduğunda
                        kdvtutar  = $('#tutar' + oran).val();
                        kdvtutari = (kdvtutar * kdvora / 100);
                        kdvtutarii=Number(kdvtutari).toLocaleString('tr',{ minimumFractionDigits: 2 });
                        $('#toplamkdv'+kdvora).val(kdvtutarii);

                        // $('#gtoplam').val(kdvtutariii);
                    }

                    oran++;
                });
                kdvtut=0;
                var kdvtuta;
                var ff;
                sattoplami=0;
                $("input[name^='kdvtut']").each(function() {

                    ff=$(this).val().replace(/\./g,"");
                    var fff=ff.replace(/\,/g,".");
                    // ffff=Number(ff);
                    kdvtut += +fff;
                    //kdvtuta=kdvtuta+kdvtut;
                    //   //fff=Number(ff).toLocaleString('en',{ minimumFractionDigits: 2 });
                    // var ffff=ff.replace(/\./g,",");
                    //
                    //kdvtut +=+ ff;

                    //kdvtut=Number(kdvtuta).toLocaleString('tr',{ minimumFractionDigits: 2 });
                    //  kdvtut=kdvtut.replace(/\./g,",");
                    // console.log($(this).val());
                });
                //kdvtuta=Number(kdvtut).toLocaleString('tr',{ minimumFractionDigits: 2 });
                //var sattoplami=sattoplam.replace(/\,/g,".");
                //var sattoplamii=Number(sattoplami);
                //sattoplami=Number(sattoplamii).toLocaleString('tr',{ minimumFractionDigits: 2 });


                sattoplami= Number(sum) + Number(kdvtut);
                var sattoplamii=Number(sattoplami).toLocaleString('tr',{ minimumFractionDigits: 2 });
                $('#gtoplam').val(sattoplamii);

                //console.log(sum);
                //console.log(kdvtut);

                // dsattoplam=sattoplam.replace(/\./g,",");
            } catch (e) {
                alert(e.message)
            }
            //kdv eklenecek

            // var kdvsattoplam= sum*kdv/100;
            // var kdvsattoplamm =Number(kdvsattoplam).toLocaleString('tr',{ minimumFractionDigits: 2 });
            // $('#toplamkdv').val(kdvsattoplamm);


            // var geneltoplam=sum*(1+(kdv/100));
            // var geneltoplamm =Number(geneltoplam).toLocaleString('tr',{ minimumFractionDigits: 2 });
            // $('#gtoplam').val(geneltoplamm);
        }

        function eski(ff){

            eskii=ff;
            // myFunction(eskii);
        }
        function  myFunction (gggg,z,t){

            //var h = ($('#siptable tr.sipsatirs').length)-1;
            //  var ilksat=$('#kdv0').find(":selected").text();
            //  if(gggg==0){satsay=1;}else{ satsay =0;}
            //if(i==null){i=1;}
//console.log(z,t);
            if(typeof z!=="undefined"){
                eskii=z;
            }
            satsay =0;

            //18 eklenirse
            if(t==1){
                kdvtext=gggg;
            }else {
                var kdvtext = $('#kdv' + gggg).find(":selected").text(); //secilen dd
            }
            var  kdvtoplam1 =1;

            n = 0;
            //console.log(gggg,z);

            esss=0;
            $('#siptable tr.sipsatirs').each(function(){
                //kdvv=$("select[name^=kdv[]").find(":selected").text();
                kdvv=$('#kdv'+satsay).find(":selected").text();
                // console.log(kdvv,kdvtext);
                //   console.log(i);
                if(kdvv==kdvtext){
                    n++;
//return false;
                }
                if(kdvv==eskii){
                    esss++;
                    // console.log(eskik);
                }
                satsay++;
//console.log(ibom);
            });

            ess=0;
            // $('#kdvbel div.kadeve').each(function(){
            //     yy=$('#kdv'+eskik).find(":selected").text();
            //    // ess++;
            //console.log(z);
            // });
            $('#siptable tr.sipsatirs').each(function() {
                if (z == null) {

                    if (n < 2) {
                        //  n=1;

                        var kDiv = $('#kdvbel');
                        var kDivsatir =
                            '<div class="kdv' + kdvtext + ' kdvtutt">' +
                            '<label class="col-md-1"  style="font-size:14px;margin-left:55.5%;margin-top:7px;font-family:monospace,monospace">KDV  :</label>' +
                            '<label class="col-md-1 kdv" id="kdv' + kdvtext + '" style="font-size: 14px;margin-top:7px;font-family: monospace, monospace" >% ' + kdvtext + '</label>' +
                            '<div class="col-md-3 kadeve" style="font-size: 14px;width:25.5%">' +
                            '<input id="toplamkdv' + kdvtext + '" disabled="disabled" class="form-control kdvtut" name="kdvtut" style="font-family: monospace, monospace;padding-right:55px; text-align: right;" value="0,00" ><span id="t2" style="padding-right:45px;text-align:right" class=" form-control-feedback right ico" >TL</span>' +
                            '</div>' +
                            '</div>';

                        $(kDivsatir).appendTo(kDiv);
                        //  $(".kdv"+eskik).remove();

                        // console.log(esss);

                    }
                }
                // console.log(esss);
                if(esss==0){
                    // console.log(eskik);
                    $(".kdv"+eskii).remove();

                }
                // console.log(eskik);
                //
                n++;
            });
            //console.log(gggg);
            calculate(gggg);


        }
        $(document).ready(function() {


//        $("#bfiyat,#miktar").on('change keyup',function() {
//
//               fiy = $('#bfiyat').val();
//               mik =$('#miktar').val();
//
//                var tutar=fiy*mik;
//
//                $('#tutar').val(tutar);
//            $('#toplamm').text(tutar);
//            });


            Inputmask.extendAliases({
                'myCurrency': {
                    radixPoint: ',',
                    alias: 'numeric',
                    prefix: '',
                    digits: 5,
                    autoUnmask: true,
                    removeMaskOnSubmit: true,
                    unmaskAsNumber: true,
                    allowPlus: false,
                    allowMinus: false,
                    autoGroup: true,
                    groupSeparator: "."
                }
            });
            Inputmask.extendAliases({
                'tutar': {
                    radixPoint: ',',
                    alias: 'decimal',
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
            $('#bfiyat0,#miktar0').inputmask("myCurrency");
            $('#tutar0,#toplamm').inputmask("tutar");


        });








        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

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
                $("#fisfida").val(data.id);
                // console.log(data.id);
            })
                .on('typeahead:asyncrequest', function() {
                    $('.Typeahead-spinner').show();
                })
                .on('typeahead:asynccancel typeahead:asyncreceive', function() {
                    $('.Typeahead-spinner').hide();

                });
            var stokbloodhound = new Bloodhound({

                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),

                queryTokenizer: Bloodhound.tokenizers.whitespace,
                prefetch: {
                    url: '/autocompletestok',
                    cache:false,
                    filter: function (list) {
//                        console.log(list);
                        // assume data is an array of strings e.g. ['one', 'two', 'three']
                        return $.map(list, function (stok) {

                            return {
                                name: stok.sad,
                                id: stok.sid
                            };
                        });
                    }
                }
            });
//dfgdfgd
            $("input[name^='stokad']").typeahead({
                    // $("#sss").typeahead({
                    limit:5,
                    hint: false,
                    minLength: 1,
                    rateLimitWait:50
                },
                {
                    name: 'sad',
                    id: 'sid',
                    display: 'name',
                    //Input value to be set when you select a suggestion.

                    source: stokbloodhound,
                    templates: {
                        empty: [
                            '<div class="list-group search-results-dropdown"><div class="list-group-item">Veri Bulunamadı</div></div>'
                        ]
                    }

                }).on("typeahead:selected", function(obj, stok) {
                $("#fissid0").val(stok.id);
                // console.log(stok.id);
            })
                .on('typeahead:asyncrequest', function() {
                    $('.Typeahead-spinner').show();
                })
                .on('typeahead:asynccancel typeahead:asyncreceive', function() {
                    $('.Typeahead-spinner').hide();

                });
            //incele

//önemliiiii?????**********************************************************************************************************************
            //   $(function() {
            var scntDiv = $('#siptable');
            var i = $('#siptable tr.sipsatirs').length;
            // var i=1;
            $(document).on('click','#satirekle', function(ibo) {
                var selectmenu ='<td ><div class="col-lg-12 kutupad"><div class="form-group kutupad"><input type="hidden" class="fissid" name="fissid[]" id="fissid'+i+'" value=""  ><input type="text" name="stokad[]" id="sss"  autocomplete="off" class="form-control has-feedback-left" style="padding-left:65px;"><img class="Typeahead-spinners" src="../images/wait.gif"><span class="fa fa-search form-control-feedback left ico"></span></div></div><td><div class="col-md-12 kutupad"><input type="text" name="miktar[]" id="miktar'+i+'" data-inputmask="\'alias\': \'myCurrency\'" oninput="calculate('+i+')" autocomplete="off" class="form-control miktar" style="font-family: monospace, monospace;"></div></td><td><div class="col-lg-12 kutupad"><select data-toggle="dropdown" id="birim" class="form-control birim" name="birim[]" aria-expanded="false" ><span class="caret"></span>@foreach($birim as $key => $bad)<option  value="{{ $key }}">{{ $bad }}</option>@endforeach</select></div></td><td><div class="col-md-12 kutupad"><input type="text" name="bfiyat[]" id="bfiyat'+i+'" data-inputmask="\'alias\': \'myCurrency\'" oninput="calculate('+i+')"  value="" autocomplete="off" class="form-control bfiyat" style="padding-right:55px;text-align:right;font-family: monospace, monospace;" ><span id="t1" class=" form-control-feedback right ico">'+dtur+'</span></div>' +
                    '<td class="col-md-1"><div class="col-lg-12 kutupad">'+
                    '<select data-toggle="dropdown" id="kdv'+i+'" class="form-control kkdv" onchange="myFunction('+i+')" onclick="eski($(this).find(\':selected\').text())" name="kdv[]"><span class="caret"></span>@foreach($vergim as $key => $vor)'+
                    '<option value="{{ $key }}">{{ $vor }}</option>@endforeach</select></div></td>'+
                    '<td><div class="col-md-12 kutupad"><input type="text" name="tutar[]" id="tutar'+i+'" data-inputmask="\'alias\': \'tutar\'" value="0,00" autocomplete="off" class="form-control tutar" style="padding-right:55px;text-align:right;font-family: monospace, monospace;"><span id="t1" class=" form-control-feedback right ico">'+dtur+'</span></div></td><td><a class="btn btn-default  "  href="#" id="satirsil"  aria-label="Settings"><i class="fa fa-times" aria-hidden="true"></i></a></td>'+
                    '</td>';
                $('<tr  class="sipsatirs">'+selectmenu+'</tr>').appendTo(scntDiv).find('#sss').typeahead({
                        hint: false,
                        minLength: 1,
                        limit : 10
                    },
                    {
                        name: 'sad',
                        display: 'name',
                        source: stokbloodhound,
                        templates: {
                            empty: [
                                '<div class="list-group search-results-dropdown"><div class="list-group-item">Veri Bulunamadı</div></div>'
                            ]
                        }

                    }).keyup(function(){
                    this.value = this.value.toUpperCase();
                }).on("typeahead:selected", function(obj, stok) {

                    // $hh=$('#fissid'+i);

                    //$('#fissid'+i).val(stok.id);
                    //$("[id='fissid" + i + "']").val(stok.id);
                    $re=$(this).closest("tr.sipsatirs").find(".fissid").val(stok.id);
                    // console.log($re);
                })
                    .on('typeahead:asyncrequest', function() {
                        $('.Typeahead-spinner').show();
                    })
                    .on('typeahead:asynccancel typeahead:asyncreceive', function() {
                        $('.Typeahead-spinner').hide();

                    }).on("tr.sipsatirs input").keyup(function(event) {
                    if (event.keyCode === 13) {

                        $("#satirekle").click();
                    }
                });
                $("input[name^='stokad']").focus();
                $("[id='bfiyat" + i + "'],[id='miktar" + i + "'],[id='tutar" + i + "']").inputmask();


                i++;
                // aktarma butonu görünmez
                document.getElementById('sipaktar').style.visibility = 'hidden';
                // document.getElementById("sipaktar").attributes["type"] = "hidden";
                // document.getElementById('sipaktar').type = 'hidden';
                var  z=null;
                myFunction (18, z, 1);

                return false;

            });


            $(document).on('click','#satirsil', function() {
                // var sildi;
                //re=$(this).attr('data-sil');
                // re=$(this).parents(":selected").text();
                // re=$(this).closest("tr").find(".kkdv :selected").text();

                // var r=i;
                //  i=r;
                //   re=r-1;
                if( i > 1 ) {
                    // ac=$("#kdv"+re);
                    re=$(this).closest("tr").find(".kkdv :selected").text();
                    z=re;
                    // f = $("#kdv"+re).find(":selected").text();
                    // $('#siptable tr.sipsatirs')
                    // console.log(f);
                    //console.log(re);

                    $(this).parents('tr').remove();

                    i--;

                    var fields = $('#siptable tr.sipsatirs .fissid');
                    var counts = 0;
                    $.each(fields, function() {
                        // $('#siptable tr.sipsatirs').each(function() {

                        $(this).attr('id','fissid' + counts);

                        counts++;
                    });

                    //yeniden id isimlendir
                    var fields = $('#siptable tr.sipsatirs .miktar');
                    var counts = 0;
                    $.each(fields, function() {
                        // $('#siptable tr.sipsatirs').each(function() {

                        $(this).attr('id','miktar' + counts);
                        $(this).attr('oninput','calculate('+counts+')' );
                        counts++;
                    });

                    var fields = $('#siptable tr.sipsatirs .birim');
                    var counts = 0;
                    $.each(fields, function() {
                        // $('#siptable tr.sipsatirs').each(function() {

                        $(this).attr('id','birim' + counts);
                        counts++;
                    });

                    var fields = $('#siptable tr.sipsatirs .bfiyat');
                    var counts = 0;
                    $.each(fields, function() {
                        // $('#siptable tr.sipsatirs').each(function() {

                        $(this).attr('id','bfiyat' + counts);
                        $(this).attr('oninput','calculate('+counts+')' );
                        counts++;
                    });

                    var fields = $('#siptable tr.sipsatirs .kkdv');
                    var count = 0;
                    $.each(fields, function() {
                        // $('#siptable tr.sipsatirs').each(function() {

                        $(this).attr('id','kdv' + count);
                        $(this).attr('onchange','myFunction('+count+')');
                        count++;
                    });



                    var field = $('#siptable tr.sipsatirs .tutar');
                    var counts = 0;

                    $.each(field, function() {
                        // $('#siptable tr.sipsatirs').each(function() {
                        $(this).attr('id','miktar' + counts);

                        $(this).attr('id','tutar' + counts);
                        counts++;

                    });
                    //yeniden id isimlendir
                }

                calculate(0);
                myFunction (re,z);

                return false;
            });


            $('#dbirim').on('change', function () {
                // dtur=$('#birim').find('option:selected').val();
                dtur = $('#dbirim').find(":selected").text();

                $('#t1,#t2').text(dtur);
                x = $('#dbirim').find("option:selected").val();
                $('#did').val(x);
                //  $('#abc span').text('baa baa black sheep');


                var ssss = $(this).val()

//                $(this).find('option[value="' + value + '"]').attr("selected", "selected");
            });
            $('#depo').on('change', function () {
                // dtur=$('#birim').find('option:selected').val();

                depo=$('#depo').find("option:selected").val();
                $('#depoid').val(depo);

            });
            $('#fisturu').on('change', function () {
                // dtur=$('#birim').find('option:selected').val();

                fisturu=$('#fisturu').find("option:selected").val();
                $('#fisturuid').val(fisturu);

            });



            //önemli*******************************************************************************************************************************
            $(".buyuk").keyup(function(){
                this.value = this.value.toUpperCase();
            });
            // $("#stokad").keyup(function(){
            //     this.value = this.value.toUpperCase();
            // });
            $("#tarih,#aktartarih").flatpickr(
                {
//              enableTime:true,
                    altInput: true,
                    altFormat: "d-m-Y",
                    dateFormat: "Y-m-d",
                    weekNumbers: true,
                    locale:'tr',
                    allowInput: true,
                    defaultDate: "today"
                }

            );
            $(document).on('click', '.sipaktarok', function (e){
                var scntDiv = $('#siptable');
                var i = 0;
                $('#sipaktarray').val("");
                var form = this;

                var rows_selected = table.column(0).checkboxes.selected();

                // Iterate over all selected checkboxes
                $.each(rows_selected, function(index, rowId){
                    // Create a hidden element
                    $(form).append(
                        $('<input>')
                            .attr('type', 'hidden')
                            .attr('name', 'id[]')
                            .val(rowId)
                    );
                    e.preventDefault();

                    $('#sipaktarray').val(rows_selected.join(","));

//
                });


                $('#edit').val("1");
                // window.location.replace("/sipaktarok");
                console.log($('#sipaktarray').val());
                $('#sipaktarrayf').val($('#sipaktarray').val());
                $.ajax({
                    dataType: 'JSON',
                    type: 'POST',
                    url: '/sipaktarok',
                    data: {
                        '_token': $('input[name=csrf-token]').val(),
                        'fistur': fisturu,
                        'sipaktarray':$('#sipaktarray').val()


                    },
                    success:function (response) {
                        console.log(response);

                        var $trpi = $('tbody');
                        $trpi.remove();
                        $(".kdvtutt").remove();
                        $.each (response, function (veri) {


                                    {{--data-fissatid="{{$sipfissatt->sipfisatirid}}"--}}
                            var selectmenu ='<td class="col-md-4"><div class="col-lg-12 kutupad"><div class="form-group kutupad "><input type="hidden" name="sipfissatirid[]" id="sipfissatirid'+i+'" ' +
                                'class="sipfissatirid" value="'+response[veri].sipfisatirid+'"><input type="hidden" class="fissid" name="fissid[]" id="fissid'+i+'" ' +
                                'data-fissatid="'+response[veri].sipfisatirid+'" value="'+response[veri].fissid+'"  class="fissid" ><input type="text" name="stokad[]" value="'+response[veri].sad+'" ' +
                                'id="sss"  autocomplete="off" class="form-control has-feedback-left" style="padding-left:65px;"><span class="fa fa-search form-control-feedback left ico"></span></div>' +
                                '</div><td class="col-md-1"><div class="col-md-12 kutupad"><input type="text" name="miktar[]" id="miktar'+i+'" data-inputmask="\'alias\': \'myCurrency\'" oninput="calculate('+i+')" ' +
                                'value="'+response[veri].miktar+'" autocomplete="off" class="form-control miktar" style="font-family: monospace, monospace;"></div></td><td class="col-md-1"><div class="col-lg-12 kutupad">' +
                                '<select data-toggle="dropdown" id="birim'+i+'" class="form-control birim" name="birim[]" aria-expanded="false" ><span class="caret"></span>@foreach($birim as $key => $bad)
                                    <option  value="{{ $key }}">{{ $bad }}</option>@endforeach</select></div></td><td class="col-md-2"><div class="col-md-12 kutupad"><input type="text" name="bfiyat[]" id="bfiyat'+i+'" ' +
                                'data-inputmask="\'alias\': \'myCurrency\'" oninput="calculate('+i+')"  value="'+response[veri].bfiyat+'" autocomplete="off" class="form-control bfiyat" style="padding-right:55px;text-align:right;font-family: monospace, monospace;" ><span id="t1" class=" form-control-feedback right ico">'+dtur+'</span></div>' +
                                '<td class="col-md-1"><div class="col-lg-12 kutupad">'+
                                '<select data-toggle="dropdown" id="kdv'+i+'" class="form-control kkdv" onchange="myFunction('+i+')" onclick="eski($(this).find(\':selected\').text())" name="kdv[]"><span class="caret"></span>@foreach($vergim as $key => $vor)'+
                                '<option value="{{ $key }}">{{ $vor }}</option>@endforeach</select></div></td>'+
                                '<td class="col-md-12"><div class="col-md-12 kutupad"><input type="text" name="tutar[]" id="tutar'+i+'" data-inputmask="\'alias\': \'tutar\'" value="'+response[veri].tutar+'" autocomplete="off" class="form-control tutar" style="padding-right:55px;text-align:right;font-family: monospace, monospace;"><span id="t1" class=" form-control-feedback right ico">'+dtur+'</span></div>' +
                                '<td><a class="btn btn-default"  href="#" id="satirsiluyar"  aria-label="Settings"><i class="fa fa-times" aria-hidden="true"></i></a>'+
                                '</td>';
                            $('<tr  class="sipsatirs">'+selectmenu+'</tr>').appendTo(scntDiv).find('#sss').typeahead({
                                    hint: false,
                                    minLength: 1,
                                    limit : 10
                                },
                                {
                                    name: 'sad',
                                    display: 'name',
                                    source: stokbloodhound,
                                    templates: {
                                        empty: [
                                            '<div class="list-group search-results-dropdown"><div class="list-group-item">Veri Bulunamadı</div></div>'
                                        ]
                                    }

                                }).keyup(function(){
                                this.value = this.value.toUpperCase();
                            }).on("typeahead:selected", function(obj, stok) {

                                // $hh=$('#fissid'+i);

                                //$('#fissid'+i).val(stok.id);
                                //$("[id='fissid" + i + "']").val(stok.id);
                                $re=$(this).closest("tr.sipsatirs").find(".fissid").val(stok.id);
                                // console.log($re);
                            })
                                .on('typeahead:asyncrequest', function() {
                                    $('.Typeahead-spinner').show();
                                })
                                .on('typeahead:asynccancel typeahead:asyncreceive', function() {
                                    $('.Typeahead-spinner').hide();

                                }).on("tr.sipsatirs input").keyup(function(event) {
                                if (event.keyCode === 13) {

                                    $("#satirekle").click();
                                }
                            });
                            // $("input[name^='stokad']").focus();
                            $("[id='bfiyat" + i + "'],[id='miktar" + i + "'],[id='tutar" + i + "']").inputmask();

                            // $('#kdv'+i).find(":selected").text(response[veri].vor);
                            // $('#level option:eq(3)').prop('selected', true);
                            // $('#kdv'+i+' option:eq(' + response[veri].vid + ')');
                            // $('#kdv'+i).text(response[veri].vor);
                            $('#birim'+i+' option:selected').text(response[veri].bad);
                            $('#kdv'+i+' option:selected').text(response[veri].vor);


                            //  document.getElementById('satirekle').style.visibility = 'hidden';
                            // document.getElementById('reset').style.visibility = 'visible';
                            i++;
                            var  z=null;
                            myFunction (response[veri].vor, z, 1);

                            {{--// return false;--}}





                            {{--// console.log (bb);--}}
                            {{--// console.log (response[bb]);--}}
                            {{--// console.log (response[bb].numara);--}}
                        });
                        {{--return false;--}}

                                if($('#satirekle').length >= 1){
                            document.getElementById('satirekle').id = 'reset';
                            document.getElementById('reset').innerHTML ='Reset'; //button gizleme
                            // document.getElementById('reset').onclick="window.location.reload()";
                            document.getElementById('reset').setAttribute('onclick','window.location.reload()');
                            // $('#reset').attr("onclick", "window.location.reload()");
                                }

                    },
                    error:function(){}
                });
            });

        });
    </script>
@endsection