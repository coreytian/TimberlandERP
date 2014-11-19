<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TimberLand Flooring ERP Admin</title>

    <link href="css/style.default.css" rel="stylesheet">
    <link href="css/jquery.datatables.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-timepicker.min.css" />
    <link rel="stylesheet" href="css/jquery.tagsinput.css" />
    <link href="timberland/timberland.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Preloader -->
<!--<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>-->


<section>

    <div class="leftpanel">

        <div class="logopanel">
            <a href="index.php"><img src="images/logo.png" style="margin-left:20px;width: 80%"></a>
        </div><!-- logopanel -->

        <div class="leftpanelinner">

            <!-- This is only visible to small devices -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media userlogged">
                    <img alt="" src="images/photos/jacky.jpg" class="media-object">
                    <div class="media-body">
                        <h4>Admin</h4>
                        <span>""</span>
                    </div>
                </div>

                <h5 class="sidebartitle actitle">Account</h5>
                <ul class="nav nav-pills nav-stacked nav-bracket mb30">
                    <li><a href=""><i class="fa fa-user"></i> <span>Profile</span></a></li>
                    <li><a href=""><i class="fa fa-cog"></i> <span>Account Settings</span></a></li>
                    <li><a href=""><i class="fa fa-question-circle"></i> <span>Help</span></a></li>
                    <li><a href="signout.html"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>

            <h5 class="sidebartitle">Navigation</h5>
            <ul class="nav nav-pills nav-stacked nav-bracket">
                <li id="nav-dashboard"><a href="index.php"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                <li id="nav-quotes"><a href="quotes.php"><i class="fa fa-th-list"></i> <span>Quotes</span></a></li>
                <li id="nav-makequotesPC"><a href="createQuote.php"><i class="fa fa-pencil"></i> <span>Make A Quote</span></a></li>
<!--                <li id="nav-makequotes"><a href="../page/index.php"><i class="fa fa-tablet"></i> <span>Make A Quote On iPad</span></a></li>-->
                <li id="nav-bin"><a href="bin.php"><i class="fa fa-trash-o"></i> <span>Recycle Bin</span></a></li>
                <li id="nav-websiteDevelopment"><a href="development.php"><i class="fa fa-wrench"></i> <span>Website Development</span></a></li>

            </ul>


        </div><!-- leftpanelinner -->
    </div><!-- leftpanel -->

    <div class="mainpanel">

        <div class="headerbar">

            <a class="menutoggle"><i class="fa fa-bars"></i></a>

            <form class="searchform" action="index.php" method="post">
                <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
            </form>

            <div class="header-right">
                <ul class="headermenu">



                    <li>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <img src="images/photos/jacky.jpg" alt="" />
                                Admin
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
<!--                                <li><a href="#"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>-->
                                <li><a href="../"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
                            </ul>
                        </div>
                    </li>
                    <!--<li>
                        <button id="chatview" class="btn btn-default tp-icon chat-icon">
                            <i class="glyphicon glyphicon-comment"></i>
                        </button>
                    </li>-->
                </ul>
            </div><!-- header-right -->

        </div><!-- headerbar -->