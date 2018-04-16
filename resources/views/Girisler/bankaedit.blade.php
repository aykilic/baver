@extends('layouts.blank')
@push('stylesheets')
@endpush
@section('main_container')

    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <!-- App scripts -->

        <!-- Bootstrap CSS -->


    </head>

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Form Elements</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Cari Hesap Detayı </h2>
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
                                <form  action="{{ action('Controller@bankaupdate', $sdf->baid) }}"  method="POST"  novalidate="novalidate">
                                    {{ csrf_field() }}
                                    <br />

                                    <div class="row">
                                        <div class="col-md-6">




                                            <div class="form-group">
                                                <label for="name">Hesap Adı </label>
                                                <input type="text" name="bankad" id="cunvan" value="{{$sdf->bankad}}" class="form-control"  >
                                            </div> <!-- /.form-group -->

                                            <div class="form-group">
                                                <label for="email">E-Posta</label>
                                                <input type="email" name="email" id="email" value="" class="form-control" >
                                            </div> <!-- /.form-group -->

                                            <div class="row">
                                                <div class="col-xs-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="gsm">Cep Telefonu</label>
                                                        <input type="tel" name="gsm" id="gsm" value="" class="form-control"  >
                                                    </div> <!-- /.form-group -->
                                                </div> <!-- /.col-md-6 -->
                                                <div class="col-xs-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone">Sabit Telefon</label>
                                                        <input type="tel" name="phone" id="phone" value="" class="form-control" >
                                                    </div> <!-- /.form-group -->
                                                </div> <!-- /.col-md-6 -->
                                            </div> <!-- /.row -->

                                        </div> <!-- /.col-md-6 -->
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="address">Adres</label>
                                                <input type="text" name="cadres1" id="cadres1" value="" class="form-control" >
                                            </div> <!-- /.form-group -->

                                            <div class="row">
                                                <div class="col-xs-6 col-md-4">
                                                    <div class="form-group">
                                                        <label for="district">İlçe-Bölge</label>
                                                        <input type="text" name="district" id="district" value="" class="form-control" >
                                                    </div> <!-- /.form-group -->
                                                </div> <!-- /.col -->
                                                <div class="col-xs-6 col-md-4">
                                                    <div class="form-group">
                                                        <label for="city">Şehir-İl</label>
                                                        <input type="text" name="city" id="city" value="" class="form-control" >
                                                    </div> <!-- /.form-group -->
                                                </div> <!-- /.col -->

                                            </div> <!-- /.row -->

                                            <div class="row">
                                                <div class="col-xs-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="tax_home">Vergi Dairesi</label>
                                                        <input type="text" name="tax_home" id="tax_home" value="" class="form-control" >
                                                    </div> <!-- /.form-group -->
                                                </div> <!-- /.col-md-4 -->
                                                <div class="col-xs-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="tax_no">Vergi No/T.C. No</label>
                                                        <input type="tel" name="tax_no" id="tax_no" value="" class="form-control " >
                                                    </div> <!-- /.form-group -->
                                                </div> <!-- /.col-md-4 -->
                                            </div> <!-- /.row -->

                                        </div> <!-- /.col-md-6 -->

                                    </div> <!-- /.row -->

                                    <div class="h-20"></div>

                                    <div class="clearfix"></div>


                                    <div class="text-right">
                                        <input type="hidden" name="add">
                                        <input type="hidden" name="uniquetime" value="1501288025.81">
                                        <button  class="btn btn-success btn-insert btn-xs-block"   type="submit" ><i class="fa fa-plus-square"></i></button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


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
<script>
    $(":input").keyup(function(){
        this.value = this.value.toUpperCase();
    });
</script>
@endsection
