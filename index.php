<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">


  <title>Timberland Flooring ERP Admin System</title>

  <link href="admin/css/style.default.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="admin/js/html5shiv.js"></script>
  <script src="admin/js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="signin" style="background: #EFF3F4;">


<section>
  
    <div class="signinpanel">
        
        <div class="row">
            
            <div class="col-md-7">
                
                <div class="signin-info">
                    <div class="logopanel">
                        <img src="admin/images/logo.png" style="width: 60%">
                        <!-- h1><span>[</span> Timberland <span>]</span></h1 -->

                    </div><!-- logopanel -->
                
                    <div class="mb20"></div>
                
                    <h4><strong>Welcome to Timberland Flooring ERP System</strong></h4>
                    <div class="mb20"></div>

                </div><!-- signin0-info -->
                            </div><!-- col-sm-7 -->

            <div class="col-md-5">
                
                <form method="get" action="admin/index.php">
                    <h4 class="nomargin">Sign In</h4>
                    <p class="mt5 mb20">Login to access your account.</p>
                
                    <input type="text" class="form-control uname" placeholder="Username" />
                    <input type="password" class="form-control pword" placeholder="Password" />
                    <a href=""><small>Forgot Your Password?</small></a>
                    <button class="btn btn-success btn-block">Sign In</button>
                    <a href="admin/createQuote.php" class="btn btn-success btn-block" style="color:#fff;background-color: #fc9219;border-color: #ccc;">Make A Quote On iPad</a>

                </form>
            </div><!-- col-sm-5 -->
            
        </div><!-- row -->
        
        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2014-2015. All Rights Reserved. Timberland Flooring
            </div>
            <div class="pull-right">
                Created By: Haohe Tian
            </div>
        </div>
        
    </div><!-- signin -->
  
</section>


<script src="admin/js/jquery-1.11.1.min.js"></script>
<script src="admin/js/jquery-migrate-1.2.1.min.js"></script>
<script src="admin/js/bootstrap.min.js"></script>
<script src="admin/js/modernizr.min.js"></script>
<script src="admin/js/jquery.sparkline.min.js"></script>
<script src="admin/js/jquery.cookies.js"></script>

<script src="admin/js/toggles.min.js"></script>
<script src="admin/js/retina.min.js"></script>

<script src="admin/js/custom.js"></script>
<script>
    jQuery(document).ready(function(){
        
        // Please do not use the code below
        // This is for demo purposes only
        var c = jQuery.cookie('change-skin');
        if (c && c == 'greyjoy') {
            jQuery('.btn-success').addClass('btn-orange').removeClass('btn-success');
        } else if(c && c == 'dodgerblue') {
            jQuery('.btn-success').addClass('btn-primary').removeClass('btn-success');
        } else if (c && c == 'katniss') {
            jQuery('.btn-success').addClass('btn-primary').removeClass('btn-success');
        }
    });
</script>

</body>
</html>
