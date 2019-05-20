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
        <link href="{{ asset('/css/site.css') }}" rel="stylesheet" type="text/css" />
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

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            @if($fisturuid==1)
                                <h2 class="sat">{{$sipfisnoadi}} İrsaliye </h2>
                            @else
                                <h2 class="al">{{$sipfisnoadi}} İrsaliye </h2>

                            @endif
                            {{--<ul class="nav navbar-right panel_toolbox">--}}
                            {{--<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>--}}
                            {{--</li>--}}
                            {{--<li class="dropdown">--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>--}}
                            {{--<ul class="dropdown-menu" role="menu">--}}
                            {{--<li><a href="#">Settings 1</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="#">Settings 2</a>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a class="close-link"><i class="fa fa-close"></i></a>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                            <div class="modall"></div>
                            <div class="clearfix"></div>
                            <div class="x_content">
                                <form id="esatirler" action="{{action('irsaliyeController@irsaliyeditkaydet')}}" class="form-horizontal form-label-left" name="form1" method="POST"  novalidate>
                                    {{--<input type="hidden" name="_method" value="PUT">--}}
                                    {{csrf_field()}}



                                    <br />

                                    {{ csrf_field() }}
                                    <div class="x_panel">
                                        <div class="col-md-6">
                                            <div class="col-md-4">



                                            <!-- {{--textbox başlangıç--}} -->

                                                <div class="form-group item">
                                                    <label for="tar">Tarih</label>
                                                    <input type="hidden" name="fisturuid" id="fisturuid" value="{{$fisturuid}}" class="form-control" >
                                                    <input type="hidden" name="fisturu" id="fisturu" value="{{$fisturu}}" class="form-control" >
                                                    <input type="hidden" name="sipfisid" id="sipfisid" value="{{$sipfisid}}" class="form-control" >
                                                    <input type="hidden" name="irnold" id="irnold" value="{{$numara}}" class="form-control" >
                                                    <input type="text" name="tar" id="tarih" class="form-control has-feedback-left " value="{{$sipfis->sipfistar}}"   aria-describedby="inputSuccess2Status2">
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
                                                            <input type="hidden" name="fisfid" id="fisfid" value="{{$sipfis->fisfid}}" class="form-control" >
                                                            <input type="text" name="fisfad" id="fisfad" value="{{$sipfis->cunvan}}" autocomplete="off" class="form-control has-feedback-left typeahead buyuk">
                                                            {{--<img class="Typeahead-spinner" src="../images/wait.gif">--}}
                                                            <span class="fa fa-search form-control-feedback left" ></span>
                                                        </div> <!-- /.form-group -->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="district">Durum</label>
                                                            <input type="hidden" name="olayid" id="olayid" value="{{$secolay}}" class="form-control">
                                                            <select data-toggle="dropdown" id="olay" class="form-control " disabled><span class="caret" ></span>
                                                            <!-- {{--<option >Seçiniz</option>--}} -->
                                                                {{--@foreach($banka as $abanka)--}}
                                                                {{--<option  value="{{ $abanka->baid }}" {{ $secb == $abanka->baid ? 'selected=="selected"' : '' }}>{{ $abanka->bankad }}</option>--}}
                                                                {{--@endforeach--}}
                                                                @foreach($olay as $key =>$olayad  )
                                                                    <option  value="{{ $key }}"
                                                                            {{ $secolay == $key ? 'selected=="selected"' : ''}}>
                                                                        {{$olayad}}
                                                                    </option>

                                                                @endforeach
                                                                {{--@foreach($olay as $key => $olayad)--}}
                                                                {{--<option  value="{{ $key }}">{{ $olayad }}</option>--}}
                                                                {{--@endforeach--}}
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
                                                            <input type="hidden" name="depo" id="depoid" value="{{$secdepo}}" class="form-control">
                                                            <select data-toggle="dropdown" id="depo" class="form-control"><span class="caret"></span>
                                                            <!-- {{--<option >Seçiniz</option>--}} -->
                                                                {{--@foreach($depo as $key => $depoad)--}}
                                                                {{--<option  value="{{ $key }}">{{ $depoad }}</option>--}}
                                                                {{--@endforeach--}}
                                                                @foreach($depo as $key)
                                                                    <option  value="{{ $key->depoid }}"
                                                                            {{ $secdepo == $key->depoid ? 'selected=="selected"' : ''}}>
                                                                        {{$key->depoad}}
                                                                    </option>

                                                                @endforeach
                                                            </select>
                                                        </div> <!-- /.form-group -->
                                                    </div> <!-- /.col-md-4 -->
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="tax_no">Döviz</label>
                                                            <input type="hidden" name="did" id="did" value="{{$secdoviz}}" class="form-control" >
                                                            <select data-toggle="dropdown" id="dbirim" class="form-control" name="dbirim[]" aria-expanded="false" disabled><span class="caret"></span>
                                                            <!-- {{--<option >Seçiniz</option>--}} -->
                                                                {{--@foreach($doviz as $key => $dad)--}}
                                                                {{--<option  value="{{ $key }}">{{ $dad }}</option>--}}
                                                                {{--@endforeach--}}
                                                                @foreach($doviz as $key)
                                                                    <option  value="{{ $key->did }}"
                                                                            {{ $secdoviz == $key->did ? 'selected=="selected"' : ''}}>
                                                                        {{$key->dad}}
                                                                    </option>

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
                                                        @php $i=0; @endphp
                                                        @foreach($sipfissat as $sipfissatt)


                                                            <tr class="sipsatirs">

                                                                <td class="col-md-4">
                                                                    <div class="col-lg-12 kutupad">
                                                                        <div class="form-group kutupad">
                                                                            <input type="hidden" name="sipfissatirid[]" id="sipfissatirid{{$i}}" class="sipfissatirid" value="{{$sipfissatt->sipfisatirid}}">
                                                                            <input type="hidden" name="fissid[]" id="fissid{{$i}}" class="fissid" data-fissatid="{{$sipfissatt->sipfisatirid}}" value="{{$sipfissatt->fissid}}">
                                                                            <input type="text" name="stokad[]" id="stokad" value="{{$sipfissatt->sad}}" autocomplete="off" class="form-control has-feedback-left buyuk" style="padding-left:65px;">
                                                                            {{--<img class="Typeahead-spinners" src="../images/wait.gif">--}}
                                                                            <span class="fa fa-search form-control-feedback left ico"   ></span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="col-md-1">
                                                                    <div class="col-md-12 kutupad">
                                                                        <input type="text" name="miktar[]" id="miktar{{$i}}" value="{{$sipfissatt->miktar}}" autocomplete="off"  class="form-control miktar" oninput="calculate({{$i}})" style="font-family: monospace, monospace;text-align: right;" >
                                                                    </div>
                                                                </td>
                                                                <td class="col-md-1">
                                                                    <div class="col-lg-12 kutupad">
                                                                        <select data-toggle="dropdown" id="birim" class="form-control birim" value="" name="birim[]" aria-expanded="false"  ><span class="caret"></span>
                                                                            @foreach($birim as $birimm => $key )
                                                                                <option  value="{{ $birimm }}" {{ $sipfissatt->birim == $birimm ? 'selected' :  ''  }}
                                                                                >{{ $key }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </td>
                                                                <td class="col-md-2">
                                                                    <div class="col-md-12 kutupad">
                                                                        <input type="text" name="bfiyat[]" id="bfiyat{{$i}}" value="{{$sipfissatt->bfiyat}}" autocomplete="off" class="form-control bfiyat" style="padding-right:55.6px;text-align:right;font-family: monospace, monospace;" oninput="calculate({{$i}})" ><span id="t1" class=" form-control-feedback right ico">TL</span>
                                                                    </div>
                                                                </td>
                                                                <td class="col-md-1">
                                                                    {{--kdv zorrrrrrrr--}}
                                                                    <div class="col-lg-12 kutupad">
                                                                        <select data-toggle="dropdown" id="kdv{{$i}}" name="kdv[]" class="form-control kkdv" onchange="myFunction({{$i}})" onclick="eski($(this).find(':selected').text())"  name="kdv[]"><span class="caret"></span>
                                                                            @foreach($vergim as $vergi => $key)
                                                                                <option value="{{ $vergi }}"{{ $sipfissatt->kdv == $vergi ? 'selected=="selected"' : '' }}>
                                                                                    {{ $key }}</option>
                                                                            @endforeach
                                                                            {{--@foreach($vergim as $key => $vor)--}}
                                                                            {{--<option  value="{{ $key }}">{{ $vor }}</option>--}}
                                                                            {{--@endforeach--}}
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
                                                                        <input type="text" name="tutar[]" id="tutar{{$i}}" value="{{$sipfissatt->tutar}}" autocomplete="off" class="form-control tutar" style="padding-right:55px;text-align:right;font-family: monospace, monospace"  ><span id="t2" class=" form-control-feedback right ico" >TL</span>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <a class="btn btn-default"  href="#" id="satirsil" data-fissatid="{{$sipfissatt->sipfisatirid}}" aria-label="Settings">
                                                                        <i class="fa fa-times" aria-hidden="true"  ></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            @php $i=$i+1; @endphp
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <input type="hidden" name="satirsayisi" id="satirsayisi" value="{{$i}}" class="form-control" >
                                                <div class="col-lg-12" style="padding-left: 0px;">
                                                    <a class="btn btn-default"  id="satirekle" >Satır Ekle</a>
                                                </div>





                                                <div style="width:100%;height:90px">

                                                    <label class="col-md-2" style="font-size: 14px;margin-left:55.5%;margin-top:7px;font-family: monospace, monospace">Ara Toplam :</label>

                                                    <div class="col-md-3" style="font-size: 14px;width:25.5%">
                                                        <input id="toplamm"  class="form-control " style="font-family: monospace, monospace;padding-right:55px" value="0,00" readonly/><span id="t2" style="padding-right:45px;text-align:right" class=" form-control-feedback right ico" >TL</span>
                                                    </div>

                                                </div>
                                                <div style="width:100%;height:90px;" id="kdvbel" class="kdvbel">
                                                    <div class="kdv18 kdvtutt">

                                                        <label class="col-md-1"  style="font-size: 14px;margin-left:55.5%;margin-top:7px;font-family: monospace, monospace">KDV  :</label>
                                                        <label class="col-md-1 kdv" id="kdv18"  style="font-size: 14px;margin-top:7px;font-family: monospace, monospace" >% 18</label>

                                                        <div class="col-md-3 kadeve" style="font-size: 14px;width:25.5%">
                                                            <input id="toplamkdv18"  class="form-control kdvtut" name="kdvtut[]" style="font-family: monospace, monospace;padding-right:55px; text-align: right;" value="0,00" readonly/><span id="t2" style="padding-right:45px;text-align:right" class=" form-control-feedback right ico" >TL</span>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div style="width:100%;height:90px">

                                                    <label class="col-md-2" style="font-size: 14px;margin-left:55.5%;margin-top:7px;font-family: monospace, monospace">Toplam :</label>

                                                    <div class="col-md-3" style="font-size: 14px;width:25.5%">
                                                        <input id="gtoplam" name="gtoplam" class="form-control"  style="font-family: monospace, monospace;padding-right:55px; text-align: right;" value="0,00" readonly/><span id="t2" style="padding-right:45px;text-align:right" class=" form-control-feedback right ico" >TL</span>
                                                    </div>

                                                </div>

                                                <div class="h-20"></div>

                                                <div class="clearfix"></div>


                                                <div class="text-right">
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-right">
                                        <input type="hidden" name="add">
                                        <input type="hidden" name="uniquetime" value="1501288025.81">
                                        <button  class="btn btn-success btn-insert btn-xs-block add"   type="submit" ><i class="fa fa-plus-square"></i>Kaydet</button>
                                    </div>

                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>

        <div class="pull-right">
            Baver Kimya Plastik San Tic Ltd Şti
        </div>
        <div class="clearfix"></div>
    </footer>



@endsection

@section('content_script')

    {{--<link href="{{ asset("css/site.css") }}" rel="stylesheet">--}}

    <script src="{{ asset("js/typeahead.js") }}"></script>
    <script src="{{ asset("js/sweetalert.js") }}"></script>
    <script src="{{ asset("js/alertify.min.js") }}"></script>
    <script src="{{ asset("js/flatpickr.js") }}"></script>
    <!-- {{--<script src="{{ asset("js/bootstrap3-typhead.js") }}"></script>--}} -->
    <!-- {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>--}} -->
    <script type="text/javascript">
        //enter tuşu submit iptal

        $body = $("body");
        $(document).on({
            ajaxStart: function() { $body.addClass("loading");},
            ajaxStop: function() { $body.removeClass("loading");}
        });


        document.getElementById("esatirler").onkeypress = function(e) {
            var key = e.charCode || e.keyCode || 0;
            if (key == 13) {
                e.preventDefault();
            }
        };

        // sayfa yüklendiğinde
        $(window).load(function (){

            //eskii=null;
            // eski(undefined);
            myEdit();

        });

        function myEdit(){

            // $(".kdv").remove();
            var eh = 0;

            var eekdv=0;
            esum=0;

            // $(this).attr('id','fissid' + counts);
            var ssh = ($('#siptable tr.sipsatirs').length);
            ekdv=$('#kdv'+eh).find(":selected").text();
            ekdv=Number(ekdv);
            $('#siptable tr.sipsatirs').each(function() {

                if(eh == 0){

                    $(".kdv18").remove();
                    var ekDiv = $('#kdvbel');
                    var ekDivsatir =
                        '<div class="kdv' + ekdv + ' kdvtutt">' +
                        '<label class="col-md-1"  style="font-size:14px;margin-left:55.5%;margin-top:7px;font-family:monospace,monospace">KDV  :</label>' +
                        '<label class="col-md-1 kdv" id="kdv' + ekdv + '" style="font-size: 14px;margin-top:7px;font-family: monospace, monospace" >% ' + ekdv + '</label>' +
                        '<div class="col-md-3 kadeve" style="font-size: 14px;width:25.5%">' +
                        '<input id="toplamkdv' + ekdv + '"  class="form-control kdvtut" name="kdvtut[]" style="font-family: monospace, monospace;padding-right:55px; text-align: right;" value="0,00" readonly><span id="t2" style="padding-right:45px;text-align:right" class=" form-control-feedback right ico" >TL</span>' +
                        '</div>' +
                        '</div>';

                    $(ekDivsatir).appendTo(ekDiv);

                }else{
                    ekdv=$('#kdv'+eh).find(":selected").text();
                    ekdv=Number(ekdv);
                    var eeh=0;
                    kdves=0;
                    $('#siptable tr.sipsatirs').each(function()
                    {
                        eekdv=$('#kdv'+eeh).find(":selected").text();
                        eekdv=Number(eekdv);

                        if(eh > eeh)
                        {

                            if(ekdv==eekdv)
                            {
                                kdves++;

                            }
                        }

                        eeh++;
                    });
                    if(kdves==0)
                    {
                        var eekDiv = $('#kdvbel');
                        var eekDivsatir =
                            '<div class="kdv' + ekdv + ' kdvtutt">' +
                            '<label class="col-md-1"  style="font-size:14px;margin-left:55.5%;margin-top:7px;font-family:monospace,monospace">KDV  :</label>' +
                            '<label class="col-md-1 kdv" id="kdv' + ekdv + '" style="font-size: 14px;margin-top:7px;font-family: monospace, monospace" >% ' + ekdv + '</label>' +
                            '<div class="col-md-3 kadeve" style="font-size: 14px;width:25.5%">' +
                            '<input id="toplamkdv' + ekdv + '"  class="form-control kdvtut" name="kdvtut[]" style="font-family: monospace, monospace;padding-right:55px; text-align: right;" value="0,00" readonly><span id="t2" style="padding-right:45px;text-align:right" class=" form-control-feedback right ico" >TL</span>' +
                            '</div>' +
                            '</div>';

                        $(eekDivsatir).appendTo(eekDiv);
                    }
                }
                eh++;

                calculate(0);

            });

            // toplam tutar
            $("input[name^='tutar']").each(function(){
                esum += +$(this).val();
                // console.log(esum);
            });
            var esattoplam=Number(esum).toLocaleString('tr',{ minimumFractionDigits: 2 });
            $('#toplamm').val(esattoplam);


        }


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
        //console.log(kdv);




        if(dtur=""){
            dtur="TL";
        }else
        {
            dtur = $('#dbirim').find(":selected").text();
        }

        //  kdv = $('#kdv').find(":selected").text();
        // kdv değişti
        var h = ($('#siptable tr.sipsatirs').length)-1;

        //
        var  yoran=1;
        var yorann=0;


        //sayfa yüklendiğinde hesaplama
        // window.onload(myFunction(0));







        //sayfa yüklendiğinde hesaplama

        function calculate(elementID, satirsayii) {
            try {

                if(kdv==""|| kdv==null){
                    kdv=18;
                    kdv=Number(kdv);
                }else {
                    kdv = $('#kdv' + h).find(":selected").text();
                    kdv=Number(kdv);
                }


                //ilk element slinirse
                if(document.getElementById('miktar' + elementID)){

                    var myBox = $('#miktar' + elementID)[0].value;
                    //myBox=Number(myBox).toLocaleString('tr', {minimumFractionDigits: 2});
                    var myBoxx = $('#bfiyat' + elementID)[0].value;
                    myBox=Number(myBox);
                    myBoxx=Number(myBoxx);
                    //  console.log(elementID);
                    var tutaa = myBox * myBoxx;
                    var tutaaa = Number(tutaa).toLocaleString('tr', {minimumFractionDigits: 2});
                    $('#tutar' + elementID).val(tutaaa);
                    //console.log(myBox,myBoxx,tutaa,tutaaa);
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
                //console.log(sattoplam);
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
                    kdvora=Number(kdvora);
                    //console.log(kdvora);
                    kdvtutari=0;
                    if(kacsat > 1 && oran > 0){
                        orann=0;
                        $('#siptable tr.sipsatirs').each(function() {
                            kdvoran = $('#kdv' + orann).find(":selected").text();
                            kdvoran=Number(kdvoran);
                            //console.log(kdvoran);
                            if(kdvoran==kdvora){
                                kdvtutar  = $('#tutar' + orann).val();
                                kdvtutar=Number(kdvtutar);
                                kdvtutari += (kdvtutar * kdvora / 100);
                                kdvtutarii=kdvtutari.toFixed(2);
                                //console.log(kdvtutari);
                                kdvtutarii=Number(kdvtutarii).toLocaleString('tr',{ minimumFractionDigits: 2 });
                                $('#toplamkdv'+kdvora).val(kdvtutarii);

                                // $('#gtoplam').val(sattoplam);
                            }
                            orann++;
                        });

                    }else{
                        // tek satır olduğunda
                        kdvtutar  = $('#tutar' + oran).val();
                        kdvtutar=Number(kdvtutar);
                        kdvtutari = (kdvtutar * kdvora / 100);
                        //kdvtutarii=Number(kdvtutari).toLocaleString('tr',{ minimumFractionDigits: 2 });
                        kdvtutarii=kdvtutari.toFixed(2);
                        kdvtutarii=Number(kdvtutarii).toLocaleString('tr',{ minimumFractionDigits: 2 });
                        $('#toplamkdv'+kdvora).val(kdvtutarii);
                        // console.log(kdvtutar);
                        // $('#gtoplam').val(kdvtutariii);
                    }

                    oran++;
                });
                kdvtut=0;
                var kdvtuta;
                var ff;
                sattoplami=0;
                $("input[name^='kdvtut']").each(function() {
                    //var degmem=$(this).val();
                    ff=$(this).val().replace(/\./g,"");
                    fff=ff.replace(/\,/g,".");
                    fff=Number(fff);


                    fffi=fff.toFixed(2);
                    // ffff=Number(ff);
                    kdvtut += +fffi;
                    //console.log(fff);
                });
                //console.log(kdvtutari);
                //console.log(sum,kdvtut);
                sattoplami= Number(sum) + Number(kdvtut);
                var sattoplamii=Number(sattoplami).toLocaleString('tr',{ minimumFractionDigits: 2 });
                $('#gtoplam').val(sattoplamii);

                //  console.log(sum);
                //  console.log(kdvtut);

                // dsattoplam=sattoplam.replace(/\./g,",");
            } catch (e) {
                alert(e.error)
            }
        }

        function eski(ff){

            ff=Number(ff);

            eskii=ff;
            // myFunction(eskii);
        }


        function  myFunction (gggg,z,t){

            if(typeof z!=="undefined" ){
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

            esss=0;
            kdvtext=Number(kdvtext);
            $('#siptable tr.sipsatirs').each(function(){
                //kdvv=$("select[name^=kdv[]").find(":selected").text();
                kdvv=$('#kdv'+satsay).find(":selected").text();
                kdvv=Number(kdvv);

                if(kdvv==kdvtext){
                    n++;

                }
                if(kdvv==eskii){
                    esss++;

                }
                satsay++;

            });

            ess=0;


            if(isNaN(eskii)){

                n=2;
            }


            $('#siptable tr.sipsatirs').each(function() {
                if (z == null || z == "undefined") {

                    if (n < 2) {
                        //  n=1;

                        var kDiv = $('#kdvbel');
                        var kDivsatir =
                            '<div class="kdv' + kdvtext + ' kdvtutt">' +
                            '<label class="col-md-1"  style="font-size:14px;margin-left:55.5%;margin-top:7px;font-family:monospace,monospace">KDV  :</label>' +
                            '<label class="col-md-1 kdv" id="kdv' + kdvtext + '" style="font-size: 14px;margin-top:7px;font-family: monospace, monospace" >% ' + kdvtext + '</label>' +
                            '<div class="col-md-3 kadeve" style="font-size: 14px;width:25.5%">' +
                            '<input id="toplamkdv' + kdvtext + '"  class="form-control kdvtut" name="kdvtut[]" style="font-family: monospace, monospace;padding-right:55px; text-align: right;" value="0,00" readonly><span id="t2" style="padding-right:45px;text-align:right" class=" form-control-feedback right ico" >TL</span>' +
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
            maske =0;
            $('#siptable tr.sipsatirs').each(function() {

                $('#bfiyat'+maske).inputmask("myCurrency");
                $('#miktar'+maske).inputmask("myCurrency");
                $('#tutar'+maske).inputmask("tutar");



                maske++;
            });
            $('#toplamm').inputmask("tutar");

            // $('#firma_gir').DataTable({
            //     processing: true
            // });
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
                // $hh=$('#fissid'+i);

                //$('#fissid'+i).val(stok.id);
                //$("[id='fissid" + i + "']").val(stok.id);
                $re=$(this).closest("tr.sipsatirs").find(".fissid").val(stok.id);
                console.log($re);
                // console.log(stok.id);
            })
                .on('typeahead:asyncrequest', function() {
                    $('.Typeahead-spinner').show();
                })
                .on('typeahead:asynccancel typeahead:asyncreceive', function() {
                    $('.Typeahead-spinner').hide();

                });
            //incele
            $('#formkaydet').on('click', '.add', function() {
                var sad=$('#stokturad').val();


                if (sad=="" || sad==null || fisfid=="" || fisifid==null) {


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
                            //console.log(data);
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
//önemliiiii?????**********************************************************************************************************************
            //   $(function() {
            var scntDiv = $('#siptable');
            var i = $('#siptable tr.sipsatirs').length;
            // var i=1;

            // satır ekle
            $(document).on('click','#satirekle', function(ibo) {
                $.ajax({

                    dataType: 'JSON',
                    type: 'post',
                    url: '/sipfissatekle',
                    data: {
                        '_token': $('input[name=csrf-token]').val(),
                        'numara': $('#sfisno').val(),
                        'sipfisid':$('#sipfisid').val()


                    },
                    success: function (data) {
                        //console.log(data);
                                {{--data-fissatid="{{$sipfissatt->sipfisatirid}}"--}}
                        var selectmenu ='<td ><div class="col-lg-12 kutupad"><div class="form-group kutupad "><input type="hidden" name="sipfissatirid[]" id="sipfissatirid{{$i}}" class="sipfissatirid" value="'+data+'"><input type="hidden" class="fissid" name="fissid[]" id="fissid'+i+'" data-fissatid="'+data+'" value=""  class="fissid" ><input type="text" name="stokad[]" id="sss"  autocomplete="off" class="form-control has-feedback-left" style="padding-left:65px;"><span class="fa fa-search form-control-feedback left ico"></span></div></div><td><div class="col-md-12 kutupad"><input type="text" name="miktar[]" id="miktar'+i+'" data-inputmask="\'alias\': \'myCurrency\'" oninput="calculate('+i+')" autocomplete="off" class="form-control miktar" style="font-family: monospace, monospace;"></div></td><td><div class="col-lg-12 kutupad"><select data-toggle="dropdown" id="birim" class="form-control birim" name="birim[]" aria-expanded="false" ><span class="caret"></span>@foreach($birim as $key => $bad)<option  value="{{ $key }}">{{ $bad }}</option>@endforeach</select></div></td><td><div class="col-md-12 kutupad"><input type="text" name="bfiyat[]" id="bfiyat'+i+'" data-inputmask="\'alias\': \'myCurrency\'" oninput="calculate('+i+')"  value="" autocomplete="off" class="form-control bfiyat" style="padding-right:55px;text-align:right;font-family: monospace, monospace;" ><span id="t1" class=" form-control-feedback right ico">'+dtur+'</span></div>' +
                            '<td class="col-md-1"><div class="col-lg-12 kutupad">'+
                            '<select data-toggle="dropdown" id="kdv'+i+'" class="form-control kkdv" onchange="myFunction('+i+')" onclick="eski($(this).find(\':selected\').text())" name="kdv[]"><span class="caret"></span>@foreach($vergim as $key => $vor)'+
                            '<option value="{{ $key }}">{{ $vor }}</option>@endforeach</select></div></td>'+
                            '<td><div class="col-md-12 kutupad"><input type="text" name="tutar[]" id="tutar'+i+'" data-inputmask="\'alias\': \'tutar\'" value="0,00" autocomplete="off" class="form-control tutar" style="padding-right:55px;text-align:right;font-family: monospace, monospace;"><span id="t1" class=" form-control-feedback right ico">'+dtur+'</span></div></td><td><a class="btn btn-default  "  href="#" id="satirsil" data-fissatid="'+data+'" aria-label="Settings"><i class="fa fa-times" aria-hidden="true"></i></a></td>'+
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
                            console.log($re);
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
                        var  z=null;
                        myFunction (18, z, 1);

                        return false;



                        // satır ekle
                    },
                    error: function(data){
                        //console.log(data);
                    }
                });
            });


            $(document).on('click','#satirsil', function(e) {
                e.preventDefault();
                if(i>1){


                    var $trthis=$(this);
                    var $tr = $(this).closest('tr');
                    var $trp = $(this).parents('tr');
                    var sipsatsilid = $(this).attr('data-fissatid');
                    //console.log(sipsatsilid,"sdf");

                    var sipfisid=$('#sipfisid').val();
                    // var sattutar=$tr.find(".tutar").val();
                    //console.log(sattutar);
                    alertify.confirm(
                        '<h1><strong>Uyarı...!!!</strong></h1>',
                        '<h2>Satır Silinecek !</h2>',
                        function(){

                            $.ajax({
                                dataType: 'JSON',
                                type: 'delete',
                                url: '/sipfissatsil/'+ sipsatsilid,
                                data: {
                                    '_token': $('input[name=csrf-token]').val(),
                                    //'gtoplam':gtoplam,
                                    'sipfisid':sipfisid,

                                },
                                success: function (data) {


                                    // önemli
                                    if( i > 1 ) {

                                        re=$tr.find(".kkdv :selected").text();
                                        re=Number(re);

                                        z=re;

                                        $trp.remove();
                                        console.log(i);
                                        i--;
                                        var fields = $('#siptable tr.sipsatirs .fissid');
                                        var counts = 0;
                                        $.each(fields, function() {

                                            $trthis.attr('id','fissid' + counts);

                                            counts++;
                                        });

                                        //yeniden id isimlendir
                                        var fields = $('#siptable tr.sipsatirs .miktar');
                                        var counts = 0;
                                        $.each(fields, function() {
                                            // $('#siptable tr.sipsatirs').each(function() {

                                            $trthis.attr('id','miktar' + counts);
                                            $trthis.attr('oninput','calculate('+counts+')' );
                                            counts++;
                                        });

                                        var fields = $('#siptable tr.sipsatirs .birim');
                                        var counts = 0;
                                        $.each(fields, function() {
                                            // $('#siptable tr.sipsatirs').each(function() {

                                            $trthis.attr('id','birim' + counts);
                                            counts++;
                                        });

                                        var fields = $('#siptable tr.sipsatirs .bfiyat');
                                        var counts = 0;
                                        $.each(fields, function() {
                                            // $('#siptable tr.sipsatirs').each(function() {

                                            $trthis.attr('id','bfiyat' + counts);
                                            $trthis.attr('oninput','calculate('+counts+')' );
                                            counts++;
                                        });

                                        var fields = $('#siptable tr.sipsatirs .kkdv');
                                        var count = 0;
                                        $.each(fields, function() {
                                            // $('#siptable tr.sipsatirs').each(function() {

                                            $trthis.attr('id','kdv' + count);
                                            $trthis.attr('onchange','myFunction('+count+')');
                                            count++;
                                        });



                                        var field = $('#siptable tr.sipsatirs .tutar');
                                        var counts = 0;

                                        $.each(field, function() {
                                            // $('#siptable tr.sipsatirs').each(function() {
                                            $trthis.attr('id','miktar' + counts);

                                            $trthis.attr('id','tutar' + counts);
                                            counts++;

                                        });
                                        //yeniden id isimlendir
                                    }

                                    calculate(0);
                                    myFunction (re,z);
                                    // gtoplam
                                    var gtoplam=$('#gtoplam').val();
                                    console.log(gtoplam);
                                    $.ajax({
                                        dataType: 'JSON',
                                        type: 'put',
                                        url: '/siparisfisi/gtoplam',
                                        data: {
                                            '_token': $('input[name=csrf-token]').val(),
                                            'gtoplam':gtoplam,
                                            'sipfisid':sipfisid,

                                        },
                                        // success: function (data) {},
                                        // error:function (data) {},
                                    });


                                    // gtoplam
                                    alertify.success('İşlem Tamamlandı...');


                                    return false;
                                    //önemli
                                },
                                error:function (data) {
                                    console.log(data);
                                    new PNotify({
                                        title: 'Uyarı!...',
                                        text: 'İşlem Hatası...',
                                        type: 'error',
                                        // type: 'notice',
                                        styling: 'bootstrap3'
                                    });
                                }

                            });

                        },
                        function(){ alertify.error('İptal Edildi')});
                    // swal({
                    //             title: "Eminmisiniz?",
                    //             text: "Satır Silinecek!...",
                    //
                    //              buttons: ["HAYIR!", "EVET!"],
                    //
                    //     }).then((silsipfissat) => {
                    //
                    //             if (silsipfissat) {
                    //                 $.ajax({
                    //
                    //                     dataType: 'JSON',
                    //                     type: 'delete',
                    //                     url: '/sipfissatsil/'+ sipsatsilid,
                    //                     data: {
                    //                         '_token': $('input[name=csrf-token]').val(),
                    //                         // 'sipfissatid': mcep,
                    //                         // 'sipfisid':aa
                    //
                    //
                    //                                 },
                    //                         success: function (data) {
                    //                             console.log($(this));
                    //
                    //             // önemli
                    //                         if( i > 1 ) {
                    //
                    //                         re=$tr.find(".kkdv :selected").text();
                    //                         re=Number(re);
                    //
                    //                         z=re;
                    //
                    //                             $trp.remove();
                    //                             console.log(i);
                    //                             i--;
                    //                             var fields = $('#siptable tr.sipsatirs .fissid');
                    //                             var counts = 0;
                    //                             $.each(fields, function() {
                    //
                    //                                 $trthis.attr('id','fissid' + counts);
                    //
                    //                                 counts++;
                    //                             });
                    //
                    //                             //yeniden id isimlendir
                    //                             var fields = $('#siptable tr.sipsatirs .miktar');
                    //                             var counts = 0;
                    //                             $.each(fields, function() {
                    //                                 // $('#siptable tr.sipsatirs').each(function() {
                    //
                    //                                 $trthis.attr('id','miktar' + counts);
                    //                                 $trthis.attr('oninput','calculate('+counts+')' );
                    //                                 counts++;
                    //                             });
                    //
                    //                             var fields = $('#siptable tr.sipsatirs .birim');
                    //                             var counts = 0;
                    //                             $.each(fields, function() {
                    //                                 // $('#siptable tr.sipsatirs').each(function() {
                    //
                    //                                 $trthis.attr('id','birim' + counts);
                    //                                 counts++;
                    //                             });
                    //
                    //                             var fields = $('#siptable tr.sipsatirs .bfiyat');
                    //                             var counts = 0;
                    //                             $.each(fields, function() {
                    //                                 // $('#siptable tr.sipsatirs').each(function() {
                    //
                    //                                 $trthis.attr('id','bfiyat' + counts);
                    //                                 $trthis.attr('oninput','calculate('+counts+')' );
                    //                                 counts++;
                    //                             });
                    //
                    //                             var fields = $('#siptable tr.sipsatirs .kkdv');
                    //                             var count = 0;
                    //                             $.each(fields, function() {
                    //                                 // $('#siptable tr.sipsatirs').each(function() {
                    //
                    //                                 $trthis.attr('id','kdv' + count);
                    //                                 $trthis.attr('onchange','myFunction('+count+')');
                    //                                 count++;
                    //                             });
                    //
                    //
                    //
                    //                             var field = $('#siptable tr.sipsatirs .tutar');
                    //                             var counts = 0;
                    //
                    //                             $.each(field, function() {
                    //                                 // $('#siptable tr.sipsatirs').each(function() {
                    //                                 $trthis.attr('id','miktar' + counts);
                    //
                    //                                 $trthis.attr('id','tutar' + counts);
                    //                                 counts++;
                    //
                    //                             });
                    //                         //yeniden id isimlendir
                    //                             }
                    //
                    //         calculate(0);
                    //         myFunction (re,z);
                    //
                    //         return false;
                    //                 //önemli
                    //         },
                    //                         error:function (data) {
                    //              console.log(data);
                    //             new PNotify({
                    //                 title: 'Uyarı!...',
                    //                 text: 'İşlem Hatası...',
                    //                 type: 'error',
                    //                 // type: 'notice',
                    //                 styling: 'bootstrap3'
                    //             });
                    //         }
                    //
                    //                 });
                    //
                    //
                    //             }else
                    //             {
                    //                 return false;
                    //             }
                    //     })
                }else{

                    new PNotify({
                        title: 'Uyarı!...',
                        text: 'İşlem Hatası...',
                        type: 'error',
                        // type: 'notice',
                        styling: 'bootstrap3'
                    });
                }
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
            $("#tarih").flatpickr(
                {
                    //enableTime:true,
                    altInput: true,
                    altFormat: "d-m-Y",
                    dateFormat: "Y-m-d",
                    weekNumbers: true,
                    locale:'tr',
                    allowInput: true,
                    //defaultDate: "today"
                }

            );
            // $('#tarih').daterangepicker({
            //     "singleDatePicker": true,
            //     "maxDate": "31-12-2050",
            //     singleClasses: "tarih",
            //     "showDropdowns": true,
            //     "showWeekNumbers": true,
            //     ranges: {
            //         'Bugün': [moment(), moment()],
            //         'Dün': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            //         'Son 7 gün': [moment().subtract(6, 'days'), moment()],
            //         'Son 30 gün': [moment().subtract(29, 'days'), moment()],
            //         'Bu ay': [moment().startOf('month'), moment().endOf('month')],
            //         'Geçen ay': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            //     },
            //
            //     "alwaysShowCalendars": true,
            //     //                "dateLimit": {
            //     //                    "days": 7
            //     //                },
            //     "locale": {
            //         "direction": "ltr",
            //         "format": "DD-MM-YYYY",
            //         "separator": "/",
            //         "applyLabel": "Uygula",
            //         "cancelLabel": "Kapat",
            //         "fromLabel": "From",
            //         "toLabel": "To",
            //         "customRangeLabel": "Seç",
            //         "daysOfWeek": [
            //             "Pt",
            //             "Sl",
            //             "Çr",
            //             "Pr",
            //             "Cm",
            //             "Ct",
            //             "Pz"
            //         ],
            //         "monthNames": [
            //             "Ocak",
            //             "Şubat",
            //             "Mart",
            //             "Nisan",
            //             "Mayıs",
            //             "Haziran",
            //             "Temmuz",
            //             "Ağustos",
            //             "Eylül",
            //             "Ekim",
            //             "Kasım",
            //             "Aralık"
            //         ],
            //         "firstDay": 0
            //     }
            //
            // })

        });

    </script>

@endsection