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
    <div class="right_col" role="main">
        <div class="">
            <div clas="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Sipariş Fişi Detayı </h2>
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
                                <form id="formkaydet"  method="post" >
                                    {{csrf_field()}}



                                    <br />
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-2">



                                            {{--textbox başlangıç--}}

                                            <div class="form-group item">
                                                <label for="tar">Tarih</label>
                                                <input type="text" name="tar" id="tarih" class="form-control has-feedback-left" data-inputmask="'mask': '99-99-9999'"  aria-describedby="inputSuccess2Status2">
                                                <span class="fa fa-calendar-o form-control-feedback left"  aria-hidden="true"></span>
                                                <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                                            </div> <!-- /.form-group -->

                                            <div class="form-group">
                                                <label for="fisno">Fiş No</label>
                                                <input type="text" name="sfisno" id="sfisno" value="" class="form-control" >
                                            </div> <!-- /.form-group -->

                                            <div class="form-group">


                                                    <label for="tax_no"  name="lbanka">Fis Turu</label>

                                                    <select data-toggle="dropdown" id="fisturu" class="form-control" name="fisturu" aria-expanded="false"  ><span class="caret"></span>
                                                        <option >Seciniz</option>
                                                        @foreach($fistur as $key => $fisturuad)
                                                            <option  value="{{ $key }}">{{ $fisturuad }}</option>
                                                        @endforeach
                                                    </select>

                                            </div> <!-- /.form-group -->
                                            <div class="row">
                                                <div class="col-xs-6 col-md-6">

                                                </div> <!-- /.col -->
                                                <div class="col-xs-6 col-md-6">
                                                </div> <!-- /.col -->

                                            </div> <!-- /.row -->
                                        </div> <!-- /.col-md-6 -->
                                        <div class="col-md-4">

                                            <div class="form-group">

                                                <label for="address">Hesap</label>
                                                <input type="hidden" name="fisfid" id="fisfid" value="" class="form-control " >
                                                <input type="text" name="fisfad" id="fisfad" value="" class="form-control has-feedback-left typeahead" >
                                                <span class="fa fa-search form-control-feedback left" ></span>
                                            </div> <!-- /.form-group -->

                                            <div class="row">
                                                <div class="col-xs-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="district">İlçe-Bölge</label>
                                                        <input type="text" name="dilce" id="dilce" value="" class="form-control">
                                                    </div> <!-- /.form-group -->
                                                </div> <!-- /.col -->
                                                <div class="col-xs-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="city">Şehir-İl</label>
                                                        <input type="text" name="dil" id="dil" value="" class="form-control" >
                                                    </div> <!-- /.form-group -->
                                                </div> <!-- /.col -->

                                            </div> <!-- /.row -->

                                            <div class="row">
                                                <div class="col-xs-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="tax_home">Vergi Dairesi</label>
                                                        <input type="text" name="dvad" id="dvad" value="" class="form-control">
                                                    </div> <!-- /.form-group -->
                                                </div> <!-- /.col-md-4 -->
                                                <div class="col-xs-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="tax_no">Vergi No/T.C. No</label>
                                                        <input type="text" name="dvdno" id="dvdno" value="" class="form-control " >
                                                    </div> <!-- /.form-group -->
                                                </div> <!-- /.col-md-4 -->
                                            </div> <!-- /.row -->

                                        </div> <!-- /.col-md-6 -->

                                    </div>

                                    <div class="h-20"></div>

                                    <div class="clearfix"></div>


                                    <div class="text-right">
                                        <input type="hidden" name="add">
                                        <input type="hidden" name="uniquetime" value="1501288025.81">
                                        <button  class="btn btn-success btn-insert btn-xs-block add"   type="button" ><i class="fa fa-plus-square"></i>Kaydet</button>
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
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
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

    {{--<script src="{{ asset("js/bootstrap3-typhead.js") }}"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>--}}
    <script type="text/javascript">
        $(document).ready(function() {
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
//



            //FirstName Search Engine
            var search = new Bloodhound({
                datumTokenizer: function(datum) {
                    return Bloodhound.tokenizers.whitespace(datum.value);
                },
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                prefetch: {
                    url: "/",
                    transform: function(response) {
                        return $.map(response, function(firma) {
                            return { value: firma.cunvan,
                                     id:    firma.fid
                            };
                        });
                    }
                },
                remote: {
                    wildcard: '%QUERY',
                    url: "find/%QUERY",
                    transform: function(response) {
                        return $.map(response, function(firma) {
                            return { value: firma.cunvan,
                                    id: firma.fid
                            };
                        });
                    }
                }
            });

            $('.typeahead').typeahead({


                    hint: true,
                    highlight: true,
                    minLength: 2,
                    limit: 10
                },
                {
                    id: 'fid',
                    display: 'value',
                    source: search,
                    templates: {
                        //header: '<h4 class="dropdown">Restaurants</h4>'
                    },

            }).on("typeahead:selected", function(obj, datum) {

                $("#fisfid").val(datum.id);
            });
            //deneme
//            var substringMatcher = function(strs) {
//                return function findMatches(q, cb) {
//                    var matches, substrRegex;
//
//                    // an array that will be populated with substring matches
//                    matches = [];
//
//                    // regex used to determine if a string contains the substring `q`
//                    substrRegex = new RegExp(q, 'i');
//
//                    // iterate through the pool of strings and for any string that
//                    // contains the substring `q`, add it to the `matches` array
//                    $.each(strs, function(i, str) {
//                        if (substrRegex.test(str)) {
//                            // the typeahead jQuery plugin expects suggestions to a
//                            // JavaScript object, refer to typeahead docs for more info
//                            matches.push({ value: str });
//                        }
//                    });
//
//                    cb(matches);
//                };
//            };
//
//            var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
//                'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
//                'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
//                'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
//                'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
//                'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
//                'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
//                'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
//                'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
//            ];
//
//            $('#fisfad').typeahead({
//                    hint: true,
//                    highlight: true,
//                    minLength: 1
//                },
//                {
//                    name: 'states',
//                    displayKey: 'value',
//                    source: substringMatcher(states)
//                });





            //

//            $("#fisfad").autocomplete({
//                source : '/autocompletefirma',
//                minLenght:1,
//                autoFocus:true,
//                select:function(e, ui){
//                    $('#fisfid').val(ui.item.id);
//
//                }
//            });

            // Auto Complate /////////////
//            $('input#fisfad').typeahead({
//                autoFocus:true,
//                source:  function (query, process) {
//                    return $.get("/autocompletefirma", { query: query }, function (data) {
//
//                        return process(data);
//
//                    });
//                },
//                afterSelect: function(data) {
//                    console.log(data);
//                    $("#fisfid").val(data.fid);
//
//                }
//            });

            // Auto Complate /////////////




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




//
//            $(":input").keyup(function(){
//    this.value = this.value.toUpperCase();
//    });



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