<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>



<section>

    <div class="leftpanel">

        <div class="logopanel">
            <h1><span>[</span> EYM <span>]</span></h1>
        </div><!-- logopanel -->

        <div class="leftpanelinner">

            <!-- This is only visible to small devices -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media userlogged">
                    <img alt="" src="<?php echo base_url() ?>assets/images/photos/loggeduser.png" class="media-object">
                    <div class="media-body">
                        <h4>Alicia Queen</h4>
                        <span>"Secretaria"</span>
                    </div>
                </div>

                <h5 class="sidebartitle actitle">Cuenta</h5>
                <ul class="nav nav-pills nav-stacked nav-bracket mb30">
                    <li><a href="profile.html"><i class="fa fa-user"></i> <span>Perfil</span></a></li>
                    <li><a href=""><i class="fa fa-cog"></i> <span>Ajustes</span></a></li>
                    <li><a href=""><i class="fa fa-question-circle"></i> <span>Ayuda</span></a></li>
                    <li><a href="signout.html"><i class="fa fa-sign-out"></i> <span>Cerrar sesion</span></a></li>
                </ul>
            </div>

            <!-- menu -->

            <h5 class="sidebartitle">Menu</h5>
            <ul class="nav nav-pills nav-stacked nav-bracket">
                <li class="nav-parent"><a href="<?php echo base_url() ?>"><i class="fa fa-asterisk"></i> <span>Vehiculos</span></a>
                    <ul class="children">
                        <li><a href="<?php echo base_url()?>vehiculos/tecnicoVehiculo">Listado de Vehiculos</a></li>
                        <li><a href="<?php echo base_url()?>vehiculos/detalleVehiculo">Detalle de Vehiculos</a></li>
                        <li><a href="<?php echo base_url()?>vehiculos/diagVehiculo">Diagnosticar Vehiculos</a></li>
                    </ul>
                </li>
                <li class="nav-parent"><a href="<?php echo base_url()?>"><i class="fa fa-list-alt"></i> <span>Repuesto</span></a>
                    <ul class="children">
                        <li><a>Solicitar</a></li>
                    </ul>
                </li>

            </ul>

            <div class="infosummary">
                <h5 class="sidebartitle">Resumen</h5>
                <ul>
                    <li>
                        <div class="datainfo">
                            <span class="text-muted">Ordenes asignadas</span>
                            <h4>115</h4>
                        </div>
                        <div id="sidebar-chart" class="chart"></div>
                    </li>
                    <li>
                        <div class="datainfo">
                            <span class="text-muted">Ordenes en proceso</span>
                            <h4>228</h4>
                        </div>
                        <div id="sidebar-chart2" class="chart"></div>
                    </li>
                    <li>
                        <div class="datainfo">
                            <span class="text-muted">Ordenes listas</span>
                            <h4>110</h4>
                        </div>
                        <div id="sidebar-chart3" class="chart"></div>
                    </li>
                </ul>
            </div><!-- infosummary -->

        </div><!-- leftpanelinner -->
    </div><!-- leftpanel -->

    <div class="mainpanel">

        <div class="headerbar">

            <a class="menutoggle"><i class="fa fa-bars"></i></a>

            <!-- form class="searchform" action="index.html" method="post">
                <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
            </form -->

            <div class="header-right">
                <ul class="headermenu">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span class="badge">2</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-head pull-right">
                                <h5 class="title">2 Newly Registered Users</h5>
                                <ul class="dropdown-list user-list">
                                    <li class="new">
                                        <div class="thumb"><a href=""><img src="<?php echo base_url() ?>assets/images/photos/user1.png" alt="" /></a></div>
                                        <div class="desc">
                                            <h5><a href="">Draniem Daamul (@draniem)</a> <span class="badge badge-success">new</span></h5>
                                        </div>
                                    </li>
                                    <li class="new">
                                        <div class="thumb"><a href=""><img src="<?php echo base_url() ?>assets/images/photos/user2.png" alt="" /></a></div>
                                        <div class="desc">
                                            <h5><a href="">Zaham Sindilmaca (@zaham)</a> <span class="badge badge-success">new</span></h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb"><a href=""><img src="<?php echo base_url() ?>assets/images/photos/user3.png" alt="" /></a></div>
                                        <div class="desc">
                                            <h5><a href="">Weno Carasbong (@wenocar)</a></h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb"><a href=""><img src="<?php echo base_url() ?>assets/images/photos/user4.png" alt="" /></a></div>
                                        <div class="desc">
                                            <h5><a href="">Nusja Nawancali (@nusja)</a></h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb"><a href=""><img src="<?php echo base_url() ?>assets/images/photos/user5.png" alt="" /></a></div>
                                        <div class="desc">
                                            <h5><a href="">Lane Kitmari (@lane_kitmare)</a></h5>
                                        </div>
                                    </li>
                                    <li class="new"><a href="">See All Users</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-envelope"></i>
                                <span class="badge">1</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-head pull-right">
                                <h5 class="title">You Have 1 New Message</h5>
                                <ul class="dropdown-list gen-list">
                                    <li class="new">
                                        <a href="">
                                            <span class="thumb"><img src="<?php echo base_url() ?>assets/images/photos/user1.png" alt="" /></span>
                                                    <span class="desc">
                                                        <span class="name">Draniem Daamul <span class="badge badge-success">new</span></span>
                                                        <span class="msg">Lorem ipsum dolor sit amet...</span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="thumb"><img src="<?php echo base_url() ?>assets/images/photos/user2.png" alt="" /></span>
                                                    <span class="desc">
                                                        <span class="name">Nusja Nawancali</span>
                                                        <span class="msg">Lorem ipsum dolor sit amet...</span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="thumb"><img src="<?php echo base_url() ?>assets/images/photos/user3.png" alt="" /></span>
                                                    <span class="desc">
                                                        <span class="name">Weno Carasbong</span>
                                                        <span class="msg">Lorem ipsum dolor sit amet...</span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="thumb"><img src="<?php echo base_url() ?>assets/images/photos/user4.png" alt="" /></span>
                                                    <span class="desc">
                                                        <span class="name">Zaham Sindilmaca</span>
                                                        <span class="msg">Lorem ipsum dolor sit amet...</span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="thumb"><img src="<?php echo base_url() ?>assets/images/photos/user5.png" alt="" /></span>
                                                    <span class="desc">
                                                        <span class="name">Veno Leongal</span>
                                                        <span class="msg">Lorem ipsum dolor sit amet...</span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li class="new"><a href="">Read All Messages</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-globe"></i>
                                <span class="badge">5</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-head pull-right">
                                <h5 class="title">You Have 5 New Notifications</h5>
                                <ul class="dropdown-list gen-list">
                                    <li class="new">
                                        <a href="">
                                            <span class="thumb"><img src="<?php echo base_url() ?>assets/images/photos/user4.png" alt="" /></span>
                                                    <span class="desc">
                                                        <span class="name">Zaham Sindilmaca <span class="badge badge-success">new</span></span>
                                                        <span class="msg">is now following you</span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li class="new">
                                        <a href="">
                                            <span class="thumb"><img src="<?php echo base_url() ?>assets/images/photos/user5.png" alt="" /></span>
                                                    <span class="desc">
                                                        <span class="name">Weno Carasbong <span class="badge badge-success">new</span></span>
                                                        <span class="msg">is now following you</span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li class="new">
                                        <a href="">
                                            <span class="thumb"><img src="<?php echo base_url() ?>assets/images/photos/user3.png" alt="" /></span>
                                                    <span class="desc">
                                                        <span class="name">Veno Leongal <span class="badge badge-success">new</span></span>
                                                        <span class="msg">likes your recent status</span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li class="new">
                                        <a href="">
                                            <span class="thumb"><img src="<?php echo base_url() ?>assets/images/photos/user3.png" alt="" /></span>
                                                    <span class="desc">
                                                        <span class="name">Nusja Nawancali <span class="badge badge-success">new</span></span>
                                                        <span class="msg">downloaded your work</span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li class="new">
                                        <a href="">
                                            <span class="thumb"><img src="<?php echo base_url() ?>assets/images/photos/user3.png" alt="" /></span>
                                                    <span class="desc">
                                                        <span class="name">Nusja Nawancali <span class="badge badge-success">new</span></span>
                                                        <span class="msg">send you 2 messages</span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li class="new"><a href="">See All Notifications</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url() ?>assets/images/photos/loggeduser.png" alt="" />
                                John Doe
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                                <li><a href="profile.html"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
                                <li><a href="signin.html"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button id="chatview" class="btn btn-default tp-icon chat-icon">
                            <i class="glyphicon glyphicon-comment"></i>
                        </button>
                    </li>
                </ul>
            </div><!-- header-right -->

        </div><!-- headerbar -->

        <div class="pageheader">
            <h2><i class="fa fa-home"></i> Blank Page <span>Subtitle goes here...</span></h2>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="index.html">Bracket</a></li>
                    <li class="active">Blank</li>
                </ol>
            </div>
        </div>
