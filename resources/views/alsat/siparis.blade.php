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
                            <h2>{{$sipfisnoadi}} Sipariş Fişi </h2>
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
                                <form  action="{{action('fisController@sipfiskaydet')}}" class="form-horizontal form-label-left" name="form1" method="POST"  novalidate>
                                    {{csrf_field()}}



                                    <br />

                                    {{ csrf_field() }}
                                    <div class="x_panel">
                                        <div class="col-md-6">
                                            <div class="col-md-4">



                                                <!-- {{--textbox başlangıç--}} -->

                                            <div class="form-group item">
                                                <label for="tar">Tarih</label>
                                                <input type="text" name="tar" id="tarih" class="form-control has-feedback-left" data-inputmask="'mask': '99-99-9999'"  aria-describedby="inputSuccess2Status2">
                                                <span class="fa fa-calendar-o form-control-feedback left"  aria-hidden="true"></span>
                                                <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                                            </div> <!-- /.form-group -->

                                            <div class="form-group">
                                                <label for="fisno">Fiş No</label>
                                                    <input type="text" name="sfisno" id="sfisno" value="{{$numara}}" class="form-control" >
                                            </div> <!-- /.form-group -->

                                                <!-- {{--<div class="form-group">--}}

                                                    {{--<label for="tax_no" name="lbanka">Fis Turu</label>--}}
                                                    {{--<input type="hidden" name="fisturu" id="fisturuid" value="1" class="form-control">--}}
                                                    {{--<select data-toggle="dropdown" id="fisturu" class="form-control"  aria-expanded="false"  ><span class="caret"></span>--}}
                                                        {{--<option >Seciniz</option>--}}
                                                        {{--@foreach($fistur as $key => $fisturuad)--}}
                                                            {{--<option  value="{{ $key }}">{{ $fisturuad }}</option>--}}
                                                        {{--@endforeach--}}
                                                    {{--</select>--}}

                                                {{--</div> <!-- /.form-group--}}
                                                {{--<div class="row">--}}
                                                    {{--<div class="col-xs-6 col-md-6">--}}

                                                    {{--</div> <!-- /.col --}}
                                                    {{--<div class="col-xs-6 col-md-6">--}}
                                                    {{--</div> <!-- /.col --}}

                                                {{--</div> <!-- /.row --}} -->
                                        </div> <!-- /.col-md-6 -->
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="address">Hesap</label>
                                                            <input type="hidden" name="fisfid" id="fisfid" value="" class="form-control" >
                                                            <input type="text" name="fisfad" id="fisfad" value="" autocomplete="off" class="form-control has-feedback-left typeahead buyuk">
                                                <img class="Typeahead-spinner" src="../images/wait.gif">
                                                <span class="fa fa-search form-control-feedback left" ></span>
                                            </div> <!-- /.form-group -->
                                                    </div>
                                                </div>
                                            <div class="row">
                                                    <div class="col-lg-6">
                                                    <div class="form-group">
                                                            <label for="district">Olay</label>
                                                            <input type="hidden" name="olayid" id="olayid" value="1" class="form-control">
                                                            <select data-toggle="dropdown" id="olay" class="form-control"><span class="caret"></span>
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
                                                        <tr class="sipsatirs">
                                                            <td class="col-md-4">
                                                                <div class="col-lg-12 kutupad">
                                                                    <div class="form-group kutupad">
                                                                        <input type="hidden" name="fissid[]" id="fissid" value="">
                                                                        <input type="text" name="stokad[]" id="stokad"  autocomplete="off" class="form-control has-feedback-left buyuk" style="padding-left:65px;">
                                                                        <img class="Typeahead-spinners" src="../images/wait.gif">
                                                                        <span class="fa fa-search form-control-feedback left ico"   ></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="col-md-1">
                                                                <div class="col-md-12 kutupad">
                                                                    <input type="text" name="miktar[]" id="miktar0"  autocomplete="off" class="form-control" oninput="calculate(0)" style="font-family: monospace, monospace;" >
                                                                </div>
                                                            </td>
                                                            <td class="col-md-1">
                                                                <div class="col-lg-12 kutupad">
                                                                    <select data-toggle="dropdown" id="birim" class="form-control" name="birim[]" aria-expanded="false"  ><span class="caret"></span>
                                                                        @foreach($birim as $key => $bad)
                                                                            <option  value="{{ $key }}">{{ $bad }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </td>
                                                            <td class="col-md-2">
                                                                <div class="col-md-12 kutupad">
                                                                    <input type="text" name="bfiyat[]" id="bfiyat0" value="" autocomplete="off" class="form-control" style="padding-right:55.6px;text-align:right;font-family: monospace, monospace;" oninput="calculate(0)" ><span id="t1" class=" form-control-feedback right ico">TL</span>
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
                                                                    <input type="text" name="tutar[]" id="tutar0" value="0,00" autocomplete="off" class="form-control" style="padding-right:55px;text-align:right;font-family: monospace, monospace"  ><span id="t2" class=" form-control-feedback right ico" >TL</span>
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
                                                <div class="col-lg-12" style="padding-left: 0px;">
                                                    <a class="btn btn-default"  id="satirekle" >Satır Ekle</a>
                                                </div>





                                                <div style="width:100%;height:90px">
                                                    <!-- {{--<div class="row" style="float:right">--}} -->
                                                    <label class="col-md-2" style="font-size: 14px;margin-left:55.5%;margin-top:7px;font-family: monospace, monospace">Ara Toplam :</label>
                                                    <!-- {{--//  <input for="toplam" id="toplam">--}} -->
                                                    <div class="col-md-3" style="font-size: 14px;width:25.5%">
                                                        <input id="toplamm" disabled="disabled" class="form-control" style="font-family: monospace, monospace;padding-right:55px" value="0,00" ><span id="t2" style="padding-right:45px;text-align:right" class=" form-control-feedback right ico" >TL</span>
                                                    </div>
                                                    <!-- {{--</div>--}} -->
                                                </div>
                                                <div style="width:100%;height:90px;" id="kdvbel" class="kdvbel">
                                                    <div class="kdv18">
                                                    <!-- {{--<div class="row" style="float:right">--}} -->
                                                    <label class="col-md-1"  style="font-size: 14px;margin-left:55.5%;margin-top:7px;font-family: monospace, monospace">KDV  :</label>
                                                    <label class="col-md-1 kdv" id="kdv0" style="font-size: 14px;margin-top:7px;font-family: monospace, monospace" >% 18</label>
                                                    <!-- {{--//  <input for="toplam" id="toplam">--}} -->
                                                    <div class="col-md-3 kadeve" style="font-size: 14px;width:25.5%">
                                                        <input id="toplamkdv18" disabled="disabled" class="form-control" style="font-family: monospace, monospace;padding-right:55px; text-align: right;" value="0,00" ><span id="t2" style="padding-right:45px;text-align:right" class=" form-control-feedback right ico" >TL</span>
                                                    </div>
                                                    <!-- {{--</div>--}} -->
                                                </div>
                                                </div>

                                                <div style="width:100%;height:90px">
                                                    <!-- {{--<div class="row" style="float:right">--}} -->
                                                    <label class="col-md-2" style="font-size: 14px;margin-left:55.5%;margin-top:7px;font-family: monospace, monospace">Toplam :</label>
                                                    <!-- {{--//  <input for="toplam" id="toplam">--}} -->
                                                    <div class="col-md-3" style="font-size: 14px;width:25.5%">
                                                        <input id="gtoplam" disabled="disabled" class="form-control" style="font-family: monospace, monospace;padding-right:55px; text-align: right;" value="0,00" ><span id="t2" style="padding-right:45px;text-align:right" class=" form-control-feedback right ico" >TL</span>
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
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlibaaaa3333</a>
        </div>
        <div class="clearfix"></div>
    </footer>



    <div class="modal fade" tabindex="-1" role="dialog" id="firmam" aria-labelledby="myModalLabel" aria-hidden="true">

            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel">Cari Ekle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="responsive-table">
                <table class="table table-striped table-bordered dt-responsive nowrap" style="width:100%" id="firma_gir">
                    <thead>
                    <tr>
                        <th ></th>
                        <th >Hesap Adı </th>
                        <th >Adres </th>
                        {{--<th>Düzenle</th>--}}
                        <th>Sil</th>

                        <!-- <th class="bulk-actions" colspan="7">
                             <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                         </th> -->
                    </tr>

                    </thead>
                    <tbody>
                        @foreach($stok as $spost )
                        @endforeach
                    @foreach($firma as $post )
                        <tr>
                            <td>{{$post->tar}}</td>
                                <!-- {{--<td>{{ date('d-m-Y',strtotime($post->created_at)) }}</td>--}} -->
                            <td ><a href="Cari/Edit/{{$post->fid}}"> {{$post->cunvan}}</a></td>
                            <td>{{$post->cadres1}}</td>
                                <!-- {{--<td>--}} -->
                                <!-- {{--<a href="Cari/Edit/fid={{$post->fid}}" >--}} -->
                                <!-- {{--{{$post->cunvan}} --}}{{--<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>--}} -->
                                <!-- {{--</a>--}} -->
                                <!-- {{--</td>--}} -->
                            <td><a href="Cari/sil/{{$post->fid}}"  aria-label="Delete"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a></td>
                                <!-- {{--<a href="{!! route('/cari, $id')!!}" class="btn btn-danger">Delete</a>--}} -->
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                    </div>

                </div>
                <br/><br/>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>


        </div>
    </div>



@endsection


@section('content_script')

    <link href="{{ asset("css/site.css") }}" rel="stylesheet">

    <script src="{{ asset("js/typeahead.js") }}"></script>

    <!-- {{--<script src="{{ asset("js/bootstrap3-typhead.js") }}"></script>--}} -->
    <!-- {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>--}} -->
    <script type="text/javascript">
eskik=18;
f=18;
        $("tr.sipsatirs input").keyup(function(event) {
            if (event.keyCode === 13) {

                $("#satirekle").click();
            }
        });
        kdv=$('#kdv').find(":selected").text();





        if(dtur=""){
            dtur="TL";
        }
        {
            dtur = $('#dbirim').find(":selected").text();
        }

      //  kdv = $('#kdv').find(":selected").text();
// kdv değişti

        var h = ($('#siptable tr.sipsatirs').length)-1;

        function calculate(elementID, satirsayii) {
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
            //    console.log(sum);
            });
            var sattoplam=Number(sum).toLocaleString('tr',{ minimumFractionDigits: 2 });

            $('#toplamm').val(sattoplam);
            dsattoplam=sattoplam.replace(/\./g,",");

            //kdv eklenecek

             var kdvsattoplam= sum*kdv/100;
             var kdvsattoplamm =Number(kdvsattoplam).toLocaleString('tr',{ minimumFractionDigits: 2 });
             $('#toplamkdv').val(kdvsattoplamm);


            // var geneltoplam=sum*(1+(kdv/100));
            // var geneltoplamm =Number(geneltoplam).toLocaleString('tr',{ minimumFractionDigits: 2 });
            // $('#gtoplam').val(geneltoplamm);

        }

        function eski(ff){

            eskii=ff;
           // console.log(eskik);
        }
        function  myFunction (gggg,z,t){

            //var h = ($('#siptable tr.sipsatirs').length)-1;
          //  var ilksat=$('#kdv0').find(":selected").text();
              //  if(gggg==0){satsay=1;}else{ satsay =0;}
            //if(i==null){i=1;}

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
                    if(kdvv==kdvtext)
                         {
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
                         '<div class="kdv' + kdvtext + '">' +
                         '<label class="col-md-1"  style="font-size:14px;margin-left:55.5%;margin-top:7px;font-family:monospace,monospace">KDV  :</label>' +
                         '<label class="col-md-1 kdv" id="kdv' + kdvtext + '" style="font-size: 14px;margin-top:7px;font-family: monospace, monospace" >% ' + kdvtext + '</label>' +
                         '<div class="col-md-3 kadeve" style="font-size: 14px;width:25.5%">' +
                         '<input id="toplamkdv' + kdvtext + '" disabled="disabled" class="form-control" style="font-family: monospace, monospace;padding-right:55px; text-align: right;" value="0,00" ><span id="t2" style="padding-right:45px;text-align:right" class=" form-control-feedback right ico" >TL</span>' +
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

        $('#firma_gir').DataTable({
            processing: true
        });
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
                    minLength: 2,
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
                console.log(data.id);
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
                    minLength: 2,
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
                $("#fissid").val(stok.id);
                console.log(stok.id);
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
//önemliiiii?????**********************************************************************************************************************
         //   $(function() {
                var scntDiv = $('#siptable');
                var i = $('#siptable tr.sipsatirs').length;
           // var i=1;
                $(document).on('click','#satirekle', function(ibo) {
                    var selectmenu ='<td ><div class="col-lg-12 kutupad"><div class="form-group kutupad"><input type="hidden" name="fissid[]" id="'+i+'" value="" ><input type="text" name="stokad[]" id="sss"  autocomplete="off" class="form-control has-feedback-left" style="padding-left:65px;"><img class="Typeahead-spinners" src="../images/wait.gif"><span class="fa fa-search form-control-feedback left ico"></span></div></div><td><div class="col-md-12 kutupad"><input type="text" name="miktar[]" id="miktar'+i+'" data-inputmask="\'alias\': \'myCurrency\'" oninput="calculate('+i+')" autocomplete="off" class="form-control" style="font-family: monospace, monospace;"></div></td><td><div class="col-lg-12 kutupad"><select data-toggle="dropdown" id="birim" class="form-control" name="birim[]" aria-expanded="false" ><span class="caret"></span>@foreach($birim as $key => $bad)<option  value="{{ $key }}">{{ $bad }}</option>@endforeach</select></div></td><td><div class="col-md-12 kutupad"><input type="text" name="bfiyat[]" id="bfiyat'+i+'" data-inputmask="\'alias\': \'myCurrency\'" oninput="calculate('+i+')"  value="" autocomplete="off" class="form-control" style="padding-right:55px;text-align:right;font-family: monospace, monospace;" ><span id="t1" class=" form-control-feedback right ico">'+dtur+'</span></div>' +
                        '<td class="col-md-1"><div class="col-lg-12 kutupad">'+
                        '<select data-toggle="dropdown" id="kdv'+i+'" class="form-control kkdv" onchange="myFunction('+i+')" onclick="eski($(this).find(\':selected\').text())" name="kdv[]"><span class="caret"></span>@foreach($vergim as $key => $vor)'+
                        '<option value="{{ $key }}">{{ $vor }}</option>@endforeach</select></div></td>'+
                        '<td><div class="col-md-12 kutupad"><input type="text" name="tutar[]" id="tutar'+i+'" data-inputmask="\'alias\': \'tutar\'" value="0,00" autocomplete="off" class="form-control tutar" style="padding-right:55px;text-align:right;font-family: monospace, monospace;"><span id="t1" class=" form-control-feedback right ico">'+dtur+'</span></div></td><td><a class="btn btn-default  "  href="#" id="satirsil" data-sil='+i+' aria-label="Settings"><i class="fa fa-times" aria-hidden="true"></i></a></td>'+
                        '</td>';
                    $('<tr  class="sipsatirs">'+selectmenu+'</tr>').appendTo(scntDiv).find('#sss').typeahead({
                            hint: false,
                            minLength: 2,
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

                        $("#"+i).val(stok.id);
                        console.log(stok.id);
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
                    $("[id='bfiyat" + i + "'],[id='miktar" + i + "'],[id='tutar" + i + "']").inputmask();


                    i++;
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

                                //yeniden id isimlendir
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

            })

    });
    </script>
@endsection