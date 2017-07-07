<header id="header">
    <div class="header__main">
        <div class="container">
            <ul class="sign">
                <li class="{{Request::is('/login')?"active":""}}"> <a href="/login"><img src="img/icons/login.png" alt=""> Sign In</a> </li>
            </ul>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12"><a class="logo" href="index.html">
                        <div class="logo__text"> <img src="img/logo.jpg" alt=""> </div>
                    </a></div>
                <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                    <!--<div class="htext m-t-30"> The International <span class="mdc-text-red">Omra</span> Agency</div>-->
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <ul class="navigation">
                        <li class="visible-xs visible-sm"><a class="navigation__close" data-rmd-action="navigation-close" href=""><i class="zmdi zmdi-long-arrow-right"></i></a>
                        </li>
                            <li class="{{Request::is('/')?"active":""}}">
                                <a href="/">Home</a>
                            </li>

                            <li class="{{Request::is('/hotels')?"active":""}}">
                                 <a href="/hotels">Hotels</a>
                            </li>

                            <li class="{{Request::is('/login')?"active":""}}">
                                 <a href="/travelagents">Travel Agencies</a>
                            </li>
                    </ul>
                    <div class="navigation-trigger visible-xs visible-sm" data-rmd-action="block-open" data-rmd-target=".navigation"> <i class="zmdi zmdi-menu"></i> </div>
                </div>
            </div>
        </div>
    </div>
</header>