@extends('layouts/master')

@section('content')
    <section class="content-main">
        <div class="row">
            <div class="col-md-10 col-md-offset-2 action-strip">
                <div class="btn-block">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary">Trip Reports</button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary">Hatch Reports</button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary">Fisheries</button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary">Fly Patterns</button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary">Fly Boxes</button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary">Fish Species</button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary">Uploads</button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>

                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary">Profile</button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>

                    </div>
                </div>
            </div>

        </div>
        <hr class="top-separator"/>
        <div class="row">
            <div class="col-md-2 col-md-offset-0">
                <div class="panel panel-danger">
                    <div class="panel-heading">Your Danger Stuff</div>
                    <div class="panel-body">
                        <h4>Learn the terrain.</h4>
                        <img src="/img/TypicalEastGallatinRiverRainbowTrout.jpg"/>
                        <ul>
                            <li><a href="#menu1">Menu Item</a></li>
                            <li><a href="#menu2">Menu Item</a></li>
                            <li><a href="#menu3">Menu Item</a></li>
                        </ul>

                    </div>
                </div>
                <div class="panel panel-dark">
                    <div class="panel-heading">Your Dark Stuff</div>
                    <div class="panel-body">

                        <img src="/img/Large_brown_trout_being_released.jpg"/>

                        <p>Say ALL THE THINGS!</p>

                        <h4>Hi, my name is</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-7 col-md-offset-0">
                <div class="panel with-nav-tabs panel-default">
                    <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">Default 1</a></li>
                            <li><a href="#tab2default" data-toggle="tab">Default 2</a></li>
                            <li><a href="#tab3default" data-toggle="tab">Default 3</a></li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#tab4default" data-toggle="tab">Default 4</a></li>
                                    <li><a href="#tab5default" data-toggle="tab">Default 5</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1default">
                                <article class="article">
                                    <h2>Mobile Fly Fishing Tools </h2>

                                    <p>Track your angling success on-stream with offline fisheries maps and
                                        automatically correlate GPS information with weather, hydrology, hatch activity,
                                        and other custom data that you collect
                                        <em><strong>without interrupting your cast.</strong></em>
                                    </p>

                                    <p>Shoot a video of your buddy catching a fish deep in the backwoods and we can have
                                        it posted to your fly fishing journal
                                        before you get home. Keep it a secret forever, show it to that buddy of yours,
                                        or share it with the world. <strong>It is up to you.</strong>
                                    </p>
                                </article>
                            </div>
                            <div class="tab-pane fade" id="tab2default">
                                <h3><em>The</em> premium app for hardcore fly anglers</h3>

                                <h3>Cultivate fly fishing knowledge using real data.</h3>

                                <p>There is a lot of mythology in the sport of fly fishing, and much of it is accepted
                                    as sanctified wisdom, but there is precious little
                                    empirical data available. We are building a data collection and reporting service
                                    for fly fishers who want facts, not fables. Take
                                    control of your fly fishing and catch more fish!
                                </p>

                            </div>
                            <div class="tab-pane fade" id="tab3default">


                                <p>Automatically log geospatial information <strong>while fishing.</strong> When you
                                    land a fish, take a picture and it will be
                                    tagged with your location so you can track what really works on the water. Plan your
                                    fishing trip using informative mobile
                                    maps and plot your activities on the map as you fish. You will then be able to
                                    review and analyze all of your journal's
                                    information to help you catch more fish.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="tab4default">
                                <h3>Keep it secret, or pay it forward; The choice is yours.</h3>

                                <p>You can keep your favorite spots private to protect sensitive fisheries, you can
                                    share some reports with your friends, and you
                                    can post public data
                                    if you like. Your privacy is important, and the conservation of our most pristine
                                    waters is more so. We don't, and never
                                    will, share your posts or personal information with any third party without your
                                    explicit permission.
                                </p>

                            </div>
                            <div class="tab-pane fade" id="tab5default">
                                <h3>You don't have to be experienced, just enthusiastic.</h3>

                                <p>We want to help the aspiring fly angler who doesn't know a Coachman from a Humpy to
                                    pick the right fly, and the jaded veteran
                                    trout bum to dig even deeper, with flexible reporting tools, to find new answers to
                                    old questions. Maybe our public data
                                    API service will benefit science someday. <strong>Did I mention it's free?</strong>
                                    The data API and website are free for everyone, the mobile apps will cost an
                                    undetermined pittance to keep us from living <em>in a van down by the river.</em>
                                    Come to think of it, that doesn't sound too bad.
                                </p>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Recent Posts</div>
                    <div class="panel-body">
                        <article class="article">
                            <h1><a href="http://api.hatch.es">Check out the API!</a></h1>

                            <h2>Mobile apps will release in Q3 2015</h2>
                        </article>
                        <article class="article">
                            <h2>Mobile Fly Fishing Tools </h2>

                            <p>Track your angling success on-stream with offline fisheries maps and
                                automatically correlate GPS information with weather, hydrology, hatch activity, and
                                other custom data that you collect
                                <em><strong>without interrupting your cast.</strong></em></p>

                            <p>Shoot a video of your buddy catching a fish deep in the backwoods and we can have it
                                posted to your fly fishing journal
                                before you get home. Keep it a secret forever, show it to that buddy of yours, or share
                                it with the world. <strong>It is up to you.</strong></p>

                            <h3><em>The</em> premium app for hardcore fly anglers</h3>

                            <h3>Cultivate fly fishing knowledge using real data.</h3>

                            <p>There is a lot of mythology in the sport of fly fishing, and much of it is accepted as
                                sanctified wisdom, but there is precious little
                                empirical data available. We are building a data collection and reporting service for
                                fly fishers who want facts, not fables. Take
                                control of your fly fishing and catch more fish!</p>

                            <h2>Learn the terrain.</h2>


                        </article>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-0">
                <div class="panel panel-warning">
                    <div class="panel-heading">Alerts</div>
                    <div class="panel-body">
                        <article class="article">
                            <h2>Mobile Fly Fishing Tools </h2>


                            <h3>Cultivate fly fishing knowledge using real data.</h3>


                        </article>

                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">Your Info</div>
                    <div class="panel-body">
                        <img src="/img/Large_brown_trout_being_released.jpg"/>
                        <ul>
                            <li>List Item</li>
                            <li><a href="#menu2">Menu Item</a></li>
                            <li><a href="#menu3">Menu Item</a></li>
                        </ul>

                        <h5>Baloney text.</h5>

                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-2 col-md-offset-0">
                <div class="panel panel-dark">

                    <div class="panel-body">

                        <img src="/img/Large_brown_trout_being_released.jpg"/>

                        <h5>Kill me now</h5>
                        <strong>reasons:</strong>
                        <ol>
                            <li>Vertical alignment</li>
                            <li>Tweeter Bootsrap</li>
                            <li>Typography</li>
                            <li>Entropy</li>
                            <li>Sophomoric Interpretations of Existentialism</li>
                        </ol>
                    </div>
                </div>

            </div>
            <div class="col-md-7 col-md-offset-0">
                <div class="panel panel-dark">
                    <div class="panel-body">
                        <section class="jumbotron jumbotron-warning">
                            <h1>Why U No have CONTENT?!</h1>
                        </section>
                    </div>

                </div>
            </div>
            <div class="col-smd3 col-sm-offset-0">
                <h3>Grumpy Wizards Make a Toxic Brew</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-offset-0">
                <div class="panel panel-dark">

                    <div class="panel-body">

                        <img src="/img/Large_brown_trout_being_released.jpg"/>

                        <h5>Kill me now</h5>
                        <strong>reasons:</strong>
                        <ol>
                            <li>Vertical alignment</li>
                            <li>Tweeter Bootsrap</li>
                            <li>Typography</li>
                            <li>Entropy</li>
                            <li>Sophomoric Interpretations of Existentialism</li>
                        </ol>
                    </div>
                </div>

            </div>
            <div class="col-md-10 col-md-offset-0">
                <section class="jumbotron jumbotron-warning">
                    <h1>Here is Content</h1>
                    <article class="article">
                        <h2>Mobile Fly Fishing Tools </h2>

                        <p>Track your angling success on-stream with offline fisheries maps and
                            automatically correlate GPS information with weather, hydrology, hatch activity, and other
                            custom data that you collect
                            <em><strong>without interrupting your cast.</strong></em></p>

                        <p>Shoot a video of your buddy catching a fish deep in the backwoods and we can have it posted
                            to your fly fishing journal
                            before you get home. Keep it a secret forever, show it to that buddy of yours, or share it
                            with the world. <strong>It is up to you.</strong></p>

                        <h3><em>The</em> premium app for hardcore fly anglers</h3>
                    </article>
                </section>
                </div>
            </div>
        </div>
    </section>

@endsection
