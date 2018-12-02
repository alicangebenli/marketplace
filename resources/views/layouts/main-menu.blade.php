<!-- start .mainmenu_area -->
<div class="mainmenu">
    <!-- start .container -->
    <div class="container">
        <!-- start .row-->
        <div class="row">
            <!-- start .col-md-12 -->
            <div class="col-md-12">
                    {{--<div class="navbar-header">--}}
                        {{--<!-- start mainmenu__search -->--}}
                        {{--<div class="mainmenu__search">--}}
                            {{--<form action="#">--}}
                                {{--<div class="searc-wrap">--}}
                                    {{--<input type="text" placeholder="Ara...">--}}
                                    {{--<button type="submit" class="search-wrap__btn">--}}
                                        {{--<span class="lnr lnr-magnifier"></span>--}}
                                    {{--</button>--}}
                                {{--</div>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                        {{--<!-- start mainmenu__search -->--}}
                    {{--</div>--}}

                <nav class="navbar navbar-expand-md navbar-light mainmenu__menu">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">

                            <li>
                                <a href="{{ route('home') }}">Anasayfa</a>
                            </li>
                            @if(isset($pages))
                                @foreach($pages as $row)
                                    <li>
                                        <a href="{{ base_url() }}">{{ $row->page_title }}</a>
                                    </li>
                                @endforeach
                            @endif

                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row-->
    </div>
    <!-- start .container -->
</div>
<!-- end /.mainmenu-->