<!--================================
    START FILTER AREA
=================================-->
<div class="filter-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="filter-bar text-center">
                    <div class="filter__option filter--select">
                        <div class="select-wrap">
                            <select name="category">
                                <option value="">Kategoriler</option>
                                <option value="low">Wordpress</option>
                                <option value="high">Haberler</option>
                            </select>
                            <span class="lnr lnr-chevron-down"></span>
                        </div>
                    </div>




                    <div class="filter__option filter--select">
                        <div class="select-wrap">
                            <select name="price">
                                <option value="low">Fiyat : Düşükten Yükseğe</option>
                                <option value="high">Fiyat : Yüksekten Düşüğe</option>
                            </select>
                            <span class="lnr lnr-chevron-down"></span>
                        </div>
                    </div>
                    <!-- end /.filter__option -->

                    <div class="filter__option filter--select">
                        <div class="select-wrap">
                            <select name="price">
                                <option value="12">Sayfada 12 Ürün</option>
                                <option value="15">Sayfada 15 Ürün</option>
                                <option value="25">Sayfada 25 Ürün</option>
                            </select>
                            <span class="lnr lnr-chevron-down"></span>
                        </div>
                    </div>
                    <!-- end /.filter__option -->

                    <div class="filter__option filter--layout">
                        <a href="all-products.html">
                            <div class="svg-icon">
                                <img class="svg" src="{{ asset('home-theme')}}/images/svg/grid.svg" alt="it's just a layout control folks!">
                            </div>
                        </a>
                        <a href="all-products-list.html">
                            <div class="svg-icon">
                                <img class="svg" src="{{ asset('home-theme') }}/images/svg/list.svg" alt="it's just a layout control folks!">
                            </div>
                        </a>
                    </div>
                    <!-- end /.filter__option -->
                </div>
                <!-- end /.filter-bar -->
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end filter-bar -->
    </div>
</div>
<!-- end /.filter-area -->
<!--================================
    END FILTER AREA
=================================-->

