@extends('layouts.blank')
@push('stylesheets')
@endpush
@section('main_container')

    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="//code.jquery.com/jquery.js"></script>
        <link href="{{ asset("css/site.css") }}" rel="stylesheet">
        <!-- DataTables -->
        <!-- Bootstrap JavaScript -->
        <!-- App scripts -->

        <!-- Bootstrap CSS -->

    </head>


    <!-- /page content -->




    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Şablon Listesi </h2>
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
                        <div  class="clearfix"></div>
                        <div class="x_content" style="margin-top:15px">
                            <div id="yeni" class="text-right addd">
                                <input type="hidden" name="add">
                                <input type="hidden" name="uniquetime" value="1501288025.81">
                                <button  class="btn btn-success btn-insert btn-xs-block add"   type="button" ><i class="fa fa-plus-square"></i>Yeni Ekle</button>
                            </div>







                        </div>
                    </div>
                </div>

            </div>
        </div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Şablon Listesi </h2>
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
                            <div class="x_content" style="margin-top:15px">
                                {{--<script>--}}
                                {{--$(function () {--}}
                                {{--$('#firma').DataTable({--}}
                                {{--serverSide: true,--}}
                                {{--processing: true,--}}
                                {{--ajax: '/Cari/getCarilist'--}}
                                {{--//  columns: [--}}
                                {{--//                                                {data: 'cunvan', name: 'cunvan'},--}}
                                {{--//                                                {data: 'cadres1', name: 'cadres1'},--}}
                                {{--//                                                {data: 'action', name: 'action', orderable: false, searchable: false}--}}
                                {{--//   ]--}}
                                {{--});--}}
                                {{--});--}}
                                {{--</script>--}}
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $('#sablonlist').DataTable({
                                            processing: true
                                        });
                                    });


                                </script>

                                <div class="table-responsive">
                                    <table class="table table-striped" id="sablonlist">
                                        <thead>
                                        <tr class="headings">
                                            <th class="column-title">Şablon Adı </th>
                                            <th class="column-title">Şablon Türü </th>
                                            <th>Güncelle</th>
                                            <th>Sil</th>

                                            </th>
                                            <!-- <th class="bulk-actions" colspan="7">
                                                 <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                             </th> -->
                                        </tr>

                                        </thead>
                                        <tbody>
                                        @foreach($sablon as $ppost )
                                            <tr>
                                                <td > <a href="design/edit/{{$ppost->sbladid}}">{{$ppost->sblad}}</a></td>
                                                <td > <a >{{$ppost->sblturuad}}</a></td>
                                                <td><a href="design/edit/{{$ppost->sbladid}}" ><i class="fa fa-edit fa-2x"></i></a></td>

                                                <td><a href="banka/sil/"  aria-label="Delete"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a></td>
                                                {{--<td><a href="Cari/sil/fid={{$post->baid}}" class="btn btn-danger">Delete</a></td>--}}
                                                {{--<a href="{!! route('/cari, $id')!!}" class="btn btn-danger">Delete</a>--}}
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{--if($form = get_form(@$_GET['id']))--}}
                                {{--{--}}

                                {{--} else {--}}
                                {{--$form = new StdClass;--}}
                                {{--}--}}




                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
    <!-- footer content -->
    <footer>
        <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
    </footer>
    <script>
        $('#yeni').on('click', '.add', function() {
            window.location.href = "{{URL::to('/design')}}";


        });
        $(":input").keyup(function(){
            this.value = this.value.toUpperCase();
        });
    </script>
@endsection

