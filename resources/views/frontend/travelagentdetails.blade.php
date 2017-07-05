@extends('main')
@section('title','Travel Agency')
    @section('content')
        <section class="section">
            <div class="container">
                @include('partials._search')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card profile">
                                    <div class="profile__img"> <img src="img/demo/people/12.jpg" alt=""> </div>
                                    <div class="profile__info"> <span class="label label-warning">Pro Member</span> <span class="label label-success">Premium Agent</span>
                                        <div class="profile__review"> <span class="rmd-rate"></span> <span>(263 Review)</span> </div>
                                        <ul class="rmd-contact-list">
                                            <li><i class="zmdi zmdi-assignment"></i>License Number(s): #10491201592</li>
                                            <li><i class="zmdi zmdi-phone"></i>308-360-8938</li>
                                            <li><i class="zmdi zmdi-email"></i>malinda@inbound.plus</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="tab-nav tab-nav--justified" data-rmd-breakpoint="500">
                                        <div class="tab-nav__inner"><a class="tab-nav__toggle" data-toggle="dropdown">Properties</a>
                                            <ul role="tablist">
                                                <li><a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">Overview</a></li>
                                                <li class="active"><a href="#properties" aria-controls="properties" role="tab" data-toggle="tab">Properties</a></li>
                                                <li><a href="#review" aria-controls="review" role="tab" data-toggle="tab">Reviews</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-content">


                                        <div role="tabpanel" class="tab-pane" id="overview">
                                            <div class="card__body">
                                                <div class="card__sub row rmd-stats">
                                                    <div class="col-xs-4">
                                                        <div class="rmd-stats__item mdc-bg-teal-400">
                                                            <h2>374</h2>
                                                            <small>Properties Sold</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <div class="rmd-stats__item mdc-bg-purple-400">
                                                            <h2>980</h2>
                                                            <small>Total Listings</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <div class="rmd-stats__item mdc-bg-red-400">
                                                            <h2>3413</h2>
                                                            <small>User Favourites</small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card__sub">
                                                    <h4>About Robert B. Osborne</h4>

                                                    <p>Pellentesque vitae quam quis tellus dignissim faucibus. Suspendisse mattis felis at faucibus lobortis. Sed sit amet tellus dolor. Fusce quis sollicitudin velit. Praesent gravida ullamcorper lectus et tincidunt. Phasellus lectus quam, porta pharetra feugiat in, auctor eget dolor.</p>
                                                    <p>Vestibulum tincidunt imperdiet egestas. In in nunc vitae elit tincidunt tristique id eu justo. Quisque gravida maximus orci, vulputate pharetra mauris commodo at. Mauris eget fermentum ipsum, quis faucibus neque. Fusce eleifend sapien sit amet convallis rhoncus. Proin commodo lacinia lectus, et tempus turpis.</p>
                                                </div>

                                                <div class="card__sub">
                                                    <h4>Specialties</h4>
                                                    <p>Property Management, Buyer's Agent, Listing Agent</p>
                                                </div>

                                                <div class="card__sub">
                                                    <h4>Education</h4>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Duis mollis, est non commodo luctuso.</p>
                                                </div>

                                                <div class="card__sub">
                                                    <h4>Contact Information</h4>

                                                    <ul class="rmd-contact-list">
                                                        <li><i class="zmdi zmdi-phone"></i>308-360-8938</li>
                                                        <li><i class="zmdi zmdi-email"></i>robertbosborne@inbound.plus</li>
                                                        <li><i class="zmdi zmdi-facebook"></i>robertbosborne</li>
                                                        <li><i class="zmdi zmdi-twitter"></i>@robertbosborne</li>
                                                        <li><i class="zmdi zmdi-pin"></i>5470 Madison Street Severna Park, MD 21146</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane active" id="properties">
                                            <div class="listings-list listings-list--alt">
                                                <div class="listings-grid__item"> <a href="listing-detail.html" class="media">
                                                        <div class="listings-grid__main pull-left"> <img src="img/demo/listing/thumbs/15.jpg" alt="">
                                                            <div class="listings-grid__price">$1,200,000</div>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="listings-grid__body"> <small>304 East Wenatchee, WA 98801</small>
                                                                <h5>Nullam iddolor idnibh ultricies vehicula</h5>
                                                            </div>
                                                            <ul class="listings-grid__attrs">
                                                                <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 01</li>
                                                                <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                                                                <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 00</li>
                                                            </ul>
                                                        </div>
                                                    </a> </div>
                                                <div class="listings-grid__item listings-grid__item--sold"> <a href="listing-detail.html" class="media">
                                                        <div class="pull-left listings-grid__main"> <img src="img/demo/listing/thumbs/1.jpg" alt="">
                                                            <div class="listings-grid__price">$1,175,000</div>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="listings-grid__body"> <small>21 Shop St, San Francisco</small>
                                                                <h5>Integer tempor luctus maximus</h5>
                                                            </div>
                                                            <ul class="listings-grid__attrs">
                                                                <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                                                                <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                                                                <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                                                            </ul>
                                                        </div>
                                                    </a> </div>
                                                <div class="listings-grid__item listings-grid__item--sold"> <a href="listing-detail.html" class="media">
                                                        <div class="pull-left listings-grid__main"> <img src="img/demo/listing/thumbs/2.jpg" alt="">
                                                            <div class="listings-grid__price">$1,200,000</div>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="listings-grid__body"> <small>Beverly Hills, CA 90210</small>
                                                                <h5>Duis sollicitudin ante bibendum</h5>
                                                            </div>
                                                            <ul class="listings-grid__attrs">
                                                                <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                                                                <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 03</li>
                                                                <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
                                                            </ul>
                                                        </div>
                                                    </a> </div>
                                                <div class="listings-grid__item"> <a href="listing-detail.html" class="media">
                                                        <div class="pull-left listings-grid__main"> <img src="img/demo/listing/thumbs/3.jpg" alt="">
                                                            <div class="listings-grid__price">$910,000</div>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="listings-grid__body"> <small>132 04th St, San Francisco</small>
                                                                <h5>Fusce quis libero nonorcious</h5>
                                                            </div>
                                                            <ul class="listings-grid__attrs">
                                                                <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 02</li>
                                                                <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                                                                <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
                                                            </ul>
                                                        </div>
                                                    </a> </div>
                                                <div class="listings-grid__item"> <a href="listing-detail.html" class="media">
                                                        <div class="pull-left listings-grid__main"> <img src="img/demo/listing/thumbs/4.jpg" alt="">
                                                            <div class="listings-grid__price">$2,542,000</div>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="listings-grid__body"> <small>132 Lockslee, San Francisco</small>
                                                                <h5>Pellentesque habitant</h5>
                                                            </div>
                                                            <ul class="listings-grid__attrs">
                                                                <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 05</li>
                                                                <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 03</li>
                                                                <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 03</li>
                                                            </ul>
                                                        </div>
                                                    </a> </div>
                                                <div class="listings-grid__item"> <a href="listing-detail.html" class="media">
                                                        <div class="pull-left listings-grid__main"> <img src="img/demo/listing/thumbs/5.jpg" alt="">
                                                            <div class="listings-grid__price">$823,000</div>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="listings-grid__body"> <small>San Francisco, CA 900212 </small>
                                                                <h5>Maecenas sed purus lorem aliquet cursus</h5>
                                                            </div>
                                                            <ul class="listings-grid__attrs">
                                                                <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 01</li>
                                                                <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                                                                <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 0</li>
                                                            </ul>
                                                        </div>
                                                    </a> </div>
                                                <div class="listings-grid__item"> <a href="listing-detail.html" class="media">
                                                        <div class="pull-left listings-grid__main"> <img src="img/demo/listing/thumbs/6.jpg" alt="">
                                                            <div class="listings-grid__price">$1,120,000</div>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="listings-grid__body"> <small>21120 Broadway St, San Fransisco</small>
                                                                <h5>Maecenas sed purus at lorem</h5>
                                                            </div>
                                                            <ul class="listings-grid__attrs">
                                                                <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                                                                <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                                                                <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                                                            </ul>
                                                        </div>
                                                    </a> </div>
                                                <div class="listings-grid__item listings-grid__item--sold"> <a href="listing-detail.html" class="media">
                                                        <div class="pull-left listings-grid__main"> <img src="img/demo/listing/thumbs/7.jpg" alt="">
                                                            <div class="listings-grid__price">$3,000,000</div>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="listings-grid__body"> <small>San Francisco, CA 937202</small>
                                                                <h5>Nullam finibus libero at hendrerit</h5>
                                                            </div>
                                                            <ul class="listings-grid__attrs">
                                                                <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 06</li>
                                                                <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 05</li>
                                                                <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                                                            </ul>
                                                        </div>
                                                    </a> </div>
                                                <div class="listings-grid__item"> <a href="listing-detail.html" class="media">
                                                        <div class="pull-left listings-grid__main"> <img src="img/demo/listing/thumbs/8.jpg" alt="">
                                                            <div class="listings-grid__price">$1,175,000</div>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="listings-grid__body"> <small>4313 Beverly Hills, CA 90210</small>
                                                                <h5>Donec ullamcorper nulla non metus auctor fringilla</h5>
                                                            </div>
                                                            <ul class="listings-grid__attrs">
                                                                <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                                                                <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                                                                <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                                                            </ul>
                                                        </div>
                                                    </a> </div>
                                            </div>
                                            <div class="load-more m-b-30"> <a href=""><i class="zmdi zmdi-refresh-alt"></i> Load more listings</a> </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="review">
                                            <div class="card__body">
                                                <div class="card__sub">
                                                    <div class="list-group list-group--bordered list-group--condensed list-group--striped">
                                                        <div class="media list-group-item">
                                                            <div class="pull-right">
                                                                <div class="rmd-rate"></div>
                                                            </div>
                                                            <div class="media-body">
                                                                Fusce dapibus tellus accursus commodo
                                                            </div>
                                                        </div>
                                                        <div class="media list-group-item">
                                                            <div class="pull-right">
                                                                <div class="rmd-rate"></div>
                                                            </div>
                                                            <div class="media-body">
                                                                Nulla vitae elit libero a pharetra augue dolor
                                                            </div>
                                                        </div>
                                                        <div class="media list-group-item">
                                                            <div class="pull-right">
                                                                <div class="rmd-rate"></div>
                                                            </div>
                                                            <div class="media-body">
                                                                Nullam quis risus eget urna mollis ornare vel eu leo
                                                            </div>
                                                        </div>
                                                        <div class="media list-group-item">
                                                            <div class="pull-right">
                                                                <div class="rmd-rate"></div>
                                                            </div>
                                                            <div class="media-body">
                                                                Curabitur blandit tempus porttitor
                                                            </div>
                                                        </div>
                                                        <div class="media list-group-item">
                                                            <div class="pull-right">
                                                                <div class="rmd-rate"></div>
                                                            </div>
                                                            <div class="media-body">
                                                                Aenean lacinia bibendum nulla sed consectetur
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card__sub">
                                                    <h4>263 User reviews</h4>

                                                    <div class="agent-reviews__item">
                                                        <div class="text-strong">By Jeannette Newport on 20th June 2016</div>
                                                        <div class="rmd-rate"></div>

                                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Sed posuere consectetur est at lobortis. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                                    </div>

                                                    <div class="agent-reviews__item">
                                                        <div class="text-strong">By Cammy Tubman on 15th June 2016</div>
                                                        <div class="rmd-rate"></div>

                                                        <p>Cras mattis consectetur purus sit amet fermentum Vestibulum id ligula porta felis euismod semper Cras mattis consectetur purus sit amet fermentum.</p>
                                                    </div>

                                                    <div class="agent-reviews__item">
                                                        <div class="text-strong">By Jayson Leffingwell on 2nd May 2016</div>
                                                        <div class="rmd-rate"></div>

                                                        <p>Maecenas faucibus mollis interdum. Nullam quis risus eget urna mollis ornare vel eu leo. Vestibulum id ligula porta felis euismod semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam quis risus eget urna mollis ornare vel eu leo. Donec id elit non mi porta gravida at eget metus.</p>
                                                        <p>Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nulla vitae elit libero, a pharetra augue. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
                                                        <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas faucibus mollis interdum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper. Etiam porta sem malesuada magna mollis euismod. Curabitur blandit tempus porttitor.</p>
                                                    </div>
                                                </div>

                                                <div class="load-more">
                                                    <a href=""><i class="zmdi zmdi-refresh-alt"></i> Load more reviews</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </section>
    @endsection
