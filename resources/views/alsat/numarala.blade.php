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
                                        <input type="text" class="form-control" name="asipfisuzunluk" id="asipfisuzunluk" data-inputmask="'alias': 'uzunluk'" oninput="calculate01()">
                                    </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Sayı:</label>
                                            <input type="text" class="form-control" name="sayi" id="sayi" data-inputmask="'alias': 'tutar'" oninput="calculate01()">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Başlangıç Tarihi:</label>
                                            <input type="text" class="form-control" name="tarih1" id="tarih1">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Görünüm :</label>
                                            <input type="text" class="form-control" name="gorunum" id="asipfisgorunum" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 asf" style="margin-top: 24px;">
                                        <a class="btn btn-default"  id="assatirekle" >Kaydet</a>
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
                                            <input type="text" class="form-control" name="ssipfisuzunluk" id="ssipfisuzunluk" data-inputmask="'alias': 'uzunluk'" oninput="calculate02()">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Sayı:</label>
                                            <input type="text" class="form-control" name="ssipsayi" id="ssipsayi" data-inputmask="'alias': 'tutar'" oninput="calculate02()">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Başlangıç Tarihi:</label>
                                            <input type="text" class="form-control" name="tarih1" id="tarih1">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Görünüm :</label>
                                            <input type="text" class="form-control" name="ssgorunum" id="ssipfisgorunum" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 ssf" style="margin-top: 24px;">
                                        <a class="btn btn-default"  id="sssatirekle" >Kaydet</a>
                                    </div>

                                </div>
                                <div class="x_panel">
                                    <div class="col-xs-1">

                                        <div class="form-group">
                                            <br/>
                                            {{--<label>&nbsp;</label>--}}
                                            <label>Alış İrsaliyesi</label>


                                        </div>
                                    </div>



                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Uzunluk (Basamak):</label>
                                            <input type="text" class="form-control" name="aiuzunluk" id="aiuzunluk" data-inputmask="'alias': 'uzunluk'" oninput="calculate03()">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Sayı:</label>
                                            <input type="text" class="form-control" name="aisayi" id="aisayi" data-inputmask="'alias': 'tutar'" oninput="calculate03()">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Başlangıç Tarihi:</label>
                                            <input type="text" class="form-control" name="aitarih1" id="aitarih1">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Görünüm :</label>
                                            <input type="text" class="form-control" name="aigorunum" id="aigorunum" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 ai" style="margin-top: 24px;">
                                        <a class="btn btn-default"  id="aisatirekle" >Kaydet</a>
                                    </div>

                                </div>
                                <div class="x_panel">
                                    <div class="col-xs-1">

                                        <div class="form-group">
                                            <br/>
                                            {{--<label>&nbsp;</label>--}}
                                            <label>Satış irsaliyesi</label>


                                        </div>
                                    </div>



                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Uzunluk (Basamak):</label>
                                            <input type="text" class="form-control" name="siuzunluk" id="siuzunluk" data-inputmask="'alias': 'uzunluk'" oninput="calculate04()">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Sayı:</label>
                                            <input type="text" class="form-control" name="sisayi" id="sisayi" data-inputmask="'alias': 'tutar'" oninput="calculate04()">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Başlangıç Tarihi:</label>
                                            <input type="text" class="form-control" name="sitarih1" id="sitarih1">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Görünüm :</label>
                                            <input type="text" class="form-control" name="sigorunum" id="sigorunum" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 si" style="margin-top: 24px;">
                                        <a class="btn btn-default"  id="sisatirekle" >Kaydet</a>
                                    </div>

                                </div>
                                <div class="x_panel">
                                    <div class="col-xs-1">

                                        <div class="form-group">
                                            <br/>
                                            {{--<label>&nbsp;</label>--}}
                                            <label>Alış Faturası</label>


                                        </div>
                                    </div>



                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Uzunluk (Basamak):</label>
                                            <input type="text" class="form-control" name="afuzunluk" id="afuzunluk" data-inputmask="'alias': 'uzunluk'" oninput="calculate05()">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Sayı:</label>
                                            <input type="text" class="form-control" name="afsayi" id="afsayi" data-inputmask="'alias': 'tutar'" oninput="calculate05()">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Başlangıç Tarihi:</label>
                                            <input type="text" class="form-control" name="aftarih1" id="aftarih1">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Görünüm :</label>
                                            <input type="text" class="form-control" name="afgorunum" id="afgorunum" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 af" style="margin-top: 24px;">
                                        <a class="btn btn-default"  id="afsatirekle" >Kaydet</a>
                                    </div>

                                </div>
                                <div class="x_panel">
                                    <div class="col-xs-1">

                                        <div class="form-group">
                                            <br/>
                                            {{--<label>&nbsp;</label>--}}
                                            <label>Satış Faturası</label>


                                        </div>
                                    </div>



                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Uzunluk (Basamak):</label>
                                            <input type="text" class="form-control" name="sfuzunluk" id="sfuzunluk" data-inputmask="'alias': 'uzunluk'" oninput="calculate06()">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Sayı:</label>
                                            <input type="text" class="form-control" name="sfsayi" id="sfsayi" data-inputmask="'alias': 'tutar'" oninput="calculate06()">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Başlangıç Tarihi:</label>
                                            <input type="text" class="form-control" name="sftarih1" id="sftarih1">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Görünüm :</label>
                                            <input type="text" class="form-control" name="sfgorunum" id="sfgorunum" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 sf" style="margin-top: 24px;">
                                        <a class="btn btn-default"  id="sfsatirekle" >Kaydet</a>
                                    </div>

                                </div>
                                <div class="x_panel">
                                    <div class="col-xs-1">

                                        <div class="form-group">
                                            <br/>
                                            {{--<label>&nbsp;</label>--}}
                                            <label>Tahsilat Fişi</label>


                                        </div>
                                    </div>



                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Uzunluk (Basamak):</label>
                                            <input type="text" class="form-control" name="tfuzunluk" id="tfuzunluk" data-inputmask="'alias': 'uzunluk'" oninput="calculate07()">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Sayı:</label>
                                            <input type="text" class="form-control" name="tfsayi" id="tfsayi" data-inputmask="'alias': 'tutar'" oninput="calculate07()">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Başlangıç Tarihi:</label>
                                            <input type="text" class="form-control" name="tftarih1" id="tftarih1">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Görünüm :</label>
                                            <input type="text" class="form-control" name="tfgorunum" id="tfgorunum" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 tf" style="margin-top: 24px;">
                                        <a class="btn btn-default"  id="tfsatirekle" >Kaydet</a>
                                    </div>

                                </div>
                                <div class="x_panel">
                                    <div class="col-xs-1">

                                        <div class="form-group">
                                            <br/>
                                            {{--<label>&nbsp;</label>--}}
                                            <label>Ödeme Fişi</label>


                                        </div>
                                    </div>



                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Uzunluk (Basamak):</label>
                                            <input type="text" class="form-control" name="ofuzunluk" id="ofuzunluk" data-inputmask="'alias': 'uzunluk'" oninput="calculate08()">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Sayı:</label>
                                            <input type="text" class="form-control" name="ofsayi" id="ofsayi" data-inputmask="'alias': 'tutar'" oninput="calculate08()">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Başlangıç Tarihi:</label>
                                            <input type="text" class="form-control" name="oftarih1" id="oftarih1">
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label>Görünüm :</label>
                                            <input type="text" class="form-control" name="ofgorunum" id="ofgorunum" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 of" style="margin-top: 24px;">
                                        <a class="btn btn-default"  id="ofsatirekle" >Kaydet</a>
                                    </div>

                                </div>


                                </div>

                                {{ csrf_field() }}

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
        // $(document).ready(function() {
        Inputmask.extendAliases({
            'tutar': {
               // radixPoint: ',',
                //mask: "9",
                alias: 'numeric',
                rightAlign:false,
               // prefix: '',
               // digits: 2,
                autoUnmask: true,
                removeMaskOnSubmit: true
                //unmaskAsNumber: true,
               // allowPlus: false,
               // allowMinus: false
             // autoGroup: true,
               // groupSeparator: "."
            },
            'uzunluk': {
                // radixPoint: ',',
                mask: "9",
                alias: 'numeric',
                rightAlign:false,
                // prefix: '',
                // digits: 2,
                autoUnmask: true,
                removeMaskOnSubmit: true
                //unmaskAsNumber: true,
                // allowPlus: false,
                // allowMinus: false
                // autoGroup: true,
                // groupSeparator: "."
            }
        });
        // $('#sayi,#asipfisuzunluk').inputmask("tutar");
        //
        // });









       function calculate01 () {
            var str = $('#sayi').val();
            var pad = $('#asipfisuzunluk').val();
       //      console.log(pad);
       //1    var ans = pad.substring(0, pad.length - str.length) + str;
       //2    var ans = pad.substring(str.length) + str;
           if((str.length) > pad){
               new PNotify({
                   title: 'Hata!',
                   text: 'Hatalı Giriş.',
                   type: 'error',
                   styling:'bootstrap3'
               });
               $('#sayi').val("");
               return false;
           }else {
               var ans = Array((pad - str.length) + 1).join('0') + str;
               $('#asipfisgorunum').val(ans);
           }
        }
        function calculate02 () {
            var str = $('#ssipsayi').val();
            var pad = $('#ssipfisuzunluk').val();
            if((str.length) > pad){
                new PNotify({
                    title: 'Hata!',
                    text: 'Hatalı Giriş.',
                    type: 'error',
                    styling:'bootstrap3'
                });
                $('#ssipsayi').val("");
                return false;
            }else {
                var ans = Array((pad - str.length) + 1).join('0') + str;
                $('#ssipfisgorunum').val(ans);
            }
        }
        function calculate03 () {
            var str = $('#aisayi').val();
            var pad = $('#aiuzunluk').val();
            if((str.length) > pad){
                new PNotify({
                    title: 'Hata!',
                    text: 'Hatalı Giriş.',
                    type: 'error',
                    styling:'bootstrap3'
                });
                $('#aisayi').val("");
                return false;
            }else {
                var ans = Array((pad - str.length) + 1).join('0') + str;
                $('#aigorunum').val(ans);
            }
        }
        function calculate04 () {
            var str = $('#sisayi').val();
            var pad = $('#siuzunluk').val();
            if((str.length) > pad){
                new PNotify({
                    title: 'Hata!',
                    text: 'Hatalı Giriş.',
                    type: 'error',
                    styling:'bootstrap3'
                });
                $('#sisayi').val("");
                return false;
            }else {
                var ans = Array((pad - str.length) + 1).join('0') + str;
                $('#sigorunum').val(ans);
            }
        }
        function calculate05 () {
            var str = $('#afsayi').val();
            var pad = $('#afuzunluk').val();
            if((str.length) > pad){
                new PNotify({
                    title: 'Hata!',
                    text: 'Hatalı Giriş.',
                    type: 'error',
                    styling:'bootstrap3'
                });
                $('#afsayi').val("");
                return false;
            }else {
                var ans = Array((pad - str.length) + 1).join('0') + str;
                $('#afgorunum').val(ans);
            }
        }
        function calculate06 () {
            var str = $('#sfsayi').val();
            var pad = $('#sfuzunluk').val();
            if((str.length) > pad){
                new PNotify({
                    title: 'Hata!',
                    text: 'Hatalı Giriş.',
                    type: 'error',
                    styling:'bootstrap3'
                });
                $('#sfsayi').val("");
                return false;
            }else {
                var ans = Array((pad - str.length) + 1).join('0') + str;
                $('#sfgorunum').val(ans);
            }
        }
        function calculate07 () {
            var str = $('#tfsayi').val();
            var pad = $('#tfuzunluk').val();
            if((str.length) > pad){
                new PNotify({
                    title: 'Hata!',
                    text: 'Hatalı Giriş.',
                    type: 'error',
                    styling:'bootstrap3'
                });
                $('#tfsayi').val("");
                return false;
            }else {
                var ans = Array((pad - str.length) + 1).join('0') + str;
                $('#tfgorunum').val(ans);
            }
        }
        function calculate08 () {
            var str = $('#ofsayi').val();
            var pad = $('#ofuzunluk').val();
            if((str.length) > pad){
                new PNotify({
                    title: 'Hata!',
                    text: 'Hatalı Giriş.',
                    type: 'error',
                    styling:'bootstrap3'
                });
                $('#ofsayi').val("");
                return false;
            }else {
                var ans = Array((pad - str.length) + 1).join('0') + str;
                $('#ofgorunum').val(ans);
            }
        }
        $('.asf').on('click', '#assatirekle', function() {
           // alert("df");
            $.ajax({

                type: 'POST',
                url: "/askaydet",
                data: {
                    '_token': $('input[name=_token]').val(),
                    'evrakturuid':2 ,
                    'sayi': $('#sayi').val(),
                    'assayigorunum': $('#asipfisgorunum').val(),
                    //  $('#select_id').find('option:selected').val()
                    //      'dbanka':$('select[name=dbanka]').val(),
                    // 'did': $('#did').val(),//

                    'uzunluk': $('#asipfisuzunluk').val(),
                    success: function(data) {
                        new PNotify({
                            title: 'Numaralama',
                            text: 'Başarılı',
                            type: 'success',
                            // type: 'notice',
                            styling:'bootstrap3'
                        });
                    }
                }


            });

        });
        $('.ssf').on('click', '#sssatirekle', function() {
            // alert("df");
            $.ajax({

                type: 'POST',
                url: "/ssipnokaydet",
                data: {
                    '_token': $('input[name=_token]').val(),
                    'evrakturuid':1 ,
                    'sayi': $('#ssipsayi').val(),
                    'sssayigorunum': $('#ssipfisgorunum').val(),
                    //  $('#select_id').find('option:selected').val()
                    //      'dbanka':$('select[name=dbanka]').val(),
                    // 'did': $('#did').val(),//

                    'uzunluk': $('#ssipfisuzunluk').val(),
                    success: function(data) {
                        new PNotify({
                            title: 'Numaralama',
                            text: 'Başarılı',
                            type: 'success',
                            // type: 'notice',
                            styling:'bootstrap3'
                        });
                    }
                }


            });

        });
        $('.ai').on('click', '#aisatirekle', function() {
            // alert("df");
            $.ajax({

                type: 'POST',
                url: "/ainokaydet",
                data: {
                    '_token': $('input[name=_token]').val(),
                    'evrakturuid': 4,
                    'sayi': $('#aisayi').val(),
                    'aigorunum': $('#aigorunum').val(),
                    //  $('#select_id').find('option:selected').val()
                    //      'dbanka':$('select[name=dbanka]').val(),
                    // 'did': $('#did').val(),//

                    'uzunluk': $('#aiuzunluk').val(),
                    success: function (data) {
                        new PNotify({
                            title: 'Numaralama',
                            text: 'Başarılı',
                            type: 'success',
                            // type: 'notice',
                            styling: 'bootstrap3'
                        });
                    }
                }


            });
        });
            $('.si').on('click', '#sisatirekle', function() {
                // alert("df");
                $.ajax({

                    type: 'POST',
                    url: "/sinokaydet",
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'evrakturuid': 3,
                        'sayi': $('#sisayi').val(),
                        'sigorunum': $('#sigorunum').val(),
                        //  $('#select_id').find('option:selected').val()
                        //      'dbanka':$('select[name=dbanka]').val(),
                        // 'did': $('#did').val(),//

                        'uzunluk': $('#siuzunluk').val(),
                        success: function (data) {
                            new PNotify({
                                title: 'Numaralama',
                                text: 'Başarılı',
                                type: 'success',
                                // type: 'notice',
                                styling: 'bootstrap3'
                            });
                        }
                    }


                });
            });
        $('.af').on('click', '#afsatirekle', function() {
            // alert("df");
            $.ajax({

                type: 'POST',
                url: "/afnokaydet",
                data: {
                    '_token': $('input[name=_token]').val(),
                    'evrakturuid': 6,
                    'sayi': $('#afsayi').val(),
                    'afgorunum': $('#afgorunum').val(),
                    //  $('#select_id').find('option:selected').val()
                    //      'dbanka':$('select[name=dbanka]').val(),
                    // 'did': $('#did').val(),//

                    'uzunluk': $('#afuzunluk').val(),
                    success: function (data) {
                        new PNotify({
                            title: 'Numaralama',
                            text: 'Başarılı',
                            type: 'success',
                            // type: 'notice',
                            styling: 'bootstrap3'
                        });
                    }
                }


            });
        });
        $('.sf').on('click', '#sfsatirekle', function() {
            // alert("df");
            $.ajax({

                type: 'POST',
                url: "/sfnokaydet",
                data: {
                    '_token': $('input[name=_token]').val(),
                    'evrakturuid': 5,
                    'sayi': $('#sfsayi').val(),
                    'sfgorunum': $('#sfgorunum').val(),
                    //  $('#select_id').find('option:selected').val()
                    //      'dbanka':$('select[name=dbanka]').val(),
                    // 'did': $('#did').val(),//

                    'uzunluk': $('#sfuzunluk').val(),
                    success: function (data) {
                        new PNotify({
                            title: 'Numaralama',
                            text: 'Başarılı',
                            type: 'success',
                            // type: 'notice',
                            styling: 'bootstrap3'
                        });
                    }
                }


            });
        });
        $('.tf').on('click', '#tfsatirekle', function() {
            // alert("df");
            $.ajax({

                type: 'POST',
                url: "/tfnokaydet",
                data: {
                    '_token': $('input[name=_token]').val(),
                    'evrakturuid': 7,
                    'sayi': $('#tfsayi').val(),
                    'tfgorunum': $('#tfgorunum').val(),
                    //  $('#select_id').find('option:selected').val()
                    //      'dbanka':$('select[name=dbanka]').val(),
                    // 'did': $('#did').val(),//

                    'uzunluk': $('#tfuzunluk').val(),
                    success: function (data) {
                        new PNotify({
                            title: 'Numaralama',
                            text: 'Başarılı',
                            type: 'success',
                            // type: 'notice',
                            styling: 'bootstrap3'
                        });
                    }
                }


            });
        });
        $('.of').on('click', '#ofsatirekle', function() {
            // alert("df");
            $.ajax({

                type: 'POST',
                url: "/ofnokaydet",
                data: {
                    '_token': $('input[name=_token]').val(),
                    'evrakturuid': 8,
                    'sayi': $('#tfsayi').val(),
                    'ofgorunum': $('#ofgorunum').val(),
                    //  $('#select_id').find('option:selected').val()
                    //      'dbanka':$('select[name=dbanka]').val(),
                    // 'did': $('#did').val(),//

                    'uzunluk': $('#ofuzunluk').val(),
                    success: function (data) {
                        new PNotify({
                            title: 'Numaralama',
                            text: 'Başarılı',
                            type: 'success',
                            // type: 'notice',
                            styling: 'bootstrap3'
                        });
                    }
                }


            });
        });
    </script>

@endsection