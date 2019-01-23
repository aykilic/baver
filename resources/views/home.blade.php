@extends('layouts.blank')

@push('stylesheets')

@endpush

@section('main_container')


    <div class="right_col" role="main">
    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Today's Weather <small>Sessions</small></h2>
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
            </div>
            {{--@foreach ($durum as $hdurum )--}}
            {{--<div class="x_content">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-sm-12">--}}
                        {{--<div class="temperature"><b>Monday</b>, 07:30 AM--}}
                            {{--<span>F</span>--}}
                            {{--<span><b>C</b></span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row">--}}
                    {{--<div class="col-sm-4">--}}
                        {{--<div class="weather-icon">--}}
                          {{--<span>--}}
                                              {{--<canvas height="84" width="84" id="{{$hdurum->hadiseGun1}}"></canvas>--}}
                                          {{--</span>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-8">--}}
                        {{--<div class="weather-text">--}}
                            {{--<h2>İstanbul--}}
                                {{--<br><i>Partly Cloudy Day</i>--}}
                            {{--</h2>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-12">--}}
                    {{--<div class="weather-text pull-right">--}}
                        {{--<h3 class="degrees">23</h3>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}


                {{--<div class="row weather-days">--}}
                    {{--<div class="col-sm-2">--}}
                        {{--<div class="daily-weather">--}}
                            {{--<h2 class="day">Pzt</h2>--}}
                            {{--<h3 class="degrees">{{$hdurum->enDusukGun1}}-{{$hdurum->enYuksekGun1}}</h3>--}}
                            {{--<span>--}}
                                                  {{--<canvas id="{{$hdurum->hadiseGun1}}" width="32" height="32">--}}
                                                  {{--</canvas>--}}

                                          {{--</span>--}}
                            {{--<h5>15--}}
                                {{--<i>km/h</i>--}}
                            {{--</h5>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-2">--}}
                        {{--<div class="daily-weather">--}}
                            {{--<h2 class="day">Sal</h2>--}}
                            {{--<h3 class="degrees">{{$hdurum->enDusukGun2}}-{{$hdurum->enYuksekGun2}}</h3>--}}
                            {{--<canvas height="32" width="32" id="{{$hdurum->hadiseGun2}}"></canvas>--}}
                            {{--<h5>12--}}
                                {{--<i>km/h</i>--}}
                            {{--</h5>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-2">--}}
                        {{--<div class="daily-weather">--}}
                            {{--<h2 class="day">Çar</h2>--}}
                            {{--<h3 class="degrees">{{$hdurum->enDusukGun3}}-{{$hdurum->enYuksekGun3}}</h3>--}}
                            {{--<canvas height="32" width="32" id="snow"></canvas>--}}
                            {{--<h5>14--}}
                                {{--<i>km/h</i>--}}
                            {{--</h5>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-2">--}}
                        {{--<div class="daily-weather">--}}
                            {{--<h2 class="day">Per</h2>--}}
                            {{--<h3 class="degrees">{{$hdurum->enDusukGun4}}-{{$hdurum->enYuksekGun4}}</h3>--}}
                            {{--<canvas height="32" width="32" id="sleet"></canvas>--}}
                            {{--<h5>15--}}
                                {{--<i>km/h</i>--}}
                            {{--</h5>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-2">--}}
                        {{--<div class="daily-weather">--}}
                            {{--<h2 class="day">Cum</h2>--}}
                            {{--<h3 class="degrees">{{$hdurum->enDusukGun5}}-{{$hdurum->enYuksekGun5}}</h3>--}}
                            {{--<canvas height="32" width="32" id="wind"></canvas>--}}
                            {{--<h5>11--}}
                                {{--<i>km/h</i>--}}
                            {{--</h5>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="clearfix"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
                {{--@endforeach--}}
        </div>
        {{--<img src="http://www.mgm.gov.tr/sunum/sondurum-show-2.aspx?m=ISTANBUL&rC=111&rZ=fff" style="width:140px; height:100px;" alt="ANKARA" />--}}
        {{--<img src="http://www.mgm.gov.tr/sunum/tahmin-show-2.aspx?m=ISTANBUL&basla=1&bitir=5&rC=111&rZ=fff" style="width:400px; height:100px;" alt="ANKARA" />--}}
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
    <!-- /footer content -->


    {{--"A": "Açık";--}}
    {{--"AB": "Az Bulutlu";--}}
    {{--"PB": "Parçalı Bulutlu";--}}
    {{--"CB": "Çok Bulutlu";--}}
    {{--"HY": "Hafif Yağmurlu";--}}
    {{--"Y": "Yağmurlu";--}}
    {{--"KY": "Kuvvetli Yağmurlu";--}}
    {{--"KKY": "Karla Karışık Yağmurlu";--}}
    {{--"HKY": "Hafif Kar Yağışlı";--}}
    {{--"K": "Kar Yağışlı";--}}
    {{--"YKY": "Yoğun Kar Yağışlı";--}}
    {{--"HSY": "Hafif Sağanak Yağışlı";--}}
    {{--"SY": "Sağanak Yağışlı";--}}
    {{--"KSY": "Kuvvetli Sağanak Yağışlı";--}}
    {{--"MSY": "Mevzi Sağanak Yağışlı";--}}
    {{--"DY": "Dolu";--}}
    {{--"GSY": "Gökgürültülü Sağanak Yağışlı";--}}
    {{--"KGY": "Kuvvetli Gökgürültülü Sağanak Yağışlı";--}}
    {{--"SIS": "Sisli";--}}
    {{--"PUS": "Puslu";--}}
    {{--"DMN": "Dumanlı";--}}
    {{--"KF": "Toz veya Kum Fırtınası";--}}
    {{--"R": "Rüzgarlı";--}}
    {{--"GKR": "Güneyli Kuvvetli Rüzgar";--}}
    {{--"KKR": "Kuzeyli Kuvvetli Rüzgar";--}}
    {{--"SCK": "Sıcak";--}}
    {{--"SGK": "Soğuk";--}}
    {{--"HHY": "Yağışlı";--}}
@endsection
@section('content_script')
    <script>
        var icons = new Skycons({"color": "#73879C"});
            icons.add("A", Skycons.CLEAR_DAY);
        icons.add("AB","PB","SCK","SGK","KKY", Skycons.PARTLY_CLOUDY_DAY);
        icons.add("CB", Skycons.CLOUDY);
        icons.add("HY","Y","KY","HSY","SY","KSY","MSY","DY","GSY","KGY","HHY", Skycons.RAIN);
        icons.add("HKY","K","YKY", Skycons.SNOW);
        icons.add("KF","R","GKR","KKR", Skycons.WIND);








//            list = [
//                "clear-day", "clear-night", "partly-cloudy-day",
//                "partly-cloudy-night", "cloudy", "rain", "sleet", "K", "wind",
//                "fog"
//            ],
//            i;
//
//        for (i = list.length; i--;)
//            icons.set(list[i], list[i]);

        icons.play();
    </script>


{{--<script>--}}
    {{--var skycons = new Skycons({"color": "pink"});--}}
    {{--// on Android, a nasty hack is needed: {"resizeClear": true}--}}

    {{--// you can add a canvas by it's ID...--}}
    {{--skycons.add("ibo", Skycons.PARTLY_CLOUDY_DAY);--}}

    {{--// ...or by the canvas DOM element itself.--}}
    {{--skycons.add(document.getElementById("icon2"), Skycons.RAIN);--}}

    {{--// if you're using the Forecast API, you can also supply--}}
    {{--// strings: "partly-cloudy-day" or "rain".--}}

    {{--// start animation!--}}
    {{--skycons.play();--}}

    {{--// you can also halt animation with skycons.pause()--}}

    {{--// want to change the icon? no problem:--}}
    {{--skycons.set("icon1", Skycons.PARTLY_CLOUDY_NIGHT);--}}

    {{--// want to remove one altogether? no problem:--}}
    {{--skycons.remove("icon2");--}}
{{--</script>--}}
    @endsection