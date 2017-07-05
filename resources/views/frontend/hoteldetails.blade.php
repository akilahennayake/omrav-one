@extends('main')
@section('title','Hotel Details')
    @section('content')
        <section class="section">
            <div class="container">
                @include('partials._search')
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="detail-media">
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active light-gallery" id="detail-media-images"> <a href="img/demo/listing/16.jpg"> <img src="img/demo/listing/16.jpg" alt=""> </a> <a href="img/demo/listing/1.jpg"> <img src="img/demo/listing/thumbs/1.jpg" alt=""> </a> <a href="img/demo/listing/2.jpg"> <img src="img/demo/listing/thumbs/2.jpg" alt=""> </a> <a href="img/demo/listing/3.jpg"> <img src="img/demo/listing/thumbs/3.jpg" alt=""> </a> <a href="img/demo/listing/4.jpg"> <img src="img/demo/listing/thumbs/4.jpg" alt=""> </a> </div>
                                            <div class="tab-pane fade light-gallery" id="detail-media-floorplan"> <a href="img/demo/floor-plan.png"> <img src="img/demo/floor-plan.png" alt=""> </a> </div>
                                            <div class="tab-pane fade" id="detail-media-map">
                                                <div id="listing-map" style="position: relative; overflow: hidden;">
                                                    <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                                        <div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                                            <div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;">
                                                                <div style="z-index: 1; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
                                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                            <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                                                <div style="width: 256px; height: 256px; position: absolute; left: -64px; top: -114px;"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                                                            <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -64px; top: -114px;">
                                                                                    <canvas draggable="false" height="256" width="256" style="user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div style="position: absolute; z-index: 0; left: 0px; top: 0px;">
                                                                        <div style="overflow: hidden;"></div>
                                                                    </div>
                                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                        <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"></div>
                                                                    </div>
                                                                </div>
                                                                <div style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div>
                                                                <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;">
                                                                    <div style="z-index: 1; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div>
                                                                </div>
                                                                <div style="z-index: 4; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
                                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div>
                                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                                                </div>
                                                            </div>
                                                            <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=40.735239,-73.89131&amp;z=15&amp;t=m&amp;hl=en-GB&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps" style="position: static; overflow: visible; float: none; display: inline;">
                                                                    <div style="width: 66px; height: 26px; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/google_white5.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div>
                                                                </a></div>
                                                            <div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 0px; height: 0px; position: absolute; left: 5px; top: 5px;">
                                                                <div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div>
                                                                <div style="font-size: 13px;"></div>
                                                                <div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                            </div>
                                                            <div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 0px; bottom: 0px; width: 12px;">
                                                                <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;">
                                                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                        <div style="width: 1px;"></div>
                                                                        <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                                    </div>
                                                                    <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map Data</a><span style="display: none;"></span></div>
                                                                </div>
                                                            </div>
                                                            <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
                                                                <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);"></div>
                                                            </div>
                                                            <div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                                                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                    <div style="width: 1px;"></div>
                                                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                                </div>
                                                                <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en-GB_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div>
                                                            </div>
                                                            <div style="cursor: pointer; width: 25px; height: 25px; overflow: hidden; display: none; margin: 10px 14px; position: absolute; top: 0px; right: 0px;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/sv9.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div>
                                                            <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; display: none; position: absolute; right: 0px; bottom: 0px;">
                                                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                    <div style="width: 1px;"></div>
                                                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                                </div>
                                                                <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Report errors in the road map or imagery to Google" href="https://www.google.com/maps/@40.7352391,-73.8913099,15z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report a map error</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="detail-media__nav hidden-print">
                                            <li class="active"><a href="#detail-media-images" data-toggle="tab"><i class="zmdi zmdi-collection-image"></i></a></li>
                                            <li><a href="#detail-media-floorplan" data-toggle="tab"><i class="zmdi zmdi-view-dashboard"></i></a></li>
                                            <li><a href="#detail-media-map" data-toggle="tab"><i class="zmdi zmdi-map"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="detail-info">
                                        <div class="detail-info__header clearfix"> <strong>$1,175,000</strong> <small>Est. Mortgage: $5,328/month</small> <span>For Sale</span> </div>
                                        <ul class="detail-info__list clearfix">
                                            <li> <span>Ownership Type</span> <span>Villa</span> </li>
                                            <li> <span>Property Area</span> <span>2435+ sqft</span> </li>
                                            <li> <span>Garages</span> <span>04</span> </li>
                                            <li> <span>Floors</span> <span>03</span> </li>
                                            <li> <span>Bedrooms</span> <span>06</span> </li>
                                            <li> <span>Bathrooms</span> <span>06</span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card detail-amenities">
                                    <div class="card__header">
                                        <h2>Amenities</h2>
                                        <small>Maecenas seddiam eget risus varius blandit sitamet nonmagna</small> </div>
                                    <div class="card__body">
                                        <ul class="detail-amenities__list">
                                            <li class="mdc-bg-red-300"> <i class="fa fa-smile-o fa-2x" aria-hidden="true"></i> Full-Time Doorman</li>
                                            <li class="mdc-bg-purple-300"> <i class="fa fa-mixcloud fa-2x" aria-hidden="true"></i> River Views</li>
                                            <li class="mdc-bg-pink-300"> <i class="fa fa-home fa-2x" aria-hidden="true"></i> Common Roof Deck</li>
                                            <li class="mdc-bg-light-blue-500"> <i class="fa fa-building fa-2x" aria-hidden="true"></i> City Views</li>
                                            <li class="mdc-bg-amber-400"> <i class="fa fa-male fa-2x" aria-hidden="true"></i> Gym</li>
                                            <li class="mdc-bg-teal-400"> <i class="fa fa-window-maximize fa-2x" aria-hidden="true"></i> Sauna</li>
                                            <li class="mdc-bg-light-green-500"> <i class="fa fa-folder-open fa-2x" aria-hidden="true"></i> Open Views</li>
                                            <li class="mdc-bg-brown-400"> <i class="fa fa-futbol-o fa-2x" aria-hidden="true"></i> Basketball Court </li>
                                            <li class="mdc-bg-blue-grey-400"> <i class="fa fa-street-view fa-2x" aria-hidden="true"></i> Pool</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card__header">
                                        <h2>Property Overview</h2>
                                    </div>
                                    <div class="card__body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                                        <p>Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vestibulum id ligula porta felis euismod semper. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card__header">
                                        <h2>Chart data</h2>
                                        <small>Donec ullamcorper nulla non metus auctor fringilla</small> </div>
                                    <div class="card__body">
                                        <div id="flot-chart--line" class="flot-chart"></div>
                                        <div class="flot-chart__legends"></div>
                                    </div>
                                </div>
                            </div>
                            <div id="inquire" class="col-md-4 rmd-sidebar-mobile">


                                <div class="card hidden-xs hidden-sm hidden-print">
                                    <div class="card__header">
                                        <h2>Agents representing</h2>
                                        <small>Etiam porta sem malesuada magna mollis</small>
                                    </div>
                                    <div class="list-group">
                                        <a class="list-group-item media" href="agent-detail.html">
                                            <div class="pull-left">
                                                <img src="img/demo/people/1.jpg" alt="" class="list-group__img img-circle" width="65" height="65">
                                            </div>
                                            <div class="media-body list-group__text">
                                                <strong>Sarah Zelermyer Diaz</strong>
                                                <small class="list-group__text">+1-202-555-0121</small>
                                                <div class="rmd-rate"></div>
                                            </div>
                                        </a>

                                        <a class="list-group-item media" href="agent-detail.html">
                                            <div class="pull-left">
                                                <img src="img/demo/people/3.jpg" alt="" class="list-group__img img-circle" width="65" height="65">
                                            </div>
                                            <div class="media-body list-group__text">
                                                <strong>Malinda Hollaway</strong>
                                                <small class="list-group__text">+1-202-555-0188</small>
                                                <span class="rmd-rate"></span>
                                            </div>
                                        </a>

                                        <div class="p-10"></div>
                                    </div>
                                </div>

                                <div class="card hidden-xs hidden-sm hidden-print">
                                    <div class="card__header">
                                        <h2>You may also like...</h2>
                                        <small>Morbi risus porta consectetur vestibulum ateros</small>
                                    </div>

                                    <div class="list-group">
                                        <a href="" class="list-group-item media">
                                            <div class="pull-left">
                                                <img src="img/demo/listing/thumbs/2.jpg" alt="" class="list-group__img" width="65">
                                            </div>
                                            <div class="media-body list-group__text">
                                                <strong>Vivamus sagittis lacus vel augue laoreet rutrum faucibus</strong>
                                                <small>$810,000 . 04 Beds . 03 Baths</small>
                                            </div>
                                        </a>

                                        <a href="" class="list-group-item media">
                                            <div class="pull-left">
                                                <img src="img/demo/listing/thumbs/3.jpg" alt="" class="list-group__img" width="65">
                                            </div>
                                            <div class="media-body list-group__text">
                                                <strong>Fusce dapibus tellusac cursus</strong>
                                                <small>$910,300 . 03 Beds . 02 Baths</small>
                                            </div>
                                        </a>

                                        <a href="" class="list-group-item media">
                                            <div class="pull-left">
                                                <img src="img/demo/listing/thumbs/4.jpg" alt="" class="list-group__img" width="65">
                                            </div>
                                            <div class="media-body list-group__text">
                                                <strong>Praesent commodo cursus magnavel scelerisque nisl</strong>
                                                <small>$2,560,000 . 08 Beds . 07 Baths</small>
                                            </div>
                                        </a>

                                        <a href="" class="list-group-item media">
                                            <div class="pull-left">
                                                <img src="img/demo/listing/thumbs/5.jpg" alt="" class="list-group__img" width="65">
                                            </div>
                                            <div class="media-body list-group__text">
                                                <strong>Lorem ipsum dolor sitamet consectetur adipiscing elit</strong>
                                                <small>$1,140,650 . 06 Beds . 03 Baths</small>
                                            </div>
                                        </a>

                                        <a href="" class="list-group-item media">
                                            <div class="pull-left">
                                                <img src="img/demo/listing/thumbs/6.jpg" alt="" class="list-group__img" width="65">
                                            </div>
                                            <div class="media-body list-group__text">
                                                <strong>Fusce dapibus accursus commodo</strong>
                                                <small>$780,900 . 02 Beds . 02 Baths</small>
                                            </div>
                                        </a>

                                        <div class="p-10"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </section>
        @endsection
