@extends('layouts.blank')
@push('stylesheets')
@endpush
@section('main_container')
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <link href="{{ asset("css/jquery-ui.min.css") }}" rel="stylesheet">

        <link href="{{ asset("css/site.css") }}" rel="stylesheet">
        <script src="{{ asset("js/ruler.js") }}"></script>

        <link href="{{ asset("css/ruler.css") }}" rel="stylesheet">



        <!-- DataTables -->
        <!-- Bootstrap JavaScript -->
        <!-- App scripts -->

        <!-- Bootstrap CSS -->

        <script type="text/javascript">

//                $( "#droppable" ).droppable({
//                    drop: function( event, ui ) {
//                        $( this )
//                            .addClass( "ui-state-highlight" )
//                            .find( "p id='yerim'" )
//                            .html( "Dropped!" );
//                    }
//                });


                //Flat red color scheme for iCheck
                // $('input[type="checkbox"].flat-blue, input[type="radio"].flat-blue').iCheck({




        </script>
        <style>

            .fat-alan-kutu { position:absolute !important; background-color: #eaeaea; border:1px solid #666666; cursor:move; opacity: 0.7; }
            .fat-alan-kutu span { padding:5px; line-height:1.1em; }
            .fat-alan-kutu i { cursor:pointer; color:#aaa; font-size:11px !important; }
            .secim { border: 3px solid #F00; }

            .fat-alan-kutu:hover, .fat-alan-kutu:focus {
                background: #e1e1e1;
                border: 1px solid #22C39E;
                padding-top:0;
            }
            .rc-handle-container {
                position: relative;
            }
            .rc-handle {
                position: absolute;
                width: 7px;
                cursor: ew-resize;
                margin-left: -3px;
                z-index: 2;
            }
            table.rc-table-resizing {
                cursor: ew-resize;
            }
            table.rc-table-resizing thead,
            table.rc-table-resizing thead > th,
            table.rc-table-resizing thead > th > a {
                cursor: ew-resize;
            }
        </style>
    </head>
    <div class="right_col" style="height:1400px;">
        <input type="hidden" id="tasarim" name="tasarim" value="" title="" class="form-control" />
        <input type="hidden" id="tasarimtbl" name="tasarimtbl" value="" title="" class="form-control" />

                <div class="col-md-8" >


                            <div class="clearfix"></div>
                                    {{csrf_field()}}

                                    <div class="form-group" id="megaContainer" style="padding: 0mm; z-index: -1; width: 210mm; height: 297mm;">
                                        <div  id="page" style="width: 210mm; height: 297mm; border: 1px solid gray; background-color: rgb(255, 255, 255);">
                                            <div  id="divContainer" class="dropp" style="z-index: 0; position: relative; padding: 0px; margin: 0px; width: 210mm; height: 297mm; border: 0px solid black;">
                                                @isset($sablone)
                                                    <div id="veri" data-veri="1" ></div>
                                                    @foreach($sablone as $sablon )
                                                        <div  class="fat-alan-kutu"   id="{{$sablon->id}}" adi="{{$sablon->adi}}" style="top:{{$sablon->top}}px; left: {{$sablon->left}}px; width:{{$sablon->width}}px; height:{{$sablon->height}}px;font-family:Arial; font-size:9px;text-align:{{$sablon->stylealign}};">{{$sablon->adi}}<span></span><i class="fat-alan-kapat  fa fa-close" style="float:right;"></i></div>

                                                    @endforeach
                                                    @endisset

                                               @if   (empty($sablonet))

                                                        <div id="tbldongu" class="fat-alan-stok" style="cursor: move; position: absolute; overflow: hidden; top: 444px; left: 30px; width: 750px; height: 300px; border: 1px solid rgb(0, 0, 0);right: auto; bottom: auto; " >


@else
                                                                @foreach($sablonet as $sablont )
                                                                <div id="{{$sablont->id}}" class="fat-alan-stok" style="cursor: move; position: absolute; overflow: hidden; top:{{$sablont->ttop}}px; left:{{$sablont->tleft}}px; width:{{$sablont->twidth}}px; height:{{$sablont->theight}}px; border: 1px solid rgb(0, 0, 0);right: auto; bottom: auto; " >
{{--// ürün satır yazdırma alanı--}}@endforeach
@endif





                                                            <table class="table table-bordered">                                                                                                         <thead>
                                                                <tr>
                                                                    <th data-resizable-column-id="#">First Name</th>
                                                                    <th data-resizable-column-id="first_name" data-noresize></th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>


                                                                @isset($sblid)
                                                                @foreach($sblid as $sbl)
                                                               <tr>
                                                                   <td ></td>
                                                                 <td>  <div class="" id="sad" >{{$sbl->sbladid}}</div></td>
                                                               </tr>
                                                                @endforeach
                                                                    @endisset
                                                                <tr>
                                                                    <td ></td>
                                                                    <td>  <div class="" id="sad" ></div></td>
                                                                </tr>
                                                               </tbody>
                                                           </table>




                                                                </div>

                                            </div>
                                       </div>

                                   </div>



                                   <div class="clearfix"></div>


                   </div>



               <div class="col-md-4" >
                   <div class="x_panel">
                       <div class="x_title">
                           <h2>Dizayn Tablosu </h2>
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

                           <div class="x_content" >
                                </br>
                               <div class="">
                                   <label for="Tasarım Adı">Tasarım Adı</label>
                                   <input type="hidden" id="sblsonid" name="sblsonid" sonid="{{$sonnumara}}"/>
                                   <input class="form-control" id="sblad" name="sblad" value="@isset($sablonad){{$sablonad->sblad }}@endisset">
                                   {{csrf_field()}}

                               </div>
                               </br>


                                   <div class="form-group">

                                       {{--<label for="tax_no"  name="stoktur">Şablon Türü</label>--}}
                                       {{--<select data-toggle="dropdown" id="stoktur" class="form-control" name="stoktur" aria-expanded="false"  ><span class="caret"></span>--}}
                                           {{--<option >Seçiniz</option>--}}
                                           {{--@foreach($sblturu as $key => $sblturuad)--}}
                                               {{--<option  value="{{ $key }}">{{ $sblturuad }}</option>--}}
                                           {{--@endforeach--}}
                                       {{--</select>--}}





                                       <label for="tax_no" name="ldoviz">Tasarım Türü</label>

                                       <select data-toggle="dropdown" id="sblturu" class="form-control" name="sblturu" aria-expanded="false"  ><span class="caret"></span>


                                           {{--@foreach($sblturu as $sbltur)--}}

                                               {{--<option value="{{ $sbltur->sblturuid }}" {{ $secsblturu == $sbltur->sblturuid ? 'selected=="selected"' : '' }}>{{ $sbltur->sblturuad }}</option>--}}
                                           {{--@endforeach--}}
                                           <option SELECTED >Seçiniz</option>


                                       @foreach ($sblturu as $key)
                                           @if ($key->sblturuid == $secsblturu)
                                               <option selected value="{{ $key->sblturuid }}">{{ $key->sblturuad }}</option>
                                           @else
                                               <option value="{{ $key->sblturuid }}">{{ $key->sblturuad }}</option>
                                           @endif
                                       @endforeach
                                       </select>
                                   </div>


                               </br>


                               <button type="button" id="fatura_kaydet" class="btn btn-primary dropdown-toggle btn-block " aria-expanded="false"><i class="fa fa-save"> </i> <b>TASARIMI KAYDET</b> </button>
                                           <!-- start accordion -->
                                           <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">
                                               <div class="panel">
                                                   <a class="panel-heading collapsed" role="tab" id="headingOne1" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="false" aria-controls="collapseOne">
                                                       <h4 class="panel-title">Sayfa Yapısı</h4>
                                                   </a>
                                                   <div id="collapseOne1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                                                       <div class="panel-body">

                                                           <div class="form-group ">
                                                               <label for="tax_no"  name="stoktur">Sayfa</label>
                                                               <select  id="ddlPageType" class="form-control" name="ddlPageType" >
                                                                   <option  value="1">A4</option>
                                                                   <option  value="2">A5</option>
                                                                   <option  value="3">Diğer</option>
                                                                   //  var urlmenu = document.getElementById( 'kUI_dropdown_basic_select' );
                                                               </select>
                                                           </div>
                                                           <div class="row">
                                                               <div class="col-xs-8 col-md-8">
                                                                   <div class="form-group">
                                                                       <label for="tax_home">Genişlik</label>
                                                                       <input type="text" name="txtPageWidth" id="txtPageWidth" value="210" class="form-control">
                                                                   </div> <!-- /.form-group -->
                                                               </div>
                                                           </div>
                                                           <div class="row">
                                                               <div class="col-xs-8 col-md-8">
                                                                   <div class="form-group"  >

                                                                       <label for="tax_home">Yükseklik</label>
                                                                       <input type="text" name="txtPageHeight" id="txtPageHeight" value="297" class="form-control">
                                                                   </div> <!-- /.form-group -->
                                                               </div>

                                                           </div>
                                                           <div class="form-group">
                                                               <label for="ddlFontSize" >Yazı Büyüklüğü</label>
                                                               <select name="ddlFontSize" id="ddlFontSize" class="form-control" onchange="SetFont()">
                                                                       <option selected="selected" value="10">10</option>
                                                                       <option value="7">7</option>
                                                                       <option value="8">8</option>
                                                                       <option value="9">9</option>
                                                                       <option value="10">10</option>
                                                                       <option value="11">11</option>
                                                                       <option value="12">12</option>
                                                                       <option value="13">13</option>
                                                                       <option value="14">14</option>
                                                                       <option value="15">15</option>
                                                                       <option value="16">16</option>
                                                                       <option value="18">18</option>
                                                                       <option value="20">20</option>
                                                                   </select>

                                                           </div>
                                                           <div class="form-group">
                                                               <label for="ddlFontFamily">Yazı Tipi</label>

                                                                   <select name="ddlFontFamily" id="ddlFontFamily" class="form-control" onchange="SetFont()">
                                                                       <option selected="selected" value="Courier" style="font-family: Courier">Courier</option>
                                                                       <option value="Courier" style="font-family: Courier">Courier</option>
                                                                       <option value="Consolas" style="font-family: Consolas">Consolas</option>
                                                                       <option value="Calibri" style="font-family: Calibri">Calibri</option>
                                                                       <option value="Arial" style="font-family: Arial">Arial</option>
                                                                   </select>

                                                           </div>
                                                           <div class="form-group">
                                                               <label for="ddlFontWeight">Yazı Stili</label>

                                                                   <select name="ddlFontWeight" id="ddlFontWeight" class="form-control" onchange="SetFont()">
                                                                       <option value="Normal" style="font-weight: normal">Normal</option>
                                                                       <option value="Bold" style="font-weight: bold">Bold</option>
                                                                       <option value="italic" style="font-style: italic ">italic</option>
                                                                   </select>

                                                           </div>

                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="panel">
                                                   <a class="panel-heading collapsed" role="tab" id="headingTwo1" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo">
                                                       <h4 class="panel-title">Eklenecek Alanlar</h4>
                                                   </a>
                                                   <div id="collapseTwo1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                                                       <div class="panel-body">
                                                           <li id="surukle1" adi="Cari Hesap" data-name="cunvan" class="ui-state-info bg-success bg-info ui-draggable ui-draggable-handle" style="font-size: small; height: 40px; min-height: 20px; width: 100%; list-style-type: none; float: left;background: #E6E9ED">

                                                               <div class="row">
                                                                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                                                                       <label style="width: 100%; list-style-type: none; text-indent: 3px; margin-bottom: -6px;margin-top:10px; cursor:pointer;">                                                                        <i class="fa fa-pencil-square-o" ></i></a>
                                                                       &nbsp;&nbsp;&nbsp;&nbsp;Cari Hesap Adı&nbsp;</label>
                                                                   </div>
                                                                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<span style="font-size:small" class="text-default pull-right">
<div class="btn-group btn-group-xs" data-toggle="buttons" style="margin-top:10px;margin-bottom:7px;margin-right:5px">
<label class="btn btn-default active">
<input name="sur1" value="left"  type="radio"> <i class="fa fa-align-left" aria-hidden="true"></i>
</label>
<label class="btn btn-default">
<input name="sur1" value="center"  type="radio"> <i class="fa fa-align-center" aria-hidden="true"></i>
</label>
<label class="btn btn-default">
<input name="sur1" value="right"  type="radio"> <i class="fa fa-align-right" aria-hidden="true"></i>
</label>
</div>
</span>
                                                                       <br>
                                                                       <span style="font-size:small; display:none;" class="text-default text-right">
<i class="fa fa-paragraph" aria-hidden="true"></i>&nbsp;<input type="number" step="0.1" id="t1" !class="num2" onkeyup="ResizeTable()" value="4" style="height:22px; width:50px; font-size:small;">
</span>
                                                                   </div>
                                                               </div>
                                                           </li>

                                                           <li id="surukle2" adi="Tarih" data-name="tar" class="ui-state-info bg-success bg-info ui-draggable ui-draggable-handle" style="font-size: small; height: 40px; min-height: 20px; width: 100%; list-style-type: none; float: left;background: #E6E9ED">

                                                               <div class="row">
                                                                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                                                                       <label style="width: 100%; list-style-type: none; text-indent: 3px; margin-bottom: -6px;margin-top:10px; cursor:pointer;">                                                                        <i class="fa fa-pencil-square-o" ></i></a>
                                                                           &nbsp;&nbsp;&nbsp;&nbsp;Tarih&nbsp;</label>
                                                                   </div>
                                                                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<span style="font-size:small" class="text-default pull-right">
<div class="btn-group btn-group-xs" data-toggle="buttons" style="margin-top:10px;margin-bottom:7px;margin-right:5px" >
<label class="btn btn-default  active">
<input name="sur2" value="left"  type="radio"> <i class="fa fa-align-left" aria-hidden="true"></i>
</label>
<label class="btn btn-default">
<input name="sur2" value="center"  type="radio"> <i class="fa fa-align-center" aria-hidden="true"></i>
</label>
<label class="btn btn-default">
<input name="sur2" value="right"  type="radio"> <i class="fa fa-align-right" aria-hidden="true"></i>
</label>
</div>
</span>
                                                                       <br>
                                                                       <span style="font-size:small; display:none;" class="text-default text-right">
<i class="fa fa-paragraph" aria-hidden="true"></i>&nbsp;<input type="number" step="0.1" id="t1" !class="num2" onkeyup="ResizeTable()" value="4" style="height:22px; width:50px; font-size:small;">
</span>
                                                                   </div>
                                                               </div>
                                                           </li>
                                                           <li id="surukle3" adi="Adres" data-name="cadres1" class="ui-state-info bg-success bg-info ui-draggable ui-draggable-handle" style="font-size: small; height: 40px; min-height: 20px; width: 100%; list-style-type: none; float: left;background: #E6E9ED">

                                                               <div class="row">
                                                                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                                                                       <label style="width: 100%; list-style-type: none; text-indent: 3px; margin-bottom: -6px;margin-top:10px; cursor:pointer;">                                                                        <i class="fa fa-pencil-square-o" ></i></a>
                                                                           &nbsp;&nbsp;&nbsp;&nbsp;Adres&nbsp;</label>
                                                                   </div>
                                                                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<span style="font-size:small" class="text-default pull-right">
<div class="btn-group btn-group-xs" data-toggle="buttons" style="margin-top:10px;margin-bottom:7px;margin-right:5px">
<label class="btn btn-default active">
<input name="sur3" value="left"  type="radio"> <i class="fa fa-align-left" aria-hidden="true"></i>
</label>
<label class="btn btn-default">
<input name="sur3" value="center"  type="radio"> <i class="fa fa-align-center" aria-hidden="true"></i>
</label>
<label class="btn btn-default">
<input name="sur3" value="right"  type="radio"> <i class="fa fa-align-right" aria-hidden="true"></i>
</label>
</div>
</span>
                                                                       <br>
                                                                       <span style="font-size:small; display:none;" class="text-default text-right">
<i class="fa fa-paragraph" aria-hidden="true"></i>&nbsp;<input type="number" step="0.1" id="t1" !class="num2" onkeyup="ResizeTable()" value="4" style="height:22px; width:50px; font-size:small;">
</span>
                                                                   </div>
                                                               </div>
                                                           </li>
                                                           <li id="surukle4" adi="Vergi Dairesi" class="ui-state-info bg-success bg-info ui-draggable ui-draggable-handle" style="font-size: small; height: 40px; min-height: 20px; width: 100%; list-style-type: none; float: left;background: #E6E9ED">

                                                               <div class="row">
                                                                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                                                                       <label style="width: 100%; list-style-type: none; text-indent: 3px; margin-bottom: -6px;margin-top:10px; cursor:pointer;">                                                                        <i class="fa fa-pencil-square-o" ></i></a>
                                                                           &nbsp;&nbsp;&nbsp;&nbsp;Vergi Dairesi&nbsp;</label>
                                                                   </div>
                                                                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<span style="font-size:small" class="text-default pull-right">
<div class="btn-group btn-group-xs" data-toggle="buttons" style="margin-top:10px;margin-bottom:7px;margin-right:5px">
<label class="btn btn-default active">
<input name="sur4" value="left"  type="radio"> <i class="fa fa-align-left" aria-hidden="true"></i>
</label>
<label class="btn btn-default">
<input name="sur4" value="center"  type="radio"> <i class="fa fa-align-center" aria-hidden="true"></i>
</label>
<label class="btn btn-default">
<input name="sur4" value="right"  type="radio"> <i class="fa fa-align-right" aria-hidden="true"></i>
</label>
</div>
</span>
                                                                       <br>
                                                                       <span style="font-size:small; display:none;" class="text-default text-right">
<i class="fa fa-paragraph" aria-hidden="true"></i>&nbsp;<input type="number" step="0.1" id="t1" !class="num2" onkeyup="ResizeTable()" value="4" style="height:22px; width:50px; font-size:small;">
</span>
                                                                   </div>
                                                               </div>
                                                           </li>
                                                           <li id="surukle5" adi="Vergi No" class="ui-state-info bg-success bg-info ui-draggable ui-draggable-handle" style="font-size: small; height: 40px; min-height: 20px; width: 100%; list-style-type: none; float: left;background: #E6E9ED">

                                                               <div class="row">
                                                                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                                                                       <label style="width: 100%; list-style-type: none; text-indent: 3px; margin-bottom: -6px;margin-top:10px; cursor:pointer;">                                                                        <i class="fa fa-pencil-square-o" ></i></a>
                                                                           &nbsp;&nbsp;&nbsp;&nbsp;Vergi No&nbsp;</label>
                                                                   </div>
                                                                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<span style="font-size:small" class="text-default pull-right">
<div class="btn-group btn-group-xs" data-toggle="buttons" style="margin-top:10px;margin-bottom:7px;margin-right:5px">
<label class="btn btn-default active">
<input name="sur5" value="left"  type="radio"> <i class="fa fa-align-left" aria-hidden="true"></i>
</label>
<label class="btn btn-default">
<input name="sur5" value="center"  type="radio"> <i class="fa fa-align-center" aria-hidden="true"></i>
</label>
<label class="btn btn-default">
<input name="sur5" value="right"  type="radio"> <i class="fa fa-align-right" aria-hidden="true"></i>
</label>
</div>
</span>
                                                                       <br>
                                                                       <span style="font-size:small; display:none;" class="text-default text-right">
<i class="fa fa-paragraph" aria-hidden="true"></i>&nbsp;<input type="number" step="0.1" id="t1" !class="num2" onkeyup="ResizeTable()" value="4" style="height:22px; width:50px; font-size:small;">
</span>
                                                                   </div>
                                                               </div>
                                                           </li>
                                                           <li id="surukle6" adi="Fis Numarasi" class="ui-state-info bg-success bg-info ui-draggable ui-draggable-handle" style="font-size: small; height: 40px; min-height: 20px; width: 100%; list-style-type: none; float: left;background: #E6E9ED">

                                                               <div class="row">
                                                                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                                                                       <label style="width: 100%; list-style-type: none; text-indent: 3px; margin-bottom: -6px;margin-top:10px; cursor:pointer;">                                                                        <i class="fa fa-pencil-square-o" ></i></a>
                                                                           &nbsp;&nbsp;&nbsp;&nbsp;Fiş Numarası&nbsp;</label>
                                                                   </div>
                                                                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<span style="font-size:small" class="text-default pull-right">
<div class="btn-group btn-group-xs" data-toggle="buttons" style="margin-top:10px;margin-bottom:7px;margin-right:5px">
<label class="btn btn-default active">
<input name="sur6" value="left"  type="radio"> <i class="fa fa-align-left" aria-hidden="true"></i>
</label>
<label class="btn btn-default">
<input name="sur6" value="center"  type="radio"> <i class="fa fa-align-center" aria-hidden="true"></i>
</label>
<label class="btn btn-default">
<input name="sur6" value="right"  type="radio"> <i class="fa fa-align-right" aria-hidden="true"></i>
</label>
</div>
</span>
                                                                       <br>
                                                                       <span style="font-size:small; display:none;" class="text-default text-right">
<i class="fa fa-paragraph" aria-hidden="true"></i>&nbsp;<input type="number" step="0.1" id="t1" !class="num2" onkeyup="ResizeTable()" value="4" style="height:22px; width:50px; font-size:small;">
</span>
                                                                   </div>
                                                               </div>
                                                           </li>


                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="panel">
                                                   <a class="panel-heading collapsed" role="tab" id="headingThree1" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1" aria-expanded="false" aria-controls="collapseThree">
                                                       <h4 class="panel-title">Collapsible Group Item #3</h4>
                                                   </a>
                                                   <div id="collapseThree1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                                                       <div class="panel-body">
                                                           <div>
                                                               <input type="button" id="ibo">
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <!-- end of accordion -->
                      </div>
                   </div>
               </div>

                   {{csrf_field()}}

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
   <script src="{{ asset("js/jquery-ui.min.js") }}"></script>
   <script src="{{ asset("js/store.js") }}"></script>

   <script src="{{ asset("js/datatable.resizecol.js") }}"></script>

   <script type="text/javascript">


   </script>

   <script type="text/javascript">
       $(document).ready(function() {



           $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           });
// resize drag durma belam s..ildi
           $("#tbldongu,.fat-alan-stok").draggable({

               containment: $('#divContainer')}).resizable({});
           $("table").resizableColumns({
               store: window.store

           });

           $('.rc-handle').hover(function() {
               $("#tbldongu,.fat-alan-stok").draggable({ disabled: true });
           },function() {
               $("#tbldongu,.fat-alan-stok").draggable({ disabled: false });
           });



// resize drag durma belam s..ildi


           $(function() {

               var idd=null;
               var iddd=null;
               var Sayac = 0;


//                $(div).prependTo('#divContainer');

               $("#surukle1,#surukle2,#surukle3,#surukle4,#surukle5,#surukle6").draggable({

                   cursor: "move",
                   helper : "clone"
               });
               $(".fat-alan-kutu").draggable({
                   grid: [ 2, 2 ],
                   containment: $('#divContainer')}).resizable({});




               $("#divContainer").droppable({
                   accept: "#surukle1,#surukle2,#surukle3,#surukle4,#surukle5,#surukle6",
                   drop: function (event, ui) {
                       idd =ui.draggable.attr('id');
                       iddd =ui.draggable.attr('adi');
                       name =  ui.draggable.attr('data-name');
                       leftPosition  = ui.offset.left - $(this).offset().left;
                       topPosition   = ui.offset.top - $(this).offset().top;

                       var div = "<div class='fat-alan-kutu' id='sec_"+idd+"' adi='"+iddd+"' data-name='"+name+"' style='top:"+topPosition+"px; left: "+leftPosition+"px; width:222px; height:33px; font-family:Arial; font-size:9px;' ><span>"+iddd+"</span><i class='fat-alan-kapat  fa fa-close ' style='float:right;'></i></div>";
                       $(this).append(div);
                       Sayac++;
                       $('.fat-alan-kutu').draggable({
                           grid: [ 2, 2 ],
                           containment: $(this)}).resizable({});

                   }

                   });

//            });


                   $("#divContainer").on("click", '.fat-alan-kutu', function () {


                      var u = $(this).closest('div').attr('id');
                    //   console.log(u);
                        window.var1 = u ;
                      //  alert(u);
                   });

                   $('input:radio').change(function () {

                       if(window.var1=="" || window.var1==null) {
                           new PNotify({
                               title: 'Hata!',
                               text: 'Alan Seçmediniz',
                               type: 'error',
                               styling: 'bootstrap3'
                           });
                       }
                       else

                               var  um =window.var1;
                               //console.log("tıklandı");
                               //   alert(u);
                               var hedef = $(this).val();

                               if (hedef) {

                                   $('#' + um).css({"text-align": hedef});

                               }

                           });



                   $(document).on('click', '#fatura_kaydet', function () {

                       sbladd=$('#sblad').val();

                       if(sbladd == "" || sbladd == null){
                           new PNotify({
                               title: 'Hata!',
                               text: 'Sablon Adı Girmediniz',
                               type: 'error',
                               styling: 'bootstrap3'
                           });
                       }else{

                           var JSonDatatbl = "";
                           var Saytbl = 0;
                           var sbladid=$('#sblsonid').attr('sonid');
                           var ToplamDiv1 = $('#divContainer div#tbldongu').length;
                           $('#divContainer div#tbldongu').each(function() {
                               Saytbl++;
                               if(Saytbl == 1)
                               {
                                   JSonDatatbl = "[";
                               }

                               JSonDatatbl += '{"id":"' + $(this).attr('id') +'","sbladid":"'+ sbladid +'", "ttop":"' + $(this).position().top + '", "tleft":"' + $(this).position().left + '", "twidth":"' + $(this).outerWidth(true) + '", "theight":"' + $(this).outerHeight(true) + '"}';

                               if(Saytbl == ToplamDiv1)
                               {
                                   JSonDatatbl += "]";
                               }
                               else
                               {
                                   JSonDatatbl += ',';
                               }

                           });

                           $("#tasarimtbl").val(JSonDatatbl);

                   var JSonData = "";
                   var ToplamDiv = $('#divContainer div.fat-alan-kutu').length;
                   var SayDiv = 0;
                       veri   =$('#divContainer div#veri').attr('data-veri');

                       if(veri == "undefined" || veri == null){
                           $('#divContainer div.fat-alan-kutu').each(function() {
                               SayDiv++;

                               if(!$(this).attr('id'))
                                   return;

                               if(SayDiv == 1)
                               {
                                   JSonData = "[";
                               }

                               //css("font-family", $('#ddlFontFamily').val());
                             //  $(this).css('float')
//                               style="float:right;"
                               var ali = $('#divContainer div.fat-alan-kutu').css("text-align");
                               JSonData += '{"id":"' + $(this).attr('id') + '","data-name":"' + $(this).attr('data-name') + '", "adi":"' + $(this).attr('adi') + '","sbladid":"'+ sbladid +'", "top":"' + $(this).position().top + '", "left":"' + $(this).position().left + '", "width":"' + $(this).outerWidth(true) + '", "height":"' + $(this).outerHeight(true) + '", "stylealign":"'+ali+'"}';

                               if(SayDiv == ToplamDiv)
                               {
                                   JSonData += "]";
                               }
                               else
                               {
                                   JSonData += ',';
                               }
                           });


                   $("#tasarim").val(JSonData);

                           //var ali = $('#divContainer div.fat-alan-kutu').css("text-align");
                        bad= $("#tasarim").attr('value');
                        tbad=$("#tasarimtbl").attr('value');
                        sbladi=$("#sblad").val();
                       console.log(tbad);
                           console.log(bad);
                       $.ajax({
                           dataType: 'JSON',
                           type: 'POST',
                           url: '/designkaydet' ,
                           data: {
                               '_token': $('input[name=csrf-token]').val(),
                               'datam': bad,
                               'datamt':tbad,
                               'sblad':sbladi,
                               'sblturuid': $('#sblturu').find('option:selected').val()

                           },
                           success: function(data) {
                               console.log(data);

                               new PNotify({
                                   title: 'Popup Title',
                                   text: 'Operation Complated!',
                                   type: 'success',
                                   // type: 'notice',
                                   styling:'bootstrap3'
                               });
                           },
                           error: function(data){
                               console.log(data);



                           }
                       });
                   return false;
                   }

                       $('#divContainer div.fat-alan-kutu').each(function() {
                           SayDiv++;

                           if(!$(this).attr('id'))
                               return;

                           if(SayDiv == 1)
                           {
                               JSonData = "[";
                           }

                           JSonData += '{"id":"' + $(this).attr('id') + '","data-name":"' + $(this).attr('data-name') + '", "adi":"' + $(this).attr('adi') + '", "top":"' + $(this).position().top + '", "left":"' + $(this).position().left + '", "width":"' + $(this).outerWidth(true) + '", "height":"' + $(this).outerHeight(true) + '"}';

                           if(SayDiv == ToplamDiv)
                           {
                               JSonData += "]";
                           }
                           else
                           {
                               JSonData += ',';
                           }
                       });



                       $("#tasarim").val(JSonData);
                       bad= $("#tasarim").attr('value');
                       console.log(bad);

                       $.ajax({
                           dataType: 'JSON',
                           type: 'PUT',
                           url: '/design/ajedit' ,
                           data: {
                               '_token': $('input[name=csrf-token]').val(),
                               'datam': bad

                           },
                           success: function(data) {
                               console.log(data);

                               new PNotify({
                                   title: 'Popup Title',
                                   text: 'Operation Complated!',
                                   type: 'success',
                                   // type: 'notice',
                                   styling:'bootstrap3'
                               });
                           },
                           error: function(data){
                               console.log(data);



                           }
                       });
                       return false;
                       }
               });

































                   //alaln kapat
               $("#divContainer").on('click','.fat-alan-kapat',function(){
                   $(this).closest('div').remove();
               });


           });

           function inch2px(inches) {
               $(".right_col").append("<div id='inch2px' style='width:1in;height:1in;display:hidden;'></div>");
               var pixels = $("#inch2px").width();
               $("#inch2px").remove();

               return inches * pixels;
           }
           function px2inch(px) {
               $(".right_col").append("<div id='inch2px' style='width:1in;height:1in;display:hidden;'></div>");
               var pixels = $("#inch2px").width();
               $("#inch2px").remove();

               return px / pixels;
           }
//            function zemin_yukle(tablo, alan, id_alani, id){
//                if(tablo && alan && id_alani){
//                    $('#myModalFoto').modal('show');
//
//                }else{alert("Parametre eksik!")}
//
           var pxtomm = px2inch(1)*25.4;
           var bos_fatx = '';

           var syol = '/uygulama/resimler';
           if (bos_fatx){var bos_fat= syol+'/'+bos_fatx;}else{var bos_fat = '';}

           function SetFont() {
               $(".fe").css("font-family", $('#ddlFontFamily').val());
               $(".fe").css("font-size", $('#ddlFontSize').val() + 'pt');
               $(".fe").css("font-weight", $('#ddlFontWeight').val());
           }
           function SetCanvasSize() {

               var pW = parseInt($('#txtPageWidth').val())//parseInt($('#txtPageWidth').val()) + parseInt((parseInt($('#txtPageWidth').val())/9)/pxtomm);
               var pH = parseInt($('#txtPageHeight').val())//parseInt($('#txtPageHeight').val()) +parseInt((parseInt($('#txtPageHeight').val())/9)/pxtomm);

               console.log(pW+'mm')
               console.log(pH+'mm')

               $('#page').css("width", pW + "mm").css("height", pH + "mm").css("border", "gray solid 1px").css("background-color", "#fff");
               $('#divContainer').css("border", "black solid 0px");


               $('#divContainer').css("width", pW + "mm").css("height", pH + "mm")
               $('#megaContainer').css("width", pW + "mm").css("height", pH + "mm")

//myRuler.api.destroy();
               rulerla('#divContainer');

           }

           $('#ddlPageType').change(function() {

               switch ($('#ddlPageType').val()) {
                   case '1'://A4
                       $('#txtPageWidth').val('210');
                       $('#txtPageHeight').val('297');


                       $('#page').css({
                           'width': parseInt($('#txtPageWidth').val()) + 'mm',
                           'height': parseInt($('#txtPageHeight').val()) + 'mm'
                       })
                       $('#divContainer').css({
                           'width': parseInt($('#txtPageWidth').val()) + 'mm',
                           'height': parseInt($('#txtPageHeight').val()) + 'mm'
                       })
                       $('#megaContainer').css({
                           'width': parseInt($('#txtPageWidth').val()) + 'mm',
                           'height': parseInt($('#txtPageHeight').val()) + 'mm'
                       })


                       if (bos_fat) {
                           $('#divContainer').css({
                               "background-image": "url(" + bos_fat + ")",
                               "background-repeat": "no-repeat",
                               "background-position": "top left",
                               "-webkit-background-size": "contain",
                               "-moz-background-size": "contain",
                               "-o-background-size": "contain",
                               "background-size": "contain"
                           })
                       }
                       break;
                   case '2'://A5
                       $('#txtPageWidth').val('148');
                       $('#txtPageHeight').val('210');

                       $('#page').css({
                           'width': parseInt($('#txtPageWidth').val()) + 'mm',
                           'height': parseInt($('#txtPageHeight').val()) + 'mm'
                       })
                       $('#divContainer').css({
                           'width': parseInt($('#txtPageWidth').val()) + 'mm',
                           'height': parseInt($('#txtPageHeight').val()) + 'mm'
                       })
                       $('#megaContainer').css({
                           'width': parseInt($('#txtPageWidth').val()) + 'mm',
                           'height': parseInt($('#txtPageHeight').val()) + 'mm'
                       })

                       if (bos_fat) {
                           $('#divContainer').css({
                               "background-image": "url(" + bos_fat + ")",
                               "background-repeat": "no-repeat",
                               "background-position": "top left",
                               "-webkit-background-size": "contain",
                               "-moz-background-size": "contain",
                               "-o-background-size": "contain",
                               "background-size": "contain"
                           })
                       }
                       break;
                   case '3'://Other

                       var_m_sayfa_w = $('#txtPageWidth').val();
                       var_m_sayfa_h = $('#txtPageHeight').val();
                       if (var_m_sayfa_w && var_m_sayfa_h) {
                           $('#txtPageWidth').val(var_m_sayfa_w);
                           $('#txtPageHeight').val(var_m_sayfa_h);
                       } else {
                           $('#txtPageWidth').val('210');
                           $('#txtPageHeight').val('297');
                       }


                       $('#page').css({
                           'width': parseInt($('#txtPageWidth').val()) + 'mm',
                           'height': parseInt($('#txtPageHeight').val()) + 'mm'
                       })
                       $('#divContainer').css({
                           'width': parseInt($('#txtPageWidth').val()) + 'mm',
                           'height': parseInt($('#txtPageHeight').val()) + 'mm'
                       })
                       $('#megaContainer').css({
                           'width': parseInt($('#txtPageWidth').val()) + 'mm',
                           'height': parseInt($('#txtPageHeight').val()) + 'mm'
                       })


                       $('#divCustomPagesize').show("slow");
                       if (bos_fat) {
                           $('#divContainer').css({
                               "background-image": "url(" + bos_fat + ")",
                               "background-repeat": "no-repeat",
                               "background-position": "top left",
                               "-webkit-background-size": "contain",
                               "-moz-background-size": "contain",
                               "-o-background-size": "contain",
                               "background-size": "contain"
                           })
                       }
                       break;
               }

               SetCanvasSize();

           });

           /*ruler*/

           function rulerla(elm){
               try{


//myRuler.api.destroy();
                   var myRuler = new ruler({
                       container: document.querySelector(elm),// reference to DOM element to apply rulers on
                       rulerHeight: 15, // thickness of ruler
                       fontFamily: 'arial',// font for points
                       fontSize: '10px',
                       strokeStyle: 'grey',
                       lineWidth: 1,
                       enableMouseTracking: true,
                       enableToolTip: false

                   });

                   var pxtomm = px2inch(1)*25.4

                   myRuler.api.setScale(pxtomm/10);
                   console.log("pxtomm / 10 > " + pxtomm/10)

               }catch(e){console.log(e.stack)}
           }//func

               rulerla('#divContainer');

               try{
                   ConvertText($('#hidd_yaziyla_yeri').val().trim(), $('#hidd_gen_top').val().trim(), $('#hidd_gen_top_pbirim').val().trim(), '', '#', '');
               }catch(e){console.log(e.stack)}

               $(window).resize(function(){
                   SetCanvasSize();

               });

               $("#divContainer").mousemove(function(e){
                   var parentOffset = $(this).parent().offset();
                   var relativeXPosition_px = (e.pageX - parentOffset.left);
                   var relativeYPosition_px = (e.pageY - parentOffset.top);
                   var relativeXPosition_mm = parseInt(relativeXPosition_px*pxtomm);
                   var relativeYPosition_mm = (parseInt(relativeYPosition_px*pxtomm));


               });


           });

    </script>



@endsection