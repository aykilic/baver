@extends('layouts.blank')
@push('stylesheets')
@endpush
@section('main_container')



    <head>
        {{--<link href="{{ asset("css/site.css") }}" rel="stylesheet">--}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>

    <div class="right_col" role="main">
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Numaralandırma </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-expanded="false"><i class="fa fa-wrench"></i></a>

                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                            <div class="x_content">


                                <br/>


                                <div class="h-20"></div>

                                <div class="clearfix"></div>


                            <div class="x_panel">

                                <div class="x_panel">
                                    <div class="col-xs-1">

                                        <div class="form-group">
                                            <br/>
                                            {{--<label>&nbsp;</label>--}}
                                            <label>Alış Sipariş Fişi</label>


                                        </div>
                                    </div>



                                    <div class="col-xs-2">
                                        <div class="form-group">
                                        <label>Uzunluk (Basamak):</label>
                                        <input type="text" class="form-control" name="sipfisuzunluk" id="sipfisuzunluk">
                                    </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Sayı:</label>
                                            <input type="text" class="form-control" name="sayi" id="sayi">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Başlangıç Tarihi:</label>
                                            <input type="text" class="form-control" name="tarih1" id="tarih2">
                                        </div>
                                    </div>


                                </div>
                                <div class="x_panel">
                                    <div class="col-xs-1">

                                        <div class="form-group">
                                            <br/>
                                            {{--<label>&nbsp;</label>--}}
                                            <label>Satış Sipariş Fişi</label>


                                        </div>
                                    </div>



                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Uzunluk (Basamak):</label>
                                            <input type="text" class="form-control" name="sipfisuzunluk" id="sipfisuzunluk">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Sayı:</label>
                                            <input type="text" class="form-control" name="sayi" id="sayi">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Başlangıç Tarihi:</label>
                                            <input type="text" class="form-control" name="tarih1" id="tarih2">
                                        </div>
                                    </div>


                                </div>
                                <div class="x_panel">
                                    <div class="col-xs-1">

                                        <div class="form-group">
                                            <br/>
                                            {{--<label>&nbsp;</label>--}}
                                            <label>Alış İrsaliye</label>


                                        </div>
                                    </div>



                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Uzunluk (Basamak):</label>
                                            <input type="text" class="form-control" name="sipfisuzunluk" id="sipfisuzunluk">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Sayı:</label>
                                            <input type="text" class="form-control" name="sayi" id="sayi">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Başlangıç Tarihi:</label>
                                            <input type="text" class="form-control" name="tarih1" id="tarih2">
                                        </div>
                                    </div>


                                </div>
                                <div class="x_panel">
                                    <div class="col-xs-1">

                                        <div class="form-group">
                                            <br/>
                                            {{--<label>&nbsp;</label>--}}
                                            <label>Satış irsaliye</label>


                                        </div>
                                    </div>



                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Uzunluk (Basamak):</label>
                                            <input type="text" class="form-control" name="sipfisuzunluk" id="sipfisuzunluk">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Sayı:</label>
                                            <input type="text" class="form-control" name="sayi" id="sayi">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Başlangıç Tarihi:</label>
                                            <input type="text" class="form-control" name="tarih1" id="tarih2">
                                        </div>
                                    </div>


                                </div>
                                <div class="x_panel">
                                    <div class="col-xs-1">

                                        <div class="form-group">
                                            <br/>
                                            {{--<label>&nbsp;</label>--}}
                                            <label>Alış Fatura</label>


                                        </div>
                                    </div>



                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Uzunluk (Basamak):</label>
                                            <input type="text" class="form-control" name="sipfisuzunluk" id="sipfisuzunluk">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Sayı:</label>
                                            <input type="text" class="form-control" name="sayi" id="sayi">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Başlangıç Tarihi:</label>
                                            <input type="text" class="form-control" name="tarih1" id="tarih2">
                                        </div>
                                    </div>


                                </div>
                                <div class="x_panel">
                                    <div class="col-xs-1">

                                        <div class="form-group">
                                            <br/>
                                            {{--<label>&nbsp;</label>--}}
                                            <label>Satış Fatura</label>


                                        </div>
                                    </div>



                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Uzunluk (Basamak):</label>
                                            <input type="text" class="form-control" name="sipfisuzunluk" id="sipfisuzunluk">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Sayı:</label>
                                            <input type="text" class="form-control" name="sayi" id="sayi">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Başlangıç Tarihi:</label>
                                            <input type="text" class="form-control" name="tarih1" id="tarih2">
                                        </div>
                                    </div>


                                </div>




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
@endsection
@section('content_script')

    <script type="text/javascript">
        $(":input").keyup(function(){
            this.value = this.value.toUpperCase();
        });
    </script>

@endsection