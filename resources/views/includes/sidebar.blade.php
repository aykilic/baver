<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="/deneme" class="site_title"><i class="fa fa-paw"></i> <span>Yusuf Sina Aykılıç</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img  src="{{ asset("images/img.jpg") }}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Hoşgeldiniz</span>
                <h2>Mehmet Selim Aykılıç</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Genel</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Anasayfa <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">




                            <li><a href="/depo">Depo</a></li>

                        </ul>
                    </li>
                    <li><a><i class="fa fa-group"></i> Cari Hesap <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/Cari">Cari Hesaplar</a></li>
                            <li><a>Cari Hesap Fişleri <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li ><a href="/makbuz/2">Tahsilat Fişi</a>
                                    </li>
                                    <li><a href="/makbuz/1">Ödeme - Tediye Fişi</a>
                                    </li>
                                    <li><a href="">Devir Fişi</a>
                                    </li>
                                </ul>



                            </li>
                        </ul>

                    </li>
                    <li><a><i class="fa fa-edit"></i> Formlar <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">

                            {{--alissiparisfisi--}}

                            <li><a>Alış <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li class="sub_menu"><a href="/siparisfisleri/2">Alış Sipariş Fişi</a>
                                    </li>
                                    <li><a href="/irsaliyelist/4">Alış İrsaliye Fişi</a>
                                    </li>
                                    <li><a href="/faturalist/6">Alış Faturası</a>
                                    </li>
                                </ul>



                            </li>
                            <li><a>Satış <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li class="sub_menu"><a href="/siparisfisleri/1">Satış Sipariş Fişi</a>
                                    </li>
                                    <li><a href="/irsaliyelist/3">Satış İrsaliye Fişi</a>
                                    </li>
                                    <li><a href="/faturalist/5">Satış Faturası</a>
                                    </li>
                                </ul>

                            </li>

                            <li><a href="form_buttons.html">Form Buttons</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-barcode"></i> Stok <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">

                            <li><a href="/Stok">Stok</a></li>
                            <li><a href="/stokturu">Stok Türü</a></li>
                            <li><a href="">Stok Devir</a></li>

                        </ul>
                    </li>
                    <li><a><i class="fa fa-cc-amex"></i> Çek ve Senet <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">

                            <li><a href="/Cekler">Cekler</a></li>



                        </ul>
                    </li>
                    <li><a><i class="fa fa-bank"></i> Banka <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">

                            <li><a href="/Banka">Banka</a></li>


                        </ul>
                    </li>


                </ul>
            </div>
            <div class="menu_section">
                <h3>Ayarlar</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-bug"></i> Genel Ayarlar <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/birim">Birim</a></li>
                            <li><a href="/doviz">Döviz</a></li>
                            <li><a href="/depo">Depo</a></li>
                            <li><a href="/numarala">Numaralandırma</a></li>
                            <li><a href="/sablon">Şablon</a></li>
                        </ul>
                    </li>


                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
