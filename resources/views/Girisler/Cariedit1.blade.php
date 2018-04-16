@extends('layouts.blank')
@push('stylesheets')
@endpush
@section('main_container')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <head>

        <script src="//code.jquery.com/jquery.js"></script>
        <link href="{{ asset("css/site.css") }}" rel="stylesheet">
        <!-- DataTables -->
        <!-- Bootstrap JavaScript -->
        <!-- App scripts -->

        <!-- Bootstrap CSS -->

    </head>


    <!-- /page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Banka Detayı </h2>
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
                                <form  action="{{action('Controller@bankakaydet')}}" method="POST"  novalidate>
                                    {{ csrf_field() }}

                                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Home</a>
                                            </li>
                                            <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Profile</a>

                                        </ul>
                                        <div id="myTabContent" class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                                <div class="row">
                                                    <div class="col-md-6">



                                                        {{--textbox başlangıç--}}

                                                        <div class="form-group ">
                                                            <label for="name">Banka Adı </label>
                                                            <input  name="bankad"  value="" class="form-control has-feedback-left"  >
                                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                                        </div> <!-- /.form-group -->

                                                        <div class="form-group">
                                                            <label for="email">E-Posta</label>
                                                            <input type="email" name="email" id="email" value="" class="form-control" minlength="3" maxlength="100">
                                                        </div> <!-- /.form-group -->

                                                        <div class="row">
                                                            <div class="col-xs-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label for="gsm">Cep Telefonu</label>
                                                                    <input type="tel" name="gsm" id="gsm" value="" class="form-control required digits" minlength="10" maxlength="11" aria-required="true">
                                                                </div> <!-- /.form-group -->
                                                            </div> <!-- /.col-md-6 -->
                                                            <div class="col-xs-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label for="phone">Sabit Telefon</label>
                                                                    <input type="tel" name="phone" id="phone" value="" class="form-control digits" minlength="10" maxlength="11">
                                                                </div> <!-- /.form-group -->
                                                            </div> <!-- /.col-md-6 -->
                                                        </div> <!-- /.row -->

                                                    </div> <!-- /.col-md-6 -->
                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label for="address">Adres</label>
                                                            <input type="text" name="cadres1" id="cadres1" value="" class="form-control" minlength="3" maxlength="255">
                                                        </div> <!-- /.form-group -->

                                                        <div class="row">
                                                            <div class="col-xs-6 col-md-4">
                                                                <div class="form-group">
                                                                    <label for="district">İlçe-Bölge</label>
                                                                    <input type="text" name="district" id="district" value="" class="form-control" minlength="3" maxlength="20">
                                                                </div> <!-- /.form-group -->
                                                            </div> <!-- /.col -->
                                                            <div class="col-xs-6 col-md-4">
                                                                <div class="form-group">
                                                                    <label for="city">Şehir-İl</label>
                                                                    <input type="text" name="city" id="city" value="" class="form-control" minlength="3" maxlength="20">
                                                                </div> <!-- /.form-group -->
                                                            </div> <!-- /.col -->

                                                        </div> <!-- /.row -->

                                                        <div class="row">
                                                            <div class="col-xs-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label for="tax_home">Vergi Dairesi</label>
                                                                    <input type="text" name="tax_home" id="tax_home" value="" class="form-control" minlength="3" maxlength="20">
                                                                </div> <!-- /.form-group -->
                                                            </div> <!-- /.col-md-4 -->
                                                            <div class="col-xs-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label for="tax_no">Vergi No/T.C. No</label>
                                                                    <input type="tel" name="tax_no" id="tax_no" value="" class="form-control digits" minlength="10" maxlength="11">
                                                                </div> <!-- /.form-group -->
                                                            </div> <!-- /.col-md-4 -->
                                                        </div> <!-- /.row -->

                                                    </div> <!-- /.col-md-6 -->

                                                </div> <!-- /.row -->

                                                <div class="h-20"></div>

                                                <div class="clearfix"></div>



                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">





                                                <div class="col-md-6">
                                                    <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" aria-expanded="false">Default <span class="caret"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="h-20"></div>

                                    <div class="clearfix"></div>


                                    <div class="text-right">
                                        <input type="hidden" name="add">
                                        <input type="hidden" name="uniquetime" value="1501281025.82">
                                        <button  class="btn btn-success btn-insert btn-xs-block"   type="submit" value="Kaydet" ><i class="fa fa-plus-square"></i></button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Cari Hesap Listesi </h2>
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
                                        $('#banka').DataTable({
                                            processing: true
                                        });
                                    });


                                </script>

                                <div class="table-responsive">
                                    <table class="table table-striped" id="banka">
                                        <thead>
                                        <tr class="headings">
                                            <th class="column-title">Invoice Date </th>
                                            <th>Güncelle</th>
                                            <th>Sil</th>

                                            </th>
                                            <!-- <th class="bulk-actions" colspan="7">
                                                 <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                             </th> -->
                                        </tr>

                                        </thead>
                                        <tbody>
                                        @foreach($banka as $post)
                                            <tr>
                                                <td>{{$post->bankad}}</td>

                                                <td><a href="banka/edit/{{$post->baid}}" class="btn btn-warning">Edit</a></td>

                                                <td><a href="banka/sil/baid={{$post->baid}}"  aria-label="Delete"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a></td>
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
    </div>
    <!-- footer content -->
    <footer>
        <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
    </footer>
@endsection

